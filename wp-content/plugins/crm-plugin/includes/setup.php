<?php
add_theme_support( 'post-thumbnails' );
function custom_the_post_filter( $post ) {
        
    $post_array = get_object_vars( $post );
    extract( $post_array );
    $post->post_thumbnail = '';
    if( has_post_thumbnail( $post->ID ) ){
            $post->post_thumbnail   = get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
            $post->post_medium      = get_the_post_thumbnail_url( $post->ID, 'medium' );
            $post->post_large       = get_the_post_thumbnail_url( $post->ID, 'large' );
            $post->post_fullsize    = get_the_post_thumbnail_url( $post->ID, 'full' );
    }else{
            $post->post_thumbnail = SUPERSANO_THEME_URL.'/assets/default-image.webp';
            $post->post_medium = SUPERSANO_THEME_URL.'/assets/default-image.webp';
            $post->post_large = SUPERSANO_THEME_URL.'/assets/default-image.webp';
    }
    $post->post_permalink = get_permalink( $post->ID );
    if( function_exists('get_field') ){
          $fields = get_fields( $post->ID );
      if ( $fields ) { 
            foreach( $fields as $key => $value ){
                    $post->{$key} = $value;
            } 
        }
       
    }
    return $post;
}
add_action( 'the_post', 'custom_the_post_filter' );
function generate_dynamic_css() {
    $font_family = get_field( 'font_family', 'option' ) ?: '"Work Sans", sans-serif';
    $primary = get_field( 'primary_color', 'option' ) ?: '#E2211C';
    $primary_dos = get_field( 'primary_color_dos', 'option' ) ?: '#d1860e';
    $primary_text = get_field( 'primary_text_color', 'option' ) ?: '#ffffff';
    $primary_text_dos = get_field( 'primary_text_color_dos', 'option' ) ?: '#b31117';
    $secondary = get_field( 'secondary_color', 'option' ) ?: '#323232';
    $secondary_dos = get_field( 'secondary_color_dos', 'option' ) ?: '#050404';
    $secondary_text = get_field( 'secondary_text_color', 'option' ) ?: '#ffffff';
    $secondary_text_dos = get_field( 'secondary_text_color_dos', 'option' ) ?: '#050404';
    $light = get_field( 'light_color', 'option' ) ?: '#f4f4f4';
    $light_dos = get_field( 'light_color_dos', 'option' ) ?: '#dad1d1';
    $dark = get_field( 'dark_color', 'option' ) ?: '#313e48';
    $dark_dos = get_field( 'dark_color_dos', 'option' ) ?: '#1d2830';
    $warning = get_field( 'warning_color', 'option' ) ?: '#FAC904';
    $warning_dos = get_field( 'warning_color_dos', 'option' ) ?: '#dfb40a';
    $danger = get_field( 'danger_color', 'option' ) ?: '#FF0066';
    $danger_dos = get_field( 'danger_color_dos', 'option' ) ?: '#d30f5e';
    $success = get_field( 'success_color', 'option' ) ?: '#09B054';
    $success_dos = get_field( 'success_color_dos', 'option' ) ?: '#179b52';
    $white = get_field( 'white_color', 'option' ) ?: '#fff';
    $white_dos = get_field( 'white_color_dos', 'option' ) ?: '#f0f0f0';
    $black = get_field( 'black_color', 'option' ) ?: '#000';
    $black_dos = get_field( 'black_color_dos', 'option' ) ?: '#1d1d1d';
    $border_radius = get_field( 'border_radius', 'option' ).'px' ?: '30px';
    
    return "
      body { font-family: $font_family }
      :root {
            --primary: $primary;
            --primary-dos: $primary_dos;
            --primary-text: $primary_text;
            --primary-text-dos: $primary_text_dos;
            --secondary: $secondary;
            --secondary-dos: $secondary_dos;
            --secondary-text: $secondary_text;
            --secondary-text-dos: $secondary_text_dos;
            --light: $light;
            --light-dos: $light_dos;
            --dark: $dark;
            --dark-dos: $dark_dos;
            --white: $white;
            --white-dos: $white_dos;
            --black: $black;
            --black-dos: $black_dos;
            --warning: $warning;
            --warning-dos: $warning_dos;
            --danger: $danger;
            --danger-dos: $danger_dos;
            --success: $success;
            --success-dos: $success_dos;
            --border-radius: $border_radius;
        }
  ";
}
function add_editor_dynamic_styles() {
    $custom_css = generate_dynamic_css();
    wp_add_inline_style( 'wp-block-css', $custom_css );
}
add_action( 'enqueue_block_editor_assets', 'add_editor_dynamic_styles' );
function producto_custom_columns_head( $columns ){
    $nuevas_columnas = [];
    foreach ( $columns as $key => $value ) {
        if ( $key === 'title' ) {
            $nuevas_columnas['imagen'] = 'Imagen';
        }
        $nuevas_columnas[$key] = $value;
        // Agregamos la columna después del título
        if ( $key === 'title' ) {
            $nuevas_columnas['precio']      = 'Precio';
            $nuevas_columnas['cantidad']    = 'Cantidad';
            $nuevas_columnas['sku']         = 'SKU';
        }
    }
    return $nuevas_columnas;
}
add_filter( 'manage_producto_posts_columns', 'producto_custom_columns_head' );
function producto_custom_columns_content( $column_name, $post_id ){
    if ( $column_name === 'imagen' ) {
        if ( $imagen = get_the_post_thumbnail_url( $post_id , 'thumbnail' ) ) {
            echo '<img src="'.$imagen.'" style="width:80px;height:80px;object-fit:cover;border-radius:6px;">';
        }
    }
    if ( $column_name === 'precio' ) {
        $precio = get_post_meta( $post_id, 'precio', true );
        if ( $precio ) {
            echo '$' . number_format( (float) $precio, 2, ',', '.' );
        } else {
            echo '<span style="color:#aaa;">—</span>';
        }
    }
    if ( $column_name === 'cantidad' ) {
        $cantidad = get_post_meta( $post_id, 'cantidad', true );
        if ( $cantidad ) {
            echo (float) $cantidad;
        } else {
            echo '<span style="color:#aaa;">—</span>';
        }
    }
    if ( $column_name === 'sku' ) {
        $sku = get_post_meta( $post_id, 'sku', true );
        if ( $sku ) {
            echo $sku;
        } else {
            echo '<span style="color:#aaa;">—</span>';
        }
    }
}
add_action( 'manage_producto_posts_custom_column', 'producto_custom_columns_content', 10, 2 );
function agregar_columna_personalizada( $columns ){
    $nuevas_columnas = [];
    foreach( $columns as $key => $value ) {
        if ( $key === 'name' ) {
            $nuevas_columnas['imagen'] = 'Imagen Producto';
        }
        $nuevas_columnas[$key] = $value;
    }
    return $nuevas_columnas;
}
add_filter('manage_edit-category_columns', 'agregar_columna_personalizada');
function mostrar_contenido_columna_personalizada( $content, $column_name, $term_id ){
    if ( $column_name == 'imagen' ) {
        $imagen_id = get_term_meta( $term_id, 'imagen_producto', true );
        $image_url = wp_get_attachment_url( $imagen_id );
        $content = $image_url ? '<img src="'.$image_url.'" style="width:80px;height:80px;object-fit:cover;border-radius:6px;">' : '';
    }
    return $content;
}
add_filter( 'manage_category_custom_column', 'mostrar_contenido_columna_personalizada', 10, 3 );
function agregar_bootstrap_admin(){
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '', true );
}
add_action( 'admin_enqueue_scripts', 'agregar_bootstrap_admin' );
function agregar_estilos_personalizados_admin(){
    wp_enqueue_style( 'admin-styles', get_template_directory_uri() . '/admin-styles.css', time() );
}
add_action( 'admin_enqueue_scripts', 'agregar_estilos_personalizados_admin' );
function cambiar_remitente_correo($origen){
    return SUPERSANO_TITLE . ' <noreply@supersano.ar>';
}
add_filter('wp_mail_from', 'cambiar_remitente_correo');
function upload_featured_image( $post_id, $image_url ) {
    	
    if( ! function_exists( 'wp_handle_upload' ) ) {
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
    }
    
    if ( ! function_exists( 'media_sideload_image' ) ) {
        require_once( ABSPATH . 'wp-admin/includes/media.php' );
    }
    
    if ( ! function_exists( 'wp_read_image_metadata' ) ) {
        require_once( ABSPATH . 'wp-admin/includes/image.php' );
    }
    $image = media_sideload_image( $image_url, $post_id );
    if ( ! is_wp_error( $image ) ) {
        $attachment_id = (int) get_attachment_id_from_src( $image );
        set_post_thumbnail( $post_id, $attachment_id );
    }else{
    	$error_messages = $image->get_error_messages();
	    foreach ( $error_messages as $message ) {
    	    echo "Error: $message";
	    }
    }
}
function get_attachment_id_from_src ($image_src) {
    	
    global $wpdb;
    $image_src = str_replace( array( "<img src='", "' alt='' />" ), '', $image_src );
    $query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
    $id = $wpdb->get_var($query);
    return $id;
  
}
function custom_pagination( $total_pages ){
    	
    global $paged;
    if (empty($paged)) $paged = 1;
    
    $prev_arrow = is_rtl() ? '<i class="bi bi-chevron-left"></i>' : '<i class="bi bi-chevron-left"></i>';
    $next_arrow = is_rtl() ? '<i class="bi bi-chevron-right"></i>' : '<i class="bi bi-chevron-right"></i>';
    $pagination_args = array(
        'base'               => esc_url_raw(add_query_arg('paged', '%#%')),
        'format'             => '',
        'total'              => $total_pages,
        'current'            => max(1, $paged),
        'show_all'           => false,
        'end_size'           => 1,
        'mid_size'           => 2,
        'prev_next'          => true,
        'prev_text'          => $prev_arrow,
        'next_text'          => $next_arrow,
        'type'               => 'array',
        'add_args'           => false,
        'add_fragment'       => '',
        'before_page_number' => '',
        'after_page_number'  => ''
    );
    $links = paginate_links($pagination_args);
    if ($links) {
        echo '<ul class="pagination">';
        foreach( $links as $link ){
            if( strpos( $link, 'current' ) === false )
            	echo '<li class="border">' . $link . '</li>';
            else
            	echo '<li class="border active">' . $link . '</li>';
        }
        echo '</ul>';
    }
    
}
function get_favoritos() {
    $favoritos = '';
    if ( isset($_COOKIE['favoritos']) ) {
        $favoritos = stripslashes($_COOKIE['favoritos']); 
    }
    $favoritos_arr = array();
    if ( !empty($favoritos) ) {
        $favoritos_arr = json_decode($favoritos, true); 
    }
    $productos_favoritos = []; 
    if ( !empty($favoritos_arr) && is_array($favoritos_arr) ):
        foreach ( $favoritos_arr as $post_id => $cantidad ):
            if ( !empty($post_id) ): 
                $post = get_post($post_id);
                if ( is_object($post) ) {
                    $productos_favoritos[] = $post;
                }
            endif;    
        endforeach;  
    endif;
    return $productos_favoritos;
}
function get_pedidos() {
    $pedido = '';
    if ( isset($_COOKIE['pedido']) ) {
        $pedido = stripslashes($_COOKIE['pedido']); 
    }
    $pedido_arr = array();
    if ( !empty($pedido) ) {
        $pedido_arr = json_decode($pedido, true); 
    }
    $productos_pedido = array(); 
    if ( !empty($pedido_arr) && is_array($pedido_arr) ):
        foreach ( $pedido_arr as $post_id => $cantidad ):
            if ( !empty($post_id) ): 
                $post = get_post($post_id);
                if ( is_object($post) ) {
                    $post->cantidad_pedido = intval($cantidad);
                    $productos_pedido[] = $post;
                }
            endif;    
        endforeach;  
    endif;
    return $productos_pedido;
}
function get_cliente( $dni ){
    $cliente = get_posts( 
        array( 
            'post_type'         => 'cliente', 
            'posts_per_page'    => 1, 
            'meta_query'        => array( 
                array( 
                    'key'       => 'dni', 
                    'value'     => $dni, 
                    'compare'   => '=' 
                ) 
            ) 
        ) 
    );
    return $cliente[0] ?? [];
}