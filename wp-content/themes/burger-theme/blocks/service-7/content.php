<?php
$content_fields = array(
    'subtitulo' => 'Para quién es',
    'descripcion' => 'Intia Hub está diseñado para empresas que quieren escalar con inteligencia.',
    'boton' => [],
    'items' => [],
    'texto_our_solutions' => 'Our Solutions',
    'texto_tailor_business_solutions_for_corporat' => 'Tailor Business Solutions for Corporates.',
    'texto_recognized_by_industry_leaders_our_awa' => 'Recognized by industry leaders, our award winning team has a proven.',
    'link_service_html' => 'service.html',
    'texto_more_services' => 'More services',
    'link_service_details_html' => 'service-details.html',
    'texto_business_strategy_development' => 'Business Strategy Development',
    'link_service_details_html_2' => 'service-details.html',
    'link_service_details_html_3' => 'service-details.html',
    'texto_customer_experience_solutions' => 'Customer Experience Solutions',
    'link_service_details_html_4' => 'service-details.html',
    'link_service_details_html_5' => 'service-details.html',
    'texto_sustainability_and_esg_consulting' => 'Sustainability and ESG Consulting',
    'link_service_details_html_6' => 'service-details.html',
    'link_service_details_html_7' => 'service-details.html',
    'texto_marketing_strategy_campaigns' => 'Marketing Strategy & Campaigns',
    'link_service_details_html_8' => 'service-details.html',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<?php
// Block Name: Service Section 7
?>

<!--section class="h7-service section-gap slidebar-stickiy-container">

    <div class="container">

        <div class="row">

            <div class="col-12 col-lg-4 col-xl-3">

                <div class="section-desc-wrapper slidebar-stickiy">

                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                        <?= $subtitulo ?>
                    </span>

                    <p class="desc mt-4">
                        <?= $descripcion ?>
                    </p>

                    <?php if ($boton): ?>

                        <div class="wow fadeInUp" data-wow-delay=".3s">

                            <a class="tj-primary-btn"
                               href="<?= $boton['url'] ?>"
                               title="<?= $boton['title'] ?>"
                               target="<?= $boton['target'] ?>">

                                <span class="btn-text">
                                    <span><?= $boton['title'] ?></span>
                                </span>

                                <span class="btn-icon">
                                    <i class="tji-arrow-right-long"></i>
                                </span>

                            </a>

                        </div>

                    <?php endif; ?>

                </div>

            </div>

            <div class="col-12 col-lg-8 col-xl-9">

                <div class="service-wrapper h7-service-wrapper">

                    <?php foreach ($items as $item):

                        $titulo      = $item['titulo'] ?? '';
                        $texto       = $item['descripcion'] ?? '';
                        $enlace      = $item['enlace'] ?? [];

                    ?>

                        <div class="service-item h7-service-item wow fadeInUp" data-wow-delay=".3s">

                            <div class="service-content-wrap">

                                <div class="service-title">

                                    <?php if ($enlace): ?>

                                        <h4 class="title">
                                            <a href="<?= $enlace['url'] ?>"
                                               title="<?= $enlace['title'] ?>"
                                               target="<?= $enlace['target'] ?>">
                                                <?= $titulo ?>
                                            </a>
                                        </h4>

                                    <?php else: ?>

                                        <h4 class="title">
                                            <?= $titulo ?>
                                        </h4>

                                    <?php endif; ?>

                                    <p class="desc">
                                        <?= $texto ?>
                                    </p>

                                </div>

                                <?php if ($enlace): ?>

                                    <div class="h7-service-action">

                                        <a class="text-btn"
                                           href="<?= $enlace['url'] ?>"
                                           title="<?= $enlace['title'] ?>"
                                           target="<?= $enlace['target'] ?>">

                                            <span class="btn-icon">
                                                <i class="tji-arrow-right-long"></i>
                                            </span>

                                        </a>

                                    </div>

                                <?php endif; ?>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </div>

</section-->

<section class="h7-service  section-gap slidebar-stickiy-container">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="sec-heading style-2 style-7">
            <div class="row">
            <div class="col-12 col-lg-4 col-xl-3"><span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i
                    class="tji-box"></i><?php echo esc_html( $texto_our_solutions ); ?></span></div>
            <div class="col-12 col-lg-8 col-xl-9">
                <div class="sec-title-wrapper">
                <h2 class="sec-title text-anim"><?php echo esc_html( $texto_tailor_business_solutions_for_corporat ); ?></h2>
                </div>

            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-4 col-xl-3">
        <div class="section-desc-wrapper  slidebar-stickiy">
            <p class="desc"><?php echo esc_html( $texto_recognized_by_industry_leaders_our_awa ); ?></p>
            <div class=" wow fadeInUp" data-wow-delay=".3s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $link_service_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_more_services ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>

        </div>
        <div class="col-12 col-lg-8 col-xl-9">
        <div class="service-wrapper h7-service-wrapper">
            <div class="service-item h7-service-item wow fadeInUp" data-wow-delay=".3s">
            <div class="service-content-wrap">
                <div class="service-title">
                <div class="service-icon">
                    <i class="tji-service-5"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $link_service_details_html ); ?>"><?php echo esc_html( $texto_business_strategy_development ); ?></a></h4>
                </div>
                <div class="h7-service-action">
                <a class="text-btn" href="<?php echo esc_url( $link_service_details_html_2 ); ?>">
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>
            </div>
            <div class="service-item h7-service-item wow fadeInUp" data-wow-delay=".3s">
            <div class="service-content-wrap">
                <div class="service-title">
                <div class="service-icon">
                    <i class="tji-service-2"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $link_service_details_html_3 ); ?>"><?php echo esc_html( $texto_customer_experience_solutions ); ?></a></h4>
                </div>
                <div class="h7-service-action">
                <a class="text-btn" href="<?php echo esc_url( $link_service_details_html_4 ); ?>">
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>

            </div>
            <div class="service-item h7-service-item wow fadeInUp" data-wow-delay=".3s">
            <div class="service-content-wrap">
                <div class="service-title">
                <div class="service-icon">
                    <i class="tji-service-3"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $link_service_details_html_5 ); ?>"><?php echo esc_html( $texto_sustainability_and_esg_consulting ); ?></a></h4>
                </div>
                <div class="h7-service-action">
                <a class="text-btn" href="<?php echo esc_url( $link_service_details_html_6 ); ?>">
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>

            </div>
            <div class="service-item h7-service-item wow fadeInUp" data-wow-delay=".3s">
            <div class="service-content-wrap">
                <div class="service-title">
                <div class="service-icon">
                    <i class="tji-service-4"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $link_service_details_html_7 ); ?>"><?php echo esc_html( $texto_marketing_strategy_campaigns ); ?></a></h4>
                </div>
                <div class="h7-service-action">
                <a class="text-btn" href="<?php echo esc_url( $link_service_details_html_8 ); ?>">
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>

            </div>
        </div>
        </div>
    </div>
    </div>
</section>
