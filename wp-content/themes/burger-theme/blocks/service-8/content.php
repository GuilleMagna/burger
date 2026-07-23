<?php
$content_fields = array(
    'texto_our_solutions' => 'Our Solutions',
    'texto_tailor_business_solutions_for_corporat' => 'Tailor Business Solutions for Corporates.',
    'link_service_details_html' => 'service-details.html',
    'texto_business_strategies_development' => 'Business Strategies Development',
    'texto_through_a_combination_of_data_driven_i' => 'Through a combination of data-driven insights and innovative approaches, we work closely with you to develop customized.',
    'texto_expansion_strategies' => 'Expansion Strategies',
    'texto_operational_efficiency' => 'Operational Efficiency',
    'texto_competitive_edge' => 'Competitive Edge',
    'link_service_details_html_2' => 'service-details.html',
    'texto_customer_experience_solutions' => 'Customer Experience Solutions',
    'texto_through_a_combination_of_data_driven_i_2' => 'Through a combination of data-driven insights and innovative approaches, we work closely with you to develop customized.',
    'texto_expansion_strategies_2' => 'Expansion Strategies',
    'texto_operational_efficiency_2' => 'Operational Efficiency',
    'texto_competitive_edge_2' => 'Competitive Edge',
    'link_service_details_html_3' => 'service-details.html',
    'texto_sustainability_and_esg_consulting' => 'Sustainability and ESG Consulting',
    'texto_through_a_combination_of_data_driven_i_3' => 'Through a combination of data-driven insights and innovative approaches, we work closely with you to develop customized.',
    'texto_expansion_strategies_3' => 'Expansion Strategies',
    'texto_operational_efficiency_3' => 'Operational Efficiency',
    'texto_competitive_edge_3' => 'Competitive Edge',
    'link_service_html' => 'service.html',
    'texto_more_services' => 'More services',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Service Section 8 -->
<section class="h8-service overflow-hidden section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading style-3 sec-heading-centered">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_our_solutions ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $texto_tailor_business_solutions_for_corporat ); ?></h2>
        </div>

        </div>
    </div>
    </div>
    <div class="container gap-30">
    <div class="row">
        <div class="col-12">
        <div class="service-wrapper h8-service-wrapper  wow bounceInLeft" data-wow-delay=".3s">
            <div class="row">
            <div class="col-12 col-md-6 col-xl-4">
                <div class="service-item h8-service-item">
                <div class="service-icon">
                    <i class="tji-service-5"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $link_service_details_html ); ?>"><?php echo esc_html( $texto_business_strategies_development ); ?></a></h4>
                <div class="service-content">
                    <p class="desc"><?php echo wp_kses_post( $texto_through_a_combination_of_data_driven_i ); ?>
                    </p>
                    <ul class="list-items">
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_expansion_strategies ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_operational_efficiency ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_competitive_edge ); ?></li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <div class="service-item h8-service-item">
                <div class="service-icon">
                    <i class="tji-service-1"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $link_service_details_html_2 ); ?>"><?php echo esc_html( $texto_customer_experience_solutions ); ?></a></h4>
                <div class="service-content">
                    <p class="desc"><?php echo wp_kses_post( $texto_through_a_combination_of_data_driven_i_2 ); ?></p>
                    <ul class="list-items">
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_expansion_strategies_2 ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_operational_efficiency_2 ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_competitive_edge_2 ); ?></li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4">
                <div class="service-item h8-service-item">
                <div class="service-icon">
                    <i class="tji-service-3"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $link_service_details_html_3 ); ?>"><?php echo esc_html( $texto_sustainability_and_esg_consulting ); ?></a></h4>
                <div class="service-content">
                    <p class="desc"><?php echo wp_kses_post( $texto_through_a_combination_of_data_driven_i_3 ); ?></p>
                    <ul class="list-items">
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_expansion_strategies_3 ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_operational_efficiency_3 ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $texto_competitive_edge_3 ); ?></li>
                    </ul>
                </div>
                </div>
            </div>
            </div>

        </div>
        </div>

    </div>
    <div class="row">
        <div class="col-12">
        <div class="h8-service-more wow fadeInUp" data-wow-delay=".8s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $link_service_html ); ?>">
            <span class="btn-text"><span><?php echo esc_html( $texto_more_services ); ?></span></span>
            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Service Section 8 -->
