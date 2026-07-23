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

<!-- start: Service Section 5 -->
<section class="h5-service-section overflow-hidden section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading-wrap style-3">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_our_solutions', 'Our Solutions' ) ); ?></span>
            <div class="heading-wrap-content">
            <div class="sec-heading style-3">
                <h2 class="sec-title text-anim"><?php echo esc_html( $burger_get( 'texto_tailor_business_solutions_for_corporat', 'Tailor Business Solutions for Corporates.' ) ); ?></h2>
            </div>
            <div class="btn-area wow fadeInUp" data-wow-delay=".8s">
                <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_explore_more', 'Explore More' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="service-wrapper wow fadeInUp" data-wow-delay=".4s">
            <div class="swiper service-slider-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="service-item style-6">
                    <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_strategy_development', 'Business Strategy Development' ) ); ?></a></h4>
                    <div class="service-icon">
                    <i class="tji-service-1"></i>
                    </div>
                    <div class="service-content">
                    <p class="desc"><?php echo esc_html( $burger_get( 'texto_through_a_combination_of_data_driven_i', 'Through a combination of data-driven insights and innovative approaches business.' ) ); ?></p>
                    <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_2', 'service-details.html' ) ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more', 'Learn More' ) ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="service-item style-6">
                    <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_3', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_customer_experience_solutions', 'Customer Experience Solutions' ) ); ?></a></h4>
                    <div class="service-icon">
                    <i class="tji-service-2"></i>
                    </div>
                    <div class="service-content">
                    <p class="desc"><?php echo esc_html( $burger_get( 'texto_developing_personalized_customer_journ', 'Developing personalized customer journeys to increase satisfaction and loyalty.' ) ); ?>
                    </p>
                    <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_4', 'service-details.html' ) ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more_2', 'Learn More' ) ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="service-item style-6">
                    <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_5', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_sustainability_esg_consulting', 'Sustainability & ESG Consulting' ) ); ?></a></h4>
                    <div class="service-icon">
                    <i class="tji-service-3"></i>
                    </div>
                    <div class="service-content">
                    <p class="desc"><?php echo esc_html( $burger_get( 'texto_provide_tailored_strategies_that_not_o', 'Provide tailored strategies that not only drive long-term value but also build trust.' ) ); ?></p>
                    <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_6', 'service-details.html' ) ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more_3', 'Learn More' ) ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="service-item style-6">
                    <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_7', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_training_development_programs', 'Training Development Programs' ) ); ?></a></h4>
                    <div class="service-icon">
                    <i class="tji-service-4"></i>
                    </div>
                    <div class="service-content">
                    <p class="desc"><?php echo esc_html( $burger_get( 'texto_training_development_programs_designed', 'Training Development Programs designed empower employees with skills, knowledge.' ) ); ?>
                    </p>
                    <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_8', 'service-details.html' ) ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more_4', 'Learn More' ) ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>
                </div>
                </div>
            </div>
            <div class="swiper-pagination-area"></div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Service Section 5 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
