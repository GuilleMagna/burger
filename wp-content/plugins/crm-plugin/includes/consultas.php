<?php 
add_action( 'admin_post_procesar_formulario', 'procesar_formulario' );
add_action( 'admin_post_nopriv_procesar_formulario', 'procesar_formulario' );
function procesar_formulario(){
    
    $result = envio_contacto( $_POST );
	
	$nombre_cliente 		= sanitize_text_field( $_POST['nombre-y-apellido'] );
	$telefono 				= sanitize_text_field( $_POST['telefono-de-contacto'] );
	$correo_electronico 	= sanitize_email( $_POST['correo-electronico'] );
	$consulta 				= sanitize_text_field( $_POST['escribe-tu-consulta'] );
	
	$post_id = wp_insert_post( array(
	    'post_type'     => 'consulta',
	    'post_title'    => current_time( 'Y-m-d H:i' ) .' - '. $nombre_cliente, 
	    'post_content'	=> $consulta,
	    'post_status'   => 'pending'
	));
	
	if( $post_id ){
	    update_post_meta( $post_id, 'nombre_y_apellido', $nombre_cliente);
	    update_post_meta( $post_id, 'telefono_de_contacto', $telefono);
	    update_post_meta( $post_id, 'correo_electronico', $correo_electronico);
	    
	} else {
		
	    wp_die( "Error al registrar la consulta." );
	    
	}
	 
    wp_redirect( SUPERSANO_URL. $_POST['redirect'] );
    exit;
    
}