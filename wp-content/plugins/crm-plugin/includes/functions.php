<?php

/*
if ( function_exists('get_field') && $options = get_fields('option') ) {
    define( 'CRM_PLUGIN_OPTIONS', $options );
}
*/

$includes = [
    'acf.php',
    'admin.php',
    'ajax.php',
    'consultas.php',
    'crm.php',
    // //'cronjob.php', // desactivado igual que en el original
    'filters.php',
    // //'mail.php',
    'pedidos.php',
    //'productos.php',
    // //'setup.php',
    // //'tools.php',
];

foreach ( $includes as $file ) {
    $path = CRM_PLUGIN_PATH . 'includes/' . $file;
    if ( file_exists( $path ) ) {
        require_once $path;
    }
}

// Crear términos por defecto si no existen
add_action('init', function() {

    $estados = array(
        'Pendientes' => array(
            'orden' => 0,
            'icono' => '<i class="fa-solid fa-list-check"></i>',
            'color_de_fondo' => '#ef9356',
            'color_de_borde' => '#cc5612',
            'url' => '/crm/pendientes/'
        ),
        'Abiertos' => array(
            'orden' => 1,
            'icono' => '<i class="fa-solid fa-list-check"></i>',
            'color_de_fondo' => '#9df44b',
            'color_de_borde' => '#81d742',
            'url' => '/crm/abiertos/'
        ),
        'Cumplidos' => array(
            'orden' => 2,
            'icono' => '<i class="fa-solid fa-eye"></i>',
            'color_de_fondo' => '#f4e000',
            'color_de_borde' => '#e8dc00',
            'url' => '/crm/cumplidos/'
        ),
    );

    foreach ($estados as $nombre => $meta) {

        $term = term_exists($nombre, 'estado');

        if (!$term) {
            $term = wp_insert_term($nombre, 'estado');
            if (!is_wp_error($term)) {
                $term_id = $term['term_id'];
                foreach ($meta as $key => $value) {
                    update_term_meta($term_id, $key, $value);
                }
            }
        }

    }
    
}, 20);