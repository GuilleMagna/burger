<?php
$content_fields = array(
    'texto_get_to_know_us' => 'Get to Know Us',
    'texto_driving_excellence_through' => 'Driving Excellence Through',
    'link_https_www_youtube_com_watch_v_mlpwranjfbi_a' => 'https://www.youtube.com/watch?v=MLpWrANjFbI&ab_channel=eidelchteinadvogados',
    'imagen_assets_images_hero_title_img_webp' => NAKAMA_THEME_URL . '/assets/images/hero/title-img.webp',
    'texto_evolution_trust' => 'Evolution & Trust.',
    'link_contact_html' => 'contact.html',
    'texto_learn_more' => 'Learn More',
    'imagen_assets_images_hero_hero_img_2_webp' => NAKAMA_THEME_URL . '/assets/images/hero/hero-img-2.webp',
    'texto_bexon' => 'Bexon',
    'texto_bexon_2' => 'Bexon',
    'texto_bexon_3' => 'Bexon',
    'texto_bexon_4' => 'Bexon',
    'texto_bexon_5' => 'Bexon',
    'texto_bexon_6' => 'Bexon',
    'texto_bexon_7' => 'Bexon',
    'imagen_assets_images_hero_growth_webp' => NAKAMA_THEME_URL . '/assets/images/hero/growth.webp',
    'texto_eade_marren' => 'Eade Marren',
    'texto_ceo_founder' => 'CEO & Founder',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
    'texto_scroll_down' => 'Scroll Down',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Banner Section 2 -->
<section class="tj-banner-section-2 section-gap-x">
    <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-5">
        <div class="banner-content-2">
            <span class="sub-title wow fadeInUp" data-wow-delay=".2s">
            <i class="tji-box"></i> <?php echo esc_html( $texto_get_to_know_us ); ?>
            </span>
            <h1 class="banner-title title-anim"><?php echo esc_html( $texto_driving_excellence_through ); ?>
            <a class="title-video video-popup wow fadeInUp" data-wow-delay="1.3s" data-autoplay="true"
                data-vbtype="video" data-maxwidth="1200px"
                href="<?php echo esc_url( $link_https_www_youtube_com_watch_v_mlpwranjfbi_a ); ?>">
                <i class="tji-play"></i>
                <img src="<?php echo esc_url( $imagen_assets_images_hero_title_img_webp ); ?>" alt="">
            </a> <?php echo esc_html( $texto_evolution_trust ); ?>
            </h1>
            <div class="btn-area wow fadeInUp" data-wow-delay=".8s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $link_contact_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_learn_more ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            <a class="number" href="tel:18884521505"><i class="tji-phone"></i><span>1-888-452-1505</span></a>
            </div>
        </div>
        </div>
        <div class="col-lg-7">
        <div class="banner-img-area wow fadeInUp" data-wow-delay=".3s">
            <div class="banner-img">
            <img src="<?php echo esc_url( $imagen_assets_images_hero_hero_img_2_webp ); ?>" alt="">
            <!-- <span class="brand-name wow fadeIn" data-wow-delay="2.2s"><?php echo esc_html( $texto_bexon ); ?></span> -->
            <div class="brand-name wow fadeIn" data-wow-delay="2.2s">
                <div class="marquee-vr">
                <span class="text"><?php echo esc_html( $texto_bexon_2 ); ?><span class="icon">/</span></span>
                <span class="text"><?php echo esc_html( $texto_bexon_3 ); ?><span class="icon">/</span></span>
                <span class="text"><?php echo esc_html( $texto_bexon_4 ); ?><span class="icon">/</span></span>
                <span class="text"><?php echo esc_html( $texto_bexon_5 ); ?><span class="icon">/</span></span>
                <span class="text"><?php echo esc_html( $texto_bexon_6 ); ?><span class="icon">/</span></span>
                <span class="text"><?php echo esc_html( $texto_bexon_7 ); ?><span class="icon">/</span></span>
                </div>
            </div>
            <div class="growth-box wow fadeInUp" data-wow-delay="1.7s"><img src="<?php echo esc_url( $imagen_assets_images_hero_growth_webp ); ?>"
                alt=""></div>
            </div>
            <div class="wow fadeIn" data-wow-delay="2.2s">
            <div class="banner-author">
                <h4 class="title"><?php echo esc_html( $texto_eade_marren ); ?></h4>
                <span class="designation"><?php echo esc_html( $texto_ceo_founder ); ?></span>
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
    <div class="banner-scroll wow fadeInDown" data-wow-delay="2.5s">
    <a href="#choose" class="scroll-down">
        <span><i class="tji-arrow-down-long"></i></span>
        <?php echo esc_html( $texto_scroll_down ); ?>
    </a>
    </div>
</section>
<!-- end: Banner Section 2 -->
