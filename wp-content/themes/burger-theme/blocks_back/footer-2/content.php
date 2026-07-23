
<!-- start: Footer Section 2 -->
<footer class="tj-footer-section footer-2 section-gap-x">

    <div class="footer-top">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="footer-subscribe wow fadeInUp" data-wow-delay=".3s">

                        <div class="subscribe-logo">
                            <img src="<?= NAKAMA_OPTIONS['logo_footer'] ?>" alt="logo_footer">
                        </div>

                        <div class="subscribe-form">
                            <?= do_shortcode( NAKAMA_OPTIONS['shortcode_newsletter'] ) ?>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="footer-main-area">

        <div class="container">

            <div class="row justify-content-between">

                <div class="col-xl-3 col-md-6">

                    <div class="footer-widget footer-col-1 wow fadeInUp" data-wow-delay=".1s">

                        <div class="footer-logo">
                            <a href="">
                                <img src="<?= NAKAMA_OPTIONS['logo_footer'] ?>" alt="Logo footer">
                            </a>
                        </div>

                        <div class="footer-text">
                            <p>
                                <?= NAKAMA_DESCRIPCION ?>
                            </p>
                        </div>

                        <div class="award-logo-area">

                            <div class="award-logo">
                                <img src="<?= NAKAMA_THEME_URL ?>/assets/images/footer/award-logo-white-1.webp" alt="">
                            </div>

                            <div class="award-logo">
                                <img src="<?= NAKAMA_THEME_URL ?>/assets/images/footer/award-logo-white-2.webp" alt="">
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-xl-3 col-md-6">

                    <div class="footer-widget footer-col-2 widget-nav-menu wow fadeInUp" data-wow-delay=".3s">

                        <h5 class="title">
                            <?= NAKAMA_OPTIONS['titulo_menu_footer_1'] ?>
                        </h5>

                        <ul>
                            <? foreach( NAKAMA_OPTIONS['menu_footer_1'] as $menu ): extract($menu) ?>

                                <? if( empty($item) ) continue ?>

                                <li>
                                    <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>" target="<?= $item['target'] ?>">
                                        <?= $item['title'] ?>
                                    </a>
                                </li>

                            <? endforeach ?>

                        </ul>

                    </div>

                </div>

                <div class="col-xl-3 col-md-6">

                    <div class="footer-widget footer-col-3 widget-nav-menu wow fadeInUp" data-wow-delay=".5s">

                        <h5 class="title">
                            <?= NAKAMA_OPTIONS['titulo_menu_footer_2'] ?>
                        </h5>

                        <ul>
                            <? foreach( NAKAMA_OPTIONS['menu_footer_2'] as $menu ): extract($menu) ?>

                                <? if( empty($item) ) continue ?>

                                <li>
                                    <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>" target="<?= $item['target'] ?>">
                                        <?= $item['title'] ?>
                                    </a>
                                </li>

                            <? endforeach ?>

                        </ul>


                    </div>

                </div>

                <div class="col-xl-3 col-md-6">

                    <div class="footer-widget widget-contact wow fadeInUp" data-wow-delay=".7s">

                        <h5 class="title">
                            <?= NAKAMA_OPTIONS['titulo_informacion'] ?>
                        </h5>

                        <div class="footer-contact-info">

                            <div class="contact-item">
                                <span>
                                    <?= NAKAMA_OPTIONS['direccion'] ?>
                                </span>
                            </div>

                            <div class="contact-item">
                                <a href="tel:<?= str_replace( [' ','+','-','(',')'], '', NAKAMA_OPTIONS['telefono'] ) ?>">
                                    <?= NAKAMA_OPTIONS['telefono'] ?>
                                </a>
                                <a href="mailto:<?= NAKAMA_OPTIONS['correo'] ?>">
                                    <?= NAKAMA_OPTIONS['correo'] ?>
                                </a>
                            </div>

                            <div class="contact-item">
                                <span>
                                    <i class="tji-clock"></i> <?= NAKAMA_OPTIONS['horarios'] ?>
                                </span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="footer-marquee">

        <div class="swiper marquee-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide marquee-item">

                    <h4 class="marquee-text">
                        Crecimiento
                    </h4>

                    <div class="marquee-img">
                        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/marquee/marquee-1.webp" alt="">
                    </div>

                </div>

                <div class="swiper-slide marquee-item">

                    <h4 class="marquee-text">
                        Liderazgo
                    </h4>

                    <div class="marquee-img">
                        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/marquee/marquee-2.webp" alt="">
                    </div>

                </div>

                <div class="swiper-slide marquee-item">

                    <h4 class="marquee-text">
                        Empresa
                    </h4>

                    <div class="marquee-img">
                        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/marquee/marquee-1.webp" alt="">
                    </div>

                </div>

                <div class="swiper-slide marquee-item">

                    <h4 class="marquee-text">
                        Liderazgo
                    </h4>

                    <div class="marquee-img">
                        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/marquee/marquee-2.webp" alt="">
                    </div>

                </div>

                <div class="swiper-slide marquee-item">

                    <h4 class="marquee-text">
                        Empresa
                    </h4>

                    <div class="marquee-img">
                        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/marquee/marquee-1.webp" alt="">
                    </div>

                </div>

                <div class="swiper-slide marquee-item">

                    <h4 class="marquee-text">
                        Liderazgo
                    </h4>

                    <div class="marquee-img">
                        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/marquee/marquee-2.webp" alt="">
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="tj-copyright-area-2">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="copyright-content-area">

                        <div class="copyright-text">
                            <p>
                                &copy; <?= date('Y') ?> <a href="<?= NAKAMA_URL ?>" target="_blank"><?= NAKAMA_TITLE ?></a> Todos los derechos reservados.
                            </p>
                        </div>

                        <div class="social-links style-3">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://x.com/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="copyright-menu">
                            <ul>
                                <li><a href="contact.html">Privacy Policy</a></li>
                                <li><a href="contact.html">Terms & Condition</a></li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="bg-shape-1">
        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/shape/pattern-2.svg" alt="">
    </div>

    <div class="bg-shape-2">
        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/shape/pattern-3.svg" alt="">
    </div>

</footer>
<!-- end: Footer Section 2 -->