<?php
/**
 * Registro del bloque ACF: Blog 3
 */

if (!function_exists('burger_register_block_blog_3')) {
    function burger_register_block_blog_3() {
        if (!function_exists('acf_register_block_type')) {
            return;
        }

        acf_register_block_type([
            'name'            => 'blog-3',
            'title'           => __('Blog 3', 'burger-theme'),
            'description'     => __('Bloque Blog 3.', 'burger-theme'),
            'render_template' => __DIR__ . '/content.php',
            'category'        => 'formatting',
            'icon'            => 'block-default',
            'keywords'        => ['blog-3', 'burger'],
            'mode'            => 'preview',
            'supports'        => [
                'align'  => false,
                'anchor' => true,
                'jsx'    => true,
            ],
            'enqueue_style'   => file_exists(__DIR__ . '/styles.css') ? get_template_directory_uri() . '/blocks/blog-3/styles.css' : '',
            'enqueue_script'  => file_exists(__DIR__ . '/scripts.js') ? get_template_directory_uri() . '/blocks/blog-3/scripts.js' : '',
        ]);
    }
}

add_action('acf/init', 'burger_register_block_blog_3');
