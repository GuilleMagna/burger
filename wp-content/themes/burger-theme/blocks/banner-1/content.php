<?php
$content_fields = array(
    'texto_recognized_for_excellence' => 'Recognized for Excellence',
    'texto_driving_excellence_through_evolution_a' => 'Driving Excellence Through Evolution and',
    'texto_trust' => 'Trust.',
    'link_about_html' => 'about.html',
    'texto_represents_growth_expansion_and_modern' => 'Represents growth, expansion, and modern business solution present growth, expansion.',
    'imagen_assets_images_shape_pattern_bg_webp' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-bg.webp',
    'imagen_assets_images_hero_hero_img_webp' => NAKAMA_THEME_URL . '/assets/images/hero/hero-img.webp',
    'imagen_assets_images_testimonial_client_1_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-1.webp',
    'imagen_assets_images_testimonial_client_2_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-2.webp',
    'imagen_assets_images_testimonial_client_3_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-3.webp',
    'texto_30k' => '30K',
    'texto_happy_customer_we_have_world_wide' => 'Happy customer we have world-wide.',
    'texto_scroll_down' => 'Scroll Down',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Banner Section -->
<section class="tj-banner-section section-gap-x">
    <div class="banner-area">
    <div class="banner-left-box">
        <div class="banner-content">
        <span class="sub-title wow fadeInDown" data-wow-delay=".2s">
            <i class="tji-excellence"></i> <?php echo esc_html( $texto_recognized_for_excellence ); ?>
        </span>
        <h1 class="banner-title title-anim"><?php echo esc_html( $texto_driving_excellence_through_evolution_a ); ?>
            <span><?php echo esc_html( $texto_trust ); ?></span>
        </h1>
        <div class="banner-desc-area wow fadeInUp" data-wow-delay=".7s">
            <a class="banner-link" href="<?php echo esc_url( $link_about_html ); ?>">
            <span><i class="tji-arrow-right-big"></i></span>
            </a>
            <div class="banner-desc"><?php echo esc_html( $texto_represents_growth_expansion_and_modern ); ?>
            </div>
        </div>
        </div>
        <div class="banner-shape">
        <img src="<?php echo esc_url( $imagen_assets_images_shape_pattern_bg_webp ); ?>" alt="">
        </div>
    </div>
    <div class="banner-right-box">
        <div class="banner-img">
        <img data-speed="0.8" src="<?php echo esc_url( $imagen_assets_images_hero_hero_img_webp ); ?>" alt="">
        </div>
        <div class="box-area">
        <div class="customers-box">
            <div class="customers">
            <ul>
                <li class="wow fadeInLeft" data-wow-delay=".5s"><img src="<?php echo esc_url( $imagen_assets_images_testimonial_client_1_webp ); ?>"
                    alt=""></li>
                <li class="wow fadeInLeft" data-wow-delay=".6s"><img src="<?php echo esc_url( $imagen_assets_images_testimonial_client_2_webp ); ?>"
                    alt=""></li>
                <li class="wow fadeInLeft" data-wow-delay=".7s"><img src="<?php echo esc_url( $imagen_assets_images_testimonial_client_3_webp ); ?>"
                    alt=""></li>
                <li class="wow fadeInLeft" data-wow-delay=".8s"><span><i class="tji-plus"></i></span></li>
            </ul>
            </div>
            <div class="customers-number wow fadeInUp" data-wow-delay=".5s"><?php echo esc_html( $texto_30k ); ?></div>
            <h6 class="customers-text wow fadeInUp" data-wow-delay=".5s"><?php echo esc_html( $texto_happy_customer_we_have_world_wide ); ?></h6>
        </div>
        </div>
    </div>
    </div>
    <div class="banner-scroll wow fadeInDown" data-wow-delay="2s">
    <a href="#choose" class="scroll-down">
        <span><i class="tji-arrow-down-long"></i></span>
        <?php echo esc_html( $texto_scroll_down ); ?>
    </a>
    </div>
</section>
<!-- end: Banner Section -->
