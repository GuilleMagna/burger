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


<!-- start: Footer Section 5 -->
<footer class="tj-footer-section footer-2 h5-footer section-gap-x">

    <div class="footer-top">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="footer-subscribe h5-footer-subscribe wow fadeInUp" data-wow-delay=".3s">

                        <h2 class="title text-anim">
                            <?= NAKAMA_OPTIONS['titulo_newsletter'] ?>
                        </h2>

                        <div class="subscribe-form">

                            <form action="#">
                                <input type="email" name="email" placeholder="Enter email">
                                <button class="tj-primary-btn d-none d-sm-flex" type="submit">
                                    <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_subscribe_now', 'Subscribe Now' ) ); ?></span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                </button>
                                <label for="agree"><input id="agree" type="checkbox"><?php echo esc_html( $burger_get( 'texto_agree_to_our', 'Agree to our' ) ); ?> <a href="#"><?php echo esc_html( $burger_get( 'texto_terms_condition', 'Terms & Condition?' ) ); ?></a></label>
                                <button class="tj-primary-btn d-flex d-sm-none" type="submit">
                                    <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_subscribe_now_2', 'Subscribe Now' ) ); ?></span></span>
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
                        
                    <div class="footer-widget footer-col-1 wow fadeInUp" data-wow-delay=".1s">

                        <div class="footer-logo">
                            <a href="">
                                <img src="<?= NAKAMA_OPTIONS['logo_footer'] ?>" alt="Logos">
                            </a>
                        </div>

                        <div class="footer-text">
                            <p>
                                <?= NAKAMA_DESCRIPCION ?>
                            </p>
                        </div>

                        <div class="award-logo-area">

                            <div class="award-logo">
                                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_footer_award_logo_white_1_w', NAKAMA_THEME_URL . '/assets/images/footer/award-logo-white-1.webp' ) ); ?>" alt="">
                            </div>

                            <div class="award-logo">
                                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_footer_award_logo_white_2_w', NAKAMA_THEME_URL . '/assets/images/footer/award-logo-white-2.webp' ) ); ?>" alt="">
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

    <div class="tj-copyright-area-2 h5-footer-copyright">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="copyright-content-area">

                        <div class="copyright-text">
                            <p>
                                &copy; <?= date('Y') ?> <a href="<?= NAKAMA_URL ?>" target="_blank"><?= NAKAMA_TITLE ?></a> <?php echo esc_html( $burger_get( 'texto_todos_los_derechos_reservados', 'Todos los derechos reservados.' ) ); ?>
                            </p>
                        </div>

                        <div class="social-links style-3">

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
                                <li><a href=""><?php echo esc_html( $burger_get( 'texto_politica_de_privacidad', 'Política de Privacidad' ) ); ?></a></li>
                                <li><a href=""><?php echo esc_html( $burger_get( 'texto_terminos_condiciones', 'Términos & Condiciones' ) ); ?></a></li>
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

</footer>
<!-- end: Footer Section 5 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
