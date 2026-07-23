<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Choose Section 7 -->
<section id="choose" class="tj-choose-section section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading style-8 sec-heading-centered">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $burger_get( 'texto_choose_the_best', 'Choose the Best' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_empowering_business_with_expertise', 'Empowering Business with Expertise.' ) ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row row-gap-4 rightSwipeWrap">
        <div class="col-md-6 col-lg-4">
        <div class="choose-box customers-box h9-choose-box right-swipe">
            <h4 class="title"><?php echo esc_html( $burger_get( 'texto_providing_the_our_best_business_soluti', 'Providing the Our Best Business Solution Ever.' ) ); ?></h4>
            <div class="customers-inner">
            <div class="customers">
                <ul>
                <li class="wow fadeInLeft" data-wow-delay=".5s"><img
                    src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_1_webp', NAKAMA_THEME_URL . '/assets/images/testimonial/client-1.webp' ) ); ?>" alt=""></li>
                <li class="wow fadeInLeft" data-wow-delay=".6s"><img
                    src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_2_webp', NAKAMA_THEME_URL . '/assets/images/testimonial/client-2.webp' ) ); ?>" alt=""></li>
                <li class="wow fadeInLeft" data-wow-delay=".7s"><img
                    src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_3_webp', NAKAMA_THEME_URL . '/assets/images/testimonial/client-3.webp' ) ); ?>" alt=""></li>
                <li class="wow fadeInLeft" data-wow-delay=".8s"><img
                    src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_4_webp', NAKAMA_THEME_URL . '/assets/images/testimonial/client-4.webp' ) ); ?>" alt=""></li>

                </ul>
            </div>
            <div class="rating-area">
                <div class="star-ratings">
                <div class="fill-ratings" style="width: 100%">
                    <span>★★★★★</span>
                </div>
                <div class="empty-ratings">
                    <span>★★★★★</span>
                </div>
                </div>
            </div>
            <h5 class="customers-text"><?php echo esc_html( $burger_get( 'texto_100_happy_customer', '100+ happy customer.' ) ); ?></h5>
            </div>
        </div>
        </div>
        <div class="col-md-6 col-lg-4">
        <div class="choose-box h9-choose-box right-swipe">
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
        <div class="choose-box h9-choose-box h9-choose-bg right-swipe"
            data-bg-image="<?php echo esc_url( $burger_get( 'imagen_assets_images_choose_h9_choose_bg_webp', 'assets/images/choose/h9-choose-bg.webp' ) ); ?>">
            <div class="choose-content">
            <h4 class="title"><?php echo esc_html( $burger_get( 'texto_dedicated_support', 'Dedicated Support' ) ); ?></h4>
            <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_our_team_is_always_available_for_addre', 'Our team is always available for address expert concerns, providing quick and effective solution to keep your business.' ) ); ?></p>
            <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_contact_us', 'Contact Us' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Choose Section 7 -->
