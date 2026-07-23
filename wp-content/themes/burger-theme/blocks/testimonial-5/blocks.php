<?php
/**
 * Registro del bloque ACF: Testimonial 5
 */

if (!function_exists('burger_register_block_testimonial_5')) {
    function burger_register_block_testimonial_5() {
        if (!function_exists('acf_register_block_type')) {
            return;
        }

        acf_register_block_type([
            'name'            => 'testimonial-5',
            'title'           => __('Testimonial 5', 'burger-theme'),
            'description'     => __('Bloque Testimonial 5.', 'burger-theme'),
            'render_template' => __DIR__ . '/content.php',
            'category'        => 'formatting',
            'icon'            => 'block-default',
            'keywords'        => ['testimonial-5', 'burger'],
            'mode'            => 'preview',
            'supports'        => [
                'align'  => false,
                'anchor' => true,
                'jsx'    => true,
            ],
            'enqueue_style'   => file_exists(__DIR__ . '/styles.css') ? get_template_directory_uri() . '/blocks/testimonial-5/styles.css' : '',
            'enqueue_script'  => file_exists(__DIR__ . '/scripts.js') ? get_template_directory_uri() . '/blocks/testimonial-5/scripts.js' : '',
        ]);
    }
}

add_action('acf/init', 'burger_register_block_testimonial_5');
