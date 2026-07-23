<?php
/**
 * Registro del bloque ACF: Marquee 1
 */

if (!function_exists('burger_register_block_marquee_1')) {
    function burger_register_block_marquee_1() {
        if (!function_exists('acf_register_block_type')) {
            return;
        }

        acf_register_block_type([
            'name'            => 'marquee-1',
            'title'           => __('Marquee 1', 'burger-theme'),
            'description'     => __('Bloque Marquee 1.', 'burger-theme'),
            'render_template' => __DIR__ . '/content.php',
            'category'        => 'formatting',
            'icon'            => 'block-default',
            'keywords'        => ['marquee-1', 'burger'],
            'mode'            => 'preview',
            'supports'        => [
                'align'  => false,
                'anchor' => true,
                'jsx'    => true,
            ],
            'enqueue_style'   => file_exists(__DIR__ . '/styles.css') ? get_template_directory_uri() . '/blocks/marquee-1/styles.css' : '',
            'enqueue_script'  => file_exists(__DIR__ . '/scripts.js') ? get_template_directory_uri() . '/blocks/marquee-1/scripts.js' : '',
        ]);
    }
}

add_action('acf/init', 'burger_register_block_marquee_1');
