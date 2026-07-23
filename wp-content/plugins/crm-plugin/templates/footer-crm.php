
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js" id="cookie-js"></script>

    <script src="<?php echo CRM_PLUGIN_URL ?>templates/vendors/font-awesome6/js/all.min.js"></script>
	<script src="<?php echo CRM_PLUGIN_URL ?>templates/vendors/pnotify/pnotify.js" id="pnotify-js"></script>
	<script src="<?php echo CRM_PLUGIN_URL ?>templates/vendors/aos/dist/aos.js" id="aos-js"></script>
	<script src="<?php echo CRM_PLUGIN_URL ?>templates/vendors/datepicker/dist/bootstrap-datepicker.min.js"></script>
	<script src="<?php echo CRM_PLUGIN_URL ?>templates/vendors/datepicker/dist/bootstrap-datepicker.es.min.js"></script>
    <script src="<?php echo CRM_PLUGIN_URL ?>templates/vendors/chart.js"></script>
	<script src="<?php echo CRM_PLUGIN_URL ?>templates/themes/js/scripts.js"></script>

	<script>

		AOS.init();			

    	$(document).ready(function(){

            let chart = null;

            $("#filterCliente").on("keyup", function() {

                var value = $(this).val().toLowerCase();

                $("#listadoClientes .linea-tabla").filter(function(){
                    $(this).toggle( $(this).data('nombre').toLowerCase().indexOf(value) > -1 )
                });

            });

            $("#filterDireccion").on("keyup", function() {

                var value = $(this).val().toLowerCase();

                $("#listadoClientes .linea-tabla").filter(function(){
                    $(this).toggle( $(this).data('direccion').toLowerCase().indexOf(value) > -1 )
                });

            });

  			$("#filterCiudad").on("keyup", function() {

                var value = $(this).val().toLowerCase();

                $("#listadoEmpresas .linea-tabla").filter(function(){
                    $(this).toggle( $(this).data('ciudad').toLowerCase().indexOf(value) > -1 )
                });

	               

            });

   		

    		<?php if( isset($_GET['delete']) ): ?>

    			notify( 'Se ha eliminado correctamente', 'error' );

    		<?php endif; ?>

    		<?php if( isset($_GET['msg']) and $_GET['msg'] == 'success' ): ?>

    			notify( 'Se han actualizado los datos', 'success' );

    		<?php endif; ?>

    		$('#datepicker, #datepicker-venta').datepicker({ 

  				format: 'dd/mm/yyyy',

  				language: 'es',

  				clearBtn: true 

  			}).on('changeDate', function(e){

	            $(this).datepicker('hide');

        	});

        	

    		/*

    		$('#usuario').change(function(){

                var usuarioId = $(this).val();

                if( usuarioId ){

                    

                    var dataToSend = {

			        	action: 'update_usuario_pedido',

			        	usuario_nonce: "<?php echo wp_create_nonce( 'usuario_pedido_nonce' ); ?>",

			        	usuario_id: usuarioId,

			            post_id: $('input[name="post_id"]').val()

			        };

				        

			        $.ajax({

			            url: "<?php echo esc_url( admin_url('admin-post.php') ); ?>", 

			            type: 'POST',

			            data: dataToSend,

			            success: function(response){ 

			            	document.location.href = '?msg=success'; 

			            },

			            error: function(jqXHR, textStatus, errorThrown){

			                $('#response').html('<p>Hubo un error al cambiar de usuario: ' + errorThrown + '</p>');

			            }

			   		}); 

			       

                }

            });

            */

            

            $( '#sendDelete' ).on('click', function(e){

    			e.preventDefault();

    			

    			var id = $(this).data( 'id' );

    			document.location.href = "?delete="+id;

 			});

 			

 			$( '#sendDeleteFoto' ).on('click', function(e){

    			e.preventDefault();

    			

    			var id = $(this).data( 'id' );

    			document.location.href = "?delete_foto="+id;

 			});

 			

 			$( '#btnAddPedido' ).on('click', function(e){

    			e.preventDefault();

    			$('#staticBackdropPedido').modal('show');

 			});

 			

 			var ElijeCliente = document.getElementById("ElijeCliente");

			var btnCrearPedido = document.getElementById("btnCrearPedido");

			

    		if( ElijeCliente !== null && btnCrearPedido !== null){

	 			btnCrearPedido.addEventListener('click', function() {

        		var selectedValue = ElijeCliente.value;

        		if (selectedValue && selectedValue !== "Selecciona el cliente") {

            	// Redirect on confirm

            		window.location.href = '?action=new&id=' + encodeURIComponent(selectedValue);

        		} else

            		alert("Por favor, selecciona un cliente antes de continuar.");

				});

 			}

 			

 			$( '#btnUpdateFoto' ).on('click', function(e){

    			e.preventDefault();

    			$('#staticBackdropFoto').modal('show');

 			});

    		$( '#btnUpdate' ).on('click', function(){

    			

    			document.getElementById( "btnUpdate" ).disabled = true;

		      	document.getElementById( "btnUpdateText" ).style.display = "none";

		      	document.getElementById( "btnUpdateCarga" ).style.display = "inline";

		      	document.getElementById( "Form" ).submit();

 			});

 			

 			$( '.btn-estado' ).on('click', function(){

    			

    			var id = $(this).data( 'id' );

    			

    			$( '.btn-estado' ).removeClass( 'active' );

    			

    			var dataToSend = {

		        	action: 'update_status_pedido',

		        	status_nonce: "<?php echo wp_create_nonce( 'status_pedido_nonce' ); ?>",

		            id: id,

		            post_id: $('input[name="post_id"]').val()

		        };

			        

		        $.ajax({

		            url: "<?php echo esc_url( admin_url('admin-post.php') ); ?>", 

		            type: 'POST',

		            data: dataToSend,

		            success: function(response){ 

		            	$( '#'+response.id ).addClass( 'active' );

		            },

		            error: function(jqXHR, textStatus, errorThrown){

		                $('#response').html('<p>Hubo un error al cambiar de estado: ' + errorThrown + '</p>');

		            }

		        }); 

 			});

 			

 			$( '#add_comment_pedido' ).on('click', function(){

				

		      	document.getElementById( "add_comment_pedido" ).disabled = true;

		        document.getElementById( "comentario" ).disabled = true;

		      	document.getElementById( "btnText" ).style.display = "none";

		      	document.getElementById( "carga" ).style.display = "inline";

				

				var comentario = $( '#comentario' ).val();

				

				if( comentario == '' ){

					

					notify( 'Debes ingresar algun comentario', 'error' );

					

					document.getElementById( "add_comment_pedido" ).disabled = false;

		        	document.getElementById( "comentario" ).disabled = false;

		        	document.getElementById( "carga" ).style.display = "none";

			        document.getElementById( "btnText" ).style.display = "inline";

		        

					return false;

					

				}else{

					

			        var dataToSend = {

			        	action: 'update_comment_pedido',

			        	comment_nonce: "<?php echo wp_create_nonce( 'comment_pedido_nonce' ); ?>",

			            comment: comentario,

			            post_id: $('input[name="post_id"]').val()

			        };

			        

			        $.ajax({

			            url: "<?php echo esc_url( admin_url('admin-post.php') ); ?>", 

			            type: 'POST',

			            data: dataToSend,

			            success: function(response){ 

			            	

			            	notify( 'Se ha agregado tu comentario', 'success' );

			            	

			            	$( '#comentario' ).val( '' );

			            	document.getElementById( "add_comment_pedido" ).disabled = false;

				        	document.getElementById( "comentario" ).disabled = false;

				        	document.getElementById( "carga" ).style.display = "none";

					        document.getElementById( "btnText" ).style.display = "inline";

			        

			            	$( '#ventana_comentarios' ).html( response.output_html );

			            	

			            	document.querySelectorAll('textarea').forEach(autoResize);

			            	

			            },

			            error: function(jqXHR, textStatus, errorThrown){

			                $('#response').html('<p>Hubo un error al agregar el comentario: ' + errorThrown + '</p>');

			            }

			        });

			   	}

		   

		    });

		    

		    $(document).on('click', '#ventana_comentarios .comment-delete_pedido', function(){

				

				var id = $(this).data( 'id' );

				$( '#comment-'+id ).hide();

				

		        var dataToSend = {

		        	action: 'update_comment_pedido',

		        	comment_nonce: "<?php echo wp_create_nonce( 'comment_pedido_nonce' ); ?>",

		            post_id: $('input[name="post_id"]').val(),

		            comment_id: id,

		            comment_action: 'delete'

		        };

		        

		        $.ajax({

		            url: "<?php echo esc_url( admin_url('admin-post.php') ); ?>", 

		            type: 'POST',

		            data: dataToSend,

		            success: function(response){ 

		            	$( '#comment-'+id ).hide(); 

		            },

		            error: function(jqXHR, textStatus, errorThrown){

		                $('#response').html('<p>Hubo un error al agregar el comentario: ' + errorThrown + '</p>');

		            }

		        });

			   	

		   

		    });

		    

		    $(document).on('click', '#ventana_comentarios .comment-edit_pedido', function(){

		    	

		    	var id = parseInt( $(this).data( 'id' ) );

		    	

		    	$( '#comentarios-editar-'+id ).toggleClass( 'd-none' );

		    	$( '#comentarios-guardar-'+id ).toggleClass( 'd-none' );

		    	

		    	$( '#comment-comm-'+id ).attr( 'disabled', false );

		    	$( '#comment-comm-'+id ).blur();

		    	

		    });

		    

		    $(document).on('click', '#ventana_comentarios .comment-save_pedido', function(){

				var id = $(this).data('id');

				$( '#comment-comm-'+id ).attr( 'disabled', true );

		        $( '#comentarios-editar-'+id ).toggleClass( 'd-none' );

		    	$( '#comentarios-guardar-'+id ).toggleClass( 'd-none' );	

		    			

		        var dataToSend = {

		        	action: 'update_comment_pedido',

		        	comment_nonce: "<?php echo wp_create_nonce( 'comment_pedido_nonce' ); ?>",

		            post_id: $('input[name="post_id"]').val(),

		            comment_id: id,

		            comment_new: $( '#comment-comm-'+id ).val(),

		            comment_action: 'edit'

		        };

		        

		        $.ajax({

		            url: "<?php echo esc_url( admin_url('admin-post.php') ); ?>", 

		            type: 'POST',

		            data: dataToSend,

		            success: function(response){ 

		            	$( '#comment-comm-'+id ).attr( 'disabled', true );

		            	$( '#comentarios-editar-'+id ).toggleClass( 'd-none' );

		    			$( '#comentarios-guardar-'+id ).toggleClass( 'd-none' );

		            },

		            error: function(jqXHR, textStatus, errorThrown){

		                $('#response').html('<p>Hubo un error al agregar el comentario: ' + errorThrown + '</p>');

		            }

		        });

			   	

		   

		    });

		    

		    $('.input-comment').on( 'keypress', function(event){

		    	

	            if( event.keyCode === 13){

	            	

	            	event.preventDefault();

	                $( '.comment-save_pedido' ).trigger( 'click' );

	                

	            }

	            

	        });

			

			$( '#add_comment' ).on('click', function(){

				

		      	document.getElementById( "add_comment" ).disabled = true;

		        document.getElementById( "comentario" ).disabled = true;

		      	document.getElementById( "btnText" ).style.display = "none";

		      	document.getElementById( "carga" ).style.display = "inline";

				

				var comentario = $( '#comentario' ).val();

				

				if( comentario == '' ){

					

					notify( 'Debes ingresar algun comentario', 'error' );

					

					document.getElementById( "add_comment" ).disabled = false;

		        	document.getElementById( "comentario" ).disabled = false;

		        	document.getElementById( "carga" ).style.display = "none";

			        document.getElementById( "btnText" ).style.display = "inline";

		        

					return false;

					

				}else{

					

			        var dataToSend = {

			        	action: 'update_comment_empresa',

			        	comment_nonce: "<?php echo wp_create_nonce( 'comment_empresa_nonce' ); ?>",

			            comment: comentario,

			            post_id: $('input[name="post_id"]').val()

			        };

			        

			        $.ajax({

			            url: "<?php echo esc_url( admin_url('admin-post.php') ); ?>", 

			            type: 'POST',

			            data: dataToSend,

			            success: function(response){ 

			            	

			            	notify( 'Se ha agregado tu comentario', 'success' );

			            	

			            	$( '#comentario' ).val( '' );

			            	document.getElementById( "add_comment" ).disabled = false;

				        	document.getElementById( "comentario" ).disabled = false;

				        	document.getElementById( "carga" ).style.display = "none";

					        document.getElementById( "btnText" ).style.display = "inline";

			        

			            	$( '#ventana_comentarios' ).html( response.output_html );

			            	

			            	document.querySelectorAll('textarea').forEach(autoResize);

    

			            },

			            error: function(jqXHR, textStatus, errorThrown){

			                $('#response').html('<p>Hubo un error al agregar el comentario: ' + errorThrown + '</p>');

			            }

			        });

			   	}

		   

		    });

		    

		    $(document).on('click', '#ventana_comentarios .comment-delete', function() {

				

				var id = $(this).data( 'id' );

				$( '#comment-'+id ).hide();

				

		        var dataToSend = {

		        	action: 'update_comment_cliente',

		        	comment_nonce: "<?php echo wp_create_nonce( 'comment_cliente_nonce' ); ?>",

		            post_id: $('input[name="post_id"]').val(),

		            comment_id: id,

		            comment_action: 'delete'

		        };

		        

		        $.ajax({

		            url: "<?php echo esc_url( admin_url('admin-post.php') ); ?>", 

		            type: 'POST',

		            data: dataToSend,

		            success: function(response){ 

		            	$( '#comment-'+id ).hide(); 

		            },

		            error: function(jqXHR, textStatus, errorThrown){

		                $('#response').html('<p>Hubo un error al agregar el comentario: ' + errorThrown + '</p>');

		            }

		        });

			   	

		   

		    });

		    

		    $(document).on('click', '#ventana_comentarios .comment-edit', function() {

		    	

		    	var id = parseInt( $(this).data( 'id' ) );

		    	

		    	$( '#comentarios-editar-'+id ).toggleClass( 'd-none' );

		    	$( '#comentarios-guardar-'+id ).toggleClass( 'd-none' );

		    	

		    	$( '#comment-comm-'+id ).attr( 'disabled', false );

		    	$( '#comment-comm-'+id ).blur();

		    	

		    });

		    

			$(document).on('click', '#ventana_comentarios .comment-save', function() {

				

				var id = $(this).data('id');

				$( '#comment-comm-'+id ).attr( 'disabled', true );

            	$( '#comentarios-editar-'+id ).toggleClass( 'd-none' );

    			$( '#comentarios-guardar-'+id ).toggleClass( 'd-none' );

		    				

		        var dataToSend = {

		        	action: 'update_comment_cliente',

		        	comment_nonce: "<?php echo wp_create_nonce( 'comment_cliente_nonce' ); ?>",

		            post_id: $('input[name="post_id"]').val(),

		            comment_id: id,

		            comment_new: $( '#comment-comm-'+id ).val(),

		            comment_action: 'edit'

		        };

		        

		        $.ajax({

		            url: "<?php echo esc_url( admin_url('admin-post.php') ); ?>", 

		            type: 'POST',

		            data: dataToSend,

		            success: function(response){ 

		            	$( '#comment-comm-'+id ).attr( 'disabled', true );

		            	$( '#comentarios-editar-'+id ).toggleClass( 'd-none' );

		    			$( '#comentarios-guardar-'+id ).toggleClass( 'd-none' );

		            },

		            error: function(jqXHR, textStatus, errorThrown){

		                $('#response').html('<p>Hubo un error al agregar el comentario: ' + errorThrown + '</p>');

		            }

		        });

			   	

		   

		    });

		    

		    $( '#upload-image-form' ).on('submit', function(e){

		    	

		        e.preventDefault();

		        

		        var user_id = $('#user_id').val();

		        var post_id = $('#post_id').val();

		

		        var formData = new FormData();

		        var fileInput = $('#featured-image')[0].files[0];

		        var nonce = $('#upload_featured_image_nonce').val();

		        formData.append('featured_image', fileInput);

		        formData.append('action', 'upload_featured_image');

		        formData.append('security', nonce);

		        formData.append( 'post_id', post_id );

		        formData.append( 'user_id', user_id );

		

		        $.ajax({

		            url: "<?php echo esc_url( admin_url('admin-post.php') ); ?>",

		            type: 'POST',

		            data: formData,

		            processData: false,

		            contentType: false,

		            success: function(response) {

		                console.log( 'Imagen subida exitosamente:', response );

		                document.location.href = '?msg=success';

		            },

		            error: function(response) {

		                console.error( 'Error al subir la imagen:', response );

		            }

		        });

		    });

            $('#buscarProducto').on('keyup', function () {

                let valor = $(this).val();

                if (valor.length < 5) {

                    $('#sugerencias-productos').empty();

                    return;

                }

                let excluir = [];

                $('#productos-container .producto-input').each(function () {

                    let id = $(this).data('post-id');

                    if (id) excluir.push(id);

                });

                $.ajax({

                    url: "<?php echo esc_url( admin_url('admin-ajax.php') ); ?>", 

                    method: 'POST',

                    data: {

                        action: 'buscar_productos',

                        term: valor,

                        excluir: excluir

                    },

                    success: function (response) {

                        if (response.success) {

                            let sugerencias = response.data;

                            let html = '';

                            if (sugerencias.length) {

                                sugerencias.forEach(p => {

                                    html += `<li class="list-group-item list-group-item-action producto-sugerido" data-id="${p.id}" data-title="${p.title}" data-precio="${p.precio}">${p.title}</li>`;

                                });

                            } else {

                                html = '<li class="list-group-item">Sin resultados</li>';

                            }

                            $('#sugerencias-productos').html(html);

                        }

                    }

                });

            });

            // seleccionar producto de sugerencia

            $(document).on('click', '.producto-sugerido', function () {

                let id = $(this).data('id');

                let nombre = $(this).data('title');

                let precio = $(this).data('precio');

                let fila = `

                    <div class="input-group mb-2 producto-wrapper">

                        <input type="hidden" name="productos[${id}][id]" value="${id}">

                        <input type="text" class="form-control text-primary producto-input flex-grow-1" 

                            data-post-id="${id}" value="${nombre}" readonly>

                        <input type="number" name="productos[${id}][cantidad]" class="form-control text-primary text-center producto-cantidad" 

                            value="1" placeholder="Cantidad" min="1" style="min-width:70px; max-width:90px;">

                        <input type="text" name="productos[${id}][precio]" class="form-control text-primary text-end producto-precio" 

                            value="${precio}" placeholder="Precio" style="min-width:80px; max-width:100px;">

                        <button type="button" class="btn btn-outline-danger btn-eliminar-producto">&times;</button>

                    </div>

                `;

                $('#productos-container').append(fila);

                $('#buscarProducto').val('');

                $('#sugerencias-productos').empty();

            });

            // eliminar fila

            $(document).on('click', '.btn-eliminar-producto', function () {

                $(this).closest('.producto-wrapper').remove();

            });

            $('#buscarCliente').on('keyup', function() {

                let term = $(this).val();

                if (term.length < 2) {

                    $('#sugerencias-clientes').empty();

                    return;

                }

                $.ajax({

                    url: "<?php echo esc_url( admin_url('admin-ajax.php') ); ?>",

                    type: 'POST',

                    dataType: 'json',

                    data: {

                        action: 'buscar_clientes',

                        term: term

                    },

                    success: function(response) {

                        let sugerencias = $('#sugerencias-clientes');

                        sugerencias.empty();

                        if (response.success && response.data.length > 0) {

                            response.data.forEach(function(cliente) {

                                sugerencias.append(`

                                    <li class="list-group-item cliente-sugerido" 

                                        data-id="${cliente.id}" 

                                        data-title="${cliente.title}">

                                        ${cliente.title}

                                    </li>

                                `);

                            });

                        }

                    }

                });

            });

            // al hacer click en un cliente sugerido

            $(document).on('click', '.cliente-sugerido', function () {

                let id = $(this).data('id');

                let nombre = $(this).data('title');

                $('#buscarCliente').val(nombre);

                $('#cliente').val(id); 

                $('#sugerencias-clientes').empty();

            });

            const canvas = document.getElementById('graficoPedidos');

            if (canvas) {

                const ctx = canvas.getContext('2d');

                cargarGraficoPedidos(ctx);

            }

            function cargarGraficoPedidos(ctx) {

                $.ajax({

                    url: "<?php echo esc_url( admin_url('admin-ajax.php') ); ?>",

                    method: "POST",

                    data: {

                        action: 'get_pedidos_data' // Acción que crearemos en PHP

                    },

                    success: function(response) {

                        const fechas = response.map(item => item.fecha);

                        const montos = response.map(item => parseFloat(item.monto));

                        if (chart) {

                            chart.data.labels = fechas;

                            chart.data.datasets[0].data = montos;

                            chart.update();

                        } else {

                            chart = new Chart(ctx, {

                                type: 'line',

                                data: {

                                    labels: fechas,

                                    datasets: [{

                                        label: 'Precio de venta',

                                        data: montos,

                                        borderColor: 'rgba(75, 192, 192, 1)',

                                        backgroundColor: 'rgba(75, 192, 192, 0.2)',

                                        fill: true,

                                        tension: 0.3

                                    }]

                                },

                                options: {

                                    responsive: true,

                                    scales: {

                                        x: {

                                            title: { display: true, text: 'Fecha del pedido' }

                                        },

                                        y: {

                                            title: { display: true, text: 'Monto' }

                                        }

                                    }

                                }

                            });

                        }

                    }

                });

            }

            const canvas2 = document.getElementById('graficoRanking');

            if (canvas2) {

                const ctx2 = canvas2.getContext('2d');

                cargarGraficoTop(ctx2);

            }

            function cargarGraficoTop(ctx2) {

                fetch('<?php echo admin_url('admin-ajax.php?action=get_top_productos'); ?>')

                    .then(res => res.json())

                    .then(data => {

                        const labels = data.map(item => item.nombre);

                        const cantidades = data.map(item => item.cantidad); // 🔹 usar cantidad, no total

                        new Chart(ctx2, {

                            type: 'bar',

                            data: {

                                labels: labels,

                                datasets: [{

                                    label: 'Unidades vendidas', // 🔹 título del dataset

                                    data: cantidades,

                                    backgroundColor: 'rgba(54, 162, 235, 0.6)',

                                    borderColor: 'rgba(54, 162, 235, 1)',

                                    borderWidth: 1,

                                    borderRadius: 6

                                }]

                            },

                            options: {

                                indexAxis: 'x',

                                scales: {

                                    y: {

                                        beginAtZero: true,

                                        title: { display: true, text: 'Cantidad vendida' } // 🔹 texto eje Y

                                    },

                                    x: {

                                        ticks: { maxRotation: 45, minRotation: 45 }

                                    }

                                },

                                plugins: {

                                    title: {

                                        display: true,

                                        text: 'Top 10 productos más vendidos (por unidades)'

                                    },

                                    legend: { display: false }

                                }

                            }

                        });

                    })

                    .catch(err => console.error('Error al cargar ranking:', err));

            }

            const canvas3 = document.getElementById('graficoVistos');

            if (canvas3) {

                const ctx3 = canvas3.getContext('2d');

                cargarGraficoVistos(ctx3);

            }

            function cargarGraficoVistos(ctx3) {

                fetch('<?php echo admin_url('admin-ajax.php?action=get_top_vistos'); ?>')

                    .then(res => res.json())

                    .then(data => {

                        const labels = data.map(item => item.nombre);

                        const vistas = data.map(item => item.views);

                        new Chart(ctx3, {

                            type: 'bar',

                            data: {

                                labels: labels,

                                datasets: [{

                                    label: 'Cantidad de vistas',

                                    data: vistas,

                                    backgroundColor: 'rgba(255, 206, 86, 0.6)',

                                    borderColor: 'rgba(255, 206, 86, 1)',

                                    borderWidth: 1,

                                    borderRadius: 6

                                }]

                            },

                            options: {

                                indexAxis: 'x',

                                scales: {

                                    y: {

                                        beginAtZero: true,

                                        title: { display: true, text: 'Vistas' }

                                    },

                                    x: {

                                        ticks: { maxRotation: 45, minRotation: 45 }

                                    }

                                },

                                plugins: {

                                    title: {

                                        display: true,

                                        text: 'Top 10 productos más vistos'

                                    },

                                    legend: { display: false }

                                }

                            }

                        });

                    })

                    .catch(err => console.error('Error al cargar productos más vistos:', err));

            }

            const canvas4 = document.getElementById('graficoPedidosCliente');

            if (canvas4) {

                const ctx4 = canvas4.getContext('2d');

                cargarGraficoPedidosCliente(ctx4);

            }

            function cargarGraficoPedidosCliente(ctx4) {

                const clienteInput = document.getElementById('cliente_id');

                const cliente_id = clienteInput ? clienteInput.value : null;

                $.ajax({

                    url: "<?php echo esc_url( admin_url('admin-ajax.php') ); ?>",

                    method: "POST",

                    data: {

                        action: 'get_pedidos_cliente_data',

                        cliente_id: cliente_id

                    },

                    success: function(response) {

                        const fechas = response.map(item => item.fecha);

                        const montos = response.map(item => parseFloat(item.monto));

                        if (chart) {

                            chart.data.labels = fechas;

                            chart.data.datasets[0].data = montos;

                            chart.update();

                        } else {

                            chart = new Chart(ctx4, {

                                type: 'line',

                                data: {

                                    labels: fechas,

                                    datasets: [{

                                        label: 'Precio de venta',

                                        data: montos,

                                        borderColor: 'rgba(75, 192, 192, 1)',

                                        backgroundColor: 'rgba(75, 192, 192, 0.2)',

                                        fill: true,

                                        tension: 0.3

                                    }]

                                },

                                options: {

                                    responsive: true,

                                    scales: {

                                        x: {

                                            title: { display: true, text: 'Fecha del pedido' }

                                        },

                                        y: {

                                            title: { display: true, text: 'Monto' }

                                        }

                                    }

                                }

                            });

                        }

                    }

                });

            }

        });

        function borrarDocumentoPedido( field, post_id){

            if(!confirm("¿Seguro que deseas borrar el documento?")) return;

            jQuery.ajax({

                url: "<?php echo esc_url( admin_url('admin-ajax.php') ); ?>",

                type: 'POST',

                data: {

                    action: 'borrar_documento_pedido',

                    field: field,

                    post_id: post_id

                },

                success: function(response){

                    if(response.success){

                        location.reload(); 

                    }else{

                        alert('Error al borrar');

                    }

                }

            });

        }

    	

    	function autoResize(textarea) {

            textarea.style.height = 'auto'; 

            textarea.style.height = textarea.scrollHeight + 'px'; 

        }

        document.addEventListener('DOMContentLoaded', function() {

            

            document.querySelectorAll('textarea').forEach(autoResize);

			var input = document.getElementById('myInput');

			var placeholder = document.getElementById('floatingPlaceholder');

			

			if( input ){

				input.addEventListener('input', function() {

				    if (input.value === '') {

				        placeholder.style.display = 'block';

				    } else {

				        placeholder.style.display = 'none';

				    }

				});

			}

			

		});

  	</script>

  	<?php wp_footer(); ?>

</body>
</html>