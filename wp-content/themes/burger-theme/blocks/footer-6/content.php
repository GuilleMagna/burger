<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>


<!-- start: Footer Section 6 -->
<footer class="tj-footer-section footer-2 h5-footer h6-footer section-gap-x">

    <div class="footer-main-area">

        <div class="container">

            <div class="row justify-content-between">

                <div class="col-xl-4 col-lg-4 col-md-6">

                    <div class="footer-widget widget-subscribe h6-footer-subscribe wow fadeInUp" data-wow-delay=".3s">

                        <h3 class="title text-anim">
                            <?= NAKAMA_OPTIONS['titulo_newsletter'] ?>
                        </h3>

                        <div class="subscribe-form">
                            <?= do_shortcode( NAKAMA_OPTIONS['shortcode_newsletter'] ) ?>
                        </div>

                    </div>

                </div>

                <div class="col-xl-3  col-lg-3 col-md-6">

                    <div class="footer-widget footer-col-2 widget-nav-menu h6-footer-col-2 wow fadeInUp" data-wow-delay=".3s">

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

                <div class="col-xl-2 col-lg-2 col-md-6">

                    <div class="footer-widget footer-col-3 widget-nav-menu h6-footer-col-3 wow fadeInUp" data-wow-delay=".5s">

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

                <div class="col-xl-3 col-lg-3  col-md-6">

                    <div class="footer-widget widget-contact h6-footer-contact wow fadeInUp" data-wow-delay=".7s">

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

    <div class="h6-footer-logo-area">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="h6-footer-logo">
                        <a href="" class="wow fadeInUpBig" data-wow-delay=".3s">
                            <img src="<?= NAKAMA_OPTIONS['logo_footer_dark'] ?>" alt="logo_footer">
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="tj-copyright-area-2 h5-footer-copyright h6-footer-copyright">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="copyright-content-area">

                        <div class="copyright-text">
                            <p>
                                &copy; <?= date('Y') ?> <a href="<?= NAKAMA_URL ?>" target="_blank"><?= NAKAMA_TITLE ?></a> <?php echo esc_html( $burger_get( 'texto_todos_los_derechos_reservados', 'Todos los derechos reservados.' ) ); ?>
                            </p>
                        </div>

                        <div class="social-links style-3 style-6">
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

                        <div class="copyright-menu">
                            <ul>
                                <?php foreach( NAKAMA_OPTIONS['menu_footer_debajo'] as $menu ): extract($menu) ?>
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

    <div class="bg-shape-3 wow fadeInUpBig" data-wow-delay="1s">
        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_footer_bg_shape_blur', NAKAMA_THEME_URL . '/assets/images/shape/footer-bg-shape-blur.svg' ) ); ?>" alt="">
    </div>

</footer>
<!-- end: Footer Section 6 -->
