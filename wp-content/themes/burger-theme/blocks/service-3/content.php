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

<!-- start: Service Section 3 -->
<section class="tj-service-section service-3 section-gap">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="sec-heading style-3 text-center">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_our_solutions', 'Our Solutions' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_tailor_business_solutions_for_corporat', 'Tailor Business Solutions for Corporates.' ) ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="service-wrapper">
            <div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
            <div class="service-content-wrap">
                <div class="service-title">
                <div class="service-icon">
                    <i class="tji-service-1"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_strategy_development', 'Business Strategy Development' ) ); ?></a></h4>
                </div>
                <div class="service-content">
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_through_a_combination_of_data_driven_i', 'Through a combination of data-driven insights and innovative approaches, we work closely with you to develop customized.' ) ); ?></p>
                </div>
            </div>
            <div class="service-reveal-bg" data-bg-image="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_service_2_webp', NAKAMA_THEME_URL . '/assets/images/service/service-2.webp' ) ); ?>"></div>
            </div>
            <div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
            <div class="service-content-wrap">
                <div class="service-title">
                <div class="service-icon">
                    <i class="tji-service-2"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_2', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_customer_experience_solutions', 'Customer Experience Solutions' ) ); ?></a></h4>
                </div>
                <div class="service-content">
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_customer_experience_solutions_are_desi', 'Customer Experience Solutions are designed to enhance every touchpoint of your customer journey, from first interaction.' ) ); ?></p>
                </div>
            </div>
            <div class="service-reveal-bg" data-bg-image="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_service_3_webp', NAKAMA_THEME_URL . '/assets/images/service/service-3.webp' ) ); ?>"></div>
            </div>
            <div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
            <div class="service-content-wrap">
                <div class="service-title">
                <div class="service-icon">
                    <i class="tji-service-3"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_3', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_sustainability_and_esg_consulting', 'Sustainability and ESG Consulting' ) ); ?></a></h4>
                </div>
                <div class="service-content">
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_provide_tailored_strategies_that_not_o', 'Provide tailored strategies that not only drive long-term value but also build trust with stakeholders, investors.' ) ); ?></p>
                </div>
            </div>
            <div class="service-reveal-bg" data-bg-image="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_service_4_webp', NAKAMA_THEME_URL . '/assets/images/service/service-4.webp' ) ); ?>"></div>
            </div>
            <div class="service-item style-3 wow fadeInUp" data-wow-delay=".3s">
            <div class="service-content-wrap">
                <div class="service-title">
                <div class="service-icon">
                    <i class="tji-service-4"></i>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_4', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_training_and_development_programs', 'Training and Development Programs' ) ); ?></a></h4>
                </div>
                <div class="service-content">
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_training_and_development_programs_are', 'Training and Development Programs are designed to empower employees with the skills, knowledge, and tools they need.' ) ); ?></p>
                </div>
            </div>
            <div class="service-reveal-bg" data-bg-image="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_service_6_webp', NAKAMA_THEME_URL . '/assets/images/service/service-6.webp' ) ); ?>"></div>
            </div>
        </div>
        <div class="service-btn-area text-center wow fadeInUp" data-wow-delay=".3s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_service_html', 'service.html' ) ); ?>">
            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_more_services', 'More Services' ) ); ?></span></span>
            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Service Section 3 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
