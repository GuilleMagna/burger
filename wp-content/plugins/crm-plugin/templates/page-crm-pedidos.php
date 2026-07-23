<?php 

/*
Template Name: CRM ( Pedidos )
*/

if( !is_user_logged_in() ) {
    wp_redirect( home_url('/login') );
    exit;
}

if( !empty( $_GET[ 'action' ] ) and $_GET[ 'action' ] == 'new' ):

	$estado_inicial = array();

	$cliente_id = isset( $_GET[ 'id'] ) ? $_GET[ 'id'] : '';

	if( empty($cliente_id) ) wp_die( 'Error en la seleccion' );

	$nro_pedido = get_numero_pedido();	

	$my_post = array(
		'post_title'    => $nro_pedido,
		'post_type'		=> 'pedido',
		'post_status'   => 'publish',
		'post_author'   => get_current_user_id()
	);

	$post_id = wp_insert_post( $my_post );

	if( !is_wp_error( $post_id ) ):

		$cliente = get_post( $cliente_id ); 

		$nombre_apellido = get_field( 'nombre', $cliente_id ) . ' '. get_field( 'apellido', $cliente_id );

		update_post_meta( $post_id, 'cliente', 			$cliente_id 				);
		update_post_meta( $post_id, 'fecha_de_pedido', 	current_time( 'd/m/Y' ) 	);

		$estado_inicial = get_field( 'estado_inicial', 'option' );
		wp_set_post_terms( $pedido_id, array( $estado_inicial ), 'estado' );

		wp_redirect( get_permalink( $post_id ) );

		exit;

	endif;	

endif;

