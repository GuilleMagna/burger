<?php
$__block_fields = function_exists('get_fields') ? (array) get_fields() : [];
$__block_cache_key = 'acf_block_' . md5(($block['id'] ?? basename(__DIR__)) . serialize($__block_fields));

if (($__block_cached_html = get_transient($__block_cache_key)) !== false) {
    echo $__block_cached_html;
    return;
}

ob_start();
?>
<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>


<!-- start: Header Area 6 -->
<header class="header-area header-1 h6-header header-absolute section-gap-x">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">
                
                <div class="header-wrapper">

                    <div class="site_logo">
                        <a class="logo" href="<?= NAKAMA_URL ?>">
                            <img src="<?= NAKAMA_OPTIONS['logo_dark'] ?>" alt="logo">
                        </a>
                    </div>

                    <? if( !empty(NAKAMA_OPTIONS['menu']) && count(NAKAMA_OPTIONS['menu']) > 0 ): ?>

                        <div class="menu-area d-none d-lg-inline-flex align-items-center">

                            <nav id="mobile-menu" class="mainmenu">

                                <ul>

                                    <? foreach( NAKAMA_OPTIONS['menu'] as $value ): extract( $value ) ?>

                                        <? 
                                        $current_url = home_url( add_query_arg( null, null ) );
                                        $menu_class_active = ( $item['url'] === $current_url ) ? 'current-menu-ancestor' : ''; 
                                        ?>

                                        <li class="<? if( $subenlaces ): ?>has-dropdown<? endif ?> <?= $menu_class_active ?>">
                                            
                                            <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>" target="<?= $item['target'] ?>">
                                                <?= $item['title'] ?>
                                            </a>

                                            <? if( $menu_imagenes && $submenu_imagenes ): ?>

                                                <ul class="sub-menu header__mega-menu mega-menu">

                                                    <li>

                                                        <div class="mega-menu-wrapper">

                                                            <div class="container-fluid gap-60-25">

                                                                <div class="row">

                                                                    <? foreach( $submenu_imagenes as $menu ): extract($menu) ?>

                                                                        <? if( empty( $item ) ) continue ?>

                                                                        <div class="col-xl-3 col-lg-3 col-12">

                                                                            <div class="tj-demo-thumb">

                                                                                <div class="image">

                                                                                    <img src="<?= $imagen ?>" alt="<?= $item['title'] ?>">

                                                                                    <div class="tj-demo-button">
                                                                                        <a href="<?= $item['url'] ?>" class="tj-primary-btn header_btn">
                                                                                            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_ver_mas', 'Ver más' ) ); ?></span></span>
                                                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>

                                                                                <h6 class="tj-demo-title">
                                                                                    <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>" target="<?= $item['target'] ?>">
                                                                                        <?= $item['title'] ?>
                                                                                    </a>
                                                                                </h6>

                                                                            </div>

                                                                        </div>

                                                                    <? endforeach ?>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </li>

                                                </ul>

                                            <? endif ?>

                                            <? if( $menu_supermenu && $submenu_supermenu ): ?>

                                                <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">

                                                    <li>

                                                        <div class="mega-menu-wrapper">

                                                            <? foreach( $submenu_supermenu as $menu ): extract($menu) ?>

                                                                <? if( empty( $columnas ) ) continue ?>

                                                                <? foreach( $columnas as $columna ): extract($columna) ?>

                                                                    <div class="mega-menu-pages-single">

                                                                        <div class="mega-menu-pages-single-inner">

                                                                            <h6 class="mega-menu-title">
                                                                                <?= $titulo ?>
                                                                            </h6>

                                                                            <div class="mega-menu-list">

                                                                                <? foreach( $menu as $_value ): extract($_value) ?>

                                                                                    <? if( empty( $item ) ) continue ?>

                                                                                    <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>" target="<?= $item['target'] ?>">
                                                                                        <?= $item['title'] ?>
                                                                                    </a>

                                                                                <? endforeach ?>

                                                                            </div>

                                                                        </div>
                                                                    
                                                                    </div>    

                                                                <? endforeach ?>

                                                            <? endforeach ?>

                                                            <div class="col-12 col-lg-3 mega-menu-pages-single">

                                                                <div class="mega-menu-pages-single-inner">

                                                                    <div class="feature-box">

                                                                        <div class="feature-content">

                                                                            <h2 class="title">
                                                                                <?= $titulo_supermenu ?>
                                                                            </h2>

                                                                            <span>
                                                                                <?= $subtitulo_supermenu ?>
                                                                            </span>

                                                                            <a class="read-more feature-contact" href="tel:<?= str_replace( ['-','+',' ','(',')'], '', NAKAMA_OPTIONS['telefono'] ) ?>">
                                                                                <i class="tji-phone-3"></i>
                                                                                <span><?= NAKAMA_OPTIONS['telefono'] ?></span>
                                                                            </a>

                                                                        </div>

                                                                        <div class="feature-images">
                                                                            <img src="<?= $imagen_supermenu ?>" alt="service-ad">
                                                                        </div>

                                                                    </div>
                                                                    
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </li>

                                                </ul>

                                            <? endif ?>

                                            <? if( $menu_iconos && $submenu_iconos ): ?>

                                                <ul class="sub-menu mega-menu-service">

                                                    <? foreach( $submenu_iconos as $menu ): extract( $menu ) ?>

                                                        <? if( empty( $item ) ) continue ?>

                                                        <li> 
                                                            <a class="mega-menu-service-single" href="<?= $item['url'] ?>"> 
                                                                <span class="mega-menu-service-icon"><?= $icono ?></span> 
                                                                <span class="mega-menu-service-title"><?= $item['title'] ?></span> 
                                                                <span class="mega-menu-service-nav"><i class="tji-arrow-right-long"></i><i class="tji-arrow-right-long"></i></span>
                                                            </a>
                                                        </li>

                                                    <? endforeach ?>

                                                </ul>

                                            <? endif ?>

                                        </li>

                                    <? endforeach ?>

                                </ul>

                            </nav>

                        </div>

                    <? endif ?>

                    <div class="header-right-item d-none d-lg-inline-flex">
                        <a class="header-contact d-none d-xl-inline-flex" href="tel:18884521505">
                            <span class="call-icon"><i class="tji-phone"></i></span>
                            <span class="call-text">1-888-452-1505</span>
                        </a>
                        <div class="header-button">
                            <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>">
                                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_contacto', 'Contacto' ) ); ?></span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                        <div class="menu_bar menu_offcanvas d-none d-lg-inline-flex">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div class="menu_bar mobile_menu_bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    
                </div>
            </div>

        </div>

    </div>

    <div class="search_popup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="tj_search_wrapper">
                        <div class="search_form">
                            <form action="#">
                                <div class="search_input">
                                    <div class="search-box">
                                        <input class="search-form-input" type="text" placeholder="Escribe las palabras y pulsa Intro" required>
                                        <button type="submit">
                                            <i class="tji-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

