<?php 

wp_redirect( home_url( '/crm/' ) );
exit;

/*
Template name: Registro
*/ 
?>
<?php get_header(); ?>

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
  	
  	<main role="main">
    
	    <section role="banner" id="inicio" class="bg-light section">
	    	
	      	<div class="container">
	      	
		        <div class="d-flex justify-content-center">
		          	
		          	<div class="col-12 col-md-8 py-5">
			            
			            <div class="br-24 bg-white mb-3 box-shadow">
			              	
			              	<div class="p-4 p-md-5">
			              		
				                <h1 class="text-normal-dos text-dark bold mb-4 text-center">
				                	<?php the_title(); ?>
				                </h1>
				                
				                <?php the_content(); ?>
				                
				                <?php if( isset( $_GET['error_msg'] ) ): ?>
				
					        		<div id="login_error" class="row notice notice-error">
					        			
					        			<?php echo stripslashes( urldecode( $_GET['error_msg'] ) ); ?>
					        			
					        		</div>
									
				        		<?php endif; ?>
				                
				                <form id="validarForm" action="<?php echo esc_url( network_site_url( 'wp-login.php?action=register', 'login_post' ) ); ?>" method="post" class="position-relative" onsubmit="return enviarFormulario()">
					                
					                <div class="row">
					                	
						                <div class="col-12 col-md-6 mb-3">
							            	
							              	<label for="basic-url" class="form-label text-dark bold">
							              		Nombre
							              	</label>
							              	
							              	<div class="input-group">
							                	<input type="text" name="first_name" class="form-control text-dark border-dark py-2" autocomplete="name" value="" required>
							              	</div>
							              	
							            </div>
							            
							            <div class="col-12 col-md-6 mb-3">
							            	
							              	<label for="basic-url" class="form-label text-dark bold">
							              		Apellido
							              	</label>
							              	
							              	<div class="input-group">
							                	<input type="text" name="last_name" class="form-control text-dark border-dark py-2" value="" required>
							              	</div>
							              	
							            </div>
							            
							            <div class="col-12 mb-3">
							            	
							              	<label for="basic-url" class="form-label text-dark bold">
							              		Correo electr&oacute;nico
							              	</label>
							              	
							              	<div class="input-group">
							                	<input type="email" name="user_email" class="form-control text-dark border-dark py-2" value="" required>
							              	</div>
							              	
							            </div>
							            
							            <div class="col-12 col-md-6 mb-3">
							            	
							              	<label for="basic-url" class="form-label text-dark bold">
							              		Alias
							              	</label>
							              	
							              	<div class="input-group">
							                	<input type="text" name="nicename" class="form-control text-dark border-dark py-2" value="" placeholder="Nombre a mostrar" required>
							              	</div>
							              	
							            </div>
							            
							            <div class="col-12 col-md-6 mb-3">
							            	
							              	<label for="basic-url" class="form-label text-dark bold">
							              		Teléfono celular
							              	</label>
							              	
							              	<div class="input-group">
							                	<input type="text" name="user_phone" class="tel form-control text-dark border-dark py-2"  value="" required>
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
				                      		<a href="<?php echo home_url( '/login' ) ?>" class="text-dark">Ingresar</a>
							            </div>
								  	
							  		</div>
							  	
							  	</form>
						  	    	
			              	</div>
			              	
			            </div>
			            
		          	</div>
		          	
		        </div>
		        
	      	</div>
	      	
	    </section>

  	</main>
  	  	
<?php endwhile; endif; ?>  

<?php get_footer(); ?> 