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

<!-- start: Service Section -->
<section class="tj-service-section overflow-hidden section-gap section-gap-x">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading text-center">
            <span class="sub-title text-white wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_our_solutions', 'Our Solutions' ) ); ?></span>
            <h2 class="sec-title text-white title-anim"><?php echo esc_html( $burger_get( 'texto_solutions_to_transform_your', 'Solutions to Transform Your' ) ); ?> <span><?php echo esc_html( $burger_get( 'texto_business', 'Business.' ) ); ?></span></h2>
        </div>
        </div>
    </div>
    </div>
    <div class="container-fluid p-0">
    <div class="row">
        <div class="col-12">
        <div class="service-wrapper wow fadeInUp" data-wow-delay=".4s">
            <div class="swiper service-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="service-item style-1">
                    <div class="service-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_service_1_webp', NAKAMA_THEME_URL . '/assets/images/service/service-1.webp' ) ); ?>" alt="">
                    </div>
                    <div class="service-icon">
                    <i class="tji-service-1"></i>
                    </div>
                    <div class="service-content">
                    <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_strategy_development', 'Business Strategy Development' ) ); ?></a></h4>
                    <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_through_a_combination_of_data_driven_i', 'Through a combination of data-driven insights and innovative approaches, we work closely with you to develop customized.' ) ); ?></p>
                    <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_2', 'service-details.html' ) ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more', 'Learn More' ) ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="service-item style-1">
                    <div class="service-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_service_5_webp', NAKAMA_THEME_URL . '/assets/images/service/service-5.webp' ) ); ?>" alt="">
                    </div>
                    <div class="service-icon">
                    <i class="tji-service-2"></i>
                    </div>
                    <div class="service-content">
                    <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_3', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_customer_experience_solutions', 'Customer Experience Solutions' ) ); ?></a></h4>
                    <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_developing_personalized_customer_journ', 'Developing personalized customer journeys to increase satisfaction and loyalty of our expansion to keep competitive.' ) ); ?></p>
                    <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_4', 'service-details.html' ) ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more_2', 'Learn More' ) ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="service-item style-1">
                    <div class="service-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_service_6_webp', NAKAMA_THEME_URL . '/assets/images/service/service-6.webp' ) ); ?>" alt="">
                    </div>
                    <div class="service-icon">
                    <i class="tji-service-3"></i>
                    </div>
                    <div class="service-content">
                    <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_5', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_sustainability_and_esg_consulting', 'Sustainability and ESG Consulting' ) ); ?></a></h4>
                    <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_provide_tailored_strategies_that_not_o', 'Provide tailored strategies that not only drive long-term value but also build trust with stakeholders, investors.' ) ); ?></p>
                    <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_6', 'service-details.html' ) ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more_3', 'Learn More' ) ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="service-item style-1">
                    <div class="service-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_service_7_webp', NAKAMA_THEME_URL . '/assets/images/service/service-7.webp' ) ); ?>" alt="">
                    </div>
                    <div class="service-icon">
                    <i class="tji-service-4"></i>
                    </div>
                    <div class="service-content">
                    <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_7', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_training_and_development_programs', 'Training and Development Programs' ) ); ?></a></h4>
                    <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_training_and_development_programs_are', 'Training and Development Programs are designed to empower employees with the skills, knowledge, and tools they need.' ) ); ?></p>
                    <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_8', 'service-details.html' ) ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more_4', 'Learn More' ) ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>
                </div>
                </div>
            </div>
            <div class="swiper-pagination-area white-pagination"></div>
            </div>
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
</section>
<!-- end: Service Section -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
