<?php
$content_fields = array(
    'texto_ver_mas' => 'Ver más',
    'texto_contacto' => 'Contacto',
    'texto_ver_mas_2' => 'Ver más',
    'texto_contacto_2' => 'Contacto',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>


<!-- start: Header Area 10 -->
<header class="header-area header-3 h10-header header-absolute section-gap-x">

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
                                                                                                <span class="btn-text"><span><?php echo esc_html( $texto_ver_mas ); ?></span></span>
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
                                    <span class="btn-text"><span><?php echo esc_html( $texto_contacto ); ?></span></span>
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

<header class="header-area header-3 h10-header  header-duplicate header-sticky section-gap-x">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="header-wrapper">

                    <div class="site_logo">
                        <a class="logo" href="<?= NAKAMA_URL ?>">
                            <img src="<?= NAKAMA_OPTIONS['logo_dark'] ?>" alt="logo">
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
                                                                                            <span class="btn-text"><span><?php echo esc_html( $texto_ver_mas_2 ); ?></span></span>
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
                                <span class="btn-text"><span><?php echo esc_html( $texto_contacto_2 ); ?></span></span>
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
<!-- end: Header Area 10 -->
