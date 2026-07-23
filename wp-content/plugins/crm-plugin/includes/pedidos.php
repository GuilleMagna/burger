<?php
function procesar_pedido(){
    
	$dni 			= sanitize_text_field( $_POST['dni'] );
	$nombre			= sanitize_text_field( $_POST['nombre'] );
	$apellido		= sanitize_text_field( $_POST['apellido'] );
	$direccion		= sanitize_text_field( $_POST['direccion'] );
	$codigo_postal	= sanitize_text_field( $_POST['cp'] );
	$ciudad			= sanitize_text_field( $_POST['ciudad'] );
	$telefono		= sanitize_text_field( $_POST['telefono'] );
	$payment		= sanitize_text_field( $_POST['payment'] );
	$email			= sanitize_email( $_POST['email'] );
	
	$args = array(
	    'post_type'   => 'cliente',
	    'meta_query'  => array(
	        array(
	            'key'     => 'dni', 
	            'value'   => $dni, 
	            'compare' => '='
	        )
	    ),
	    'post_status' => 'publish',  
	    'numberposts' => 1  
	); 
	
	$existe_cliente = get_posts( $args );
	
	if( empty( $existe_cliente ) ):
	
		$cliente_id = wp_insert_post( array(
		    'post_type'     => 'cliente',
		    'post_title'    => $nombre.' '.$apellido, 
		    'post_status'   => 'publish'
		));
		
	else:
	
		$cliente_id = $existe_cliente[0]->ID;
		
	endif;
	
	if( $cliente_id ){
	    update_post_meta( $cliente_id, 'dni', $dni );
	    update_post_meta( $cliente_id, 'nombre', $nombre );
        update_post_meta( $cliente_id, 'apellido', $apellido );
	    update_post_meta( $cliente_id, 'direccion', $direccion );
	    update_post_meta( $cliente_id, 'ciudad', $ciudad );
	    update_post_meta( $cliente_id, 'codigo_postal', $codigo_postal );
	    update_post_meta( $cliente_id, 'forma_de_pago_preferida', $payment );
	    update_post_meta( $cliente_id, 'telefono', $telefono );
	    update_post_meta( $cliente_id, 'email', $email );
	    update_post_meta( $cliente_id, 'procedencia_del_pedido', 'Página web' );
	    
	} else {
		
	    wp_die( "Error al registrar el cliente." );
	    
	}
	$contenido_del_pedido = $firma_del_pedido = '';
	if( isset( $_POST['productos'] ) and sizeof($_POST['productos']) > 0 ):
        
        $precio_de_venta = $precio = 0;
		$array_del_pedido = $detalle_del_pedido = array();
		foreach( $_POST['productos'] as $key => $qty ): 
			$post_product = get_post( $key );
            $precio = get_field( 'precio', $key );
			$array_del_pedido[] = $key.':'.$qty;
			$detalle_del_pedido[] = $qty. 'u. de '.$post_product->post_title;
			$detalle_del_pedido_repeat[$key]['producto']    = $key;
            $detalle_del_pedido_repeat[$key]['cantidad']    = $qty;
            $detalle_del_pedido_repeat[$key]['precio']      = $precio;
            $precio_de_venta += $precio*$qty;
		endforeach;
		
		$firma_del_pedido = implode( '/', $array_del_pedido );
		$contenido_del_pedido = implode( '<br>', $detalle_del_pedido );
		
	endif; 
	$nro_pedido = get_numero_pedido();
	
	$pedido_id = wp_insert_post( array(
	    'post_type'     => 'pedido',
	    'post_title'    => $nro_pedido,
	    'post_content'	=> $contenido_del_pedido,
	    'post_status'   => 'publish',
	));
	
	if( $pedido_id ){
		
		$estado_inicial = array(); 
		
    	update_field( 'pedido', $detalle_del_pedido_repeat, $pedido_id );
    	
		update_post_meta( $pedido_id, 'cliente', $cliente_id );
		update_post_meta( $pedido_id, 'fecha_de_pedido', current_time( 'd/m/Y' ) );
	    update_post_meta( $pedido_id, 'firma_del_pedido', $firma_del_pedido );
        update_post_meta( $pedido_id, 'precio_de_venta', $precio_de_venta );
	    update_post_meta( $pedido_id, 'forma_de_pago_preferida', $payment );
	    
	    $estado_inicial = get_field( 'estado_inicial', 'option' );
		wp_set_post_terms( $pedido_id, array( $estado_inicial ), 'estado' );
        $comprobante_pedido = generar_pedido_pdf( $pedido_id ); 
        update_field( 'comprobante_pedido', $comprobante_pedido, $pedido_id );
        $result = envio_pedido_nuevo( $_POST, $comprobante_pedido );
	    
	} else {
		
	    wp_die( "Error al registrar el pedido." );
	    
	}
	
    $letras_iniciales = get_field( 'letras_iniciales', 'option' );
    $nro_pedido_clean = str_replace( $letras_iniciales, '', $nro_pedido );
    wp_redirect( SUPERSANO_URL. '/orden/?id='.$nro_pedido_clean );
    exit;
    
}

add_action( 'admin_post_procesar_pedido', 'procesar_pedido' );
add_action( 'admin_post_nopriv_procesar_pedido', 'procesar_pedido' );

function detectar_cambio_estado( $new_status, $old_status, $post ){
    if ($post->post_type == 'pedido' && $old_status == 'pending' && $new_status == 'publish'){
    	envio_cambio_estado_pedido( $post->ID );
    }
    
}

//add_action( 'transition_post_status', 'detectar_cambio_estado', 10, 3 );

function detectar_cambio_usuario_save( $post_id ){
	
	$usuario = '';
	
	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return;
    if( !current_user_can( 'edit_post', $post_id ) ) return;
    if( isset($_POST['post_type']) and $_POST['post_type'] != 'pedido' ) return;
	if( !empty( $_POST['usuario'] ) ):
		$usuario_id = get_field( 'usuario', $_POST['post_id'] );
		
		if( $usuario_id ):
			$usuario_data = get_term_by( 'id', $usuario_id, 'usuario' );
			$usuario = $usuario_data->name;
		endif;
		
		$usuario_nuevo = get_term_by( 'id', $_POST['usuario'], 'usuario' );
		
	elseif( !empty( $_POST['tax_input'] ) ):
		
		$usuario = '';
		if( !empty( $_POST['tax_input'] ) ) $usuario = $_POST['tax_input']['usuario'];
		$usuario_nuevo = get_term_by( 'id', $_POST['acf']['field_663e601fedcc8'], 'usuario' );
	endif;
    if( !empty( $usuario ) and is_object( $usuario_nuevo ) and  $usuario != $usuario_nuevo->name )
    	envio_cambio_usuario_pedido( $post_id );	
    
}

//add_action( 'save_post', 'detectar_cambio_usuario_save', 10, 3 );