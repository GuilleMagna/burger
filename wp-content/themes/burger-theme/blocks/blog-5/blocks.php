<?php
/**
 * Registro del bloque ACF: Blog 5
 */

if (!function_exists('burger_register_block_blog_5')) {
    function burger_register_block_blog_5() {
        if (!function_exists('acf_register_block_type')) {
            return;
        }

        acf_register_block_type([
            'name'            => 'blog-5',
            'title'           => __('Blog 5', 'burger-theme'),
            'description'     => __('Bloque Blog 5.', 'burger-theme'),
            'render_template' => __DIR__ . '/content.php',
            'category'        => 'formatting',
            'icon'            => 'block-default',
            'keywords'        => ['blog-5', 'burger'],
            'mode'            => 'preview',
            'supports'        => [
                'align'  => false,
                'anchor' => true,
                'jsx'    => true,
            ],
            'enqueue_style'   => file_exists(__DIR__ . '/styles.css') ? get_template_directory_uri() . '/blocks/blog-5/styles.css' : '',
            'enqueue_script'  => file_exists(__DIR__ . '/scripts.js') ? get_template_directory_uri() . '/blocks/blog-5/scripts.js' : '',
        ]);
    }
}

add_action('acf/init', 'burger_register_block_blog_5');
