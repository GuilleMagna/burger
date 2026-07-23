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

<!-- start: Maquee Area -->
<section class="h5-maquee z-2">
    <div class="h5-maquee-inner">
    <div class="swiper h5-maquee-slider">
        <div class="swiper-wrapper  h5-maquee-slider-wrapper">
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_innovation', 'Innovation' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_success', 'Success' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_leadership', 'Leadership' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_enterprise', 'Enterprise' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_business_growth', 'Business Growth' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_corporate', 'Corporate' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_results', 'Results' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_innovation_2', 'Innovation' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_success_2', 'Success' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_leadership_2', 'Leadership' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_enterprise_2', 'Enterprise' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_business_growth_2', 'Business Growth' ) ); ?></h4>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div dir="rtl" class="h5-maquee-inner h5-maquee-inner-rtl">
    <div class="swiper h5-maquee-slider">
        <div class="swiper-wrapper  h5-maquee-slider-wrapper">
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_innovation_3', 'Innovation' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_success_3', 'Success' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_leadership_3', 'Leadership' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_enterprise_3', 'Enterprise' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_business_growth_3', 'Business Growth' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_corporate_2', 'Corporate' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_results_2', 'Results' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_innovation_4', 'Innovation' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_success_4', 'Success' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_leadership_4', 'Leadership' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_enterprise_4', 'Enterprise' ) ); ?></h4>
            </div>
            </div>
        </div>
        <div class="swiper-slide h5-maquee-slider-item">
            <div class="marquee-box">
            <div class="marquee-icon-wrapper">
                <div class="marquee-icon"><i class="tji-star"></i></div>
            </div>
            <div class="marquee-title">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_business_growth_4', 'Business Growth' ) ); ?></h4>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>

</section>
<!-- end: Maquee Area -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
