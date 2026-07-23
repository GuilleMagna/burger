<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Banner Section 5 -->
<section class="tj-banner-section h6-hero section-gap-x">
    <div class="banner-area">
    <div class="banner-left-box">
        <div class="banner-content">
        <h1 class="banner-title title-anim"><?php echo esc_html( $burger_get( 'texto_innovative_solutions_for_a_brighter_fu', 'Innovative Solutions for a Brighter Future of Business.' ) ); ?>
        </h1>
        <div class="btn-area wow fadeInUp" data-wow-delay=".8s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>">
            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_get_started', 'Get Started' ) ); ?></span></span>
            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
        </div>

        <div class="h6-hero-bottom wow fadeInLeft" data-wow-delay=".9s">
            <div class="h6-hero-history">
            <h4 class="h6-hero-history-title"><?php echo esc_html( $burger_get( 'texto_since_2008', 'Since 2008' ) ); ?></h4>
            <p class="h6-hero-history-desc"><?php echo wp_kses_post( $burger_get( 'texto_recognized_by_industry_leaders_of_our', 'Recognized by industry leaders, of our award-winning team has a proven record of delivering excellence across projects.' ) ); ?></p>
            </div>
            <div class="h6-hero-card-wrapper wow fadeInRight" data-wow-delay="1s">
            <div class="swiper h6-hero-card-slider">
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="h6-hero-card">
                    <div class="h6-hero-card-banner">
                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_h6_hero_cart_1_webp', NAKAMA_THEME_URL . '/assets/images/hero/h6-hero-cart-1.webp' ) ); ?>" alt="">
                        <a class="h6-hero-card-video video-popup" href="<?php echo esc_url( $burger_get( 'link_https_youtu_be_gxfatcwro_u', 'https://youtu.be/gXFATcwrO-U' ) ); ?>"
                        data-autoplay="true" data-vbtype="video">
                        <i class="tji-play"></i>
                        </a>

                    </div>
                    <div class="h6-hero-card-content">
                        <h5 class="h6-hero-card-title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_strategies_development', 'Business Strategies Development' ) ); ?></a>
                        </h5>
                    </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h6-hero-card">
                    <div class="h6-hero-card-banner">
                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_h6_hero_cart_2_webp', NAKAMA_THEME_URL . '/assets/images/hero/h6-hero-cart-2.webp' ) ); ?>" alt="">
                        <a class="h6-hero-card-video video-popup" href="<?php echo esc_url( $burger_get( 'link_https_youtu_be_gxfatcwro_u_2', 'https://youtu.be/gXFATcwrO-U' ) ); ?>"
                        data-autoplay="true" data-vbtype="video">
                        <i class="tji-play"></i>
                        </a>

                    </div>
                    <div class="h6-hero-card-content">
                        <h5 class="h6-hero-card-title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_2', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_customer_experience_solutions', 'Customer Experience Solutions' ) ); ?></a>
                        </h5>
                    </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h6-hero-card">
                    <div class="h6-hero-card-banner">
                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_h6_hero_cart_3_webp', NAKAMA_THEME_URL . '/assets/images/hero/h6-hero-cart-3.webp' ) ); ?>" alt="">
                        <a class="h6-hero-card-video video-popup" href="<?php echo esc_url( $burger_get( 'link_https_youtu_be_gxfatcwro_u_3', 'https://youtu.be/gXFATcwrO-U' ) ); ?>"
                        data-autoplay="true" data-vbtype="video">
                        <i class="tji-play"></i>
                        </a>

                    </div>
                    <div class="h6-hero-card-content">
                        <h5 class="h6-hero-card-title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_3', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_sustainability_and_esg_consulting', 'Sustainability and ESG Consulting' ) ); ?></a>
                        </h5>
                    </div>
                    </div>
                </div>
                </div>
                <div class="swiper-pagination-area"></div>
            </div>

            </div>
        </div>
        <div class="bg-shape-2">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_3_svg', NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg' ) ); ?>" alt="">
        </div>
        </div>

    </div>
    <div class="banner-right-box">
        <div class="banner-img wow fadeInUp" data-wow-delay=".3s">
        <img data-speed=".8" src="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_h6_hero_banner_webp', NAKAMA_THEME_URL . '/assets/images/hero/h6-hero-banner.webp' ) ); ?>" alt="">
        </div>

    </div>
    </div>
</section>
<!-- end: Banner Section 5 -->
