<?php
/**
 * Registro del bloque ACF: Footer 7
 */

if (!function_exists('burger_register_block_footer_7')) {
    function burger_register_block_footer_7() {
        if (!function_exists('acf_register_block_type')) {
            return;
        }

        acf_register_block_type([
            'name'            => 'footer-7',
            'title'           => __('Footer 7', 'burger-theme'),
            'description'     => __('Bloque Footer 7.', 'burger-theme'),
            'render_template' => __DIR__ . '/content.php',
            'category'        => 'formatting',
            'icon'            => 'block-default',
            'keywords'        => ['footer-7', 'burger'],
            'mode'            => 'preview',
            'supports'        => [
                'align'  => false,
                'anchor' => true,
                'jsx'    => true,
            ],
            'enqueue_style'   => file_exists(__DIR__ . '/styles.css') ? get_template_directory_uri() . '/blocks/footer-7/styles.css' : '',
            'enqueue_script'  => file_exists(__DIR__ . '/scripts.js') ? get_template_directory_uri() . '/blocks/footer-7/scripts.js' : '',
        ]);
    }
}

add_action('acf/init', 'burger_register_block_footer_7');
