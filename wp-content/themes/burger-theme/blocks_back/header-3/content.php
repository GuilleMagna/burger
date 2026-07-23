
<!-- start: Header Area 3 -->
<header class="header-area header-3 header-absolute section-gap-x">

    <div class="header-top">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12">

                    <div class="header-top-content">

                        <p class="topbar-text">
                            <a href="">Contacto</a>
                        </p>

                        <div class="header-info">

                            <div class="info-item">
                                <span><i class="tji-location"></i></span>
                                <a href="#">Visítanos!</a>
                            </div>

                            <div class="info-item">
                                <span><i class="tji-phone-3"></i></span>
                                <a href="tel:<?= str_replace( ['-','+',' ','(',')'], '', NAKAMA_OPTIONS['telefono'] ) ?>"><?= NAKAMA_OPTIONS['telefono'] ?></a>
                            </div>

                            <div class="info-item">

                                <div class="social-links style-2">
                                    
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://x.com/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li>
                                            <a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
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
                                                                                                <span class="btn-text"><span>Ver más</span></span>
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

                        <!--div class="menu-area d-none d-lg-inline-flex align-items-center">
                            <nav id="mobile-menu" class="mainmenu">
                                <ul>
                                    <li class="has-dropdown current-menu-ancestor"><a href="">Inicio</a>
                                        <ul class="sub-menu header__mega-menu mega-menu  ">
                                        <li>
                                            <div class="mega-menu-wrapper">
                                            <div class="container-fluid gap-60-25">
                                                <div class="row">
                                                <div class="col-xl-3 col-lg-3 col-12">
                                                    <div class="tj-demo-thumb ">
                                                    <div class="image">
                                                        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/header/demo/home-1.webp" alt="">
                                                        <div class="tj-demo-button">
                                                        <a href="index.html" class="tj-primary-btn header_btn">
                                                            <span class="btn-text"><span>View demo</span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>

                                                        </a>
                                                        </div>
                                                    </div>
                                                    <h6 class="tj-demo-title"><a href="index.html">Homepage
                                                        -
                                                        01</a></h6>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-12">
                                                    <div class="tj-demo-thumb">
                                                    <div class="image">
                                                        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/header/demo/home-2.webp" alt="">
                                                        <div class="tj-demo-button">
                                                        <a href="index-2.html" class="tj-primary-btn header_btn">
                                                            <span class="btn-text"><span>View demo</span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                        </div>

                                                    </div>
                                                    <h6 class="tj-demo-title"><a href="index-2.html">Homepage
                                                        -
                                                        02</a></h6>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-12">
                                                    <div class="tj-demo-thumb">
                                                    <div class="image">
                                                        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/header/demo/home-3.webp" alt="">
                                                        <div class="tj-demo-button">
                                                        <a href="index-3.html" class="tj-primary-btn header_btn">
                                                            <span class="btn-text"><span>View demo</span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                        </div>
                                                    </div>
                                                    <h6 class="tj-demo-title"><a href="index-3.html">Homepage
                                                        -
                                                        03</a></h6>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-12">
                                                    <div class="tj-demo-thumb ">
                                                    <div class="image">
                                                        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/header/demo/home-4.webp" alt="">
                                                        <div class="tj-demo-button">
                                                        <a href="index-4.html" class="tj-primary-btn header_btn">
                                                            <span class="btn-text"><span>View demo</span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                        </div>
                                                    </div>
                                                    <h6 class="tj-demo-title"><a href="index-4.html">Homepage
                                                        -
                                                        04</a></h6>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-12">
                                                    <div class="tj-demo-thumb">
                                                    <div class="image">
                                                        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/header/demo/home-5.webp" alt="">
                                                        <div class="tj-demo-button">
                                                        <a href="index-5.html" class="tj-primary-btn header_btn">
                                                            <span class="btn-text"><span>View demo</span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                        </div>
                                                    </div>
                                                    <h6 class="tj-demo-title"><a href="index-5.html">Homepage
                                                        -
                                                        05</a></h6>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-12">
                                                    <div class="tj-demo-thumb">
                                                    <div class="image">
                                                        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/header/demo/home-6.webp" alt="">
                                                        <div class="tj-demo-button">
                                                        <a href="index-6.html" class="tj-primary-btn header_btn">
                                                            <span class="btn-text"><span>View demo</span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                        </div>

                                                    </div>
                                                    <h6 class="tj-demo-title"><a href="index-6.html">Homepage
                                                        -
                                                        06</a></h6>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-12">
                                                    <div class="tj-demo-thumb ">
                                                    <div class="image">
                                                        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/header/demo/home-7.webp" alt="">
                                                        <div class="tj-demo-button">
                                                        <a href="index-7.html" class="tj-primary-btn header_btn">
                                                            <span class="btn-text"><span>View demo</span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                        </div>
                                                    </div>
                                                    <h6 class="tj-demo-title"><a href="index-7.html">Homepage
                                                        -
                                                        07</a></h6>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-12">
                                                    <div class="tj-demo-thumb">
                                                    <div class="image">
                                                        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/header/demo/home-8.webp" alt="">
                                                        <h6 class="tj-demo-badge tj-zoom-in-out-anim">
                                                        New
                                                        </h6>
                                                        <div class="tj-demo-button">
                                                        <a href="index-8.html" class="tj-primary-btn header_btn">
                                                            <span class="btn-text"><span>View demo</span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                        </div>
                                                    </div>
                                                    <h6 class="tj-demo-title"><a href="index-8.html">Homepage
                                                        -
                                                        08</a></h6>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-12">
                                                    <div class="tj-demo-thumb">
                                                    <div class="image">
                                                        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/header/demo/home-9.webp" alt="">
                                                        <h6 class="tj-demo-badge tj-zoom-in-out-anim">
                                                        New
                                                        </h6>
                                                        <div class="tj-demo-button">
                                                        <a href="index-9.html" class="tj-primary-btn header_btn">
                                                            <span class="btn-text"><span>View demo</span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                        </div>
                                                    </div>
                                                    <h6 class="tj-demo-title"><a href="index-9.html">Homepage
                                                        -
                                                        09</a></h6>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-12">
                                                    <div class="tj-demo-thumb ">
                                                    <div class="image">
                                                        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/header/demo/home-10.webp" alt="">
                                                        <h6 class="tj-demo-badge tj-zoom-in-out-anim">
                                                        New
                                                        </h6>
                                                        <div class="tj-demo-button">
                                                        <a href="index-10.html" class="tj-primary-btn header_btn">
                                                            <span class="btn-text"><span>View demo</span></span>
                                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                        </a>
                                                        </div>
                                                    </div>
                                                    <h6 class="tj-demo-title"><a href="index-10.html">Homepage
                                                        -
                                                        10</a></h6>

                                                    </div>
                                                </div>

                                                </div>
                                            </div>
                                            </div>
                                        </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="about.html">Paginas</a>
                                        <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">
                                        <li>
                                            <div class="mega-menu-wrapper">

                                            <div class="mega-menu-pages-single">
                                                <div class="mega-menu-pages-single-inner">
                                                <h6 class="mega-menu-title">Main Pages</h6>
                                                <div class="mega-menu-list">
                                                    <a href="about.html">About us</a>
                                                    <a href="history.html">Our history <span
                                                        class="mega-menu-badge tj-zoom-in-out-anim mega-menu-badge-hot ">HOT</span></a>
                                                    <a href="team.html">Team</a>
                                                    <a href="team-details.html">Team details</a>
                                                    <a href="careers.html">Careers <span
                                                        class="mega-menu-badge tj-zoom-in-out-anim ">NEW</span></a>
                                                    <a href="careers-details.html">Careers details</a>
                                                    <a href="pricing.html">Pricing plan</a>
                                                    <a href="#">Feedbacks</a>
                                                    <a href="faq.html">Faq</a>
                                                    <a href="contact.html">Contact</a>


                                                </div>
                                                </div>

                                            </div>
                                            <div class="mega-menu-pages-single">
                                                <div class="mega-menu-pages-single-inner">
                                                <h6 class="mega-menu-title">Other Pages</h6>
                                                <div class="mega-menu-list">
                                                    <a href="service.html">Services</a>
                                                    <a href="service-details.html">Service details</a>
                                                    <a href="portfolio.html">Portfolio</a>
                                                    <a href="portfolio-details.html">Portfolio details</a>
                                                    <a href="error.html">Error 404</a>
                                                    <a href="blog-grid.html">Blog grid <span
                                                        class="mega-menu-badge tj-zoom-in-out-anim ">NEW</span></a>
                                                    <a href="blog.html">Blog standard</a>
                                                    <a href="blog-details.html">Blog details</a>
                                                    <a href="terms-and-conditions.html">Term & conditions</a>
                                                    <a href="#">Recognition <span
                                                        class="mega-menu-badge tj-zoom-in-out-anim ">NEW</span></a>


                                                </div>
                                                </div>

                                            </div>
                                            <div class=" mega-menu-pages-single">
                                                <div class="mega-menu-pages-single-inner">
                                                <h6 class="mega-menu-title">Shop Pages</h6>
                                                <div class="mega-menu-list">
                                                    <a href="shop.html">Shop <span
                                                        class="mega-menu-badge tj-zoom-in-out-anim mega-menu-badge-hot ">HOT</span></a>
                                                    <a href="shop-details.html">Shop details </a>
                                                    <a href="cart.html">Cart</a>
                                                    <a href="checkout.html">Checkout</a>
                                                    <a href="wishlist.html">Wishlist<span
                                                        class="mega-menu-badge tj-zoom-in-out-anim ">NEW</span></a>
                                                    <a href="login.html">Login</a>

                                                    <a href="#">Tracking</a>
                                                    <a href="#">Order confirm</a>
                                                    <a href="login.html">Registration</a>
                                                    <a href="#">Coming soon</a>
                                                </div>
                                                </div>

                                            </div>
                                            <div class="col-12 col-lg-3 mega-menu-pages-single">
                                                <div class="mega-menu-pages-single-inner">
                                                <div class="feature-box">
                                                    <div class="feature-content">
                                                    <h2 class="title">Modern</h2>
                                                    <span>Home Makeover</span>
                                                    <a class="read-more feature-contact" href="tel:8321890640">
                                                        <i class="tji-phone-3"></i>
                                                        <span>+8 (321) 890-640</span>
                                                    </a>
                                                    </div>
                                                    <div class="feature-images">
                                                    <img src="<?= NAKAMA_THEME_URL ?>/assets/images/service/service-ad.webp" alt="">
                                                    </div>
                                                </div>
                                                </div>

                                            </div>
                                            </div>
                                        </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="service.html">Servicios</a>
                                        <ul class="sub-menu  mega-menu-service">
                                        <li> <a class="mega-menu-service-single" href="service-details.html"> <span
                                                class="mega-menu-service-icon">
                                                <i class="tji-service-1"></i>
                                            </span> <span class="mega-menu-service-title">Business Strategy Development</span> <span
                                                class="mega-menu-service-nav"><i class="tji-arrow-right-long"></i><i
                                                class="tji-arrow-right-long"></i></span></a></li>
                                        <li> <a class="mega-menu-service-single" href="service-details.html"> <span
                                                class="mega-menu-service-icon">
                                                <i class="tji-service-2"></i>
                                            </span> <span class="mega-menu-service-title">Customer Experience Solutions</span> <span
                                                class="mega-menu-service-nav"><i class="tji-arrow-right-long"></i><i
                                                class="tji-arrow-right-long"></i></span></a></li>
                                        <li> <a class="mega-menu-service-single" href="service-details.html"> <span
                                                class="mega-menu-service-icon">
                                                <i class="tji-service-3"></i>
                                            </span> <span class="mega-menu-service-title">Sustainability and ESG Consulting</span> <span
                                                class="mega-menu-service-nav"><i class="tji-arrow-right-long"></i><i
                                                class="tji-arrow-right-long"></i></span></a></li>
                                        <li> <a class="mega-menu-service-single" href="service-details.html"> <span
                                                class="mega-menu-service-icon">
                                                <i class="tji-service-4"></i>
                                            </span> <span class="mega-menu-service-title">Training and Development Programs</span> <span
                                                class="mega-menu-service-nav"><i class="tji-arrow-right-long"></i><i
                                                class="tji-arrow-right-long"></i></span></a></li>
                                        <li> <a class="mega-menu-service-single" href="service-details.html"> <span
                                                class="mega-menu-service-icon">
                                                <i class="tji-service-5"></i>
                                            </span> <span class="mega-menu-service-title">IT Support & Maintenance</span> <span
                                                class="mega-menu-service-nav"><i class="tji-arrow-right-long"></i><i
                                                class="tji-arrow-right-long"></i></span></a></li>
                                        <li> <a class="mega-menu-service-single" href="service-details.html"> <span
                                                class="mega-menu-service-icon">
                                                <i class="tji-service-6"></i>
                                            </span> <span class="mega-menu-service-title">Marketing Strategy & Campaigns</span> <span
                                                class="mega-menu-service-nav"><i class="tji-arrow-right-long"></i><i
                                                class="tji-arrow-right-long"></i></span></a></li>

                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="portfolio.html">Productos</a>
                                        <ul class="sub-menu">
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="blog.html">Blog</a>
                                        <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contacto">Contacto</a></li>
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
                                <a class="tj-primary-btn" href="contact.html">
                                    <span class="btn-text"><span>Contacto</span></span>
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
                                                                                            <span class="btn-text"><span>Ver más</span></span>
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
                                <span class="btn-text"><span>Contacto</span></span>
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