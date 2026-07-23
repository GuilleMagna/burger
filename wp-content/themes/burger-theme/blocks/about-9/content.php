<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: About Section 9 -->
<section class="h9-about-section section-bottom-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading style-8 h9-sec-heading">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $burger_get( 'texto_about_our_company', 'About our company' ) ); ?></span>
            <h2 class="sec-title title-highlight wow fadeInUp" data-wow-delay=".3s"><span><?php echo esc_html( $burger_get( 'texto_our_stories', 'Our Stories' ) ); ?></span> <?php echo wp_kses_post( $burger_get( 'texto_on_begins_passion_driven_by_purpose_an', 'on Begins Passion Driven by Purpose, and Fueled by a Relentless Pursuit of Results and Client Real Success.' ) ); ?>
            </h2>
        </div>
        <div class="h9-about-area">
            <div class="about-img-area h9-about-img wow fadeInLeft" data-wow-delay=".3s">
            <div class="about-img overflow-hidden">
                <img data-speed=".8" src="<?php echo esc_url( $burger_get( 'imagen_assets_images_about_h9_about_webp', NAKAMA_THEME_URL . '/assets/images/about/h9-about.webp' ) ); ?>" alt="">
            </div>
            <div class="box-area">
                <div class="author-info wow fadeInUp" data-wow-delay=".3s">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_eade_marren', 'Eade Marren' ) ); ?></h4>
                <span class="designation"><?php echo esc_html( $burger_get( 'texto_ceo_founder', 'CEO & Founder' ) ); ?></span>
                </div>
            </div>
            </div>
            <div class="h9-about-content">
            <p class="desc wow fadeInUp" data-wow-delay=".4s"><?php echo wp_kses_post( $burger_get( 'texto_recognize_that_exceptional_customer_ex', 'Recognize that exceptional customer experiences are at the heart of every successful business. Our Customer Experience Solutions are crafted to help you transform every interaction your customers have with your brand busin into a meaningful and positive experience. We believe that understanding the customer.' ) ); ?></p>
            <div class="h9-about-funfact wow fadeInUp" data-wow-delay=".6s">
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
            <div class="about-btn-area-2 wow fadeInUp" data-wow-delay=".7s">
                <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_about_html', 'about.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more', 'Learn More' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                <a class="video-btn video-popup" data-autoplay="true" data-vbtype="video" data-maxwidth="1200px"
                href="<?php echo esc_url( $burger_get( 'link_https_www_youtube_com_watch_v_mlpwranjfbi', 'https://www.youtube.com/watch?v=MLpWrANjFbI' ) ); ?>">
                <span class="play-btn"><i class="tji-play"></i></span>
                <span class="video-text"><?php echo esc_html( $burger_get( 'texto_play_our_reels', 'Play our reels' ) ); ?></span>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: About Section 9 -->
