<?php

function update_user_profile(){

    if( !is_user_logged_in() ) wp_die( 'No est&aacute;s autorizado.' );
    if( !isset( $_POST['profile_nonce'] ) || !wp_verify_nonce( $_POST['profile_nonce'], 'profile_update_nonce' ) ) wp_die( 'Solicitud no v&aacute;lida.' );
    
    $form_data = $_POST;
	
    $user_id = get_current_user_id();
    
    if( is_wp_error( $user_id ) ) wp_die( 'Hubo un error al actualizar el perfil.' );
    
    $userdata = array(
        'ID' 			=> $user_id,
        'user_email' 	=> sanitize_email( $form_data['email'] ),
        'first_name' 	=> sanitize_text_field( $form_data['nombre'] ),
        'last_name' 	=> sanitize_text_field( $form_data['apellido'] ),
        'display_name' 	=> sanitize_text_field( $form_data['alias'] ),
        'nickname' 		=> sanitize_text_field( $form_data['alias'] ),
        
    );
    
    $user_id = wp_update_user( $userdata );
    
    update_field( 'telefono', $form_data['telefono'], 'user_'.$user_id );
    update_field( 'calendario', $form_data['calendario'], 'user_'.$user_id );
    
	wp_redirect( $form_data['redirect'].'?msg=success' );    
}

add_action( 'admin_post_update_user_profile', 'update_user_profile' );

function update_data_cliente(){

    if( !is_user_logged_in() ) wp_die( 'No est&aacute;s autorizado.' );
    if( !isset( $_POST['cliente_nonce'] ) || !wp_verify_nonce( $_POST['cliente_nonce'], 'data_cliente_nonce' ) ) wp_die( 'Solicitud no v&aacute;lida.' );
	$cliente_id = $_POST['post_id'];
	
	if( is_wp_error( $cliente_id ) ) wp_die( 'Hubo un error al actualizar el cliente.' );
    
    $nombre				= sanitize_text_field( $_POST['nombre'] ) ?? ''; 
    $apellido   		= sanitize_text_field( $_POST['apellido'] ) ?? ''; 
    $email 				= sanitize_email( $_POST['email'] ) ?? '';
    $dni 				= sanitize_text_field( $_POST['dni'] ) ?? ''; 
    $payment 			= sanitize_text_field( $_POST['payment'] ) ?? '';
    $direccion 			= sanitize_text_field( $_POST['direccion'] ) ?? '';
    $ciudad 			= sanitize_text_field( $_POST['ciudad'] ) ?? '';
    $codigo_postal 		= sanitize_text_field( $_POST['codigo_postal'] ) ?? '';
    $telefono           = sanitize_text_field( $_POST['telefono'] ) ?? '';
    $whatsapp 			= sanitize_text_field( $_POST['whatsapp'] ) ?? '';
    
    update_field( 'nombre', 				    $nombre,			$cliente_id );
    update_field( 'apellido', 				    $apellido,			$cliente_id );
    update_field( 'email', 				        $email,			    $cliente_id );
    update_field( 'dni', 						$dni, 				$cliente_id );
    update_field( 'forma_de_pago_preferida',	$payment, 			$cliente_id );
    update_field( 'direccion', 					$direccion, 		$cliente_id );
    update_field( 'ciudad', 					$ciudad, 			$cliente_id );
    update_field( 'codigo_postal', 				$codigo_postal, 	$cliente_id );
    update_field( 'telefono', 				    $telefono, 	        $cliente_id );
    update_field( 'whatsapp', 				    $whatsapp, 	        $cliente_id );
    wp_redirect( $_POST['redirect'].'?msg=success' );    
	
}

add_action( 'admin_post_update_data_cliente', 'update_data_cliente' );

