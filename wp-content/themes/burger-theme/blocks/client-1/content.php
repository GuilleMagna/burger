<?php
$content_fields = array(
    'texto_join_over' => 'Join Over',
    'texto_companies_with' => 'Companies with',
    'texto_bexon' => 'Bexon',
    'texto_here' => 'Here',
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

<!-- start: Client Section -->
<section class="tj-client-section client-section-gap wow fadeInUp" data-wow-delay=".4s">
    <div class="container-fluid client-container">
    <div class="row">
        <div class="col-12">
        <div class="client-content">
            <h5 class="sec-title"><?php echo esc_html( $texto_join_over ); ?> <span class="client-numbers">1000+</span> <?php echo esc_html( $texto_companies_with ); ?>
            <span class="client-text"><?php echo esc_html( $texto_bexon ); ?></span> <?php echo esc_html( $texto_here ); ?>
            </h5>
        </div>
        <div class="swiper client-slider client-slider-1">
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
<!-- end: Client Section -->
