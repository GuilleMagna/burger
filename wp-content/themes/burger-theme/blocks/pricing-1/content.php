<?php
$content_fields = array(
    'texto_pricing_plan' => 'Pricing plan',
    'texto_our_pricing' => 'Our Pricing',
    'texto_plan' => 'Plan.',
    'texto_basic_plan' => 'Basic Plan',
    'texto_essential_business_services' => 'Essential Business Services',
    'texto_per_month' => '/per month',
    'link_contact_html' => 'contact.html',
    'texto_chose_plan' => 'Chose Plan',
    'texto_access_to_core_services' => 'Access to core services',
    'texto_limited_customer_support_email' => 'Limited customer support (email)',
    'texto_1_project_per_month' => '1 project per month',
    'texto_basic_reporting_and_analytics' => 'Basic reporting and analytics',
    'texto_standard_templates_and_tools' => 'Standard templates and tools',
    'texto_basic_performance_tracking' => 'Basic performance tracking',
    'texto_standard_plan' => 'Standard Plan',
    'texto_complete_business_solutions' => 'Complete Business Solutions',
    'texto_per_month_2' => '/per month',
    'link_contact_html_2' => 'contact.html',
    'texto_chose_plan_2' => 'Chose Plan',
    'texto_all_features_in_basic_plan' => 'All features in Basic Plan',
    'texto_priority_customer_support' => 'Priority customer support',
    'texto_up_to_3_projects_per_month' => 'Up to 3 projects per month',
    'texto_monthly_performance_reviews' => 'Monthly performance reviews',
    'texto_collaboration_tools_for_team' => 'Collaboration tools for team',
    'texto_custom_templates' => 'Custom templates',
    'texto_premium_plan' => 'Premium Plan',
    'texto_advanced_business_services' => 'Advanced Business Services',
    'texto_per_month_3' => '/per month',
    'link_contact_html_3' => 'contact.html',
    'texto_chose_plan_3' => 'Chose Plan',
    'texto_all_features_in_standard_plan' => 'All features in Standard Plan',
    'texto_dedicated_account_manager' => 'Dedicated account manager',
    'texto_tailored_strategy_sessions' => 'Tailored strategy sessions',
    'texto_quarterly_performance_audits' => 'Quarterly performance audits',
    'texto_priority_support' => 'Priority support',
    'texto_24_7_emergency_service' => '24/7 emergency service',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Pricing Section -->
<section class="tj-pricing-section section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading text-center style-2">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $texto_pricing_plan ); ?></span>
            <h2 class="sec-title text-anim"><?php echo esc_html( $texto_our_pricing ); ?> <span><?php echo esc_html( $texto_plan ); ?></span></h2>
        </div>
        </div>
    </div>
    <div class="row row-gap-4">
        <div class="col-xl-4 col-md-6">
        <div class="pricing-box wow fadeInUp" data-wow-delay=".5s">
            <div class="pricing-header">
            <h4 class="package-name"><?php echo esc_html( $texto_basic_plan ); ?></h4>
            <div class="package-desc">
                <p><?php echo esc_html( $texto_essential_business_services ); ?></p>
            </div>
            <div class="package-price">
                <span class="package-currency">$</span>
                <span class="price-number">99</span>
                <span class="package-period"><?php echo esc_html( $texto_per_month ); ?></span>
            </div>
            <div class="pricing-btn">
                <a class="text-btn" href="<?php echo esc_url( $link_contact_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_chose_plan ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
            <div class="list-items">
            <ul>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_access_to_core_services ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_limited_customer_support_email ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_1_project_per_month ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_basic_reporting_and_analytics ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_standard_templates_and_tools ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_basic_performance_tracking ); ?></li>
            </ul>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="pricing-box active wow fadeInUp" data-wow-delay=".7s">
            <div class="pricing-header">
            <h4 class="package-name"><?php echo esc_html( $texto_standard_plan ); ?></h4>
            <div class="package-desc">
                <p><?php echo esc_html( $texto_complete_business_solutions ); ?></p>
            </div>
            <div class="package-price">
                <span class="package-currency">$</span>
                <span class="price-number">249</span>
                <span class="package-period"><?php echo esc_html( $texto_per_month_2 ); ?></span>
            </div>
            <div class="pricing-btn">
                <a class="text-btn" href="<?php echo esc_url( $link_contact_html_2 ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_chose_plan_2 ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
            <div class="list-items">
            <ul>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_all_features_in_basic_plan ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_priority_customer_support ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_up_to_3_projects_per_month ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_monthly_performance_reviews ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_collaboration_tools_for_team ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_custom_templates ); ?></li>
            </ul>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="pricing-box wow fadeInUp" data-wow-delay=".9s">
            <div class="pricing-header">
            <h4 class="package-name"><?php echo esc_html( $texto_premium_plan ); ?></h4>
            <div class="package-desc">
                <p><?php echo esc_html( $texto_advanced_business_services ); ?></p>
            </div>
            <div class="package-price">
                <span class="package-currency">$</span>
                <span class="price-number">499</span>
                <span class="package-period"><?php echo esc_html( $texto_per_month_3 ); ?></span>
            </div>
            <div class="pricing-btn">
                <a class="text-btn" href="<?php echo esc_url( $link_contact_html_3 ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_chose_plan_3 ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
            <div class="list-items">
            <ul>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_all_features_in_standard_plan ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_dedicated_account_manager ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_tailored_strategy_sessions ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_quarterly_performance_audits ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_priority_support ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_24_7_emergency_service ); ?></li>
            </ul>
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
</section>
<!-- end: Pricing Section -->
