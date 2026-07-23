<?php
$content_fields = array(
    'texto_innovative_solutions_for_a_brighter_fu' => 'Innovative Solutions for a Brighter Future of Business.',
    'link_contact_html' => 'contact.html',
    'texto_get_started' => 'Get Started',
    'texto_since_2008' => 'Since 2008',
    'texto_recognized_by_industry_leaders_of_our' => 'Recognized by industry leaders, of our award-winning team has a proven record of delivering excellence across projects.',
    'imagen_assets_images_hero_h6_hero_cart_1_webp' => NAKAMA_THEME_URL . '/assets/images/hero/h6-hero-cart-1.webp',
    'link_https_youtu_be_gxfatcwro_u' => 'https://youtu.be/gXFATcwrO-U',
    'link_service_details_html' => 'service-details.html',
    'texto_business_strategies_development' => 'Business Strategies Development',
    'imagen_assets_images_hero_h6_hero_cart_2_webp' => NAKAMA_THEME_URL . '/assets/images/hero/h6-hero-cart-2.webp',
    'link_https_youtu_be_gxfatcwro_u_2' => 'https://youtu.be/gXFATcwrO-U',
    'link_service_details_html_2' => 'service-details.html',
    'texto_customer_experience_solutions' => 'Customer Experience Solutions',
    'imagen_assets_images_hero_h6_hero_cart_3_webp' => NAKAMA_THEME_URL . '/assets/images/hero/h6-hero-cart-3.webp',
    'link_https_youtu_be_gxfatcwro_u_3' => 'https://youtu.be/gXFATcwrO-U',
    'link_service_details_html_3' => 'service-details.html',
    'texto_sustainability_and_esg_consulting' => 'Sustainability and ESG Consulting',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
    'imagen_assets_images_hero_h6_hero_banner_webp' => NAKAMA_THEME_URL . '/assets/images/hero/h6-hero-banner.webp',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Banner Section 5 -->
<section class="tj-banner-section h6-hero section-gap-x">
    <div class="banner-area">
    <div class="banner-left-box">
        <div class="banner-content">
        <h1 class="banner-title title-anim"><?php echo esc_html( $texto_innovative_solutions_for_a_brighter_fu ); ?>
        </h1>
        <div class="btn-area wow fadeInUp" data-wow-delay=".8s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $link_contact_html ); ?>">
            <span class="btn-text"><span><?php echo esc_html( $texto_get_started ); ?></span></span>
            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
        </div>

        <div class="h6-hero-bottom wow fadeInLeft" data-wow-delay=".9s">
            <div class="h6-hero-history">
            <h4 class="h6-hero-history-title"><?php echo esc_html( $texto_since_2008 ); ?></h4>
            <p class="h6-hero-history-desc"><?php echo wp_kses_post( $texto_recognized_by_industry_leaders_of_our ); ?></p>
            </div>
            <div class="h6-hero-card-wrapper wow fadeInRight" data-wow-delay="1s">
            <div class="swiper h6-hero-card-slider">
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="h6-hero-card">
                    <div class="h6-hero-card-banner">
                        <img src="<?php echo esc_url( $imagen_assets_images_hero_h6_hero_cart_1_webp ); ?>" alt="">
                        <a class="h6-hero-card-video video-popup" href="<?php echo esc_url( $link_https_youtu_be_gxfatcwro_u ); ?>"
                        data-autoplay="true" data-vbtype="video">
                        <i class="tji-play"></i>
                        </a>

                    </div>
                    <div class="h6-hero-card-content">
                        <h5 class="h6-hero-card-title"><a href="<?php echo esc_url( $link_service_details_html ); ?>"><?php echo esc_html( $texto_business_strategies_development ); ?></a>
                        </h5>
                    </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h6-hero-card">
                    <div class="h6-hero-card-banner">
                        <img src="<?php echo esc_url( $imagen_assets_images_hero_h6_hero_cart_2_webp ); ?>" alt="">
                        <a class="h6-hero-card-video video-popup" href="<?php echo esc_url( $link_https_youtu_be_gxfatcwro_u_2 ); ?>"
                        data-autoplay="true" data-vbtype="video">
                        <i class="tji-play"></i>
                        </a>

                    </div>
                    <div class="h6-hero-card-content">
                        <h5 class="h6-hero-card-title"><a href="<?php echo esc_url( $link_service_details_html_2 ); ?>"><?php echo esc_html( $texto_customer_experience_solutions ); ?></a>
                        </h5>
                    </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h6-hero-card">
                    <div class="h6-hero-card-banner">
                        <img src="<?php echo esc_url( $imagen_assets_images_hero_h6_hero_cart_3_webp ); ?>" alt="">
                        <a class="h6-hero-card-video video-popup" href="<?php echo esc_url( $link_https_youtu_be_gxfatcwro_u_3 ); ?>"
                        data-autoplay="true" data-vbtype="video">
                        <i class="tji-play"></i>
                        </a>

                    </div>
                    <div class="h6-hero-card-content">
                        <h5 class="h6-hero-card-title"><a href="<?php echo esc_url( $link_service_details_html_3 ); ?>"><?php echo esc_html( $texto_sustainability_and_esg_consulting ); ?></a>
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
            <img src="<?php echo esc_url( $imagen_assets_images_shape_pattern_3_svg ); ?>" alt="">
        </div>
        </div>

    </div>
    <div class="banner-right-box">
        <div class="banner-img wow fadeInUp" data-wow-delay=".3s">
        <img data-speed=".8" src="<?php echo esc_url( $imagen_assets_images_hero_h6_hero_banner_webp ); ?>" alt="">
        </div>

    </div>
    </div>
</section>
<!-- end: Banner Section 5 -->