<header class="header-area header-1 h6-header header-duplicate header-sticky section-gap-x">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="header-wrapper">

                    <div class="site_logo">
                        <a class="logo" href="<?= NAKAMA_URL ?>">
                            <img src="<?= NAKAMA_OPTIONS['logo_dark'] ?>" alt="logo">
                        </a>
                    </div>

                    <? if( !empty(NAKAMA_OPTIONS['menu']) && count(NAKAMA_OPTIONS['menu']) > 0 ): ?>

                        <div class="menu-area d-none d-lg-inline-flex align-items-center">

                            <nav class="mainmenu">

                                <ul>

                                    <? foreach( NAKAMA_OPTIONS['menu'] as $value ): extract( $value ) ?>

                                        <? 
                                        $current_url = home_url( add_query_arg( null, null ) );
                                        $menu_class_active = ( $item['url'] === $current_url ) ? 'current-menu-ancestor' : ''; 
                                        ?>

                                        <li class="<? if( $subenlaces ): ?>has-dropdown<? endif ?> <?= $menu_class_active ?>">
                                            
                                            <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>" target="<?= $item['target'] ?>">
                                                <?= $item['title'] ?>
                                            </a>

                                            <? if( $menu_imagenes && $submenu_imagenes ): ?>

                                                <ul class="sub-menu header__mega-menu mega-menu">

                                                    <li>

                                                        <div class="mega-menu-wrapper">

                                                            <div class="container-fluid gap-60-25">

                                                                <div class="row">

                                                                    <? foreach( $submenu_imagenes as $menu ): extract($menu) ?>

                                                                        <? if( empty( $item ) ) continue ?>

                                                                        <div class="col-xl-3 col-lg-3 col-12">

                                                                            <div class="tj-demo-thumb">

                                                                                <div class="image">

                                                                                    <img src="<?= $imagen ?>" alt="<?= $item['title'] ?>">

                                                                                    <div class="tj-demo-button">
                                                                                        <a href="<?= $item['url'] ?>" class="tj-primary-btn header_btn">
                                                                                            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_ver_mas_2', 'Ver más' ) ); ?></span></span>
                                                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>

                                                                                <h6 class="tj-demo-title">
                                                                                    <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>" target="<?= $item['target'] ?>">
                                                                                        <?= $item['title'] ?>
                                                                                    </a>
                                                                                </h6>

                                                                            </div>

                                                                        </div>

                                                                    <? endforeach ?>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </li>

                                                </ul>

                                            <? endif ?>

                                            <? if( $menu_supermenu && $submenu_supermenu ): ?>

                                                <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">

                                                    <li>

                                                        <div class="mega-menu-wrapper">

                                                            <? foreach( $submenu_supermenu as $menu ): extract($menu) ?>

                                                                <? if( empty( $columnas ) ) continue ?>

                                                                <? foreach( $columnas as $columna ): extract($columna) ?>

                                                                    <div class="mega-menu-pages-single">

                                                                        <div class="mega-menu-pages-single-inner">

                                                                            <h6 class="mega-menu-title">
                                                                                <?= $titulo ?>
                                                                            </h6>

                                                                            <div class="mega-menu-list">

                                                                                <? foreach( $menu as $_value ): extract($_value) ?>

                                                                                    <? if( empty( $item ) ) continue ?>

                                                                                    <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>" target="<?= $item['target'] ?>">
                                                                                        <?= $item['title'] ?>
                                                                                    </a>

                                                                                <? endforeach ?>

                                                                            </div>

                                                                        </div>
                                                                    
                                                                    </div>    

                                                                <? endforeach ?>

                                                            <? endforeach ?>

                                                            <div class="col-12 col-lg-3 mega-menu-pages-single">

                                                                <div class="mega-menu-pages-single-inner">

                                                                    <div class="feature-box">

                                                                        <div class="feature-content">

                                                                            <h2 class="title">
                                                                                <?= $titulo_supermenu ?>
                                                                            </h2>

                                                                            <span>
                                                                                <?= $subtitulo_supermenu ?>
                                                                            </span>

                                                                            <a class="read-more feature-contact" href="tel:<?= str_replace( ['-','+',' ','(',')'], '', NAKAMA_OPTIONS['telefono'] ) ?>">
                                                                                <i class="tji-phone-3"></i>
                                                                                <span><?= NAKAMA_OPTIONS['telefono'] ?></span>
                                                                            </a>

                                                                        </div>

                                                                        <div class="feature-images">
                                                                            <img src="<?= $imagen_supermenu ?>" alt="service-ad">
                                                                        </div>

                                                                    </div>
                                                                    
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </li>

                                                </ul>

                                            <? endif ?>

                                            <? if( $menu_iconos && $submenu_iconos ): ?>

                                                <ul class="sub-menu mega-menu-service">

                                                    <? foreach( $submenu_iconos as $menu ): extract( $menu ) ?>

                                                        <? if( empty( $item ) ) continue ?>

                                                        <li> 
                                                            <a class="mega-menu-service-single" href="<?= $item['url'] ?>"> 
                                                                <span class="mega-menu-service-icon"><?= $icono ?></span> 
                                                                <span class="mega-menu-service-title"><?= $item['title'] ?></span> 
                                                                <span class="mega-menu-service-nav"><i class="tji-arrow-right-long"></i><i class="tji-arrow-right-long"></i></span>
                                                            </a>
                                                        </li>

                                                    <? endforeach ?>

                                                </ul>

                                            <? endif ?>

                                        </li>

                                    <? endforeach ?>

                                </ul>

                            </nav>

                        </div>

                    <? endif ?>

                    <div class="header-right-item d-none d-lg-inline-flex">
                        <a class="header-contact d-none d-xl-inline-flex" href="tel:18884521505">
                            <span class="call-icon"><i class="tji-phone"></i></span>
                            <span class="call-text">1-888-452-1505</span>
                        </a>
                        <div class="header-button">
                            <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html_2', 'contact.html' ) ); ?>">
                                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_let_s_talk', 'Let’s Talk' ) ); ?></span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                        <div class="menu_bar menu_offcanvas d-none d-lg-inline-flex">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div class="menu_bar mobile_menu_bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="search_popup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="tj_search_wrapper">
                        <div class="search_form">
                            <form action="#">
                                <div class="search_input">
                                    <div class="search-box">
                                        <input class="search-form-input" type="text" placeholder="Escribe las palabras y pulsa Intro" required>
                                        <button type="submit">
                                            <i class="tji-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<!-- end: Header Area 6 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
