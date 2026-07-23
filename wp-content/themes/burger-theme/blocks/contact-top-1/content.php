<?php
$content_fields = array(
    'texto_informacion_de_contacto' => 'Información de contacto',
    'texto_llega_a' => 'Llegá a',
    'texto_nosotros' => 'nosotros',
    'texto_direccion' => 'Dirección',
    'texto_email' => 'Email',
    'texto_telefonos' => 'Teléfonos',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Contact Top Section -->
<div class="tj-contact-area section-gap">

    <div class="container">

        <div class="row">
            <div class="col-12">

                <div class="sec-heading text-center">
                    <span class="sub-title wow fadeInUp" data-wow-delay=".1s">
                        <i class="tji-box"></i><?php echo esc_html( $texto_informacion_de_contacto ); ?>
                    </span>
                    <h2 class="sec-title title-anim">
                        <?php echo esc_html( $texto_llega_a ); ?> <span><?php echo esc_html( $texto_nosotros ); ?></span>
                    </h2>
                </div>

            </div>

        </div>

        <div class="row row-gap-4">

            <div class="col-xl-4 col-lg-6 col-sm-6">

                <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".3s">

                    <div class="contact-icon">
                        <i class="tji-location-3"></i>
                    </div>

                    <h3 class="contact-title">
                        <?php echo esc_html( $texto_direccion ); ?>
                    </h3>

                    <p>
                        <?= NAKAMA_OPTIONS['direccion'] ?>
                    </p>
                </div>

            </div>

            <div class="col-xl-4 col-lg-6 col-sm-6">

                <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".5s">

                    <div class="contact-icon">
                        <i class="tji-envelop"></i>
                    </div>

                    <h3 class="contact-title">
                        <?php echo esc_html( $texto_email ); ?>
                    </h3>

                    <ul class="contact-list">
                        <li>
                            <a href="mailto:<?= NAKAMA_OPTIONS['correo'] ?>">
                                <?= NAKAMA_OPTIONS['correo'] ?>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:<?= NAKAMA_OPTIONS['correo_dos'] ?>">
                                <?= NAKAMA_OPTIONS['correo_dos'] ?>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>

            <div class="col-xl-4 col-lg-6 col-sm-6">

                <div class="contact-item style-2 wow fadeInUp" data-wow-delay=".7s">

                    <div class="contact-icon">
                        <i class="tji-phone"></i>
                    </div>

                    <h3 class="contact-title">
                        <?php echo esc_html( $texto_telefonos ); ?>
                    </h3>

                    <ul class="contact-list">
                        <li>
                            <a href="tel:<?= str_replace( [' ','+','-','(',')'], '', NAKAMA_OPTIONS['telefono'] ) ?>">
                                <?= NAKAMA_OPTIONS['telefono'] ?>
                            </a>
                        </li>
                        <li>
                            <a href="tel:<?= str_replace( [' ','+','-','(',')'], '', NAKAMA_OPTIONS['telefono_dos'] ) ?>">
                                <?= NAKAMA_OPTIONS['telefono_dos'] ?>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- end: Contact Top Section -->
