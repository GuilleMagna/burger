<?php
/**
 * Registro del bloque ACF: Header 4
 */

if (!function_exists('burger_register_block_header_4')) {
    function burger_register_block_header_4() {
        if (!function_exists('acf_register_block_type')) {
            return;
        }

        acf_register_block_type([
            'name'            => 'header-4',
            'title'           => __('Header 4', 'burger-theme'),
            'description'     => __('Bloque Header 4.', 'burger-theme'),
            'render_template' => __DIR__ . '/content.php',
            'category'        => 'formatting',
            'icon'            => 'block-default',
            'keywords'        => ['header-4', 'burger'],
            'mode'            => 'preview',
            'supports'        => [
                'align'  => false,
                'anchor' => true,
                'jsx'    => true,
            ],
            'enqueue_style'   => file_exists(__DIR__ . '/styles.css') ? get_template_directory_uri() . '/blocks/header-4/styles.css' : '',
            'enqueue_script'  => file_exists(__DIR__ . '/scripts.js') ? get_template_directory_uri() . '/blocks/header-4/scripts.js' : '',
        ]);
    }
}

add_action('acf/init', 'burger_register_block_header_4');
