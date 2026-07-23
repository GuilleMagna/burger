<!DOCTYPE html>
<html lang="es">

<head>

    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= NAKAMA_URL ?>" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta name="author" content="NAKAMA">

    <title><?= NAKAMA_TITLE ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= NAKAMA_THEME_URL ?>/assets/images/fav.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="<?= NAKAMA_OPTIONS['url_font_family'] ?>" rel="stylesheet">

    <style>
        <?= generate_dynamic_css() ?>
    </style>

    <link rel="stylesheet" href="<?= NAKAMA_THEME_URL ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= NAKAMA_THEME_URL ?>/assets/css/font-awesome-pro.min.css">
    <link rel="stylesheet" href="<?= NAKAMA_THEME_URL ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= NAKAMA_THEME_URL ?>/assets/css/bexon-icons.css">
    <link rel="stylesheet" href="<?= NAKAMA_THEME_URL ?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= NAKAMA_THEME_URL ?>/assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?= NAKAMA_THEME_URL ?>/assets/css/venobox.min.css">
    <link rel="stylesheet" href="<?= NAKAMA_THEME_URL ?>/assets/css/odometer-theme-default.css">
    <link rel="stylesheet" href="<?= NAKAMA_THEME_URL ?>/assets/css/meanmenu.css">
    <link rel="stylesheet" href="<?= NAKAMA_THEME_URL ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?= NAKAMA_THEME_URL ?>/assets/css/shop.css" />

    <?php wp_head() ?>

    <?= NAKAMA_OPTIONS['header_scripts'] ?>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NSPKKZ6T');</script>
    <!-- End Google Tag Manager -->

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSPKKZ6T"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <div class="body-overlay"></div>

    <!-- Preloader Start -->
    <!--div class="tj-preloader is-loading">
        <div class="tj-preloader-inner">
            <div class="tj-preloader-ball-wrap">
                <div class="tj-preloader-ball-inner-wrap">
                    <div class="tj-preloader-ball-inner">
                        <div class="tj-preloader-ball"></div>
                    </div>
                    <div class="tj-preloader-ball-shadow"></div>
                </div>
                <div id="tj-weave-anim" class="tj-preloader-text">Cargando...</div>
            </div>
        </div>
        <div class="tj-preloader-overlay"></div>
    </div-->
    <!-- Preloader end -->

    <!-- back to top start -->
    <!--div id="tj-back-to-top"><span id="tj-back-to-top-percentage"></span></div-->
    <!-- back to top end -->

    <!-- start: Search Popup -->
    <div class="search-popup-overlay"></div>
    <!-- end: Search Popup -->

    <!-- start: Offcanvas Menu -->
    <div class="tj-offcanvas-area d-none d-lg-block">

        <div class="hamburger_bg"></div>

        <div class="hamburger_wrapper">

            <div class="hamburger_inner">

                <div class="hamburger_top d-flex align-items-center justify-content-between">

                    <div class="hamburger_logo">
                        <a href="<?= NAKAMA_URL ?>" class="mobile_logo">
                            <img src="<?= NAKAMA_OPTIONS['logo'] ?>" alt="Logo">
                        </a>
                    </div>

                    <div class="hamburger_close">
                        <button class="hamburger_close_btn"><i class="fa-thin fa-times"></i></button>
                    </div>

                </div>

                <div class="offcanvas-text">
                    <p>
                        <?= NAKAMA_DESCRIPCION ?>
                    </p>
                </div>

                <div class="hamburger-search-area">

                    <h5 class="hamburger-title">
                        Buscar ahora!
                    </h5>

                    <div class="hamburger_search">
                        <form method="get" action="">
                            <button type="submit"><i class="tji-search"></i></button>
                            <input type="search" autocomplete="off" name="s" value="" placeholder="Buscar...">
                        </form>
                    </div>

                </div>

                <div class="hamburger-infos">

                    <h5 class="hamburger-title">
                        Contactos
                    </h5>

                    <div class="contact-info">

                        <div class="contact-item">
                            <span class="subtitle">Teléfono</span>
                            <a class="contact-link" href="tel:<?= str_replace( [' ','(',')','-','+'], '', NAKAMA_OPTIONS['telefono'] ) ?>"><?= NAKAMA_OPTIONS['telefono'] ?></a>
                        </div>

                        <div class="contact-item">
                            <span class="subtitle">Email</span>
                            <a class="contact-link" href="mailto:<?= NAKAMA_OPTIONS['correo'] ?>"><?= NAKAMA_OPTIONS['correo'] ?></a>
                        </div>

                        <div class="contact-item">
                            <span class="subtitle">Dirección</span>
                            <span class="contact-link"><?= NAKAMA_OPTIONS['direccion'] ?></span>
                        </div>

                    </div>

                </div>

            </div>

            <div class="hamburger-socials">

                <h5 class="hamburger-title">
                    Seguinos
                </h5>

                <div class="social-links style-3">

                    <ul>
                        <li>
                            <a href="<?= NAKAMA_OPTIONS['redes']['facebook'] ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="<?= NAKAMA_OPTIONS['redes']['instagram'] ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="<?= NAKAMA_OPTIONS['redes']['x'] ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li>
                            <a href="<?= NAKAMA_OPTIONS['redes']['linkedin'] ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                    
                </div>

            </div>

        </div>

    </div>
    <!-- end: Offcanvas Menu -->

    <!-- start: Hamburger Menu -->
    <div class="hamburger-area d-lg-none">

        <div class="hamburger_bg"></div>

        <div class="hamburger_wrapper">

            <div class="hamburger_inner">

                <div class="hamburger_top d-flex align-items-center justify-content-between">

                    <div class="hamburger_logo">
                        <a href="<?= NAKAMA_URL ?>" class="mobile_logo">
                            <img src="<?= NAKAMA_OPTIONS['logo'] ?>" alt="Logo">
                        </a>
                    </div>

                    <div class="hamburger_close">
                        <button class="hamburger_close_btn"><i class="fa-thin fa-times"></i></button>
                    </div>

                </div>

                <div class="hamburger_menu">
                    <div class="mobile_menu"></div>
                </div>

                <div class="hamburger-infos">

                    <h5 class="hamburger-title">
                        Contactos
                    </h5>

                    <div class="contact-info">

                        <div class="contact-item">
                            <span class="subtitle">Teléfono</span>
                            <a class="contact-link" href="tel:<?= str_replace( [' ','(',')','-','+'], '', NAKAMA_OPTIONS['telefono'] ) ?>"><?= NAKAMA_OPTIONS['telefono'] ?></a>
                        </div>

                        <div class="contact-item">
                            <span class="subtitle">Correo</span>
                            <a class="contact-link" href="mailto:<?= NAKAMA_OPTIONS['correo'] ?>"><?= NAKAMA_OPTIONS['correo'] ?></a>
                        </div>

                        <div class="contact-item">
                            <span class="subtitle">Dirección</span>
                            <span class="contact-link"><?= NAKAMA_OPTIONS['direccion'] ?></span>
                        </div>
                        
                    </div>

                </div>

            </div>

            <div class="hamburger-socials">

                <h5 class="hamburger-title">
                    Seguinos
                </h5>

                <div class="social-links style-3">

                    <ul>
                        <li>
                            <a href="<?= NAKAMA_OPTIONS['redes']['facebook'] ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="<?= NAKAMA_OPTIONS['redes']['instagram'] ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="<?= NAKAMA_OPTIONS['redes']['x'] ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li>
                            <a href="<?= NAKAMA_OPTIONS['redes']['linkedin'] ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                    </ul>

                </div>

            </div>

        </div>

    </div>
    <!-- end: Hamburger Menu -->
