<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Banner Section 4 -->
<section class="h5-banner-section section-gap-x">
    <div class="banner-bg" data-bg-image="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_h5_hero_img_webp', 'assets/images/hero/h5-hero-img.webp' ) ); ?>"></div>
    <div class="h5-banner-area">
    <div class="h5-banner-content">
        <h1 class="banner-title text-anim"><?php echo esc_html( $burger_get( 'texto_expert_solutions_for', 'Expert Solutions for' ) ); ?> <span class="tj-image-slider  wow zoomIn"
            data-wow-delay=".5s">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_title_img_2_webp', NAKAMA_THEME_URL . '/assets/images/hero/title-img-2.webp' ) ); ?>" alt="">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_title_img_3_webp', NAKAMA_THEME_URL . '/assets/images/hero/title-img-3.webp' ) ); ?>" alt="">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_title_img_4_webp', NAKAMA_THEME_URL . '/assets/images/hero/title-img-4.webp' ) ); ?>" alt="">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_title_img_5_webp', NAKAMA_THEME_URL . '/assets/images/hero/title-img-5.webp' ) ); ?>" alt="">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_title_img_6_webp', NAKAMA_THEME_URL . '/assets/images/hero/title-img-6.webp' ) ); ?>" alt="">
        </span>
        <?php echo esc_html( $burger_get( 'texto_modern_enterprises', 'Modern Enterprises.' ) ); ?></h1>
        <div class="btn-area wow fadeInUp" data-wow-delay=".8s">
        <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>">
            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_get_started_now', 'Get Started Now' ) ); ?></span></span>
            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
        </a>
        </div>
    </div>
    <div class="solution-box">
        <span class="list-icon"><i class="tji-list"></i></span>
        <p class="desc"><?php echo esc_html( $burger_get( 'texto_committed_to_delivering_innovative_sol', 'Committed to delivering innovative solutions that drive success. With a focus on quality.' ) ); ?>
        </p>
        <div class="hero-counter">
        <span class="odometer" data-count="20">0</span>
        <span class="count-plus">M<sup>+</sup></span>
        </div>
    </div>
    </div>
    <div class="bg-shape-1">
    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_2_svg', NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg' ) ); ?>" alt="">
    </div>
    <div class="bg-shape-2">
    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_3_svg', NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg' ) ); ?>" alt="">
    </div>
    <div class="banner-scroll wow fadeInDown" data-wow-delay="1.5s">
    <a href="#choose" class="scroll-down">
        <span><i class="tji-arrow-down-long"></i></span>
        <?php echo esc_html( $burger_get( 'texto_scroll_down', 'Scroll Down' ) ); ?>
    </a>
    </div>
</section>
<!-- end: Banner Section 4 -->
