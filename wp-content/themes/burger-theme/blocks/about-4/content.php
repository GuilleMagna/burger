<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: About Section 4 -->
<section class="tj-about-section-2 section-gap section-gap-x">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="about-content-area style-3 wow fadeInLeft" data-wow-delay=".3s">
            <div class="sec-heading style-4">
            <div class="subtitle-text">
                <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_get_to_know_us', 'Get to Know Us' ) ); ?></span>
            </div>
            <h2 class="sec-title title-highlight"><?php echo esc_html( $burger_get( 'texto_committed_delivering', 'Committed Delivering' ) ); ?> <img
                src="<?php echo esc_url( $burger_get( 'imagen_assets_images_marquee_marquee_1_webp', NAKAMA_THEME_URL . '/assets/images/marquee/marquee-1.webp' ) ); ?>" alt=""> <?php echo esc_html( $burger_get( 'texto_measurable_results_and_building_from_t', 'Measurable Results and Building from the Lasting Relationships' ) ); ?> <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_marquee_marquee_2_webp', NAKAMA_THEME_URL . '/assets/images/marquee/marquee-2.webp' ) ); ?>" alt=""> <?php echo esc_html( $burger_get( 'texto_through_trust_and_innovation_and_share', 'through trust and innovation and shared for success industries Experts.' ) ); ?>
            </h2>
            </div>
            <div class="about-bottom-area">
            <div class="customers-box style-3">
                <div class="customers">
                <ul>
                    <li class="wow fadeInLeft" data-wow-delay=".2s"><img
                        src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_1_webp', NAKAMA_THEME_URL . '/assets/images/testimonial/client-1.webp' ) ); ?>" alt=""></li>
                    <li class="wow fadeInLeft" data-wow-delay=".3s"><img
                        src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_2_webp', NAKAMA_THEME_URL . '/assets/images/testimonial/client-2.webp' ) ); ?>" alt=""></li>
                    <li class="wow fadeInLeft" data-wow-delay=".4s"><img
                        src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_3_webp', NAKAMA_THEME_URL . '/assets/images/testimonial/client-3.webp' ) ); ?>" alt=""></li>
                    <li class="wow fadeInLeft" data-wow-delay=".5s"><span><i class="tji-plus"></i></span></li>
                </ul>
                </div>
                <h6 class="customers-text wow fadeInLeft" data-wow-delay=".6s"><?php echo esc_html( $burger_get( 'texto_we_have', 'We have' ) ); ?> <span>100+</span> <?php echo esc_html( $burger_get( 'texto_happy_customer', 'happy customer.' ) ); ?>
                </h6>
            </div>
            <div class="about-btn-area-2 wow fadeInUp" data-wow-delay="1s">
                <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_about_html', 'about.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more', 'Learn More' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                <a class="tj-primary-btn transparent-btn" href="<?php echo esc_url( $burger_get( 'link_team_html', 'team.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_meet_teams', 'Meet Teams' ) ); ?></span></span>
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
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_brands_brand_1_webp', NAKAMA_THEME_URL . '/assets/images/brands/brand-1.webp' ) ); ?>" alt="">
                </div>
            </div>
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_brands_brand_2_webp', NAKAMA_THEME_URL . '/assets/images/brands/brand-2.webp' ) ); ?>" alt="">
                </div>
            </div>
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_brands_brand_3_webp', NAKAMA_THEME_URL . '/assets/images/brands/brand-3.webp' ) ); ?>" alt="">
                </div>
            </div>
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_brands_brand_4_webp', NAKAMA_THEME_URL . '/assets/images/brands/brand-4.webp' ) ); ?>" alt="">
                </div>
            </div>
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_brands_brand_5_webp', NAKAMA_THEME_URL . '/assets/images/brands/brand-5.webp' ) ); ?>" alt="">
                </div>
            </div>
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_brands_brand_6_webp', NAKAMA_THEME_URL . '/assets/images/brands/brand-6.webp' ) ); ?>" alt="">
                </div>
            </div>
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
<!-- end: About Section 4 -->
