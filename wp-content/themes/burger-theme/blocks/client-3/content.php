<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
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
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_brands_brand_1_light_webp', NAKAMA_THEME_URL . '/assets/images/brands/brand-1-light.webp' ) ); ?>" alt="">
                </div>
            </div>
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_brands_brand_2_light_webp', NAKAMA_THEME_URL . '/assets/images/brands/brand-2-light.webp' ) ); ?>" alt="">
                </div>
            </div>
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_brands_brand_3_light_webp', NAKAMA_THEME_URL . '/assets/images/brands/brand-3-light.webp' ) ); ?>" alt="">
                </div>
            </div>
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_brands_brand_4_light_webp', NAKAMA_THEME_URL . '/assets/images/brands/brand-4-light.webp' ) ); ?>" alt="">
                </div>
            </div>
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_brands_brand_5_light_webp', NAKAMA_THEME_URL . '/assets/images/brands/brand-5-light.webp' ) ); ?>" alt="">
                </div>
            </div>
            <div class="swiper-slide client-item">
                <div class="client-logo">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_brands_brand_6_light_webp', NAKAMA_THEME_URL . '/assets/images/brands/brand-6-light.webp' ) ); ?>" alt="">
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- end: Client Section 3 -->
