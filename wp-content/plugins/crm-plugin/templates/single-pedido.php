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
	
	wp_redirect( '/crm/?delete='.$delete_id );
	exit;
	
endif;

include CRM_PLUGIN_PATH . 'templates/header-crm.php';
	
if( have_posts() ): while( have_posts() ): the_post();

	$comentarios = $estados_pedido = [];
	
	$post_id 			= $post->ID;
	$post_title			= $post->post_title;
	//$post_content		= get_the_content();
    
	$pedido				= get_field( 'pedido', $post_id );

	$usuario_pedido     = $post->post_author;
	
	$estado_pedido_arr = get_the_terms( $post_id, 'estado' );	

    if( !empty($estado_pedido_arr) ){

        foreach( $estado_pedido_arr as $term )
            $estados_pedido[] = $term->term_id;
    }

    if( !empty($estado_pedido_arr) && $estado_pedido_arr[0]->slug == 'pendientes' ){

        if( empty( get_field( 'comprobante_pedido', $post_id) ) ){
            $comprobante_pedido = generar_pedido_pdf( $post_id ); 
            update_field( 'comprobante_pedido', $comprobante_pedido, $post_id );
        }

    }

   	$estados = get_terms( array( 'taxonomy' => 'estado', 'hide_empty' => false, 'orderby' => 'id', 'order' => 'ASC' ) );

	usort($estados, function($a, $b) {
	    return get_field('orden', $a) - get_field('orden', $b);
	});

	$cliente_id = get_field( 'cliente', $post_id ) ?? false;

	if( $cliente_id ):
	
		$cliente            = get_post( $cliente_id ); 
		$nombre 	        = get_field( 'nombre',      $cliente_id );	
        $apellido 	        = get_field( 'apellido',    $cliente_id );
        $nombre_apellido    = $nombre .' '. $apellido;
        $payment 		    = get_field( 'forma_de_pago_preferida', $cliente_id );
		
	endif; 

	$comentarios			= get_field( 'comentarios', 				$post_id );
	$procedencia			= get_field( 'procedencia_del_pedido', 	    $post_id );
	$pedido	                = get_field( 'pedido', 		                $post_id );
	$factura        		= get_field( 'factura', 			        $post_id );
	$fecha_de_pedido		= get_field( 'fecha_de_pedido', 			$post_id );
	$precio_de_venta		= get_field( 'precio_de_venta', 			$post_id );
    $comprobante_pedido	    = get_field( 'comprobante_pedido', 		    $post_id );
    $documento_factura	    = get_field( 'documento_factura', 		    $post_id );
    
	update_field( 'last_view', current_time( 'Ydm' ), $post_id );
	
	//$imagen_destacada 	= CRM_THEME_URL.'/assets/default-image.webp';
	//if( has_post_thumbnail() ) $imagen_destacada = get_the_post_thumbnail_url( $post_id, 'large' );
	?>

	<main class="position-relative">

		<form id="Form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" enctype="multipart/form-data">

			<section>
				
				<div class="container-fluid">
							
					<input type="hidden" name="action" value="update_data_pedido">
	            	<input type="hidden" name="pedido_nonce" value="<?php echo wp_create_nonce( 'data_pedido_nonce' ); ?>">
	            	<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
	            	<input type="hidden" name="cliente_id" value="<?php echo $cliente_id; ?>">
	            	<input type="hidden" name="redirect" value="<?php echo get_permalink( $post_id ); ?>">
	      		
		        	<div class="row">
		        		
		          		<?php include CRM_PLUGIN_PATH . 'templates/sidebar-crm.php' ?>
	          			
			          	<div class="col-12 col-md-10">

							<div class="py-5 px-md-4">
									
                                <div class="row py-3">
                                    
                                    <div class="col-6 d-flex justify-content-center justify-content-md-start">
                                    
                                        <a href="<?php echo home_url( '/crm' ) ?>" class="btn btn-outline-secondary d-none d-md-block">
                                            <i class="fa-solid fa-angle-left"></i> Volver
                                        </a>
                                
                                    </div>
                                
                                    <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end">
                                        
                                        <div class="py-2 me-3">
                                            #<?php the_title(); ?>
                                        </div>
                                                        
                                        <button id="btnUpdate" type="submit" class="btn btn-primary d-none d-md-block">
                                            <span id="btnUpdateText"><i class="fa-solid fa-pencil"></i> Actualizar</span>
                                            <span id="btnUpdateCarga" style="display: none;"><i class="fas fa-spinner fa-spin"></i></span>
                                        </button>
                                        
                                        <a href="javascript:;" onclick="$('#staticBackdrop').modal('show')" class="btn btn-danger ms-2 d-none d-md-block">
                                            <i class="fa-solid fa-trash-can"></i> Borrar
                                        </a>
                                        
                                    </div>	
                                    
                                </div>
                            
                                <div class="row">
                                    
                                    <div class="col-12 col-md-9">
                                        
                                        <div class="row">
                                            
                                            <div class="col-12 pb-3">
                                                
                                                <div>

                                                    <label class="text-secondary">Estado del Pedido </label>
                                                    
                                                    <?php foreach( $estados as $key => $term ): ?>
                                                    
                                                        <?php 
                                                        $active = ( in_array( $term->term_id, $estados_pedido ) ) ? ' active' : '';
                    
                                                        $bg_color = get_field( 'color_de_fondo', $term );
                                                        $border_color = get_field( 'color_de_borde', $term );
                                                        ?>
                                                        
                                                        <a id="<?php echo $term->term_id; ?>" data-id="<?php echo $term->term_id; ?>" class="btn border-1 btn-estado btn-sm me-2 mb-2<?php echo $active; ?>" data-aos="fade-in" data-aos-delay="<?php echo $key*100; ?>" style="background-color:<?php echo $bg_color; ?>;">
                                                            <?php echo $term->name; ?>
                                                        </a>
                                                    
                                                    <?php endforeach; ?>
                                                        
                                                </div>
                                                
                                            </div>
                                        
                                        </div>
                                        
                                        <div class="card mb-4">
                                            
                                            <div class="card-header">
                                                Detalle del Pedido
                                            </div>
                                            
                                            <div class="card-body">
                                                
                                                <div id="productos-container">

                                                    <?php if( $pedido ): ?>

                                                        <div class="input-group mb-2 fw-bold">
                                                            <span class="form-control bg-light text-dark">Producto</span>
                                                            <span class="form-control bg-light text-dark text-center" style="min-width:70px; max-width:90px;">Cantidad</span>
                                                            <span class="form-control bg-light text-dark text-center" style="min-width:80px; max-width:100px;">Precio</span>
                                                            <span class="form-control bg-light text-dark text-center" style="max-width:36px;"></span>
                                                        </div>

                                                        <?php foreach( $pedido as $item ): ?>
                                                            
                                                            <?php 
                                                            $_pedido = get_post( $item['producto'] ); 
                                                            $precio = (float) $item['precio'] ?: '';
                                                            $precio = number_format( $precio, 2, ',', '.' );
                                                            ?>

                                                            <div class="input-group mb-2 producto-wrapper">
                                                                
                                                                <input type="hidden" class="producto-id" 
                                                                    name="productos[<?php echo $_pedido->ID; ?>][id]" 
                                                                    value="<?php echo esc_attr($_pedido->ID); ?>">

                                                                <input type="text" class="form-control text-primary producto-input flex-grow-1" 
                                                                    data-post-id="<?php echo $_pedido->ID; ?>" 
                                                                    value="<?php echo esc_html($_pedido->post_title); ?>" readonly>

                                                                <input type="number" name="productos[<?php echo $_pedido->ID; ?>][cantidad]" class="form-control text-primary text-center producto-cantidad" 
                                                                    value="<?php echo $item['cantidad'] ?? 1; ?>" 
                                                                    placeholder="Cantidad" min="1" style="min-width:70px; max-width:90px;">

                                                                <input type="text" name="productos[<?php echo $_pedido->ID; ?>][precio]" class="form-control text-primary text-end producto-precio" 
                                                                    value="<?php echo $precio; ?>" 
                                                                    placeholder="Precio" style="min-width:80px;max-width:100px;">

                                                                <button type="button" class="btn btn-outline-danger btn-eliminar-producto">&times;</button>

                                                            </div>

                                                        <?php endforeach; ?>

                                                    <?php endif; ?>

                                                </div>

                                                <div class="position-relative mt-4">

                                                    <div class="input-group">

                                                        <span class="input-group-text bg-white" id="basic-addon1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="21.085" height="21.865" viewBox="0 0 21.085 21.865">
                                                                <g id="Group_1" data-name="Group 1" transform="translate(-421.964 -40.684)">
                                                                    <circle id="Ellipse_2" data-name="Ellipse 2" cx="8.566" cy="8.566" r="8.566" transform="translate(422.714 41.434)" fill="none" stroke="#1c274c" stroke-width="1.5"></circle>
                                                                    <path id="Path_18" data-name="Path 18" d="M20.5,20.5l4.283,4.283" transform="translate(417.205 36.705)" fill="none" stroke="#1c274c" stroke-linecap="round" stroke-width="1.5"></path>
                                                                </g>
                                                            </svg>                          
                                                        </span>

                                                        <input type="text" id="buscarProducto" class="form-control" aria-label="Text input with checkbox" placeholder="Buscar Producto">

                                                    </div>

                                                    <ul id="sugerencias-productos" class="list-group position-absolute z-2 w-100"></ul>

                                                </div>
                                                               
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="card mb-4">
                                            
                                            <div class="card-header">
                                                Detalles
                                            </div>
                                            
                                            <div class="card-body">
                                                    
                                                <div class="row">
                                                    
                                                    <div class="col-12 col-md-4 mb-3">
     
                                                        <div class="input-group position-relative">

                                                            <span class="input-group-text bg-white">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.085" height="21.865" viewBox="0 0 21.085 21.865">
                                                                    <g transform="translate(-421.964 -40.684)">
                                                                        <circle cx="8.566" cy="8.566" r="8.566" transform="translate(422.714 41.434)" fill="none" stroke="#1c274c" stroke-width="1.5"></circle>
                                                                        <path d="M20.5,20.5l4.283,4.283" transform="translate(417.205 36.705)" fill="none" stroke="#1c274c" stroke-linecap="round" stroke-width="1.5"></path>
                                                                    </g>
                                                                </svg>
                                                            </span>

                                                            <input type="text" id="buscarCliente" class="form-control<?php if( $nombre_apellido ) echo ' text-primary' ?>" value="<?php echo $nombre_apellido; ?>" placeholder="Buscar Cliente">
                                                            <span class="floating-placeholder" id="floatingPlaceholder">Cliente</span>
                                                            <input type="hidden" id="cliente" name="cliente" value="<?php echo $cliente_id; ?>">

                                                        </div>

                                                        <ul id="sugerencias-clientes" class="list-group position-absolute w-100 z-2"></ul>
                                                    
                                                    </div>
                                                    
                                                    <div class="col-12 col-md-4 mb-3">
                                                        
                                                        <div class="form-group position-relative">
                                                            <input type="text" name="payment" class="form-control text-primary mb-0" aria-label="Forma de pago preferida" aria-describedby="basic-addon1" value="<?php echo $payment; ?>">
                                                            <span class="floating-placeholder" id="floatingPlaceholder">Forma de pago</span>
                                                        </div>
                                                    
                                                    </div>

                                                    <div class="col-12 col-md-4 mb-3">
                                                        
                                                        <div class="form-group position-relative">
                                                            <input type="text" name="procedencia" class="form-control text-primary mb-0" aria-label="Procedencia del Pedido" aria-describedby="basic-addon1" value="<?php echo $procedencia; ?>">
                                                            <span class="floating-placeholder" id="floatingPlaceholder">Procedencia del Pedido</span>
                                                        </div>
                                                    
                                                    </div>

                                                    <div class="col-12 col-md-6 mb-3">
                                                        
                                                        <div class="form-group position-relative">
                                                            <input type="text" name="fecha_de_pedido" disabled class="form-control text-primary mb-0" aria-label="Fecha del Pedido" aria-describedby="basic-addon1" value="<?php echo $fecha_de_pedido; ?>">
                                                            <span class="floating-placeholder" id="floatingPlaceholder">Fecha del Pedido</span>
                                                        </div>
                                                    
                                                    </div>
                                                    
                                                    <div class="col-12 col-md-6 mb-3">
                                                        
                                                        <div class="form-group position-relative">
                                                            <input type="text" name="precio_de_venta" class="form-control text-primary mb-0" aria-label="Precio de Venta" aria-describedby="basic-addon1" value="<?php echo $precio_de_venta; ?>" disabled>
                                                            <span class="floating-placeholder" id="floatingPlaceholder">Precio de Venta</span>
                                                        </div>
                                                    
                                                    </div>

                                                    <div class="col-12 col-md-6 mb-3">
                                                        
                                                        <?php if( !empty( $comprobante_pedido ) ): ?>
                                                        
                                                            <label class="text-secondary" id="basic-addon1"><?php echo ucfirst( basename($comprobante_pedido) ); ?>&nbsp;</label>
                                                            <a href="<?php echo $comprobante_pedido; ?>" download="<?php echo $comprobante_pedido; ?>" class="btn btn-outline-primary pb-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-download" viewBox="0 0 16 16">
                                                                    <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383"/>
                                                                    <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708z"/>
                                                                </svg> Descargar
                                                            </a> 
                                                        
                                                        <?php endif; ?>	
                                                    
                                                    </div>
                                                    
                                                    <?php if( !empty( $documento_pedido ) ): ?>
                                                    
                                                        <div id="new_documento_pedido" class="col-6 mb-3 m-auto border border-primary p-4 d-none">
                                                            <label class="ps-2" style="color:#aaa;" id="basic-addon1">Elije el nuevo archivo</label>
                                                            <input type="file" name="documento_pedido" class="form-control text-primary mb-0" id="documento_pedido" aria-describedby="documento_pedido" aria-label="Examinar">
                                                        </div>
                                                    
                                                    <?php endif; ?>

                                                    <div class="col-12 col-md-6 mb-3">
                                                        
                                                        <?php if( !empty( $documento_factura ) ): ?>
                                                        
                                                            <label class="text-secondary" id="basic-addon1"><?php echo "Documento Factura: ".basename($documento_factura); ?></i></label>
                                                            <a href="<?php echo $documento_factura; ?>" download="<?php echo $documento_factura; ?>" class="btn btn-outline-primary pb-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-download" viewBox="0 0 16 16">
                                                                    <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383"/>
                                                                    <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708z"/>
                                                                </svg> Descargar
                                                            </a> 
                                                            
                                                            <a href="javascript:;" onclick="$('#new_documento_factura').toggleClass( 'd-none' );" class="btn btn-outline-primary ms-3">	
                                                                <i class="fa-solid fa-pencil"></i> Cambiar
                                                            </a> 

                                                            <a href="javascript:;" onclick="borrarDocumentoPedido( 'documento_factura', <?php echo $post_id; ?> )"class="btn btn-outline-danger ms-3">	
                                                                <i class="fa-solid fa-trash"></i> Borrar
                                                            </a>
                                                        
                                                        <?php else: ?>
                                                            
                                                            <div class="form-group position-relative">
                                                                <input type="file" name="documento_factura" class="form-control mb-0" id="documento_factura" aria-describedby="documento_factura" aria-label="Examinar">
                                                                <span class="floating-placeholder" id="floatingPlaceholder">Documento Factura</span>
                                                            </div>	
                                                            
                                                        <?php endif; ?>	
                                                        
                                                    </div>
                                                    
                                                    <?php if( !empty( $documento_factura ) ): ?>
                                                    
                                                        <div id="new_documento_factura" class="col-6 mb-3 m-auto border border-primary p-4 d-none">
                                                            <label class="ps-2" style="color:#aaa;" id="basic-addon1">Elije el nuevo archivo</label>
                                                            <input type="file" name="documento_factura" class="form-control text-primary mb-0" id="documento_factura" aria-describedby="documento_factura" aria-label="Examinar">
                                                        </div>
                                                    
                                                    <?php endif; ?>

                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                        <!--div class="row">
                                            
                                            <div class="col-12 col-md-6">
                                                
                                                <div class="card mb-4">
                                                    
                                                    <div class="card-header">
                                                        Contacto
                                                    </div>
                                                    
                                                    <div class="card-body">
                                                        
                                                        <div class="mb-3">
                                                            
                                                            <div class="form-group position-relative">
                                                                <input type="text" name="nombre_contacto" class="form-control text-primary mb-0" aria-label="Nombre y Apellido" aria-describedby="basic-addon1" value="<?php echo $nombre_contacto; ?>">
                                                                <span class="floating-placeholder" id="floatingPlaceholder">Nombre y Apellido</span>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="row mb-3">
                                                            
                                                            <div class="col-12 col-md-8">
                                                                
                                                                <div class="form-group position-relative">
                                                                    <input type="text" name="telefono_contacto" class="form-control text-primary mb-0" aria-label="Teléfono" aria-describedby="basic-addon2" value="<?php echo $telefono_contacto; ?>">
                                                                    <span class="floating-placeholder" id="floatingPlaceholder"><?php if( $whatsapp_contacto ) echo 'Whatsapp'; else echo 'Teléfono'; ?></span>
                                                                </div>
                                                    
                                                            </div>
                                                        
                                                            <div class="col-12 col-md-4 d-flex align-items-end">
                                                                
                                                                <div class="form-check form-switch">
                                                                    <input name="whatsapp_contacto" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"<?php if( $whatsapp_contacto ) echo ' checked'; ?>>
                                                                    <label class="text-secondary" for="flexSwitchCheckChecked">Whatsapp</label>
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="mb-3">
                                                            
                                                            <div class="form-group position-relative">
                                                                <input type="text" name="email_contacto" class="form-control text-primary mb-0" aria-label="Email" aria-describedby="basic-addon3" value="<?php echo $email_contacto; ?>">
                                                                <span class="floating-placeholder" id="floatingPlaceholder">Email</span>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="mb-3">
                                                            
                                                            <div class="form-group position-relative">
                                                                <input type="text" name="rol_contacto" class="form-control text-primary mb-0" aria-label="Rol" aria-describedby="basic-addon4" value="<?php echo $rol_contacto; ?>">
                                                                <span class="floating-placeholder" id="floatingPlaceholder">Rol</span>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                
                                                </div>
                                            
                                            </div>
                                        
                                            <div class="col-12 col-md-6">
                                                
                                                <div class="card mb-4">
                                                
                                                    <div class="card-header">
                                                        Contacto Autoridad
                                                    </div>
                                                    
                                                    <div class="card-body">
                                                        
                                                        <div class="mb-3">
                                                            
                                                            <div class="form-group position-relative">
                                                                <input type="text" name="nombre_autoridad" class="form-control text-primary mb-0" aria-label="Nombre y Apellido" aria-describedby="basic-addon01" value="<?php echo $nombre_autoridad; ?>">
                                                                <span class="floating-placeholder" id="floatingPlaceholder">Nombre y Apellido</span>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="row mb-3">
                                                            
                                                            <div class="col-12 col-md-8">
                                                                
                                                                <div class="form-group position-relative">
                                                                    <input type="text" name="telefono_autoridad" class="form-control text-primary mb-0" aria-label="Teléfono" aria-describedby="basic-addon02" value="<?php echo $telefono_autoridad; ?>">
                                                                    <span class="floating-placeholder" id="floatingPlaceholder"><?php if( $whatsapp_autoridad ) echo 'Whatsapp'; else echo 'Teléfono'; ?></span>
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                            <div class="col-12 col-md-4 d-flex align-items-end">
                                                                
                                                                <div class="form-check form-switch">
                                                                    <input name="whatsap_autoridad" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"<?php if( $whatsapp_autoridad ) echo ' checked'; ?>>
                                                                    <label class="text-secondary" for="flexSwitchCheckChecked">Whatsapp</label>
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="mb-3">
                                                            
                                                            <div class="form-group position-relative">
                                                                <input type="text" name="email_autoridad" class="form-control text-primary mb-0" aria-label="Email" aria-describedby="basic-addon03" value="<?php echo $email_autoridad; ?>">
                                                                <span class="floating-placeholder" id="floatingPlaceholder">Email</span>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="mb-3">
                                                            
                                                            <div class="form-group position-relative">
                                                                <input type="text" name="rol_autoridad" class="form-control text-primary mb-0" aria-label="Rol" aria-describedby="basic-addon04" value="<?php echo $rol_autoridad; ?>">
                                                                <span class="floating-placeholder" id="floatingPlaceholder">Rol</span>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                
                                                </div>
                                                
                                            </div>
                                        
                                        </div-->
                                        
                                    </div>
                                    
                                    <div class="col-12 col-md-3 mb-3 mb-md-0">
                                        
                                        <div class="card mb-4" style="top:50px; position: sticky;">
                                            
                                            <div class="card-header">
                                                Comentarios
                                            </div>
                                            
                                            <div class="card-body">
                                                
                                                <div id="ventana_comentarios" class="comentarios border border p-2" style="height: 65vh;">
                                                    
                                                    <?php if( $comentarios ) foreach( $comentarios as $key => $comm ): ?>
                                                        
                                                        <div id="comment-<?php echo $key; ?>" class="card mb-2 comentario" style="background-color: #d2f4ea !important;">
                                                            
                                                            <div class="card-header bg-green-200 border-0 pt-1 pb-0 px-2 position-relative" style="background-color: #d2f4ea !important;">
                                                                
                                                                <span style="font-size: 0.8rem"><strong style="color:var(--bs-primary)"><?php echo $comm['user']; ?></strong> <?php echo $comm['fecha']; ?></span>
                                                                
                                                                <div class="position-absolute comentarios-editar-borrar" style="top: 5px; right: 5px; font-size: 1rem;">
                                                                    
                                                                    <div class="d-flex justify-content-end">
                                                                        
                                                                        <div id="comentarios-guardar-<?php echo $key; ?>" class="comentarios-guardar pe-3 d-none">
                                                                            <i data-id="<?php echo $key; ?>" class="fa-solid fa-save comment-save_pedido"></i>
                                                                        </div>
                                                                        
                                                                        <div id="comentarios-editar-<?php echo $key; ?>" class="comentarios-editar pe-3">
                                                                            <i data-id="<?php echo $key; ?>" class="fa-solid fa-pencil comment-edit_pedido"></i>
                                                                        </div>
                                                                        
                                                                        <div class="comentarios-borrar pe-2">
                                                                            <i data-id="<?php echo $key; ?>" class="fa-solid fa-trash-can comment-delete_pedido"></i>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                            <div class="card-body pb-1 pt-0 px-2">
                                                                <textarea class="border-0 input-comment mb-1" id="comment-comm-<?php echo $key; ?>" rows="1" oninput="autoResize(this)" disabled><?php echo $comm['comentario']; ?></textarea>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                    <?php endforeach; ?>
                                                        
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="card-footer" style="background-color: #ffffff !important;">
                                                
                                                <div class="input-group my-2">
                                                    <textarea id="comentario" type="text" class="form-control border border-primary p-2 mb-0" style="border-radius: 7px 0px 0px 7px;" placeholder="Escribe aqui tu comentario..." rows="3"></textarea>
                                                    <button id="add_comment_pedido" class="btn btn-outline-primary" type="button">
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
					Est&aacute;s seguro de eliminar este pedido?
				</div>
				
				<div class="modal-footer">
					<button id="sendDelete" data-id="<?php echo $post_id; ?>" type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
				</div>
				
			</div>
			
		</div>
		
	</div>

<?php endwhile; endif; ?> 

<?php include CRM_PLUGIN_PATH . 'templates/footer-crm.php'; ?>