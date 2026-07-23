<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>


<!-- start: Footer Section 7 -->
<footer class="tj-footer-section footer-1 h7-footer section-gap-x">

    <div class="footer-main-area  h7-footer-main">

        <div class="container">

            <div class="row justify-content-between">

                <div class="col-xl-3 col-lg-4 col-md-6">

                    <div class="footer-widget wow fadeInUp" data-wow-delay=".1s">

                        <div class="footer-logo">
                            <a href="">
                                <img src="<?= NAKAMA_OPTIONS['logo_dark'] ?>" alt="Logo footer">
                            </a>
                        </div>

                        <div class="footer-text">
                            <p>
                                <?= NAKAMA_DESCRIPCION ?>
                            </p>
                        </div>

                        <div class="award-logo-area">
                            <div class="award-logo">
                                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_footer_award_logo_1_webp', NAKAMA_THEME_URL . '/assets/images/footer/award-logo-1.webp' ) ); ?>" alt="">
                            </div>
                            <div class="award-logo">
                                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_footer_award_logo_2_webp', NAKAMA_THEME_URL . '/assets/images/footer/award-logo-2.webp' ) ); ?>" alt="">
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">

                    <div class="footer-widget widget-nav-menu wow fadeInUp" data-wow-delay=".3s">

                        <h5 class="title">
                            <?= NAKAMA_OPTIONS['titulo_menu_footer_1'] ?>
                        </h5>

                        <ul>
                            <?php foreach( NAKAMA_OPTIONS['menu_footer_1'] as $menu ): extract($menu) ?>

                                <?php if( empty($item) ) continue ?>

                                <li>
                                    <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>" target="<?= $item['target'] ?>">
                                        <?= $item['title'] ?>
                                    </a>
                                </li>

                            <?php endforeach ?>
                        </ul>

                    </div>

                </div>

                <div class="col-xl-2 col-lg-4 col-md-6">

                    <div class="footer-widget widget-nav-menu wow fadeInUp" data-wow-delay=".5s">

                        <h5 class="title">
                            <?= NAKAMA_OPTIONS['titulo_menu_footer_2'] ?>
                        </h5>

                        <ul>
                            <?php foreach( NAKAMA_OPTIONS['menu_footer_2'] as $menu ): extract($menu) ?>

                                <?php if( empty($item) ) continue ?>

                                <li>
                                    <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>" target="<?= $item['target'] ?>">
                                        <?= $item['title'] ?>
                                    </a>
                                </li>

                            <?php endforeach ?>
                        </ul>

                    </div>

                </div>

                <div class="col-xl-4 col-lg-5 col-md-6">

                    <div class="footer-widget widget-subscribe wow fadeInUp" data-wow-delay=".7s">

                        <h3 class="title">
                            <?= NAKAMA_OPTIONS['titulo_newsletter'] ?>
                        </h3>

                        <div class="subscribe-form">
                            <?= do_shortcode( NAKAMA_OPTIONS['shortcode_newsletter'] ) ?>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="tj-copyright-area h7-footer-copyright">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="copyright-content-area">

                        <div class="footer-contact">

                            <ul>
                                <li>
                                    <a href="tel:<?= str_replace( [' ','+','-','(',')'], '', NAKAMA_OPTIONS['telefono'] ) ?>">
                                        <span class="icon"><i class="tji-phone-2"></i></span>
                                        <span class="text"><?= NAKAMA_OPTIONS['telefono'] ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:<?= NAKAMA_OPTIONS['correo'] ?>">
                                        <span class="icon"><i class="tji-envelop-2"></i></span>
                                        <span class="text"><?= NAKAMA_OPTIONS['correo'] ?></span>
                                    </a>
                                </li>
                            </ul>

                        </div>

                        <div class="social-links">

                            <ul>
                                <li>
                                    <a href="<?php echo esc_url( $burger_get( 'link_https_www_facebook_com', 'https://www.facebook.com/' ) ); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( $burger_get( 'link_https_www_instagram_com', 'https://www.instagram.com/' ) ); ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( $burger_get( 'link_https_x_com', 'https://x.com/' ) ); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( $burger_get( 'link_https_www_linkedin_com', 'https://www.linkedin.com/' ) ); ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                            </ul>

                        </div>

                        <div class="copyright-text">
                            <p>&copy; <?= date('Y') ?> <a href="<?= NAKAMA_URL ?>" target="_blank"><?= NAKAMA_TITLE ?></a> <?php echo esc_html( $burger_get( 'texto_todos_los_derechos_reservados', 'Todos los derechos reservados.' ) ); ?></p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="bg-shape-1">
        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_2_svg', NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg' ) ); ?>" alt="">
    </div>
    <div class="bg-shape-2">
        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_3_svg', NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg' ) ); ?>" alt="">
    </div>

</footer>
<!-- end: Footer Section 7 -->
