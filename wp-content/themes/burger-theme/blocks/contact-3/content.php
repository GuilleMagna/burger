<?php
$content_fields = array(
    'texto_dejanos_tu_mensaje' => 'Dejanos tu mensaje',
    'imagen_https_www_google_com_maps_embed_pb_1m18_1' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3376.3177498608343!2d-61.7070515!3d-32.1956676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95ca3ff8b1500ce3%3A0xd705dabfd26ac8d0!2sBeltrando%20S.R.L!5e0!3m2!1ses-419!2sar!4v1778003923872!5m2!1ses-419!2sar',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Contact Section 3 -->
<section class="tj-contact-section-2 section-bottom-gap">

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="contact-form wow fadeInUp" data-wow-delay=".1s">

                    <h3 class="title">
                        <?php echo esc_html( $texto_dejanos_tu_mensaje ); ?>
                    </h3>

                    <div id="contact-form">
                        <?= do_shortcode('[contact-form-7 id="cc3f708" title="Formulario de contacto"]') ?>
                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="map-area wow fadeInUp" data-wow-delay=".3s">
                    <iframe src="<?php echo esc_url( $imagen_https_www_google_com_maps_embed_pb_1m18_1 ); ?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>

        </div>

    </div>

</section>
<!-- end: Contact Section 3 -->
