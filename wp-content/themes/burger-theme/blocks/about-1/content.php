<?php
$content_fields = array(
    'imagen_assets_images_about_about_1_webp' => NAKAMA_THEME_URL . '/assets/images/about/about-1.webp',
    'texto_experiences' => 'Experiences',
    'texto_decades_of_experience_endless_innovati' => 'Decades of Experience, Endless Innovation',
    'texto_get_to_know_us' => 'Get to Know Us',
    'texto_empowering_businesses_with_innovation' => 'Empowering Businesses with Innovation, Expertise, and for',
    'texto_success' => 'Success.',
    'link_about_html' => 'about.html',
    'texto_learn_more' => 'Learn More',
    'texto_we_believe_in_building_lasting_relatio' => 'We believe in building lasting relationships with our clients through trust, innovation, and exceptional service.',
    'texto_esther_howard' => 'Esther Howard',
    'texto_co_founder' => 'Co.Founder',
    'imagen_assets_images_about_about_2_webp' => NAKAMA_THEME_URL . '/assets/images/about/about-2.webp',
    'link_https_www_youtube_com_watch_v_mlpwranjfbi_a' => 'https://www.youtube.com/watch?v=MLpWrANjFbI&ab_channel=eidelchteinadvogados',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: About Section -->
<section class="tj-about-section section-gap">
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 order-lg-1 order-2">
        <div class="about-img-area wow fadeInLeft" data-wow-delay=".2s">
            <div class="about-img overflow-hidden">
            <img data-speed="0.8" src="<?php echo esc_url( $imagen_assets_images_about_about_1_webp ); ?>" alt="">
            </div>
            <div class="box-area">
            <div class="experience-box wow fadeInUp" data-wow-delay=".3s">
                <span class="sub-title"><?php echo esc_html( $texto_experiences ); ?></span>
                <div class="customers-number">13+</div>
                <h6 class="customers-text"><?php echo esc_html( $texto_decades_of_experience_endless_innovati ); ?></h6>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-6 col-lg-6 order-lg-2 order-1">
        <div class="about-content-area style-1 wow fadeInLeft" data-wow-delay=".2s">
            <div class="sec-heading">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_get_to_know_us ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $texto_empowering_businesses_with_innovation ); ?> <span><?php echo esc_html( $texto_success ); ?></span>
            </h2>
            </div>
            <div class="wow fadeInUp" data-wow-delay=".5s">
            <a class="text-btn" href="<?php echo esc_url( $link_about_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_learn_more ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        <div class="about-bottom-area">
            <div class="client-review-cont wow fadeInUp" data-wow-delay=".7s">
            <div class="rating-area">
                <div class="star-ratings">
                <div class="fill-ratings" style="width: 100%">
                    <span>★★★★★</span>
                </div>
                <div class="empty-ratings">
                    <span>★★★★★</span>
                </div>
                </div>
            </div>
            <p class="desc"><?php echo wp_kses_post( $texto_we_believe_in_building_lasting_relatio ); ?></p>
            <div class="client-info-area">
                <div class="client-info">
                <h6 class="title"><?php echo esc_html( $texto_esther_howard ); ?></h6>
                <span class="designation"><?php echo esc_html( $texto_co_founder ); ?></span>
                </div>
                <span class="quote-icon"><i class="tji-quote"></i></span>
            </div>
            </div>
            <div class="video-img  wow fadeInUp" data-wow-delay=".9s">
            <img src="<?php echo esc_url( $imagen_assets_images_about_about_2_webp ); ?>" alt="">
            <a class="video-btn video-popup" data-autoplay="true" data-vbtype="video" data-maxwidth="1200px"
                href="<?php echo esc_url( $link_https_www_youtube_com_watch_v_mlpwranjfbi_a ); ?>">
                <span><i class="tji-play"></i></span>
            </a>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: About Section -->