function update_comment_cliente(){

    if( !is_user_logged_in() ) wp_die( 'No est&aacute;s autorizado.' );
    if( !isset( $_POST['comment_nonce'] ) || !wp_verify_nonce( $_POST['comment_nonce'], 'comment_cliente_nonce' ) ) wp_die( 'Solicitud no v&aacute;lida.' );
    
    $current_user = wp_get_current_user();
    
    $form_data = $_POST;
	$post_id = $form_data['post_id'];
	
	$comment = sanitize_text_field( $form_data['comment'] );
	
	$comment_id = sanitize_text_field( $form_data['comment_id'] );
	$comment_action = sanitize_text_field( $form_data['comment_action'] );
	$comment_new = sanitize_text_field( $form_data['comment_new'] );
	
	if( is_wp_error( $post_id ) ) wp_die( 'Hubo un error al actualizar la empresa.' );
	
	if( $comment_action == 'delete' ):
	
		$form_data_comentario = get_field( 'comentarios', $post_id );
		if( isset( $form_data_comentario[$comment_id] ) ) unset( $form_data_comentario[$comment_id] );
		
    	update_field( 'comentarios', $form_data_comentario, $post_id );
		wp_send_json( array( 'response' => $comment ) );
	
	elseif( $comment_action == 'edit' ):
	
		$form_data_comentario = get_field( 'comentarios', $post_id );
		if( isset( $form_data_comentario[$comment_id] ) ) $form_data_comentario[$comment_id] = array( 'user' => $current_user->display_name, 'comentario' => $comment_new );
		
    	update_field( 'comentarios', $form_data_comentario, $post_id );
		wp_send_json( array( 'response' => $comment ) );
		
	elseif( $comment ):
    
	    $form_data_comentario = get_field( 'comentarios', $post_id );
		if( !$form_data_comentario ) $form_data_comentario = array();
    	
    	$form_data_comentario[] = array( 'user' => $current_user->display_name, 'comentario' => $comment );
    	update_field( 'comentarios', $form_data_comentario, $post_id );
		
		$output_html = '';
		foreach( $form_data_comentario as $key => $comm ): 
																	
			$output_html .= '<div id="comment-'.$key.'" class="card mb-2 comentario" style="background-color: #d2f4ea !important;">
				
				<div class="card-header bg-green-200 border-0 pt-1 pb-0 px-2 position-relative" style="background-color: #d2f4ea !important;">
					
					<span style="font-size: 0.8rem"><strong style="color:var(--bs-primary)">'.$comm['user'].'</strong></span>
					
					<div class="position-absolute comentarios-editar-borrar" style="top: 5px; right: 5px; font-size: 1rem;">
						
						<div class="d-flex justify-content-end">
							
							<div id="comentarios-guardar-'.$key.'" class="comentarios-guardar pe-3 d-none">
								<i data-id="'.$key.'" class="fa-solid fa-save comment-save"></i>
							</div>
							
							<div id="comentarios-editar-<?php echo $key; ?>" class="comentarios-editar pe-3">
								<i data-id="'.$key.'" class="fa-solid fa-pencil comment-edit"></i>
							</div>
							
							<div class="comentarios-borrar pe-2">
								<i data-id="'.$key.'" class="fa-solid fa-trash-can comment-delete"></i>
							</div>
							
						</div>
						
					</div>
					
				</div>
				
				<div class="card-body pb-1 pt-0 px-2">
					<textarea class="border-0 input-comment" id="comment-comm-'.$key.'" rows="1" oninput="autoResize(this)" disabled>'.$comm['comentario'].'</textarea>
				</div>
				
			</div>';
			
		endforeach;
		
		wp_send_json( array( 'output_html' => $output_html ) );
		
	endif;
}

add_action( 'admin_post_update_comment_cliente', 'update_comment_cliente' );

