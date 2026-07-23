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

<!-- start: Cta Section 3 -->
<section class="h9-cta-section section-gap-x">
    <div class="cta-bg" data-bg-image="<?php echo esc_url( $burger_get( 'imagen_assets_images_cta_h9_cta_bg_webp', 'assets/images/cta/h9-cta-bg.webp' ) ); ?>"></div>
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="cta-content">
            <h2 class="title text-anim"><span><?php echo esc_html( $burger_get( 'texto_let_s_talk_to', 'Let’s Talk to' ) ); ?></span> <span class="cta-img wow fadeInUp"
                data-wow-delay=".3s"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_1_webp', NAKAMA_THEME_URL . '/assets/images/team/team-1.webp' ) ); ?>" alt=""><a class="tji-icon-btn"
                href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>"><i class="tji-arrow-right-long"></i></a></span>
            <span><?php echo esc_html( $burger_get( 'texto_our_expert', 'Our Expert.' ) ); ?></span>
            </h2>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Cta Section 3 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
