<?php
$content_fields = array(
    'texto_choose_the_best' => 'Choose the Best',
    'texto_empowering_business_with_expertise' => 'Empowering Business with Expertise.',
    'texto_providing_the_our_best_business_soluti' => 'Providing the Our Best Business Solution Ever.',
    'imagen_assets_images_testimonial_client_1_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-1.webp',
    'imagen_assets_images_testimonial_client_2_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-2.webp',
    'imagen_assets_images_testimonial_client_3_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-3.webp',
    'imagen_assets_images_testimonial_client_4_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-4.webp',
    'texto_100_happy_customer' => '100+ happy customer.',
    'texto_award_winning_expertise' => 'Award-Winning Expertise',
    'texto_recognized_by_industry_leaders_our_awa' => 'Recognized by industry leaders, our award-winning team has a proven record of delivering excellence across projects.',
    'imagen_assets_images_choose_h9_choose_bg_webp' => 'assets/images/choose/h9-choose-bg.webp',
    'texto_dedicated_support' => 'Dedicated Support',
    'texto_our_team_is_always_available_for_addre' => 'Our team is always available for address expert concerns, providing quick and effective solution to keep your business.',
    'link_contact_html' => 'contact.html',
    'texto_contact_us' => 'Contact Us',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Choose Section 7 -->
<section id="choose" class="tj-choose-section section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading style-8 sec-heading-centered">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $texto_choose_the_best ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $texto_empowering_business_with_expertise ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row row-gap-4 rightSwipeWrap">
        <div class="col-md-6 col-lg-4">
        <div class="choose-box customers-box h9-choose-box right-swipe">
            <h4 class="title"><?php echo esc_html( $texto_providing_the_our_best_business_soluti ); ?></h4>
            <div class="customers-inner">
            <div class="customers">
                <ul>
                <li class="wow fadeInLeft" data-wow-delay=".5s"><img
                    src="<?php echo esc_url( $imagen_assets_images_testimonial_client_1_webp ); ?>" alt=""></li>
                <li class="wow fadeInLeft" data-wow-delay=".6s"><img
                    src="<?php echo esc_url( $imagen_assets_images_testimonial_client_2_webp ); ?>" alt=""></li>
                <li class="wow fadeInLeft" data-wow-delay=".7s"><img
                    src="<?php echo esc_url( $imagen_assets_images_testimonial_client_3_webp ); ?>" alt=""></li>
                <li class="wow fadeInLeft" data-wow-delay=".8s"><img
                    src="<?php echo esc_url( $imagen_assets_images_testimonial_client_4_webp ); ?>" alt=""></li>

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
            <h5 class="customers-text"><?php echo esc_html( $texto_100_happy_customer ); ?></h5>
            </div>
        </div>
        </div>
        <div class="col-md-6 col-lg-4">
        <div class="choose-box h9-choose-box right-swipe">
            <div class="choose-content">
            <div class="choose-icon">
                <i class="tji-award"></i>
            </div>
            <h4 class="title"><?php echo esc_html( $texto_award_winning_expertise ); ?></h4>
            <p class="desc"><?php echo wp_kses_post( $texto_recognized_by_industry_leaders_our_awa ); ?></p>
            </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="choose-box h9-choose-box h9-choose-bg right-swipe"
            data-bg-image="<?php echo esc_url( $imagen_assets_images_choose_h9_choose_bg_webp ); ?>">
            <div class="choose-content">
            <h4 class="title"><?php echo esc_html( $texto_dedicated_support ); ?></h4>
            <p class="desc"><?php echo wp_kses_post( $texto_our_team_is_always_available_for_addre ); ?></p>
            <a class="text-btn" href="<?php echo esc_url( $link_contact_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_contact_us ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Choose Section 7 -->
