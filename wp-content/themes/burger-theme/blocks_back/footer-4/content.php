
<!-- start: Footer Section 4 -->
<footer class="tj-footer-section footer-4 section-gap-x">

    <div class="footer-top">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6">

                    <div class="footer-cta">

                        <h2 class="cta-title title-anim">
                            ¿Construyendo negocios juntos?
                        </h2>

                        <a class="cta-btn wow fadeInUp" data-wow-delay=".3s" href="">

                            <div class="customers">
                                <ul>
                                    <li><img src="<?= NAKAMA_THEME_URL ?>/assets/images/testimonial/client-1.webp" alt=""></li>
                                    <li><img src="<?= NAKAMA_THEME_URL ?>/assets/images/testimonial/client-2.webp" alt=""></li>
                                    <li><img src="<?= NAKAMA_THEME_URL ?>/assets/images/testimonial/client-3.webp" alt=""></li>
                                </ul>
                            </div>

                            <span class="btn-text">
                                <span>Contacto</span> <i class="tji-arrow-right-long"></i>
                            </span>

                        </a>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="footer-widget widget-subscribe-3 wow fadeInUp" data-wow-delay=".5s">

                        <h3 class="title">
                            <?= NAKAMA_OPTIONS['titulo_newsletter'] ?>
                        </h3>

                        <div class="subscribe-form">

                            <form action="#">
                                <input type="email" name="email" placeholder="Enter email">
                                <button class="tj-primary-btn d-none d-sm-flex" type="submit">
                                <span class="btn-text"><span>Subscribe</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                </button>
                                <label for="agree"><input id="agree" type="checkbox">Agree to our <a href="#">Terms &
                                    Condition?</a></label>
                                <button class="tj-primary-btn d-flex d-sm-none " type="submit">
                                <span class="btn-text"><span>Subscribe</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                </button>
                            </form>

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

                    <div class="footer-widget wow fadeInUp" data-wow-delay=".1s">

                        <h5 class="title">
                            <?= NAKAMA_TITLE ?>
                        </h5>

                        <div class="footer-text">
                            <p>
                                <?= NAKAMA_DESCRIPCION ?>
                            </p>
                        </div>

                        <div class="award-logo-area">

                            <div class="award-logo">
                                <img src="<?= NAKAMA_THEME_URL ?>/assets/images/footer/award-logo-1.webp" alt="">
                            </div>
                            <div class="award-logo">
                                <img src="<?= NAKAMA_THEME_URL ?>/assets/images/footer/award-logo-2.webp" alt="">
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

                    <div class="footer-widget widget-contact style-2 wow fadeInUp" data-wow-delay=".7s">

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

    <div class="tj-copyright-area-4">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="copyright-content-area">

                        <div class="copyright-text">
                            <p>
                                &copy; <?= date('Y') ?> <a href="<?= NAKAMA_URL ?>" target="_blank"><?= NAKAMA_TITLE ?></a> Todos los derechos reservados.
                            </p>
                        </div>

                        <div class="social-links style-2">

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
                                <li><a href="">Pol&iacute;tica de Privacidad</a></li>
                                <li><a href="">T&eacute;rminos & Condiciones</a></li>
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
<!-- end: Footer Section 4 -->