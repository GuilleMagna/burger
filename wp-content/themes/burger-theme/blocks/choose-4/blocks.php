<?php
/**
 * Registro del bloque ACF: Choose 4
 */

if (!function_exists('burger_register_block_choose_4')) {
    function burger_register_block_choose_4() {
        if (!function_exists('acf_register_block_type')) {
            return;
        }

        acf_register_block_type([
            'name'            => 'choose-4',
            'title'           => __('Choose 4', 'burger-theme'),
            'description'     => __('Bloque Choose 4.', 'burger-theme'),
            'render_template' => __DIR__ . '/content.php',
            'category'        => 'formatting',
            'icon'            => 'block-default',
            'keywords'        => ['choose-4', 'burger'],
            'mode'            => 'preview',
            'supports'        => [
                'align'  => false,
                'anchor' => true,
                'jsx'    => true,
            ],
            'enqueue_style'   => file_exists(__DIR__ . '/styles.css') ? get_template_directory_uri() . '/blocks/choose-4/styles.css' : '',
            'enqueue_script'  => file_exists(__DIR__ . '/scripts.js') ? get_template_directory_uri() . '/blocks/choose-4/scripts.js' : '',
        ]);
    }
}

add_action('acf/init', 'burger_register_block_choose_4');
