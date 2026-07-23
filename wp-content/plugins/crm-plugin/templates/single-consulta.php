<?php 
if( !is_user_logged_in() ) {
    wp_redirect( home_url('/login') );
    exit;
}

include CRM_PLUGIN_PATH . 'templates/header-crm.php';

if( have_posts() ): while( have_posts() ): the_post(); ?>
	
	<?php
	$post_id 			= $post->ID;
	$post_title			= $post->post_title;
	$post_content		= $post->post_content;
	?>

    <main role="main" class="position-relative">

	  	<form id="Form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">

			<section>
				
				<div class="container-fluid">
							
					<input type="hidden" name="action" value="update_data_consulta">
	            	<input type="hidden" name="cliente_nonce" value="<?php echo wp_create_nonce( 'data_consulta_nonce' ); ?>">
	            	<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
					<input type="hidden" name="redirect" value="<?php echo get_permalink( $post_id ); ?>">
						
			        <div class="row py-3 py-md-0">
			          
			          	<?php include CRM_PLUGIN_PATH. 'templates/sidebar-crm.php' ?>
			          	
			          	<div class="col-12 col-md-10">

							<div class="px-md-4 py-5">

								<div class="row pb-3">
									
									<div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-start">
										
										<a href="<?php echo home_url( '/crm/consultas' ) ?>" class="btn btn-outline-secondary d-none d-md-block">
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
												Datos de la consulta ( en construccion )
											</div>
											
											<div class="card-body">
												
												<div class="row">
													
													<div class="col-12 col-md-6 mb-3">
														
														<div class="form-group position-relative">
															<input id="nombre" type="text" name="nombre" class="form-control text-primary mb-0" id="myInput" value="<?php echo $nombre; ?>">
															<span class="floating-placeholder" id="floatingPlaceholder">Nombre</span>
														</div>
														
													</div>

                                                    <div class="col-12 col-md-6 mb-3">
														
														<div class="form-group position-relative">
															<input id="apellido" type="text" name="apellido" class="form-control text-primary mb-0" id="myInput" value="<?php echo $apellido; ?>">
															<span class="floating-placeholder" id="floatingPlaceholder">Apellido</span>
														</div>
														
													</div>
															
													<div class="col-12 col-md-6 mb-3">
														
														<div class="form-group position-relative">
															<input type="text" name="dni" class="form-control text-primary mb-0" aria-label="DNI" aria-describedby="basic-addon1" value="<?php echo $dni; ?>">
															<span class="floating-placeholder" id="floatingPlaceholder">DNI</span>
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
                        <a href="<?php echo home_url( '/crm/consultas' ) ?>" class="btn btn-outline-secondary w-100">
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

<?php endwhile; endif; ?>       

<?php include CRM_PLUGIN_PATH . 'templates/footer-crm.php'; ?> 