include CRM_PLUGIN_PATH . 'templates/header-crm.php'; ?>

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

  	<main role="main">

	    <section class="vh-100">    	

	      	<div class="container-fluid">

	        	<div class="row vh-100">

		          	<?php include CRM_PLUGIN_PATH . 'templates/sidebar-crm.php'; ?>

		          	<?php 
		          	$_estado = ( isset( $_GET['estado'] ) ) ? $_GET['estado'] : '';

		          	$_estado_parent = $estado_parent = get_field( 'estado' ) ?? 0;
		          	$_estado_parent_data = get_term( $_estado_parent ); 

		          	if( !empty( $_estado ) ):

		          		$estado_data = get_term_by( 'slug', $_estado, 'estado' );
		          		$_estado_parent = $estado_data->term_id;

		          	endif; 	        	

		          	$estados = get_terms( array( 'taxonomy' => 'estado', 'parent' => $estado_parent, 'orderby' => 'count', 'order' => 'DESC' ) ) ?? [];
		          	?>

		          	<div class="col-12 col-md-10">

			            <div class="py-5 px-md-4"> 

			              	<div class="row">

		              			<?php 
		              			$term_count = get_posts_count_by_term( 'pedido', $_estado_parent_data->term_id, 'estado' );

		              			$link_estado = '?estado='.$_estado_parent_data->slug;

		              			$bg_color = $border_color = '';

		              			if( empty( $_estado ) OR ( $_estado AND $_estado_parent_data->slug == $_estado ) ){
		              				$bg_color = get_field( 'color_de_fondo', $_estado_parent_data );
		              				$border_color = get_field( 'color_de_borde', $_estado_parent_data );
		              				if( $_estado ) $link_estado = '?estado=';
		              			}
		              			?>

			              		<div class="col-12 col-md-3 col-xxl-2 mb-3">

			              			<a href="<?php echo $link_estado; ?>" tilte="Ver <?php echo $_estado_parent_data->name; ?>" class="text-decoration-none">

					                  	<div class="card border-0 border-start border-5 h-100" data-aos="fade-in" data-aos-delay="<?php echo $key*100; ?>" style="background-color:<?php echo $bg_color;?>; border-color:<?php echo $border_color;?> !important;">

						                    <div class="card-body">

						                      	<div class="row">
						                        	<div class="col-auto text-end text-ultra-big-status text-ultra-big bold"><?php echo $term_count ?></div>
						                        	<div class="col text-start text-normal-dos regular my-auto"><?php echo $_estado_parent_data->name; ?></div>
						                      	</div>

						                    </div>

					                  	</div>
					                  	
					               	</a> 

				                </div>

								<div class="d-none d-md-flex align-items-center col-auto mb-3">
									<img src="<?php echo CRM_PLUGIN_URL; ?>templates/themes/images/chevron-compact-right.svg" style="height: 30px;">
				                </div>

			              		<?php foreach( $estados as $key => $term ): ?>

			              			<?php 
			              			$term_count = get_posts_count_by_term( 'pedido', $term->term_id, 'estado' );

			              			$link_estado = '?estado='.$term->slug;

			              			$bg_color = $border_color = '';
			              			if( empty( $_estado ) OR ( $_estado AND $term->slug == $_estado ) ){
			              				$bg_color = get_field( 'color_de_fondo', $term );
			              				$border_color = get_field( 'color_de_borde', $term );
			              				if( $_estado ) $link_estado = '?estado=';
			              			}
			              			?>

				              		<div class="col-12 col-md-3 col-xxl-2 mb-3">

				              			<a href="<?php echo $link_estado; ?>" tilte="Ver <?php echo $term->name; ?>" class="text-decoration-none">

						                  	<div class="card border-0 border-start border-5 h-100" data-aos="fade-in" data-aos-delay="<?php echo $key*100; ?>" style="background-color:<?php echo $bg_color;?>; border-color:<?php echo $border_color;?> !important;">

							                    <div class="card-body">

							                      	<div class="row">
							                        	<div class="col-auto text-end text-ultra-big-status text-ultra-big bold"><?php echo $term_count ?></div>
							                        	<div class="col text-start text-normal-dos regular my-auto"><?php echo $term->name; ?></div>
							                      	</div>

							                    </div>

						                  	</div>

						               	</a> 

					                </div>

				                <?php endforeach; ?>

			              	</div>

			              	<?php 
		                	$args = array( 'post_type' => 'pedido', 'post_status' => 'publish', 'tax_query' => array( array( 'taxonomy' => 'estado', 'field' => 'id', 'terms' => $_estado_parent ) ), 'posts_per_page' => -1 );
		                	$pedidos = get_posts( $args ) ?? []; 
		                	
                            if( sizeof( $pedidos ) ): ?>

				              	<div class="row">

					                <div class="col-12">

					                  	<div class="card">

						                    <div class="card-header bg-blue-100 d-none d-md-block">

						                      	<div class="row bold py-2 px-3">

						                      		<div class="col-6 col-md-2">
							                          	ID
							                        </div>

							                        <div class="col-6 col-md-4">
							                          	Cliente
							                        </div>

							                        <div class="col-6 col-md-2">
							                          	Dirección
							                        </div>

                                                    <div class="col-6 col-md-2">
							                          	Fecha
							                        </div>

							                        <div class="col-6 col-md-1">
							                          	Precio
							                        </div>

                                                    <div class="col-6 col-md-1">
							                          	PDF
							                        </div>

						                      	</div>

						                    </div>

					                    	<div class="card-body">

					                    		<?php foreach( $pedidos as $pedido ): ?>

					                    			<?php 
							                  		$nombre_apellido = $direccion = '';
							                    	$cliente_id = get_field( 'cliente', $pedido->ID ); 
							                    	$nombre_apellido = get_field( 'nombre', $cliente_id ) .' '. get_field( 'apellido', $cliente_id );
                                                    $direccion = get_field( 'direccion', $cliente_id ) .', '. get_field( 'ciudad', $cliente_id );
							                    	$comprobante_pedido = get_field( 'comprobante_pedido', $pedido->ID ) ?? '';
							                    	$fecha_de_pedido = get_field( 'fecha_de_pedido', $pedido->ID ) ?? '';
                                                    $precio_de_venta = get_field( 'precio_de_venta', $pedido->ID ) ?? 0;
							                    	?>

							                      	<div class="linea-tabla py-2 px-3 rounded-3 border mb-2">

                                                        <div class="row">

                                                            <div class="col-6 col-md-2 text-truncate my-1 my-md-auto">

                                                                <a href="<?php echo get_permalink( $pedido->ID ); ?>" class="text-decoration-none">
                                                                    <?php echo $pedido->post_title ?>
                                                                </a>

                                                            </div>

                                                            <div class="col-6 col-md-4 text-truncate my-1 my-md-auto">

                                                                <a href="<?php echo get_permalink( $pedido->ID ); ?>" class="text-decoration-none">
                                                                    <?php echo $nombre_apellido ?>
                                                                </a>

                                                            </div>

                                                            <div class="col-6 col-md-2 text-truncate my-md-auto">

                                                                <a href="<?php echo get_permalink( $pedido->ID ); ?>" class="text-decoration-none">
                                                                    <?php echo $direccion ?>
                                                                </a>

                                                            </div>

                                                            <div class="col-6 col-md-2 text-truncate my-1 my-md-auto">

                                                                <a href="<?php echo get_permalink( $pedido->ID ); ?>" class="text-decoration-none">
                                                                    <?php echo $fecha_de_pedido ?>
                                                                </a>

                                                            </div>

                                                            <div class="col-6 col-md-1 text-truncate my-1 my-md-auto">

                                                                <? if( !empty($precio_de_venta) ): ?>
                                                                    <a href="<?php echo get_permalink( $pedido->ID ); ?>" class="text-decoration-none">
                                                                        $<?php echo number_format( $precio_de_venta, 2, ',', '.' ) ?>
                                                                    </a>
                                                                <? endif ?>

                                                            </div>

                                                            <div class="col-6 col-md-1 text-truncate my-md-auto">

                                                                <a href="<?php echo $comprobante_pedido; ?>" download="<?php echo $comprobante_pedido; ?>" class="text-primary">

                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-download" viewBox="0 0 16 16">
                                                                        <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383"/>
                                                                        <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708z"/>
                                                                    </svg> 

                                                                </a>

                                                            </div>

                                                        </div>

							                      	</div>

					                      		<?php endforeach; ?>

					                    	</div>

					                  	</div>

					                </div>

				              	</div>

			              	<?php else: ?>

			              		<p>No se encontraron pedidos.</p>

			              	<?php endif; ?>

			            </div>

		          	</div>

	        	</div>

	      	</div>

			<a href="javascript:;" id="btnAddPedido" class="float" target="_blank" style="z-index: 9998;">
				<i class="fa-regular fa-clipboard fa-2x" style="color: #ffffff; font-size: 26px; margin-top: 18px;"></i>
			</a>

			<div class="label-container" style="z-index: 9999;">
				<div class="label-text">Agregar Pedido</div>
				<i class="fa fa-play label-arrow"></i>
			</div>

	    </section>

  	</main>

  	<?php 
  	$args = array( 
		'post_type' => 'cliente',
		'exclude' => $delete_id,
		'orderby' => 'title',
		'order' => 'ASC',
		'posts_per_page' => -1
	);

	$clientes = get_posts( $args );
	
    if( !empty( $clientes ) && sizeof( $clientes ) ): ?>

	  	<div class="modal fade" id="staticBackdropPedido" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

			<div class="modal-dialog modal-dialog-centered">

				<div class="modal-content">

					<div class="modal-header bg-primary text-white">
						<h5 class="modal-title" id="staticBackdropLabel">Selecciona el Cliente</h5>
						<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>

					<div class="modal-body">

						<div class="mb-3">

						    <select id="ElijeCliente" class="form-select border-secondary" aria-label="Default select example">
							  	<option selected>Selecciona el cliente</option>
							  	<?php foreach( $clientes as $cliente ): ?>
							  		<option value="<?php echo $cliente->ID; ?>">
                                        <?php echo get_field( 'nombre', $cliente->ID ).' '. get_field( 'apellido', $cliente->ID ); ?>
                                    </option>
							  	<?php endforeach; ?>

							</select>

						</div>

					</div>

					<div class="modal-footer">
						<button type="submit" id="btnCrearPedido" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
					</div>

				</div>

			</div>

		</div>

	<?php endif; ?>

<?php endwhile; endif; ?>

<? include CRM_PLUGIN_PATH . 'templates/footer-crm.php'; ?>