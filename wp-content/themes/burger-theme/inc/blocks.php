<?php

function generate_dynamic_css() {

    extract( NAKAMA_OPTIONS );

    return "
        :root {

        --tj-ff-body: $font_family;
        --tj-ff-heading: $font_family;
        --tj-ff-fontawesome: 'Font Awesome 6 Pro';

        --tj-color-theme-primary: $tj_color_theme_primary;
        --tj-color-theme-bg: $tj_color_theme_bg;
        --tj-color-heading-primary: $tj_color_heading_primary;
        
        --tj-color-text-body: $tj_color_text_body;
        --tj-color-text-body-2: $tj_color_text_body_2;
        --tj-color-text-body-3: $tj_color_text_body_3;
        --tj-color-text-body-4: $tj_color_text_body_4;
        --tj-color-text-body-5: $tj_color_text_body_5;
        
        --tj-color-theme-bg-2: $tj_color_theme_bg_2;
        --tj-color-theme-bg-3: $tj_color_theme_bg_3;

        --tj-color-theme-dark: $tj_color_theme_dark;
        --tj-color-theme-dark-2: $tj_color_theme_dark_2;
        --tj-color-theme-dark-3: $tj_color_theme_dark_3;
        --tj-color-theme-dark-4: $tj_color_theme_dark_4;
        --tj-color-theme-dark-5: $tj_color_theme_dark_5;

        --tj-color-red-1: $tj_color_red_1;

        --tj-color-grey-1: $tj_color_grey_1;
        --tj-color-grey-2: $tj_color_grey_2;
        --tj-color-grey-3: $tj_color_grey_3;

        --tj-color-border-1: $tj_color_border_1;
        --tj-color-border-2: $tj_color_border_2;
        --tj-color-border-3: $tj_color_border_3;
        --tj-color-border-4: $tj_color_border_4;
        --tj-color-border-5: $tj_color_border_5;

        --tj-color-common-white: $tj_color_common_white;
        --tj-color-common-black: $tj_color_common_black;

        --tj-fw-normal: normal;
        --tj-fw-thin: 100;
        --tj-fw-elight: 200;
        --tj-fw-light: 300;
        --tj-fw-regular: 400;
        --tj-fw-medium: 500;
        --tj-fw-sbold: 600;
        --tj-fw-bold: 700;
        --tj-fw-ebold: 800;
        --tj-fw-black: 900;

        --tj-fs-body: 16px;
        --tj-fs-p: 16px;
        --tj-fs-h1: 74px;
        --tj-fs-h2: 48px;
        --tj-fs-h3: 32px;
        --tj-fs-h4: 24px;
        --tj-fs-h5: 20px;
        --tj-fs-h6: 18px;

        }
    ";
}

function add_editor_dynamic_styles() {
    $custom_css = generate_dynamic_css();
    wp_add_inline_style( 'wp-block-css', $custom_css );
}

add_action( 'enqueue_block_editor_assets', 'add_editor_dynamic_styles' );

function nakama_enqueue_editor_styles() {
    add_editor_style('themes/css/blocks.css');
}

add_action('admin_init', 'nakama_enqueue_editor_styles');

add_action( 'after_setup_theme', function() {
    add_theme_support( 'editor-styles' ); 
    add_theme_support( 'block-templates' ); 
});

add_action( 'init', 'nakama_extend_blocks' );

function nakama_extend_blocks() {

    if (!function_exists('acf_register_block')) {
        return;
    }

    $blocks = glob(
        NAKAMA_THEME_PATH . '/blocks/*',
        GLOB_ONLYDIR
    );

    foreach ($blocks as $block_dir) {

        if (!file_exists($block_dir . '/content.php')) {
            continue;
        }

        $slug = basename($block_dir);

        $config = [];

        if (file_exists($block_dir . '/config.php')) {
            $config = require $block_dir . '/config.php';
        }

        $style_path  = $block_dir . '/styles.css';
        $script_path = $block_dir . '/scripts.js';

        acf_register_block([
            'name'              => $slug,
            'title'             => $config['title'] ?? ucfirst($slug),
            'description'       => $config['description'] ?? '',
            'render_callback'   => 'nakama_render_blocks',
            'category'          => $config['category'] ?? 'layout',
            'icon'              => $config['icon'] ?? 'layout',

            'enqueue_style'   => file_exists($style_path)
                ? NAKAMA_THEME_URL . '/blocks/' . $slug . '/styles.css?ver=' . filemtime($style_path)
                : '',

            'enqueue_script'  => file_exists($script_path)
                ? NAKAMA_THEME_URL . '/blocks/' . $slug . '/scripts.js?ver=' . filemtime($script_path)
                : '',

            'keywords' => $config['keywords'] ?? [],

            'supports' => $config['supports'] ?? [
                'align'     => ['wide', 'full'],
                'layout'    => true
            ]
        ]);

    }

}

