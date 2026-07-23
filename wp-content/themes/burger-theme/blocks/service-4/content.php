<?php
$content_fields = array(
    'texto_our_solutions' => 'Our Solutions',
    'texto_tailor_business_solutions_for_corporat' => 'Tailor Business Solutions for Corporates.',
    'link_service_details_html' => 'service-details.html',
    'texto_business_strategy_development' => 'Business Strategy Development',
    'texto_through_a_combination_of_data_driven_i' => 'Through a combination of data-driven insights and innovative approaches, we work closely with you to develop customized.',
    'link_service_details_html_2' => 'service-details.html',
    'texto_learn_more' => 'Learn More',
    'imagen_assets_images_service_service_6_webp' => NAKAMA_THEME_URL . '/assets/images/service/service-6.webp',
    'link_service_details_html_3' => 'service-details.html',
    'texto_customer_experience_solutions' => 'Customer Experience Solutions',
    'texto_customer_experience_solutions_are_desi' => 'Customer Experience Solutions are designed to enhance every touchpoint of your customer journey, from first interaction.',
    'link_service_details_html_4' => 'service-details.html',
    'texto_learn_more_2' => 'Learn More',
    'imagen_assets_images_service_service_1_webp' => NAKAMA_THEME_URL . '/assets/images/service/service-1.webp',
    'link_service_details_html_5' => 'service-details.html',
    'texto_sustainability_and_esg_consulting' => 'Sustainability and ESG Consulting',
    'texto_provide_tailored_strategies_that_not_o' => 'Provide tailored strategies that not only drive long-term value but also build trust with stakeholders, investors.',
    'link_service_details_html_6' => 'service-details.html',
    'texto_learn_more_3' => 'Learn More',
    'imagen_assets_images_service_service_7_webp' => NAKAMA_THEME_URL . '/assets/images/service/service-7.webp',
    'texto_unlock_tailored_solutions_without_the' => 'Unlock tailored solutions without the wasted effort.',
    'link_contact_html' => 'contact.html',
    'texto_talk_to_us_today' => 'Talk to us today',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Service Section 4 -->
<section class="tj-service-section-5 section-gap">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="sec-heading style-4 text-center">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_our_solutions ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $texto_tailor_business_solutions_for_corporat ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="service-wrapper">
            <div class="service-item style-5 service-stack">
            <div class="service-content-area">
                <div class="service-icon">
                <i class="tji-service-1"></i>
                </div>
                <div class="service-content">
                <span class="no">01.</span>
                <h3 class="title"><a href="<?php echo esc_url( $link_service_details_html ); ?>"><?php echo esc_html( $texto_business_strategy_development ); ?></a></h3>
                <p class="desc"><?php echo wp_kses_post( $texto_through_a_combination_of_data_driven_i ); ?></p>
                <a class="tj-primary-btn" href="<?php echo esc_url( $link_service_details_html_2 ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $texto_learn_more ); ?></span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>
            <div class="service-img">
                <img src="<?php echo esc_url( $imagen_assets_images_service_service_6_webp ); ?>" alt="">
            </div>
            </div>
            <div class="service-item style-5 service-stack">
            <div class="service-content-area">
                <div class="service-icon">
                <i class="tji-service-2"></i>
                </div>
                <div class="service-content">
                <span class="no">02.</span>
                <h3 class="title"><a href="<?php echo esc_url( $link_service_details_html_3 ); ?>"><?php echo esc_html( $texto_customer_experience_solutions ); ?></a></h3>
                <p class="desc"><?php echo wp_kses_post( $texto_customer_experience_solutions_are_desi ); ?></p>
                <a class="tj-primary-btn" href="<?php echo esc_url( $link_service_details_html_4 ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $texto_learn_more_2 ); ?></span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>
            <div class="service-img">
                <img src="<?php echo esc_url( $imagen_assets_images_service_service_1_webp ); ?>" alt="">
            </div>
            </div>
            <div class="service-item style-5">
            <div class="service-content-area">
                <div class="service-icon">
                <i class="tji-service-3"></i>
                </div>
                <div class="service-content">
                <span class="no">03.</span>
                <h3 class="title"><a href="<?php echo esc_url( $link_service_details_html_5 ); ?>"><?php echo esc_html( $texto_sustainability_and_esg_consulting ); ?></a></h3>
                <p class="desc"><?php echo wp_kses_post( $texto_provide_tailored_strategies_that_not_o ); ?></p>
                <a class="tj-primary-btn" href="<?php echo esc_url( $link_service_details_html_6 ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $texto_learn_more_3 ); ?></span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>
            <div class="service-img">
                <img src="<?php echo esc_url( $imagen_assets_images_service_service_7_webp ); ?>" alt="">
            </div>
            </div>
        </div>
        <div class="service-bottom-text">
            <p class="desc"><span><i class="tji-box"></i><?php echo esc_html( $texto_unlock_tailored_solutions_without_the ); ?> <a
                href="<?php echo esc_url( $link_contact_html ); ?>"><?php echo esc_html( $texto_talk_to_us_today ); ?></a></span>
            </p>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Service Section 4 -->
