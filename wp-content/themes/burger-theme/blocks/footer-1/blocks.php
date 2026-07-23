<?php
/**
 * Registro del bloque ACF: Footer 1
 */

if (!function_exists('burger_register_block_footer_1')) {
    function burger_register_block_footer_1() {
        if (!function_exists('acf_register_block_type')) {
            return;
        }

        acf_register_block_type([
            'name'            => 'footer-1',
            'title'           => __('Footer 1', 'burger-theme'),
            'description'     => __('Bloque Footer 1.', 'burger-theme'),
            'render_template' => __DIR__ . '/content.php',
            'category'        => 'formatting',
            'icon'            => 'block-default',
            'keywords'        => ['footer-1', 'burger'],
            'mode'            => 'preview',
            'supports'        => [
                'align'  => false,
                'anchor' => true,
                'jsx'    => true,
            ],
            'enqueue_style'   => file_exists(__DIR__ . '/styles.css') ? get_template_directory_uri() . '/blocks/footer-1/styles.css' : '',
            'enqueue_script'  => file_exists(__DIR__ . '/scripts.js') ? get_template_directory_uri() . '/blocks/footer-1/scripts.js' : '',
        ]);
    }
}

add_action('acf/init', 'burger_register_block_footer_1');
