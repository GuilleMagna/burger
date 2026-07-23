<?php 
/*
Template name: Login ( Recuperar )
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
				                
				                <div class="text-dark mb-4">
				                	<?php the_content(); ?>
				            	</div>
				            
				                <div id="wp_login_form" class="widecolumn">
				                	
									<?php do_action( 'lostpassword_form' ); ?>
					      		
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