<?php
/**
 * Registro del bloque ACF: Header 2
 */

if (!function_exists('burger_register_block_header_2')) {
    function burger_register_block_header_2() {
        if (!function_exists('acf_register_block_type')) {
            return;
        }

        acf_register_block_type([
            'name'            => 'header-2',
            'title'           => __('Header 2', 'burger-theme'),
            'description'     => __('Bloque Header 2.', 'burger-theme'),
            'render_template' => __DIR__ . '/content.php',
            'category'        => 'formatting',
            'icon'            => 'block-default',
            'keywords'        => ['header-2', 'burger'],
            'mode'            => 'preview',
            'supports'        => [
                'align'  => false,
                'anchor' => true,
                'jsx'    => true,
            ],
            'enqueue_style'   => file_exists(__DIR__ . '/styles.css') ? get_template_directory_uri() . '/blocks/header-2/styles.css' : '',
            'enqueue_script'  => file_exists(__DIR__ . '/scripts.js') ? get_template_directory_uri() . '/blocks/header-2/scripts.js' : '',
        ]);
    }
}

add_action('acf/init', 'burger_register_block_header_2');
