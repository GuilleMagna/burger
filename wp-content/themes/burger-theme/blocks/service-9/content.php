<?php
$content_fields = array(
    'texto_choose_the_best' => 'CHOOSE THE BEST',
    'texto_scalable_business_services' => 'Scalable business services',
    'link_service_html' => 'service.html',
    'texto_more_services' => 'More services',
    'link_service_details_html' => 'service-details.html',
    'texto_business_strategy_development' => 'Business Strategy Development',
    'texto_recognize_that_exceptional_customer_ex' => 'Recognize that exceptional customer experiences are at the heart of every successful business. Our Customer Experience Solutions are crafted to help you transform every interaction your customers have with your brand busin.',
    'link_service_details_html_2' => 'service-details.html',
    'imagen_assets_images_service_h9_service_1_webp' => NAKAMA_THEME_URL . '/assets/images/service/h9-service-1.webp',
    'link_service_details_html_3' => 'service-details.html',
    'texto_customer_experience_solutions' => 'Customer Experience Solutions',
    'texto_recognize_that_exceptional_customer_ex_2' => 'Recognize that exceptional customer experiences are at the heart of every successful business. Our Customer Experience Solutions are crafted to help you transform every interaction your customers have with your brand busin.',
    'link_service_details_html_4' => 'service-details.html',
    'imagen_assets_images_service_h9_service_2_webp' => NAKAMA_THEME_URL . '/assets/images/service/h9-service-2.webp',
    'link_service_details_html_5' => 'service-details.html',
    'texto_sustainability_and_esg_consulting' => 'Sustainability and ESG Consulting',
    'texto_recognize_that_exceptional_customer_ex_3' => 'Recognize that exceptional customer experiences are at the heart of every successful business. Our Customer Experience Solutions are crafted to help you transform every interaction your customers have with your brand busin.',
    'link_service_details_html_6' => 'service-details.html',
    'imagen_assets_images_service_h9_service_3_webp' => NAKAMA_THEME_URL . '/assets/images/service/h9-service-3.webp',
    'link_service_details_html_7' => 'service-details.html',
    'texto_marketing_strategy_campaigns' => 'Marketing Strategy & Campaigns',
    'texto_recognize_that_exceptional_customer_ex_4' => 'Recognize that exceptional customer experiences are at the heart of every successful business. Our Customer Experience Solutions are crafted to help you transform every interaction your customers have with your brand busin.',
    'link_service_details_html_8' => 'service-details.html',
    'imagen_assets_images_service_service_6_webp' => NAKAMA_THEME_URL . '/assets/images/service/service-6.webp',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
    'imagen_assets_images_shape_h7_testimonial_shape' => './assets/images/shape/h7-testimonial-shape-blur.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Service Section 9 -->
<section class="h9-service section-gap  section-gap-x tj-sticky-panel-container-2 tj-progress-wrapper">
    <div class="container">
    <div class="row">
        <div class="col-12 col-lg-4 ">
        <div class="sec-heading style-8  tj-sticky-panel-2">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $texto_choose_the_best ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $texto_scalable_business_services ); ?></h2>
            <div class="h9-service-more wow fadeInUp" data-wow-delay=".3s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $link_service_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_more_services ); ?></span></span>
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
                <h4 class="title"><a href="<?php echo esc_url( $link_service_details_html ); ?>"><?php echo esc_html( $texto_business_strategy_development ); ?></a></h4>
                <p class="desc"><?php echo wp_kses_post( $texto_recognize_that_exceptional_customer_ex ); ?></p>
                </div>
                <a href="<?php echo esc_url( $link_service_details_html_2 ); ?>" class="h9-service-nav">
                <i class="tji-arrow-right-long"></i>
                </a>
            </div>
            <div class="service-img">
                <img src="<?php echo esc_url( $imagen_assets_images_service_h9_service_1_webp ); ?>" alt="">
            </div>
            </div>
            <div class="service-item style-5 tj-progress-item">
            <div class="service-content-area">
                <div class="service-icon">
                <i class="tji-service-2"></i>
                </div>
                <div class="service-content">
                <h4 class="title"><a href="<?php echo esc_url( $link_service_details_html_3 ); ?>"><?php echo esc_html( $texto_customer_experience_solutions ); ?></a></h4>
                <p class="desc"><?php echo wp_kses_post( $texto_recognize_that_exceptional_customer_ex_2 ); ?></p>
                </div>
                <a href="<?php echo esc_url( $link_service_details_html_4 ); ?>" class="h9-service-nav">
                <i class="tji-arrow-right-long"></i>
                </a>
            </div>
            <div class="service-img">
                <img src="<?php echo esc_url( $imagen_assets_images_service_h9_service_2_webp ); ?>" alt="">
            </div>
            </div>
            <div class="service-item style-5 tj-progress-item">
            <div class="service-content-area">
                <div class="service-icon">
                <i class="tji-service-3"></i>
                </div>
                <div class="service-content">
                <h4 class="title"><a href="<?php echo esc_url( $link_service_details_html_5 ); ?>"><?php echo esc_html( $texto_sustainability_and_esg_consulting ); ?></a></h4>
                <p class="desc"><?php echo wp_kses_post( $texto_recognize_that_exceptional_customer_ex_3 ); ?></p>
                </div>
                <a href="<?php echo esc_url( $link_service_details_html_6 ); ?>" class="h9-service-nav">
                <i class="tji-arrow-right-long"></i>
                </a>
            </div>
            <div class="service-img">
                <img src="<?php echo esc_url( $imagen_assets_images_service_h9_service_3_webp ); ?>" alt="">
            </div>
            </div>
            <div class="service-item style-5 tj-progress-item">
            <div class="service-content-area">
                <div class="service-icon">
                <i class="tji-service-4"></i>
                </div>
                <div class="service-content">
                <h4 class="title"><a href="<?php echo esc_url( $link_service_details_html_7 ); ?>"><?php echo esc_html( $texto_marketing_strategy_campaigns ); ?></a></h4>
                <p class="desc"><?php echo wp_kses_post( $texto_recognize_that_exceptional_customer_ex_4 ); ?></p>
                </div>
                <a href="<?php echo esc_url( $link_service_details_html_8 ); ?>" class="h9-service-nav">
                <i class="tji-arrow-right-long"></i>
                </a>
            </div>
            <div class="service-img">
                <img src="<?php echo esc_url( $imagen_assets_images_service_service_6_webp ); ?>" alt="">
            </div>
            </div>
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
    <img src="<?php echo esc_url( $imagen_assets_images_shape_h7_testimonial_shape ); ?>" alt="">
    </div>
</section>
<!-- end: Service Section 9 -->
