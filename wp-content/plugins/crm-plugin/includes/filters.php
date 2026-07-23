<?php
function supersano_alter_password_reset_link($url){
	
    if( strpos($url, 'wp-login.php?action=rp&wp_lang=es_ES') !== false ){
        $url = preg_replace('/(.*?)wp\-login\.php/', get_permalink( 59 ), $url); //contrasena 
    }
    
    return $url;
    
}
//add_filter('network_site_url', 'supersano_alter_password_reset_link');
//add_filter('site_url', 'supersano_alter_password_reset_link');
function supersano_alter_lost_password_link($url){
	
    if( strpos($url, 'wp-login.php?action=lostpassword') !== false ){
        $url = preg_replace('/(.*?)wp\-login\.php/', get_permalink(50), $url ); //recuperar 
    }
    
    return $url;
    
}
//add_filter('network_site_url', 'supersano_alter_lost_password_link');
//add_filter('site_url', 'supersano_alter_lost_password_link');
function supersano_alter_checkmail_link($url){
	
    if( strpos($url, 'wp-login.php?action=checkemail') !== false ){
        $url = preg_replace('/(.*?)wp\-login\.php/', get_permalink(453), $url ); //checkemail
    }
    
    return $url;
    
}
//add_filter('network_site_url', 'supersano_alter_checkmail_link');
//add_filter('site_url', 'supersano_alter_checkmail_link');
function supersano_prefix_category_title( $title ) {
  
  $title_arr = explode( ': ', $title ); 
    if ( sizeof( $title_arr ) == 2 ) $title = $title_arr[1];
    
    return $title;
    
}
//add_filter( 'get_the_archive_title', 'supersano_prefix_category_title' );
function supersano_tagcloud_postcount_filter( $variable ){
  $variable = str_replace('<span class="tag-link-count"> (', ' <span class="post_count"> ', $variable);
  $variable = str_replace(')</span>', '</span>', $variable);
  return $variable;
}
//add_filter('wp_tag_cloud','supersano_tagcloud_postcount_filter');