function update_data_pedido(){
	
    if( !is_user_logged_in() ) wp_die( 'No est&aacute;s autorizado.' );
    if( !isset( $_POST['pedido_nonce'] ) || !wp_verify_nonce( $_POST['pedido_nonce'], 'data_pedido_nonce' ) ) wp_die( 'Solicitud de actualizaci&oacute;n de pedido no v&aacute;lida.' );
    
    $form_data 		= $_POST;
	$pedido_id 		= $form_data['post_id'];
	$cliente_id 	= $form_data['cliente_id'];
	if( is_wp_error( $pedido_id ) ) wp_die( 'Hubo un error al actualizar el pedido.' );
	
    $procedencia 			= isset( $form_data['procedencia'] ) ? 			sanitize_text_field( $form_data['procedencia'] ) : false;
    $fecha_de_pedido 		= isset( $form_data['fecha_de_pedido'] ) ? 		sanitize_text_field( $form_data['fecha_de_pedido'] ) : false;
    $payment 				= isset( $form_data['payment'] ) ? 				sanitize_text_field( $form_data['payment'] ) : false;
    if( !empty( $form_data['productos'] ) && sizeof( $form_data['productos'] ) > 0 ):
    
    	$productos_repeat = array();
        $precio_de_venta = 0;
    	foreach( $form_data['productos'] as $value ):
            $id = $value['id'];
            $cantidad = $value['cantidad'];
            $precio = $value['precio'];
            $precio = str_replace( '.', '', $precio );
            $precio = str_replace( ',', '.', $precio );
    		$productos_repeat[] = array( 'producto' => $id, 'cantidad' => $cantidad, 'precio' => $precio );
            $precio_de_venta += (float) $precio*$cantidad;
        endforeach;
    	
    	update_field( 'pedido', $productos_repeat, $pedido_id );
        update_field( 'precio_de_venta', $precio_de_venta, $pedido_id );
    else:
        update_field( 'pedido', [], $pedido_id );
        update_field( 'precio_de_venta', 0, $pedido_id );
    endif;
    if( $cliente_id ) 			update_field( 'cliente', 	                $cliente_id, 			$pedido_id );
    if( $procedencia ) 			update_field( 'procedencia_del_pedido', 	$procedencia, 			$pedido_id );
    if( $payment ) 				update_field( 'forma_de_pago_preferida', 	$payment, 				$pedido_id ); 
    if( $fecha_de_pedido ) 		update_field( 'fecha_de_pedido', 			$fecha_de_pedido, 		$pedido_id );
    $comprobante_pedido = generar_pedido_pdf( $pedido_id ); 
    update_field( 'comprobante_pedido', $comprobante_pedido, $pedido_id );
    if( !empty( $_FILES['documento_factura']['name'] ) ){
		
        $file = $_FILES['documento_factura'];
        $uploaded_file = wp_handle_upload( $file, array( 'test_form' => false ) );
        if( isset( $uploaded_file['file'] ) ){
            $file_name_and_location = $uploaded_file['file'];
            $file_title_for_media_library = sanitize_file_name( $file['name'] );
            $attachment = array(
                'post_mime_type' => $uploaded_file['type'],
                'post_title' => $file_title_for_media_library,
                'post_content' => '',
                'post_status' => 'inherit'
            );
            $attach_id = wp_insert_attachment($attachment, $file_name_and_location);
            
            update_field( 'documento_factura', $attach_id, $pedido_id );
            
        } else {
            wp_die( 'Error al subir el archivo.' );
        }
        
    }
    wp_redirect( $form_data['redirect'].'?msg=success' );
			
}

add_action( 'admin_post_update_data_pedido', 'update_data_pedido' );

