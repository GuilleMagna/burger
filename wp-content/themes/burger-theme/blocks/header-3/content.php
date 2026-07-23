<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>


<!-- start: Header Area 3 -->
<header class="header-area header-3 header-absolute section-gap-x">

    <div class="header-top">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12">

                    <div class="header-top-content">

                        <p class="topbar-text">
                            <a href=""><?php echo esc_html( $burger_get( 'texto_contacto', 'Contacto' ) ); ?></a>
                        </p>

                        <div class="header-info">

                            <div class="info-item">
                                <span><i class="tji-location"></i></span>
                                <a href="#"><?php echo esc_html( $burger_get( 'texto_visitanos', 'Visítanos!' ) ); ?></a>
                            </div>

                            <div class="info-item">
                                <span><i class="tji-phone-3"></i></span>
                                <a href="tel:<?= str_replace( ['-','+',' ','(',')'], '', NAKAMA_OPTIONS['telefono'] ) ?>"><?= NAKAMA_OPTIONS['telefono'] ?></a>
                            </div>

                            <div class="info-item">

                                <div class="social-links style-2">

                                    <ul>
                                        <li>
                                            <a href="<?php echo esc_url( $burger_get( 'link_https_www_facebook_com', 'https://www.facebook.com/' ) ); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url( $burger_get( 'link_https_www_instagram_com', 'https://www.instagram.com/' ) ); ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url( $burger_get( 'link_https_x_com', 'https://x.com/' ) ); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li>
                                            <a href="<?php echo esc_url( $burger_get( 'link_https_www_linkedin_com', 'https://www.linkedin.com/' ) ); ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="header-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header-wrapper">

                        <div class="site_logo">
                            <a class="logo" href="<?= NAKAMA_URL ?>">
                                <img src="<?= NAKAMA_OPTIONS['logo'] ?>" alt="logo">
                            </a>
                        </div>

                        <?php if( !empty(NAKAMA_OPTIONS['menu']) && count(NAKAMA_OPTIONS['menu']) > 0 ): ?>

                            <div class="menu-area d-none d-lg-inline-flex align-items-center">

                                <nav id="mobile-menu" class="mainmenu">

                                    <ul>

                                        <?php foreach( NAKAMA_OPTIONS['menu'] as $value ): extract( $value ) ?>

                                            <?php
                                            $current_url = home_url( add_query_arg( null, null ) );
                                            $menu_class_active = ( $item['url'] === $current_url ) ? 'current-menu-ancestor' : '';
                                            ?>

                                            <li class="<?php if( $subenlaces ): ?>has-dropdown<?php endif ?> <?= $menu_class_active ?>">

                                                <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>" target="<?= $item['target'] ?>">
                                                    <?= $item['title'] ?>
                                                </a>

                                                <?php if( $menu_imagenes && $submenu_imagenes ): ?>

                                                    <ul class="sub-menu header__mega-menu mega-menu">

                                                        <li>

                                                            <div class="mega-menu-wrapper">

                                                                <div class="container-fluid gap-60-25">

                                                                    <div class="row">

                                                                        <?php foreach( $submenu_imagenes as $menu ): extract($menu) ?>

                                                                            <?php if( empty( $item ) ) continue ?>

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

                                                                        <?php endforeach ?>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </li>

                                                    </ul>

                                                <?php endif ?>

                                                <?php if( $menu_supermenu && $submenu_supermenu ): ?>

                                                    <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">

                                                        <li>

                                                            <div class="mega-menu-wrapper">

                                                                <?php foreach( $submenu_supermenu as $menu ): extract($menu) ?>

                                                                    <?php if( empty( $columnas ) ) continue ?>

                                                                    <?php foreach( $columnas as $columna ): extract($columna) ?>

                                                                        <div class="mega-menu-pages-single">

                                                                            <div class="mega-menu-pages-single-inner">

                                                                                <h6 class="mega-menu-title">
                                                                                    <?= $titulo ?>
                                                                                </h6>

                                                                                <div class="mega-menu-list">

                                                                                    <?php foreach( $menu as $_value ): extract($_value) ?>

                                                                                        <?php if( empty( $item ) ) continue ?>

                                                                                        <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>" target="<?= $item['target'] ?>">
                                                                                            <?= $item['title'] ?>
                                                                                        </a>

                                                                                    <?php endforeach ?>

                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    <?php endforeach ?>

                                                                <?php endforeach ?>

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

                                                <?php endif ?>

                                                <?php if( $menu_iconos && $submenu_iconos ): ?>

                                                    <ul class="sub-menu mega-menu-service">

                                                        <?php foreach( $submenu_iconos as $menu ): extract( $menu ) ?>

                                                            <?php if( empty( $item ) ) continue ?>

                                                            <li>
                                                                <a class="mega-menu-service-single" href="<?= $item['url'] ?>">
                                                                    <span class="mega-menu-service-icon"><?= $icono ?></span>
                                                                    <span class="mega-menu-service-title"><?= $item['title'] ?></span>
                                                                    <span class="mega-menu-service-nav"><i class="tji-arrow-right-long"></i><i class="tji-arrow-right-long"></i></span>
                                                                </a>
                                                            </li>

                                                        <?php endforeach ?>

                                                    </ul>

                                                <?php endif ?>

                                            </li>

                                        <?php endforeach ?>

                                    </ul>

                                </nav>

                            </div>

                        <?php endif ?>

                        <!--div class="menu-area d-none d-lg-inline-flex align-items-center">
                            <nav id="mobile-menu" class="mainmenu">
                                <ul>
                                    <li class="has-dropdown current-menu-ancestor"><a href=""><?php echo esc_html( $burger_get( 'texto_inicio', 'Inicio' ) ); ?></a>
                                        <ul class="sub-menu header__mega-menu mega-menu  ">
                                        <li>
                                            <div class="mega-menu-wrapper">
                                            <div class="container-fluid gap-60-25">
                                                <div class="row">
                                                <div class="col-xl-3 col-lg-3 col-12">
                                                    <div class="tj-demo-thumb ">
                                                    <div class="image">
                                                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_header_demo_home_1_webp', NAKAMA_THEME_URL . '/assets/images/header/demo/home-1.webp' ) ); ?>" alt="">
                                                        <div class="tj-demo-button">
                                                        <a href="<?php echo esc_url( $burger_get( 'link_index_html', 'index.html' ) ); ?>" class="tj-primary-btn header_btn">
                                                            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_view_demo', 'View demo' ) ); ?></span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>

                                                        </a>
                                                        </div>
                                                    </div>
                                                    <h6 class="tj-demo-title"><a href="<?php echo esc_url( $burger_get( 'link_index_html_2', 'index.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_homepage_01', 'Homepage - 01' ) ); ?></a></h6>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-12">
                                                    <div class="tj-demo-thumb">
                                                    <div class="image">
                                                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_header_demo_home_2_webp', NAKAMA_THEME_URL . '/assets/images/header/demo/home-2.webp' ) ); ?>" alt="">
                                                        <div class="tj-demo-button">
                                                        <a href="<?php echo esc_url( $burger_get( 'link_index_2_html', 'index-2.html' ) ); ?>" class="tj-primary-btn header_btn">
                                                            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_view_demo_2', 'View demo' ) ); ?></span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                        </div>

                                                    </div>
                                                    <h6 class="tj-demo-title"><a href="<?php echo esc_url( $burger_get( 'link_index_2_html_2', 'index-2.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_homepage_02', 'Homepage - 02' ) ); ?></a></h6>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-12">
                                                    <div class="tj-demo-thumb">
                                                    <div class="image">
                                                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_header_demo_home_3_webp', NAKAMA_THEME_URL . '/assets/images/header/demo/home-3.webp' ) ); ?>" alt="">
                                                        <div class="tj-demo-button">
                                                        <a href="<?php echo esc_url( $burger_get( 'link_index_3_html', 'index-3.html' ) ); ?>" class="tj-primary-btn header_btn">
                                                            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_view_demo_3', 'View demo' ) ); ?></span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                        </div>
                                                    </div>
                                                    <h6 class="tj-demo-title"><a href="<?php echo esc_url( $burger_get( 'link_index_3_html_2', 'index-3.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_homepage_03', 'Homepage - 03' ) ); ?></a></h6>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-12">
                                                    <div class="tj-demo-thumb ">
                                                    <div class="image">
                                                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_header_demo_home_4_webp', NAKAMA_THEME_URL . '/assets/images/header/demo/home-4.webp' ) ); ?>" alt="">
                                                        <div class="tj-demo-button">
                                                        <a href="<?php echo esc_url( $burger_get( 'link_index_4_html', 'index-4.html' ) ); ?>" class="tj-primary-btn header_btn">
                                                            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_view_demo_4', 'View demo' ) ); ?></span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                        </div>
                                                    </div>
                                                    <h6 class="tj-demo-title"><a href="<?php echo esc_url( $burger_get( 'link_index_4_html_2', 'index-4.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_homepage_04', 'Homepage - 04' ) ); ?></a></h6>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-12">
                                                    <div class="tj-demo-thumb">
                                                    <div class="image">
                                                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_header_demo_home_5_webp', NAKAMA_THEME_URL . '/assets/images/header/demo/home-5.webp' ) ); ?>" alt="">
                                                        <div class="tj-demo-button">
                                                        <a href="<?php echo esc_url( $burger_get( 'link_index_5_html', 'index-5.html' ) ); ?>" class="tj-primary-btn header_btn">
                                                            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_view_demo_5', 'View demo' ) ); ?></span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                        </div>
                                                    </div>
                                                    <h6 class="tj-demo-title"><a href="<?php echo esc_url( $burger_get( 'link_index_5_html_2', 'index-5.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_homepage_05', 'Homepage - 05' ) ); ?></a></h6>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-12">
                                                    <div class="tj-demo-thumb">
                                                    <div class="image">
                                                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_header_demo_home_6_webp', NAKAMA_THEME_URL . '/assets/images/header/demo/home-6.webp' ) ); ?>" alt="">
                                                        <div class="tj-demo-button">
                                                        <a href="<?php echo esc_url( $burger_get( 'link_index_6_html', 'index-6.html' ) ); ?>" class="tj-primary-btn header_btn">
                                                            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_view_demo_6', 'View demo' ) ); ?></span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                        </div>

                                                    </div>
                                                    <h6 class="tj-demo-title"><a href="<?php echo esc_url( $burger_get( 'link_index_6_html_2', 'index-6.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_homepage_06', 'Homepage - 06' ) ); ?></a></h6>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-12">
                                                    <div class="tj-demo-thumb ">
                                                    <div class="image">
                                                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_header_demo_home_7_webp', NAKAMA_THEME_URL . '/assets/images/header/demo/home-7.webp' ) ); ?>" alt="">
                                                        <div class="tj-demo-button">
                                                        <a href="<?php echo esc_url( $burger_get( 'link_index_7_html', 'index-7.html' ) ); ?>" class="tj-primary-btn header_btn">
                                                            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_view_demo_7', 'View demo' ) ); ?></span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                        </div>
                                                    </div>
                                                    <h6 class="tj-demo-title"><a href="<?php echo esc_url( $burger_get( 'link_index_7_html_2', 'index-7.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_homepage_07', 'Homepage - 07' ) ); ?></a></h6>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-12">
                                                    <div class="tj-demo-thumb">
                                                    <div class="image">
                                                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_header_demo_home_8_webp', NAKAMA_THEME_URL . '/assets/images/header/demo/home-8.webp' ) ); ?>" alt="">
                                                        <h6 class="tj-demo-badge tj-zoom-in-out-anim">
                                                        <?php echo esc_html( $burger_get( 'texto_new', 'New' ) ); ?>
                                                        </h6>
                                                        <div class="tj-demo-button">
                                                        <a href="<?php echo esc_url( $burger_get( 'link_index_8_html', 'index-8.html' ) ); ?>" class="tj-primary-btn header_btn">
                                                            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_view_demo_8', 'View demo' ) ); ?></span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                        </div>
                                                    </div>
                                                    <h6 class="tj-demo-title"><a href="<?php echo esc_url( $burger_get( 'link_index_8_html_2', 'index-8.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_homepage_08', 'Homepage - 08' ) ); ?></a></h6>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-12">
                                                    <div class="tj-demo-thumb">
                                                    <div class="image">
                                                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_header_demo_home_9_webp', NAKAMA_THEME_URL . '/assets/images/header/demo/home-9.webp' ) ); ?>" alt="">
                                                        <h6 class="tj-demo-badge tj-zoom-in-out-anim">
                                                        <?php echo esc_html( $burger_get( 'texto_new_2', 'New' ) ); ?>
                                                        </h6>
                                                        <div class="tj-demo-button">
                                                        <a href="<?php echo esc_url( $burger_get( 'link_index_9_html', 'index-9.html' ) ); ?>" class="tj-primary-btn header_btn">
                                                            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_view_demo_9', 'View demo' ) ); ?></span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                        </div>
                                                    </div>
                                                    <h6 class="tj-demo-title"><a href="<?php echo esc_url( $burger_get( 'link_index_9_html_2', 'index-9.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_homepage_09', 'Homepage - 09' ) ); ?></a></h6>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-12">
                                                    <div class="tj-demo-thumb ">
                                                    <div class="image">
                                                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_header_demo_home_10_webp', NAKAMA_THEME_URL . '/assets/images/header/demo/home-10.webp' ) ); ?>" alt="">
                                                        <h6 class="tj-demo-badge tj-zoom-in-out-anim">
                                                        <?php echo esc_html( $burger_get( 'texto_new_3', 'New' ) ); ?>
                                                        </h6>
                                                        <div class="tj-demo-button">
                                                        <a href="<?php echo esc_url( $burger_get( 'link_index_10_html', 'index-10.html' ) ); ?>" class="tj-primary-btn header_btn">
                                                            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_view_demo_10', 'View demo' ) ); ?></span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                        </div>
                                                    </div>
                                                    <h6 class="tj-demo-title"><a href="<?php echo esc_url( $burger_get( 'link_index_10_html_2', 'index-10.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_homepage_10', 'Homepage - 10' ) ); ?></a></h6>

                                                    </div>
                                                </div>

                                                </div>
                                            </div>
                                            </div>
                                        </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="<?php echo esc_url( $burger_get( 'link_about_html', 'about.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_paginas', 'Paginas' ) ); ?></a>
                                        <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">
                                        <li>
                                            <div class="mega-menu-wrapper">

                                            <div class="mega-menu-pages-single">
                                                <div class="mega-menu-pages-single-inner">
                                                <h6 class="mega-menu-title"><?php echo esc_html( $burger_get( 'texto_main_pages', 'Main Pages' ) ); ?></h6>
                                                <div class="mega-menu-list">
                                                    <a href="<?php echo esc_url( $burger_get( 'link_about_html_2', 'about.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_about_us', 'About us' ) ); ?></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_history_html', 'history.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_our_history', 'Our history' ) ); ?> <span
                                                        class="mega-menu-badge tj-zoom-in-out-anim mega-menu-badge-hot "><?php echo esc_html( $burger_get( 'texto_hot', 'HOT' ) ); ?></span></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_team_html', 'team.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_team', 'Team' ) ); ?></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_team_details_html', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_team_details', 'Team details' ) ); ?></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_careers_html', 'careers.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_careers', 'Careers' ) ); ?> <span
                                                        class="mega-menu-badge tj-zoom-in-out-anim "><?php echo esc_html( $burger_get( 'texto_new_4', 'NEW' ) ); ?></span></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_careers_details_html', 'careers-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_careers_details', 'Careers details' ) ); ?></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_pricing_html', 'pricing.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_pricing_plan', 'Pricing plan' ) ); ?></a>
                                                    <a href="#"><?php echo esc_html( $burger_get( 'texto_feedbacks', 'Feedbacks' ) ); ?></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_faq_html', 'faq.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_faq', 'Faq' ) ); ?></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_contact', 'Contact' ) ); ?></a>


                                                </div>
                                                </div>

                                            </div>
                                            <div class="mega-menu-pages-single">
                                                <div class="mega-menu-pages-single-inner">
                                                <h6 class="mega-menu-title"><?php echo esc_html( $burger_get( 'texto_other_pages', 'Other Pages' ) ); ?></h6>
                                                <div class="mega-menu-list">
                                                    <a href="<?php echo esc_url( $burger_get( 'link_service_html', 'service.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_services', 'Services' ) ); ?></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_service_details_html', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_service_details', 'Service details' ) ); ?></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_portfolio_html', 'portfolio.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_portfolio', 'Portfolio' ) ); ?></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html', 'portfolio-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_portfolio_details', 'Portfolio details' ) ); ?></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_error_html', 'error.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_error_404', 'Error 404' ) ); ?></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_blog_grid_html', 'blog-grid.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_blog_grid', 'Blog grid' ) ); ?> <span
                                                        class="mega-menu-badge tj-zoom-in-out-anim "><?php echo esc_html( $burger_get( 'texto_new_5', 'NEW' ) ); ?></span></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_blog_html', 'blog.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_blog_standard', 'Blog standard' ) ); ?></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_blog_details', 'Blog details' ) ); ?></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_terms_and_conditions_html', 'terms-and-conditions.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_term_conditions', 'Term & conditions' ) ); ?></a>
                                                    <a href="#"><?php echo esc_html( $burger_get( 'texto_recognition', 'Recognition' ) ); ?> <span
                                                        class="mega-menu-badge tj-zoom-in-out-anim "><?php echo esc_html( $burger_get( 'texto_new_6', 'NEW' ) ); ?></span></a>


                                                </div>
                                                </div>

                                            </div>
                                            <div class=" mega-menu-pages-single">
                                                <div class="mega-menu-pages-single-inner">
                                                <h6 class="mega-menu-title"><?php echo esc_html( $burger_get( 'texto_shop_pages', 'Shop Pages' ) ); ?></h6>
                                                <div class="mega-menu-list">
                                                    <a href="<?php echo esc_url( $burger_get( 'link_shop_html', 'shop.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_shop', 'Shop' ) ); ?> <span
                                                        class="mega-menu-badge tj-zoom-in-out-anim mega-menu-badge-hot "><?php echo esc_html( $burger_get( 'texto_hot_2', 'HOT' ) ); ?></span></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html', 'shop-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_shop_details', 'Shop details' ) ); ?> </a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_cart_html', 'cart.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_cart', 'Cart' ) ); ?></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_checkout_html', 'checkout.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_checkout', 'Checkout' ) ); ?></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_wishlist_html', 'wishlist.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_wishlist', 'Wishlist' ) ); ?><span
                                                        class="mega-menu-badge tj-zoom-in-out-anim "><?php echo esc_html( $burger_get( 'texto_new_7', 'NEW' ) ); ?></span></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_login_html', 'login.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_login', 'Login' ) ); ?></a>

                                                    <a href="#"><?php echo esc_html( $burger_get( 'texto_tracking', 'Tracking' ) ); ?></a>
                                                    <a href="#"><?php echo esc_html( $burger_get( 'texto_order_confirm', 'Order confirm' ) ); ?></a>
                                                    <a href="<?php echo esc_url( $burger_get( 'link_login_html_2', 'login.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_registration', 'Registration' ) ); ?></a>
                                                    <a href="#"><?php echo esc_html( $burger_get( 'texto_coming_soon', 'Coming soon' ) ); ?></a>
                                                </div>
                                                </div>

                                            </div>
                                            <div class="col-12 col-lg-3 mega-menu-pages-single">
                                                <div class="mega-menu-pages-single-inner">
                                                <div class="feature-box">
                                                    <div class="feature-content">
                                                    <h2 class="title"><?php echo esc_html( $burger_get( 'texto_modern', 'Modern' ) ); ?></h2>
                                                    <span><?php echo esc_html( $burger_get( 'texto_home_makeover', 'Home Makeover' ) ); ?></span>
                                                    <a class="read-more feature-contact" href="tel:8321890640">
                                                        <i class="tji-phone-3"></i>
                                                        <span>+8 (321) 890-640</span>
                                                    </a>
                                                    </div>
                                                    <div class="feature-images">
                                                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_service_ad_webp', NAKAMA_THEME_URL . '/assets/images/service/service-ad.webp' ) ); ?>" alt="">
                                                    </div>
                                                </div>
                                                </div>

                                            </div>
                                            </div>
                                        </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="<?php echo esc_url( $burger_get( 'link_service_html_2', 'service.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_servicios', 'Servicios' ) ); ?></a>
                                        <ul class="sub-menu  mega-menu-service">
                                        <li> <a class="mega-menu-service-single" href="<?php echo esc_url( $burger_get( 'link_service_details_html_2', 'service-details.html' ) ); ?>"> <span
                                                class="mega-menu-service-icon">
                                                <i class="tji-service-1"></i>
                                            </span> <span class="mega-menu-service-title"><?php echo esc_html( $burger_get( 'texto_business_strategy_development', 'Business Strategy Development' ) ); ?></span> <span
                                                class="mega-menu-service-nav"><i class="tji-arrow-right-long"></i><i
                                                class="tji-arrow-right-long"></i></span></a></li>
                                        <li> <a class="mega-menu-service-single" href="<?php echo esc_url( $burger_get( 'link_service_details_html_3', 'service-details.html' ) ); ?>"> <span
                                                class="mega-menu-service-icon">
                                                <i class="tji-service-2"></i>
                                            </span> <span class="mega-menu-service-title"><?php echo esc_html( $burger_get( 'texto_customer_experience_solutions', 'Customer Experience Solutions' ) ); ?></span> <span
                                                class="mega-menu-service-nav"><i class="tji-arrow-right-long"></i><i
                                                class="tji-arrow-right-long"></i></span></a></li>
                                        <li> <a class="mega-menu-service-single" href="<?php echo esc_url( $burger_get( 'link_service_details_html_4', 'service-details.html' ) ); ?>"> <span
                                                class="mega-menu-service-icon">
                                                <i class="tji-service-3"></i>
                                            </span> <span class="mega-menu-service-title"><?php echo esc_html( $burger_get( 'texto_sustainability_and_esg_consulting', 'Sustainability and ESG Consulting' ) ); ?></span> <span
                                                class="mega-menu-service-nav"><i class="tji-arrow-right-long"></i><i
                                                class="tji-arrow-right-long"></i></span></a></li>
                                        <li> <a class="mega-menu-service-single" href="<?php echo esc_url( $burger_get( 'link_service_details_html_5', 'service-details.html' ) ); ?>"> <span
                                                class="mega-menu-service-icon">
                                                <i class="tji-service-4"></i>
                                            </span> <span class="mega-menu-service-title"><?php echo esc_html( $burger_get( 'texto_training_and_development_programs', 'Training and Development Programs' ) ); ?></span> <span
                                                class="mega-menu-service-nav"><i class="tji-arrow-right-long"></i><i
                                                class="tji-arrow-right-long"></i></span></a></li>
                                        <li> <a class="mega-menu-service-single" href="<?php echo esc_url( $burger_get( 'link_service_details_html_6', 'service-details.html' ) ); ?>"> <span
                                                class="mega-menu-service-icon">
                                                <i class="tji-service-5"></i>
                                            </span> <span class="mega-menu-service-title"><?php echo esc_html( $burger_get( 'texto_it_support_maintenance', 'IT Support & Maintenance' ) ); ?></span> <span
                                                class="mega-menu-service-nav"><i class="tji-arrow-right-long"></i><i
                                                class="tji-arrow-right-long"></i></span></a></li>
                                        <li> <a class="mega-menu-service-single" href="<?php echo esc_url( $burger_get( 'link_service_details_html_7', 'service-details.html' ) ); ?>"> <span
                                                class="mega-menu-service-icon">
                                                <i class="tji-service-6"></i>
                                            </span> <span class="mega-menu-service-title"><?php echo esc_html( $burger_get( 'texto_marketing_strategy_campaigns', 'Marketing Strategy & Campaigns' ) ); ?></span> <span
                                                class="mega-menu-service-nav"><i class="tji-arrow-right-long"></i><i
                                                class="tji-arrow-right-long"></i></span></a></li>

                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="<?php echo esc_url( $burger_get( 'link_portfolio_html_2', 'portfolio.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_productos', 'Productos' ) ); ?></a>
                                        <ul class="sub-menu">
                                        <li><a href="<?php echo esc_url( $burger_get( 'link_portfolio_html_3', 'portfolio.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_portfolio_2', 'Portfolio' ) ); ?></a></li>
                                        <li><a href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html_2', 'portfolio-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_portfolio_details_2', 'Portfolio Details' ) ); ?></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="<?php echo esc_url( $burger_get( 'link_blog_html_2', 'blog.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_blog', 'Blog' ) ); ?></a>
                                        <ul class="sub-menu">
                                        <li><a href="<?php echo esc_url( $burger_get( 'link_blog_html_3', 'blog.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_blog_2', 'Blog' ) ); ?></a></li>
                                        <li><a href="<?php echo esc_url( $burger_get( 'link_blog_grid_html_2', 'blog-grid.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_blog_grid_2', 'Blog Grid' ) ); ?></a></li>
                                        <li><a href="<?php echo esc_url( $burger_get( 'link_blog_right_sidebar_html', 'blog-right-sidebar.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_blog_right_sidebar', 'Blog Right Sidebar' ) ); ?></a></li>
                                        <li><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_2', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_blog_details_2', 'Blog Details' ) ); ?></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo esc_url( $burger_get( 'link_contacto', 'contacto' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_contacto_2', 'Contacto' ) ); ?></a></li>
                                </ul>
                            </nav>
                        </div-->

                        <div class="header-right-item d-none d-lg-inline-flex">

                            <div class="header-search">

                                <button class="search">
                                    <i class="tji-search"></i>
                                </button>

                                <button type="button" class="search_close_btn">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>

                            </div>

                            <div class="header-button">
                                <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html_2', 'contact.html' ) ); ?>">
                                    <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_contacto_3', 'Contacto' ) ); ?></span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                </a>
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

<header class="header-area header-3 header-duplicate header-sticky section-gap-x">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="header-wrapper">

                    <div class="site_logo">
                        <a class="logo" href="<?= NAKAMA_URL ?>">
                            <img src="<?= NAKAMA_OPTIONS['logo'] ?>" alt="logo">
                        </a>
                    </div>

                    <?php if( !empty(NAKAMA_OPTIONS['menu']) && count(NAKAMA_OPTIONS['menu']) > 0 ): ?>

                        <div class="menu-area d-none d-lg-inline-flex align-items-center">

                            <nav class="mainmenu">

                                <ul>

                                    <?php foreach( NAKAMA_OPTIONS['menu'] as $value ): extract( $value ) ?>

                                        <?php
                                        $current_url = home_url( add_query_arg( null, null ) );
                                        $menu_class_active = ( $item['url'] === $current_url ) ? 'current-menu-ancestor' : '';
                                        ?>

                                        <li class="<?php if( $subenlaces ): ?>has-dropdown<?php endif ?> <?= $menu_class_active ?>">

                                            <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>" target="<?= $item['target'] ?>">
                                                <?= $item['title'] ?>
                                            </a>

                                            <?php if( $menu_imagenes && $submenu_imagenes ): ?>

                                                <ul class="sub-menu header__mega-menu mega-menu">

                                                    <li>

                                                        <div class="mega-menu-wrapper">

                                                            <div class="container-fluid gap-60-25">

                                                                <div class="row">

                                                                    <?php foreach( $submenu_imagenes as $menu ): extract($menu) ?>

                                                                        <?php if( empty( $item ) ) continue ?>

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

                                                                    <?php endforeach ?>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </li>

                                                </ul>

                                            <?php endif ?>

                                            <?php if( $menu_supermenu && $submenu_supermenu ): ?>

                                                <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">

                                                    <li>

                                                        <div class="mega-menu-wrapper">

                                                            <?php foreach( $submenu_supermenu as $menu ): extract($menu) ?>

                                                                <?php if( empty( $columnas ) ) continue ?>

                                                                <?php foreach( $columnas as $columna ): extract($columna) ?>

                                                                    <div class="mega-menu-pages-single">

                                                                        <div class="mega-menu-pages-single-inner">

                                                                            <h6 class="mega-menu-title">
                                                                                <?= $titulo ?>
                                                                            </h6>

                                                                            <div class="mega-menu-list">

                                                                                <?php foreach( $menu as $_value ): extract($_value) ?>

                                                                                    <?php if( empty( $item ) ) continue ?>

                                                                                    <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>" target="<?= $item['target'] ?>">
                                                                                        <?= $item['title'] ?>
                                                                                    </a>

                                                                                <?php endforeach ?>

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                <?php endforeach ?>

                                                            <?php endforeach ?>

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

                                            <?php endif ?>

                                            <?php if( $menu_iconos && $submenu_iconos ): ?>

                                                <ul class="sub-menu mega-menu-service">

                                                    <?php foreach( $submenu_iconos as $menu ): extract( $menu ) ?>

                                                        <?php if( empty( $item ) ) continue ?>

                                                        <li>
                                                            <a class="mega-menu-service-single" href="<?= $item['url'] ?>">
                                                                <span class="mega-menu-service-icon"><?= $icono ?></span>
                                                                <span class="mega-menu-service-title"><?= $item['title'] ?></span>
                                                                <span class="mega-menu-service-nav"><i class="tji-arrow-right-long"></i><i class="tji-arrow-right-long"></i></span>
                                                            </a>
                                                        </li>

                                                    <?php endforeach ?>

                                                </ul>

                                            <?php endif ?>

                                        </li>

                                    <?php endforeach ?>

                                </ul>

                            </nav>

                        </div>

                    <?php endif ?>

                    <div class="header-right-item d-none d-lg-inline-flex">

                        <div class="header-search">

                            <button class="search">
                                <i class="tji-search"></i>
                            </button>

                            <button type="button" class="search_close_btn">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>

                        </div>

                        <div class="header-button">
                            <a class="tj-primary-btn" href="">
                                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_contacto_4', 'Contacto' ) ); ?></span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
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
<!-- end: Header Area 3 -->
