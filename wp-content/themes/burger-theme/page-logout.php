<?php 

if( is_user_logged_in() ) {
	wp_logout();
    wp_redirect( home_url( '/logout' ) );
    exit;
}

/*
Template name: Logout
*/ 
?>
<?php get_header(); ?>

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>  	

  <main role="main">
    
    <section role="banner" id="inicio" class="bg-light section">
      
      	<div class="container">
      	
        	<div class="d-flex justify-content-center py-5">
        	
	          	<div class="col-12 col-md-5 py-5">
	          	
		            <div class="br-12 bg-white mb-3 box-shadow border">
		            	
		              	<div class="p-4 p-md-5">
		              		
			                <h1 class="text-normal-dos text-dark bold mb-4 text-center">
			                	<?php the_title(); ?>
			                </h1>
			                
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
			                
			                <div class="row" id="wp_login_form">
			                	
			                	<div class="col-12">
			                		
			                		<?php echo $wp_login_form; ?>
			                		
			                	</div>
					            
					            <div class="col-12 d-flex flex-column text-center">
		                      		<a href="<?php echo home_url( '/recuperar' ) ?>" class="text-dark bold">Olvidaste tu contraseña?</a>
		                      		<!--a href="<?php echo home_url( '/registro' ) ?>" class="text-dark">Registrarse</a-->
					            </div>
					            
					      	</div>
				      	
		              	</div>
		              
		            </div>
	            
	          	</div>
          	
        	</div>
        
      	</div>
      
    </section>

  </main>

<?php endwhile; endif; ?>  

<?php get_footer(); ?>