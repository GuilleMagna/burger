<?php
$content_fields = array(
    'imagen_assets_images_brands_brand_1_light_webp' => NAKAMA_THEME_URL . '/assets/images/brands/brand-1-light.webp',
    'imagen_assets_images_brands_brand_2_light_webp' => NAKAMA_THEME_URL . '/assets/images/brands/brand-2-light.webp',
    'imagen_assets_images_brands_brand_3_light_webp' => NAKAMA_THEME_URL . '/assets/images/brands/brand-3-light.webp',
    'imagen_assets_images_brands_brand_4_light_webp' => NAKAMA_THEME_URL . '/assets/images/brands/brand-4-light.webp',
    'imagen_assets_images_brands_brand_5_light_webp' => NAKAMA_THEME_URL . '/assets/images/brands/brand-5-light.webp',
    'imagen_assets_images_brands_brand_6_light_webp' => NAKAMA_THEME_URL . '/assets/images/brands/brand-6-light.webp',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Client Section 3 -->
<div class="tj-client-section-2 section-gap-x wow fadeInUp" data-wow-delay=".4s">
    <div class="container-fluid client-container">
    <div class="row">
        <div class="col-12">
        <div class="swiper client-slider client-slider-2">
            <div class="swiper-wrapper">
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $imagen_assets_images_brands_brand_1_light_webp ); ?>" alt="">
                </div>
            </div>
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $imagen_assets_images_brands_brand_2_light_webp ); ?>" alt="">
                </div>
            </div>
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $imagen_assets_images_brands_brand_3_light_webp ); ?>" alt="">
                </div>
            </div>
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $imagen_assets_images_brands_brand_4_light_webp ); ?>" alt="">
                </div>
            </div>
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $imagen_assets_images_brands_brand_5_light_webp ); ?>" alt="">
                </div>
            </div>
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $imagen_assets_images_brands_brand_6_light_webp ); ?>" alt="">
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- end: Client Section 3 -->
