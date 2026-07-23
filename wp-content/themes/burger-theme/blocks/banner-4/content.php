<?php
$content_fields = array(
    'imagen_assets_images_hero_h5_hero_img_webp' => 'assets/images/hero/h5-hero-img.webp',
    'texto_expert_solutions_for' => 'Expert Solutions for',
    'imagen_assets_images_hero_title_img_2_webp' => NAKAMA_THEME_URL . '/assets/images/hero/title-img-2.webp',
    'imagen_assets_images_hero_title_img_3_webp' => NAKAMA_THEME_URL . '/assets/images/hero/title-img-3.webp',
    'imagen_assets_images_hero_title_img_4_webp' => NAKAMA_THEME_URL . '/assets/images/hero/title-img-4.webp',
    'imagen_assets_images_hero_title_img_5_webp' => NAKAMA_THEME_URL . '/assets/images/hero/title-img-5.webp',
    'imagen_assets_images_hero_title_img_6_webp' => NAKAMA_THEME_URL . '/assets/images/hero/title-img-6.webp',
    'texto_modern_enterprises' => 'Modern Enterprises.',
    'link_contact_html' => 'contact.html',
    'texto_get_started_now' => 'Get Started Now',
    'texto_committed_to_delivering_innovative_sol' => 'Committed to delivering innovative solutions that drive success. With a focus on quality.',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
    'texto_scroll_down' => 'Scroll Down',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Banner Section 4 -->
<section class="h5-banner-section section-gap-x">
    <div class="banner-bg" data-bg-image="<?php echo esc_url( $imagen_assets_images_hero_h5_hero_img_webp ); ?>"></div>
    <div class="h5-banner-area">
    <div class="h5-banner-content">
        <h1 class="banner-title text-anim"><?php echo esc_html( $texto_expert_solutions_for ); ?> <span class="tj-image-slider  wow zoomIn"
            data-wow-delay=".5s">
            <img src="<?php echo esc_url( $imagen_assets_images_hero_title_img_2_webp ); ?>" alt="">
            <img src="<?php echo esc_url( $imagen_assets_images_hero_title_img_3_webp ); ?>" alt="">
            <img src="<?php echo esc_url( $imagen_assets_images_hero_title_img_4_webp ); ?>" alt="">
            <img src="<?php echo esc_url( $imagen_assets_images_hero_title_img_5_webp ); ?>" alt="">
            <img src="<?php echo esc_url( $imagen_assets_images_hero_title_img_6_webp ); ?>" alt="">
        </span>
        <?php echo esc_html( $texto_modern_enterprises ); ?></h1>
        <div class="btn-area wow fadeInUp" data-wow-delay=".8s">
        <a class="tj-primary-btn" href="<?php echo esc_url( $link_contact_html ); ?>">
            <span class="btn-text"><span><?php echo esc_html( $texto_get_started_now ); ?></span></span>
            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
        </a>
        </div>
    </div>
    <div class="solution-box">
        <span class="list-icon"><i class="tji-list"></i></span>
        <p class="desc"><?php echo esc_html( $texto_committed_to_delivering_innovative_sol ); ?>
        </p>
        <div class="hero-counter">
        <span class="odometer" data-count="20">0</span>
        <span class="count-plus">M<sup>+</sup></span>
        </div>
    </div>
    </div>
    <div class="bg-shape-1">
    <img src="<?php echo esc_url( $imagen_assets_images_shape_pattern_2_svg ); ?>" alt="">
    </div>
    <div class="bg-shape-2">
    <img src="<?php echo esc_url( $imagen_assets_images_shape_pattern_3_svg ); ?>" alt="">
    </div>
    <div class="banner-scroll wow fadeInDown" data-wow-delay="1.5s">
    <a href="#choose" class="scroll-down">
        <span><i class="tji-arrow-down-long"></i></span>
        <?php echo esc_html( $texto_scroll_down ); ?>
    </a>
    </div>
</section>
<!-- end: Banner Section 4 -->
