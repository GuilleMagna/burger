<?php 

/*
Template Name: CRM ( Consultas )
*/

if( !is_user_logged_in() ) {
    wp_redirect( home_url('/login') );
    exit;
}

if( isset( $_GET[ 'action' ] ) and $_GET[ 'action' ] == 'new' ):

	$my_post = array(
		'post_title'    => 'Nueva Consulta',
		'post_type'		=> 'consulta',
		'post_status'   => 'pending',
		'post_author'   => get_current_user_id()
	);

	$post_id = wp_insert_post( $my_post );

	if( !is_wp_error( $post_id ) ):

		$get_permalink = get_permalink( $post_id );	
		wp_redirect( get_permalink( $post_id ) );
		exit;

	endif; 

endif;

$delete_id = null;
if( isset( $_GET[ 'delete' ] ) ):

	$delete_id = $_GET[ 'delete' ];
	$my_post = array( 'ID' => $delete_id, 'post_status' => 'trash' );

	wp_update_post( $my_post );

endif;

include CRM_PLUGIN_PATH . 'templates/header-crm.php' ?>

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

	<main role="main" class="position-relative">

    	<section class="vh-100">

	     	<div class="container-fluid">

		     	<div class="row vh-100">

		          	<?php include plugin_dir_path(__FILE__) . 'sidebar-crm.php'; ?>

	          		<div class="col-12 col-md-10">

		            	<div class="pt-5 mt-5 px-md-4">

							<h1 class="text-start text-normal bold text-dark mb-4">
								Consultas
							</h1>

							<div class="card mb-2">

								<div class="card-header bg-blue-100">

									<div class="row bold">

										<div class="col-12 col-md-3">

											<div class="input-group flex-nowrap">
												<input id="filterConsulta" type="text" name="search_nombre" class="form-control bg-white text-dark border mb-2 mb-md-0 rounded rounded-3" placeholder="Cliente" aria-label="buscar" aria-describedby="addon-wrapping" value="">
											</div>

										</div>

                                        <div class="col-12 col-md-3">

											<div class="input-group flex-nowrap">
												<input id="filterNombre" type="text" name="search_direccion" class="form-control bg-white text-dark border mb-2 mb-md-0 rounded rounded-3" placeholder="Direccion" aria-label="buscar" aria-describedby="addon-wrapping" value="">
											</div>

										</div>

										<div class="col-12 col-md-2">

											<div class="input-group flex-nowrap">
												<input id="filterCiudad" type="text" name="search_ciudad" class="form-control bg-white text-dark border mb-2 mb-md-0 rounded rounded-3" placeholder="Ciudad" aria-label="buscar" aria-describedby="addon-wrapping" value="">
											</div>

										</div>

									</div>

								</div>

							</div>

			              	<div class="row">	

				                <div class="col-12">

				                	<?php 
				                	$args = array( 
										'post_type' => 'consulta',
										'exclude' => $delete_id,
										'orderby' => 'title',
										'order' => 'ASC',
										'posts_per_page' => -1
									); 

				                	$consultas = get_posts( $args ); 
				                	
                                    if( sizeof( $consultas ) ): ?>

					                  	<div class="card mb-2">

						                    <div id="listadoConsultas" class="card-body">

						                      	<?php foreach( $consultas as $consulta ): ?>

						                    		<?php 
						                    		$nombre 	        = get_field( 'nombre', $consulta->ID ) ?? ''; 
                                                    $apellido 	        = get_field( 'apellido', $consulta->ID ) ?? ''; 

                                                    $nombre_apellido 	= $nombre.' '.$apellido; 

                                                    $direccion		 	= get_field( 'direccion',       $consulta->ID ) ?? ''; 
						                    		$ciudad			 	= get_field( 'ciudad',          $consulta->ID ) ?? ''; 
                                                    $telefono			= get_field( 'telefono',        $consulta->ID ) ?? ''; 
                                                    $whatsapp			= get_field( 'whatsapp',        $consulta->ID ) ?? '';
                                                    $email			    = get_field( 'email',           $consulta->ID ) ?? '';
						                    		?>

							                      	<div class="linea-tabla py-2 px-3 border mb-2 rounded rounded-3" data-nombre="<?php echo $nombre_apellido; ?>" data-direccion="<?php echo $direccion; ?>" data-ciudad="<?php echo $ciudad; ?>">

								                        <div class="row">

								                          	<div class="col-12 col-md-3 text-truncate my-1 my-md-auto">

								                          		<a href="<?php echo get_permalink( $consulta->ID ); ?>" class="text-decoration-none">
									                            	<b><?php echo $nombre_apellido; ?></b>
									                            </a>

								                          	</div>

                                                            <div class="col-3 col-md-3 text-truncate my-1 my-md-auto">
								                           		<?php echo $direccion; ?>
								                          	</div>

								                          	<div class="col-6 col-md text-truncate my-1 my-md-auto">
								                           		<?php echo $ciudad; ?>
								                          	</div>

								                          	<div class="col-12 col-md-auto text-truncate my-1 my-md-auto d-flex align-items-center">

								                            	<div class="d-flex justify-content-end">

								                              		<button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas<?php echo $consulta->ID; ?>" aria-controls="offcanvasRight" class="text-decoration-none border-0 badge rounded-pills bg-info text-white me-2">
								                                		Ver Info
								                              		</button>

								                              		<?php if( !empty( $telefono ) ): ?>

									                              		<?php 
									                              		if( $whatsapp ):
									                              			$label_telefono = 'Whatsapp'; 
									                              			$bg_class = 'bg-success';
																			$link = 'https://wa.me/+54';
									                              		else:
									                              			$label_telefono = 'Teléfono'; 
									                              			$bg_class = 'bg-primary';
																			$link= 'tel:';
									                              		endif; 	
									                              		?>

										                              	<a href="<?php echo $link; ?><?php echo $telefono; ?>" target="_blank" class="badge <?php echo $bg_class; ?> bold text-decoration-none me-2">
										                                	<?php echo $label_telefono; ?>
										                              	</a>

									                              	<?php endif; ?>

								                              		<?php if( !empty( $email ) ): ?>

										                              	<a href="mailto:<?php echo $email; ?>" class="badge bg-warning bold text-decoration-none me-2">
										                                	Mail
										                              	</a>

									                              	<?php endif; ?>

																	<a href="<?php echo get_permalink( $consulta->ID ); ?>" class="badge bg-success text-white bold text-decoration-none me-1">
																		<i class="fa-solid fa-pencil"></i> Editar
																	</a>

																	<a href="javascript:;" onclick="$('#staticBackdrop-<?php echo $consulta->ID; ?>').modal('show')" class="badge bg-danger text-white bold text-decoration-none">
																		<i class="fa-solid fa-trash-can"></i> Borrar
																	</a>

																</div>

															</div>

								                        </div>

							                      	</div>

							                      	<div class="modal fade" id="staticBackdrop-<?php echo $consulta->ID; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

														<div class="modal-dialog modal-dialog-centered">

															<div class="modal-content">

																<div class="modal-header bg-primary text-white">

																	<h5 class="modal-title" id="staticBackdropLabel">Aviso</h5>

																	<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>

																</div>

																<div class="modal-body">
																	Est&aacute;s seguro de eliminar esta consulta?
																</div>

																<div class="modal-footer">
																	<!--button id="sendDelete" data-id="<?php echo $cliente->ID; ?>" type="button" class="btn btn-primary">Aceptar</button-->
																	<a href="?delete=<?php echo $consulta->ID; ?>" class="btn btn-primary">Aceptar</a>
																</div>

															</div>

														</div>

													</div>

						                      	<?php endforeach; ?>

						                    </div>

				                  		</div>

				                  	<?php endif; ?>

				                </div>

			              	</div>

		            	</div>

		          	</div>

				</div>

	      	</div>

			<a href="?action=new" class="float" style="z-index: 9998;">
				<i class="fa-regular fa-address-book fa-2x" style="color: #ffffff; font-size: 26px; margin-top: 18px;"></i>
			</a>

			<div class="label-container" style="z-index: 9999;">
				<div class="label-text">Agregar Consulta</div>
				<i class="fa fa-play label-arrow"></i>
			</div>

    	</section>

		<?php if( sizeof( $consultas ) > 0  ) foreach( $consultas as $consulta ): ?>

    		<?php 
    		$dni				= get_field( 'dni', $consulta->ID ); 
    		$nombre	            = get_field( 'nombre', $consulta->ID ) ?? ''; 
            $apellido 	        = get_field( 'apellido', $consulta->ID ) ?? ''; 

            $nombre_apellido 	= $nombre . ' '. $apellido; 

    		$telefono	        = get_field( 'telefono', $consulta->ID ); 
    		$whatsapp	        = get_field( 'whatsapp', $consulta->ID ); 
    		$email 	            = get_field( 'email', $consulta->ID ); 
    		$codigo_postal		= get_field( 'codigo_postal', $consulta->ID ); 
    		$direccion			= get_field( 'direccion', $consulta->ID ); 
    		$ciudad				= get_field( 'ciudad', $consulta->ID ); 

    		$comentarios		= get_field( 'comentarios', $consulta->ID );
    		?>

	    	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas<?php echo $consulta->ID; ?>" aria-labelledby="offcanvasRightLabel" style="width: 35% !important;">

		      	<div class="offcanvas-header bg-cyan-100">
		        	<h5 id="offcanvasRightLabel" class="mb-0"><?php echo $nombre_apellido; ?></h5>
		        	<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		      	</div>

		      	<div class="offcanvas-body">

			        <div class="row">

			          	<div class="col-12 mb-4">

			            	<div class="card">

				              	<div class="card-header">
				                	Informacion de la consulta:
				              	</div>

				              	<div class="card-body">
				                	<p><b>DNI:</b> <?php echo $dni; ?></p>
				                	<p><b>Dirección:</b> <?php echo $direccion; ?></p>
					                <p><b>Ciudad:</b> <?php echo $ciudad; ?></p>
					                <p><b>Código Postal:</b> <?php echo $codigo_postal; ?></p>
				              	</div>

				            </div>

			          	</div>

			          	<div class="col-12 mb-4">

			            	<div class="card">

				              	<div class="card-header">
				                	Contacto:
				              	</div>

				              	<div class="card-body">
				                	<p><b>Teléfono:</b> <?php echo $telefono; ?></p>
				                	<p><b>Email:</b> <?php echo $email; ?></p>
				              	</div>

			            	</div>

			          	</div>  

                        <?php if( $comentarios ): ?>

                            <div class="col-12 mb-4">

                                <div class="card">

                                    <div class="card-header">
                                        Comentarios:
                                    </div>

                                    <div class="card-body">

                                        <div class="comentarios" style="height: 20%; overflow: auto;">

                                            <?php foreach( $comentarios as $comm ): ?>
                                                <?php echo $comm['comentario'] . '<br>'; ?>
                                            <?php endforeach; ?>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        <?php endif ?>

			        </div>

		      	</div>

	    	</div>

	    <?php endforeach; ?>

  	</main>

<?php endwhile; endif; ?> 

<?php include CRM_PLUGIN_PATH . 'templates/footer-crm.php'; ?>