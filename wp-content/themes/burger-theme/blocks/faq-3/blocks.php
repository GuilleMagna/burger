<?php
/**
 * Registro del bloque ACF: Faq 3
 */

if (!function_exists('burger_register_block_faq_3')) {
    function burger_register_block_faq_3() {
        if (!function_exists('acf_register_block_type')) {
            return;
        }

        acf_register_block_type([
            'name'            => 'faq-3',
            'title'           => __('Faq 3', 'burger-theme'),
            'description'     => __('Bloque Faq 3.', 'burger-theme'),
            'render_template' => __DIR__ . '/content.php',
            'category'        => 'formatting',
            'icon'            => 'block-default',
            'keywords'        => ['faq-3', 'burger'],
            'mode'            => 'preview',
            'supports'        => [
                'align'  => false,
                'anchor' => true,
                'jsx'    => true,
            ],
            'enqueue_style'   => file_exists(__DIR__ . '/styles.css') ? get_template_directory_uri() . '/blocks/faq-3/styles.css' : '',
            'enqueue_script'  => file_exists(__DIR__ . '/scripts.js') ? get_template_directory_uri() . '/blocks/faq-3/scripts.js' : '',
        ]);
    }
}

add_action('acf/init', 'burger_register_block_faq_3');
