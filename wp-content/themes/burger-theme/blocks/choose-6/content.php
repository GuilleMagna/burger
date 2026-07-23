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

<!-- start: Choose Section 6 -->
<section id="choose" class="tj-choose-section h8-choose  section-gap-x">
    <div class="container-fluid gap-0">
    <div class="row align-items-center flex-column-reverse flex-lg-row">
        <div class="col-12 col-lg-6 align-self-stretch">
        <div class="h8-choose-banner">
            <img data-speed=".8" class="wow fadeInLeftBig" data-wow-delay=".3s"
            src="<?php echo esc_url( $burger_get( 'imagen_assets_images_choose_h8_choose_bnner_webp', NAKAMA_THEME_URL . '/assets/images/choose/h8-choose-bnner.webp' ) ); ?>" alt="">
        </div>
        </div>

        <div class="col-12 col-lg-6">
        <div class="h8-choose-content-wrapper">
            <div class="sec-heading style-3">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_choose_the_best', 'Choose the Best' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_empowering_business_with_expertise', 'Empowering Business with Expertise.' ) ); ?></h2>
            </div>
            <div class="h8-choose-box-wrapper ">
            <div class="choose-box h6-choose-box h8-choose-box  wow fadeInUp" data-wow-delay=".3s">
                <div class="choose-content">
                <div class="choose-icon">
                    <i class="tji-innovative"></i>
                </div>
                <div>
                    <h4 class="title"><?php echo esc_html( $burger_get( 'texto_innovative_solutions', 'Innovative Solutions' ) ); ?></h4>
                    <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_our_team_is_always_available_to_addres', 'Our team is always available to address your concerns, providing quick and effective solution to keep your business expert option.' ) ); ?></p>
                </div>
                </div>
            </div>
            <div class="choose-box h6-choose-box h8-choose-box  wow fadeInUp" data-wow-delay=".4s">
                <div class="choose-content">
                <div class="choose-icon">
                    <i class="tji-award"></i>
                </div>
                <div>
                    <h4 class="title"><?php echo esc_html( $burger_get( 'texto_winning_expertise', 'Winning Expertise' ) ); ?></h4>
                    <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_recognized_by_industry_leaders_our_awa', 'Recognized by industry leaders, our award-winning team has a proven record of delivering excellence across projects base work' ) ); ?></p>
                </div>
                </div>
            </div>
            <div class="choose-box h6-choose-box h8-choose-box  wow fadeInUp" data-wow-delay=".5s">
                <div class="choose-content">
                <div class="choose-icon">
                    <i class="tji-support"></i>
                </div>
                <div>
                    <h4 class="title"><?php echo esc_html( $burger_get( 'texto_dedicated_support', 'Dedicated Support' ) ); ?></h4>
                    <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_our_team_is_always_available_to_addres_2', 'Our team is always available to address your concerns, providing quick and effective solution to keep your business for any business.' ) ); ?></p>
                </div>

                </div>
            </div>

            </div>
        </div>

        </div>
    </div>
    </div>
    <div class="bg-shape-2">
    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_3_svg', NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg' ) ); ?>" alt="">
    </div>
</section>
<!-- end: Choose Section 6 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
