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

<!-- start: Banner Section 3 -->
<section class="h4-banner-section section-gap-x">
    <div class="h4-banner-area">
    <div class="h4-banner-content">
        <span class="sub-title wow fadeInUp" data-wow-delay=".2s">
        <i class="tji-box"></i> <?php echo esc_html( $burger_get( 'texto_solutions_that_deliver', 'Solutions That Deliver' ) ); ?>
        </span>
        <h1 class="banner-title text-anim"><?php echo esc_html( $burger_get( 'texto_empowering_your_business_with_smart_so', 'Empowering Your Business with Smart Solutions.' ) ); ?></h1>
        <div class="banner-desc-area wow fadeInUp" data-wow-delay=".7s">
        <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>">
            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_get_started', 'Get Started' ) ); ?></span></span>
            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
        </a>
        <div class="banner-desc"><?php echo esc_html( $burger_get( 'texto_committed_to_delivering_innovative_sol', 'Committed to delivering innovative solutions that drive success. With a focus on quality.' ) ); ?>
        </div>
        </div>
    </div>
    <div class="banner-img-area">
        <div class="banner-img">
        <img data-speed="0.8" src="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_h4_hero_img_webp', NAKAMA_THEME_URL . '/assets/images/hero/h4-hero-img.webp' ) ); ?>" alt="">
        </div>
        <div class="h4-rating-box wow fadeInUp" data-wow-delay="1s">
        <h2 class="title">4.8</h2>
        <p class="desc"><?php echo esc_html( $burger_get( 'texto_global_rating_based_on_20k_reviews', 'Global rating based on 20k+ reviews' ) ); ?></p>
        </div>
    </div>
    </div>
    <div class="bg-shape-1">
    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_2_svg', NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg' ) ); ?>" alt="">
    </div>
    <div class="bg-shape-2">
    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_3_svg', NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg' ) ); ?>" alt="">
    </div>
</section>
<!-- end: Banner Section 3 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
