<?php
/**
 * Registro del bloque ACF: About 10
 */

if (!function_exists('burger_register_block_about_10')) {
    function burger_register_block_about_10() {
        if (!function_exists('acf_register_block_type')) {
            return;
        }

        acf_register_block_type([
            'name'            => 'about-10',
            'title'           => __('About 10', 'burger-theme'),
            'description'     => __('Bloque About 10.', 'burger-theme'),
            'render_template' => __DIR__ . '/content.php',
            'category'        => 'formatting',
            'icon'            => 'block-default',
            'keywords'        => ['about-10', 'burger'],
            'mode'            => 'preview',
            'supports'        => [
                'align'  => false,
                'anchor' => true,
                'jsx'    => true,
            ],
            'enqueue_style'   => file_exists(__DIR__ . '/styles.css') ? get_template_directory_uri() . '/blocks/about-10/styles.css' : '',
            'enqueue_script'  => file_exists(__DIR__ . '/scripts.js') ? get_template_directory_uri() . '/blocks/about-10/scripts.js' : '',
        ]);
    }
}

add_action('acf/init', 'burger_register_block_about_10');
