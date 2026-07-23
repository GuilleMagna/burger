<?php 

/*
Template Name: CRM ( Perfil ) 
*/

if( !is_user_logged_in() ) {
    wp_redirect( home_url('/login') );
    exit;
}

include CRM_PLUGIN_PATH . 'templates/header-crm.php'; 

$current_user = wp_get_current_user(); 

$delete_id = null;
if( isset( $_GET[ 'delete_foto' ] ) ):
	update_field( 'avatar', '', 'user_'. $current_user->ID );
endif;

if( have_posts() ): while( have_posts() ): the_post(); ?>

	<?php 
	$nombre 			= $current_user->first_name ?? '';
	$apellido	 		= $current_user->last_name ?? '';
	$alias	 			= $current_user->display_name ?? '';
	$email 				= $current_user->user_email ?? '';
	
	$telefono	 		= get_field( 'telefono', 'user_'. $current_user->ID ) ?? '';
	?>

  	<main role="main" class="position-relative">

	    <section class="vh-100">

	      	<div class="container-fluid">

		        <div class="row vh-100">

		          	<?php include CRM_PLUGIN_PATH. 'templates/sidebar-crm.php' ?>

		          	<div class="col-12 col-md-10">

						<div class="py-5 px-md-4">

							<form id="Form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">

								<input type="hidden" name="action" value="update_user_profile">
								<input type="hidden" name="profile_nonce" value="<?php echo wp_create_nonce('profile_update_nonce'); ?>">
								<input type="hidden" name="redirect" value="<?php echo home_url( '/crm/perfil' ) ?>">

								<div class="row text-big bold pb-4">

									<div class="col-12 d-flex justify-content-center justify-content-md-end">

										<button id="btnUpdate" type="submit" class="btn btn-primary">
											<span id="btnUpdateText"><i class="fa-solid fa-pencil"></i> Actualizar</span>
											<span id="btnUpdateCarga" style="display: none;"><i class="fas fa-spinner fa-spin"></i></span>
										</button>

									</div>

								</div>

								<div class="row">

									<div class="col-12">

										<div class="card mb-4">

											<div class="card-header bg-cyan-100">
												Datos
											</div>

											<div class="card-body">

												<div class="row">

													<div class="col-12 col-md-4 mb-3">

														<div class="form-group position-relative">

															<input type="text" class="form-control mb-0 text" name="nombre" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $nombre; ?>">

															<span class="floating-placeholder" id="floatingPlaceholder">Nombre</span>

														</div>

													</div>

													<div class="col-12 col-md-4 mb-3">

														<div class="form-group position-relative">
															<input type="text" class="form-control mb-0 text" name="apellido" placeholder="Apellido" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $apellido; ?>">
															<span class="floating-placeholder" id="floatingPlaceholder">Apellido</span>
														</div>

													</div>

													<div class="col-12 col-md-4 mb-3">

														<div class="form-group position-relative">
															<input type="text" class="form-control mb-0 text" name="alias" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $alias; ?>">
															<span class="floating-placeholder" id="floatingPlaceholder">Alias</span>
														</div>

													</div>

													<div class="col-12 col-md-6 mb-3">

														<div class="form-group position-relative">
															<input type="text" class="form-control mb-0 mail" name="email" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $email; ?>">
															<span class="floating-placeholder" id="floatingPlaceholder">Correo Electrónico</span>
														</div>

													</div>

													<div class="col-12 col-md-6 mb-3">

														<div class="form-group position-relative">
															<input type="text" class="form-control mb-0 tel" name="telefono" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $telefono; ?>">
															<span class="floating-placeholder" id="floatingPlaceholder">Teléfono</span>
														</div>

													</div>

												</div>

											</div>

										</div>

									</div>

								</div>

							</form>

						</div>

		          	</div>

		        </div>

	      	</div>

	    </section>

  	</main>

  	<div class="modal fade" id="staticBackdropFoto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

		<div class="modal-dialog modal-dialog-centered">

			<form id="upload-image-form" enctype="multipart/form-data">

				<input id="user_id" type="hidden" name="user_id" value="<?php echo $current_user->ID; ?>">

				<div class="modal-content">

					<div class="modal-header bg-primary text-white">
						<h5 class="modal-title" id="staticBackdropLabel">Elegir tu Foto</h5>
						<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>

					<div class="modal-body">

						<div class="mb-3">
						  	<label for="formFile" class="form-label">Selecciona</label>			  	
						    <input type="file" class="form-control" id="featured-image" name="featured_image">
						    <input type="hidden" id="upload_featured_image_nonce" value="<?php echo wp_create_nonce('upload_featured_image_nonce'); ?>">
						</div>

					</div>

					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
					</div>

				</div>

			</form>

		</div>

	</div>

<?php endwhile; endif; ?>

<? include CRM_PLUGIN_PATH . 'templates/footer-crm.php'; ?>