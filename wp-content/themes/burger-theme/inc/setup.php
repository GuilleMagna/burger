<?php 

add_theme_support( 'post-thumbnails' );

function custom_the_post_filter( $post ) {
    
    $post_array = get_object_vars( $post );
    extract( $post_array );

    $post->post_thumbnail = '';
    if( has_post_thumbnail( $post->ID ) ){
        $post->post_thumbnail = get_the_post_thumbnail_url( $post->ID, 'large' );
    }

    $post->post_permalink = get_permalink( $post->ID );

    if( function_exists('get_field') ){

        $fields = get_fields( $post->ID );

        if ( $fields ) { 
            foreach( $fields as $key => $value ){
                $post->{$key} = $value;
            } 
        }
       
    }

    return $post;

}

add_action( 'the_post', 'custom_the_post_filter' );

add_action('wp_enqueue_scripts', function() {

    if (function_exists('wpcf7_enqueue_scripts')) {
        wpcf7_enqueue_scripts();
    }
    if (function_exists('wpcf7_enqueue_styles')) {
        wpcf7_enqueue_styles();
    }

});

function custom_wp_mail_message( $args ) {

    $to = $args['to'];
    $subject = $args['subject']; 

    $logo = NAKAMA_URL.'/wp-content/uploads/2025/04/76af47b739efbfe4e160b57623006bf9.png';
    $bg_color = '#796e65';

    $message = '
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>'.$subject.'</title>
        </head>
        <body style="font-family: Arial, sans-serif; background-color: #fff; color: #796e65; margin: 0; padding: 0;">
            <div style="background-color: '.$bg_color.'; padding: 20px; text-align: center;">
                <img src="'.$logo.'" alt="Logo Andemira" style="display: block; max-width: 100%; margin: 0px auto;">
            </div>
            <div style="style="font-family: Arial, sans-serif; color: #796e65; padding: 20px;">
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

function enviar_email( $post ) {

    $nombre			= sanitize_text_field( $post['nombre'] );
    $empresa		= sanitize_text_field( $post['empresa'] );
    $motivo 		= sanitize_text_field( $post['motivo'] );
	$telefono		= sanitize_text_field( $post['telefono'] );
	$mail			= sanitize_email( $post['mail'] );
    $ciudad		    = sanitize_text_field( $post['ciudad'] );
    $pais		    = sanitize_text_field( $post['pais'] );
    $mensaje	    = sanitize_text_field( $post['mensaje'] );

    $message  = '';
	//$message .= '<center>';
	$message .= sprintf( __('Hola, este correo se ha enviado desde <b>%s</b>'), NAKAMA_TITLE ). "\r\n\r\n";
	$message .= sprintf( 'Nombre: %s', $nombre ) . "\r\n\r\n";
	$message .= sprintf( 'Empresa: %s', $empresa ) . "\r\n\r\n";
    $message .= sprintf( 'Motivo: %s', $motivo ) . "\r\n\r\n";
	$message .= sprintf( 'Teléfono: %s', $telefono ) . "\r\n\r\n";
    $message .= sprintf( 'Email: %s', $mail ) . "\r\n\r\n";
	$message .= sprintf( 'Ciudad: %s', $ciudad ) . "\r\n\r\n";
    $message .= sprintf( 'Pais: %s', $pais ) . "\r\n\r\n";
    $message .= sprintf( 'Mensaje: %s', $mensaje ) . "\r\n\r\n";
   // $message .= '</center>';

    $subject = NAKAMA_TITLE. ' - Contacto';

    if( count( NAKAMA_OPTIONS['destinatarios'] ) > 0 ){

        $users = array();
        foreach( NAKAMA_OPTIONS['destinatarios'] as $value ) $users[] = $value['correo'];
        $user_email = implode( ', ', $users );

    }else{
        $user_email = get_option( 'admin_email' );
    }

	return wp_mail( $user_email, $subject, $message );	
	
}

function enviar_autorespuesta( $post ) {

    $nombre			= sanitize_text_field( $post['nombre'] );
	$mail			= sanitize_email( $post['mail'] );

    $message  = '';
	//$message .= '<center>';
	$message .= sprintf( 'Hola %s !', $nombre ) . "\r\n\r\n";
	$message .= sprintf( 'Gracias por su mensaje.. Nos pondremos en contacto a la brevedad.' ) . "\r\n\r\n";
   // $message .= '</center>';

    $subject = NAKAMA_TITLE. ' - Gracias por su Contacto';

	return wp_mail( $mail, $subject, $message );	
	
}

function enviar_consulta() {

    if( ! verify_recaptcha() ){
        wp_redirect( NAKAMA_URL. '/contacto/error/?error_msg=Usted no es humano! Intentalo nuevamente' );
        die(); 
    }
    
    unset( $_POST['action'] );

    $mail			= sanitize_email( $_POST['mail'] );

	$nombre			= sanitize_text_field( $_POST['nombre'] );
    $empresa		= sanitize_text_field( $_POST['empresa'] );
    $motivo 		= sanitize_text_field( $_POST['motivo'] );
	$telefono		= sanitize_text_field( $_POST['telefono'] );
    $ciudad		    = sanitize_text_field( $_POST['ciudad'] );
    $pais		    = sanitize_text_field( $_POST['pais'] );
    $mensaje	    = sanitize_text_field( $_POST['mensaje'] );

    $my_post = array( 
        'post_type'     => 'consulta', 
        'post_title'    => $nombre.' ( '.$empresa .' )', 
        'post_content'  => $mensaje, 
        'post_status'   => 'pending'
    );

    $post_id = wp_insert_post( $my_post );
	
	if ( $post_id ) {

        update_field( 'nombre',     $nombre,    $post_id );
        update_field( 'empresa',    $empresa,   $post_id );
        update_field( 'motivo',     $motivo,    $post_id );
        update_field( 'telefono',   $telefono,  $post_id );
        update_field( 'mail',       $mail,      $post_id );
        update_field( 'ciudad',     $ciudad,    $post_id );
        update_field( 'pais',       $pais,      $post_id );
	    
	} else {
	    wp_die( "Error al registrar el envio." );
	}

    $send = enviar_email( $_POST ); 

    if ( $send ) {
        $send_respuesta = enviar_autorespuesta( $_POST ); 
        wp_redirect( NAKAMA_URL. '/contacto/gracias/' );
    } else {
        wp_redirect( NAKAMA_URL. '/contacto/error/' );
    }

    exit;
    
}

//add_action( 'admin_post_enviar_consulta', 'enviar_consulta' );
//add_action( 'admin_post_nopriv_enviar_consulta', 'enviar_consulta' );

/*
function my_enqueue_recaptcha_script() {
    wp_enqueue_script( 'google-recaptcha', 'https://www.google.com/recaptcha/api.js', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'my_enqueue_recaptcha_script' );
*/

wp_enqueue_style( 
    'owl-carousel',
    NAKAMA_THEME_URL . '/assets/css/owl.carousel.min.css', [], '2.3.4' 
);

wp_enqueue_script( 
    'owl-carousel', 
    NAKAMA_THEME_URL . '/assets/js/owl.carousel.min.js', ['jquery'], '2.3.4', true
);

function verify_recaptcha() {

    $recaptcha_secret = '6Ld_IdgnAAAAANhqTibEZFYtgJJb6DeQ-6EVJ2Jd';
    $recaptcha_response = $_POST['g-recaptcha-response'];

    $response = wp_remote_post('https://www.google.com/recaptcha/api/siteverify', array(
        'body' => array(
            'secret'    => $recaptcha_secret,
            'response'  => $recaptcha_response
        )
    ));

    $response_body = wp_remote_retrieve_body( $response );
    $result = json_decode( $response_body );

    //dump( $result, false );

    return $result->success ?? false;

}

function custom_theme_css_variables() {
    ?>
    <style>
        :root {
            --wp--style--content-size: 42rem; 
            --wp--style--wide-size: 80rem;
        }
    </style>
    <?php
}

add_action( 'wp_head', 'custom_theme_css_variables' );

/*
function enqueue_block_styles() {
    wp_enqueue_style('wp-block-library');
}

add_action('wp_enqueue_scripts', 'enqueue_block_styles');
*/

add_filter( 'wpcf7_autop_or_not', '__return_false' );

function get_previous_post_by_id( $post ) {

    if (!$post) return null;

    $args = array(
        'post_type'      => $post->post_type,
        'posts_per_page' => 1,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'post_status'    => 'publish',
        'date_query'     => array(
            array(
                'before'     => $post->post_date, // Filtrar posts anteriores
                'inclusive'  => false,
            ),
        ),
    );

    $posts = get_posts($args);
    return !empty($posts) ? $posts[0] : null;

}

function get_next_post_by_id( $post ) {

    if (!$post) return null;

    $args = array(
        'post_type'      => $post->post_type,
        'posts_per_page' => 1,
        'orderby'        => 'date',
        'order'          => 'ASC', // Buscar posts posteriores
        'post_status'    => 'publish',
        'date_query'     => array(
            array(
                'after'      => $post->post_date,
                'inclusive'  => false,
            ),
        ),
    );

    $posts = get_posts($args);
    return !empty($posts) ? $posts[0] : null;

}

function custom_admin_bar_logo() { 

    ?>
    <style>
        #wpadminbar #wp-admin-bar-wp-logo { display: none !important; }
    </style>
    <?php

}

add_action( 'admin_head', 'custom_admin_bar_logo' );

add_filter( 'wpcf7_autop_or_not', '__return_false' );