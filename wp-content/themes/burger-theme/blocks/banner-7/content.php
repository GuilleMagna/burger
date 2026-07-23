<?php
$content_fields = array(
    'texto_recognized_by_industry_leaders_of_our' => 'Recognized by industry leaders, of our award-winning team has a proven record of delivering excellence across projects.',
    'imagen_assets_images_icons_award_rounded_text_sv' => NAKAMA_THEME_URL . '/assets/images/icons/award-rounded-text.svg',
    'texto_driving_innovation_to_transform_busine' => 'Driving Innovation to Transform Business Futures',
    'link_contact_html' => 'contact.html',
    'texto_get_started' => 'Get Started',
    'texto_recognized_by_industryaward_leaders_aw' => 'Recognized by industryaward leaders, award winning team has be a proven record.',
    'imagen_assets_video_h10_banner_videio_mp4' => NAKAMA_THEME_URL . '/assets/video/h10-banner-videio.mp4',
    'imagen_assets_video_h10_banner_videio_mp4_2' => NAKAMA_THEME_URL . '/assets/video/h10-banner-videio.mp4',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Banner Section 7 -->
<section class="tj-banner-section-2 h10-hero section-gap-x zoom-on-scroll-wrapper">
    <div class="container">
    <div class="row flex-column-reverse flex-lg-row">
        <div class="col-lg-4 col-xl-3">
        <div class="h10-hero-award-wrapper">
            <div class="h6-hero-history wow fadeInUp" data-wow-delay=".3s">
            <div class="h6-hero-history-title"></div>
            <p class="h6-hero-history-desc"><?php echo wp_kses_post( $texto_recognized_by_industry_leaders_of_our ); ?></p>
            </div>
            <div class="circle-text-wrap wow bounceInLeft" data-wow-delay=".5s">
            <span class="circle-text" data-bg-image="<?php echo esc_url( $imagen_assets_images_icons_award_rounded_text_sv ); ?>"></span>
            <div class="circle-icon"><i class="tji-w-dot"></i></div>
            </div>
        </div>
        </div>
        <div class="col-lg-8 col-xl-9">
        <div class="banner-content-2">
            <h1 class="banner-title text-anim"><?php echo esc_html( $texto_driving_innovation_to_transform_busine ); ?> <i
                class="tji-curve-arrow wow fadeInRight" data-wow-delay=".7s"></i>
            </h1>
            <div class="banner-desc-area wow fadeInUp" data-wow-delay=".7s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $link_contact_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_get_started ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            <div class="banner-desc"><?php echo esc_html( $texto_recognized_by_industryaward_leaders_aw ); ?>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="container-fluid gap-0">
    <div class="row">
        <div class="col-12">
        <div class="h10-hero-banner zoom-on-scroll">
            <div class="h10-hero-banner-img h10-hero-banner-video">
            <video autoplay loop muted playsinline data-wf-ignore="true" data-object-fit="cover"
                poster="<?= NAKAMA_THEME_URL ?>/assets/images/hero/h10-hero-banner.webp">
                <source src="<?php echo esc_url( $imagen_assets_video_h10_banner_videio_mp4 ); ?>" data-wf-ignore="true" />
                <source src="<?php echo esc_url( $imagen_assets_video_h10_banner_videio_mp4_2 ); ?>" data-wf-ignore="true" />
            </video>
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
</section>
<!-- end: Banner Section 7 -->
