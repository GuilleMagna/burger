<?php 

define( 'NAKAMA_THEME_PATH',    get_template_directory()        );
define( 'NAKAMA_THEME_URL',     get_template_directory_uri()    );
define( 'NAKAMA_TITLE',         get_bloginfo('title')           );
define( 'NAKAMA_URL',           get_bloginfo('url')             );
define( 'NAKAMA_VERSION',       get_bloginfo('version')         );
define( 'NAKAMA_DESCRIPCION',   get_bloginfo('description')     );
define( 'NAKAMA_OPTIONS',       get_fields( 'option' )          );

require_once NAKAMA_THEME_PATH . '/inc/tools.php';
require_once NAKAMA_THEME_PATH . '/inc/setup.php';
require_once NAKAMA_THEME_PATH . '/inc/blocks.php';

add_action('wp_enqueue_scripts', function () {
    $axiron_css = NAKAMA_THEME_PATH . '/assets/css/axiron-main.css';
    if (file_exists($axiron_css)) {
        wp_enqueue_style(
            'axiron-main',
            NAKAMA_THEME_URL . '/assets/css/axiron-main.css',
            [],
            filemtime($axiron_css)
        );
    }

    $dcm_css = NAKAMA_THEME_PATH . '/assets/css/dcm-proposal.css';
    $dcm_root = get_page_by_path('dcm', OBJECT, 'page');
    $is_dcm_family = false;
    if ($dcm_root && is_page()) {
        $current_page_id = get_queried_object_id();
        $is_dcm_family = ((int) $current_page_id === (int) $dcm_root->ID)
            || in_array((int) $dcm_root->ID, array_map('intval', get_post_ancestors($current_page_id)), true);
    }

    // También detecta páginas DCM copiadas o renombradas fuera del árbol /dcm/.
    // Esto permite usar los bloques en propuestas como /dcm-new/ sin depender del slug.
    $current_content = is_singular()
        ? (string) get_post_field('post_content', get_queried_object_id())
        : '';
    $has_dcm_blocks = (bool) preg_match(
        '/<!--\s+wp:acf\/[a-z0-9-]*-dcm\b/i',
        $current_content
    );

    if (($is_dcm_family || $has_dcm_blocks) && file_exists($dcm_css)) {
        wp_enqueue_style(
            'dcm-proposal',
            NAKAMA_THEME_URL . '/assets/css/dcm-proposal.css',
            [],
            filemtime($dcm_css)
        );
    }
});

?>
