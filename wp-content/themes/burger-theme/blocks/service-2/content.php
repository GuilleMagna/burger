<?php
$content_fields = array(
    'texto_our_solutions' => 'Our Solutions',
    'texto_tailored_business_solutions_for_our' => 'Tailored Business Solutions for our',
    'texto_corporates' => 'Corporates.',
    'link_service_html' => 'service.html',
    'texto_more_services' => 'More Services',
    'link_service_details_html' => 'service-details.html',
    'texto_business_strategy_development' => 'Business Strategy Development',
    'texto_through_a_combination_of_data_driven_i' => 'Through a combination of data-driven insights and innovative approaches, we work closely with you to develop customized.',
    'texto_expansion_strategies' => 'Expansion Strategies',
    'texto_operational_efficiency' => 'Operational Efficiency',
    'texto_competitive_edge' => 'Competitive Edge',
    'link_service_details_html_2' => 'service-details.html',
    'texto_customer_experience_solutions' => 'Customer Experience Solutions',
    'texto_developing_personalized_customer_journ' => 'Developing personalized customer journeys to increase satisfaction and loyalty of our expansion to keep competitive.',
    'texto_personalized_customer' => 'Personalized Customer',
    'texto_seamless_service' => 'Seamless Service',
    'texto_proactive_support' => 'Proactive Support',
    'link_service_details_html_3' => 'service-details.html',
    'texto_sustainability_and_esg_consulting' => 'Sustainability and ESG Consulting',
    'texto_provide_tailored_strategies_that_not_o' => 'Provide tailored strategies that not only drive long-term value but also build trust with stakeholders, investors.',
    'texto_strategy_development' => 'Strategy Development',
    'texto_sustainable_business' => 'Sustainable Business',
    'texto_impactful_reporting' => 'Impactful Reporting',
    'link_service_details_html_4' => 'service-details.html',
    'texto_training_and_development_programs' => 'Training and Development Programs',
    'texto_training_and_development_programs_are' => 'Training and Development Programs are designed to empower employees with the skills, knowledge, and tools they need.',
    'texto_leadership_development' => 'Leadership Development',
    'texto_skill_enhancement' => 'Skill Enhancement',
    'texto_employee_engagement' => 'Employee Engagement',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
    'imagen_assets_images_shape_shape_blur_svg' => NAKAMA_THEME_URL . '/assets/images/shape/shape-blur.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Service Section 2 -->
<section class="tj-service-section service-2 section-gap section-gap-x slidebar-stickiy-container">
    <div class="container">
    <div class="row">
        <div class="col-lg-4">
        <div class="content-wrap  slidebar-stickiy">
            <div class="sec-heading style-2">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $texto_our_solutions ); ?></span>
            <h2 class="sec-title text-white text-anim"><?php echo esc_html( $texto_tailored_business_solutions_for_our ); ?>
                <span><?php echo esc_html( $texto_corporates ); ?></span>
            </h2>
            </div>
            <div class="wow fadeInUp" data-wow-delay=".6s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $link_service_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_more_services ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
        <div class="col-lg-8">
        <div class="service-wrapper-2">
            <div class="service-item-wrapper tj-fadein-right-on-scroll">
            <div class="service-item style-2 ">
                <div class="title-area">
                <div class="service-icon">
                    <i class="tji-service-1"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $link_service_details_html ); ?>"><?php echo esc_html( $texto_business_strategy_development ); ?></a></h4>
                </div>
                <div class="service-content">
                <p class="desc"><?php echo wp_kses_post( $texto_through_a_combination_of_data_driven_i ); ?></p>
                <ul class="list-items">
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_expansion_strategies ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_operational_efficiency ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_competitive_edge ); ?></li>
                </ul>
                </div>
            </div>
            </div>

            <div class="service-item-wrapper tj-fadein-right-on-scroll">
            <div class="service-item style-2">
                <div class="title-area">
                <div class="service-icon">
                    <i class="tji-service-2"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $link_service_details_html_2 ); ?>"><?php echo esc_html( $texto_customer_experience_solutions ); ?></a></h4>
                </div>
                <div class="service-content">
                <p class="desc"><?php echo wp_kses_post( $texto_developing_personalized_customer_journ ); ?></p>
                <ul class="list-items">
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_personalized_customer ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_seamless_service ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_proactive_support ); ?></li>
                </ul>
                </div>
            </div>
            </div>

            <div class="service-item-wrapper tj-fadein-right-on-scroll">
            <div class="service-item style-2">
                <div class="title-area">
                <div class="service-icon">
                    <i class="tji-service-3"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $link_service_details_html_3 ); ?>"><?php echo esc_html( $texto_sustainability_and_esg_consulting ); ?></a></h4>
                </div>
                <div class="service-content">
                <p class="desc"><?php echo wp_kses_post( $texto_provide_tailored_strategies_that_not_o ); ?></p>
                <ul class="list-items">
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_strategy_development ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_sustainable_business ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_impactful_reporting ); ?></li>
                </ul>
                </div>
            </div>
            </div>

            <div class="service-item-wrapper tj-fadein-right-on-scroll">
            <div class="service-item style-2">
                <div class="title-area">
                <div class="service-icon">
                    <i class="tji-service-4"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $link_service_details_html_4 ); ?>"><?php echo esc_html( $texto_training_and_development_programs ); ?></a></h4>
                </div>
                <div class="service-content">
                <p class="desc"><?php echo wp_kses_post( $texto_training_and_development_programs_are ); ?></p>
                <ul class="list-items">
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_leadership_development ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_skill_enhancement ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_employee_engagement ); ?></li>
                </ul>
                </div>
            </div>
            </div>

        </div>
        </div>
    </div>
    </div>
    <div class="bg-shape-1">
    <img src="<?php echo esc_url( $imagen_assets_images_shape_pattern_2_svg ); ?>" alt="">
    </div>
    <div class="bg-shape-2">
    <img src="<?php echo esc_url( $imagen_assets_images_shape_pattern_3_svg ); ?>" alt="">
    </div>
    <div class="bg-shape-3">
    <img src="<?php echo esc_url( $imagen_assets_images_shape_shape_blur_svg ); ?>" alt="">
    </div>
</section>
<!-- end: Service Section 2 -->
