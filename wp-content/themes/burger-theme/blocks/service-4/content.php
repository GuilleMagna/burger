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

<!-- start: Service Section 4 -->
<section class="tj-service-section-5 section-gap">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="sec-heading style-4 text-center">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_our_solutions', 'Our Solutions' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_tailor_business_solutions_for_corporat', 'Tailor Business Solutions for Corporates.' ) ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="service-wrapper">
            <div class="service-item style-5 service-stack">
            <div class="service-content-area">
                <div class="service-icon">
                <i class="tji-service-1"></i>
                </div>
                <div class="service-content">
                <span class="no">01.</span>
                <h3 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_strategy_development', 'Business Strategy Development' ) ); ?></a></h3>
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_through_a_combination_of_data_driven_i', 'Through a combination of data-driven insights and innovative approaches, we work closely with you to develop customized.' ) ); ?></p>
                <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_2', 'service-details.html' ) ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more', 'Learn More' ) ); ?></span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>
            <div class="service-img">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_service_6_webp', NAKAMA_THEME_URL . '/assets/images/service/service-6.webp' ) ); ?>" alt="">
            </div>
            </div>
            <div class="service-item style-5 service-stack">
            <div class="service-content-area">
                <div class="service-icon">
                <i class="tji-service-2"></i>
                </div>
                <div class="service-content">
                <span class="no">02.</span>
                <h3 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_3', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_customer_experience_solutions', 'Customer Experience Solutions' ) ); ?></a></h3>
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_customer_experience_solutions_are_desi', 'Customer Experience Solutions are designed to enhance every touchpoint of your customer journey, from first interaction.' ) ); ?></p>
                <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_4', 'service-details.html' ) ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more_2', 'Learn More' ) ); ?></span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>
            <div class="service-img">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_service_1_webp', NAKAMA_THEME_URL . '/assets/images/service/service-1.webp' ) ); ?>" alt="">
            </div>
            </div>
            <div class="service-item style-5">
            <div class="service-content-area">
                <div class="service-icon">
                <i class="tji-service-3"></i>
                </div>
                <div class="service-content">
                <span class="no">03.</span>
                <h3 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_5', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_sustainability_and_esg_consulting', 'Sustainability and ESG Consulting' ) ); ?></a></h3>
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_provide_tailored_strategies_that_not_o', 'Provide tailored strategies that not only drive long-term value but also build trust with stakeholders, investors.' ) ); ?></p>
                <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_6', 'service-details.html' ) ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more_3', 'Learn More' ) ); ?></span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>
            <div class="service-img">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_service_7_webp', NAKAMA_THEME_URL . '/assets/images/service/service-7.webp' ) ); ?>" alt="">
            </div>
            </div>
        </div>
        <div class="service-bottom-text">
            <p class="desc"><span><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_unlock_tailored_solutions_without_the', 'Unlock tailored solutions without the wasted effort.' ) ); ?> <a
                href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_talk_to_us_today', 'Talk to us today' ) ); ?></a></span>
            </p>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Service Section 4 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
