<?php
/**
 * Registro del bloque ACF: History Title 1
 */

if (!function_exists('burger_register_block_history_title_1')) {
    function burger_register_block_history_title_1() {
        if (!function_exists('acf_register_block_type')) {
            return;
        }

        acf_register_block_type([
            'name'            => 'history-title-1',
            'title'           => __('History Title 1', 'burger-theme'),
            'description'     => __('Bloque History Title 1.', 'burger-theme'),
            'render_template' => __DIR__ . '/content.php',
            'category'        => 'formatting',
            'icon'            => 'block-default',
            'keywords'        => ['history-title-1', 'burger'],
            'mode'            => 'preview',
            'supports'        => [
                'align'  => false,
                'anchor' => true,
                'jsx'    => true,
            ],
            'enqueue_style'   => file_exists(__DIR__ . '/styles.css') ? get_template_directory_uri() . '/blocks/history-title-1/styles.css' : '',
            'enqueue_script'  => file_exists(__DIR__ . '/scripts.js') ? get_template_directory_uri() . '/blocks/history-title-1/scripts.js' : '',
        ]);
    }
}

add_action('acf/init', 'burger_register_block_history_title_1');
