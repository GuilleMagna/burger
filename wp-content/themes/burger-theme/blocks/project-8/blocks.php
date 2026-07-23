<?php
/**
 * Registro del bloque ACF: Project 8
 */

if (!function_exists('burger_register_block_project_8')) {
    function burger_register_block_project_8() {
        if (!function_exists('acf_register_block_type')) {
            return;
        }

        acf_register_block_type([
            'name'            => 'project-8',
            'title'           => __('Project 8', 'burger-theme'),
            'description'     => __('Bloque Project 8.', 'burger-theme'),
            'render_template' => __DIR__ . '/content.php',
            'category'        => 'formatting',
            'icon'            => 'block-default',
            'keywords'        => ['project-8', 'burger'],
            'mode'            => 'preview',
            'supports'        => [
                'align'  => false,
                'anchor' => true,
                'jsx'    => true,
            ],
            'enqueue_style'   => file_exists(__DIR__ . '/styles.css') ? get_template_directory_uri() . '/blocks/project-8/styles.css' : '',
            'enqueue_script'  => file_exists(__DIR__ . '/scripts.js') ? get_template_directory_uri() . '/blocks/project-8/scripts.js' : '',
        ]);
    }
}

add_action('acf/init', 'burger_register_block_project_8');
