<?php get_header(); 

$post = get_post( NAKAMA_OPTIONS['template_productos'] );
setup_postdata( $post ); 
the_content();

get_footer() ?>