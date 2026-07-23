<?php
$content_fields = array(
    'texto_construyendo_mejores_negocios_juntos' => '¿Construyendo mejores negocios juntos?',
    'imagen_assets_images_footer_award_logo_white_1_w' => NAKAMA_THEME_URL . '/assets/images/footer/award-logo-white-1.webp',
    'imagen_assets_images_footer_award_logo_white_2_w' => NAKAMA_THEME_URL . '/assets/images/footer/award-logo-white-2.webp',
    'texto_subscribe' => 'Subscribe',
    'texto_agree_to_our' => 'Agree to our',
    'texto_terms_condition' => 'Terms & Condition?',
    'texto_subscribe_2' => 'Subscribe',
    'texto_todos_los_derechos_reservados' => 'Todos los derechos reservados.',
    'link_https_www_facebook_com' => 'https://www.facebook.com/',
    'link_https_www_instagram_com' => 'https://www.instagram.com/',
    'link_https_x_com' => 'https://x.com/',
    'link_https_www_linkedin_com' => 'https://www.linkedin.com/',
    'texto_politica_de_privacidad' => 'Política de Privacidad',
    'texto_terminos_condiciones' => 'Términos & Condiciones',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
    'imagen_assets_images_shape_h10_footer_shape_blur' => NAKAMA_THEME_URL . '/assets/images/shape/h10-footer-shape-blur-2.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>


<!-- start: Footer Section 10 -->
<footer class="tj-footer-section footer-2 h5-footer h10-footer section-gap-x">

    <div class="footer-main-area">

        <div class="container">

            <div class="row justify-content-between">

                <div class="col-xl-5 col-lg-4 col-md-6">

                    <div class="footer-widget footer-col-1">

                        <h2 class="h10-footer-title text-anim">
                            <?php echo esc_html( $texto_construyendo_mejores_negocios_juntos ); ?>
                        </h2>

                        <a class="text-btn wow fadeInUp" data-wow-delay=".3s" href="mailto:<?= NAKAMA_OPTIONS['correo'] ?>">
                            <span class="btn-text"><span><?= NAKAMA_OPTIONS['correo'] ?></span></span>
                        </a>

                        <div class="bg-shape-widget wow fadeInUpBig" data-wow-delay=".7s"></div>

                    </div>

                </div>

                <div class="col-xl-2 col-lg-3 col-md-6">

                    <div class="footer-widget footer-col-2 widget-nav-menu wow fadeInUp" data-wow-delay=".3s">

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

                    <div class="footer-widget footer-col-3 widget-nav-menu wow fadeInUp" data-wow-delay=".5s">

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

                <div class="col-xl-3 col-lg-3 col-md-6">

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

    <div class="h10-footer-subscribe-wrapper wow fadeInUp" data-wow-delay=".5s">

        <div class="container">

            <div class="row align-items-end">

                <div class="col-12 col-lg-4 col-xl-5">

                    <div class="award-logo-area ">
                        <div class="award-logo">
                            <img src="<?php echo esc_url( $imagen_assets_images_footer_award_logo_white_1_w ); ?>" alt="">
                        </div>
                        <div class="award-logo">
                            <img src="<?php echo esc_url( $imagen_assets_images_footer_award_logo_white_2_w ); ?>" alt="">
                        </div>
                    </div>

                </div>

                <div class="col-12 col-lg-8 col-xl-7">

                    <div class="footer-subscribe h5-footer-subscribe">

                        <h3 class="title text-anim">
                            <?= NAKAMA_OPTIONS['titulo_newsletter'] ?>
                        </h3>

                        <div class="subscribe-form">

                            <form action="#">

                                <input type="email" name="email" placeholder="Enter email">

                                <button class="tj-primary-btn d-none d-sm-flex" type="submit">
                                    <span class="btn-text"><span><?php echo esc_html( $texto_subscribe ); ?></span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                </button>

                                <label for="agree"><input id="agree" type="checkbox">
                                    <?php echo esc_html( $texto_agree_to_our ); ?> <a href="#"><?php echo esc_html( $texto_terms_condition ); ?></a>
                                </label>

                                <button class="tj-primary-btn d-flex d-sm-none" type="submit">
                                    <span class="btn-text"><span><?php echo esc_html( $texto_subscribe_2 ); ?></span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                </button>

                            </form>

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
                                &copy; <?= date('Y') ?> <a href="<?= NAKAMA_URL ?>" target="_blank"><?= NAKAMA_TITLE ?></a> <?php echo esc_html( $texto_todos_los_derechos_reservados ); ?>
                            </p>
                        </div>

                        <div class="social-links style-3">

                            <ul>
                                <li>
                                    <a href="<?php echo esc_url( $link_https_www_facebook_com ); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( $link_https_www_instagram_com ); ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( $link_https_x_com ); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_url( $link_https_www_linkedin_com ); ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                            </ul>

                        </div>

                        <div class="copyright-menu">
                            <ul>
                                <li><a href=""><?php echo esc_html( $texto_politica_de_privacidad ); ?></a></li>
                                <li><a href=""><?php echo esc_html( $texto_terminos_condiciones ); ?></a></li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="bg-shape-1">
        <img src="<?php echo esc_url( $imagen_assets_images_shape_pattern_2_svg ); ?>" alt="">
    </div>

    <div class="bg-shape-2">
        <img src="<?php echo esc_url( $imagen_assets_images_shape_pattern_3_svg ); ?>" alt="">
    </div>

    <div class="bg-shape-4 wow fadeInUpBig" data-wow-delay=".8s">
        <img src="<?php echo esc_url( $imagen_assets_images_shape_h10_footer_shape_blur ); ?>" alt="">
    </div>

</footer>
<!-- end: Footer Section 10 -->