function generar_pedido_pdf( $pedido_id ){

    require_once CRM_PLUGIN_PATH . 'TCPDF-main/tcpdf.php';

    $pedido = get_post( $pedido_id );
    $numero_pedido      = $pedido->post_title;
    $cliente_id         = get_field( 'cliente',                 $pedido_id );
    $procedencia        = get_field( 'procedencia_del_pedido', 	$pedido_id );
    $payment            = get_field( 'forma_de_pago_preferida', $pedido_id ); 
    $fecha_pedido       = get_field( 'fecha_de_pedido', 		$pedido_id );
    $productos_pedido   = get_field( 'pedido',                  $pedido_id );
    $precio_pedido      = get_field( 'precio_de_venta',         $pedido_id );
    $nombre_apellido    = get_field( 'nombre', $cliente_id ) .' '. get_field( 'apellido', $cliente_id );
    $telefono           = get_field( 'telefono', $cliente_id );
    $direccion          = get_field( 'direccion', $cliente_id );
    $ciudad             = get_field( 'ciudad', $cliente_id );
    $email              = get_field( 'email', $cliente_id );

    $pdf = new TCPDF("P", PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Supersano');
    $pdf->SetTitle('Pedido');
    $pdf->SetSubject('Documento de Pedido');
    $pdf->SetFont('helvetica', '', 10);
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->AddPage();

    $upload_dir = wp_upload_dir();
    $logo = CRM_PLUGIN_PATH.'themes/images/logo.png';

    $html = '
    <table width="100%">
        <tr>
            <td align="center"><img src="'.$logo.'" height="100"/></td>
        </tr>
    </table>
    <h2 style="text-align:center; margin-bottom:5px;">NOTA DE PEDIDO</h2>
    <table cellpadding="4" width="100%">
        <tr>
            <td><strong>N° Pedido:</strong> '.$numero_pedido.'</td>
            <td align="right"><strong>Fecha:</strong> '.$fecha_pedido.'</td>
        </tr>
    </table>
    <hr style="margin:5px 0;"/>
    <table border="1" cellpadding="6" width="100%" style="border-collapse:collapse;">
        <tr>
            <td width="50%"><strong>Nombre:</strong> '.$nombre_apellido.'</td> 
            <td width="50%"><strong>Teléfono:</strong> '.$telefono.'</td>
        </tr>
        <tr>
            <td width="50%"><strong>Forma de pago:</strong> '.$payment.'</td> 
            <td width="50%"><strong>Email:</strong> '.$email.'</td>
        </tr>
        <tr>
            <td width="100%"><strong>Dirección:</strong> '.$direccion.', '.$ciudad.'</td>
        </tr>
    </table>
    <br/>';

    if( !empty( $productos_pedido ) && count( $productos_pedido ) > 0 ):
        $html .= '<h4 style="margin-top:10px;">Detalle del Pedido</h4>
        <table border="1" cellpadding="6" width="100%" style="border-collapse:collapse;">
            <thead>
                <tr style="background-color:#f5f5f5;">
                    <th width="15%" align="center"><strong>Foto</strong></th>
                    <th width="52%"><strong>Producto</strong></th>
                    <th width="8%" align="center"><strong>Cant.</strong></th>
                    <th width="10%" align="center"><strong>P. Unit.</strong></th>
                    <th width="15%" align="center"><strong>Subtotal</strong></th>
                </tr>
            </thead>
            <tbody>';
        foreach( $productos_pedido as $item ):
            $imagen = get_the_post_thumbnail_url( $item['producto']->ID, 'thumbnail' ) ?? SUPERSANO_THEME_URL.'/assets/default-image.webp';
            $imagen = str_replace( $upload_dir['baseurl'], $upload_dir['basedir'], $imagen );
            //$sku = str_replace( '.', '', get_field( 'sku', $item['producto']->ID ) );
            $nombre = $item['producto']->post_title;
            $cantidad = $item['cantidad'] ?? 0;
            $precio = $item['precio'] ?? 0;
            $total = (float) $precio*$cantidad;
            $total = number_format( $total, 2, ',', '.' );
            $html .= '<tr>
                <td width="15%" align="center"><img src="'.$imagen.'" alt="foto" height="50"></td>
                <td width="52%">'.$nombre.'</td>
                <td width="8%" align="center">'.$cantidad.'</td>
                <td width="10%" align="right">$'.$precio.'</td>
                <td width="15%" align="right">$'.$total.'</td>
            </tr>';
        endforeach;
            
        $html .= '</tbody>
        </table>
        
        <br/>
        <table cellpadding="6" width="100%" align="right" border="1" style="border-collapse:collapse;">
            <tr style="background-color:#f5f5f5;">
                <td width="85%"><strong>Total</strong></td>
                <td width="15%" align="right"><strong>$'.$precio_pedido.'</strong></td>
            </tr>
        </table>';
    
    else:
        $html .= '<p>No tienen productos en tu pedido.</p>';
    endif; 

    $pdf->writeHTML($html, true, false, true, false, '');

    // Crear el directorio si no existe
    $path = trailingslashit($upload_dir['basedir']) . 'pedidos';
    if (!file_exists($path)) wp_mkdir_p($path);

    $filename = 'pedido-'.$numero_pedido.'.pdf';
    $filepath = $upload_dir['basedir'].'/pedidos/'.$filename;
    $fileurl  = $upload_dir['baseurl'].'/pedidos/'.$filename;

    $pdf->Output( $filepath, 'F'); // Guardar en servidor

    return $fileurl;
} 

function update_comment_pedido(){

    if( !is_user_logged_in() ) wp_die( 'No est&aacute;s autorizado.' );
    if( !isset( $_POST['comment_nonce'] ) || !wp_verify_nonce( $_POST['comment_nonce'], 'comment_pedido_nonce' ) ) wp_die( 'Solicitud no v�lida.' );
    
    $current_user = wp_get_current_user();
    
    $form_data = $_POST;
	$post_id = $form_data['post_id'];
	
	$comment 			= sanitize_text_field( $form_data['comment'] 		);
	$comment_id 		= sanitize_text_field( $form_data['comment_id'] 	);
	$comment_action 	= sanitize_text_field( $form_data['comment_action'] );
	$comment_new 		= sanitize_text_field( $form_data['comment_new'] 	);
	
	if( is_wp_error( $post_id ) ) wp_die( 'Hubo un error al actualizar la empresa.' );
    
    if( $comment_action == 'delete' ):
	
		$form_data_comentario = get_field( 'comentarios', $post_id );
		if( isset( $form_data_comentario[$comment_id] ) ) unset( $form_data_comentario[$comment_id] );
		
    	update_field( 'comentarios', $form_data_comentario, $post_id );
		wp_send_json( array( 'response' => $comment_action ) );
	
	elseif( $comment_action == 'edit' ):
	
		$form_data_comentario = get_field( 'comentarios', $post_id );
		if( isset( $form_data_comentario[$comment_id] ) ) $form_data_comentario[$comment_id] = array( 'user' => $current_user->display_name, 'fecha' => $form_data_comentario[$comment_id]['fecha'], 'comentario' => $comment_new );
		
    	update_field( 'comentarios', $form_data_comentario, $post_id );
		wp_send_json( array( 'response' => $comment_action ) );
		
	elseif( $comment ):
    
	    $form_data_comentario = get_field( 'comentarios', $post_id );
		if( !$form_data_comentario ) $form_data_comentario = array();
    	
    	$form_data_comentario[] = array( 'user' => $current_user->display_name, 'fecha' => current_time( 'd/m/Y' ), 'comentario' => $comment );
    	update_field( 'comentarios', $form_data_comentario, $post_id );
		
		$output_html = '';
		foreach( $form_data_comentario as $key => $comm ): 
																	
			$output_html .= '<div id="comment-'.$key.'" class="card mb-2 comentario" style="background-color: #d2f4ea !important;">
																
				<div class="card-header bg-green-200 border-0 pt-1 pb-0 px-2 position-relative" style="background-color: #d2f4ea !important;">
					
					<span style="font-size: 0.8rem"><strong style="color:var(--bs-primary)">'.$comm['user'].'</strong> '.$comm['fecha'].'</span>
					
					<div class="position-absolute comentarios-editar-borrar" style="top: 5px; right: 5px; font-size: 1rem;">
						
						<div class="d-flex justify-content-end">
							
							<div id="comentarios-guardar-'.$key.'" class="comentarios-guardar pe-3 d-none">
								<i data-id="'.$key.'" class="fa-solid fa-save comment-save_pedido"></i>
							</div>
							
							<div id="comentarios-editar-'.$key.'" class="comentarios-editar pe-3">
								<i data-id="'.$key.'" class="fa-solid fa-pencil comment-edit_pedido"></i>
							</div>
							
							<div class="comentarios-borrar pe-2">
								<i data-id="'.$key.'" class="fa-solid fa-trash-can comment-delete_pedido"></i>
							</div>
							
						</div>
						
					</div>
					
				</div>
				
				<div class="card-body pb-1 pt-0 px-2">
					<textarea class="border-0 input-comment mb-1" id="comment-comm-'.$key.'" rows="1" oninput="autoResize(this)" disabled>'.$comm['comentario'].'</textarea>
				</div>
				
			</div>';
			
		endforeach;
		
		wp_send_json( array( 'output_html' => $output_html ) );
		
	endif;
}

add_action( 'admin_post_update_comment_pedido', 'update_comment_pedido' );

function update_status_pedido(){
	
	$estado = array(); 
	
    if( !is_user_logged_in() ) wp_die( 'No est&aacute;s autorizado.' );
    if( !isset( $_POST['status_nonce'] ) || !wp_verify_nonce( $_POST['status_nonce'], 'status_pedido_nonce' ) ) wp_die( 'Solicitud no v�lida.' );
    
    $form_data 		= $_POST;
	$post_id 		= $form_data['post_id'];
	$id 			= $form_data['id'];
	if( is_wp_error( $post_id ) ) wp_die( 'Hubo un error al actualizar el estado.' );
    
    if( $id ):
		wp_set_post_terms( $post_id, array( $id ), 'estado' );
		wp_send_json( array( 'id' => $id ) );
		
	endif;
}

add_action( 'admin_post_update_status_pedido', 'update_status_pedido' );

/*
function update_usuario_pedido(){
    if( !is_user_logged_in() ) wp_die( 'No est&aacute;s autorizado.' );
    if( !isset( $_POST['usuario_nonce'] ) || !wp_verify_nonce( $_POST['usuario_nonce'], 'usuario_pedido_nonce' ) ) wp_die( 'Solicitud no v�lida.' );
    
    $form_data = $_POST;
	$post_id = $form_data['post_id'];
	$usuario_id = $form_data['usuario_id'];
	
	if( is_wp_error( $post_id ) ) wp_die( 'Hubo un error al actualizar el usuario.' );
    
    if( $usuario_id ):
		
		update_field( 'usuario', $usuario_id, $post_id );
		
		$usuario = get_term( $usuario_id, 'usuario' ); 
		
		$estado_inicial = array();
		$estado_inicial[] = get_field( 'estado_inicial', 'option' );
		
		update_field( 'estado', $estado_inicial, $post_id );
		
		envio_cambio_usuario_pedido_crm( $post_id, $usuario );
		
		wp_send_json( array( 'id' => $usuario_id ) );
		
	endif;
}
*/

//add_action( 'admin_post_update_usuario_pedido', 'update_usuario_pedido' );

function handle_upload_featured_image(){
	
    check_ajax_referer( 'upload_featured_image_nonce', 'security' );
    
    $post_id = sanitize_text_field( $_POST['post_id'] );
    $user_id = sanitize_text_field( $_POST['user_id'] );
    if( !empty( $_FILES['featured_image'] ) ){
    	
        $file = $_FILES['featured_image'];
        $uploaded_file = wp_handle_upload( $file, array('test_form' => false ) );
        if (isset($uploaded_file['file'])){
        	
            $file_name_and_location = $uploaded_file['file'];
            $file_title_for_media_library = sanitize_file_name( $file['name'] );
            $attachment = array(
                'post_mime_type' => $uploaded_file['type'],
                'post_title' => $file_title_for_media_library,
                'post_content' => '',
                'post_status' => 'inherit'
            );
            $attach_id = wp_insert_attachment( $attachment, $file_name_and_location );
            require_once( ABSPATH . 'wp-admin/includes/image.php' );
            $attach_data = wp_generate_attachment_metadata( $attach_id, $file_name_and_location );
            wp_update_attachment_metadata( $attach_id, $attach_data );
			if( $post_id != 'undefined' ):
				set_post_thumbnail( $post_id, $attach_id );
			elseif( $user_id != 'undefined' ):
				$resultado = update_field( 'avatar', $attach_id,  'user_'.$user_id );
			endif;	
            wp_send_json_success( array( 'attach_id' => $attach_id ) );
            
        } else {
            wp_send_json_error( array( 'error' => 'Error al subir el archivo.' ) );
        }
        
    } else {
        wp_send_json_error( array( 'error' => 'No se encontr� ning�n archivo.' ) );
    }
    wp_die();
}

add_action( 'admin_post_nopriv_upload_featured_image', 'handle_upload_featured_image' );
add_action( 'admin_post_upload_featured_image', 'handle_upload_featured_image' );

function add_estado_columns($columns){
	
	$columns['orden'] = __('Orden');
    $columns['color'] = __('Color');
    return $columns;
    
}

add_filter('manage_edit-estado_columns', 'add_estado_columns');

function show_estado_column_content($content, $column_name, $term_id){
	
	if ($column_name == 'orden'){
    	$term = get_term($term_id);
        $orden = get_field( 'orden', $term );
        $content = isset($orden) ? $orden : '';
    }
    
    if ($column_name == 'color'){
    	$term = get_term($term_id);
        $color = get_field( 'color_de_fondo', $term );
        $content = isset($color) ? '<div style="height:25px;width:100%;background-color:'.$color.';"></div>' : '';
    }
    
    return $content;
    
}

add_filter('manage_estado_custom_column', 'show_estado_column_content', 10, 3);

function get_posts_count_by_term( $post_type, $term_id, $taxonomy ){
    
    $args = array(
        'post_type' => $post_type, 
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => $taxonomy,
                'field'    => 'term_id',
                'terms'    => $term_id,
            ),
        ),
        'post_status' => array( 'publish', 'pending' )
    );
	
	if( !current_user_can( 'manage_options' ) ) $args['author'] = get_current_user_id();
    $query = new WP_Query( $args );
    if( $query->have_posts() ){
        return $query->post_count;
    }else{
        return 0; 
    }
    
}

