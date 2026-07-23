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

<!-- start: Award Section -->
<section class="tj-award section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading sec-heading-centered style-2 style-6 ">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_our_achievements', 'Our Achievements' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_our_pursuit_of_perfection_has_recogniz', 'Our pursuit of perfection has recognized' ) ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-12">
        <div class="tj-award-wrapper tj-active-bg-wrapper">
            <div class="tj-award-item tj-active-bg-item wow fadeInUp" data-wow-delay=".3s">
            <div class="tj-award-item-inner">
                <div class="row align-items-center justify-content-between">
                <div class="col-md-4 tj-award-img-wrapper">
                    <h6 class="tj-award-index">
                    01.
                    </h6>
                    <div class="tj-award-img"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_award_award_1_png', NAKAMA_THEME_URL . '/assets/images/award/award-1.png' ) ); ?>" alt=""><img
                        src="<?php echo esc_url( $burger_get( 'imagen_assets_images_award_award_1_white_png', NAKAMA_THEME_URL . '/assets/images/award/award-1-white.png' ) ); ?>" alt=""></div>
                </div>
                <div class="col-md-4 col-lg-3 tj-award-title-wrapper">
                    <h5 class="tj-award-title">
                    <?php echo esc_html( $burger_get( 'texto_inspire', 'Inspire' ) ); ?><br>
                    <?php echo esc_html( $burger_get( 'texto_growth_award', 'Growth Award' ) ); ?>
                    </h5>
                </div>
                <div class="col-md-4 tj-award-date-wrapper">
                    <h6 class="tj-award-result">
                    <?php echo esc_html( $burger_get( 'texto_winner', 'Winner' ) ); ?>
                    </h6>
                    <h6 class="tj-award-date">
                    2010
                    </h6>
                </div>
                </div>
            </div>
            </div>
            <div class="tj-award-item tj-active-bg-item wow fadeInUp" data-wow-delay=".3s">
            <div class="tj-award-item-inner">
                <div class="row align-items-center justify-content-between">
                <div class="col-md-4 tj-award-img-wrapper">
                    <h6 class="tj-award-index">
                    02.
                    </h6>
                    <div class="tj-award-img"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_award_award_2_png', NAKAMA_THEME_URL . '/assets/images/award/award-2.png' ) ); ?>" alt="">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_award_award_2_white_png', NAKAMA_THEME_URL . '/assets/images/award/award-2-white.png' ) ); ?>" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 tj-award-title-wrapper">
                    <h5 class="tj-award-title">
                    <?php echo esc_html( $burger_get( 'texto_pinnacle', 'Pinnacle' ) ); ?><br>
                    <?php echo esc_html( $burger_get( 'texto_excellence_award', 'Excellence Award' ) ); ?>
                    </h5>
                </div>
                <div class="col-md-4 tj-award-date-wrapper">
                    <h6 class="tj-award-result">
                    <?php echo esc_html( $burger_get( 'texto_nominee', 'Nominee' ) ); ?>
                    </h6>
                    <h6 class="tj-award-date">
                    2016
                    </h6>
                </div>
                </div>
            </div>
            </div>
            <div class="tj-award-item tj-active-bg-item wow fadeInUp" data-wow-delay=".3s">
            <div class="tj-award-item-inner">
                <div class="row align-items-center justify-content-between">
                <div class="col-md-4 tj-award-img-wrapper">
                    <h6 class="tj-award-index">
                    03.
                    </h6>
                    <div class="tj-award-img"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_award_award_3_png', NAKAMA_THEME_URL . '/assets/images/award/award-3.png' ) ); ?>" alt="">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_award_award_3_white_png', NAKAMA_THEME_URL . '/assets/images/award/award-3-white.png' ) ); ?>" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 tj-award-title-wrapper">
                    <h5 class="tj-award-title">
                    <?php echo esc_html( $burger_get( 'texto_mastermind', 'Mastermind' ) ); ?> <br> <?php echo esc_html( $burger_get( 'texto_excellence_award_2', 'Excellence Award' ) ); ?>
                    </h5>
                </div>
                <div class="col-md-4 tj-award-date-wrapper">
                    <h6 class="tj-award-result">
                    <?php echo esc_html( $burger_get( 'texto_distinguished', 'Distinguished' ) ); ?>
                    </h6>
                    <h6 class="tj-award-date">
                    2020
                    </h6>
                </div>
                </div>
            </div>
            </div>
            <div class="tj-award-item tj-active-bg-item wow fadeInUp" data-wow-delay=".3s">
            <div class="tj-award-item-inner">
                <div class="row align-items-center justify-content-between">
                <div class="col-md-4 tj-award-img-wrapper">
                    <h6 class="tj-award-index">
                    04.
                    </h6>
                    <div class="tj-award-img"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_award_award_4_png', NAKAMA_THEME_URL . '/assets/images/award/award-4.png' ) ); ?>" alt="">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_award_award_4_white_png', NAKAMA_THEME_URL . '/assets/images/award/award-4-white.png' ) ); ?>" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 tj-award-title-wrapper">
                    <h5 class="tj-award-title">
                    <?php echo esc_html( $burger_get( 'texto_game', 'Game' ) ); ?> <br>
                    <?php echo esc_html( $burger_get( 'texto_changer_award', 'Changer Award' ) ); ?>
                    </h5>
                </div>
                <div class="col-md-4 tj-award-date-wrapper">
                    <h6 class="tj-award-result">
                    <?php echo esc_html( $burger_get( 'texto_champion', 'Champion' ) ); ?>
                    </h6>
                    <h6 class="tj-award-date">
                    2025
                    </h6>
                </div>
                </div>
            </div>
            </div>
            <span class="active-bg"></span>
        </div>
        </div>

    </div>
    </div>
</section>
<!-- end: Award Section -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
