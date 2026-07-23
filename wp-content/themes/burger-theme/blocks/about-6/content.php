<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: About Section 6 -->
<section class="tj-about-section h6-about section-gap section-gap-x">
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6">
        <div class="about-content-area  h6-about-content  style-1 wow fadeInLeft" data-wow-delay=".2s">
            <div class="sec-heading style-2 style-6">
            <span class="sub-title  wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_our_company', 'OUR COMPANY' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_innovating_today_for_build_smarter_str', 'Innovating Today for Build Smarter, Stronger, and More Successful.' ) ); ?>
            </h2>
            <p class="desc  wow fadeInUp" data-wow-delay=".8s"><?php echo wp_kses_post( $burger_get( 'texto_our_approach_to_customer_experience_is', 'Our approach to customer experience is comprehensive and data-driven. We begin by assessing your current customer touchpoints, our identifying areas for improvement, and using insights to develop.' ) ); ?></p>
            </div>
            <div class="h6-about-funfact-wrapper">
            <div class="h6-about-funfact">
                <div class="countup-item">
                <div class="inline-content">
                    <span class="odometer countup-number" data-count="20"></span>
                    <span class="count-plus">M</span>
                </div>
                <span class="count-text"><?php echo esc_html( $burger_get( 'texto_reach_worldwide_empower_dreams_everywh', 'Reach Worldwide empower dreams everywhere.' ) ); ?></span>
                </div>
                <div class="countup-item">
                <div class="inline-content">
                    <span class="odometer countup-number" data-count="8.5"></span>
                    <span class="count-plus">X</span>
                </div>
                <span class="count-text"><?php echo esc_html( $burger_get( 'texto_faster_growth_starts_smart_solutions_t', 'Faster Growth starts smart solutions today.' ) ); ?></span>
                </div>

            </div>
            <div class="h6-about-funfact-shape">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_about_counter_shape_b', NAKAMA_THEME_URL . '/assets/images/shape/about-counter-shape-blur.svg' ) ); ?>" alt="">
            </div>
            </div>

            <div class="btn-area wow fadeInUp" data-wow-delay=".8s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_know_more_us', 'Know More Us' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>

        </div>
        <div class="col-xl-6 col-lg-6">
        <div class="about-img-area h6-about-img wow fadeInLeft" data-wow-delay=".2s">
            <div class="about-img overflow-hidden  wow fadeInRight" data-wow-delay=".8s">
            <img data-speed=".8" src="<?php echo esc_url( $burger_get( 'imagen_assets_images_about_h6_about_banner_webp', NAKAMA_THEME_URL . '/assets/images/about/h6-about-banner.webp' ) ); ?>" alt="">
            </div>
            <div class="box-area h6-about-box  ">
            <div class="customers-box wow fadeInUp" data-wow-delay="1s">
                <div class="customers">
                <ul>
                    <li class="wow fadeInLeft" data-wow-delay=".5s"><img
                        src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_1_webp', NAKAMA_THEME_URL . '/assets/images/testimonial/client-1.webp' ) ); ?>" alt=""></li>
                    <li class="wow fadeInLeft" data-wow-delay=".6s"><img
                        src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_2_webp', NAKAMA_THEME_URL . '/assets/images/testimonial/client-2.webp' ) ); ?>" alt=""></li>
                    <li class="wow fadeInLeft" data-wow-delay=".7s"><img
                        src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_3_webp', NAKAMA_THEME_URL . '/assets/images/testimonial/client-3.webp' ) ); ?>" alt=""></li>
                    <li class="wow fadeInLeft" data-wow-delay=".8s"><span><i class="tji-plus"></i></span></li>
                </ul>
                </div>

                <h5 class="customers-text wow fadeInUp" data-wow-delay=".5s"><?php echo esc_html( $burger_get( 'texto_we_have_100_happy_customer', 'We have 100+ happy customer.' ) ); ?></h5>
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
    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_shape_blur_svg', NAKAMA_THEME_URL . '/assets/images/shape/shape-blur.svg' ) ); ?>" alt="">
    </div>

</section>
<!-- end: About Section 6 -->
