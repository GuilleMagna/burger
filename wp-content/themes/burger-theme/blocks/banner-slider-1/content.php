<?php
$content_fields = array(
    'imagen_assets_images_hero_slider_1_webp' => NAKAMA_THEME_URL . '/assets/images/hero/slider-1.webp',
    'texto_leading_future_for' => 'Leading Future for',
    'texto_business' => 'Business.',
    'texto_committed_to_delivering_innovative_sol' => 'Committed to delivering innovative solutions that drive success. With a focus on quality.',
    'link_contact_html' => 'contact.html',
    'texto_get_started' => 'Get Started',
    'imagen_assets_images_hero_slider_2_webp' => NAKAMA_THEME_URL . '/assets/images/hero/slider-2.webp',
    'texto_leading_future_for_2' => 'Leading Future for',
    'texto_business_2' => 'Business.',
    'texto_committed_to_delivering_innovative_sol_2' => 'Committed to delivering innovative solutions that drive success. With a focus on quality.',
    'link_contact_html_2' => 'contact.html',
    'texto_get_started_2' => 'Get Started',
    'imagen_assets_images_hero_slider_3_webp' => NAKAMA_THEME_URL . '/assets/images/hero/slider-3.webp',
    'texto_leading_future_for_3' => 'Leading Future for',
    'texto_business_3' => 'Business.',
    'texto_committed_to_delivering_innovative_sol_3' => 'Committed to delivering innovative solutions that drive success. With a focus on quality.',
    'link_contact_html_3' => 'contact.html',
    'texto_get_started_3' => 'Get Started',
    'imagen_assets_images_hero_slider_thumb_1_webp' => NAKAMA_THEME_URL . '/assets/images/hero/slider-thumb-1.webp',
    'imagen_assets_images_hero_slider_thumb_2_webp' => NAKAMA_THEME_URL . '/assets/images/hero/slider-thumb-2.webp',
    'imagen_assets_images_hero_slider_thumb_3_webp' => NAKAMA_THEME_URL . '/assets/images/hero/slider-thumb-3.webp',
    'imagen_assets_images_hero_circle_text_webp' => NAKAMA_THEME_URL . '/assets/images/hero/circle-text.webp',
    'link_service_html' => 'service.html',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Banner Slider -->
<section class="tj-slider-section">
    <div class="swiper hero-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide tj-slider-item">
        <div class="slider-bg-image" data-bg-image="<?php echo esc_url( $imagen_assets_images_hero_slider_1_webp ); ?>"></div>
        <div class="container">
            <div class="slider-wrapper">
            <div class="slider-content">
                <h1 class="slider-title"><?php echo esc_html( $texto_leading_future_for ); ?> <span><?php echo esc_html( $texto_business ); ?></span></h1>
                <div class="slider-desc"><?php echo esc_html( $texto_committed_to_delivering_innovative_sol ); ?></div>
                <div class="slider-btn">
                <a class="tj-primary-btn" href="<?php echo esc_url( $link_contact_html ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $texto_get_started ); ?></span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide tj-slider-item">
        <div class="slider-bg-image" data-bg-image="<?php echo esc_url( $imagen_assets_images_hero_slider_2_webp ); ?>"></div>
        <div class="container">
            <div class="slider-wrapper">
            <div class="slider-content">
                <h1 class="slider-title"><?php echo esc_html( $texto_leading_future_for_2 ); ?> <span><?php echo esc_html( $texto_business_2 ); ?></span></h1>
                <div class="slider-desc"><?php echo esc_html( $texto_committed_to_delivering_innovative_sol_2 ); ?></div>
                <div class="slider-btn">
                <a class="tj-primary-btn" href="<?php echo esc_url( $link_contact_html_2 ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $texto_get_started_2 ); ?></span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide tj-slider-item">
        <div class="slider-bg-image" data-bg-image="<?php echo esc_url( $imagen_assets_images_hero_slider_3_webp ); ?>"></div>
        <div class="container">
            <div class="slider-wrapper">
            <div class="slider-content">
                <h1 class="slider-title"><?php echo esc_html( $texto_leading_future_for_3 ); ?> <span><?php echo esc_html( $texto_business_3 ); ?></span></h1>
                <div class="slider-desc"><?php echo esc_html( $texto_committed_to_delivering_innovative_sol_3 ); ?></div>
                <div class="slider-btn">
                <a class="tj-primary-btn" href="<?php echo esc_url( $link_contact_html_3 ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $texto_get_started_3 ); ?></span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="hero-navigation d-inline-flex wow fadeIn" data-wow-delay="1.5s">
        <div class="slider-prev">
        <span class="anim-icon">
            <i class="tji-arrow-left"></i>
            <i class="tji-arrow-left"></i>
        </span>
        </div>
        <div class="slider-next">
        <span class="anim-icon">
            <i class="tji-arrow-right"></i>
            <i class="tji-arrow-right"></i>
        </span>
        </div>
    </div>
    </div>
    <div class="swiper hero-thumb wow fadeIn" data-wow-delay="2s">
    <div class="swiper-wrapper">
        <div class="swiper-slide thumb-item">
        <img src="<?php echo esc_url( $imagen_assets_images_hero_slider_thumb_1_webp ); ?>" alt="Thumbnail">
        </div>
        <div class="swiper-slide thumb-item">
        <img src="<?php echo esc_url( $imagen_assets_images_hero_slider_thumb_2_webp ); ?>" alt="Thumbnail">
        </div>
        <div class="swiper-slide thumb-item">
        <img src="<?php echo esc_url( $imagen_assets_images_hero_slider_thumb_3_webp ); ?>" alt="Thumbnail">
        </div>
    </div>
    </div>
    <div class="circle-text-wrap wow fadeInUp" data-wow-delay="1s">
    <span class="circle-text" data-bg-image="<?php echo esc_url( $imagen_assets_images_hero_circle_text_webp ); ?>"></span>
    <a class="circle-icon" href="<?php echo esc_url( $link_service_html ); ?>"><i class="tji-arrow-down-big"></i></a>
    </div>
</section>
<!-- end: Banner Slider -->
