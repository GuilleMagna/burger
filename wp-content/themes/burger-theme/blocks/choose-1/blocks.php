<?php
/**
 * Registro del bloque ACF: Choose 1
 */

if (!function_exists('burger_register_block_choose_1')) {
    function burger_register_block_choose_1() {
        if (!function_exists('acf_register_block_type')) {
            return;
        }

        acf_register_block_type([
            'name'            => 'choose-1',
            'title'           => __('Choose 1', 'burger-theme'),
            'description'     => __('Bloque Choose 1.', 'burger-theme'),
            'render_template' => __DIR__ . '/content.php',
            'category'        => 'formatting',
            'icon'            => 'block-default',
            'keywords'        => ['choose-1', 'burger'],
            'mode'            => 'preview',
            'supports'        => [
                'align'  => false,
                'anchor' => true,
                'jsx'    => true,
            ],
            'enqueue_style'   => file_exists(__DIR__ . '/styles.css') ? get_template_directory_uri() . '/blocks/choose-1/styles.css' : '',
            'enqueue_script'  => file_exists(__DIR__ . '/scripts.js') ? get_template_directory_uri() . '/blocks/choose-1/scripts.js' : '',
        ]);
    }
}

add_action('acf/init', 'burger_register_block_choose_1');
