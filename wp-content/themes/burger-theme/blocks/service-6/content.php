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

<!-- start: Service Section 6 -->
<section class="h6-service section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading sec-heading-centered style-2 style-6 ">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_our_solutions', 'OUR SOLUTIONS' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_tailor_business_solutions_for_corporat', 'Tailor Business Solutions for Corporates.' ) ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-12">
        <div class="h6-service-slider swiper">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="h6-service-item">
                <div class="h6-service-thumb">
                    <a href="<?php echo esc_url( $burger_get( 'link_service_details_html', 'service-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_h6_service_1_webp', NAKAMA_THEME_URL . '/assets/images/service/h6-service-1.webp' ) ); ?>" alt=""></a>
                </div>
                <div class="h6-service-content">
                    <h5 class="h6-service-index">
                    01.
                    </h5>
                    <div class="h6-service-title-wrap">
                    <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_strategies_development', 'Business Strategies Development' ) ); ?></a>
                    </h4>
                    <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_2', 'service-details.html' ) ); ?>">
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>

                </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="h6-service-item">
                <div class="h6-service-thumb">
                    <a href="<?php echo esc_url( $burger_get( 'link_service_details_html_3', 'service-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_h6_service_2_webp', NAKAMA_THEME_URL . '/assets/images/service/h6-service-2.webp' ) ); ?>" alt=""></a>
                </div>
                <div class="h6-service-content">
                    <h5 class="h6-service-index">
                    02.
                    </h5>
                    <div class="h6-service-title-wrap">
                    <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_2', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_customer_experience_solutions', 'Customer Experience Solutions' ) ); ?></a>
                    </h4>
                    <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_4', 'service-details.html' ) ); ?>">
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>

                </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="h6-service-item">
                <div class="h6-service-thumb">
                    <a href="<?php echo esc_url( $burger_get( 'link_service_details_html_5', 'service-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_h6_service_3_webp', NAKAMA_THEME_URL . '/assets/images/service/h6-service-3.webp' ) ); ?>" alt=""></a>
                </div>
                <div class="h6-service-content">
                    <h5 class="h6-service-index">
                    03.
                    </h5>
                    <div class="h6-service-title-wrap">
                    <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_3', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_sustainability_and_esg_consulting', 'Sustainability and ESG Consulting' ) ); ?></a>
                    </h4>
                    <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_6', 'service-details.html' ) ); ?>">
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>

                </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="h6-service-item">
                <div class="h6-service-thumb">
                    <a href="<?php echo esc_url( $burger_get( 'link_service_details_html_7', 'service-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_h6_service_1_webp_2', NAKAMA_THEME_URL . '/assets/images/service/h6-service-1.webp' ) ); ?>" alt=""></a>
                </div>
                <div class="h6-service-content">
                    <h5 class="h6-service-index">
                    01.
                    </h5>
                    <div class="h6-service-title-wrap">
                    <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_4', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_strategies_development_2', 'Business Strategies Development' ) ); ?></a>
                    </h4>
                    <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_8', 'service-details.html' ) ); ?>">
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>

                </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="h6-service-item">
                <div class="h6-service-thumb">
                    <a href="<?php echo esc_url( $burger_get( 'link_service_details_html_9', 'service-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_h6_service_2_webp_2', NAKAMA_THEME_URL . '/assets/images/service/h6-service-2.webp' ) ); ?>" alt=""></a>
                </div>
                <div class="h6-service-content">
                    <h5 class="h6-service-index">
                    02.
                    </h5>
                    <div class="h6-service-title-wrap">
                    <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_5', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_customer_experience_solutions_2', 'Customer Experience Solutions' ) ); ?></a>
                    </h4>
                    <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_10', 'service-details.html' ) ); ?>">
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>

                </div>
                </div>
            </div>
            </div>
            <div class="swiper-pagination-area"></div>
        </div>

        </div>

    </div>
    </div>
</section>
<!-- end: Service Section 6 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