function nakama_render_blocks( $block ) {

    $slug = str_replace( 'acf/', '', $block['name'] );

    $block_path = NAKAMA_THEME_PATH . "/blocks/{$slug}";
    $content_png = $block_path . "/content.png";
    $content_php = $block_path . "/content.php";

    // Si existe content.png y estamos en el admin (editor)
    if ( is_admin() && file_exists( $content_png ) ) {

        $url = get_stylesheet_directory_uri() . "/blocks/{$slug}/content.png";

        echo '<div style="width:100%;">';
        echo '<img src="'. esc_url( $url ) .'" style="width:100%; height:auto; display:block;" />';
        echo '</div>';

        return;
    }

    // Si no, render normal
    if ( file_exists( $content_php ) ) {
        include $content_php;
    }

}

/*
function nakama_extend_blocks() {

    if ( function_exists( 'acf_register_block' ) ) {

        if( count( NAKAMA_OPTIONS['bloques_disponibles'] ) > 0 ){

            foreach( NAKAMA_OPTIONS['bloques_disponibles'] as $bloque ){

                if( $bloque['activo'] == 0 ) continue;
                $slug = sanitize_title($bloque['nombre']);
                $nombre = $bloque['nombre'];
    
                acf_register_block( array(
                    'name'              => $slug,
                    'title'             => $nombre,
                    'description'       => 'Imprime el '.$nombre.' del sitio',
                    'render_callback'   => 'nakama_render_blocks',
                    'category'          => 'layout',
                    'icon'              => '<svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect x="0" fill="none" width="20" height="20"></rect> <g> <path d="M15 6V4h-3v2H8V4H5v2H4c-.6 0-1 .4-1 1v8h14V7c0-.6-.4-1-1-1h-1z"></path> </g> </g></svg>',
                    'enqueue_style'     => NAKAMA_THEME_URL.'/blocks/'.$slug.'/styles.css',
                    'enqueue_script'    => NAKAMA_THEME_URL.'/blocks/'.$slug.'/scripts.js',
                    'supports'          => array( 'align' => array( 'wide', 'full' ),'layout'  => true ),
                ));

            }

        }

    }

}
*/

add_action('init', 'nakama_import_fields_json', 99);

function nakama_import_fields_json() {

    if (!is_admin()) {
        return;
    }

    if (!function_exists('acf_import_field_group')) {
        return;
    }

    if (get_option('nakama_acf_json_imported')) {
        return;
    }

    $files = glob(NAKAMA_THEME_PATH . '/blocks/*/fields.json');

    if (empty($files)) {
        return;
    }

    $existing_groups = acf_get_field_groups();
    $existing_keys   = [];

    if (!empty($existing_groups)) {
        foreach ($existing_groups as $existing_group) {
            if (!empty($existing_group['key'])) {
                $existing_keys[$existing_group['key']] = true;
            }
        }
    }

    foreach ($files as $file) {

        $groups = json_decode(file_get_contents($file), true);

        if (empty($groups)) {
            continue;
        }

        foreach ($groups as $group) {

            if (empty($group['key'])) {
                continue;
            }

            if (isset($existing_keys[$group['key']])) {
                continue;
            }

            acf_import_field_group($group);

            $existing_keys[$group['key']] = true;
        }
    }

    update_option('nakama_acf_json_imported', time(), false);

}

if (isset($_GET['nakama_reimport_acf'])) {
    delete_option('nakama_acf_json_imported');
}

add_filter('acf/settings/load_json', function ($paths) {

    foreach (glob(NAKAMA_THEME_PATH . '/blocks/*', GLOB_ONLYDIR) as $dir) {
        if (file_exists($dir . '/fields.json')) {
            $paths[] = $dir;
        }
    }

    return $paths;
});

