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

<!-- start: Banner Slider -->
<section class="tj-slider-section">
    <div class="swiper hero-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide tj-slider-item">
        <div class="slider-bg-image" data-bg-image="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_slider_1_webp', NAKAMA_THEME_URL . '/assets/images/hero/slider-1.webp' ) ); ?>"></div>
        <div class="container">
            <div class="slider-wrapper">
            <div class="slider-content">
                <h1 class="slider-title"><?php echo esc_html( $burger_get( 'texto_leading_future_for', 'Leading Future for' ) ); ?> <span><?php echo esc_html( $burger_get( 'texto_business', 'Business.' ) ); ?></span></h1>
                <div class="slider-desc"><?php echo esc_html( $burger_get( 'texto_committed_to_delivering_innovative_sol', 'Committed to delivering innovative solutions that drive success. With a focus on quality.' ) ); ?></div>
                <div class="slider-btn">
                <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_get_started', 'Get Started' ) ); ?></span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide tj-slider-item">
        <div class="slider-bg-image" data-bg-image="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_slider_2_webp', NAKAMA_THEME_URL . '/assets/images/hero/slider-2.webp' ) ); ?>"></div>
        <div class="container">
            <div class="slider-wrapper">
            <div class="slider-content">
                <h1 class="slider-title"><?php echo esc_html( $burger_get( 'texto_leading_future_for_2', 'Leading Future for' ) ); ?> <span><?php echo esc_html( $burger_get( 'texto_business_2', 'Business.' ) ); ?></span></h1>
                <div class="slider-desc"><?php echo esc_html( $burger_get( 'texto_committed_to_delivering_innovative_sol_2', 'Committed to delivering innovative solutions that drive success. With a focus on quality.' ) ); ?></div>
                <div class="slider-btn">
                <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html_2', 'contact.html' ) ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_get_started_2', 'Get Started' ) ); ?></span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide tj-slider-item">
        <div class="slider-bg-image" data-bg-image="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_slider_3_webp', NAKAMA_THEME_URL . '/assets/images/hero/slider-3.webp' ) ); ?>"></div>
        <div class="container">
            <div class="slider-wrapper">
            <div class="slider-content">
                <h1 class="slider-title"><?php echo esc_html( $burger_get( 'texto_leading_future_for_3', 'Leading Future for' ) ); ?> <span><?php echo esc_html( $burger_get( 'texto_business_3', 'Business.' ) ); ?></span></h1>
                <div class="slider-desc"><?php echo esc_html( $burger_get( 'texto_committed_to_delivering_innovative_sol_3', 'Committed to delivering innovative solutions that drive success. With a focus on quality.' ) ); ?></div>
                <div class="slider-btn">
                <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html_3', 'contact.html' ) ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_get_started_3', 'Get Started' ) ); ?></span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="hero-navigation d-inline-flex wow fadeIn" data-wow-delay="1.5s">
        <div class="slider-prev">
        <span class="anim-icon">
            <i class="tji-arrow-left"></i>
            <i class="tji-arrow-left"></i>
        </span>
        </div>
        <div class="slider-next">
        <span class="anim-icon">
            <i class="tji-arrow-right"></i>
            <i class="tji-arrow-right"></i>
        </span>
        </div>
    </div>
    </div>
    <div class="swiper hero-thumb wow fadeIn" data-wow-delay="2s">
    <div class="swiper-wrapper">
        <div class="swiper-slide thumb-item">
        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_slider_thumb_1_webp', NAKAMA_THEME_URL . '/assets/images/hero/slider-thumb-1.webp' ) ); ?>" alt="Thumbnail">
        </div>
        <div class="swiper-slide thumb-item">
        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_slider_thumb_2_webp', NAKAMA_THEME_URL . '/assets/images/hero/slider-thumb-2.webp' ) ); ?>" alt="Thumbnail">
        </div>
        <div class="swiper-slide thumb-item">
        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_slider_thumb_3_webp', NAKAMA_THEME_URL . '/assets/images/hero/slider-thumb-3.webp' ) ); ?>" alt="Thumbnail">
        </div>
    </div>
    </div>
    <div class="circle-text-wrap wow fadeInUp" data-wow-delay="1s">
    <span class="circle-text" data-bg-image="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_circle_text_webp', 'assets/images/hero/circle-text.webp' ) ); ?>"></span>
    <a class="circle-icon" href="<?php echo esc_url( $burger_get( 'link_service_html', 'service.html' ) ); ?>"><i class="tji-arrow-down-big"></i></a>
    </div>
</section>
<!-- end: Banner Slider -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
