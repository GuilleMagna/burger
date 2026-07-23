<?php
$content_fields = array(
    'texto_get_to_know_us' => 'Get to Know Us',
    'texto_committed_delivering' => 'Committed Delivering',
    'imagen_assets_images_marquee_marquee_1_webp' => NAKAMA_THEME_URL . '/assets/images/marquee/marquee-1.webp',
    'texto_measurable_results_and_building_from_t' => 'Measurable Results and Building from the Lasting Relationships',
    'imagen_assets_images_marquee_marquee_2_webp' => NAKAMA_THEME_URL . '/assets/images/marquee/marquee-2.webp',
    'texto_through_trust_and_innovation_and_share' => 'through trust and innovation and shared for success industries Experts.',
    'imagen_assets_images_testimonial_client_1_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-1.webp',
    'imagen_assets_images_testimonial_client_2_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-2.webp',
    'imagen_assets_images_testimonial_client_3_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-3.webp',
    'texto_we_have' => 'We have',
    'texto_happy_customer' => 'happy customer.',
    'link_about_html' => 'about.html',
    'texto_learn_more' => 'Learn More',
    'link_team_html' => 'team.html',
    'texto_meet_teams' => 'Meet Teams',
    'imagen_assets_images_brands_brand_1_webp' => NAKAMA_THEME_URL . '/assets/images/brands/brand-1.webp',
    'imagen_assets_images_brands_brand_2_webp' => NAKAMA_THEME_URL . '/assets/images/brands/brand-2.webp',
    'imagen_assets_images_brands_brand_3_webp' => NAKAMA_THEME_URL . '/assets/images/brands/brand-3.webp',
    'imagen_assets_images_brands_brand_4_webp' => NAKAMA_THEME_URL . '/assets/images/brands/brand-4.webp',
    'imagen_assets_images_brands_brand_5_webp' => NAKAMA_THEME_URL . '/assets/images/brands/brand-5.webp',
    'imagen_assets_images_brands_brand_6_webp' => NAKAMA_THEME_URL . '/assets/images/brands/brand-6.webp',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: About Section 4 -->
<section class="tj-about-section-2 section-gap section-gap-x">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="about-content-area style-3 wow fadeInLeft" data-wow-delay=".3s">
            <div class="sec-heading style-4">
            <div class="subtitle-text">
                <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_get_to_know_us ); ?></span>
            </div>
            <h2 class="sec-title title-highlight"><?php echo esc_html( $texto_committed_delivering ); ?> <img
                src="<?php echo esc_url( $imagen_assets_images_marquee_marquee_1_webp ); ?>" alt=""> <?php echo esc_html( $texto_measurable_results_and_building_from_t ); ?> <img src="<?php echo esc_url( $imagen_assets_images_marquee_marquee_2_webp ); ?>" alt=""> <?php echo esc_html( $texto_through_trust_and_innovation_and_share ); ?>
            </h2>
            </div>
            <div class="about-bottom-area">
            <div class="customers-box style-3">
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
                <h6 class="customers-text wow fadeInLeft" data-wow-delay=".6s"><?php echo esc_html( $texto_we_have ); ?> <span>100+</span> <?php echo esc_html( $texto_happy_customer ); ?>
                </h6>
            </div>
            <div class="about-btn-area-2 wow fadeInUp" data-wow-delay="1s">
                <a class="tj-primary-btn" href="<?php echo esc_url( $link_about_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_learn_more ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                <a class="tj-primary-btn transparent-btn" href="<?php echo esc_url( $link_team_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_meet_teams ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="container-fluid client-container-2 gap-top">
    <div class="row">
        <div class="col-12">
        <div class="swiper client-slider client-slider-3">
            <div class="swiper-wrapper">
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $imagen_assets_images_brands_brand_1_webp ); ?>" alt="">
                </div>
            </div>
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $imagen_assets_images_brands_brand_2_webp ); ?>" alt="">
                </div>
            </div>
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $imagen_assets_images_brands_brand_3_webp ); ?>" alt="">
                </div>
            </div>
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $imagen_assets_images_brands_brand_4_webp ); ?>" alt="">
                </div>
            </div>
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $imagen_assets_images_brands_brand_5_webp ); ?>" alt="">
                </div>
            </div>
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $imagen_assets_images_brands_brand_6_webp ); ?>" alt="">
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
<!-- end: About Section 4 -->
