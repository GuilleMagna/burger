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

<!-- start: Service Section 8 -->
<section class="h8-service overflow-hidden section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading style-3 sec-heading-centered">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_our_solutions', 'Our Solutions' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_tailor_business_solutions_for_corporat', 'Tailor Business Solutions for Corporates.' ) ); ?></h2>
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
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_strategies_development', 'Business Strategies Development' ) ); ?></a></h4>
                <div class="service-content">
                    <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_through_a_combination_of_data_driven_i', 'Through a combination of data-driven insights and innovative approaches, we work closely with you to develop customized.' ) ); ?>
                    </p>
                    <ul class="list-items">
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_expansion_strategies', 'Expansion Strategies' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_operational_efficiency', 'Operational Efficiency' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_competitive_edge', 'Competitive Edge' ) ); ?></li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <div class="service-item h8-service-item">
                <div class="service-icon">
                    <i class="tji-service-1"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_2', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_customer_experience_solutions', 'Customer Experience Solutions' ) ); ?></a></h4>
                <div class="service-content">
                    <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_through_a_combination_of_data_driven_i_2', 'Through a combination of data-driven insights and innovative approaches, we work closely with you to develop customized.' ) ); ?></p>
                    <ul class="list-items">
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_expansion_strategies_2', 'Expansion Strategies' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_operational_efficiency_2', 'Operational Efficiency' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_competitive_edge_2', 'Competitive Edge' ) ); ?></li>
                    </ul>
                </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4">
                <div class="service-item h8-service-item">
                <div class="service-icon">
                    <i class="tji-service-3"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_3', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_sustainability_and_esg_consulting', 'Sustainability and ESG Consulting' ) ); ?></a></h4>
                <div class="service-content">
                    <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_through_a_combination_of_data_driven_i_3', 'Through a combination of data-driven insights and innovative approaches, we work closely with you to develop customized.' ) ); ?></p>
                    <ul class="list-items">
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_expansion_strategies_3', 'Expansion Strategies' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_operational_efficiency_3', 'Operational Efficiency' ) ); ?></li>
                    <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_competitive_edge_3', 'Competitive Edge' ) ); ?></li>
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
            <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_service_html', 'service.html' ) ); ?>">
            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_more_services', 'More services' ) ); ?></span></span>
            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Service Section 8 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
