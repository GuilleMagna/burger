<?php
$content_fields = array(
    'texto_flexible_pricing' => 'FLEXIBLE PRICING',
    'texto_our_pricing_plan' => 'Our Pricing Plan.',
    'texto_our_team_is_always_available_to_addres' => 'Our team is always available to address your concerns, providing quick.',
    'texto_monthly' => 'Monthly',
    'texto_yearly' => 'Yearly',
    'texto_basic_plan' => 'Basic Plan',
    'texto_per_month' => '/per month',
    'texto_through_a_combination_of_the_our_data' => 'Through a combination of the our data driven insights and innovative approaches.',
    'texto_plan_include' => 'Plan Include:',
    'texto_access_to_core_services' => 'Access to core services',
    'texto_limited_customer_support_email' => 'Limited customer support (email)',
    'texto_1_project_per_month' => '1 project per month',
    'texto_basic_reporting_and_analytics' => 'Basic reporting and analytics',
    'texto_standard_templates_and_tools' => 'Standard templates and tools',
    'texto_basic_performance_tracking' => 'Basic performance tracking',
    'link_contact_html' => 'contact.html',
    'texto_chose_plan' => 'Chose Plan',
    'texto_standard_plan' => 'Standard Plan',
    'texto_per_month_2' => '/per month',
    'texto_through_a_combination_of_the_our_data_2' => 'Through a combination of the our data driven insights and innovative approaches.',
    'texto_plan_include_2' => 'Plan Include:',
    'texto_all_features_in_basic_plan' => 'All features in Basic Plan',
    'texto_priority_customer_support' => 'Priority customer support',
    'texto_up_to_3_projects_per_month' => 'Up to 3 projects per month',
    'texto_monthly_performance_reviews' => 'Monthly performance reviews',
    'texto_collaboration_tools_for_team' => 'Collaboration tools for team',
    'texto_custom_templates' => 'Custom templates',
    'link_contact_html_2' => 'contact.html',
    'texto_chose_plan_2' => 'Chose Plan',
    'texto_premium_plan' => 'Premium Plan',
    'texto_per_month_3' => '/per month',
    'texto_through_a_combination_of_the_our_data_3' => 'Through a combination of the our data driven insights and innovative approaches.',
    'texto_plan_include_3' => 'Plan Include:',
    'texto_all_features_in_standard_plan' => 'All features in Standard Plan',
    'texto_dedicated_account_manager' => 'Dedicated account manager',
    'texto_tailored_strategy_sessions' => 'Tailored strategy sessions',
    'texto_quarterly_performance_audits' => 'Quarterly performance audits',
    'texto_priority_support' => 'Priority support',
    'texto_24_7_emergency_service' => '24/7 emergency service',
    'link_contact_html_3' => 'contact.html',
    'texto_chose_plan_3' => 'Chose Plan',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
    'imagen_assets_images_shape_shape_blur_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/shape-blur-2.svg',
    'texto_basic_plan_2' => 'Basic Plan',
    'texto_per_year' => '/per year',
    'texto_through_a_combination_of_the_our_data_4' => 'Through a combination of the our data driven insights and innovative approaches.',
    'texto_plan_include_4' => 'Plan Include:',
    'texto_access_to_core_services_2' => 'Access to core services',
    'texto_limited_customer_support_email_2' => 'Limited customer support (email)',
    'texto_1_project_per_month_2' => '1 project per month',
    'texto_basic_reporting_and_analytics_2' => 'Basic reporting and analytics',
    'texto_standard_templates_and_tools_2' => 'Standard templates and tools',
    'texto_basic_performance_tracking_2' => 'Basic performance tracking',
    'link_contact_html_4' => 'contact.html',
    'texto_chose_plan_4' => 'Chose Plan',
    'texto_standard_plan_2' => 'Standard Plan',
    'texto_per_year_2' => '/per year',
    'texto_through_a_combination_of_the_our_data_5' => 'Through a combination of the our data driven insights and innovative approaches.',
    'texto_plan_include_5' => 'Plan Include:',
    'texto_all_features_in_basic_plan_2' => 'All features in Basic Plan',
    'texto_priority_customer_support_2' => 'Priority customer support',
    'texto_up_to_3_projects_per_month_2' => 'Up to 3 projects per month',
    'texto_monthly_performance_reviews_2' => 'Monthly performance reviews',
    'texto_collaboration_tools_for_team_2' => 'Collaboration tools for team',
    'texto_custom_templates_2' => 'Custom templates',
    'link_contact_html_5' => 'contact.html',
    'texto_chose_plan_5' => 'Chose Plan',
    'texto_premium_plan_2' => 'Premium Plan',
    'texto_per_year_3' => '/per year',
    'texto_through_a_combination_of_the_our_data_6' => 'Through a combination of the our data driven insights and innovative approaches.',
    'texto_plan_include_6' => 'Plan Include:',
    'texto_all_features_in_standard_plan_2' => 'All features in Standard Plan',
    'texto_dedicated_account_manager_2' => 'Dedicated account manager',
    'texto_tailored_strategy_sessions_2' => 'Tailored strategy sessions',
    'texto_quarterly_performance_audits_2' => 'Quarterly performance audits',
    'texto_priority_support_2' => 'Priority support',
    'texto_24_7_emergency_service_2' => '24/7 emergency service',
    'link_contact_html_6' => 'contact.html',
    'texto_chose_plan_6' => 'Chose Plan',
    'imagen_assets_images_shape_pattern_2_svg_2' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg_2' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
    'imagen_assets_images_shape_shape_blur_2_svg_2' => NAKAMA_THEME_URL . '/assets/images/shape/shape-blur-2.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Pricing Section 3 -->
<section class="h5-pricing section-gap">
    <div class="container gap-30-30">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading-wrap style-3">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_flexible_pricing ); ?></span>
            <div class="heading-wrap-content">
            <div class="sec-heading style-3">
                <h2 class="sec-title text-anim"><?php echo esc_html( $texto_our_pricing_plan ); ?></h2>
            </div>
            <div class="wow fadeInUp" data-wow-delay=".5s">
                <p class="desc"><?php echo esc_html( $texto_our_team_is_always_available_to_addres ); ?></p>
            </div>
            <div class="h5-pricing-tab-controllers wow fadeInUp" data-wow-delay=".6s" role="tablist">
                <button type="button" class="h5-pricing-tab-controller active"
                data-bs-target="#monthlyPackageContent" data-bs-toggle="tab">
                <?php echo esc_html( $texto_monthly ); ?>
                </button>
                <button type="button" class="h5-pricing-tab-controller" data-bs-target="#yearlyPackageContent"
                data-bs-toggle="tab">
                <?php echo esc_html( $texto_yearly ); ?>
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
                        <h4 class="package-name"><?php echo esc_html( $texto_basic_plan ); ?></h4>

                        <div class="package-price">
                        <span class="package-currency">$</span>
                        <span class="price-number">99</span>
                        <span class="package-period"><?php echo esc_html( $texto_per_month ); ?></span>
                        </div>
                        <div class="package-desc">
                        <p><?php echo esc_html( $texto_through_a_combination_of_the_our_data ); ?></p>
                        </div>

                    </div>
                    <div class="list-items">
                        <h6 class="h5-pricing-list-title"><?php echo esc_html( $texto_plan_include ); ?></h6>
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
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-box h5-pricing-box active wow fadeInUp" data-wow-delay=".4s">
                    <div class="pricing-header">
                        <h4 class="package-name"><?php echo esc_html( $texto_standard_plan ); ?></h4>
                        <div class="package-price">
                        <span class="package-currency">$</span>
                        <span class="price-number">249</span>
                        <span class="package-period"><?php echo esc_html( $texto_per_month_2 ); ?></span>
                        </div>
                        <div class="package-desc">
                        <p><?php echo esc_html( $texto_through_a_combination_of_the_our_data_2 ); ?></p>
                        </div>

                    </div>
                    <div class="list-items">
                        <h6 class="h5-pricing-list-title"><?php echo esc_html( $texto_plan_include_2 ); ?></h6>
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
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-box h5-pricing-box h5-pricing-box-premium wow fadeInUp"
                    data-wow-delay=".5s">
                    <div class="pricing-header">
                        <h4 class="package-name"><?php echo esc_html( $texto_premium_plan ); ?></h4>
                        <div class="package-price">
                        <span class="package-currency">$</span>
                        <span class="price-number">499</span>
                        <span class="package-period"><?php echo esc_html( $texto_per_month_3 ); ?></span>
                        </div>
                        <div class="package-desc">
                        <p><?php echo esc_html( $texto_through_a_combination_of_the_our_data_3 ); ?></p>
                        </div>
                    </div>
                    <div class="list-items">
                        <h6 class="h5-pricing-list-title"><?php echo esc_html( $texto_plan_include_3 ); ?></h6>
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
                <div class="bg-shape-1">
                <img src="<?php echo esc_url( $imagen_assets_images_shape_pattern_2_svg ); ?>" alt="">
                </div>
                <div class="bg-shape-2">
                <img src="<?php echo esc_url( $imagen_assets_images_shape_pattern_3_svg ); ?>" alt="">
                </div>
                <div class="bg-shape-3">
                <img src="<?php echo esc_url( $imagen_assets_images_shape_shape_blur_2_svg ); ?>" alt="">
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
                        <h4 class="package-name"><?php echo esc_html( $texto_basic_plan_2 ); ?></h4>

                        <div class="package-price">
                        <span class="package-currency">$</span>
                        <span class="price-number">299</span>
                        <span class="package-period"><?php echo esc_html( $texto_per_year ); ?></span>
                        </div>
                        <div class="package-desc">
                        <p><?php echo esc_html( $texto_through_a_combination_of_the_our_data_4 ); ?></p>
                        </div>

                    </div>
                    <div class="list-items">
                        <h6 class="h5-pricing-list-title"><?php echo esc_html( $texto_plan_include_4 ); ?></h6>
                        <ul>
                        <li><i class="tji-list"></i><?php echo esc_html( $texto_access_to_core_services_2 ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $texto_limited_customer_support_email_2 ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $texto_1_project_per_month_2 ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $texto_basic_reporting_and_analytics_2 ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $texto_standard_templates_and_tools_2 ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $texto_basic_performance_tracking_2 ); ?></li>
                        </ul>
                    </div>
                    <div class="pricing-btn">
                        <a class="text-btn" href="<?php echo esc_url( $link_contact_html_4 ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $texto_chose_plan_4 ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-box h5-pricing-box active wow fadeInUp" data-wow-delay=".4s">
                    <div class="pricing-header">
                        <h4 class="package-name"><?php echo esc_html( $texto_standard_plan_2 ); ?></h4>
                        <div class="package-price">
                        <span class="package-currency">$</span>
                        <span class="price-number">549</span>
                        <span class="package-period"><?php echo esc_html( $texto_per_year_2 ); ?></span>
                        </div>
                        <div class="package-desc">
                        <p><?php echo esc_html( $texto_through_a_combination_of_the_our_data_5 ); ?></p>
                        </div>

                    </div>
                    <div class="list-items">
                        <h6 class="h5-pricing-list-title"><?php echo esc_html( $texto_plan_include_5 ); ?></h6>
                        <ul>
                        <li><i class="tji-list"></i><?php echo esc_html( $texto_all_features_in_basic_plan_2 ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $texto_priority_customer_support_2 ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $texto_up_to_3_projects_per_month_2 ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $texto_monthly_performance_reviews_2 ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $texto_collaboration_tools_for_team_2 ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $texto_custom_templates_2 ); ?></li>
                        </ul>
                    </div>
                    <div class="pricing-btn">
                        <a class="text-btn" href="<?php echo esc_url( $link_contact_html_5 ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $texto_chose_plan_5 ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                        </a>
                    </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-box h5-pricing-box h5-pricing-box-premium wow fadeInUp"
                    data-wow-delay=".5s">
                    <div class="pricing-header">
                        <h4 class="package-name"><?php echo esc_html( $texto_premium_plan_2 ); ?></h4>
                        <div class="package-price">
                        <span class="package-currency">$</span>
                        <span class="price-number">899</span>
                        <span class="package-period"><?php echo esc_html( $texto_per_year_3 ); ?></span>
                        </div>
                        <div class="package-desc">
                        <p><?php echo esc_html( $texto_through_a_combination_of_the_our_data_6 ); ?></p>
                        </div>
                    </div>
                    <div class="list-items">
                        <h6 class="h5-pricing-list-title"><?php echo esc_html( $texto_plan_include_6 ); ?></h6>
                        <ul>
                        <li><i class="tji-list"></i><?php echo esc_html( $texto_all_features_in_standard_plan_2 ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $texto_dedicated_account_manager_2 ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $texto_tailored_strategy_sessions_2 ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $texto_quarterly_performance_audits_2 ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $texto_priority_support_2 ); ?></li>
                        <li><i class="tji-list"></i><?php echo esc_html( $texto_24_7_emergency_service_2 ); ?></li>
                        </ul>
                    </div>
                    <div class="pricing-btn">
                        <a class="text-btn" href="<?php echo esc_url( $link_contact_html_6 ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $texto_chose_plan_6 ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                        </a>
                    </div>
                    </div>
                </div>
                </div>
                <div class="bg-shape-1">
                <img src="<?php echo esc_url( $imagen_assets_images_shape_pattern_2_svg_2 ); ?>" alt="">
                </div>
                <div class="bg-shape-2">
                <img src="<?php echo esc_url( $imagen_assets_images_shape_pattern_3_svg_2 ); ?>" alt="">
                </div>
                <div class="bg-shape-3">
                <img src="<?php echo esc_url( $imagen_assets_images_shape_shape_blur_2_svg_2 ); ?>" alt="">
                </div>
            </div>
            </div>


        </div>


        </div>
    </div>
    </div>

</section>
<!-- end: Pricing Section 3 -->
