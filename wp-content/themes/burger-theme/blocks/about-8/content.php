<?php
$content_fields = array(
    'texto_get_to_know_us' => 'Get to Know Us',
    'texto_committed_delivering_our_measurable_re' => 'Committed Delivering Our Measurable Result and in Building from the Lasting Relationships a through out trusts and innovation and shared',
    'imagen_assets_images_about_h8_about_webp' => NAKAMA_THEME_URL . '/assets/images/about/h8-about.webp',
    'link_https_youtu_be_gxfatcwro_u' => 'https://youtu.be/gXFATcwrO-U',
    'texto_years_of_corporate_experience' => 'Years of Corporate Experience.',
    'texto_our_approach_to_customer_experience_co' => 'Our approach to customer experience comhensive and data-driven. We begin assessing you current customer touchpoints, identifying areas for improvement, an using insights to develop strategies in that meet your customers’ evolving needs. From optimizing digital platforms.',
    'link_about_html' => 'about.html',
    'texto_learn_more' => 'Learn More',
    'imagen_assets_images_brands_brand_1_webp' => NAKAMA_THEME_URL . '/assets/images/brands/brand-1.webp',
    'imagen_assets_images_brands_brand_2_webp' => NAKAMA_THEME_URL . '/assets/images/brands/brand-2.webp',
    'imagen_assets_images_brands_brand_3_webp' => NAKAMA_THEME_URL . '/assets/images/brands/brand-3.webp',
    'imagen_assets_images_brands_brand_4_webp' => NAKAMA_THEME_URL . '/assets/images/brands/brand-4.webp',
    'imagen_assets_images_brands_brand_5_webp' => NAKAMA_THEME_URL . '/assets/images/brands/brand-5.webp',
    'imagen_assets_images_brands_brand_6_webp' => NAKAMA_THEME_URL . '/assets/images/brands/brand-6.webp',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: About Section 8 -->
<section class="tj-about-section h8-about section-gap">
    <div class="container">
    <div class="row row-gap-4">
        <div class="col-12">
        <div class="about-content-area-2 wow fadeInUp" data-wow-delay=".3s">
            <div class="sec-heading style-3">
            <div class="row">
                <div class="col-12 col-lg-4">
                <div class="h8-about-left">
                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_get_to_know_us ); ?></span>

                </div>

                </div>
                <div class="col-12 col-lg-8">
                <div class="h8-about-content-inner">
                    <h2 class="sec-title title-highlight"><?php echo wp_kses_post( $texto_committed_delivering_our_measurable_re ); ?>
                    </h2>


                </div>

                </div>

            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-4">
                <div class="h8-about-video">
                    <img src="<?php echo esc_url( $imagen_assets_images_about_h8_about_webp ); ?>" alt="">
                    <a class="h8-about-video-btn video-popup" href="<?php echo esc_url( $link_https_youtu_be_gxfatcwro_u ); ?>"
                    data-autoplay="true" data-vbtype="video">
                    <i class="tji-play"></i>
                    </a>

                </div>
                </div>
                <div class="col-12 col-lg-8">
                <div class="h8-about-item-wrapper">

                    <div class="h8-about-item h8-about-item-counter">
                    <div class="countup-item style-2">
                        <div class="count-inner">
                        <div class="inline-content">
                            <span class="odometer countup-number" data-count="30"></span>
                            <sup class="count-plus">+</sup>
                        </div>
                        <span class="count-text"><?php echo esc_html( $texto_years_of_corporate_experience ); ?></span>
                        </div>
                    </div>
                    </div>
                    <div class="h8-about-item h8-about-item-desc">
                    <div class="h8-about-item-content">

                        <p class="desc"><?php echo wp_kses_post( $texto_our_approach_to_customer_experience_co ); ?></p>
                        <div class="about-btn-area-2 wow fadeInUp" data-wow-delay="1s">
                        <a class="tj-primary-btn" href="<?php echo esc_url( $link_about_html ); ?>">
                            <span class="btn-text"><span><?php echo esc_html( $texto_learn_more ); ?></span></span>
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
</section>
<!-- end: About Section 8 -->
