<?php 

define( 'NAKAMA_THEME_PATH',    get_template_directory()        );
define( 'NAKAMA_THEME_URL',     get_template_directory_uri()    );
define( 'NAKAMA_TITLE',         get_bloginfo('title')           );
define( 'NAKAMA_URL',           get_bloginfo('url')             );
define( 'NAKAMA_VERSION',       get_bloginfo('version')         );
define( 'NAKAMA_DESCRIPCION',   get_bloginfo('description')     );
define( 'NAKAMA_OPTIONS',       get_fields( 'option' )          );

require_once NAKAMA_THEME_PATH . '/inc/tools.php';
require_once NAKAMA_THEME_PATH . '/inc/setup.php';
require_once NAKAMA_THEME_PATH . '/inc/blocks.php';

?>