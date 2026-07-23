<?php 
function crear_pagina_importador() {
    add_menu_page(
        'Importador de Productos',     
        'Importador de Productos',             
        'manage_options',          
        'configuracion-importador',
        'mostrar_pagina_importador',
        'dashicons-download',      
        31                         
    );
}
add_action('admin_menu', 'crear_pagina_importador');
function mostrar_pagina_importador() { ?>
    <div class="wrap">
        <h1>
            Importador de Productos
        </h1>
        <br>
        <button id="btn-importar" class="button button-primary">Ejecutar Importador</button>
        <div id="import-progress" style="margin-top:20px;display:none;">
            <div style="background:#e1e1e1;border-radius:4px;overflow:hidden;height:24px;">
                <div id="import-bar" style="background:#0073aa;width:0;height:24px;color:#fff;text-align:center;line-height:24px;font-weight:bold;">0%</div>
            </div>
            <p id="import-status" style="margin-top:8px;"></p>
        </div>
    </div>
    <script>
        jQuery(document).ready(function($){
                
            $('#btn-importar').on('click', function(){
                var $btn = $(this);
                $btn.prop('disabled', true);
                $('#import-progress').show();
                procesarLote(0);
            });
            function procesarLote(offset){
                $.post( "<?php echo admin_url('admin-ajax.php'); ?>", {
                    action: 'procesar_importador_lote',
                    offset: offset,
                }, function(res){
                    if(!res.success){
                        alert(res.data || 'Error en la importación');
                        $('#btn-importar').prop('disabled', false);
                        return;
                    }
                    var porcentaje = res.data.progress;
                    $('#import-bar').css('width', porcentaje+'%').text(porcentaje+'%');
                    $('#import-status').text(res.data.message);
                    if(res.data.done){
                        $('#btn-importar').prop('disabled', false);
                    } else {
                        procesarLote(res.data.next_offset);
                    }
                });
            }
            
        });
    </script>
<?php }
/*
function procesar_importador_productos() {
    if (isset($_POST['accion_importador']) && $_POST['accion_importador'] === 'importar_productos') {
        $count = importar_productos_json();
        
        echo '<div class="notice notice-success is-dismissible">';
        echo '<p>¡'.$count.' productos actualizados!</p>';
        echo '</div>';
    }
}
add_action( 'admin_init', 'procesar_importador_productos' );
*/
function importar_productos_json() {
    
    $count_update = $count_create = 0;
    $productos = get_productos_csv(); 
    $count_update = count( $productos );
    if( $count_update > 1 ){
        foreach ($productos as $producto) {
            if(!$producto) continue;
            if( empty( $producto['sku'] ) ) continue;
            $args = [
                'post_type'   => 'producto',
                'post_status' => 'any',
                'meta_query'  => [[
                    'key'   => 'sku',
                    'value' => $producto['sku'],
                ]]
            ];
            $args = array(
                'post_type'     => 'producto',
                'post_status'   => 'any',
                'meta_query'    => array(
                    array(
                        'key'       => 'sku',
                        'value'     => $producto['sku'],
                        'compare'   => '='
                    )
                )
            );
            
            $existing_posts = get_posts( $args );
            
            if ( empty($existing_posts ) ) {
                $nombre_producto = $producto['nombre'];
                $nombre_producto = str_replace( [ 'Á', 'É', 'Í', 'Ó', 'Ú', 'Ñ' ], [ '&aacute;','&eacute;','&iacute;','&oacute;','&uacute;', '&ntilde;' ], $nombre_producto ); 
                
                $post_status = ( isset($producto['activo']) && $producto['activo'] == 0 ) ? 'draft' : 'pending';
                $post_id = wp_insert_post([
                    'post_title'  => $nombre_producto,
                    'post_type'   => 'producto',
                    'post_status' => $post_status
                ]);
                update_field( 'sku',        $producto['sku'],       $post_id );
                update_field( 'precio',     $producto['precio'],    $post_id );
                update_field( 'cantidad',   $producto['stock'],     $post_id );
                update_field( 'update',     date('d'),              $post_id );
            } else {
                foreach( $existing_posts as $post ){
                    update_field( 'precio',     $producto['precio'],    $post->ID );
                    update_field( 'cantidad',   $producto['stock'],     $post->ID );
                    update_field( 'update',     date('d'),              $post->ID );
                    if ( isset($producto['activo']) && $producto['activo'] == 0 ) {
                        wp_update_post([
                            'ID'          => $post->ID,
                            'post_status' => 'draft'
                        ]);
                    }
                }
                    
            }
        }
    }
    return $count_update.' ( creados: '.$count_create.' )'; 
}
add_action( 'importar_productos_json', 'importar_productos_json' );
function get_productos_csv() {
    $file_path = WP_CONTENT_DIR . '/uploads/productos/sidg/articulos-web.csv';
    if ( ! file_exists( $file_path ) ) return [];
    $productos = [];
    if ( ( $handle = fopen( $file_path, "r" ) ) !== FALSE ) {
        $key = 0;
        while ( ( $data = fgetcsv($handle, 0, ";" ) ) !== FALSE ) {
            $key+=1;
            if (substr($data[0], -1) === 'X') {
                $sku = rtrim($data[0], 'X');
            }
            if( empty($sku) ) continue;
            $nombre = $data[1];
            $nombre = ucfirst( strtolower( $nombre ) );
            $precio     = (float) $data[2];
            $stock      = (float) $data[3];
            $activo     = (int) $data[4] ?? 0;
            $productos[$key]['sku']     = $sku;
            $productos[$key]['nombre']  = $nombre;
            $productos[$key]['precio']  = $precio;
            $productos[$key]['stock']   = $stock;
            $productos[$key]['activo']  = $activo;
        }
        fclose($handle);
    }
    return $productos;
}
// cronjob
function programar_evento_importador_productos(){
	
    if( !wp_next_scheduled('importar_productos_json') ){
        $timestamp = strtotime('21:00:00');
        if ( $timestamp <= time() ) {
            $timestamp = strtotime('tomorrow 21:00:00');
        }
        wp_schedule_event( $timestamp, 'daily', 'importar_productos_json' );
    }
    
}
add_action( 'wp', 'programar_evento_importador_productos' );
function wp_ajax_procesar_importador_lote(){
    $productos = get_productos_csv();
    $total = count($productos);
    $offset = intval($_POST['offset'] ?? 0);
    $lote   = 20; // productos por tanda
    $fin    = min($offset + $lote, $total);
    for ($i = $offset; $i < $fin; $i++) {
        $producto = $productos[$i];
        if(!$producto) continue;
        if( empty( $producto['sku'] ) ) continue;
        $args = [
            'post_type'   => 'producto',
            'post_status' => 'any',
            'meta_query'  => [[
                'key'   => 'sku',
                'value' => $producto['sku'],
            ]]
        ];
        $existing_posts = get_posts( $args );
        if ( empty($existing_posts ) ) {
            $nombre = $producto['nombre'];
            $nombre = str_replace( [ 'Á', 'É', 'Í', 'Ó', 'Ú', 'Ñ' ], [ '&aacute;','&eacute;','&iacute;','&oacute;','&uacute;', '&ntilde;' ], $nombre ); 
            $post_status = ( isset($producto['activo']) && $producto['activo'] == 0 ) ? 'draft' : 'pending';
            $post_id = wp_insert_post([
                'post_title'  => $nombre,
                'post_type'   => 'producto',
                'post_status' => $post_status
            ]);
            update_field( 'sku',        $producto['sku'],       $post_id );
            update_field( 'precio',     $producto['precio'],    $post_id );
            update_field( 'cantidad',   $producto['stock'],     $post_id );
            update_field( 'update',     date('d'),              $post_id );
        } else {
            foreach( $existing_posts as $post ){
                update_field( 'precio',     $producto['precio'],    $post->ID );
                update_field( 'cantidad',   $producto['stock'],     $post->ID );
                update_field( 'update',     date('d'),              $post->ID );
                if ( isset($producto['activo']) && $producto['activo'] == 0 ) {
                    wp_update_post([
                        'ID'          => $post->ID,
                        'post_status' => 'draft'
                    ]);
                }
            }
        }
    }
    $progress = round( ($fin / $total) * 100 );
    wp_send_json_success([
        'progress'     => $progress,
        'message'      => "Procesados $fin de $total productos",
        'next_offset'  => $fin,
        'done'         => $fin >= $total
    ]);
}
add_action( 'wp_ajax_procesar_importador_lote', 'wp_ajax_procesar_importador_lote' );