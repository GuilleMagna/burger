<?php
$content_fields = array(
    'texto_our_partnership' => 'Our PARTNERSHIP',
    'texto_powering_innovation_through_partnershi' => 'Powering Innovation Through Partnerships with Brands and Many Companies.',
    'link_about_html' => 'about.html',
    'texto_more_partners' => 'More Partners',
    'imagen_assets_images_brands_h5_brand_1_webp' => NAKAMA_THEME_URL . '/assets/images/brands/h5-brand-1.webp',
    'imagen_assets_images_brands_h5_brand_2_webp' => NAKAMA_THEME_URL . '/assets/images/brands/h5-brand-2.webp',
    'imagen_assets_images_brands_h5_brand_3_webp' => NAKAMA_THEME_URL . '/assets/images/brands/h5-brand-3.webp',
    'imagen_assets_images_brands_h5_brand_4_webp' => NAKAMA_THEME_URL . '/assets/images/brands/h5-brand-4.webp',
    'imagen_assets_images_brands_h5_brand_5_webp' => NAKAMA_THEME_URL . '/assets/images/brands/h5-brand-5.webp',
    'imagen_assets_images_brands_h5_brand_6_webp' => NAKAMA_THEME_URL . '/assets/images/brands/h5-brand-6.webp',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
    'imagen_assets_images_shape_shape_blur_svg' => NAKAMA_THEME_URL . '/assets/images/shape/shape-blur.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: About Section 5 -->
<section class="h5-about section-gap section-gap-x">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="about-content-area style-3 h5-about-content">
            <div class="sec-heading style-3">
            <div class="subtitle-text">
                <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_our_partnership ); ?></span>
                <div class="h5-about-counter"><span class="odometer" data-count="30">0</span><span
                    class="h5-about-counter-symbol">+</span>
                </div>
            </div>
            <div class="h5-about-content-right">
                <div class="h5-sec-title-wrapper">
                <h2 class="sec-title title-highlight"><?php echo esc_html( $texto_powering_innovation_through_partnershi ); ?>
                </h2>
                <div class="about-btn-area-2 wow fadeInUp" data-wow-delay="1s">
                    <a class="tj-primary-btn" href="<?php echo esc_url( $link_about_html ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $texto_more_partners ); ?></span></span>
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
    <div class="swiper client-slider client-slider-3">
    <div class="swiper-wrapper">
        <div class="swiper-slide client-item h5-client-item">
        <div class="client-logo">
            <img src="<?php echo esc_url( $imagen_assets_images_brands_h5_brand_1_webp ); ?>" alt="">
        </div>
        </div>
        <div class="swiper-slide client-item h5-client-item">
        <div class="client-logo">
            <img src="<?php echo esc_url( $imagen_assets_images_brands_h5_brand_2_webp ); ?>" alt="">
        </div>
        </div>
        <div class="swiper-slide client-item h5-client-item">
        <div class="client-logo">
            <img src="<?php echo esc_url( $imagen_assets_images_brands_h5_brand_3_webp ); ?>" alt="">
        </div>
        </div>
        <div class="swiper-slide client-item h5-client-item">
        <div class="client-logo">
            <img src="<?php echo esc_url( $imagen_assets_images_brands_h5_brand_4_webp ); ?>" alt="">
        </div>
        </div>
        <div class="swiper-slide client-item h5-client-item">
        <div class="client-logo">
            <img src="<?php echo esc_url( $imagen_assets_images_brands_h5_brand_5_webp ); ?>" alt="">
        </div>
        </div>
        <div class="swiper-slide client-item h5-client-item">
        <div class="client-logo">
            <img src="<?php echo esc_url( $imagen_assets_images_brands_h5_brand_6_webp ); ?>" alt="">
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
    <div class="bg-shape-3">
    <img src="<?php echo esc_url( $imagen_assets_images_shape_shape_blur_svg ); ?>" alt="">
    </div>
</section>
<!-- end: About Section 5 -->
