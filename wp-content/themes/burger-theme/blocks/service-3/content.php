<?php
$content_fields = array(
    'texto_our_solutions' => 'Our Solutions',
    'texto_tailor_business_solutions_for_corporat' => 'Tailor Business Solutions for Corporates.',
    'link_service_details_html' => 'service-details.html',
    'texto_business_strategy_development' => 'Business Strategy Development',
    'texto_through_a_combination_of_data_driven_i' => 'Through a combination of data-driven insights and innovative approaches, we work closely with you to develop customized.',
    'imagen_assets_images_service_service_2_webp' => NAKAMA_THEME_URL . '/assets/images/service/service-2.webp',
    'link_service_details_html_2' => 'service-details.html',
    'texto_customer_experience_solutions' => 'Customer Experience Solutions',
    'texto_customer_experience_solutions_are_desi' => 'Customer Experience Solutions are designed to enhance every touchpoint of your customer journey, from first interaction.',
    'imagen_assets_images_service_service_3_webp' => NAKAMA_THEME_URL . '/assets/images/service/service-3.webp',
    'link_service_details_html_3' => 'service-details.html',
    'texto_sustainability_and_esg_consulting' => 'Sustainability and ESG Consulting',
    'texto_provide_tailored_strategies_that_not_o' => 'Provide tailored strategies that not only drive long-term value but also build trust with stakeholders, investors.',
    'imagen_assets_images_service_service_4_webp' => NAKAMA_THEME_URL . '/assets/images/service/service-4.webp',
    'link_service_details_html_4' => 'service-details.html',
    'texto_training_and_development_programs' => 'Training and Development Programs',
    'texto_training_and_development_programs_are' => 'Training and Development Programs are designed to empower employees with the skills, knowledge, and tools they need.',
    'imagen_assets_images_service_service_6_webp' => NAKAMA_THEME_URL . '/assets/images/service/service-6.webp',
    'link_service_html' => 'service.html',
    'texto_more_services' => 'More Services',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Service Section 3 -->
<section class="tj-service-section service-3 section-gap">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="sec-heading style-3 text-center">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_our_solutions ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $texto_tailor_business_solutions_for_corporat ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="service-wrapper">
            <div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
            <div class="service-content-wrap">
                <div class="service-title">
                <div class="service-icon">
                    <i class="tji-service-1"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $link_service_details_html ); ?>"><?php echo esc_html( $texto_business_strategy_development ); ?></a></h4>
                </div>
                <div class="service-content">
                <p class="desc"><?php echo wp_kses_post( $texto_through_a_combination_of_data_driven_i ); ?></p>
                </div>
            </div>
            <div class="service-reveal-bg" data-bg-image="<?php echo esc_url( $imagen_assets_images_service_service_2_webp ); ?>"></div>
            </div>
            <div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
            <div class="service-content-wrap">
                <div class="service-title">
                <div class="service-icon">
                    <i class="tji-service-2"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $link_service_details_html_2 ); ?>"><?php echo esc_html( $texto_customer_experience_solutions ); ?></a></h4>
                </div>
                <div class="service-content">
                <p class="desc"><?php echo wp_kses_post( $texto_customer_experience_solutions_are_desi ); ?></p>
                </div>
            </div>
            <div class="service-reveal-bg" data-bg-image="<?php echo esc_url( $imagen_assets_images_service_service_3_webp ); ?>"></div>
            </div>
            <div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
            <div class="service-content-wrap">
                <div class="service-title">
                <div class="service-icon">
                    <i class="tji-service-3"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $link_service_details_html_3 ); ?>"><?php echo esc_html( $texto_sustainability_and_esg_consulting ); ?></a></h4>
                </div>
                <div class="service-content">
                <p class="desc"><?php echo wp_kses_post( $texto_provide_tailored_strategies_that_not_o ); ?></p>
                </div>
            </div>
            <div class="service-reveal-bg" data-bg-image="<?php echo esc_url( $imagen_assets_images_service_service_4_webp ); ?>"></div>
            </div>
            <div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
            <div class="service-content-wrap">
                <div class="service-title">
                <div class="service-icon">
                    <i class="tji-service-4"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $link_service_details_html_4 ); ?>"><?php echo esc_html( $texto_training_and_development_programs ); ?></a></h4>
                </div>
                <div class="service-content">
                <p class="desc"><?php echo wp_kses_post( $texto_training_and_development_programs_are ); ?></p>
                </div>
            </div>
            <div class="service-reveal-bg" data-bg-image="<?php echo esc_url( $imagen_assets_images_service_service_6_webp ); ?>"></div>
            </div>
        </div>
        <div class="service-btn-area text-center wow fadeInUp" data-wow-delay=".3s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $link_service_html ); ?>">
            <span class="btn-text"><span><?php echo esc_html( $texto_more_services ); ?></span></span>
            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Service Section 3 -->
