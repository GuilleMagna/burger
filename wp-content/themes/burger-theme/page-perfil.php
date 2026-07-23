<?php 
if( !is_user_logged_in() ) {
    wp_redirect( home_url('/login') );
    exit;
}
/*
Template name: Perfil
*/ 
?>
<?php get_header(); ?>

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>    	

	<main role="main">
	
	    <section role="banner" id="inicio" class="bg-light section">
	    	
	      	<div class="container">
		        
			  	<?php 
			  	$current_user = wp_get_current_user(); 
			  	$current_user_id = $current_user->ID;
			  	?>
			  	
			  	<div class="row justify-content-center mb-3">
			  		
					<div class="col-12 col-md-8 py-5">
						
			        	<div class="bg-white br-12 p-3 p-md-5 box-shadow">
				          	
			            	<h1 class="text-normal-dos text-dark bold d-none d-md-block text-center">
			            		<?php the_title(); ?>
			            	</h1>
				            					            	
	          				<div class="text-dark mb-5 d-none d-md-block">
	          					<?php the_content(); ?>
	          				</div>
	          				
	          				<?php if( strpos( $_SERVER['REQUEST_URI'], '?update=complete') !== false ): ?>
					
				        		<div id="login_update" class="row notice notice-update">
				        			Se han guardado sus datos.
				        		</div>
								
			        		<?php endif; ?>
	          				
	          				<form action="<?php echo esc_url( network_site_url( 'wp-login.php?action=perfil', 'login_post' ) ); ?>" method="post">
	          				
					          	<div class="row">
						            
						            <div class="col-12 col-md-6 mb-3">
						            	
						              	<label for="basic-url" class="form-label text-dark bold">
						              		Nombre
						              	</label>
						              	
						              	<div class="input-group">
						                	<input type="text" name="first_name" class="form-control text-dark border-dark py-2" value="<?php echo $current_user->first_name; ?>">
						              	</div>
						              	
						            </div>
						            
						            <div class="col-12 col-md-6 mb-3">
						            	
						              	<label for="basic-url" class="form-label text-dark bold">
						              		Apellido
						              	</label>
						              	
						              	<div class="input-group">
						                	<input type="text" name="last_name" class="form-control text-dark border-dark py-2" value="<?php echo $current_user->last_name; ?>">
						              	</div>
						              	
						            </div>
						            
						            <div class="col-12 mb-3">
							            	
						              	<label for="basic-url" class="form-label text-dark bold">
						              		Correo electr&oacute;nico
						              	</label>
						              	
						              	<div class="input-group">
						                	<input type="email" name="user_email" class="form-control text-dark border-dark py-2" value="<?php echo $current_user->user_email; ?>">
						              	</div>
						              	
						            </div>
						            
						            <div class="col-12 col-md-6 mb-3">
							            	
						              	<label for="basic-url" class="form-label text-dark bold">
						              		Alias
						              	</label>
						              	
						              	<div class="input-group">
						                	<input type="text" name="nicename" class="form-control text-dark border-dark py-2" value="<?php echo $current_user->display_name; ?>" required>
						              	</div>
						              	
						            </div>
						            
						            <div class="col-12 col-md-6 mb-3">
						            	
						              	<label for="basic-url" class="form-label text-dark bold">
						              		Teléfono celular
						              	</label>
						              	
						              	<div class="input-group">
						                	<input type="text" name="user_phone" class="tel form-control text-dark border-dark py-2"  value="<?php the_field( 'telefono', 'user_'.$current_user_id ); ?>">
						              	</div>
						              	
						            </div>
						            
					            	<div class="col-12 col-md-6 mb-3 password-container">
													
						              	<label for="user_pass" class="form-label text-dark bold">
						              		Contraseña
						              	</label>
						              	
						              	<div class="input-group">
									    	<input type="password" class="form-control text-dark border-dark py-2" name="user_pass" id="user_pass" required>
								    	</div>
								    	
								    	<button type="button" class="btn btn-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="<?php esc_attr_e('Hide password'); ?>" style="display:inline-flex;width:auto">
						                    <span class="dashicons dashicons-hidden" aria-hidden="true"></span>
						                </button>
									
									</div>
												    
									<div class="col-12 col-md-6 mb-3 password-container">
												    
									    <label for="user_pass_confirm" class="form-label text-dark bold">
						              		Confirmar Contraseña
						              	</label>
						              	
									    <div class="input-group">
									    	<input type="password" class="form-control text-dark border-dark py-2" name="user_pass_confirm" id="user_pass_confirm" required>
									    </div>
									    
									    <button type="button" class="btn btn-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="<?php esc_attr_e('Hide password'); ?>" style="display:inline-flex;width:auto">
						                    <span class="dashicons dashicons-hidden" aria-hidden="true"></span>
						                </button>
									    
									</div>
															
									<div class="col-12 col-md-6 mb-3">
								    
									    <button type="button" class="btn btn-secondary w-100" id="generate-password">Generar Contraseña Segura</button>
									    <div id="password-strength-meter"></div>
									    <span id="password-strength-message"></span>
									
									</div>
				
					                <input type="checkbox" name="soy-un-robot" id="soy-un-robot" value="1" style="position:absolute;left:-2000px;">          
					                
					               	<div class="d-flex justify-content-center my-4">
					            		
					              		<button type="submit" class="btn btn-primary rounded-5 py-2 px-5">
					              			Guardar
					              		</button>
					              		
					             	</div>
					             	
					             	<div class="col-12 d-flex flex-column text-center">
			                      		<a href="<?php echo wp_logout_url( home_url( '/logout' ) ); ?>" class="text-dark bold">Cerrar sesión</a>
						            </div>
					             	
					          	</div>
					          	
					        </form>
				          	
			        	</div>
		        	
					</div>
				
		  		</div>
				
	      	</div>
	      	
	    </section>
	
	</main>

<?php endwhile; endif; ?> 

<script>
    $(document).ready(function(){
    	
    	$('input.tel').on('input', function() {
	        $(this).val($(this).val().replace(/\D/g, '')); 
	    });
        
    });
</script> 

<?php get_footer(); ?>