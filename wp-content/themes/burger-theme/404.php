<?php get_header(); 

$post = get_post( NAKAMA_OPTIONS['template_404'] );
setup_postdata( $post ); 
the_content();

get_footer() ?>