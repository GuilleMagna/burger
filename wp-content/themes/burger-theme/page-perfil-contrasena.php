<?php 

/*
Template name: Perfil ( Contraseña )
*/ 
?>
<?php get_header(); ?>

<?php if( have_posts() ): while( have_posts() ): the_post(); ?> 
  	
  	<main role="main">

    	<section role="banner" id="inicio" class="bg-light section">
    		
	      	<div class="container">
				
			  	<div class="row justify-content-center mb-3">
				  
				  	<div class="col-12 col-md-5 py-5">
						
						<div class="bg-white br-12 p-3 p-md-5">
							
							<div class="d-md-flex justify-content-md-between align-items-md-center d-none d-md-block">
								
								<h1 class="text-normal-dos text-dark bold text-center">
									<?php the_title(); ?>
								</h1>
								
							</div>
							
	            			<div class="text-dark mb-5 d-none d-md-block">
	            				<?php the_content(); ?>
	            			</div>
							
							<div class="row" id="wp_login_form">
				                	  
				            	<div class="col-12">
				            		
				            		<?php
				            		$key = isset($_GET['key']) ? $_GET['key'] : '';
	
									$result = wp_validate_redirect( $key, site_url('/wp-login.php?action=resetpass') );
									
									if (is_wp_error($result)) {
									
									    $error_message = $result->get_error_message();
									    echo 'Error: ' . $error_message;
									    
									} else {
									    
									    echo crm_display_reset_password_form();
									    
									}
				            		?>
				            		
								</div>
								
							</div>
							
					  </div>
					  
				  	</div>
				  
		  		</div>
		  		
				<div class="container">
					
					<div class="mb-4">
						
						<a href="<?php echo wp_logout_url( home_url( '/logout' ) ); ?>" class="text-primary-dos bold">
							Cerrar sesión
						</a>
						
					</div>
					
				</div>
				
	      	</div>
	      	
	    </section>

  	</main>
  
<?php endwhile; endif; ?>  

<script>
    	
    document.addEventListener('DOMContentLoaded', function() {
        const passwordInputs = document.querySelectorAll('.password-container input[type="password"]');
        const toggleButtons = document.querySelectorAll('.wp-hide-pw');

        toggleButtons.forEach((button, index) => {
            button.addEventListener('click', function() {
                const passwordInput = passwordInputs[index];
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);

                // Cambiar el icono
                const icon = button.querySelector('.dashicons');
                icon.classList.toggle('dashicons-visibility');
                icon.classList.toggle('dashicons-hidden');
            });
        });

        const generatePasswordButton = document.getElementById('generate-password');
        generatePasswordButton.addEventListener('click', function() {
            const newPassword = generateSecurePassword();
            passwordInputs.forEach(input => {
                input.value = newPassword;
            });
            updateStrengthMeter();
        });

        function generateSecurePassword() {
            const length = 12;
            const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+~`|}{[]:;?><,./-=";
            let password = "";
            for (let i = 0, n = charset.length; i < length; ++i) {
                password += charset.charAt(Math.floor(Math.random() * n));
            }
            return password;
        }

        const passwordInput = document.getElementById('user_pass');
        const passwordStrengthMeter = document.getElementById('password-strength-meter');
        const passwordStrengthMessage = document.getElementById('password-strength-message');

        passwordInput.addEventListener('input', updateStrengthMeter);

        function updateStrengthMeter() {
            const strength = wp.passwordStrength.meter(passwordInput.value, [], passwordInput.value);
            let strengthMessage = '';

            switch (strength) {
                case 0:
                    strengthMessage = 'Muy debil';
                    break;
                case 1:
                    strengthMessage = 'Debil';
                    break;
                case 2:
                    strengthMessage = 'Aceptable';
                    break;
                case 3:
                    strengthMessage = 'Fuerte';
                    break;
                case 4:
                    strengthMessage = 'Muy fuerte';
                    break;
            }

            passwordStrengthMeter.value = strength;
            passwordStrengthMessage.textContent = strengthMessage;
        }
        
        function updateStrengthMeter() {
		    const strength = wp.passwordStrength.meter(passwordInput.value, [], passwordInput.value);
		    let strengthClass = '';
		    let strengthMessage = '';
		
		    switch (strength) {
		        case 0:
		            strengthClass = 'strength-0';
		            strengthMessage = 'Muy d\u00e9bil';
		            break;
		        case 1:
		            strengthClass = 'strength-1';
		            strengthMessage = 'D\u00e9bil';
		            break;
		        case 2:
		            strengthClass = 'strength-2';
		            strengthMessage = 'Aceptable';
		            break;
		        case 3:
		            strengthClass = 'strength-3';
		            strengthMessage = 'Fuerte';
		            break;
		        case 4:
		            strengthClass = 'strength-4';
		            strengthMessage = 'Muy fuerte';
		            break;
		    }
		
		    // Actualizar la clase del medidor
		    passwordStrengthMeter.innerHTML = `<div class="${strengthClass}"></div>`;
		    passwordStrengthMessage.textContent = strengthMessage;
		}

    });
</script>

<?php get_footer(); ?>