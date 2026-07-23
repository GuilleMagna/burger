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

<!-- start: Choose Section 4 -->
<section id="choose" class="tj-choose-section h6-choose section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading style-2 style-6 text-center">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_choose_the_best', 'Choose the Best' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_empowering_business_with_expertise', 'Empowering Business with Expertise.' ) ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row row-gap-4 rightSwipeWrap">
        <div class="col-lg-4">
        <div class="choose-box h6-choose-box right-swipe">
            <div class="choose-content">
            <div class="choose-icon">
                <i class="tji-innovative"></i>
            </div>
            <h4 class="title"><?php echo esc_html( $burger_get( 'texto_innovative_solutions', 'Innovative Solutions' ) ); ?></h4>
            <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_we_stay_ahead_of_the_curve_leveraging', 'We stay ahead of the curve, leveraging cutting-edge technologies and strategies to keep you competitive in a marketplace.' ) ); ?></p>
            </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="choose-box h6-choose-box right-swipe">
            <div class="choose-content">
            <div class="choose-icon">
                <i class="tji-award"></i>
            </div>
            <h4 class="title"><?php echo esc_html( $burger_get( 'texto_award_winning_expertise', 'Award-Winning Expertise' ) ); ?></h4>
            <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_recognized_by_industry_leaders_our_awa', 'Recognized by industry leaders, our award-winning team has a proven record of delivering excellence across projects.' ) ); ?></p>
            </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="choose-box h6-choose-box right-swipe">
            <div class="choose-content">
            <div class="choose-icon">
                <i class="tji-support"></i>
            </div>
            <h4 class="title"><?php echo esc_html( $burger_get( 'texto_dedicated_support', 'Dedicated Support' ) ); ?></h4>
            <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_our_team_is_always_available_to_addres', 'Our team is always available to address your concerns, providing quick and effective solution to keep your business.' ) ); ?></p>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Choose Section 4 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
