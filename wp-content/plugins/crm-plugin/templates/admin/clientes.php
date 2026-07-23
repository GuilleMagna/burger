<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<div class="wrap crm-nakama-admin">
    <h1>CRM Nakama — Clientes</h1>
    <?php
    // Try to include front-end template if exists
    $front_tpl = CRM_PLUGIN_DIR . 'templates/page_crm_clientes.php';
    if ( file_exists( $front_tpl ) ) {
        include $front_tpl;
        return;
    }
    ?>
    <p>Si no existe la plantilla front-end, se mostrará una lista básica cargada por AJAX.</p>
    <div id="crm-clientes-list"></div>
    <p><a href="#" class="button button-primary" id="crm-nakama-add-cliente">Agregar cliente</a></p>
    <script>
    (function($){
        function loadClientes(){
            $('#crm-clientes-list').html('<p>Cargando...</p>');
            $.post(ajaxurl, { action: 'crm_nakama_get_clientes' }, function(resp){
                if(!resp.success){ $('#crm-clientes-list').html('<p>Error: '+resp.data+'</p>'); return; }
                var html = '<table class="widefat"><thead><tr><th>ID</th><th>Nombre</th><th>Estado</th><th>Acciones</th></tr></thead><tbody>';
                resp.data.forEach(function(item){
                    html += '<tr><td>'+item.ID+'</td><td>'+item.title+'</td><td>'+item.status+'</td><td><a href="#" class="crm-edit" data-id="'+item.ID+'">Editar</a> | <a href="#" class="crm-delete" data-id="'+item.ID+'">Eliminar</a></td></tr>';
                });
                html += '</tbody></table>';
                $('#crm-clientes-list').html(html);
            });
        }
        $(document).ready(function(){
            loadClientes();
            $(document).on('click', '.crm-delete', function(e){
                e.preventDefault();
                if(!confirm('Eliminar cliente?')) return;
                var id = $(this).data('id');
                $.post(ajaxurl, { action: 'crm_nakama_delete_cliente', id: id }, function(resp){
                    if(resp.success) loadClientes();
                    else alert('Error: '+resp.data);
                });
            });
            $('#crm-nakama-add-cliente').on('click', function(e){
                e.preventDefault();
                var title = prompt('Nombre del cliente:');
                if(!title) return;
                $.post(ajaxurl, { action: 'crm_nakama_save_cliente', title: title }, function(resp){
                    if(resp.success) loadClientes();
                    else alert('Error: '+resp.data);
                });
            });
        });
    })(jQuery);
    </script>
</div>
