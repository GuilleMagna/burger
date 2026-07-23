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

<!-- start: Pricing Section 3 -->
<section class="h5-pricing section-gap">
    <div class="container gap-30-30">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading-wrap style-3">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_flexible_pricing', 'FLEXIBLE PRICING' ) ); ?></span>
            <div class="heading-wrap-content">
            <div class="sec-heading style-3">
                <h2 class="sec-title text-anim"><?php echo esc_html( $burger_get( 'texto_our_pricing_plan', 'Our Pricing Plan.' ) ); ?></h2>
            </div>
            <div class="wow fadeInUp" data-wow-delay=".5s">
                <p class="desc"><?php echo esc_html( $burger_get( 'texto_our_team_is_always_available_to_addres', 'Our team is always available to address your concerns, providing quick.' ) ); ?></p>
            </div>
            <div class="h5-pricing-tab-controllers wow fadeInUp" data-wow-delay=".6s" role="tablist">
                <button type="button" class="h5-pricing-tab-controller active"
                data-bs-target="#monthlyPackageContent" data-bs-toggle="tab">
                <?php echo esc_html( $burger_get( 'texto_monthly', 'Monthly' ) ); ?>
                </button>
                <button type="button" class="h5-pricing-tab-controller" data-bs-target="#yearlyPackageContent"
                data-bs-toggle="tab">
                <?php echo esc_html( $burger_get( 'texto_yearly', 'Yearly' ) ); ?>
                </button>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="row  ">
        <div class="col-12">
        <div class="tab-content  package__tab__content ">
            <div class="tab-pane active show" id="monthlyPackageContent">
            <div class="h5-pricing-box-wrapper">
                <div class="row ">
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-box h5-pricing-box h5-pricing-box-basic wow fadeInUp"
                    data-wow-delay=".3s">
                    <div class="pricing-header">
                        <h4 class="package-name"><?php echo esc_html( $burger_get( 'texto_basic_plan', 'Basic Plan' ) ); ?></h4>

                        <div class="package-price">
                        <span class="package-currency">$</span>
                        <span class="price-number">99</span>
                        <span class="package-period"><?php echo esc_html( $burger_get( 'texto_per_month', '/per month' ) ); ?></span>
                        </div>
                        <div class="package-desc">
                        <p><?php echo esc_html( $burger_get( 'texto_through_a_combination_of_the_our_data', 'Through a combination of the our data driven insights and innovative approaches.' ) ); ?></p>
                        </div>

                    </div>
                    <div class="list-items">
                        <h6 class="h5-pricing-list-title"><?php echo esc_html( $burger_get( 'texto_plan_include', 'Plan Include:' ) ); ?></h6>
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
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-box h5-pricing-box active wow fadeInUp" data-wow-delay=".4s">
                    <div class="pricing-header">
                        <h4 class="package-name"><?php echo esc_html( $burger_get( 'texto_standard_plan', 'Standard Plan' ) ); ?></h4>
                        <div class="package-price">
                        <span class="package-currency">$</span>
                        <span class="price-number">249</span>
                        <span class="package-period"><?php echo esc_html( $burger_get( 'texto_per_month_2', '/per month' ) ); ?></span>
                        </div>
                        <div class="package-desc">
                        <p><?php echo esc_html( $burger_get( 'texto_through_a_combination_of_the_our_data_2', 'Through a combination of the our data driven insights and innovative approaches.' ) ); ?></p>
                        </div>

                    </div>
                    <div class="list-items">
                        <h6 class="h5-pricing-list-title"><?php echo esc_html( $burger_get( 'texto_plan_include_2', 'Plan Include:' ) ); ?></h6>
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
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-box h5-pricing-box h5-pricing-box-premium wow fadeInUp"
                    data-wow-delay=".5s">
                    <div class="pricing-header">
                        <h4 class="package-name"><?php echo esc_html( $burger_get( 'texto_premium_plan', 'Premium Plan' ) ); ?></h4>
                        <div class="package-price">
                        <span class="package-currency">$</span>
                        <span class="price-number">499</span>
                        <span class="package-period"><?php echo esc_html( $burger_get( 'texto_per_month_3', '/per month' ) ); ?></span>
                        </div>
                        <div class="package-desc">
                        <p><?php echo esc_html( $burger_get( 'texto_through_a_combination_of_the_our_data_3', 'Through a combination of the our data driven insights and innovative approaches.' ) ); ?></p>
                        </div>
                    </div>
                    <div class="list-items">
                        <h6 class="h5-pricing-list-title"><?php echo esc_html( $burger_get( 'texto_plan_include_3', 'Plan Include:' ) ); ?></h6>
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
                <div class="bg-shape-1">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_2_svg', NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg' ) ); ?>" alt="">
                </div>
                <div class="bg-shape-2">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_3_svg', NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg' ) ); ?>" alt="">
                </div>
                <div class="bg-shape-3">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_shape_blur_2_svg', NAKAMA_THEME_URL . '/assets/images/shape/shape-blur-2.svg' ) ); ?>" alt="">
                </div>
            </div>
            </div>
            <div class="tab-pane" id="yearlyPackageContent">
            <div class="h5-pricing-box-wrapper">
                <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-box h5-pricing-box h5-pricing-box-basic wow fadeInUp"
                    data-wow-delay=".3s">
                    <div class="pricing-header">
                        <h4 class="package-name"><?php echo esc_html( $burger_get( 'texto_basic_plan_2', 'Basic Plan' ) ); ?></h4>

                        <div class="package-price">
                        <span class="package-currency">$</span>
                        <span class="price-number">299</span>
                        <span class="package-period"><?php echo esc_html( $burger_get( 'texto_per_year', '/per year' ) ); ?></span>
                        </div>
                        <div class="package-desc">
                        <p><?php echo esc_html( $burger_get( 'texto_through_a_combination_of_the_our_data_4', 'Through a combination of the our data driven insights and innovative approaches.' ) ); ?></p>
                        </div>

                    </div>
                    <div class="list-items">
                        <h6 class="h5-pricing-list-title"><?php echo esc_html( $burger_get( 'texto_plan_include_4', 'Plan Include:' ) ); ?></h6>
                        <ul>
                        <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_access_to_core_services_2', 'Access to core services' ) ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_limited_customer_support_email_2', 'Limited customer support (email)' ) ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_1_project_per_month_2', '1 project per month' ) ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_basic_reporting_and_analytics_2', 'Basic reporting and analytics' ) ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_standard_templates_and_tools_2', 'Standard templates and tools' ) ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_basic_performance_tracking_2', 'Basic performance tracking' ) ); ?></li>
                        </ul>
                    </div>
                    <div class="pricing-btn">
                        <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html_4', 'contact.html' ) ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_chose_plan_4', 'Chose Plan' ) ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-box h5-pricing-box active wow fadeInUp" data-wow-delay=".4s">
                    <div class="pricing-header">
                        <h4 class="package-name"><?php echo esc_html( $burger_get( 'texto_standard_plan_2', 'Standard Plan' ) ); ?></h4>
                        <div class="package-price">
                        <span class="package-currency">$</span>
                        <span class="price-number">549</span>
                        <span class="package-period"><?php echo esc_html( $burger_get( 'texto_per_year_2', '/per year' ) ); ?></span>
                        </div>
                        <div class="package-desc">
                        <p><?php echo esc_html( $burger_get( 'texto_through_a_combination_of_the_our_data_5', 'Through a combination of the our data driven insights and innovative approaches.' ) ); ?></p>
                        </div>

                    </div>
                    <div class="list-items">
                        <h6 class="h5-pricing-list-title"><?php echo esc_html( $burger_get( 'texto_plan_include_5', 'Plan Include:' ) ); ?></h6>
                        <ul>
                        <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_all_features_in_basic_plan_2', 'All features in Basic Plan' ) ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_priority_customer_support_2', 'Priority customer support' ) ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_up_to_3_projects_per_month_2', 'Up to 3 projects per month' ) ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_monthly_performance_reviews_2', 'Monthly performance reviews' ) ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_collaboration_tools_for_team_2', 'Collaboration tools for team' ) ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_custom_templates_2', 'Custom templates' ) ); ?></li>
                        </ul>
                    </div>
                    <div class="pricing-btn">
                        <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html_5', 'contact.html' ) ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_chose_plan_5', 'Chose Plan' ) ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-box h5-pricing-box h5-pricing-box-premium wow fadeInUp"
                    data-wow-delay=".5s">
                    <div class="pricing-header">
                        <h4 class="package-name"><?php echo esc_html( $burger_get( 'texto_premium_plan_2', 'Premium Plan' ) ); ?></h4>
                        <div class="package-price">
                        <span class="package-currency">$</span>
                        <span class="price-number">899</span>
                        <span class="package-period"><?php echo esc_html( $burger_get( 'texto_per_year_3', '/per year' ) ); ?></span>
                        </div>
                        <div class="package-desc">
                        <p><?php echo esc_html( $burger_get( 'texto_through_a_combination_of_the_our_data_6', 'Through a combination of the our data driven insights and innovative approaches.' ) ); ?></p>
                        </div>
                    </div>
                    <div class="list-items">
                        <h6 class="h5-pricing-list-title"><?php echo esc_html( $burger_get( 'texto_plan_include_6', 'Plan Include:' ) ); ?></h6>
                        <ul>
                        <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_all_features_in_standard_plan_2', 'All features in Standard Plan' ) ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_dedicated_account_manager_2', 'Dedicated account manager' ) ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_tailored_strategy_sessions_2', 'Tailored strategy sessions' ) ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_quarterly_performance_audits_2', 'Quarterly performance audits' ) ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_priority_support_2', 'Priority support' ) ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_24_7_emergency_service_2', '24/7 emergency service' ) ); ?></li>
                        </ul>
                    </div>
                    <div class="pricing-btn">
                        <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html_6', 'contact.html' ) ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_chose_plan_6', 'Chose Plan' ) ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                        </a>
                    </div>
                    </div>
                </div>
                </div>
                <div class="bg-shape-1">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_2_svg_2', NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg' ) ); ?>" alt="">
                </div>
                <div class="bg-shape-2">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_3_svg_2', NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg' ) ); ?>" alt="">
                </div>
                <div class="bg-shape-3">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_shape_blur_2_svg_2', NAKAMA_THEME_URL . '/assets/images/shape/shape-blur-2.svg' ) ); ?>" alt="">
                </div>
            </div>
            </div>


        </div>


        </div>
    </div>
    </div>

</section>
<!-- end: Pricing Section 3 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
