<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Service Section 2 -->
<section class="tj-service-section service-2 section-gap section-gap-x slidebar-stickiy-container">
    <div class="container">
    <div class="row">
        <div class="col-lg-4">
        <div class="content-wrap  slidebar-stickiy">
            <div class="sec-heading style-2">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $burger_get( 'texto_our_solutions', 'Our Solutions' ) ); ?></span>
            <h2 class="sec-title text-white text-anim"><?php echo esc_html( $burger_get( 'texto_tailored_business_solutions_for_our', 'Tailored Business Solutions for our' ) ); ?>
                <span><?php echo esc_html( $burger_get( 'texto_corporates', 'Corporates.' ) ); ?></span>
            </h2>
            </div>
            <div class="wow fadeInUp" data-wow-delay=".6s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_service_html', 'service.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_more_services', 'More Services' ) ); ?></span></span>
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
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_strategy_development', 'Business Strategy Development' ) ); ?></a></h4>
                </div>
                <div class="service-content">
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_through_a_combination_of_data_driven_i', 'Through a combination of data-driven insights and innovative approaches, we work closely with you to develop customized.' ) ); ?></p>
                <ul class="list-items">
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_expansion_strategies', 'Expansion Strategies' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_operational_efficiency', 'Operational Efficiency' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_competitive_edge', 'Competitive Edge' ) ); ?></li>
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
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_2', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_customer_experience_solutions', 'Customer Experience Solutions' ) ); ?></a></h4>
                </div>
                <div class="service-content">
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_developing_personalized_customer_journ', 'Developing personalized customer journeys to increase satisfaction and loyalty of our expansion to keep competitive.' ) ); ?></p>
                <ul class="list-items">
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_personalized_customer', 'Personalized Customer' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_seamless_service', 'Seamless Service' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_proactive_support', 'Proactive Support' ) ); ?></li>
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
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_3', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_sustainability_and_esg_consulting', 'Sustainability and ESG Consulting' ) ); ?></a></h4>
                </div>
                <div class="service-content">
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_provide_tailored_strategies_that_not_o', 'Provide tailored strategies that not only drive long-term value but also build trust with stakeholders, investors.' ) ); ?></p>
                <ul class="list-items">
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_strategy_development', 'Strategy Development' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_sustainable_business', 'Sustainable Business' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_impactful_reporting', 'Impactful Reporting' ) ); ?></li>
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
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_4', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_training_and_development_programs', 'Training and Development Programs' ) ); ?></a></h4>
                </div>
                <div class="service-content">
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_training_and_development_programs_are', 'Training and Development Programs are designed to empower employees with the skills, knowledge, and tools they need.' ) ); ?></p>
                <ul class="list-items">
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_leadership_development', 'Leadership Development' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_skill_enhancement', 'Skill Enhancement' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_employee_engagement', 'Employee Engagement' ) ); ?></li>
                </ul>
                </div>
            </div>
            </div>

        </div>
        </div>
    </div>
    </div>
    <div class="bg-shape-1">
    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_2_svg', NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg' ) ); ?>" alt="">
    </div>
    <div class="bg-shape-2">
    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_3_svg', NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg' ) ); ?>" alt="">
    </div>
    <div class="bg-shape-3">
    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_shape_blur_svg', NAKAMA_THEME_URL . '/assets/images/shape/shape-blur.svg' ) ); ?>" alt="">
    </div>
</section>
<!-- end: Service Section 2 -->