function modify_terms_clauses($clauses, $taxonomies, $args){
	
    global $wpdb;
    if ( is_array($taxonomies) && count($taxonomies) === 1 && in_array( $args['taxonomy'], $taxonomies ) ) {
        if (isset($args['include_pending']) && $args['include_pending']) {
            $pending_clause = "EXISTS (
                SELECT 1
                FROM $wpdb->posts AS p
                INNER JOIN $wpdb->term_relationships AS tr ON p.ID = tr.object_id
                WHERE tr.term_taxonomy_id = tt.term_taxonomy_id
                AND p.post_status = 'pending'
            )";
            if (!empty($clauses['where'])) {
                $clauses['where'] .= " OR $pending_clause";
            } else {
                $clauses['where'] = "WHERE $pending_clause";
            }
        }
    }
    return $clauses;
    
}

add_filter( 'terms_clauses', 'modify_terms_clauses', 10, 3 );

function generarImagenConLetra( $letra = 'A', $colorHex = '2F2FEB' ) {
	
	$directorio = 'wp-content/uploads/letras/';
    if (!file_exists($directorio)) {
        mkdir($directorio, 0777, true);
    }
    
    $nombreArchivo = $directorio . $letra . '.jpg';
    
	$urlImagen = 'https://' . $_SERVER['HTTP_HOST'] . '/' . $nombreArchivo;
	
	if( !file_exists( $urlImagen ) ){
		
	    $ancho = 400;
	    $alto = 400;
	    $imagen = imagecreatetruecolor($ancho, $alto);
	
	    list($r, $g, $b) = sscanf($colorHex, "%02x%02x%02x");
	
	    $colorFondo = imagecolorallocate($imagen, $r, $g, $b);
	    imagefill($imagen, 0, 0, $colorFondo);
	
	    $colorTexto = imagecolorallocate($imagen, 255, 255, 255);
	
	    $tamanoFuente = 150;
	    $rutaFuente = 'wp-content/themes/balsolutions/themes/fonts/markoone-regular.ttf'; 
	
	    $cajaTexto = imagettfbbox($tamanoFuente, 0, $rutaFuente, $letra);
	    $anchoTexto = $cajaTexto[2] - $cajaTexto[0];
	    $altoTexto = $cajaTexto[1] - $cajaTexto[7];
	
	    $x = ($ancho - $anchoTexto) / 2;
	    $y = ($alto - $altoTexto) / 2 + $altoTexto;
	
	    imagettftext($imagen, $tamanoFuente, 0, $x, $y, $colorTexto, $rutaFuente, $letra);
	
	    imagejpeg( $imagen, $nombreArchivo );
	    imagedestroy($imagen);
	    
	    $urlImagen = 'https://' . $_SERVER['HTTP_HOST'] . '/' . $nombreArchivo;
	
	}
    return $urlImagen;
}

