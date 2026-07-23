<?php
$content_fields = array(
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
    'texto_flexible_pricing' => 'Flexible pricing',
    'texto_our_pricing_plan' => 'Our Pricing Plan.',
    'texto_our_team_is_always_available_to_addres' => 'Our team is always available to address your concerns, providing quick.',
    'link_pricing_html' => 'pricing.html',
    'texto_more_pricing' => 'More Pricing',
    'link_pricing_html_2' => 'pricing.html',
    'texto_more_pricing_2' => 'More Pricing',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Pricing Section 2 -->
<section class="tj-pricing-section-2 section-gap section-separator slidebar-stickiy-container">
    <div class="container">
    <div class="row">
        <div class="col-lg-8 order-2 order-lg-1">
        <div class="accordion tj-faq pricing-accordion" id="pricing">
            <div class="accordion-item pricing-box active wow fadeInUp" data-wow-delay=".3s">
            <button class="faq-title" type="button" data-bs-toggle="collapse" data-bs-target="#pricing-1"
                aria-expanded="true"><?php echo esc_html( $texto_basic_plan ); ?></button>
            <div id="pricing-1" class="collapse show" data-bs-parent="#pricing">
                <div class="accordion-body pricing-inner">
                <div class="pricing-header">
                    <div class="pricing-top">
                    <div class="package-desc">
                        <p><?php echo esc_html( $texto_essential_business_services ); ?></p>
                    </div>
                    <div class="package-price">
                        <span class="package-currency">$</span>
                        <span class="price-number">99</span>
                        <span class="package-period"><?php echo esc_html( $texto_per_month ); ?></span>
                    </div>
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
            </div>
            <div class="accordion-item pricing-box wow fadeInUp" data-wow-delay=".3s">
            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#pricing-2" aria-expanded="false"><?php echo esc_html( $texto_standard_plan ); ?></button>
            <div id="pricing-2" class="collapse" data-bs-parent="#pricing">
                <div class="accordion-body pricing-inner">
                <div class="pricing-header">
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
            </div>
            <div class="accordion-item pricing-box wow fadeInUp" data-wow-delay=".3s">
            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#pricing-3" aria-expanded="false"><?php echo esc_html( $texto_premium_plan ); ?></button>
            <div id="pricing-3" class="collapse" data-bs-parent="#pricing">
                <div class="accordion-body pricing-inner">
                <div class="pricing-header">
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
        </div>
        <div class="col-lg-4 order-1 order-lg-2">
        <div class="content-wrap slidebar-stickiy">
            <div class="sec-heading style-4">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_flexible_pricing ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $texto_our_pricing_plan ); ?></h2>
            </div>
            <p class="desc"><?php echo esc_html( $texto_our_team_is_always_available_to_addres ); ?></p>
            <div class="d-none d-lg-inline-flex wow fadeInUp" data-wow-delay=".6s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $link_pricing_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_more_pricing ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="d-lg-none d-flex mt-5">
            <a class="tj-primary-btn" href="<?php echo esc_url( $link_pricing_html_2 ); ?>">
            <span class="btn-text"><span><?php echo esc_html( $texto_more_pricing_2 ); ?></span></span>
            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Pricing Section 2 -->
