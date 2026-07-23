<?php
//header( "Access-Control-Allow-Origin: *" );
//header( "Access-Control-Allow-Methods: POST, GET" );
//header( "Access-Control-Allow-Headers: X-Requested-With" );
function crm_validate_nonce( $nonce, $nonce_name ) {
	
  	if ( ! wp_verify_nonce( $nonce, $nonce_name ) ) {
    	$res = [ 'status' => 0, 'message' => '? Error nonce validation!!' ];
    	wp_send_json($res);
  	}
  
}
function crm_get_cliente() {
	  
	try{
		
		$datos_cliente = array();
		$dni = $_REQUEST['dni'];
		
		if( !empty( $dni ) ) 
			$cliente = get_cliente( $dni );
		if( $cliente ):
			$datos_cliente['dni'] 	            = $dni;
            $datos_cliente['nombre'] 	        = get_field( 'nombre',                  $cliente->ID );
            $datos_cliente['apellido'] 	        = get_field( 'apellido',                $cliente->ID );
			$datos_cliente['direccion'] 	    = get_field( 'direccion',               $cliente->ID );
			$datos_cliente['ciudad'] 		    = get_field( 'ciudad',                  $cliente->ID );
			$datos_cliente['provincia'] 	    = get_field( 'provincia',               $cliente->ID );
			$datos_cliente['codigo_postal']	    = get_field( 'codigo_postal',           $cliente->ID );
			$datos_cliente['payment'] 		    = get_field( 'forma_de_pago_preferida', $cliente->ID );
			$datos_cliente['telefono'] 		    = get_field( 'telefono',                $cliente->ID );
			$datos_cliente['email'] 		    = get_field( 'email',                   $cliente->ID );
    		$response = array( 'status' => 'success', 'data' => $datos_cliente );
        else:
    		$response = array( 'status' => 'none' );
        
        endif;
   			
	    wp_send_json( $response );
    	
	}catch (Exception $e){
	    dump( $e->getMessage(), false );
	}  	
  	wp_die(); 
  	
}
add_action( 'wp_ajax_nopriv_crm_get_cliente', 'crm_get_cliente' );
add_action( 'wp_ajax_crm_get_cliente', 'crm_get_cliente' );
// -------------------------
// AJAX LOAD PRODUCTOS
// -------------------------
add_action('wp_ajax_load_productos', 'ajax_load_productos');
add_action('wp_ajax_nopriv_load_productos', 'ajax_load_productos');
function ajax_load_productos() {
    $paged              = isset($_POST['paged']) ? intval($_POST['paged']) : 1;
    $selected_cats      = isset($_POST['cats']) ? $_POST['cats'] : [];
    $selected_marcas    = isset($_POST['marcas']) ? $_POST['marcas'] : [];
    $selected_pesos     = isset($_POST['pesos']) ? $_POST['pesos'] : [];
    $selected_atributos = isset($_POST['atributos']) ? $_POST['atributos'] : [];
    $search             = isset($_POST['search']) ? sanitize_text_field($_POST['search']) : '';
    $precio_min         = isset($_POST['precio_min']) ? floatval($_POST['precio_min']) : 0;
    $precio_max         = isset($_POST['precio_max']) ? floatval($_POST['precio_max']) : 999999;
    $post_per_page      = 9;
    $selected_labels = [];
    // Categorías
    foreach($selected_cats as $slug) {
        $term = get_term_by('slug', $slug, 'categoria');
        if($term) {
            $parent_term = $term->parent ? get_term($term->parent) : null;
            $selected_labels[] = [
                'slug'       => $term->slug,
                'name'       => $term->name,
                'parent'     => $parent_term ? $parent_term->slug : '',
                'type'       => 'cat',
            ];
        }
    }
    // Marcas
    foreach($selected_marcas as $slug) {
        $term = get_term_by('slug', $slug, 'marca');
        if($term) {
            $selected_labels[] = [
                'slug'   => $term->slug,
                'name'   => $term->name,
                'type'   => 'marca',
            ];
        }
    }
    // Pesos
    foreach($selected_pesos as $slug) {
        $term = get_term_by('slug', $slug, 'peso');
        if($term) {
            $selected_labels[] = [
                'slug'   => $term->slug,
                'name'   => $term->name,
                'type'   => 'peso',
            ];
        }
    }
    // Atributos
    foreach($selected_atributos as $slug) {
        $term = get_term_by('slug', $slug, 'atributo');
        if($term) {
            $selected_labels[] = [
                'slug'   => $term->slug,
                'name'   => $term->name,
                'type'   => 'atributo',
            ];
        }
    }
    if( !empty($search) OR count($selected_labels) > 0 ){
        $post_per_page = -1;
    }
    $args = [
        'post_type'      => 'producto',
        'posts_per_page' => $post_per_page,
        'paged'          => $paged,
        'tax_query'      => [] 
    ];
    if(!empty($search)) {
        $args['s'] = $search;
    }
    if($precio_min > 0 OR $precio_max < 999999 ) {
        $args['meta_query'][] = [
            'key'     => 'precio', 
            'value'   => [$precio_min, $precio_max],
            'compare' => 'BETWEEN',
            'type'    => 'NUMERIC',
        ];
    }
    if(!empty($selected_cats) && !in_array('all', $selected_cats)) {
        $args['tax_query'][] = [
            'taxonomy' => 'categoria',
            'field'    => 'slug',
            'terms'    => $selected_cats
        ];
    }
    if(!empty($selected_marcas) && !in_array('all', $selected_marcas)) {
        $args['tax_query'][] = [
            'taxonomy' => 'marca',
            'field'    => 'slug',
            'terms'    => $selected_marcas
        ];
    }
    if(!empty($selected_pesos) && !in_array('all', $selected_pesos)) {
        $args['tax_query'][] = [
            'taxonomy' => 'peso',
            'field'    => 'slug',
            'terms'    => $selected_pesos
        ];
    }
    if(!empty($selected_atributos) && !in_array('all', $selected_atributos)) {
        $args['tax_query'][] = [
            'taxonomy' => 'atributo',
            'field'    => 'slug',
            'terms'    => $selected_atributos
        ];
    }
    if(count($args['tax_query']) > 1) {
        $args['tax_query']['relation'] = 'AND';
    }
    $query = new WP_Query($args);
    $sin_resultados = false;
    ob_start();
    // dump( $args , false );
    if($query->have_posts()) {
        while($query->have_posts()) {
            $query->the_post();
            // echo get_the_title().'<br>';
            get_template_part('loop');
        }
    } else {
        $sin_resultados = true;
        echo '<p>No hay productos.</p>';
    }
    $productos_html = ob_get_clean();
    $post_ids = wp_list_pluck( $query->posts, 'ID' );
    if( empty($selected_cats) && empty($search) ){
        $all_categorias = get_terms([ 'taxonomy' => 'categoria', 'hide_empty' => true, 'parent' => 0 ]);
        $all_marcas     = [];
        $all_pesos      = [];
        $all_atributos  = [];
    }else{
        if( $sin_resultados) {
            $all_categorias = $all_marcas = $all_pesos = $all_atributos = [];
        }else{
            $all_categorias = get_terms([ 'taxonomy' => 'categoria',    'hide_empty' => true, 'object_ids' => $post_ids ]);
            $all_marcas     = get_terms([ 'taxonomy' => 'marca',        'hide_empty' => true, 'object_ids' => $post_ids ]);
            $all_pesos      = get_terms([ 'taxonomy' => 'peso',         'hide_empty' => true, 'object_ids' => $post_ids ]);
            $all_atributos  = get_terms([ 'taxonomy' => 'atributo',     'hide_empty' => true, 'object_ids' => $post_ids, ]);
        }
    }
    $filtros_html = render_filtros(
        $all_categorias,
        $all_marcas,
        $all_pesos,
        $all_atributos,
        $selected_cats,
        $selected_marcas,
        $selected_pesos,
        $selected_atributos,
        $precio_min,
        $precio_max,
        $search,
        $selected_labels
    );
    wp_send_json_success([
        'productos_html' => $productos_html,
        'filtros_html'  => $filtros_html,
        'have_more'     => $paged < $query->max_num_pages,
    ]);
}
// -------------------------
// RENDER FILTROS
// -------------------------
function render_filtros($categs, $marcas, $pesos, $atributos, $selected_cats, $selected_marcas, $selected_pesos, $selected_atributos, $min_price, $max_price, $search, $selected_labels = []) { 
    
    ob_start() ?>
    <div class="mb-4">
        <label class="mb-2 d-block">
            Buscar por nombre
        </label>
        <input type="text" id="buscar-productos" class="form-control" name="search" value="<?php echo esc_attr($search); ?>">
    </div>
    
    <?php if(!empty($selected_labels)): ?>
        <div class="mb-4 pt-3 mt-3">
            <label class="mb-2 d-block bold">
                Filtros aplicados
            </label>
            <?php foreach($selected_labels as $label): ?>
                <div class="ps-0 filtro-quit"
                    data-slug="<?php echo esc_attr($label['slug']); ?>"
                    data-parent="<?php echo esc_attr($label['parent']); ?>"
                    data-type="<?php echo esc_attr($label['type']); ?>">
                    <label class="bold text-success" style="cursor:pointer;font-size:14px">
                        <img src="<?php echo SUPERSANO_THEME_URL ?>/themes/images/green-icon.webp" style="height:16px;width:16px;vertical-align:moddle;">
                        <?php echo esc_html($label['name']); ?>
                    </label>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if( ( !empty($categs) && empty($selected_cats) ) || ( !empty($categs) && !empty($selected_cats) && $selected_cats[0] != $categs[0]->slug ) ): ?>
        <div class="mb-4 pt-3 mt-3">
            <label class="mb-2 d-block bold">
                Categorías
            </label>
            <?php foreach($categs as $cat): ?>
                
                <?php
                $parent = ( $cat->parent!=0 ) ? get_term ( $cat->parent ) : [];
                if( empty($selected_cats) && empty($search) && $cat->parent!=0 ) continue; 
                if( !empty($selected_cats) && empty($search) && $cat->parent==0 ) continue; 
                if( !empty($selected_cats) && $selected_cats[0] == $cat->slug ) continue;
                ?>
                <div class="mb-1">
                    <label class="text-dark" style="cursor:pointer;font-size:14px">
                        <input type="radio" class="form-check-input border-secondary filtro" name="cats[]" data-parent="<?php if( $cat->parent!=0 ) echo esc_attr($parent->slug); ?>" value="<?php echo esc_attr($cat->slug); ?>" <?php checked(in_array($cat->slug, $selected_cats)); ?>>
                        <?php echo esc_html( $cat->name ); ?>
                    </label>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if( !empty($marcas) && $marcas[0]->slug != $selected_marcas[0] ): ?>
        <div class="mb-4 pt-3 mt-3">
            <label class="mb-2 d-block bold">
                Marcas
            </label>
            <?php foreach($marcas as $marca): ?>
                <div class="mb-1">
                    <label class="text-dark" style="cursor:pointer;font-size:14px">
                        <input type="radio" class="form-check-input border-secondary filtro" name="marcas[]" value="<?php echo esc_attr($marca->slug); ?>" <?php checked(in_array($marca->slug, $selected_marcas)); ?>>
                        <?php echo esc_html( $marca->name ); ?>
                    </label>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if( !empty($pesos) ): ?>
        <div class="mb-4 pt-3 mt-3">
            <label class="mb-2 d-block bold">
                Peso
            </label>
            <?php foreach($pesos as $peso): ?>
                <div class="mb-1">
                    <label class="text-dark" style="cursor:pointer;font-size:14px">
                        <input type="radio" class="form-check-input border-secondary filtro" name="pesos[]" value="<?php echo esc_attr($peso->slug); ?>" <?php checked(in_array($peso->slug, $selected_pesos)); ?>>
                        <?php echo esc_html( $peso->name ); ?>
                    </label>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if( !empty($atributos) ): ?>
        <div class="mb-4 pt-3 mt-3">
            <label class="mb-2 d-block bold">
                Atributos
            </label>
            <?php foreach($atributos as $attr): ?>
                <div class="mb-1">
                    <label class="text-dark" style="cursor:pointer;font-size:14px">
                        <input type="radio" class="form-check-input border-secondary filtro" name="atributos[]" value="<?php echo esc_attr($attr->slug); ?>" <?php checked(in_array($attr->slug, $selected_atributos)); ?>>
                        <?php echo esc_html( $attr->name ); ?>
                    </label>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if( $max_price > 0 && $max_price < 999999 ): ?>
        <div class="mb-4 pt-3 mt-3">
            <label class="mb-2 d-block">
                Precio
            </label>
            <div class="d-flex align-items-center gap-2">
                <input type="number" id="precio-min" class="form-control" style="width: 100px;" value="<?php echo esc_attr($min_price); ?>" placeholder="Min">
                <input type="number" id="precio-max" class="form-control" style="width: 100px;" value="<?php echo esc_attr($max_price); ?>" placeholder="Max">
            </div>
        </div>
    <?php endif; ?>
    <?php
    return ob_get_clean();
}
add_action('wp_ajax_get_pedidos_data', 'get_pedidos_data');
function get_pedidos_data() {
    $pedidos = get_posts([
        'post_type'      => 'pedido',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => 'meta_value',
        'meta_key'       => 'fecha_de_pedido',
        'order'          => 'ASC'
    ]);
    $data = [];
    foreach ($pedidos as $pedido) {
        $data[] = [
            'fecha' => get_post_meta( $pedido->ID, 'fecha_de_pedido', true ),
            'monto' => get_post_meta( $pedido->ID, 'precio_de_venta', true ),
        ];
    }
    wp_send_json($data);
}
add_action('wp_ajax_get_top_productos', 'get_top_productos');
function get_top_productos() {
    $pedidos = get_posts([
        'post_type'      => 'pedido',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
    ]);
    $ranking = [];
    foreach ($pedidos as $item) {
        $items = get_field('pedido', $item->ID);
        if (!$items) continue;
        foreach ($items as $item) {
            $producto_id = $item['producto']->ID;
            $cantidad    = (float) $item['cantidad'];
            $precio      = (float) $item['precio'];
            if (!$producto_id) continue;
            if (!isset($ranking[$producto_id])) {
                $ranking[$producto_id] = [
                    'nombre'   => get_the_title($producto_id),
                    'cantidad' => 0,
                    'total'    => 0,
                ];
            }
            $ranking[$producto_id]['cantidad'] += $cantidad;
            $ranking[$producto_id]['total']    += $cantidad * $precio;
        }
    }
    usort($ranking, fn($a, $b) => $b['cantidad'] <=> $a['cantidad']);
    $top10 = array_slice($ranking, 0, 10);
    wp_send_json($top10);
}
add_action('wp_ajax_get_top_vistos', 'get_top_vistos');
function get_top_vistos() {
    $productos = get_posts([
        'post_type'      => 'producto', 
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'fields'         => 'ids',
    ]);
    $ranking = [];
    foreach ($productos as $producto_id) {
        $vistas = (int) get_field( 'views', $producto_id );
        $ranking[] = [
            'nombre' => get_the_title($producto_id),
            'views'  => $vistas,
        ];
    }
    usort($ranking, fn($a, $b) => $b['views'] <=> $a['views']);
    $top10 = array_slice($ranking, 0, 10);
    wp_send_json($top10);
}
add_action('wp_ajax_get_pedidos_cliente_data', 'get_pedidos_cliente_data');
function get_pedidos_cliente_data() {
    $cliente_id = $_POST['cliente_id'] ?? '';
    $pedidos = get_posts([
        'post_type'      => 'pedido',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => 'meta_value',
        'meta_key'       => 'fecha_de_pedido',
        'order'          => 'ASC',
        'meta_query'     => [
            [
                'key'     => 'cliente',
                'value'   => $cliente_id,
                'compare' => '=', // exact match
            ],
        ],
    ]);
    $data = [];
    foreach ($pedidos as $pedido) {
        $data[] = [
            'fecha' => get_post_meta( $pedido->ID, 'fecha_de_pedido', true ),
            'monto' => get_post_meta( $pedido->ID, 'precio_de_venta', true ),
        ];
    }
    wp_send_json($data);
}