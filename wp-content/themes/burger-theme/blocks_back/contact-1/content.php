<!-- start: Contact Section -->
<section class="tj-contact-section section-gap section-gap-x">

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <div class="global-map wow fadeInUp" data-wow-delay=".3s">

                    <div class="global-map-img">

                        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/bg/map.svg" alt="Image">
                        
                        <!--div class="location-indicator loc-1">

                            <div class="location-tooltip">
                                <span>Head office:</span>
                                <p>993 Renner Burg, West Rond, MT 94251-030, USA.</p>
                                <a href="tel:10095447818">P: +1 (009) 544-7818</a>
                                <a href="mailto:support@bexon.com">M: support@bexon.com</a>
                            </div>

                        </div>

                        <div class="location-indicator loc-2">
                            <div class="location-tooltip">
                                <span>Regional office:</span>
                                <p>Hessisch Lichtenau 37235, Kassel, Germany.</p>
                                <a href="tel:10098801810">P: +1 (009) 880-1810</a>
                                <a href="mailto:support@bexon.com">M: support@bexon.com</a>
                            </div>
                        </div-->

                        <div class="location-indicator loc-3">
                            <div class="location-tooltip">
                                <span>Argentina:</span>
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
                            <i class="tji-box"></i> Contáctanos
                        </span>

                        <h2 class="sec-title title-anim">
                            Dejanos tu mensaje <span></span>
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
        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/shape/pattern-2.svg" alt="">
    </div>

    <div class="bg-shape-2">
        <img src="<?= NAKAMA_THEME_URL ?>/assets/images/shape/pattern-3.svg" alt="">
    </div>

</section>
<!-- end: Contact Section -->