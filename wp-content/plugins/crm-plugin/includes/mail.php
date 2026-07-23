<?php 
function custom_wp_mail_message( $args ) {
    $to = $args['to'];
    
    $subject = $args['subject'];
    //if( strpos( $args['subject'], "Restablecer la" ) !== false ) $subject = SUPERSANO_TITLE. ' - Solicitud de Contraseña';
    $logo_cabecera      = SUPERSANO_OPTIONS['logo_cabecera'] ?: SUPERSANO_OPTIONS['logo_header'];
    $color_cabecera     = SUPERSANO_OPTIONS['color_cabecera'] ?: '#fff';
    $color_fondo        = SUPERSANO_OPTIONS['color_fondo'] ?: '#fff';
    $color_texto        = SUPERSANO_OPTIONS['color_texto'] ?: '#000000';
    $message = '
        <!DOCTYPE html>
        <html lang="es">
            <head>
                <meta charset="UTF-8">
                <title>'.$subject.'</title>
            </head>
            <body style="font-family: Arial, sans-serif; background-color: '.$color_fondo.'; color: '.$color_texto.'; margin: 0; padding: 0;">
                <div style="background-color: '.$color_cabecera.'; padding: 20px; text-align: center;">
                    <img src="'.$logo_cabecera.'" alt="Cabecera del correo electronico" style="display: block; max-width: 160px; margin: 0px auto;">
                </div>
                <div style="style="font-family: Arial, sans-serif; color: '.$color_texto.'; padding: 20px;">
                    <p>' . nl2br( $args['message'] ) . '</p>
                </div>
            </body>
        </html>
    ';
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
    );
    return array(
        'to' => $to,
        'subject' => $subject,
        'message' => $message,
        'headers' => $headers,
    );
}
add_filter( 'wp_mail', 'custom_wp_mail_message' );
function envio_contacto( $post ){
	
	$nombre_cliente 		= sanitize_text_field( $post['nombre-y-apellido'] );
	$telefono 				= sanitize_text_field( $post['telefono-de-contacto'] );
	$correo_electronico 	= sanitize_email( $post['correo-electronico'] );
	$consulta 				= sanitize_text_field( $post['escribe-tu-consulta'] );
	
	$message  = '';
	$message .= '<center>';
	$message .= sprintf( __('Hola, este correo se ha enviado desde <b>%s</b>'), SUPERSANO_TITLE ). "\r\n\r\n";
	$message .= sprintf( 'Estos son sus datos:' ) . "\r\n";
	$message .= sprintf( __( 'Nombre: <b>%s</b>' ), $nombre_cliente ) . "\r\n";
	$message .= sprintf( __( 'Tel&eacute;fono: <b>%s</b>' ), $telefono ) . "\r\n";
	$message .= sprintf( __( 'Correo: <b>%s</b>' ), $correo_electronico ) . "\r\n";
	$message .= sprintf( __( 'Consulta: <b>%s</b>' ), $consulta ) . "\r\n\r\n";
	$message .= '</center>';
	
	$subject = SUPERSANO_TITLE. ' - Consulta web';
	
	$correos = get_field( 'correos', 'option' );
	
	$correos = array(); 
	foreach( $correos as $value )
		$correos[$value['correo']] = $value['correo'];
  		
	if( sizeof( $correos ) == 0 ) wp_die( 'Debes configurar el Usuario receptor de la consulta desde la configuracion.' );
    return wp_mail( implode( ', ', $correos ), $subject, $message );	
	
}
function envio_pedido_nuevo( $post, $comprobante_pedido ){
	$dni 			= sanitize_text_field( $post['dni'] );
	$nombre			= sanitize_text_field( $post['nombre'] );
	$apellido		= sanitize_text_field( $post['apellido'] );
	$direccion		= sanitize_text_field( $post['direccion'] );
	$codigo_postal	= sanitize_text_field( $post['cp'] );
	$ciudad			= sanitize_text_field( $post['ciudad'] );
	$telefono		= sanitize_text_field( $post['telefono'] );
	$payment		= sanitize_text_field( $post['payment'] );
	$email			= sanitize_email( $post['email'] );
	
	$nombre_cliente = $apellido.', '.$nombre;
	
	$message  = '';
	$message .= sprintf( __( 'Hola, se ha registrado un nuevo pedido en <b>%s</b>' ), SUPERSANO_TITLE ). "\r\n\r\n";
	$message .= sprintf( __( 'Estos son sus datos:' ) ) . "\r\n";
	$message .= sprintf( __( 'Nombre: <b>%s</b>' ), $nombre_cliente ) . "\r\n";
	$message .= sprintf( __( 'DNI: <b>%s</b>' ), $dni ) . "\r\n";
	$message .= sprintf( __( 'Direcci&oacute;n: <b>%s</b>' ), $direccion ) . "\r\n";
	$message .= sprintf( __( 'Ciudad: <b>%s</b>' ), $ciudad ) . "\r\n";
	$message .= sprintf( __( 'C&oacute;digo postal: <b>%s</b>' ), $codigo_postal ) . "\r\n";
	$message .= sprintf( __( 'Tel&eacute;fono: <b>%s</b>' ), $telefono ) . "\r\n";
	$message .= sprintf( __( 'Correo: <b>%s</b>' ), $email ) . "\r\n";
	$message .= sprintf( __( 'M&eacute;todo de pago preferido: <b>%s</b>' ), $payment ) . "\r\n";
    
	if( isset( $_POST['productos'] ) and sizeof( $_POST['productos'] ) > 0 ):
	
		$detalle_del_pedido = array();
		foreach( $_POST['productos'] as $key => $qty ): 
			$post_product = get_post( $key );
			$detalle_del_pedido[] = $qty. 'u. de '.$post_product->post_title;
		endforeach;
		
		$message .= sprintf( __( 'Detalle del Pedido:' ) ) . "\r\n";
		foreach( $detalle_del_pedido as $detalle )
			$message .= sprintf( '&bull; '. $detalle ) . "\r\n";
		
	endif; 
    $nro_pedido = basename( $comprobante_pedido  );
    $nro_pedido = sanitize_title( str_replace( ['pedido-','.pdf'], '', $nro_pedido ) );
    $message .= sprintf( __( 'Comprobante pedido: <b>%s</b>' ), $comprobante_pedido ) . "\r\n\r\n";
    $message .= sprintf( __( 'Ver el Pedido: <b>%s</b>' ), SUPERSANO_URL.'/pedido/'.$nro_pedido.'/' ) . "\r\n";
	$subject = SUPERSANO_TITLE. ' - Pedido web';
	
	$correos_receptores = get_field( 'correos_receptores', 'option' );
	
	$correos = array(); 
	foreach( $correos_receptores as $value )
		$correos[$value['correo']] = $value['correo'];
  		
	if( sizeof( $correos ) == 0 ) wp_die( 'Debes configurar el Usuario receptor del pedido desde la configuracion.' );
    $upload_dir = wp_upload_dir();
    $attachment = str_replace( $upload_dir['baseurl'], $upload_dir['basedir'], $comprobante_pedido );
    return wp_mail( implode( ', ', $correos ), $subject, $message, [], [$attachment] );	
	
}
function envio_cambio_estado_pedido( $post_id ){
	$pedido = get_post( $post_id ); 
	$usuario_user_data 	= get_user_by( 'id', $pedido->post_author );
	$correo_electronico = $usuario_user_data->user_email;
     
	$empresa = get_field( 'empresa', $post_id );
	$cuit 				= get_field( 'cuit', $empresa->ID );
	$razon_social		= get_field( 'razon_social', $empresa->ID );
	$direccion 			= get_field( 'direccion', $empresa->ID );
	$ciudad 			= get_field( 'ciudad', $empresa->ID );
	$provincia 			= get_field( 'provincia', $empresa->ID );
	$codigo_postal 		= get_field( 'codigo_postal', $empresa->ID );
	$payment 			= get_field( 'forma_de_pago_preferida', $empresa->ID );
	$nombre_cliente		= get_field( 'nombre_contacto', $empresa->ID );
	$telefono 			= get_field( 'telefono', $empresa->ID );
	$email 				= get_field( 'email', $empresa->ID );
		
	$detalle_estado = '';
	$estado = get_the_terms( $post_id, 'estado' );
	if( $estado && !is_wp_error( $estado ) ) $detalle_estado = $estado[0]->name;
	if( !isset($_POST['acf']) ) $_POST['acf'] = array();
		if( !isset($_POST['acf']['field_663e5fe3edcc5']) ) $_POST['acf']['field_663e5fe3edcc5'] = array();
	
	$comentarios = array();
	if( sizeof( $_POST['acf']['field_663e5fe3edcc5'] ) > 0 )
		$comentarios = $_POST['acf']['field_663e5fe3edcc5'];
	
	$procedencia_del_contacto 	= isset( $_POST['acf']['field_663e60b5edccc'] ) ? $_POST['acf']['field_663e60b5edccc'] : '';
	$fecha_de_reunion 			= isset( $_POST['acf']['field_663e6165edccd'] ) ? $_POST['acf']['field_663e6165edccd'] : '';
	$presupuesto 				= isset( $_POST['acf']['field_663e61b5edcd0'] ) ? $_POST['acf']['field_663e61b5edcd0'] : '';
	$cuestionario 				= isset( $_POST['acf']['field_663e639dedcd1'] ) ? $_POST['acf']['field_663e639dedcd1'] : '';
	
	$post_content				= isset( $_POST['post_content'] ) ? $_POST['post_content'] : '';
	
	$message  = '';
	$message .= sprintf( __( 'Hola, se le ha asignado un pedido en <b>%s</b>' ), SUPERSANO_TITLE ). "\r\n\r\n";
	
	$message .= sprintf( __( 'Estos son sus datos:' ) ) . "\r\n";
	$message .= sprintf( __( 'Nombre: <b>%s</b>' ), $nombre_cliente ) . "\r\n";
	$message .= sprintf( __( 'Raz&oacute;n social: <b>%s</b>' ), $razon_social ) . "\r\n";
	$message .= sprintf( __( 'CUIT: <b>%s</b>' ), $cuit ) . "\r\n";
	$message .= sprintf( __( 'Direcci&oacute;n: <b>%s</b>' ), $direccion ) . "\r\n";
	$message .= sprintf( __( 'Ciudad: <b>%s</b>' ), $ciudad ) . "\r\n";
	$message .= sprintf( __( 'C&oacute;digo postal: <b>%s</b>' ), $codigo_postal ) . "\r\n";
	$message .= sprintf( __( 'Provincia: <b>%s</b>' ), $provincia ) . "\r\n";
	$message .= sprintf( __( 'Tel&eacute;fono: <b>%s</b>' ), $telefono ) . "\r\n";
	$message .= sprintf( __( 'Correo: <b>%s</b>' ), $email ) . "\r\n";
	$message .= sprintf( __( 'M&eacute;todo de pago preferido: <b>%s</b>' ), $payment ) . "\r\n\r\n";
	
	$message .= sprintf( __( 'Datos del pedido:' ) ) . "\r\n";
	$message .= sprintf( $post_content ) . "\r\n\r\n";
	$message .= sprintf( __( 'Estado del pedido: <b>%s</b>' ), $detalle_estado ) . "\r\n";
	
	if( $comentarios and sizeof( $comentarios ) > 0 ): 
		$message .= sprintf( __( 'Comentarios:' ) ) . "\r\n";
		foreach( $comentarios as $comm ):
			$obj_fecha = DateTime::createFromFormat('Ymd', $comm['field_663e5ffaedcc6'] );
			$fecha = $obj_fecha->format('d/m/Y');
			$message .= sprintf( __( '&bull; Fecha: <b>%s</b>' ), $fecha ) . " - ";
			$message .= sprintf( __( '<b>%s</b>' ), $comm['field_663e6010edcc7'] ) . "\r\n";
		endforeach;
		$message .= "\r\n";
	endif; 
	if( $procedencia_del_contacto ) 	$message .= sprintf( __( 'Procedencia del contacto: <b>%s</b>' ), 	$procedencia_del_contacto ) . "\r\n";
	if( $fecha_de_reunion ) 			$message .= sprintf( __( 'Fecha de reunion: <b>%s</b>' ), 			$fecha_de_reunion ) 		. "\r\n";
	if( $presupuesto )					$message .= sprintf( __( 'Presupuesto: <b>Si, posee presupuesto</b>' ) ) 						. "\r\n";
	if( $cuestionario ) 				$message .= sprintf( __( 'Cuestionario: <b>%s</b>' ), 				$cuestionario ) 			. "\r\n";
	
	$message .= "\r\n";
	$subject = SUPERSANO_TITLE. ' - Pedido web';
	
	if( ! $correo_electronico ) $correo_electronico = get_option('admin_email');
	
    //dump( array( $correo_electronico, $subject, $message ) );
	return wp_mail( $correo_electronico, $subject, $message );	
	
}
function envio_cambio_usuario_pedido( $post_id ){
	
	$pedido = get_post( $post_id ); 
	$usuario_user_data 	= get_user_by( 'id', $pedido->post_author );
	$correo_electronico = $usuario_user_data->user_email;
        
	$empresa = get_field( 'empresa', $post_id );
	$cuit 				= get_field( 'cuit', $empresa->ID );
	$razon_social		= get_field( 'razon_social', $empresa->ID );
	$direccion 			= get_field( 'direccion', $empresa->ID );
	$ciudad 			= get_field( 'ciudad', $empresa->ID );
	$provincia 			= get_field( 'provincia', $empresa->ID );
	$codigo_postal 		= get_field( 'codigo_postal', $empresa->ID );
	$payment 			= get_field( 'forma_de_pago_preferida', $empresa->ID );
	$nombre_cliente		= get_field( 'nombre', $empresa->ID );
	$telefono 			= get_field( 'telefono', $empresa->ID );
	$email 				= get_field( 'email', $empresa->ID );
		
	$detalle_estado = '';
	$estado = get_the_terms( $post_id, 'estado' );
	if( $estado && !is_wp_error( $estado ) ) $detalle_estado = $estado[0]->name;
	
	if( empty($_POST['acf']['field_663e5fe3edcc5']) ) $_POST['acf']['field_663e5fe3edcc5'] = array();
	$comentarios = array();
	if( isset($_POST['acf']['field_663e5fe3edcc5']) and sizeof( $_POST['acf']['field_663e5fe3edcc5'] ) > 0 )
		$comentarios = $_POST['acf']['field_663e5fe3edcc5'];
	
	$procedencia_del_contacto 	= $_POST['acf']['field_663e60b5edccc'];
	$fecha_de_reunion 			= $_POST['acf']['field_663e6165edccd'];
	$presupuesto 				= $_POST['acf']['field_663e61b5edcd0'];
	$cuestionario 				= $_POST['acf']['field_663e639dedcd1'];
	$message  = '';
	$message .= sprintf( __( 'Hola, se le ha asignado un pedido en <b>%s</b>' ), SUPERSANO_TITLE ). "\r\n\r\n";
	
	$message .= sprintf( __( 'Estos son sus datos:' ) ) . "\r\n";
	$message .= sprintf( __( 'Nombre: <b>%s</b>' ), $nombre_cliente ) . "\r\n";
	$message .= sprintf( __( 'Raz&oacute;n social: <b>%s</b>' ), $razon_social ) . "\r\n";
	$message .= sprintf( __( 'CUIT: <b>%s</b>' ), $cuit ) . "\r\n";
	$message .= sprintf( __( 'Direcci&oacute;n: <b>%s</b>' ), $direccion ) . "\r\n";
	$message .= sprintf( __( 'Ciudad: <b>%s</b>' ), $ciudad ) . "\r\n";
	$message .= sprintf( __( 'C&oacute;digo postal: <b>%s</b>' ), $codigo_postal ) . "\r\n";
	$message .= sprintf( __( 'Provincia: <b>%s</b>' ), $provincia ) . "\r\n";
	$message .= sprintf( __( 'Tel&eacute;fono: <b>%s</b>' ), $telefono ) . "\r\n";
	$message .= sprintf( __( 'Correo: <b>%s</b>' ), $email ) . "\r\n";
	$message .= sprintf( __( 'M&eacute;todo de pago preferido: <b>%s</b>' ), $payment ) . "\r\n\r\n";
	
	$message .= sprintf( __( 'Datos del pedido:' ) ) . "\r\n";
	$message .= sprintf( $_POST['post_content'] ) . "\r\n\r\n";
	$message .= sprintf( __( 'Estado del pedido: <b>%s</b>' ), $detalle_estado ) . "\r\n";
	
	if( $comentarios and sizeof( $comentarios ) > 0 ): 
		$message .= sprintf( __( 'Comentarios:' ) ) . "\r\n";
		foreach( $comentarios as $comm ):
			$obj_fecha = DateTime::createFromFormat('Ymd', $comm['field_663e5ffaedcc6'] );
			$fecha = $obj_fecha->format('d/m/Y');
			$message .= sprintf( __( '&bull; Fecha: <b>%s</b>' ), $fecha ) . " - ";
			$message .= sprintf( __( '<b>%s</b>' ), $comm['field_663e6010edcc7'] ) . "\r\n";
		endforeach;
		$message .= "\r\n";
	endif; 
	if( $procedencia_del_contacto ) 	$message .= sprintf( __( 'Procedencia del contacto: <b>%s</b>' ), 	$procedencia_del_contacto ) . "\r\n";
	if( $fecha_de_reunion ) 			$message .= sprintf( __( 'Fecha de reunion: <b>%s</b>' ), 			$fecha_de_reunion ) 		. "\r\n";
	if( $presupuesto )					$message .= sprintf( __( 'Presupuesto: <b>Si, posee presupuesto</b>' ) ) 						. "\r\n";
	if( $cuestionario ) 				$message .= sprintf( __( 'Cuestionario: <b>%s</b>' ), 				$cuestionario ) 			. "\r\n";
	
	$message .= "\r\n";
	$subject = SUPERSANO_TITLE. ' - Pedido web';
	
	if( ! $correo_electronico ) $correo_electronico = get_option('admin_email');
	
    //dump( array( $correo_electronico, $subject, $message ) );
	return wp_mail( $correo_electronico, $subject, $message );	
	
}
function envio_cambio_usuario_pedido_crm( $post_id, $usuario_nuevo ){
    //dump($usuario_nuevo, false); 
	
	$correo_electronico = $usuario_nuevo->user_email;
	$empresa_id 		= get_field( 'empresa', $post_id );
	$cuit 				= get_field( 'cuit', $empresa_id );
	$razon_social		= get_field( 'razon_social', $empresa_id );
	$direccion 			= get_field( 'direccion', $empresa_id );
	$ciudad 			= get_field( 'ciudad', $empresa_id );
	$provincia 			= get_field( 'provincia', $empresa_id );
	$codigo_postal 		= get_field( 'codigo_postal', $empresa_id );
	$payment 			= get_field( 'forma_de_pago_preferida', $empresa_id );
	$nombre_cliente		= get_field( 'nombre', $empresa_id );
	$telefono 			= get_field( 'telefono', $empresa_id );
	$email 				= get_field( 'email', $empresa_id );
	
	$procedencia	 	= get_field( 'procedencia_del_contacto', $post_id );
	$comentarios 		= get_field( 'comentarios', $post_id );
	$fecha_de_reunion 	= get_field( 'fecha_de_reunion', $post_id );
	$presupuesto 		= get_field( 'presupuesto', $post_id );
	$cuestionario 		= get_field( 'cuestionario', $post_id );
	
	$pedido = get_post( $post_id );
	$post_content = $pedido->post_content;
		
	$detalle_estado = '';
	$estado = get_the_terms( $post_id, 'estado' );
	if( $estado && !is_wp_error( $estado ) ) $detalle_estado = $estado[0]->name;
	$message  = '';
	$message .= sprintf( __( 'Hola, se le ha asignado un pedido en <b>%s</b>' ), SUPERSANO_TITLE ). "\r\n\r\n";
	
	$message .= sprintf( __( 'Estos son sus datos:' ) ) . "\r\n";
	$message .= sprintf( __( 'Nombre: <b>%s</b>' ), $nombre_cliente ) . "\r\n";
	$message .= sprintf( __( 'Raz&oacute;n social: <b>%s</b>' ), $razon_social ) . "\r\n";
	$message .= sprintf( __( 'CUIT: <b>%s</b>' ), $cuit ) . "\r\n";
	$message .= sprintf( __( 'Direcci&oacute;n: <b>%s</b>' ), $direccion ) . "\r\n";
	$message .= sprintf( __( 'Ciudad: <b>%s</b>' ), $ciudad ) . "\r\n";
	$message .= sprintf( __( 'C&oacute;digo postal: <b>%s</b>' ), $codigo_postal ) . "\r\n";
	$message .= sprintf( __( 'Provincia: <b>%s</b>' ), $provincia ) . "\r\n";
	$message .= sprintf( __( 'Tel&eacute;fono: <b>%s</b>' ), $telefono ) . "\r\n";
	$message .= sprintf( __( 'Correo: <b>%s</b>' ), $email ) . "\r\n";
	$message .= sprintf( __( 'M&eacute;todo de pago preferido: <b>%s</b>' ), $payment ) . "\r\n\r\n";
	
	$message .= sprintf( __( 'Datos del pedido:' ) ) . "\r\n";
	$message .= sprintf( $post_content ) . "\r\n\r\n";
	$message .= sprintf( __( 'Estado del pedido: <b>%s</b>' ), $detalle_estado ) . "\r\n";
	
	if( $comentarios and sizeof( $comentarios ) > 0 ): 
		$message .= sprintf( __( 'Comentarios:' ) ) . "\r\n";
		foreach( $comentarios as $comm ):
			$message .= sprintf( __( '&bull; Fecha: <b>%s</b>' ), $comm['fecha'] ) . " - ";
			$message .= sprintf( __( '<b>%s</b>' ), $comm['comentario'] ) . "\r\n";
		endforeach;
		$message .= "\r\n";
	endif; 
	if( $procedencia ) 			$message .= sprintf( __( 'Procedencia del contacto: <b>%s</b>' ), 	$procedencia ) . "\r\n";
	if( $fecha_de_reunion ) 	$message .= sprintf( __( 'Fecha de reunion: <b>%s</b>' ), 			$fecha_de_reunion ) 		. "\r\n";
	if( $presupuesto )			$message .= sprintf( __( 'Presupuesto: <b>Si, posee un presupuesto.</b>' ) ) 						. "\r\n";
	if( $cuestionario ) 		$message .= sprintf( __( 'Cuestionario: <b>%s</b>' ), 				$cuestionario ) 			. "\r\n";
	
	$message .= "\r\n";
	$subject = SUPERSANO_TITLE. ' - Pedido web';
	
	if( ! $correo_electronico ) $correo_electronico = get_option( 'admin_email' );
    //dump( array( $correo_electronico, $subject, $message ) ); 
	return wp_mail( $correo_electronico, $subject, $message );	
	
}