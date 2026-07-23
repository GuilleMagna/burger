CRM Plugin generated from uploaded theme.

What was included (auto-detected):
- Templates copied to: templates/  (17 files)
- CSS files copied to: assets/css/  (3 files)
- JS files copied to: assets/js/  (0 files)
- Other assets copied to: assets/  (0 files)
- functions.php included: no (copied to includes/original-functions.php)

IMPORTANT next steps (you must review & adapt):
1. Abra includes/original-functions.php y revise que no haya funciones con nombres que choquen con otros plugins/themes.
2. Ajuste rutas y dependencias (por ejemplo, llamadas a get_template_directory()) dentro de los archivos copiados.
3. Si las plantillas usan get_header()/get_footer() del tema, asegúrese de que funcionen correctamente o conviértalas a plantillas independientes.
4. Si el CRM depende de custom post types o tablas, registrelos en el plugin (no se intentó inferirlos automáticamente).
5. Pruebe en un entorno de staging antes de activar en producción.

Instalación:
1. Suba crm-plugin.zip a /wp-admin/plugins.php -> Añadir nuevo -> Subir plugin
2. Active el plugin y en páginas seleccione la plantilla CRM - <archivo.php> para usar plantillas copiadas.

Generated on: 2025-10-22T18:35:16.415090 UTC


Se agregó menú de administración 'CRM Nakama' con subpáginas: Escritorio, Clientes, Pedidos, Ajustes.
Las plantillas admin están en templates/admin/.
