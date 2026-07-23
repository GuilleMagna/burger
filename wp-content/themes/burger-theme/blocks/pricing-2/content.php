<?php
$__block_fields = function_exists('get_fields') ? (array) get_fields() : [];
$__block_cache_key = 'acf_block_' . md5(($block['id'] ?? basename(__DIR__)) . serialize($__block_fields));

if (($__block_cached_html = get_transient($__block_cache_key)) !== false) {
    echo $__block_cached_html;
    return;
}

ob_start();
?>
<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Pricing Section 2 -->
<section class="tj-pricing-section-2 section-gap section-separator slidebar-stickiy-container">
    <div class="container">
    <div class="row">
        <div class="col-lg-8 order-2 order-lg-1">
        <div class="accordion tj-faq pricing-accordion" id="pricing">
            <div class="accordion-item pricing-box active wow fadeInUp" data-wow-delay=".3s">
            <button class="faq-title" type="button" data-bs-toggle="collapse" data-bs-target="#pricing-1"
                aria-expanded="true"><?php echo esc_html( $burger_get( 'texto_basic_plan', 'Basic Plan' ) ); ?></button>
            <div id="pricing-1" class="collapse show" data-bs-parent="#pricing">
                <div class="accordion-body pricing-inner">
                <div class="pricing-header">
                    <div class="pricing-top">
                    <div class="package-desc">
                        <p><?php echo esc_html( $burger_get( 'texto_essential_business_services', 'Essential Business Services' ) ); ?></p>
                    </div>
                    <div class="package-price">
                        <span class="package-currency">$</span>
                        <span class="price-number">99</span>
                        <span class="package-period"><?php echo esc_html( $burger_get( 'texto_per_month', '/per month' ) ); ?></span>
                    </div>
                    </div>
                    <div class="pricing-btn">
                    <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_chose_plan', 'Chose Plan' ) ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>
                </div>
                <div class="list-items">
                    <ul>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_access_to_core_services', 'Access to core services' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_limited_customer_support_email', 'Limited customer support (email)' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_1_project_per_month', '1 project per month' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_basic_reporting_and_analytics', 'Basic reporting and analytics' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_standard_templates_and_tools', 'Standard templates and tools' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_basic_performance_tracking', 'Basic performance tracking' ) ); ?></li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
            <div class="accordion-item pricing-box wow fadeInUp" data-wow-delay=".3s">
            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#pricing-2" aria-expanded="false"><?php echo esc_html( $burger_get( 'texto_standard_plan', 'Standard Plan' ) ); ?></button>
            <div id="pricing-2" class="collapse" data-bs-parent="#pricing">
                <div class="accordion-body pricing-inner">
                <div class="pricing-header">
                    <div class="package-desc">
                    <p><?php echo esc_html( $burger_get( 'texto_complete_business_solutions', 'Complete Business Solutions' ) ); ?></p>
                    </div>
                    <div class="package-price">
                    <span class="package-currency">$</span>
                    <span class="price-number">249</span>
                    <span class="package-period"><?php echo esc_html( $burger_get( 'texto_per_month_2', '/per month' ) ); ?></span>
                    </div>
                    <div class="pricing-btn">
                    <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html_2', 'contact.html' ) ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_chose_plan_2', 'Chose Plan' ) ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>
                </div>
                <div class="list-items">
                    <ul>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_all_features_in_basic_plan', 'All features in Basic Plan' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_priority_customer_support', 'Priority customer support' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_up_to_3_projects_per_month', 'Up to 3 projects per month' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_monthly_performance_reviews', 'Monthly performance reviews' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_collaboration_tools_for_team', 'Collaboration tools for team' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_custom_templates', 'Custom templates' ) ); ?></li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
            <div class="accordion-item pricing-box wow fadeInUp" data-wow-delay=".3s">
            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#pricing-3" aria-expanded="false"><?php echo esc_html( $burger_get( 'texto_premium_plan', 'Premium Plan' ) ); ?></button>
            <div id="pricing-3" class="collapse" data-bs-parent="#pricing">
                <div class="accordion-body pricing-inner">
                <div class="pricing-header">
                    <div class="package-desc">
                    <p><?php echo esc_html( $burger_get( 'texto_advanced_business_services', 'Advanced Business Services' ) ); ?></p>
                    </div>
                    <div class="package-price">
                    <span class="package-currency">$</span>
                    <span class="price-number">499</span>
                    <span class="package-period"><?php echo esc_html( $burger_get( 'texto_per_month_3', '/per month' ) ); ?></span>
                    </div>
                    <div class="pricing-btn">
                    <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html_3', 'contact.html' ) ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_chose_plan_3', 'Chose Plan' ) ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>
                </div>
                <div class="list-items">
                    <ul>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_all_features_in_standard_plan', 'All features in Standard Plan' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_dedicated_account_manager', 'Dedicated account manager' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_tailored_strategy_sessions', 'Tailored strategy sessions' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_quarterly_performance_audits', 'Quarterly performance audits' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_priority_support', 'Priority support' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_24_7_emergency_service', '24/7 emergency service' ) ); ?></li>
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
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_flexible_pricing', 'Flexible pricing' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_our_pricing_plan', 'Our Pricing Plan.' ) ); ?></h2>
            </div>
            <p class="desc"><?php echo esc_html( $burger_get( 'texto_our_team_is_always_available_to_addres', 'Our team is always available to address your concerns, providing quick.' ) ); ?></p>
            <div class="d-none d-lg-inline-flex wow fadeInUp" data-wow-delay=".6s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_pricing_html', 'pricing.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_more_pricing', 'More Pricing' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="d-lg-none d-flex mt-5">
            <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_pricing_html_2', 'pricing.html' ) ); ?>">
            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_more_pricing_2', 'More Pricing' ) ); ?></span></span>
            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Pricing Section 2 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
