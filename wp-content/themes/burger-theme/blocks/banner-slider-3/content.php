<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Banner Slider 3 -->
<section class="h8-hero ">
    <div class="h8-hero-inner">
    <div class="h8-hero-bg-image" data-bg-image="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_h8_hero_bg_webp', NAKAMA_THEME_URL . '/assets/images/hero/h8-hero-bg.webp' ) ); ?>"></div>
    <div class="container">
        <div class="row ">
        <div class="col-12">
            <div class="h8-hero-item-wrapper">
            <div class="h8-hero-content">
                <h1 class="h8-hero-title text-anim"><span><?php echo esc_html( $burger_get( 'texto_shaping', 'Shaping' ) ); ?></span> <span><?php echo esc_html( $burger_get( 'texto_smart', '- Smart' ) ); ?></span>
                <span><?php echo esc_html( $burger_get( 'texto_business', 'Business' ) ); ?></span>
                <span class="title-year">[2025]</span>
                </h1>

            </div>
            <div class="h8-hero-box">
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

                <div class="h8-hero-box-content wow fadeInLeft" data-wow-delay=".9s">
                <div class="h8-hero-box-icon"><i class="tji-star"></i></div>
                <div class="desc">
                    <?php echo esc_html( $burger_get( 'texto_recognized_by_industry_leaders_of_our', 'Recognized by industry leaders, of our award-winning team has be a proven record of delivering.' ) ); ?>
                </div>
                </div>
            </div>
            <div class="h8-hero-banner">
                <img class="wow fadeInUpBig" data-wow-delay=".8s" src="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_h8_hero_banner_webp', NAKAMA_THEME_URL . '/assets/images/hero/h8-hero-banner.webp' ) ); ?>"
                alt="">
            </div>
            <a href="<?php echo esc_url( $burger_get( 'link_service_html', 'service.html' ) ); ?>" class="circle-text-wrap">
                <span class="desc"><?php echo esc_html( $burger_get( 'texto_explore_us_more', 'Explore Us More' ) ); ?> <i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>

        </div>

    </div>
    </div>


</section>
<!-- end: Banner Slider 3 -->
