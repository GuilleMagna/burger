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

<!-- start: Marquee Section 3 -->
<section class="tj-marquee-section section-gap-x">
    <div class="marquee-wrapper">
    <div class="swiper marquee-slider">
        <div class="swiper-wrapper">
        <div class="swiper-slide marquee-item">
            <h4 class="marquee-text"><?php echo esc_html( $burger_get( 'texto_growth', 'Growth' ) ); ?></h4>
            <div class="marquee-img">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_marquee_marquee_1_webp', NAKAMA_THEME_URL . '/assets/images/marquee/marquee-1.webp' ) ); ?>" alt="">
            </div>
        </div>
        <div class="swiper-slide marquee-item">
            <h4 class="marquee-text"><?php echo esc_html( $burger_get( 'texto_leadership', 'Leadership' ) ); ?></h4>
            <div class="marquee-img">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_marquee_marquee_2_webp', NAKAMA_THEME_URL . '/assets/images/marquee/marquee-2.webp' ) ); ?>" alt="">
            </div>
        </div>
        <div class="swiper-slide marquee-item">
            <h4 class="marquee-text"><?php echo esc_html( $burger_get( 'texto_enterprise', 'Enterprise' ) ); ?></h4>
            <div class="marquee-img">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_marquee_marquee_1_webp_2', NAKAMA_THEME_URL . '/assets/images/marquee/marquee-1.webp' ) ); ?>" alt="">
            </div>
        </div>
        <div class="swiper-slide marquee-item">
            <h4 class="marquee-text"><?php echo esc_html( $burger_get( 'texto_leadership_2', 'Leadership' ) ); ?></h4>
            <div class="marquee-img">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_marquee_marquee_2_webp_2', NAKAMA_THEME_URL . '/assets/images/marquee/marquee-2.webp' ) ); ?>" alt="">
            </div>
        </div>
        <div class="swiper-slide marquee-item">
            <h4 class="marquee-text"><?php echo esc_html( $burger_get( 'texto_enterprise_2', 'Enterprise' ) ); ?></h4>
            <div class="marquee-img">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_marquee_marquee_1_webp_3', NAKAMA_THEME_URL . '/assets/images/marquee/marquee-1.webp' ) ); ?>" alt="">
            </div>
        </div>
        <div class="swiper-slide marquee-item">
            <h4 class="marquee-text"><?php echo esc_html( $burger_get( 'texto_leadership_3', 'Leadership' ) ); ?></h4>
            <div class="marquee-img">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_marquee_marquee_2_webp_3', NAKAMA_THEME_URL . '/assets/images/marquee/marquee-2.webp' ) ); ?>" alt="">
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Marquee Section 3 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
