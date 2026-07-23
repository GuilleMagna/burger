<div class="col-12 col-md-2 bg-white shadow d-none d-md-block">

    <div class="py-5">

      	<div class="p-4 border-0">

            <a href="<?php echo home_url() ?>">
            	<img src="<?php echo plugin_dir_url(__FILE__); ?>themes/images/logo.png" alt="Logo de CRM" class="logo-head img-fluid">
            </a>

      	</div>

      	<?php $etapas = get_terms( array( 'taxonomy' => 'estado', 'meta_key' => 'orden', 'orderby' => 'meta_value_num', 'order' => 'ASC' ) ) ?>

      	<ul class="list-group list-group-flush bg-transparent">

        	<li class="list-group-item dash border-0">

	          	<a href="<?php echo home_url( '/crm' ) ?>" class="text-decoration-none text-dark d-flex justify-content-start py-2">

	            	<div class="text-start" style="width: 30px;">
	              		<i class="fa-solid fa-satellite-dish"></i>
	            	</div>

	            	<b>Escritorio</b>

	          	</a>

	        </li>

        	<?php foreach( $etapas as $term ): ?>

        		<?php 
        		$icono = get_field( 'icono', $term );
        		$url = get_field( 'url', $term );
        		?>

		        <li class="list-group-item border-0">

		          	<a href="<?php echo $url; ?>" class="text-decoration-none text-dark d-flex justify-content-start py-2">

			            <div class="text-start" style="width: 30px;">
			              	<?php echo $icono; ?>
			            </div>
			            <?php echo $term->name; ?>

		          	</a>

		        </li>

	        <?php endforeach; ?>

	        <li class="list-group-item border-0">

	          	<a href="<?php echo home_url( '/crm/clientes' ) ?>" class="text-decoration-none text-dark d-flex justify-content-start py-2">

		            <div class="text-start" style="width: 30px;">
		              	<i class="fa-solid fa-briefcase"></i>
		            </div>
		            Clientes

	          	</a>

        	</li>

            <li class="list-group-item border-0">

	          	<a href="<?php echo home_url( '/crm/consultas' ) ?>" class="text-decoration-none text-dark d-flex justify-content-start py-2">

		            <div class="text-start" style="width: 30px;">
		              	<i class="fa-solid fa-briefcase"></i>
		            </div>
		            Consultas

	          	</a>

        	</li>

        	<li class="list-group-item user pt-2 border-0">

	          	<a href="<?php echo home_url( '/crm/perfil' ) ?>" class="text-decoration-none text-dark d-flex justify-content-start py-2">

		            <div class="text-start" style="width: 30px;">
		              	<i class="fa-solid fa-user"></i>
		            </div>
		            Perfil

	          	</a>

        	</li>

        	<li class="list-group-item exit border-0">

	          	<a href="<?php echo home_url( '/logout' ) ?>" class="text-decoration-none text-dark d-flex justify-content-start py-2">

	            	<div class="text-start" style="width: 30px;">
	              		<i class="fa-solid fa-sign-out"></i>
	            	</div>
	            	Salir

	          	</a>

        	</li>

      	</ul>

    </div>

</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">

  	<div class="offcanvas-header">

 		<a href="<?php echo home_url( '/' ) ?>">
        	<img src="" alt="Logo del CRM de Nakama" class="logo-head img-fluid">
    	</a>

        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>

  	</div>

  	<div class="offcanvas-body">

  		<?php $etapas = get_terms( array( 'taxonomy' => 'estado', 'meta_key' => 'orden', 'orderby' => 'meta_value_num', 'order' => 'ASC' ) ) ?>

      	<ul class="list-group list-group-flush bg-transparent">

        	<li class="list-group-item dash border-0 py-3 rounded-3">

	          	<a href="<?php echo home_url( '/crm' ) ?>" class="text-decoration-none text-dark d-flex justify-content-start">

	            	<div class="text-start" style="width: 30px;">
	              		<i class="fa-solid fa-satellite-dish"></i>
	            	</div>
	            	<b>Dashboard</b>

	          	</a>

	        </li>

        	<?php foreach( $etapas as $term ): ?>

        		<?php 
        		$icono = get_field( 'icono', $term );
        		$url = get_field( 'url', $term );
        		?>

		        <li class="list-group-item border-0 py-3 rounded-3">

		          	<a href="<?php echo $url; ?>" class="text-decoration-none text-dark d-flex justify-content-start">

			            <div class="text-start" style="width: 30px;">
			              	<?php echo $icono; ?>
			            </div>
			            <?php echo $term->name; ?>

		          	</a>

		        </li>

	        <?php endforeach; ?>

	        <li class="list-group-item border-0 py-3 rounded-3">

	          	<a href="<?php echo home_url( '/crm/clientes' ) ?>" class="text-decoration-none text-dark d-flex justify-content-start">

		            <div class="text-start" style="width: 30px;">
		              	<i class="fa-solid fa-briefcase"></i>
		            </div>
		            Clientes

	          	</a>

        	</li>

        	<li class="list-group-item user border-0 py-3 rounded-3">

	          	<a href="<?php echo home_url( '/crm/perfil' ) ?>" class="text-decoration-none text-dark d-flex justify-content-start">

		            <div class="text-start" style="width: 30px;">
		              	<i class="fa-solid fa-user"></i>
		            </div>
		            Perfil

	          	</a>

        	</li>

        	<li class="list-group-item exit border-0 py-3 rounded-3">

	          	<a href="<?php echo home_url( '/logout' ) ?>" class="text-decoration-none text-dark d-flex justify-content-start">

	            	<div class="text-start" style="width: 30px;">
	              		<i class="fa-solid fa-sign-out"></i>
	            	</div>
	            	Salir

	          	</a>

        	</li>

      	</ul>

  	</div>

</div>