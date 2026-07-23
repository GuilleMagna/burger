<?php
$content_fields = array(
    'imagen_assets_images_about_h10_about_banner_webp' => NAKAMA_THEME_URL . '/assets/images/about/h10-about-banner.webp',
    'texto_about_our_company' => 'ABOUT OUR COMPANY',
    'texto_powering_innovation_through_partnershi' => 'Powering Innovation Through Partnerships with our Brands and Many Companies.',
    'imagen_assets_images_about_h10_about_banner_webp_2' => NAKAMA_THEME_URL . '/assets/images/about/h10-about-banner.webp',
    'imagen_assets_images_testimonial_client_1_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-1.webp',
    'imagen_assets_images_testimonial_client_2_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-2.webp',
    'imagen_assets_images_testimonial_client_3_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-3.webp',
    'texto_recognized_by_industryaward_leaders_aw' => 'Recognized by industryaward leaders, award winning team has be a proven record.',
    'texto_reach_worldwide_empower_dreams_everywh' => 'Reach Worldwide empower dreams everywhere.',
    'texto_faster_growth_starts_smart_solutions_t' => 'Faster Growth starts smart solutions today.',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: About Section 10 -->
<section class="h10-about section-gap">
    <div class="container">
    <div class="row flex-column-reverse flex-md-row ">
        <div class="col-12 col-lg-5 d-block d-md-none d-lg-block">
        <div class="about-img-area h10-about-banner wow bounceInLeft" data-wow-delay=".3s">
            <div class="about-img overflow-hidden">
            <img data-speed=".8" src="<?php echo esc_url( $imagen_assets_images_about_h10_about_banner_webp ); ?>" alt="">
            </div>
        </div>
        </div>
        <div class="col-12 col-lg-7">
        <div class="h10-about-content-wrapper">
            <div class="sec-heading style-3 ">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i> <?php echo esc_html( $texto_about_our_company ); ?></span>
            <h2 class="sec-title title-highlight wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $texto_powering_innovation_through_partnershi ); ?>
            </h2>
            </div>
            <div class="row">
            <div class="col-12 col-md-6 d-none d-md-block d-lg-none">
                <div class="about-img-area h10-about-banner wow bounceInLeft" data-wow-delay=".3s">
                <div class="about-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_about_h10_about_banner_webp_2 ); ?>" alt="">
                </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-12">
                <div class="h10-about-content">
                <div class="customers-box style-3 h10-about-clients wow fadeInUp" data-wow-delay=".4s">
                    <div class="customers">
                    <ul>
                        <li class="wow fadeInLeft" data-wow-delay=".2s"><img
                            src="<?php echo esc_url( $imagen_assets_images_testimonial_client_1_webp ); ?>" alt=""></li>
                        <li class="wow fadeInLeft" data-wow-delay=".3s"><img
                            src="<?php echo esc_url( $imagen_assets_images_testimonial_client_2_webp ); ?>" alt=""></li>
                        <li class="wow fadeInLeft" data-wow-delay=".4s"><img
                            src="<?php echo esc_url( $imagen_assets_images_testimonial_client_3_webp ); ?>" alt=""></li>
                        <li class="wow fadeInLeft" data-wow-delay=".5s"><span><i class="tji-plus"></i></span></li>
                    </ul>
                    </div>

                </div>

                <p class="desc wow fadeInUp" data-wow-delay=".4s"><?php echo esc_html( $texto_recognized_by_industryaward_leaders_aw ); ?></p>
                <div class="h9-about-funfact h10-about-funfact">
                    <div class="countup-item">
                    <div class="inline-content">
                        <span class="odometer countup-number" data-count="20"></span>
                        <span class="count-plus">M</span>
                    </div>
                    <span class="count-text"><?php echo esc_html( $texto_reach_worldwide_empower_dreams_everywh ); ?></span>
                    </div>
                    <div class="countup-item">
                    <div class="inline-content">
                        <span class="odometer countup-number" data-count="8.5"></span>
                        <span class="count-plus">X</span>
                    </div>
                    <span class="count-text"><?php echo esc_html( $texto_faster_growth_starts_smart_solutions_t ); ?></span>
                    </div>
                </div>
                </div>
            </div>
            </div>

        </div>

        </div>
    </div>
    </div>


</section>
<!-- end: About Section 10 -->