function get_numero_pedido(){
	
	$letras_iniciales 		= get_field( 'letras_iniciales', 'option' );
	$numero_actual 			= get_field( 'numero_actual', 'option' );
	$cantidad_de_caracteres = get_field( 'cantidad_de_caracteres', 'option' );
	
	$numero	= intval( $numero_actual ) + 1;
	update_field( 'numero_actual', $numero, 'option' );
	
	$numero_formateado = sprintf( '%0'.$cantidad_de_caracteres.'d', $numero );
	
	return $letras_iniciales.$numero_formateado;
	
}

add_action( 'wp_ajax_buscar_productos', 'ajax_buscar_productos_callback' );

function ajax_buscar_productos_callback() {
    $term = isset($_POST['term']) ? sanitize_text_field($_POST['term']) : '';
    $excluir = isset($_POST['excluir']) ? array_map('intval', (array) $_POST['excluir']) : [];
    if ( empty($term) ) {
        wp_send_json_success([]);
    }
    $args = [
        'post_type'         => 'producto',
        'posts_per_page'    => 10,
        's'                 => $term,
        'post__not_in'      => $excluir,
    ];
    $query = get_posts($args);
    $resultados = [];
    foreach ( $query as $p ) {
        $precio = get_field( 'precio', $p->ID ) ?? 0;
        $resultados[] = [
            'id'        => $p->ID,
            'title'     => $p->post_title,
            'precio'    => $precio
        ];
    }
    wp_send_json_success( $resultados );
}

add_action( 'wp_ajax_buscar_clientes', 'buscar_clientes_callback' );

function buscar_clientes_callback() {
    $term = isset($_POST['term']) ? sanitize_text_field( $_POST['term'] ) : '';
    $args = [
        'post_type'      => 'cliente',
        'posts_per_page' => 10,
        's'              => $term,
    ];
    $clientes = get_posts( $args );
    $resultados = [];
    foreach ( $clientes as $c ) {
        $resultados[] = [
            'id'    => $c->ID,
            'title' => $c->post_title,
        ];
    }
    wp_send_json_success( $resultados );
}

add_action( 'wp_ajax_borrar_documento_pedido', 'borrar_documento_pedido' );

function borrar_documento_pedido(){
    if( empty($_POST['post_id']) ) wp_send_json_error();
    if( empty($_POST['field']) ) wp_send_json_error();
    $post_id = intval($_POST['post_id']);
    $field = $_POST['field'] ?? 'documento_pedido';
    update_field( $field, '', $post_id );
    wp_send_json_success();
}

?>