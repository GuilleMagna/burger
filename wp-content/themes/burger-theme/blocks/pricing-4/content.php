<?php
$content_fields = array(
    'texto_our_pricing_plan' => 'Our PRICING PLAN',
    'texto_our_pricing_plan_2' => 'Our Pricing Plan.',
    'texto_basic_plan' => 'Basic Plan',
    'texto_essential_business_services' => 'Essential Business Services',
    'texto_per_month' => '/per month',
    'texto_features' => 'Features',
    'texto_includes' => 'Includes:',
    'texto_access_to_core_services' => 'Access to core services',
    'texto_limited_customer_support_email' => 'Limited customer support (email)',
    'texto_1_project_per_month' => '1 project per month',
    'texto_basic_reporting_and_analytics' => 'Basic reporting and analytics',
    'texto_standard_templates_and_tools' => 'Standard templates and tools',
    'texto_basic_performance_tracking' => 'Basic performance tracking',
    'link_contact_html' => 'contact.html',
    'texto_chose_plan' => 'Chose Plan',
    'texto_popular' => 'Popular',
    'texto_standard_plan' => 'Standard Plan',
    'texto_complete_business_solutions' => 'Complete Business Solutions',
    'texto_per_month_2' => '/per month',
    'texto_features_2' => 'Features',
    'texto_includes_all_basic_plan_and_plus' => 'Includes all Basic plan and Plus:',
    'texto_all_features_in_basic_plan' => 'All features in Basic Plan',
    'texto_priority_customer_support' => 'Priority customer support',
    'texto_up_to_3_projects_per_month' => 'Up to 3 projects per month',
    'texto_monthly_performance_reviews' => 'Monthly performance reviews',
    'texto_collaboration_tools_for_team' => 'Collaboration tools for team',
    'texto_custom_templates' => 'Custom templates',
    'link_contact_html_2' => 'contact.html',
    'texto_chose_plan_2' => 'Chose Plan',
    'texto_premium_plan' => 'Premium Plan',
    'texto_advanced_business_services' => 'Advanced Business Services',
    'texto_per_month_3' => '/per month',
    'texto_features_3' => 'Features',
    'texto_includes_all_standard_plan_and_plus' => 'Includes all Standard plan and Plus:',
    'texto_all_features_in_standard_plan' => 'All features in Standard Plan',
    'texto_dedicated_account_manager' => 'Dedicated account manager',
    'texto_tailored_strategy_sessions' => 'Tailored strategy sessions',
    'texto_quarterly_performance_audits' => 'Quarterly performance audits',
    'texto_priority_support' => 'Priority support',
    'texto_24_7_emergency_service' => '24/7 emergency service',
    'link_contact_html_3' => 'contact.html',
    'texto_chose_plan_3' => 'Chose Plan',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Pricing Section 4 -->
<section class="h10-pricing section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading style-3 sec-heading-centered">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_our_pricing_plan ); ?></span>
            <h2 class="sec-title text-anim"><?php echo esc_html( $texto_our_pricing_plan_2 ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row row-gap-4">
        <div class="col-xl-4 col-md-6">
        <div class="pricing-box h10-pricing-box wow fadeInUp" data-wow-delay=".5s">
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
            </div>
            <div class="pricing-body">
            <div class="list-items h10-pricing-list">
                <div class="title-wrapper">
                <h5 class="title"><?php echo esc_html( $texto_features ); ?></h5>
                <p class="desc"><?php echo esc_html( $texto_includes ); ?></p>
                </div>
                <ul>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_access_to_core_services ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_limited_customer_support_email ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_1_project_per_month ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_basic_reporting_and_analytics ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_standard_templates_and_tools ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_basic_performance_tracking ); ?></li>
                </ul>
            </div>
            <div class="pricing-btn">
                <a class="text-btn" href="<?php echo esc_url( $link_contact_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_chose_plan ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="pricing-box h10-pricing-box active wow fadeInUp" data-wow-delay=".7s">
            <div class="pricing-header">
            <div class="pricing-badge">
                <i class="tji-star-2"></i> <span><?php echo esc_html( $texto_popular ); ?></span>
            </div>
            <h4 class="package-name"><?php echo esc_html( $texto_standard_plan ); ?></h4>
            <div class="package-desc">
                <p><?php echo esc_html( $texto_complete_business_solutions ); ?></p>
            </div>
            <div class="package-price">
                <span class="package-currency">$</span>
                <span class="price-number">249</span>
                <span class="package-period"><?php echo esc_html( $texto_per_month_2 ); ?></span>
            </div>
            </div>
            <div class="pricing-body">
            <div class="list-items">
                <div class="title-wrapper">
                <h5 class="title"><?php echo esc_html( $texto_features_2 ); ?></h5>
                <p class="desc"><?php echo esc_html( $texto_includes_all_basic_plan_and_plus ); ?></p>
                </div>
                <ul>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_all_features_in_basic_plan ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_priority_customer_support ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_up_to_3_projects_per_month ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_monthly_performance_reviews ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_collaboration_tools_for_team ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_custom_templates ); ?></li>
                </ul>
            </div>
            <div class="pricing-btn">
                <a class="text-btn" href="<?php echo esc_url( $link_contact_html_2 ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_chose_plan_2 ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>


        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="pricing-box h10-pricing-box wow fadeInUp" data-wow-delay=".9s">
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

            </div>
            <div class="pricing-body">
            <div class="list-items">
                <div class="title-wrapper">
                <h5 class="title"><?php echo esc_html( $texto_features_3 ); ?></h5>
                <p class="desc"><?php echo esc_html( $texto_includes_all_standard_plan_and_plus ); ?></p>
                </div>
                <ul>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_all_features_in_standard_plan ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_dedicated_account_manager ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_tailored_strategy_sessions ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_quarterly_performance_audits ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_priority_support ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_24_7_emergency_service ); ?></li>
                </ul>
            </div>
            <div class="pricing-btn">
                <a class="text-btn" href="<?php echo esc_url( $link_contact_html_3 ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_chose_plan_3 ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>

        </div>
        </div>
    </div>
    </div>

</section>
<!-- end: Pricing Section 4 -->
