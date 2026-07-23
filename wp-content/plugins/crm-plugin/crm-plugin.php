<?php

/*
Plugin Name: CRM Plugin
Description: Plugin generado automáticamente que incluye plantillas, funciones y assets del tema para ejecutar el CRM dentro de un plugin. Revise y adapte el código antes de usar en producción.
Version: 0.1
Author: Nakama + ChatGPT
Text Domain: crm-plugin
*/

defined( 'ABSPATH' ) or die( 'No direct access' );

if ( ! defined( 'CRM_PLUGIN_PATH' ) ) {
    define( 'CRM_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
    define( 'CRM_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

add_action( 'wp_enqueue_scripts', function() {

    $css_path = CRM_PLUGIN_PATH . 'assets/css/';
    $css_url = CRM_PLUGIN_URL . 'assets/css/';
    foreach ( glob( $css_path . '*.css' ) as $css_file ) {
        $handle = 'crm-' . basename( $css_file, '.css' );
        wp_enqueue_style( $handle, $css_url . basename($css_file), array(), filemtime( $css_file ) );
    }

    $js_path = CRM_PLUGIN_PATH . 'assets/js/';
    $js_url = CRM_PLUGIN_URL . 'assets/js/';
    foreach ( glob( $js_path . '*.js' ) as $js_file ) {
        $handle = 'crm-' . basename( $js_file, '.js' );
        wp_enqueue_script( $handle, $js_url . basename($js_file), array('jquery'), filemtime( $js_file ), true );
    }

} );

add_filter( 'theme_page_templates', function( $templates ) {

    $plugin_templates = array();
    $tpl_path = CRM_PLUGIN_PATH . 'templates/';
    if ( is_dir( $tpl_path ) ) {
        foreach ( glob( $tpl_path . '*.php' ) as $file ) {
            $slug = basename( $file );
            $name = 'CRM - ' . $slug;
            $plugin_templates[ $slug ] = $name;
        }
    }

    return array_merge( $templates, $plugin_templates );

} );

add_filter( 'template_include', function( $template ) {

    if ( is_page() ) {
        $post = get_queried_object();
        if ( $post && ! empty( $post->page_template ) ) {
            $template_file = basename( $post->page_template );
            $candidate = CRM_PLUGIN_PATH . 'templates/' . $template_file;
            if ( file_exists( $candidate ) ) {
                return $candidate;
            }
        }
    }

    return $template;

}, 99 );

add_filter('single_template', function($template) {

    global $post;

    $plugin_path = plugin_dir_path(__FILE__) . 'templates/';
    $custom_template = $plugin_path . 'single-' . $post->post_type . '.php';

    if (file_exists($custom_template)) {
        return $custom_template;
    }

    return $template;
    
});

include_once CRM_PLUGIN_PATH . 'includes/functions.php';

register_activation_hook(__FILE__, function() {
    flush_rewrite_rules();
    update_option('crm_nakama_pending_acf_import', true);
});

add_action('acf/init', function() {

    if (get_option('crm_nakama_pending_acf_import')) {
        crm_nakama_import_acf_json();
        delete_option('crm_nakama_pending_acf_import');
    }
    
});

register_deactivation_hook( __FILE__, function() { 
    flush_rewrite_rules(); 
} );
