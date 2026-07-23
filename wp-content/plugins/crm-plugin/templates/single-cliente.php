<?php 
if( !is_user_logged_in() ) {
    wp_redirect( home_url('/login') );
    exit;
}

$delete_id = null;
if( isset( $_GET[ 'delete' ] ) ):
	
	$delete_id = $_GET[ 'delete' ];
	$my_post = array( 'ID' => $delete_id, 'post_status' => 'trash' );
	wp_update_post( $my_post );
	
	wp_redirect( home_url( '/crm/clientes/?delete=1' ) );
	exit;
	
endif;

$delete_id = null;
if( isset( $_GET[ 'delete_foto' ] ) ):
	
	$delete_id = $_GET[ 'delete_foto' ];
	if( has_post_thumbnail( $delete_id ) ) delete_post_meta( $delete_id, '_thumbnail_id' );
        
endif;

include CRM_PLUGIN_PATH . 'templates/header-crm.php';

if( have_posts() ): while( have_posts() ): the_post(); ?>
	
	<?php
	$post_id 			= $post->ID;
	$post_title			= $post->post_title;
	$post_content		= $post->post_content;
	
	$dni		 		= get_field( 'dni' );	
	$nombre 			= get_field( 'nombre' );	
	$apellido 			= get_field( 'apellido' );	
	$direccion 			= get_field( 'direccion' );	
	$ciudad 			= get_field( 'ciudad' );	
	$codigo_postal 		= get_field( 'codigo_postal' );	
    $telefono 		    = get_field( 'telefono' );	
	$whatsapp 		    = get_field( 'whatsapp' );	
	$email		        = get_field( 'email' );	
	$comentarios		= get_field( 'comentarios' );
	$payment			= get_field( 'forma_de_pago_preferida');
    /*
    $pedidos = get_posts([
        'post_type'      => 'pedido',
        'posts_per_page' => -1,
        'meta_query'     => [
            [
                'key'     => 'cliente',
                'value'   => $post_id,
                'compare' => '=', // exact match
            ],
        ],
    ]);
    */
	?>
	
  	<main role="main" class="position-relative">

	  	<form id="Form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">

			<section>
				
				<div class="container-fluid">
							
					<input type="hidden" name="action" value="update_data_cliente">
	            	<input type="hidden" name="cliente_nonce" value="<?php echo wp_create_nonce( 'data_cliente_nonce' ); ?>">
	            	<input type="hidden" name="post_id" id="cliente_id" value="<?php echo $post_id; ?>">
					<input type="hidden" name="redirect" value="<?php echo get_permalink( $post_id ); ?>">
						
			        <div class="row py-3 py-md-0">
			          
			          	<?php include CRM_PLUGIN_PATH. 'templates/sidebar-crm.php' ?>
			          	
			          	<div class="col-12 col-md-10">

							<div class="px-md-4 py-5">

								<div class="row pb-3">
									
									<div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-start">
										
										<a href="<?php echo home_url( '/crm/clientes/' ) ?>" class="btn btn-outline-secondary d-none d-md-block">
											<i class="fa-solid fa-angle-left"></i> Volver
										</a>
									
									</div>
									
									<div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end">
										
										<button id="btnUpdate" type="submit" class="btn btn-primary d-none d-md-block">
											<span id="btnUpdateText"><i class="fa-solid fa-pencil"></i> Actualizar</span>
											<span id="btnUpdateCarga" style="display: none;"><i class="fas fa-spinner fa-spin"></i></span>
										</button>
										
										<a href="javascript:;" onclick="$('#staticBackdrop').modal('show')" class="btn btn-danger d-none d-md-block ms-2">
											<i class="fa-solid fa-trash-can"></i> Borrar
										</a>
										
									</div>
									
								</div>
								
								<div class="row">
								
									<div class="col-12 col-md-9">
											
										<div class="card mb-4">
											
											<div class="card-header">
												Datos
											</div>
											
											<div class="card-body">
												
												<div class="row">
													
													<div class="col-12 col-md-4 mb-3">
														
														<div class="form-group position-relative">
															<input id="nombre" type="text" name="nombre" class="form-control text-primary mb-0" id="myInput" value="<?php echo $nombre; ?>">
															<span class="floating-placeholder" id="floatingPlaceholder">Nombre</span>
														</div>
														
													</div>

                                                    <div class="col-12 col-md-4 mb-3">
														
														<div class="form-group position-relative">
															<input id="apellido" type="text" name="apellido" class="form-control text-primary mb-0" id="myInput" value="<?php echo $apellido; ?>">
															<span class="floating-placeholder" id="floatingPlaceholder">Apellido</span>
														</div>
														
													</div>

                                                    <div class="col-12 col-md-4 mb-3">
														
														<div class="form-group position-relative">
															<input type="text" name="dni" class="form-control text-primary mb-0" aria-label="DNI" aria-describedby="basic-addon1" value="<?php echo $dni; ?>">
															<span class="floating-placeholder" id="floatingPlaceholder">DNI</span>
														</div>
														
													</div>

                                                    <div class="col-12 col-md-6 mb-3">
														
														<div class="form-group position-relative">
															<input id="razon_social" type="text" name="razon_social" class="form-control text-primary mb-0" id="myInput" value="<?php echo $razon_social; ?>">
															<span class="floating-placeholder" id="floatingPlaceholder">Razón Social</span>
														</div>
														
													</div>

                                                    <div class="col-12 col-md-6 mb-3">
														
														<div class="form-group position-relative">
															<input id="cuit" type="text" name="cuit" class="form-control text-primary mb-0" id="myInput" value="<?php echo $cuit; ?>">
															<span class="floating-placeholder" id="floatingPlaceholder">CUIT</span>
														</div>
														
													</div>
													
													<div class="col-12 col-md-6 mb-3">
														
														<div class="form-group position-relative">
															<input type="text" name="direccion" class="form-control text-primary mb-0" aria-label="Dirección" aria-describedby="basic-addon1" value="<?php echo $direccion; ?>">
															<span class="floating-placeholder" id="floatingPlaceholder">Dirección</span>
														</div>
														
													</div>

                                                    <div class="col-12 col-md-6 mb-3">
														
														<div class="form-group position-relative">
															<input type="text" name="ciudad" class="form-control text-primary mb-0" aria-label="Ciudad" aria-describedby="basic-addon1" value="<?php echo $ciudad; ?>">
															<span class="floating-placeholder" id="floatingPlaceholder">Ciudad</span>
														</div>
														
													</div>

                                                    <div class="col-12 col-md-6 mb-3">
														
														<div class="form-group position-relative">
															<input type="text" name="provincia" class="form-control text-primary mb-0" aria-label="Provincia" aria-describedby="basic-addon1" value="<?php echo $provincia; ?>">
															<span class="floating-placeholder" id="floatingPlaceholder">Provincia</span>
														</div>
														
													</div>
													
													<div class="col-12 col-md-6 mb-1">
														
														<div class="form-group position-relative">
															<input type="text" name="codigo_postal" class="form-control text-primary mb-0" aria-label="CP" aria-describedby="basic-addon1" value="<?php echo $codigo_postal; ?>">
															<span class="floating-placeholder" id="floatingPlaceholder">Código Postal</span>
														</div>
														
													</div>

                                                    <div class="col-12 col-md-6 mb-3">
															
                                                        <div class="form-group position-relative">
                                                            <input type="text" name="email" class="form-control text-primary mb-0" aria-label="Email" aria-describedby="basic-addon1" value="<?php echo $email; ?>">
                                                            <span class="floating-placeholder" id="floatingPlaceholder">Email</span>
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="col-12 col-md-6 mb-3">
														
														<div class="form-group position-relative">
															<input type="text" name="payment" class="form-control text-primary mb-0" aria-label="Forma de Pago preferida" aria-describedby="basic-addon1" value="<?php echo $payment; ?>">
															<span class="floating-placeholder" id="floatingPlaceholder">Forma de Pago preferido</span>
														</div>
														
													</div>

                                                    <div class="row mb-3">
                                                            
                                                        <div class="col-12 col-md-8">
                                                            
                                                            <div class="form-group position-relative">
                                                                <input type="text" name="telefono" class="form-control text-primary mb-0" aria-label="Teléfono" aria-describedby="basic-addon2" value="<?php echo $telefono; ?>">
                                                                <span class="floating-placeholder" id="floatingPlaceholder"><?php if( $whatsapp ) echo 'Whatsapp'; else echo 'Teléfono'; ?></span>
                                                            </div>
                                                        
                                                        </div>
                                                    
                                                        <div class="col-12 col-md-4 d-flex align-items-center">
                                                            
                                                            <div class="form-check form-switch">
                                                                <input name="whatsapp" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"<?php if( $whatsapp ) echo ' checked'; ?>>
                                                                <label class="text-secondary" for="flexSwitchCheckChecked">Whatsapp</label>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                    </div>
													
												</div>
												
											</div>
											
										</div>

                                        <div class="card mb-4">
											
											<div class="card-header">
												Pedidos realizados
											</div>
											
											<div class="card-body">
                                                <canvas class="pt-2" id="graficoPedidosCliente" width="600" height="200"></canvas>
											</div>
											
										</div>
										
									</div>
									
									<div class="col-12 col-md-3">
										
										<div class="row mb-3 mb-md-0">
											
											<div class="col-12 col-md-12">
												
												<div class="card mb-3">
											
													<div class="card-header">
														Comentarios
													</div>
													
													<div class="card-body">
														
														<div id="ventana_comentarios" class="comentarios border p-2" style="height:50vh;">
															
															<?php if( $comentarios ) foreach( $comentarios as $key => $comm ): ?>
																	
																<div id="comment-<?php echo $key; ?>" class="card mb-2 comentario" style="background-color: #d2f4ea !important;">
																	
																	<div class="card-header bg-green-200 border-0 pt-1 pb-0 px-2 position-relative" style="background-color: #d2f4ea !important;">
																		
																		<span style="font-size: 0.8rem"><strong style="color:var(--bs-primary)"><?php echo $comm['user']; ?></strong></span>
																		
																		<div class="position-absolute comentarios-editar-borrar" style="top: 5px; right: 5px; font-size: 1rem;">
																			
																			<div class="d-flex justify-content-end">
																				
																				<div id="comentarios-guardar-<?php echo $key; ?>" class="comentarios-guardar pe-3 d-none">
																					<i data-id="<?php echo $key; ?>" class="fa-solid fa-save comment-save"></i>
																				</div>
																				
																				<div id="comentarios-editar-<?php echo $key; ?>" class="comentarios-editar pe-3">
																					<i data-id="<?php echo $key; ?>" class="fa-solid fa-pencil comment-edit"></i>
																				</div>
																				
																				<div class="comentarios-borrar pe-2">
																					<i data-id="<?php echo $key; ?>" class="fa-solid fa-trash-can comment-delete"></i>
																				</div>
																				
																			</div>
																			
																		</div>
																		
																	</div>
																	
																	<div class="card-body pb-1 pt-0 px-2">
																		<textarea class="border-0 input-comment" id="comment-comm-<?php echo $key; ?>" rows="1" oninput="autoResize(this)" disabled><?php echo $comm['comentario']; ?></textarea>
																	</div>
																	
																</div>
																
															<?php endforeach; ?>
																
														</div>
														
													</div>
													
													<div class="card-footer" style="background-color: #ffffff !important;">
														
														<div class="input-group my-2">
															
															<textarea id="comentario" type="text" class="form-control border border-primary p-2 mb-0" style="border-radius: 7px 0px 0px 7px;" placeholder="Escribe aqui tu comentario..." rows="3"></textarea>
															<button id="add_comment" class="btn btn-outline-primary mb-0" type="button">
																<span id="btnText"><i class="fa-solid fa-paper-plane px-3"></i></span>
																<span id="carga" style="display: none;"><i class="fas fa-spinner fa-spin"></i></span>
															</button>
															
														</div>
														
													</div>
													
												</div>
												
											</div>
											
										</div>
										
									</div>
									
								</div>

							</div>
				            
			          	</div>
			       	
		        	</div>
		        
				</div>
				
			</section>

			<nav class="navbar navbar-expand-lg navbar-dark fixed-bottom bg-white d-block d-md-none shadow">

                <div class="container py-2">

                    <div class="col-4 px-1">
                        <a href="<?php echo home_url( '/crm/clientes' ) ?>" class="btn btn-outline-secondary w-100">
                            Volver
                        </a>
                    </div>

                    <div class="col-4 px-1">
                        <button id="btnUpdate" type="submit" class="btn btn-primary w-100">
                            <span id="btnUpdateText">Actualizar</span>
                            <span id="btnUpdateCarga" style="display: none;"><i class="fas fa-spinner fa-spin"></i></span>
                        </button>
                    </div>

                    <div class="col-4 px-1">
                        <a href="javascript:;" onclick="$('#staticBackdrop').modal('show')" class="btn btn-danger w-100">
                            Borrar
                        </a>
                    </div>	
                    	
                </div>

            </nav>

        </form>
	    
  	</main>
  	
  	<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		
		<div class="modal-dialog modal-dialog-centered">
			
			<div class="modal-content">
				
				<div class="modal-header bg-primary text-white">
					<h5 class="modal-title" id="staticBackdropLabel">Aviso</h5>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				
				<div class="modal-body">
					Est&aacute;s seguro de eliminar este cliente?
				</div>
				
				<div class="modal-footer">
					<button id="sendDelete" data-id="<?php echo $post_id; ?>" type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
				</div>
				
			</div>
			
		</div>
		
	</div>
	  	
<?php endwhile; endif; ?>    

<script>
	window.addEventListener('load', function() {
        var input = document.getElementById('nombre');
        input.focus();
    });
</script>	

<? include CRM_PLUGIN_PATH . 'templates/footer-crm.php'; ?>