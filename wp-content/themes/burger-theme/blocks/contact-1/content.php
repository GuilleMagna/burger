<?php
$content_fields = array(
    'imagen_assets_images_bg_map_svg' => NAKAMA_THEME_URL . '/assets/images/bg/map.svg',
    'texto_head_office' => 'Head office:',
    'texto_993_renner_burg_west_rond_mt_94251_030' => '993 Renner Burg, West Rond, MT 94251-030, USA.',
    'texto_p_1_009_544_7818' => 'P: +1 (009) 544-7818',
    'texto_m_support_bexon_com' => 'M: support@bexon.com',
    'texto_regional_office' => 'Regional office:',
    'texto_hessisch_lichtenau_37235_kassel_german' => 'Hessisch Lichtenau 37235, Kassel, Germany.',
    'texto_p_1_009_880_1810' => 'P: +1 (009) 880-1810',
    'texto_m_support_bexon_com_2' => 'M: support@bexon.com',
    'texto_argentina' => 'Argentina:',
    'texto_contactanos' => 'Contáctanos',
    'texto_dejanos_tu_mensaje' => 'Dejanos tu mensaje',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Contact Section -->
<section class="tj-contact-section section-gap section-gap-x">

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="global-map wow fadeInUp" data-wow-delay=".3s">

                    <div class="global-map-img">

                        <img src="<?php echo esc_url( $imagen_assets_images_bg_map_svg ); ?>" alt="Image">

                        <!--div class="location-indicator loc-1">

                            <div class="location-tooltip">
                                <span><?php echo esc_html( $texto_head_office ); ?></span>
                                <p><?php echo esc_html( $texto_993_renner_burg_west_rond_mt_94251_030 ); ?></p>
                                <a href="tel:10095447818"><?php echo esc_html( $texto_p_1_009_544_7818 ); ?></a>
                                <a href="mailto:support@bexon.com"><?php echo esc_html( $texto_m_support_bexon_com ); ?></a>
                            </div>

                        </div>

                        <div class="location-indicator loc-2">
                            <div class="location-tooltip">
                                <span><?php echo esc_html( $texto_regional_office ); ?></span>
                                <p><?php echo esc_html( $texto_hessisch_lichtenau_37235_kassel_german ); ?></p>
                                <a href="tel:10098801810"><?php echo esc_html( $texto_p_1_009_880_1810 ); ?></a>
                                <a href="mailto:support@bexon.com"><?php echo esc_html( $texto_m_support_bexon_com_2 ); ?></a>
                            </div>
                        </div-->

                        <div class="location-indicator loc-3">
                            <div class="location-tooltip">
                                <span><?php echo esc_html( $texto_argentina ); ?></span>
                                <p><?= NAKAMA_OPTIONS['direccion'] ?></p>
                                <a href="tel:<?= str_replace( [' ','+','-','(',')'], '', NAKAMA_OPTIONS['telefono'] ) ?>"><?= NAKAMA_OPTIONS['telefono'] ?></a>
                                <a href="mailto:<?= NAKAMA_OPTIONS['direccion'] ?>"><?= NAKAMA_OPTIONS['correo'] ?></a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="contact-form style-2 wow fadeInUp" data-wow-delay=".4s">

                    <div class="sec-heading">

                        <span class="sub-title text-white">
                            <i class="tji-box"></i> <?php echo esc_html( $texto_contactanos ); ?>
                        </span>

                        <h2 class="sec-title title-anim">
                            <?php echo esc_html( $texto_dejanos_tu_mensaje ); ?> <span></span>
                        </h2>

                    </div>

                    <div id="contact-form-2">
                        <?= do_shortcode('[contact-form-7 id="cc3f708" title="Formulario de contacto"]') ?>
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

</section>
<!-- end: Contact Section -->
