<?php
$content_fields = array(
    'imagen_assets_images_hero_h7_hero_bg_webp' => 'assets/images/hero/h7-hero-bg.webp',
    'texto_delivering' => 'Delivering',
    'imagen_assets_images_icons_verified_svg' => './assets/images/icons/verified.svg',
    'texto_trusted' => 'Trusted',
    'texto_solutions' => 'Solutions',
    'imagen_assets_images_hero_h7_hero_banner_webp' => './assets/images/hero/h7-hero-banner.webp',
    'imagen_assets_images_testimonial_client_1_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-1.webp',
    'imagen_assets_images_testimonial_client_2_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-2.webp',
    'imagen_assets_images_testimonial_client_3_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-3.webp',
    'imagen_assets_images_testimonial_client_4_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-4.webp',
    'texto_100_happy_customer' => '100+ happy customer.',
    'imagen_assets_images_hero_circle_text_webp' => 'assets/images/hero/circle-text.webp',
    'link_service_html' => 'service.html',
    'imagen_assets_images_shape_h7_hero_blur_1_png' => './assets/images/shape/h7-hero-blur-1.png',
    'imagen_assets_images_shape_h7_hero_blur_2_png' => './assets/images/shape/h7-hero-blur-2.png',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Banner Slider 2 -->
<section class="h7-hero">
    <div class="h7-hero-inner">
    <div class="h7-hero-bg-image" data-bg-image="<?php echo esc_url( $imagen_assets_images_hero_h7_hero_bg_webp ); ?>"></div>
    <div class="container">
        <div class="row ">
        <div class="col-12">
            <div class="h7-hero-item-wrapper">
            <div class="h7-hero-content">
                <h1 class="h7-hero-title text-anim"><span><?php echo esc_html( $texto_delivering ); ?></span> <span><img class="wow bounceIn"
                    data-wow-delay="1s" src="<?php echo esc_url( $imagen_assets_images_icons_verified_svg ); ?>" alt=""><?php echo esc_html( $texto_trusted ); ?></span>
                <span><?php echo esc_html( $texto_solutions ); ?></span>
                </h1>

            </div>
            <div class="h7-hero-banner">
                <img class="wow fadeInUpBig" data-wow-delay=".8s" src="<?php echo esc_url( $imagen_assets_images_hero_h7_hero_banner_webp ); ?>"
                alt="">
            </div>

            <div class="h7-hero-box">
                <div class="customers">
                <ul>
                    <li class="wow fadeInLeft" data-wow-delay=".5s"><img
                        src="<?php echo esc_url( $imagen_assets_images_testimonial_client_1_webp ); ?>" alt=""></li>
                    <li class="wow fadeInLeft" data-wow-delay=".6s"><img
                        src="<?php echo esc_url( $imagen_assets_images_testimonial_client_2_webp ); ?>" alt=""></li>
                    <li class="wow fadeInLeft" data-wow-delay=".7s"><img
                        src="<?php echo esc_url( $imagen_assets_images_testimonial_client_3_webp ); ?>" alt=""></li>
                    <li class="wow fadeInLeft" data-wow-delay=".8s"><img
                        src="<?php echo esc_url( $imagen_assets_images_testimonial_client_4_webp ); ?>" alt=""></li>

                </ul>
                </div>

                <div class="h7-hero-box-content wow fadeInLeft" data-wow-delay=".9s">
                <div class="star-ratings">
                    <div class="fill-ratings" style="width: 100%">
                    <span>★★★★★</span>
                    </div>
                    <div class="empty-ratings">
                    <span>★★★★★</span>
                    </div>
                </div>
                <h5 class="customers-text"><?php echo esc_html( $texto_100_happy_customer ); ?></h5>
                </div>
            </div>
            </div>
        </div>

        </div>

    </div>
    </div>
    <div class="circle-text-wrap wow fadeInUp" data-wow-delay="2.2s">
    <span class="circle-text" data-bg-image="<?php echo esc_url( $imagen_assets_images_hero_circle_text_webp ); ?>"></span>
    <a class="circle-icon" href="<?php echo esc_url( $link_service_html ); ?>"><i class="tji-arrow-down-big"></i></a>
    </div>
    <div class="h7-hero-shape h7-hero-shape-1 wow fadeInUpBig" data-wow-delay="1s"><img
        class="tj-anim-move-var-big" src="<?php echo esc_url( $imagen_assets_images_shape_h7_hero_blur_1_png ); ?>" alt=""></div>
    <div class="h7-hero-shape h7-hero-shape-2 wow fadeInDownBig" data-wow-delay="1.2s"><img
        class="tj-anim-move-var-big-reverse" src="<?php echo esc_url( $imagen_assets_images_shape_h7_hero_blur_2_png ); ?>" alt=""></div>
</section>
<!-- end: Banner Slider 2 -->