function mg_get_default_preset_id( $block_name ) {

    $preset = get_page_by_path( $block_name, OBJECT, 'preset' );
    if( $preset ) return $preset->ID;

    return false;

}

add_action( 'enqueue_block_editor_assets', function() {

    wp_enqueue_style(
        'nakama-editor-styles',
        get_stylesheet_directory_uri() . '/assets/css/editor.css',
        [],
        filemtime( get_stylesheet_directory() . '/assets/css/editor.css' )
    );
    
});

function load_bootstrap_in_editor() {
    wp_enqueue_style( 'bootstrap-css',     NAKAMA_THEME_URL . '/vendors/bootstrap5.2/css/bootstrap.min.css', array() );
    wp_enqueue_style( 'theme-fonts-css',   NAKAMA_THEME_URL . '/themes/css/fonts.css', array() );
    wp_enqueue_style( 'theme-colors-css',  NAKAMA_THEME_URL . '/themes/css/colors.css', array() );
    wp_enqueue_style( 'theme-styler-css',  NAKAMA_THEME_URL . '/themes/css/styler.css', array() );
}

add_action('enqueue_block_editor_assets', 'load_bootstrap_in_editor');

function get_block_classes( $block = '') {
    $attributes = get_block_wrapper_attributes($block);
    preg_match('/class="([^"]+)"/', $attributes, $matches);
    return isset($matches[1]) ? $matches[1] : '';
}

function cargar_novedades() {

    $page = isset($_POST['page']) ? $_POST['page'] : 1;
    $cat = isset($_POST['cat']) ? $_POST['cat'] : 0;
    $per_page = isset($_POST['per_page']) ? $_POST['per_page'] : 3;
    $query = new WP_Query(array(
        'posts_per_page' => $per_page,
        'paged' => $page,
        'cat' => $cat
    ));
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
        <div class="col-lg-4">
            <div class="card card-novedades border-0 rounded-0 mb-5">
                <div class="card-header border-0 rounded-0 mb-4 img novedades-img position-relative" style="background-image: url('<?=  get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>');">
                    <a href="<?=  get_the_permalink(); ?>" class="position-absolute w-100 h-100"></a>
                </div>
                <div class="card-body border-0 d-flex flex-column">
                    <div class="novedades-titulo">
                        <h3 class="mb-4 text-big light text-primary"><?php the_title(); ?></h3>
                    </div>
                    <div class="novedades-descripcion">
                        <p class="mb-4 text-normal text-dark"><?=  get_the_excerpt(); ?></p>
                    </div>
                    <a href="<?=  get_the_permalink(); ?>" class="text-normal text-primary text-uppercase text-decoration-underline">
                        Leer Más »
                    </a>
                </div>
            </div>
        </div>  
    <?php endwhile; wp_reset_postdata(); endif;
    wp_die();
}

add_action('wp_ajax_cargar_novedades', 'cargar_novedades');
add_action('wp_ajax_nopriv_cargar_novedades', 'cargar_novedades');

add_filter('acf/get_field_groups', function ($groups) {

    if (!is_admin()) return $groups;
    global $post;
    if (!$post) return $groups;
    $post_type = get_post_type($post);
    $options_map = [
        'post'     => 'campos_disponibles_post',
        'producto' => 'campos_disponibles_producto',
        'servicio' => 'campos_disponibles_servicio',
    ];
    if (!isset($options_map[$post_type])) return $groups;
    $repetidor = get_field($options_map[$post_type], 'option');
    $slugs_permitidos = array_filter(array_map(fn($item) => $item['title'] ?? null, (array) $repetidor));
    return array_filter( $groups, function ($group) use ( $slugs_permitidos ) {
        foreach ($slugs_permitidos as $slug) {
            if ( sanitize_title( $group['title'] ) == sanitize_title( $slug ) ) 
                return true; 
        }
        return false; 
    });
    
});

function burger_block_cache_start($block, $ttl = 600) {

    if (is_admin()) return false;

    $cache_key = 'burger_block_' . get_the_ID() . '_' . md5($block['name'] . $block['id']);

    $html = get_transient($cache_key);

    if ($html !== false) {
        echo $html;
        return false;
    }

    ob_start();

    return $cache_key;
}

function burger_block_cache_end($cache_key, $ttl = 600) {

    if (!$cache_key || is_admin()) return;

    $html = ob_get_clean();

    set_transient($cache_key, $html, $ttl);

    echo $html;
}