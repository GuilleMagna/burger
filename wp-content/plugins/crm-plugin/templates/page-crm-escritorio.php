<? 

/*
Template Name: CRM ( Escritorio )
*/

if( !is_user_logged_in() ) {
    wp_redirect( home_url('/login') );
    exit;
}

include CRM_PLUGIN_PATH . 'templates/header-crm.php'; ?>

<? $_estado = isset( $_GET['estado'] ) ? sanitize_text_field( $_GET['estado'] ) : ''; ?>

<main role="main" class="position-relative">

    <section class="vh-100">

        <div class="container-fluid">            

            <div class="row vh-100">

                <?php include CRM_PLUGIN_PATH . 'templates/sidebar-crm.php'; ?>

                <?php 
                $include_cli_ids = []; 
                $estados = get_terms( array( 'taxonomy' => 'estado', 'parent' => 0, 'meta_key' => 'orden', 'orderby' => 'meta_value_num', 'order' => 'ASC' ) ) ?? []; 
                ?>

                <div class="col-12 col-md-10">

                    <div class="py-5 px-md-4">

                        <div class="row">

                            <?php if( !empty( $estados ) && sizeof( $estados ) ): ?>

                                <?php foreach( $estados as $key => $term ): ?>

                                    <?php 
                                    $term_count = get_posts_count_by_term( 'pedido', $term->term_id, 'estado' );
                                    $link_estado = get_field( 'url', $term );
                                    $bg_color = $border_color = '';

                                    if( empty( $_estado ) OR ( $_estado AND $term->slug == $_estado ) ){
                                        $bg_color = get_field( 'color_de_fondo', $term );
                                        $border_color = get_field( 'color_de_borde', $term );
                                        if( $_estado ) $link_estado = '';
                                    }
                                    ?>

                                    <div class="col-12 col-md-3 col-xxl-2 mb-3">

                                        <a href="<?php echo $link_estado; ?>" tilte="Ver <?php echo $term->name; ?>" class="text-decoration-none">

                                            <div class="card border-0 border-start border-5 aos-init aos-animate h-100" data-aos="fade-in" data-aos-delay="<?php echo $key*100; ?>" style="background-color:<?php echo $bg_color;?>; border-color:<?php echo $border_color;?> !important;">

                                                <div class="card-body">

                                                    <div class="row">
                                                        <div class="col-auto text-end text-ultra-big-status text-ultra-big bold"><?php echo $term_count; ?></div>
                                                        <div class="col text-start text-normal-dos regular my-auto"><?php echo $term->name; ?></div>
                                                    </div>

                                                </div>

                                            </div>

                                        </a> 

                                    </div>

                                <?php endforeach; ?>

                            <?php endif; ?> 

                        </div>

                        <div class="row">

                            <div class="col-12 col-md-7">

                                <?php 
                                $args = array( 'post_type' => 'pedido', 'post_status' => 'publish', 'posts_per_page' => 10  );
                                $pedidos = get_posts( $args ) ?? [];
                                ?>

                                <?php if( !empty( $pedidos ) && sizeof( $pedidos ) ): ?>

                                    <div class="card mb-4" data-aos="zoom-in" data-aos-delay="1200">

                                        <div class="card-header bg-blue-100 d-none d-md-block">

                                            <div class="row bold px-3">

                                                <div class="col-6 col-md-2">
                                                    ID
                                                </div>

                                                <div class="col-6 col-md-4">
                                                    Cliente
                                                </div>

                                                <div class="col-6 col-md-2 text-center">
                                                    Fecha
                                                </div>

                                                <div class="col-6 col-md-2 text-end">
                                                    Precio
                                                </div>

                                                <div class="col-6 col-md-2 text-end">
                                                    Estado
                                                </div>

                                            </div>

                                        </div>

                                        <div class="card-header bg-blue-100 d-block d-md-none">

                                            <div class="row bold px-3">
                                                Pedidos
                                            </div>

                                        </div>

                                        <div class="card-body">

                                            <?php foreach( $pedidos as $pedido ): ?>

                                                <?php 
                                                $estados_arr = [];
                                                $nombre_apellido = '';
                                                $cliente_id = get_field( 'cliente', $pedido->ID ) ?? []; 

                                                if( !empty($cliente_id) ){
                                                    $nombre_apellido = get_field( 'nombre', $cliente_id ) . ' '. get_field( 'apellido', $cliente_id );
                                                    $include_cli_ids[ $cliente_id ] = $cliente_id;
                                                } 

                                                $fecha_de_pedido = get_field( 'fecha_de_pedido', $pedido->ID );
                                                $precio_de_venta = get_field( 'precio_de_venta', $pedido->ID ) ?: '';
                                                if( !empty($precio_de_venta) ) $precio_de_venta = number_format( $precio_de_venta, 2, ',', '.' );

                                                $estado = get_the_terms( $pedido->ID, 'estado' );
                                                $nombre_estado = $estado[0]->name;
                                                $color_estado = get_field( 'color_de_fondo', $estado[0] ) ?: '';
                                                ?>

                                                <div class="linea-tabla py-2 px-3 rounded-3 border mb-2">

                                                    <div class="row">

                                                        <div class="col-6 col-md-2 text-truncate my-1 my-md-auto order-0 order-md-0">

                                                            <a href="<?php echo get_permalink( $pedido->ID ); ?>" class="text-decoration-none">
                                                                <?php if( !empty($estado[0]) && $estado[0]->slug == 'pendientes' ) echo '<strong>'; echo $pedido->post_title; if( !empty($estado[0]) && $estado[0]->slug == 'pendientes' ) echo '</strong>'; ?>
                                                            </a>

                                                        </div>

                                                        <div class="col-6 col-md-4 text-truncate my-1 my-md-auto order-0 order-md-0">

                                                            <a href="<?php echo get_permalink( $pedido->ID ); ?>" class="text-decoration-none">
                                                                <?php echo $nombre_apellido ?>
                                                            </a>

                                                        </div>

                                                        <div class="col-6 col-md-2 text-truncate my-1 my-md-auto order-2 order-md-1">

                                                            <a href="<?php echo get_permalink( $pedido->ID ); ?>" class="text-decoration-none">
                                                                <?php echo $fecha_de_pedido ?>
                                                            </a>

                                                        </div>

                                                        <div class="col-6 col-md-2 text-truncate text-end my-1 my-md-auto order-2 order-md-1">

                                                            <? if( !empty($precio_de_venta) ): ?>
                                                                <a href="<?php echo get_permalink( $pedido->ID ); ?>" class="text-decoration-none">
                                                                    <?php echo '$'.$precio_de_venta ?>
                                                                </a>
                                                            <? endif ?>

                                                        </div>

                                                        <div class="col-6 col-md-2 text-truncate text-end my-1 my-md-auto order-1 order-md-2">

                                                            <div class="btn btn-sm text-dark border-1 rounded-pills p-1" style="background-color:<?php echo $color_estado; ?>;">
                                                                <div class="mx-2"><?php echo $nombre_estado; ?></div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            <?php endforeach; ?>

                                        </div>

                                    </div>

                                <?php endif; ?>  	

                                <?php 
                                $args = array( 'post_type' => 'cliente', 'include' => $include_cli_ids, 'posts_per_page' => -1 );
                                $clientes = get_posts( $args ) ?? []; 
                                ?>

                                <?php if( !empty( $clientes ) && sizeof( $clientes ) ): ?>

                                    <div class="card mb-4" data-aos="zoom-in" data-aos-delay="1500">

                                        <div class="card-header bg-green-100 d-none d-md-block">

                                            <div class="row bold px-3">

                                                <div class="col-4">
                                                    Cliente
                                                </div>

                                                <div class="col-4">
                                                    Dirección
                                                </div>

                                                <div class="col-4">
                                                    Contactar
                                                </div>

                                            </div>

                                        </div>

                                        <div class="card-header bg-blue-100 d-block d-md-none">

                                            <div class="row bold px-3">
                                                Clientes
                                            </div>

                                        </div>

                                        <div class="card-body">

                                            <?php foreach( $clientes as $cliente ): ?>

                                                <?php 
                                                $fields 	= get_fields( $cliente->ID );
                                                $nombre 	= $fields['nombre'].' '.$fields['apellido']; 
                                                $direccion	= $fields['direccion'].', '.$fields['ciudad']; 
                                                $telefono	= $fields['telefono'];  
                                                $whatsapp	= $fields['whatsapp']; 
                                                $email 	    = $fields['email']; 
                                                ?>

                                                <div class="linea-tabla py-2 px-3 rounded rounded-3 border mb-2">

                                                    <div class="row">

                                                        <div class="col-6 col-md-4 text-truncate my-1 my-md-auto order-0 order-md-0">

                                                            <a href="<?php echo get_permalink( $cliente->ID ); ?>" class="text-decoration-none">
                                                                <?php echo $nombre; ?>
                                                            </a>

                                                        </div>

                                                        <div class="col-6 col-md-4 text-truncate my-1 my-md-auto order-1 order-md-1">

                                                            <a href="<?php echo get_permalink( $cliente->ID ); ?>" class="text-decoration-none">
                                                                <?php echo $direccion; ?>
                                                            </a>

                                                        </div>

                                                        <div class="col-12 col-md-4 text-truncate my-1 my-md-auto order-2 order-md-2 d-flex align-items-center">

                                                            

                                                            <div>

                                                                

                                                                <?php if( !empty( $telefono ) ): ?>

                                                                    <?php 

                                                                    if( $whatsapp ):

                                                                        $label_telefono = 'Whatsapp'; 

                                                                        $bg_class = 'bg-success';

                                                                        $link = 'https://wa.me/+54';

                                                                    else:

                                                                        $label_telefono = 'Teléfono'; 

                                                                        $bg_class = 'bg-primary';

                                                                        $link = 'tel:';

                                                                    endif; 	

                                                                    ?>

                                                                    <a href="<?php echo $link; ?><?php echo $telefono; ?>" target="_blank" class="badge <?php echo $bg_class; ?> text-white text-decoration-none me-2">

                                                                        <?php echo $label_telefono; ?>

                                                                    </a>

                                                                    

                                                                

                                                                <?php endif; ?>

                                                                

                                                                <?php if( !empty($email) ): ?>

                                                                    

                                                                    <a href="mailto:<?php echo $email; ?>" class="badge bg-warning text-white text-decoration-none">

                                                                        Mail

                                                                    </a>

                                                                

                                                                <?php endif; ?>

                                                                

                                                            </div>

                                                            

                                                        </div>

                                                        

                                                    </div>

                                                    

                                                </div>

                                            <?php endforeach; ?>

                                        </div>

                                    </div>

                                <?php endif; ?>

                            </div>

                            <div class="col-12 col-md-5 overflow-hidden">

                                <div class="card h-100"  data-aos="fade-left" data-aos-delay="1800">

                                    <div class="card-header bg-yellow-100 bold">
                                        Pedidos
                                    </div>

                                    <div class="card-body">
                                        <canvas class="pt-2" id="graficoPedidos" width="400" height="200"></canvas>
                                        <canvas class="pt-2" id="graficoRanking" width="400" height="250"></canvas>
                                        <canvas class="pt-2" id="graficoVistos" width="400" height="200"></canvas>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>

<? include CRM_PLUGIN_PATH . 'templates/footer-crm.php'; ?>