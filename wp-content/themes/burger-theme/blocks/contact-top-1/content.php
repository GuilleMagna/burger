<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Contact Top Section -->
<div class="tj-contact-area section-gap">

    <div class="container">

        <div class="row">
            <div class="col-12">

                <div class="sec-heading text-center">
                    <span class="sub-title wow fadeInUp" data-wow-delay=".1s">
                        <i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_informacion_de_contacto', 'Información de contacto' ) ); ?>
                    </span>
                    <h2 class="sec-title title-anim">
                        <?php echo esc_html( $burger_get( 'texto_llega_a', 'Llegá a' ) ); ?> <span><?php echo esc_html( $burger_get( 'texto_nosotros', 'nosotros' ) ); ?></span>
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
                        <?php echo esc_html( $burger_get( 'texto_direccion', 'Dirección' ) ); ?>
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
                        <?php echo esc_html( $burger_get( 'texto_email', 'Email' ) ); ?>
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
                        <?php echo esc_html( $burger_get( 'texto_telefonos', 'Teléfonos' ) ); ?>
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
