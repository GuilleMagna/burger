<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Choose Section 8 -->
<section id="choose" class="tj-choose-section section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading-wrap">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_choose_the_best', 'Choose the Best' ) ); ?></span>
            <div class="heading-wrap-content">
            <div class="sec-heading">
                <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_empowering_business_with', 'Empowering Business with' ) ); ?> <span><?php echo esc_html( $burger_get( 'texto_expertise', 'Expertise.' ) ); ?></span></h2>
            </div>
            <div class="btn-wrap wow fadeInUp" data-wow-delay=".6s">
                <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_request_a_call', 'Request a Call' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="row row-gap-4 rightSwipeWrap">
        <div class="col-lg-4">
        <div class="choose-box right-swipe">
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
        <div class="choose-box right-swipe">
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
        <div class="choose-box right-swipe">
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
<!-- end: Choose Section 8 -->
