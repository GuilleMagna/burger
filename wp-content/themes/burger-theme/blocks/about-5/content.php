<?php
$__block_fields = function_exists('get_fields') ? (array) get_fields() : [];
$__block_cache_key = 'acf_block_' . md5(($block['id'] ?? basename(__DIR__)) . serialize($__block_fields));

if (($__block_cached_html = get_transient($__block_cache_key)) !== false) {
    echo $__block_cached_html;
    return;
}

ob_start();
?>
<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: About Section 5 -->
<section class="h5-about section-gap section-gap-x">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="about-content-area style-3 h5-about-content">
            <div class="sec-heading style-3">
            <div class="subtitle-text">
                <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_our_partnership', 'Our PARTNERSHIP' ) ); ?></span>
                <div class="h5-about-counter"><span class="odometer" data-count="30">0</span><span
                    class="h5-about-counter-symbol">+</span>
                </div>
            </div>
            <div class="h5-about-content-right">
                <div class="h5-sec-title-wrapper">
                <h2 class="sec-title title-highlight"><?php echo esc_html( $burger_get( 'texto_powering_innovation_through_partnershi', 'Powering Innovation Through Partnerships with Brands and Many Companies.' ) ); ?>
                </h2>
                <div class="about-btn-area-2 wow fadeInUp" data-wow-delay="1s">
                    <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_about_html', 'about.html' ) ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_more_partners', 'More Partners' ) ); ?></span></span>
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
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_brands_h5_brand_1_webp', NAKAMA_THEME_URL . '/assets/images/brands/h5-brand-1.webp' ) ); ?>" alt="">
        </div>
        </div>
        <div class="swiper-slide client-item h5-client-item">
        <div class="client-logo">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_brands_h5_brand_2_webp', NAKAMA_THEME_URL . '/assets/images/brands/h5-brand-2.webp' ) ); ?>" alt="">
        </div>
        </div>
        <div class="swiper-slide client-item h5-client-item">
        <div class="client-logo">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_brands_h5_brand_3_webp', NAKAMA_THEME_URL . '/assets/images/brands/h5-brand-3.webp' ) ); ?>" alt="">
        </div>
        </div>
        <div class="swiper-slide client-item h5-client-item">
        <div class="client-logo">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_brands_h5_brand_4_webp', NAKAMA_THEME_URL . '/assets/images/brands/h5-brand-4.webp' ) ); ?>" alt="">
        </div>
        </div>
        <div class="swiper-slide client-item h5-client-item">
        <div class="client-logo">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_brands_h5_brand_5_webp', NAKAMA_THEME_URL . '/assets/images/brands/h5-brand-5.webp' ) ); ?>" alt="">
        </div>
        </div>
        <div class="swiper-slide client-item h5-client-item">
        <div class="client-logo">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_brands_h5_brand_6_webp', NAKAMA_THEME_URL . '/assets/images/brands/h5-brand-6.webp' ) ); ?>" alt="">
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
    <div class="bg-shape-3">
    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_shape_blur_svg', NAKAMA_THEME_URL . '/assets/images/shape/shape-blur.svg' ) ); ?>" alt="">
    </div>
</section>
<!-- end: About Section 5 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
