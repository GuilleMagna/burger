<?php
/**
 * Registro del bloque ACF: Banner 6
 */

if (!function_exists('burger_register_block_banner_6')) {
    function burger_register_block_banner_6() {
        if (!function_exists('acf_register_block_type')) {
            return;
        }

        acf_register_block_type([
            'name'            => 'banner-6',
            'title'           => __('Banner 6', 'burger-theme'),
            'description'     => __('Bloque Banner 6.', 'burger-theme'),
            'render_template' => __DIR__ . '/content.php',
            'category'        => 'formatting',
            'icon'            => 'block-default',
            'keywords'        => ['banner-6', 'burger'],
            'mode'            => 'preview',
            'supports'        => [
                'align'  => false,
                'anchor' => true,
                'jsx'    => true,
            ],
            'enqueue_style'   => file_exists(__DIR__ . '/styles.css') ? get_template_directory_uri() . '/blocks/banner-6/styles.css' : '',
            'enqueue_script'  => file_exists(__DIR__ . '/scripts.js') ? get_template_directory_uri() . '/blocks/banner-6/scripts.js' : '',
        ]);
    }
}

add_action('acf/init', 'burger_register_block_banner_6');
