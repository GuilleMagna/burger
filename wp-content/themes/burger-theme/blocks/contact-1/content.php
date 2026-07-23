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

<!-- start: Contact Section -->
<section class="tj-contact-section section-gap section-gap-x">

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="global-map wow fadeInUp" data-wow-delay=".3s">

                    <div class="global-map-img">

                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_bg_map_svg', NAKAMA_THEME_URL . '/assets/images/bg/map.svg' ) ); ?>" alt="Image">
                        
                        <!--div class="location-indicator loc-1">

                            <div class="location-tooltip">
                                <span><?php echo esc_html( $burger_get( 'texto_head_office', 'Head office:' ) ); ?></span>
                                <p><?php echo esc_html( $burger_get( 'texto_993_renner_burg_west_rond_mt_94251_030', '993 Renner Burg, West Rond, MT 94251-030, USA.' ) ); ?></p>
                                <a href="tel:10095447818"><?php echo esc_html( $burger_get( 'texto_p_1_009_544_7818', 'P: +1 (009) 544-7818' ) ); ?></a>
                                <a href="mailto:support@bexon.com"><?php echo esc_html( $burger_get( 'texto_m_support_bexon_com', 'M: support@bexon.com' ) ); ?></a>
                            </div>

                        </div>

                        <div class="location-indicator loc-2">
                            <div class="location-tooltip">
                                <span><?php echo esc_html( $burger_get( 'texto_regional_office', 'Regional office:' ) ); ?></span>
                                <p><?php echo esc_html( $burger_get( 'texto_hessisch_lichtenau_37235_kassel_german', 'Hessisch Lichtenau 37235, Kassel, Germany.' ) ); ?></p>
                                <a href="tel:10098801810"><?php echo esc_html( $burger_get( 'texto_p_1_009_880_1810', 'P: +1 (009) 880-1810' ) ); ?></a>
                                <a href="mailto:support@bexon.com"><?php echo esc_html( $burger_get( 'texto_m_support_bexon_com_2', 'M: support@bexon.com' ) ); ?></a>
                            </div>
                        </div-->

                        <div class="location-indicator loc-3">
                            <div class="location-tooltip">
                                <span><?php echo esc_html( $burger_get( 'texto_argentina', 'Argentina:' ) ); ?></span>
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
                            <i class="tji-box"></i> <?php echo esc_html( $burger_get( 'texto_contactanos', 'Contáctanos' ) ); ?>
                        </span>

                        <h2 class="sec-title title-anim">
                            <?php echo esc_html( $burger_get( 'texto_dejanos_tu_mensaje', 'Dejanos tu mensaje' ) ); ?> <span></span>
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
        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_2_svg', NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg' ) ); ?>" alt="">
    </div>

    <div class="bg-shape-2">
        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_3_svg', NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg' ) ); ?>" alt="">
    </div>

</section>
<!-- end: Contact Section -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
