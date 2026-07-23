<?php
/**
 * Registro del bloque ACF: Contact Top 1
 */

if (!function_exists('burger_register_block_contact_top_1')) {
    function burger_register_block_contact_top_1() {
        if (!function_exists('acf_register_block_type')) {
            return;
        }

        acf_register_block_type([
            'name'            => 'contact-top-1',
            'title'           => __('Contact Top 1', 'burger-theme'),
            'description'     => __('Bloque Contact Top 1.', 'burger-theme'),
            'render_template' => __DIR__ . '/content.php',
            'category'        => 'formatting',
            'icon'            => 'block-default',
            'keywords'        => ['contact-top-1', 'burger'],
            'mode'            => 'preview',
            'supports'        => [
                'align'  => false,
                'anchor' => true,
                'jsx'    => true,
            ],
            'enqueue_style'   => file_exists(__DIR__ . '/styles.css') ? get_template_directory_uri() . '/blocks/contact-top-1/styles.css' : '',
            'enqueue_script'  => file_exists(__DIR__ . '/scripts.js') ? get_template_directory_uri() . '/blocks/contact-top-1/scripts.js' : '',
        ]);
    }
}

add_action('acf/init', 'burger_register_block_contact_top_1');
