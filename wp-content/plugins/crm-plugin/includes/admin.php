<?php
defined('ABSPATH') || exit;
/**
 * AJAX: Obtener lista de clientes (JSON)
 */

add_action( 'admin_menu', function() {

    $capability = 'manage_options';
    $slug = 'crm-ajustes';

    add_menu_page(
        'CRM Ajustes',
        'CRM Ajustes',
        $capability,
        $slug,
        function() {
            $path = CRM_PLUGIN_PATH . 'templates/admin/ajustes.php';
            if ( file_exists( $path ) ) include $path;
            else echo '<div class="wrap"><h1>Ajustes</h1><p>No disponible.</p></div>';
        },
        'dashicons-admin-settings',
        90
    );

    /*
    add_submenu_page( $slug, 'Escritorio', 'Escritorio', $capability, $slug );
    add_submenu_page( $slug, 'Clientes', 'Clientes', $capability, 'crm-nakama-clientes', function() {
        $path = CRM_PLUGIN_PATH . 'templates/admin/clientes.php';
        if ( file_exists( $path ) ) include $path;
        else echo '<div class="wrap"><h1>Clientes</h1><p>No disponible.</p></div>';
    } );
    add_submenu_page( $slug, 'Pedidos', 'Pedidos', $capability, 'crm-nakama-pedidos', function() {
        $path = CRM_PLUGIN_PATH . 'templates/admin/pedidos.php';
        if ( file_exists( $path ) ) include $path;
        else echo '<div class="wrap"><h1>Pedidos</h1><p>No disponible.</p></div>';
    } );
    add_submenu_page( $slug, 'Ajustes', 'Ajustes', $capability, 'crm-nakama-ajustes', function() {
        $path = CRM_PLUGIN_PATH . 'templates/admin/ajustes.php';
        if ( file_exists( $path ) ) include $path;
        else echo '<div class="wrap"><h1>Ajustes</h1><p>No disponible.</p></div>';
    } );
    */

} );

add_action( 'admin_enqueue_scripts', function( $hook ) {

    if ( strpos( $hook, 'crm-nakama' ) === false && strpos( $hook, 'toplevel_page_crm-nakama' ) === false ) {
        return;
    }

    $css_path = CRM_PLUGIN_PATH . 'assets/css/';
    $css_url = CRM_PLUGIN_URL . 'assets/css/';
    foreach ( glob( $css_path . '*.css' ) as $css_file ) {
        $handle = 'crm-admin-' . basename( $css_file, '.css' );
        wp_enqueue_style( $handle, $css_url . basename($css_file), array(), filemtime( $css_file ) );
    }

    $js_path = CRM_PLUGIN_PATH . 'assets/js/';
    $js_url = CRM_PLUGIN_URL . 'assets/js/';
    foreach ( glob( $js_path . '*.js' ) as $js_file ) {
        $handle = 'crm-admin-' . basename( $js_file, '.js' );
        wp_enqueue_script( $handle, $js_url . basename($js_file), array('jquery'), filemtime( $js_file ), true );
    }

} );

