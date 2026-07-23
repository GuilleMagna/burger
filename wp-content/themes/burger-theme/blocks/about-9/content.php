<?php
$content_fields = array(
    'texto_about_our_company' => 'About our company',
    'texto_our_stories' => 'Our Stories',
    'texto_on_begins_passion_driven_by_purpose_an' => 'on Begins Passion Driven by Purpose, and Fueled by a Relentless Pursuit of Results and Client Real Success.',
    'imagen_assets_images_about_h9_about_webp' => NAKAMA_THEME_URL . '/assets/images/about/h9-about.webp',
    'texto_eade_marren' => 'Eade Marren',
    'texto_ceo_founder' => 'CEO & Founder',
    'texto_recognize_that_exceptional_customer_ex' => 'Recognize that exceptional customer experiences are at the heart of every successful business. Our Customer Experience Solutions are crafted to help you transform every interaction your customers have with your brand busin into a meaningful and positive experience. We believe that understanding the customer.',
    'texto_reach_worldwide_empower_dreams_everywh' => 'Reach Worldwide empower dreams everywhere.',
    'texto_faster_growth_starts_smart_solutions_t' => 'Faster Growth starts smart solutions today.',
    'link_about_html' => 'about.html',
    'texto_learn_more' => 'Learn More',
    'link_https_www_youtube_com_watch_v_mlpwranjfbi' => 'https://www.youtube.com/watch?v=MLpWrANjFbI',
    'texto_play_our_reels' => 'Play our reels',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: About Section 9 -->
<section class="h9-about-section section-bottom-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading style-8 h9-sec-heading">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $texto_about_our_company ); ?></span>
            <h2 class="sec-title title-highlight wow fadeInUp" data-wow-delay=".3s"><span><?php echo esc_html( $texto_our_stories ); ?></span> <?php echo wp_kses_post( $texto_on_begins_passion_driven_by_purpose_an ); ?>
            </h2>
        </div>
        <div class="h9-about-area">
            <div class="about-img-area h9-about-img wow fadeInLeft" data-wow-delay=".3s">
            <div class="about-img overflow-hidden">
                <img data-speed=".8" src="<?php echo esc_url( $imagen_assets_images_about_h9_about_webp ); ?>" alt="">
            </div>
            <div class="box-area">
                <div class="author-info wow fadeInUp" data-wow-delay=".3s">
                <h4 class="title"><?php echo esc_html( $texto_eade_marren ); ?></h4>
                <span class="designation"><?php echo esc_html( $texto_ceo_founder ); ?></span>
                </div>
            </div>
            </div>
            <div class="h9-about-content">
            <p class="desc wow fadeInUp" data-wow-delay=".4s"><?php echo wp_kses_post( $texto_recognize_that_exceptional_customer_ex ); ?></p>
            <div class="h9-about-funfact wow fadeInUp" data-wow-delay=".6s">
                <div class="countup-item">
                <div class="inline-content">
                    <span class="odometer countup-number" data-count="20"></span>
                    <span class="count-plus">M</span>
                </div>
                <span class="count-text"><?php echo esc_html( $texto_reach_worldwide_empower_dreams_everywh ); ?></span>
                </div>
                <div class="countup-item">
                <div class="inline-content">
                    <span class="odometer countup-number" data-count="8.5"></span>
                    <span class="count-plus">X</span>
                </div>
                <span class="count-text"><?php echo esc_html( $texto_faster_growth_starts_smart_solutions_t ); ?></span>
                </div>
            </div>
            <div class="about-btn-area-2 wow fadeInUp" data-wow-delay=".7s">
                <a class="tj-primary-btn" href="<?php echo esc_url( $link_about_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_learn_more ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                <a class="video-btn video-popup" data-autoplay="true" data-vbtype="video" data-maxwidth="1200px"
                href="<?php echo esc_url( $link_https_www_youtube_com_watch_v_mlpwranjfbi ); ?>">
                <span class="play-btn"><i class="tji-play"></i></span>
                <span class="video-text"><?php echo esc_html( $texto_play_our_reels ); ?></span>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: About Section 9 -->
