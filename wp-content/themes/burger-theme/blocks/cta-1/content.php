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

<!-- start: Cta Section -->
<section class="tj-cta-section">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="cta-area">
            <div class="cta-content">
            <h2 class="title title-anim"><?php echo esc_html( $burger_get( 'texto_let_s_build_future_together', 'Let’s Build Future Together.' ) ); ?></h2>
            <div class="cta-btn wow fadeInUp" data-wow-delay=".6s">
                <a class="tj-primary-btn btn-dark" href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_get_started_now', 'Get Started Now' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
            <div class="cta-img">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_cta_cta_bg_webp', NAKAMA_THEME_URL . '/assets/images/cta/cta-bg.webp' ) ); ?>" alt="">
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Cta Section -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