add_action('admin_init', function() {

    register_setting('crm_nakama_options', 'crm_nakama_options', [

        'sanitize_callback' => function($input) {

            $out = [];
            $out['email_notificaciones'] = isset($input['email_notificaciones']) ? sanitize_email($input['email_notificaciones']) : '';
            //$out['telefono_soporte']     = isset($input['telefono_soporte']) ? sanitize_text_field($input['telefono_soporte']) : '';
            //$out['color_interfaz']       = isset($input['color_interfaz']) ? sanitize_text_field($input['color_interfaz']) : '';

            // nuevas páginas asignables
            $out['page_clientes']           = isset($input['page_clientes']) ? absint($input['page_clientes']) : 0;
            $out['page_pedidos']            = isset($input['page_pedidos']) ? absint($input['page_pedidos']) : 0;

            $out['page_pedidos_pendientes'] = isset($input['page_pedidos_pendientes']) ? absint($input['page_pedidos_pendientes']) : 0;
            $out['page_pedidos_abiertos']   = isset($input['page_pedidos_abiertos']) ? absint($input['page_pedidos_abiertos']) : 0;
            $out['page_pedidos_cumplidos']  = isset($input['page_pedidos_cumplidos']) ? absint($input['page_pedidos_cumplidos']) : 0;

            $out['page_consultas']          = isset($input['page_consultas']) ? absint($input['page_consultas']) : 0;
            $out['page_dashboard']          = isset($input['page_dashboard']) ? absint($input['page_dashboard']) : 0;


            $out['letras_iniciales']        = isset($input['letras_iniciales']) ? $input['letras_iniciales'] : '';
            $out['numero_actual']           = isset($input['numero_actual']) ? $input['numero_actual'] : '';
            $out['cantidad_de_caracteres']  = isset($input['cantidad_de_caracteres']) ? $input['cantidad_de_caracteres'] : '';

            return $out;

        }

    ]);

    add_settings_section('crm_nakama_main', 'Ajustes generales CRM Nakama', function(){
        echo '<p>Configuración del CRM Nakama.</p>';
    }, 'crm_nakama');

    add_settings_field('crm_nakama_email', 'Email notificaciones', function() {
        $opts = get_option('crm_nakama_options', []);
        ?>

        <input type="email" name="crm_nakama_options[email_notificaciones]" value="<?php echo esc_attr($opts['email_notificaciones'] ?? ''); ?>" class="regular-text" />

        <?php
    }, 'crm_nakama', 'crm_nakama_main');

    /*
    add_settings_field('crm_nakama_telefono', 'Teléfono soporte', function() {
        $opts = get_option('crm_nakama_options', []);
        ?>

        <input type="text" name="crm_nakama_options[telefono_soporte]" value="<?php echo esc_attr($opts['telefono_soporte'] ?? ''); ?>" class="regular-text" />

        <?php
    }, 'crm_nakama', 'crm_nakama_main');

    add_settings_field('crm_nakama_color', 'Color interfaz', function() {
        $opts = get_option('crm_nakama_options', []);
        ?>

        <input type="text" name="crm_nakama_options[color_interfaz]" value="<?php echo esc_attr($opts['color_interfaz'] ?? ''); ?>" placeholder="#0073aa" class="regular-text" />

        <?php
    }, 'crm_nakama', 'crm_nakama_main');
    */

    $pages = get_pages();

    add_settings_field('crm_nakama_page_clientes', 'Página Clientes', function() use ($pages) {
        $opts = get_option('crm_nakama_options', []);
        ?>

        <select name="crm_nakama_options[page_clientes]">
            <option value="">— Seleccionar —</option>
            <?php foreach ($pages as $page): ?>
                <option value="<?php echo $page->ID; ?>" <?php selected($opts['page_clientes'] ?? '', $page->ID); ?>>
                    <?php echo esc_html($page->post_title); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <?php
    }, 'crm_nakama', 'crm_nakama_main');

    add_settings_field('crm_nakama_page_pedidos', 'Página Pedidos', function() use ($pages) {
        $opts = get_option('crm_nakama_options', []);
        ?>

        <select name="crm_nakama_options[page_pedidos]">
            <option value="">— Seleccionar —</option>
            <?php foreach ($pages as $page): ?>
                <option value="<?php echo $page->ID; ?>" <?php selected($opts['page_pedidos'] ?? '', $page->ID); ?>>
                    <?php echo esc_html($page->post_title); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <?php
    }, 'crm_nakama', 'crm_nakama_main');

    add_settings_field('crm_nakama_page_pedidos_pendientes', 'Página Pedidos Pendientes', function() use ($pages) {
        $opts = get_option('crm_nakama_options', []);
        ?>

        <select name="crm_nakama_options[page_pedidos_pendientes]">
            <option value="">— Seleccionar —</option>
            <?php foreach ($pages as $page): ?>
                <option value="<?php echo $page->ID; ?>" <?php selected($opts['page_pedidos_pendientes'] ?? '', $page->ID); ?>>
                    <?php echo esc_html($page->post_title); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <?php
    }, 'crm_nakama', 'crm_nakama_main');

    add_settings_field('crm_nakama_page_pedidos_abiertos', 'Página Pedidos Abiertos', function() use ($pages) {
        $opts = get_option('crm_nakama_options', []);
        ?>

        <select name="crm_nakama_options[page_pedidos_abiertos]">
            <option value="">— Seleccionar —</option>
            <?php foreach ($pages as $page): ?>
                <option value="<?php echo $page->ID; ?>" <?php selected($opts['page_pedidos_abiertos'] ?? '', $page->ID); ?>>
                    <?php echo esc_html($page->post_title); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <?php
    }, 'crm_nakama', 'crm_nakama_main');

    add_settings_field('crm_nakama_page_pedidos_cumplidos', 'Página Pedidos Cumplidos', function() use ($pages) {
        $opts = get_option('crm_nakama_options', []);
        ?>

        <select name="crm_nakama_options[page_pedidos_cumplidos]">
            <option value="">— Seleccionar —</option>
            <?php foreach ($pages as $page): ?>
                <option value="<?php echo $page->ID; ?>" <?php selected($opts['page_pedidos_cumplidos'] ?? '', $page->ID); ?>>
                    <?php echo esc_html($page->post_title); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <?php
    }, 'crm_nakama', 'crm_nakama_main');

    add_settings_field('crm_nakama_page_consultas', 'Página Consultas', function() use ($pages) {
        $opts = get_option('crm_nakama_options', []);
        ?>

        <select name="crm_nakama_options[page_consultas]">
            <option value="">— Seleccionar —</option>
            <?php foreach ($pages as $page): ?>
                <option value="<?php echo $page->ID; ?>" <?php selected($opts['page_consultas'] ?? '', $page->ID); ?>>
                    <?php echo esc_html($page->post_title); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <?php
    }, 'crm_nakama', 'crm_nakama_main');

    add_settings_field('crm_nakama_page_dashboard', 'Página Dashboard', function() use ($pages) {
        $opts = get_option('crm_nakama_options', []);
        ?>
        
        <select name="crm_nakama_options[page_dashboard]">
            <option value="">— Seleccionar —</option>
            <?php foreach ($pages as $page): ?>
                <option value="<?php echo $page->ID; ?>" <?php selected($opts['page_dashboard'] ?? '', $page->ID); ?>>
                    <?php echo esc_html($page->post_title); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <?php
    }, 'crm_nakama', 'crm_nakama_main');


    add_settings_field('crm_nakama_letras_iniciales', 'Letras iniciales', function() {
        $opts = get_option('crm_nakama_options', []);
        ?>

        <input type="text" name="crm_nakama_options[letras_iniciales]" value="<?php echo esc_attr($opts['letras_iniciales'] ?? ''); ?>" class="regular-text" />

        <?php
    }, 'crm_nakama', 'crm_nakama_main');

    add_settings_field('crm_nakama_numero_actual', 'Numero actual', function() {
        $opts = get_option('crm_nakama_options', []);
        ?>

        <input type="text" name="crm_nakama_options[numero_actual]" value="<?php echo esc_attr($opts['numero_actual'] ?? ''); ?>" class="regular-text" />

        <?php
    }, 'crm_nakama', 'crm_nakama_main');

    add_settings_field('crm_nakama_cantidad_de_caracteres', 'Cantidad de caracteres ', function() {
        $opts = get_option('crm_nakama_options', []);
        ?>

        <input type="text" name="crm_nakama_options[cantidad_de_caracteres]" value="<?php echo esc_attr($opts['cantidad_de_caracteres'] ?? ''); ?>" class="regular-text" />

        <?php
    }, 'crm_nakama', 'crm_nakama_main');

});

