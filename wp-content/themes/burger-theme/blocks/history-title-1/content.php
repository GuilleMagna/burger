<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: History title Section -->
<section class="tj-history section-gap">
    <div class="container">
    <div class="row rg-30 justify-content-between">
        <div class="col-xl-5">
        <div class="sec-heading mb-0">
            <span class="sub-title wow fadeInUp" data-wow-delay="0.1s"><i class="tji-box"></i> <?php echo esc_html( $burger_get( 'texto_our_background', 'Our background' ) ); ?>
            </span>
            <h2 class="sec-title text-anim">
            <?php echo esc_html( $burger_get( 'texto_discover_how_we_have_evolved_our_compa', 'Discover how we have Evolved our Company’s on' ) ); ?> <span><?php echo esc_html( $burger_get( 'texto_legacy', 'Legacy.' ) ); ?></span>
            </h2>

        </div>
        </div>
        <div class="col-xl-5">
        <div class="desc wow fadeInUp" data-wow-delay="0.3s">
            <p>
            <?php echo wp_kses_post( $burger_get( 'texto_our_mission_is_to_empowers_businesses', 'Our mission is to empowers businesses off all size to thrive in an businesses ever changing marketplace. We are committed to the delivering exceptional in the value through our strategic inset, innovative approaches. Our mission is to empower businesses of all sizes to thrive.' ) ); ?>
            </p>
            <p>
            <?php echo wp_kses_post( $burger_get( 'texto_committed_to_the_delivering_exceptiona', 'Committed to the delivering exceptional in the value through our strategic inset, innovative approaches empower.' ) ); ?>
            </p>
        </div>
        <div class="history-btn mt-30 wow fadeInUp" data-wow-delay="0.5s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_about_html', 'about.html' ) ); ?>">
            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more', 'Learn More' ) ); ?></span></span>
            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>

        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: History tile Section -->
