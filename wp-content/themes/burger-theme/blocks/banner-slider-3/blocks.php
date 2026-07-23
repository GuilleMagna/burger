<?php
/**
 * Registro del bloque ACF: Banner Slider 3
 */

if (!function_exists('burger_register_block_banner_slider_3')) {
    function burger_register_block_banner_slider_3() {
        if (!function_exists('acf_register_block_type')) {
            return;
        }

        acf_register_block_type([
            'name'            => 'banner-slider-3',
            'title'           => __('Banner Slider 3', 'burger-theme'),
            'description'     => __('Bloque Banner Slider 3.', 'burger-theme'),
            'render_template' => __DIR__ . '/content.php',
            'category'        => 'formatting',
            'icon'            => 'block-default',
            'keywords'        => ['banner-slider-3', 'burger'],
            'mode'            => 'preview',
            'supports'        => [
                'align'  => false,
                'anchor' => true,
                'jsx'    => true,
            ],
            'enqueue_style'   => file_exists(__DIR__ . '/styles.css') ? get_template_directory_uri() . '/blocks/banner-slider-3/styles.css' : '',
            'enqueue_script'  => file_exists(__DIR__ . '/scripts.js') ? get_template_directory_uri() . '/blocks/banner-slider-3/scripts.js' : '',
        ]);
    }
}

add_action('acf/init', 'burger_register_block_banner_slider_3');
