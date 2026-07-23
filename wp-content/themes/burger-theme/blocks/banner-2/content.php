<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Banner Section 2 -->
<section class="tj-banner-section-2 section-gap-x">
    <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-5">
        <div class="banner-content-2">
            <span class="sub-title wow fadeInUp" data-wow-delay=".2s">
            <i class="tji-box"></i> <?php echo esc_html( $burger_get( 'texto_get_to_know_us', 'Get to Know Us' ) ); ?>
            </span>
            <h1 class="banner-title title-anim"><?php echo esc_html( $burger_get( 'texto_driving_excellence_through', 'Driving Excellence Through' ) ); ?>
            <a class="title-video video-popup wow fadeInUp" data-wow-delay="1.3s" data-autoplay="true"
                data-vbtype="video" data-maxwidth="1200px"
                href="<?php echo esc_url( $burger_get( 'link_https_www_youtube_com_watch_v_mlpwranjfbi_a', 'https://www.youtube.com/watch?v=MLpWrANjFbI&ab_channel=eidelchteinadvogados' ) ); ?>">
                <i class="tji-play"></i>
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_title_img_webp', NAKAMA_THEME_URL . '/assets/images/hero/title-img.webp' ) ); ?>" alt="">
            </a> <?php echo esc_html( $burger_get( 'texto_evolution_trust', 'Evolution & Trust.' ) ); ?>
            </h1>
            <div class="btn-area wow fadeInUp" data-wow-delay=".8s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more', 'Learn More' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            <a class="number" href="tel:18884521505"><i class="tji-phone"></i><span>1-888-452-1505</span></a>
            </div>
        </div>
        </div>
        <div class="col-lg-7">
        <div class="banner-img-area wow fadeInUp" data-wow-delay=".3s">
            <div class="banner-img">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_hero_img_2_webp', NAKAMA_THEME_URL . '/assets/images/hero/hero-img-2.webp' ) ); ?>" alt="">
            <!-- <span class="brand-name wow fadeIn" data-wow-delay="2.2s"><?php echo esc_html( $burger_get( 'texto_bexon', 'Bexon' ) ); ?></span> -->
            <div class="brand-name wow fadeIn" data-wow-delay="2.2s">
                <div class="marquee-vr">
                <span class="text"><?php echo esc_html( $burger_get( 'texto_bexon_2', 'Bexon' ) ); ?><span class="icon">/</span></span>
                <span class="text"><?php echo esc_html( $burger_get( 'texto_bexon_3', 'Bexon' ) ); ?><span class="icon">/</span></span>
                <span class="text"><?php echo esc_html( $burger_get( 'texto_bexon_4', 'Bexon' ) ); ?><span class="icon">/</span></span>
                <span class="text"><?php echo esc_html( $burger_get( 'texto_bexon_5', 'Bexon' ) ); ?><span class="icon">/</span></span>
                <span class="text"><?php echo esc_html( $burger_get( 'texto_bexon_6', 'Bexon' ) ); ?><span class="icon">/</span></span>
                <span class="text"><?php echo esc_html( $burger_get( 'texto_bexon_7', 'Bexon' ) ); ?><span class="icon">/</span></span>
                </div>
            </div>
            <div class="growth-box wow fadeInUp" data-wow-delay="1.7s"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_growth_webp', NAKAMA_THEME_URL . '/assets/images/hero/growth.webp' ) ); ?>"
                alt=""></div>
            </div>
            <div class="wow fadeIn" data-wow-delay="2.2s">
            <div class="banner-author">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_eade_marren', 'Eade Marren' ) ); ?></h4>
                <span class="designation"><?php echo esc_html( $burger_get( 'texto_ceo_founder', 'CEO & Founder' ) ); ?></span>
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
    <div class="banner-scroll wow fadeInDown" data-wow-delay="2.5s">
    <a href="#choose" class="scroll-down">
        <span><i class="tji-arrow-down-long"></i></span>
        <?php echo esc_html( $burger_get( 'texto_scroll_down', 'Scroll Down' ) ); ?>
    </a>
    </div>
</section>
<!-- end: Banner Section 2 -->