add_action('wp_ajax_crm_nakama_get_clientes', function() {

    if (!current_user_can('manage_options')) {
        wp_send_json_error('No autorizado', 403);
    }
    $args = array(
        'post_type' => 'cliente',
        'posts_per_page' => -1,
        'post_status' => array('publish','draft','private')
    );
    $q = new WP_Query($args);
    $items = array();
    if ($q->have_posts()) {
        while ($q->have_posts()) {
            $q->the_post();
            $items[] = array(
                'ID' => get_the_ID(),
                'title' => get_the_title(),
                'status' => get_post_status(),
                'date' => get_the_date(),
                'meta' => get_post_meta(get_the_ID())
            );
        }
        wp_reset_postdata();
    }
    wp_send_json_success($items);

});

/**
 * AJAX: Eliminar cliente
 */
add_action('wp_ajax_crm_nakama_delete_cliente', function() {

    if (!current_user_can('manage_options')) {
        wp_send_json_error('No autorizado', 403);
    }
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    if (!$id) wp_send_json_error('ID inválido', 400);
    $deleted = wp_delete_post($id, true);
    if ($deleted) wp_send_json_success('Eliminado');
    wp_send_json_error('No se pudo eliminar');

});

/**
 * AJAX: Obtener lista de pedidos (JSON)
 */
add_action('wp_ajax_crm_nakama_get_pedidos', function() {

    if (!current_user_can('manage_options')) {
        wp_send_json_error('No autorizado', 403);
    }
    $args = array(
        'post_type' => 'pedido',
        'posts_per_page' => -1,
        'post_status' => array('publish','draft','private')
    );
    $q = new WP_Query($args);
    $items = array();
    if ($q->have_posts()) {
        while ($q->have_posts()) {
            $q->the_post();
            $items[] = array(
                'ID' => get_the_ID(),
                'title' => get_the_title(),
                'status' => get_post_status(),
                'date' => get_the_date(),
                'meta' => get_post_meta(get_the_ID())
            );
        }
        wp_reset_postdata();
    }
    wp_send_json_success($items);

});

/**
 * AJAX: Guardar/Crear cliente (simple)
 */
add_action('wp_ajax_crm_nakama_save_cliente', function() {

    if (!current_user_can('manage_options')) {
        wp_send_json_error('No autorizado', 403);
    }
    $data = $_POST;
    $id = isset($data['ID']) ? intval($data['ID']) : 0;
    $postarr = array(
        'post_type' => 'cliente',
        'post_title' => sanitize_text_field($data['title'] ?? ''),
        'post_status' => 'publish',
    );
    if ($id) {
        $postarr['ID'] = $id;
        $result = wp_update_post($postarr, true);
    } else {
        $result = wp_insert_post($postarr, true);
    }
    if (is_wp_error($result)) {
        wp_send_json_error($result->get_error_message());
    }
    $post_id = (int)$result;
    // Save meta if provided
    if (!empty($data['meta']) && is_array($data['meta'])) {
        foreach ($data['meta'] as $key => $val) {
            update_post_meta($post_id, sanitize_key($key), sanitize_text_field($val));
        }
    }
    wp_send_json_success(array('ID' => $post_id));
    
});