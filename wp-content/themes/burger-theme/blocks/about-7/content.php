<?php
$content_fields = array(
    'texto_get_to_know_us' => 'Get to Know Us',
    'texto_powering_innovations_through_out_partn' => 'Powering Innovations Through out Partnerships with our Brands and Many Companies.',
    'texto_our_mission' => 'Our Mission',
    'texto_recognized_by_industry_leaders_our_awa' => 'Recognized by industry leaders, our award-winning team has a proven record delivering excellence across projects.',
    'texto_our_vision' => 'Our Vision',
    'texto_recognized_by_industry_leaders_our_awa_2' => 'Recognized by industry leaders, our award-winning team has a proven record delivering excellence across projects.',
    'link_about_html' => 'about.html',
    'texto_know_more_us' => 'Know More Us',
    'imagen_assets_images_about_h7_about_banner_webp' => NAKAMA_THEME_URL . '/assets/images/about/h7-about-banner.webp',
    'texto_faster_growth' => 'Faster Growth',
    'texto_built_for_super_speed' => 'Built for Super Speed',
    'imagen_assets_images_about_h7_about_item_webp' => NAKAMA_THEME_URL . '/assets/images/about/h7-about-item.webp',
    'imagen_assets_images_about_h7_about_item_bg_webp' => NAKAMA_THEME_URL . '/assets/images/about/h7-about-item-bg.webp',
    'texto_enabling_startups_to_raise_25m_in_vent' => 'Enabling startups to raise M+ in venture funding.',
    'link_contact_html' => 'contact.html',
    'texto_contact_us' => 'Contact us',
    'texto_reach_worldwide' => 'Reach Worldwide',
    'texto_corporate_service_holders' => 'Corporate Service Holders',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
    'imagen_https_demo_nakamatesting_com_ar_wp_conten' => 'https://demo.nakamatesting.com.ar/wp-content/uploads/2026/04/cropped-logo-beltrando.png',
    'texto_somos_beltrando_srl' => 'Somos Beltrando SRL',
    'texto_disponemos_de_una_amplia_y_variada_gam' => 'Disponemos de una amplia y variada gama de productos y modelos.',
    'texto_nuestra_actividad' => 'Nuestra Actividad',
    'texto_cubrimos_todos_los_requerimientos_y_ne' => 'Cubrimos todos los requerimientos y necesidades de nuestros clientes.',
    'texto_fabricacion_propia' => 'Fabricación Propia',
    'texto_realizamos_modelos_especiales_o_adapta' => 'Realizamos modelos especiales o adaptables a sus condiciones de trabajo.',
    'link_about_html_2' => 'about.html',
    'texto_conozca_mas_sobre_nosotros' => 'Conozca más sobre nosotros',
    'imagen_https_demo_nakamatesting_com_ar_wp_conten_2' => 'https://demo.nakamatesting.com.ar/wp-content/uploads/2026/04/fondo-beltrando-e1777487650122.jpeg',
    'texto_medio_siglo_de_trabajo' => 'Medio siglo de trabajo',
    'texto_anos' => 'años',
    'texto_labor_ininterrumpida_en_el_mercado_nac' => 'Labor ininterrumpida en el mercado nacional e internacional.',
    'imagen_https_demo_nakamatesting_com_ar_wp_conten_3' => 'https://demo.nakamatesting.com.ar/wp-content/uploads/2026/04/pexels-cmrcn-29988967.jpg',
    'imagen_assets_images_about_h7_about_item_bg_webp_2' => NAKAMA_THEME_URL . '/assets/images/about/h7-about-item-bg.webp',
    'texto_la_actividad_principal_de_nuestra_empr' => 'La actividad principal de nuestra Empresa es la fabricación de implementos para la Industria Láctea y Alimenticia.',
    'link_contact_html_2' => 'contact.html',
    'texto_ver_mas' => 'Ver mas',
    'texto_lineas_de_produccion' => 'Líneas de Producción',
    'texto_equipamiento_para_cerveceria' => 'Equipamiento para Cervecería.',
    'texto_equipamiento_para_banos_quimicos' => 'Equipamiento para Baños Químicos.',
    'texto_bombas_de_vacio_vacuum_pumps' => 'Bombas de Vacío (Vacuum Pumps).',
    'texto_motorreductores' => 'Motorreductores.',
    'texto_bombas_centrifugas_a_diafragmas_y_auto' => 'Bombas Centrifugas, a Diafragmas y Autocentrantes.',
    'imagen_assets_images_shape_pattern_2_svg_2' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg_2' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: About Section 7
<section class="tj-about-section h7-about section-gap section-gap-x mt-10">
    <div class="container">
    <div class="row row-gap-4">
        <div class="col-12">
        <div class="about-content-area-2 wow fadeInUp" data-wow-delay=".3s">
            <div class="sec-heading style-2 style-7">
            <div class="row">
                <div class="col-12 col-lg-4">
                <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_get_to_know_us ); ?></span>
                </div>
                <div class="col-12 col-lg-8">
                <div class="h7-about-content-inner">
                    <h2 class="sec-title title-highlight"><?php echo esc_html( $texto_powering_innovations_through_out_partn ); ?>
                    </h2>
                    <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="h7-about-card">
                        <div class="h7-about-card-content">
                            <div class="h7-about-card-icon">
                            <i class="tji-dart-board"></i>
                            </div>
                            <h4 class="title"><?php echo esc_html( $texto_our_mission ); ?></h4>
                            <p class="desc"><?php echo wp_kses_post( $texto_recognized_by_industry_leaders_our_awa ); ?></p>
                        </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="h7-about-card">
                        <div class="h7-about-card-content">
                            <div class="h7-about-card-icon">
                            <i class="tji-eye-box"></i>
                            </div>
                            <h4 class="title"><?php echo esc_html( $texto_our_vision ); ?></h4>
                            <p class="desc"><?php echo wp_kses_post( $texto_recognized_by_industry_leaders_our_awa_2 ); ?></p>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="about-btn-area-2 wow fadeInUp" data-wow-delay="1s">
                    <a class="tj-primary-btn" href="<?php echo esc_url( $link_about_html ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $texto_know_more_us ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>
                </div>

                </div>
            </div>
            </div>

        </div>
        </div>
    </div>
    </div>
    <div class="container-fluid gap-15">
    <div class="row">
        <div class="col-12 col-xl-6">
        <div class="h7-about-banner  wow fadeInUp" data-wow-delay=".2s">
            <img data-speed=".8" src="<?php echo esc_url( $imagen_assets_images_about_h7_about_banner_webp ); ?>" alt="">
        </div>
        </div>
        <div class="col-12 col-xl-6">
        <div class="row h7-about-counter-wrapper">
            <div class="col-12 col-md-6">
            <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".3s">
                <p class="counter-title"><?php echo esc_html( $texto_faster_growth ); ?></p>
                <h5 class="steps">01.</h5>
                <div class="count-inner">

                <div class="inline-content">
                    <span class="odometer countup-number" data-count="8.5"></span>
                    <span class="count-plus">X</span>
                </div>
                <span class="count-text"><?php echo esc_html( $texto_built_for_super_speed ); ?></span>
                </div>
            </div>
            </div>
            <div class="col-12 col-md-6 ">
            <div data-bg-image="<?php echo esc_url( $imagen_assets_images_about_h7_about_item_webp ); ?>" class="img-box style-2  wow fadeInUp"
                data-wow-delay=".4s">

            </div>
            </div>
            <div class="col-12 col-md-6 ">
            <div class="customers-box style-2  wow fadeInUp" data-wow-delay=".5s">
                <div class="customers-bg" data-bg-image="<?php echo esc_url( $imagen_assets_images_about_h7_about_item_bg_webp ); ?>"></div>

                <h6 class="customers-text wow fadeInLeft" data-wow-delay=".6s"><?php echo esc_html( $texto_enabling_startups_to_raise_25m_in_vent ); ?></h6>
                <a class="text-btn wow fadeInLeft" data-wow-delay=".5s" href="<?php echo esc_url( $link_contact_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_contact_us ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
            <div class="col-12 col-md-6">
            <div class="countup-item style-2  wow fadeInUp" data-wow-delay=".6s">
                <p class="counter-title"><?php echo esc_html( $texto_reach_worldwide ); ?></p>
                <h5 class="steps">02.</h5>
                <div class="count-inner">
                <div class="inline-content">
                    <span class="odometer countup-number" data-count="20"></span>
                    <span class="count-plus">M</span>
                </div>
                <span class="count-text"><?php echo esc_html( $texto_corporate_service_holders ); ?></span>
                </div>
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
</section>
<!-- end: About Section 7 -->

