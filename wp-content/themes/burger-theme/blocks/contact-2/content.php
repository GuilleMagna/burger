<?php
$content_fields = array(
    'texto_contactanos' => 'Contáctanos',
    'texto_dejanos_tu_mensaje' => 'Dejanos tu mensaje',
    'imagen_https_www_google_com_maps_embed_pb_1m18_1' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3376.3177498608343!2d-61.7070515!3d-32.1956676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95ca3ff8b1500ce3%3A0xd705dabfd26ac8d0!2sBeltrando%20S.R.L!5e0!3m2!1ses-419!2sar!4v1778003923872!5m2!1ses-419!2sar',
    'texto_opiniones_de_clientes_4_8' => 'Opiniones de clientes (4.8',
    'texto_en_200' => '/en 200',
    'texto_trabajar_con_beltrando_srl_ha_sido_un' => 'Trabajar con Beltrando SRL ha sido un cambio radical para nuestro negocio. La profesionalidad, la atención al detalle y las soluciones innovadoras de su equipo nos han ayudado a optimizar nuestras operaciones y alcanzar nuestros objetivos más rápido de lo que imaginábamos. Realmente nos sentimos socios valiosos. Los resultados que hemos visto después de asociarnos.',
    'imagen_assets_images_testimonial_client_1_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-1.webp',
    'texto_nombre_del_cliente' => 'Nombre del cliente',
    'texto_cargo_del_cliente' => 'Cargo del cliente',
    'texto_los_resultados_que_hemos_visto_despues' => 'Los resultados que hemos visto después de asociarnos con Beltrando SRL superan nuestras expectativas. No solo entendieron nuestra visión, sino que también aportaron nuevas ideas que llevaron nuestro negocio al siguiente nivel. Su experiencia y compromiso con el éxito los convierten en un socio confiable.',
    'imagen_assets_images_testimonial_client_2_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-2.webp',
    'texto_nombre_del_cliente_2' => 'Nombre del cliente',
    'texto_cargo_del_cliente_2' => 'Cargo del cliente',
    'texto_llevamos_anos_trabajando_con_beltrando' => 'Llevamos años trabajando con Beltrando SRL y continúan ofreciendo resultados excepcionales. Su equipo es proactivo, receptivo y siempre va más allá para satisfacer nuestras necesidades. Se han convertido en un contribuyente clave para nuestro crecimiento y éxito que realmente nos ayuda."',
    'imagen_assets_images_testimonial_client_3_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-3.webp',
    'texto_nombre_del_cliente_3' => 'Nombre del cliente',
    'texto_cargo_del_cliente_3' => 'Cargo del cliente',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Contact Section 2 -->
<section class="tj-contact-section h4-contact-section section-gap section-gap-x mb-3">

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="contact-form style-3 wow fadeInUp" data-wow-delay=".4s">

                    <div class="sec-heading style-4">

                        <span class="sub-title">
                            <i class="tji-box"></i><?php echo esc_html( $texto_contactanos ); ?>
                        </span>

                        <h2 class="sec-title title-anim">
                            <?php echo esc_html( $texto_dejanos_tu_mensaje ); ?>
                        </h2>

                    </div>

                    <div id="contact-form-3">
                        <?= do_shortcode('[contact-form-7 id="cc3f708" title="Formulario de contacto"]') ?>
                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="map-area wow fadeInUp" data-wow-delay=".3s">
                    <iframe src="<?php echo esc_url( $imagen_https_www_google_com_maps_embed_pb_1m18_1 ); ?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <!--div class="testimonial-wrapper-3 wow fadeInUp" data-wow-delay=".5s">

                    <div class="swiper testimonial-slider-2 h4-testimonial">

                        <h3 class="tes-title">
                            <?php echo esc_html( $texto_opiniones_de_clientes_4_8 ); ?><span><?php echo esc_html( $texto_en_200 ); ?></span>)
                        </h3>

                        <div class="swiper-wrapper">

                            <div class="swiper-slide">

                                <div class="testimonial-item">

                                    <span class="quote-icon">
                                        <i class="tji-quote"></i>
                                    </span>

                                    <div class="desc">

                                        <p>
                                            <?php echo wp_kses_post( $texto_trabajar_con_beltrando_srl_ha_sido_un ); ?>
                                        </p>

                                    </div>

                                    <div class="testimonial-author">

                                        <div class="author-inner">

                                            <div class="author-img">
                                                <img src="<?php echo esc_url( $imagen_assets_images_testimonial_client_1_webp ); ?>" alt="">
                                            </div>

                                            <div class="author-header">
                                                <h4 class="title"><?php echo esc_html( $texto_nombre_del_cliente ); ?></h4>
                                                <span class="designation"><?php echo esc_html( $texto_cargo_del_cliente ); ?></span>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="swiper-slide">

                                <div class="testimonial-item">
                                    <span class="quote-icon"><i class="tji-quote"></i></span>
                                    <div class="desc">
                                    <p><?php echo wp_kses_post( $texto_los_resultados_que_hemos_visto_despues ); ?>
                                    </p>
                                    </div>
                                    <div class="testimonial-author">
                                    <div class="author-inner">
                                        <div class="author-img">
                                        <img src="<?php echo esc_url( $imagen_assets_images_testimonial_client_2_webp ); ?>" alt="">
                                        </div>
                                        <div class="author-header">
                                        <h4 class="title"><?php echo esc_html( $texto_nombre_del_cliente_2 ); ?></h4>
                                        <span class="designation"><?php echo esc_html( $texto_cargo_del_cliente_2 ); ?></span>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                            </div>

                            <div class="swiper-slide">

                                <div class="testimonial-item">
                                    <span class="quote-icon"><i class="tji-quote"></i></span>
                                    <div class="desc">
                                    <p><?php echo wp_kses_post( $texto_llevamos_anos_trabajando_con_beltrando ); ?>
                                    </p>
                                    </div>
                                    <div class="testimonial-author">
                                    <div class="author-inner">
                                        <div class="author-img">
                                        <img src="<?php echo esc_url( $imagen_assets_images_testimonial_client_3_webp ); ?>" alt="">
                                        </div>
                                        <div class="author-header">
                                        <h4 class="title"><?php echo esc_html( $texto_nombre_del_cliente_3 ); ?></h4>
                                        <span class="designation"><?php echo esc_html( $texto_cargo_del_cliente_3 ); ?></span>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="testimonial-navigation d-flex">

                            <div class="slider-prev">
                                <span class="anim-icon">
                                    <i class="tji-arrow-left"></i>
                                    <i class="tji-arrow-left"></i>
                                </span>
                            </div>

                            <div class="slider-next">
                                <span class="anim-icon">
                                    <i class="tji-arrow-right"></i>
                                    <i class="tji-arrow-right"></i>
                                </span>
                            </div>

                        </div>

                    </div>

                </div-->

            </div>

        </div>

    </div>

    <div class="bg-shape-1">
        <img src="<?php echo esc_url( $imagen_assets_images_shape_pattern_2_svg ); ?>" alt="">
    </div>

    <div class="bg-shape-2">
        <img src="<?php echo esc_url( $imagen_assets_images_shape_pattern_3_svg ); ?>" alt="">
    </div>

</section>
<!-- end: Contact Section 2 -->
