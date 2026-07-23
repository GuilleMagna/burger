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

<!-- start: Service Section 9 -->
<section class="h9-service section-gap  section-gap-x tj-sticky-panel-container-2 tj-progress-wrapper">
    <div class="container">
    <div class="row">
        <div class="col-12 col-lg-4 ">
        <div class="sec-heading style-8  tj-sticky-panel-2">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $burger_get( 'texto_choose_the_best', 'CHOOSE THE BEST' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_scalable_business_services', 'Scalable business services' ) ); ?></h2>
            <div class="h9-service-more wow fadeInUp" data-wow-delay=".3s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_service_html', 'service.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_more_services', 'More services' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
        <div class="col-12 col-lg-8 ">
        <div class="h9-service-scroll-progress tj-scroll-progress tj-sticky-panel-2">
            <div class="tj-scroll-progress-item active">
            <h5 class="tj-scroll-progress-sln">01.</h5>
            <div class="tj-scroll-progress-ind">
                <div class="tj-scroll-progress-ind-inner"></div>
            </div>
            </div>
            <div class="tj-scroll-progress-item">
            <h5 class="tj-scroll-progress-sln">02.</h5>
            <div class="tj-scroll-progress-ind">
                <div class="tj-scroll-progress-ind-inner"></div>
            </div>
            </div>
            <div class="tj-scroll-progress-item">
            <h5 class="tj-scroll-progress-sln">03.</h5>
            <div class="tj-scroll-progress-ind">
                <div class="tj-scroll-progress-ind-inner"></div>
            </div>
            </div>
            <div class="tj-scroll-progress-item">
            <h5 class="tj-scroll-progress-sln">04.</h5>
            <div class="tj-scroll-progress-ind">
                <div class="tj-scroll-progress-ind-inner"></div>
            </div>
            </div>
        </div>
        <div class="service-wrapper h9-service-wrapper">
            <div class="service-item style-5 tj-progress-item">
            <div class="service-content-area">
                <div class="service-icon">
                <i class="tji-service-1"></i>
                </div>
                <div class="service-content">
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_strategy_development', 'Business Strategy Development' ) ); ?></a></h4>
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_recognize_that_exceptional_customer_ex', 'Recognize that exceptional customer experiences are at the heart of every successful business. Our Customer Experience Solutions are crafted to help you transform every interaction your customers have with your brand busin.' ) ); ?></p>
                </div>
                <a href="<?php echo esc_url( $burger_get( 'link_service_details_html_2', 'service-details.html' ) ); ?>" class="h9-service-nav">
                <i class="tji-arrow-right-long"></i>
                </a>
            </div>
            <div class="service-img">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_h9_service_1_webp', NAKAMA_THEME_URL . '/assets/images/service/h9-service-1.webp' ) ); ?>" alt="">
            </div>
            </div>
            <div class="service-item style-5 tj-progress-item">
            <div class="service-content-area">
                <div class="service-icon">
                <i class="tji-service-2"></i>
                </div>
                <div class="service-content">
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_3', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_customer_experience_solutions', 'Customer Experience Solutions' ) ); ?></a></h4>
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_recognize_that_exceptional_customer_ex_2', 'Recognize that exceptional customer experiences are at the heart of every successful business. Our Customer Experience Solutions are crafted to help you transform every interaction your customers have with your brand busin.' ) ); ?></p>
                </div>
                <a href="<?php echo esc_url( $burger_get( 'link_service_details_html_4', 'service-details.html' ) ); ?>" class="h9-service-nav">
                <i class="tji-arrow-right-long"></i>
                </a>
            </div>
            <div class="service-img">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_h9_service_2_webp', NAKAMA_THEME_URL . '/assets/images/service/h9-service-2.webp' ) ); ?>" alt="">
            </div>
            </div>
            <div class="service-item style-5 tj-progress-item">
            <div class="service-content-area">
                <div class="service-icon">
                <i class="tji-service-3"></i>
                </div>
                <div class="service-content">
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_5', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_sustainability_and_esg_consulting', 'Sustainability and ESG Consulting' ) ); ?></a></h4>
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_recognize_that_exceptional_customer_ex_3', 'Recognize that exceptional customer experiences are at the heart of every successful business. Our Customer Experience Solutions are crafted to help you transform every interaction your customers have with your brand busin.' ) ); ?></p>
                </div>
                <a href="<?php echo esc_url( $burger_get( 'link_service_details_html_6', 'service-details.html' ) ); ?>" class="h9-service-nav">
                <i class="tji-arrow-right-long"></i>
                </a>
            </div>
            <div class="service-img">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_h9_service_3_webp', NAKAMA_THEME_URL . '/assets/images/service/h9-service-3.webp' ) ); ?>" alt="">
            </div>
            </div>
            <div class="service-item style-5 tj-progress-item">
            <div class="service-content-area">
                <div class="service-icon">
                <i class="tji-service-4"></i>
                </div>
                <div class="service-content">
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_7', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_marketing_strategy_campaigns', 'Marketing Strategy & Campaigns' ) ); ?></a></h4>
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_recognize_that_exceptional_customer_ex_4', 'Recognize that exceptional customer experiences are at the heart of every successful business. Our Customer Experience Solutions are crafted to help you transform every interaction your customers have with your brand busin.' ) ); ?></p>
                </div>
                <a href="<?php echo esc_url( $burger_get( 'link_service_details_html_8', 'service-details.html' ) ); ?>" class="h9-service-nav">
                <i class="tji-arrow-right-long"></i>
                </a>
            </div>
            <div class="service-img">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_service_6_webp', NAKAMA_THEME_URL . '/assets/images/service/service-6.webp' ) ); ?>" alt="">
            </div>
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
    <div class="bg-shape-3">
    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_h7_testimonial_shape', './assets/images/shape/h7-testimonial-shape-blur.svg' ) ); ?>" alt="">
    </div>
</section>
<!-- end: Service Section 9 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
