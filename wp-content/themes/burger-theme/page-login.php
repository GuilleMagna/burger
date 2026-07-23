<?php 

/*
Template name: Login
*/ 

if( is_user_logged_in() ){
    wp_redirect( home_url( '/' ) );
    exit;
}

get_header(); ?>

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>  	
    
    <section role="banner" id="inicio" class="d-flex align-items-center" style="background-size: cover; background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.45) 0%, rgba(0, 0, 0, 0.45) 100%), url(<?php echo $post->post_thumbnail ?>);">
    	
      	<div class="container">
        		
        	<div class="d-flex justify-content-center py-5">
        		
	          	<div class="col-12 col-md-5 col-lg-4">
	          	
		            <div class="card rounded-3 border-0 mb-3 box-shadow border">
		            	
		              	<div class="card-body py-5 px-4">
		              	
			                <h1 class="text-normal-dos text-dark bold mb-4 text-center">
			                	<?php the_title(); ?>
			                </h1>
			                
			                <?php the_content(); ?>
			                
							<?php 
							$args = array(
								'echo'				=> false,
							    'form_id' 			=> 'custom-login-form',
							    'label_username' 	=> 'Correo electrónico:',
							    'label_password' 	=> 'Contraseña:',
							    'label_remember' 	=> 'Recuérdame',
							    'label_log_in' 		=> 'Acceder',
							    'redirect' 			=> home_url( '/crm' ) 
							);		
							$wp_login_form = wp_login_form( $args );
							$wp_login_form = str_replace( 'class="input"', 'class="form-control text-dark border py-2" required', $wp_login_form );	
							$wp_login_form = str_replace( 'class="button button-primary"', 'class="btn btn-primary rounded-5"', $wp_login_form );
							$wp_login_form = str_replace( 'class="login-submit"', 'class="form-group text-center"', $wp_login_form );
							?>
							
							<?php if( strpos( $_SERVER['REQUEST_URI'], '?checkmail=confirm') !== false ): ?>
				
				        		<div id="login_update" class="row notice notice-update">
				        			Se ha enviado un correo electr&oacute;nico para cambiar su contrase&ntilde;a.
					        	</div>
							
							<?php elseif( strpos( $_SERVER['REQUEST_URI'], '?resetpass=complete') !== false ): ?>
							
				        		<div id="login_update" class="row notice notice-update">
				        			Se ha restablecido su contraseña.
				        		</div>
								
							<?php elseif( isset( $_GET['errorpass'] ) ): ?>
						
				        		<div id="login_error" class="row notice notice-error">
				        			<?php echo stripslashes( urldecode( sanitize_text_field( $_GET['errorpass'] ) ) ); ?>
				        		</div>
								
			        		<?php endif; ?>
			                
			                <div id="wp_login_form">
			                		
			                	<?php echo $wp_login_form; ?>

								<div class="text-small text-center">

									<a href="<?php echo home_url( '/recuperar' ) ?>" class="text-dark">Olvidaste tu contraseña?</a>
									<!--a href="<?php echo home_url( '/registro' ) ?>" class="text-dark">Registrarse</a-->

								</div>
			                	
					            
					      	</div>
					      	
		              	</div>
		              
		            </div>
	            
	          	</div>
          	
        	</div>
        
      	</div>
      
    </section>

<?php endwhile; endif; ?>  

<?php get_footer(); ?>