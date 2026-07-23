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
                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_get_to_know_us', 'Get to Know Us' ) ); ?></span>

                </div>

                </div>
                <div class="col-12 col-lg-8">
                <div class="h8-about-content-inner">
                    <h2 class="sec-title title-highlight"><?php echo wp_kses_post( $burger_get( 'texto_committed_delivering_our_measurable_re', 'Committed Delivering Our Measurable Result and in Building from the Lasting Relationships a through out trusts and innovation and shared' ) ); ?>
                    </h2>


                </div>

                </div>

            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-4">
                <div class="h8-about-video">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_about_h8_about_webp', NAKAMA_THEME_URL . '/assets/images/about/h8-about.webp' ) ); ?>" alt="">
                    <a class="h8-about-video-btn video-popup" href="<?php echo esc_url( $burger_get( 'link_https_youtu_be_gxfatcwro_u', 'https://youtu.be/gXFATcwrO-U' ) ); ?>"
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
                        <span class="count-text"><?php echo esc_html( $burger_get( 'texto_years_of_corporate_experience', 'Years of Corporate Experience.' ) ); ?></span>
                        </div>
                    </div>
                    </div>
                    <div class="h8-about-item h8-about-item-desc">
                    <div class="h8-about-item-content">

                        <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_our_approach_to_customer_experience_co', 'Our approach to customer experience comhensive and data-driven. We begin assessing you current customer touchpoints, identifying areas for improvement, an using insights to develop strategies in that meet your customers’ evolving needs. From optimizing digital platforms.' ) ); ?></p>
                        <div class="about-btn-area-2 wow fadeInUp" data-wow-delay="1s">
                        <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_about_html', 'about.html' ) ); ?>">
                            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more', 'Learn More' ) ); ?></span></span>
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
<!-- end: About Section 8 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
