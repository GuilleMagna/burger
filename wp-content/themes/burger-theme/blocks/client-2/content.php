<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Client Section 2 -->

<section class="tj-client-section section-gap">

    <div class="container-fluid client-container">

        <div class="row">
            <div class="col-12">
            <div class="client-content style-2 wow fadeIn" data-wow-delay=".3s">
                <h5 class="sec-title"><?php echo esc_html( $burger_get( 'texto_join_over', 'Join Over' ) ); ?> <span class="client-numbers">1000+</span> <?php echo esc_html( $burger_get( 'texto_companies_with', 'Companies with' ) ); ?>
                <span class="client-text"><?php echo esc_html( $burger_get( 'texto_bexon', 'Bexon' ) ); ?></span> <?php echo esc_html( $burger_get( 'texto_here', 'Here' ) ); ?>
                </h5>
            </div>
            <div class="swiper client-slider client-slider-1 wow fadeIn" data-wow-delay=".5s">
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

</section>
<!-- end: Client Section 2 -->
