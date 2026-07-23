<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<div class="wrap crm-nakama-admin">
    <h1>CRM Nakama — Pedidos</h1>
    <?php
    $front_tpl = CRM_PLUGIN_DIR . 'templates/page_crm_pedidos.php';
    if ( file_exists( $front_tpl ) ) {
        include $front_tpl;
        return;
    }
    ?>
    <div id="crm-pedidos-list"></div>
    <script>
    (function($){
        function loadPedidos(){
            $('#crm-pedidos-list').html('<p>Cargando...</p>');
            $.post(ajaxurl, { action: 'crm_nakama_get_pedidos' }, function(resp){
                if(!resp.success){ $('#crm-pedidos-list').html('<p>Error: '+resp.data+'</p>'); return; }
                var html = '<table class="widefat"><thead><tr><th>ID</th><th>Título</th><th>Estado</th></tr></thead><tbody>';
                resp.data.forEach(function(item){
                    html += '<tr><td>'+item.ID+'</td><td>'+item.title+'</td><td>'+item.status+'</td></tr>';
                });
                html += '</tbody></table>';
                $('#crm-pedidos-list').html(html);
            });
        }
        $(document).ready(function(){
            loadPedidos();
        });
    })(jQuery);
    </script>
</div>
