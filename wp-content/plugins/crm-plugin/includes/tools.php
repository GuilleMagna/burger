<?php

function dump( $var, $stop = true ){

  

	echo '<pre>';

	print_r( $var ); 

	echo '</pre>';  

	

	if( $stop ) die(); 

}

function traducir_dia_semana($dia){

	

    switch ($dia) {

        case 'Monday':

            return 'Lunes';

        case 'Tuesday':

            return 'Martes';

        case 'Wednesday':

            return 'Mi&eacute;rcoles';

        case 'Thursday':

            return 'Jueves';

        case 'Friday':

            return 'Viernes';

        case 'Saturday':

            return 'S&aacute;bado';

        case 'Sunday':

            return 'Domingo';

        default:

            return $dia;

    }

    

}

function traducir_mes($mes){

	

    switch ($mes) {

        case 'January':

            return 'Enero';

        case 'February':

            return 'Febrero';

        case 'March':

            return 'Marzo';

        case 'April':

            return 'Abril';

        case 'May':

            return 'Mayo';

        case 'June':

            return 'Junio';

        case 'July':

            return 'Julio';

        case 'August':

            return 'Agosto';

        case 'September':

            return 'Septiembre';

        case 'October':

            return 'Octubre';

        case 'November':

            return 'Noviembre';

        case 'December':

            return 'Diciembre';

        default:

            return $mes;

    }

    

}

function get_count_terms( $taxonomy, $term_slug, $included_post_ids ){

	

	$args = array(

	    'post_type' => 'producto',

	    'posts_per_page' => -1,

	    'post__in' => $included_post_ids,

	    'tax_query' => array(

	        array(

	            'taxonomy' => $taxonomy,

	            'field' => 'slug',

	            'terms' => $term_slug,

	        ),

	    ),

	);

	

	$query = new WP_Query( $args );

	

	return $query->found_posts ?? 0;

	

}

function asignar_destacada_si_no_existe() {

    if ( is_singular('producto') ) {

        global $post;

        if ( has_post_thumbnail( $post->ID ) ) {

            return;

        }

        $adjuntos = get_children( array(

            'post_parent'    => $post->ID,

            'post_type'      => 'attachment',

            'post_mime_type' => 'image',

            'numberposts'    => 1,

            'orderby'        => 'menu_order ID',

            'order'          => 'ASC'

        ) );

        if ( !empty($adjuntos) ) {

            $adjunto = reset($adjuntos); 

            set_post_thumbnail( $post->ID, $adjunto->ID );

        }

    }

    

}

add_action( 'template_redirect', 'asignar_destacada_si_no_existe' );

function incrementar_views_producto() {

    if (is_singular('producto')) { 

        global $post;

        $views = (int) get_post_meta($post->ID, 'views', true);

        $views++;

        update_post_meta($post->ID, 'views', $views);

    }

}

add_action( 'wp', 'incrementar_views_producto' );