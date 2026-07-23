<?php get_header(); 

$post = get_post( BURGER_OPTIONS['template_servicios'] );
setup_postdata( $post ); 
the_content();

get_footer() ?>