<section class="tj-about-section h7-about section-gap section-gap-x mt-10">
    <div class="container">
        <div class="row row-gap-4">
            <div class="col-12">
            <div class="about-content-area-2 wow fadeInUp" data-wow-delay=".3s">
                <div class="sec-heading style-2 style-7">
                <div class="row">
                    <div class="col-12 col-lg-4 text-center">
                        <img src="<?php echo esc_url( $imagen_https_demo_nakamatesting_com_ar_wp_conten ); ?>" alt="" class="mb-3 w-50 mx-auto">
                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_somos_beltrando_srl ); ?></span>
                    </div>
                    <div class="col-12 col-lg-8">
                    <div class="h7-about-content-inner">
                        <h2 class="sec-title title-highlight"><?php echo esc_html( $texto_disponemos_de_una_amplia_y_variada_gam ); ?>
                        </h2>
                        <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="h7-about-card">
                            <div class="h7-about-card-content">
                                <div class="h7-about-card-icon">
                                <i class="tji-dart-board"></i>
                                </div>
                                <h4 class="title"><?php echo esc_html( $texto_nuestra_actividad ); ?></h4>
                                <p class="desc"><?php echo esc_html( $texto_cubrimos_todos_los_requerimientos_y_ne ); ?></p>
                            </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="h7-about-card">
                            <div class="h7-about-card-content">
                                <div class="h7-about-card-icon">
                                <i class="tji-eye-box"></i>
                                </div>
                                <h4 class="title"><?php echo esc_html( $texto_fabricacion_propia ); ?></h4>
                                <p class="desc"><?php echo esc_html( $texto_realizamos_modelos_especiales_o_adapta ); ?></p>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="about-btn-area-2 wow fadeInUp" data-wow-delay="1s">
                        <a class="tj-primary-btn" href="<?php echo esc_url( $link_about_html_2 ); ?>">
                            <span class="btn-text"><span><?php echo esc_html( $texto_conozca_mas_sobre_nosotros ); ?></span></span>
                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                        </a>
                        </div>
                    </div>

                    </div>
                </div>
                </div>

            </div>
            </div>
        </div>
    </div>
    <div class="container-fluid gap-15">
    <div class="row">
        <div class="col-12 col-xl-6">
        <div class="h7-about-banner  wow fadeInUp" data-wow-delay=".2s">
            <img data-speed=".8" src="<?php echo esc_url( $imagen_https_demo_nakamatesting_com_ar_wp_conten_2 ); ?>" alt="">
        </div>
        </div>
        <div class="col-12 col-xl-6">
        <div class="row h7-about-counter-wrapper">
            <div class="col-12 col-md-6">
            <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".3s">
                <p class="counter-title"><?php echo esc_html( $texto_medio_siglo_de_trabajo ); ?></p>
                <h5 class="steps">01.</h5>
                <div class="count-inner">

                <div class="inline-content">
                    <span class="odometer countup-number" data-count="50"></span>
                    <span class="count-plus"><?php echo esc_html( $texto_anos ); ?></span>
                </div>
                <span class="count-text"><?php echo esc_html( $texto_labor_ininterrumpida_en_el_mercado_nac ); ?></span>
                </div>
            </div>
            </div>
            <div class="col-12 col-md-6 ">
            <div data-bg-image="<?php echo esc_url( $imagen_https_demo_nakamatesting_com_ar_wp_conten_3 ); ?>" class="img-box style-2  wow fadeInUp"
                data-wow-delay=".4s">

            </div>
            </div>
            <div class="col-12 col-md-6 ">
            <div class="customers-box style-2  wow fadeInUp" data-wow-delay=".5s">
                <div class="customers-bg" data-bg-image="<?php echo esc_url( $imagen_assets_images_about_h7_about_item_bg_webp_2 ); ?>"></div>

                <h6 class="customers-text wow fadeInLeft" data-wow-delay=".6s">
                    <?php echo wp_kses_post( $texto_la_actividad_principal_de_nuestra_empr ); ?>
                </h6>
                <a class="text-btn wow fadeInLeft" data-wow-delay=".5s" href="<?php echo esc_url( $link_contact_html_2 ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_ver_mas ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
            <div class="col-12 col-md-6">
            <div class="countup-item style-2  wow fadeInUp" data-wow-delay=".6s">
                <p class="counter-title"><?php echo esc_html( $texto_lineas_de_produccion ); ?></p>
                <h5 class="steps">02.</h5>
                <div class="count-inner">
                <!-- <div class="inline-content">
                    <span class="odometer countup-number" data-count="5"></span>
                    <span class="count-plus">M</span>
                </div> -->
                <span class="count-text"><?php echo esc_html( $texto_equipamiento_para_cerveceria ); ?></span>
                <span class="count-text"><?php echo esc_html( $texto_equipamiento_para_banos_quimicos ); ?></span>
                <span class="count-text"><?php echo esc_html( $texto_bombas_de_vacio_vacuum_pumps ); ?></span>
                <span class="count-text"><?php echo esc_html( $texto_motorreductores ); ?></span>
                <span class="count-text"><?php echo esc_html( $texto_bombas_centrifugas_a_diafragmas_y_auto ); ?></span>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    </div>
    <div class="bg-shape-1">
    <img src="<?php echo esc_url( $imagen_assets_images_shape_pattern_2_svg_2 ); ?>" alt="">
    </div>
    <div class="bg-shape-2">
    <img src="<?php echo esc_url( $imagen_assets_images_shape_pattern_3_svg_2 ); ?>" alt="">
    </div>
</section>
