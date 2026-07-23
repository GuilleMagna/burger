<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Pricing Section 4 -->
<section class="h10-pricing section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading style-3 sec-heading-centered">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_our_pricing_plan', 'Our PRICING PLAN' ) ); ?></span>
            <h2 class="sec-title text-anim"><?php echo esc_html( $burger_get( 'texto_our_pricing_plan_2', 'Our Pricing Plan.' ) ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row row-gap-4">
        <div class="col-xl-4 col-md-6">
        <div class="pricing-box h10-pricing-box wow fadeInUp" data-wow-delay=".5s">
            <div class="pricing-header">
            <h4 class="package-name"><?php echo esc_html( $burger_get( 'texto_basic_plan', 'Basic Plan' ) ); ?></h4>
            <div class="package-desc">
                <p><?php echo esc_html( $burger_get( 'texto_essential_business_services', 'Essential Business Services' ) ); ?></p>
            </div>
            <div class="package-price">
                <span class="package-currency">$</span>
                <span class="price-number">99</span>
                <span class="package-period"><?php echo esc_html( $burger_get( 'texto_per_month', '/per month' ) ); ?></span>
            </div>
            </div>
            <div class="pricing-body">
            <div class="list-items h10-pricing-list">
                <div class="title-wrapper">
                <h5 class="title"><?php echo esc_html( $burger_get( 'texto_features', 'Features' ) ); ?></h5>
                <p class="desc"><?php echo esc_html( $burger_get( 'texto_includes', 'Includes:' ) ); ?></p>
                </div>
                <ul>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_access_to_core_services', 'Access to core services' ) ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_limited_customer_support_email', 'Limited customer support (email)' ) ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_1_project_per_month', '1 project per month' ) ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_basic_reporting_and_analytics', 'Basic reporting and analytics' ) ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_standard_templates_and_tools', 'Standard templates and tools' ) ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_basic_performance_tracking', 'Basic performance tracking' ) ); ?></li>
                </ul>
            </div>
            <div class="pricing-btn">
                <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_chose_plan', 'Chose Plan' ) ); ?></span></span>
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
                <i class="tji-star-2"></i> <span><?php echo esc_html( $burger_get( 'texto_popular', 'Popular' ) ); ?></span>
            </div>
            <h4 class="package-name"><?php echo esc_html( $burger_get( 'texto_standard_plan', 'Standard Plan' ) ); ?></h4>
            <div class="package-desc">
                <p><?php echo esc_html( $burger_get( 'texto_complete_business_solutions', 'Complete Business Solutions' ) ); ?></p>
            </div>
            <div class="package-price">
                <span class="package-currency">$</span>
                <span class="price-number">249</span>
                <span class="package-period"><?php echo esc_html( $burger_get( 'texto_per_month_2', '/per month' ) ); ?></span>
            </div>
            </div>
            <div class="pricing-body">
            <div class="list-items">
                <div class="title-wrapper">
                <h5 class="title"><?php echo esc_html( $burger_get( 'texto_features_2', 'Features' ) ); ?></h5>
                <p class="desc"><?php echo esc_html( $burger_get( 'texto_includes_all_basic_plan_and_plus', 'Includes all Basic plan and Plus:' ) ); ?></p>
                </div>
                <ul>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_all_features_in_basic_plan', 'All features in Basic Plan' ) ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_priority_customer_support', 'Priority customer support' ) ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_up_to_3_projects_per_month', 'Up to 3 projects per month' ) ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_monthly_performance_reviews', 'Monthly performance reviews' ) ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_collaboration_tools_for_team', 'Collaboration tools for team' ) ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_custom_templates', 'Custom templates' ) ); ?></li>
                </ul>
            </div>
            <div class="pricing-btn">
                <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html_2', 'contact.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_chose_plan_2', 'Chose Plan' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>


        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="pricing-box h10-pricing-box wow fadeInUp" data-wow-delay=".9s">
            <div class="pricing-header">
            <h4 class="package-name"><?php echo esc_html( $burger_get( 'texto_premium_plan', 'Premium Plan' ) ); ?></h4>
            <div class="package-desc">
                <p><?php echo esc_html( $burger_get( 'texto_advanced_business_services', 'Advanced Business Services' ) ); ?></p>
            </div>
            <div class="package-price">
                <span class="package-currency">$</span>
                <span class="price-number">499</span>
                <span class="package-period"><?php echo esc_html( $burger_get( 'texto_per_month_3', '/per month' ) ); ?></span>
            </div>

            </div>
            <div class="pricing-body">
            <div class="list-items">
                <div class="title-wrapper">
                <h5 class="title"><?php echo esc_html( $burger_get( 'texto_features_3', 'Features' ) ); ?></h5>
                <p class="desc"><?php echo esc_html( $burger_get( 'texto_includes_all_standard_plan_and_plus', 'Includes all Standard plan and Plus:' ) ); ?></p>
                </div>
                <ul>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_all_features_in_standard_plan', 'All features in Standard Plan' ) ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_dedicated_account_manager', 'Dedicated account manager' ) ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_tailored_strategy_sessions', 'Tailored strategy sessions' ) ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_quarterly_performance_audits', 'Quarterly performance audits' ) ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_priority_support', 'Priority support' ) ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_24_7_emergency_service', '24/7 emergency service' ) ); ?></li>
                </ul>
            </div>
            <div class="pricing-btn">
                <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html_3', 'contact.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_chose_plan_3', 'Chose Plan' ) ); ?></span></span>
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
