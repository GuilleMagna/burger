<?php
$content_fields = array(
    'texto_projects_completed' => 'Projects Completed.',
    'texto_get_to_know_us' => 'Get to Know Us',
    'texto_driving_into_excellence_innovation_you' => 'Driving into Excellence & Innovation: Your Trusted Partner for Sustainable Business Success.',
    'link_about_html' => 'about.html',
    'texto_learn_more' => 'Learn More',
    'imagen_assets_images_about_about_3_webp' => NAKAMA_THEME_URL . '/assets/images/about/about-3.webp',
    'link_https_www_youtube_com_watch_v_mlpwranjfbi_a' => 'https://www.youtube.com/watch?v=MLpWrANjFbI&ab_channel=eidelchteinadvogados',
    'imagen_assets_images_about_about_4_webp' => 'assets/images/about/about-4.webp',
    'imagen_assets_images_testimonial_client_1_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-1.webp',
    'imagen_assets_images_testimonial_client_2_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-2.webp',
    'imagen_assets_images_testimonial_client_3_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-3.webp',
    'texto_we_have_100_happy_customer' => 'We have 100+ happy customer.',
    'imagen_assets_images_shape_star_svg' => NAKAMA_THEME_URL . '/assets/images/shape/star.svg',
    'texto_reach_worldwide' => 'Reach Worldwide',
    'texto_faster_growth' => 'Faster Growth',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: About Section 2 -->
<section class="tj-about-section section-gap">
    <div class="container">
    <div class="row row-gap-4">
        <div class="col-lg-4 col-md-6 order-lg-1 order-3">
        <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".1s">
            <span class="count-icon"><i class="tji-complete"></i></span>
            <span class="steps">01.</span>
            <div class="count-inner">
            <span class="count-text"><?php echo esc_html( $texto_projects_completed ); ?></span>
            <div class="inline-content">
                <span class="odometer countup-number" data-count="93"></span>
                <span class="count-plus">%</span>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-8 col-sm-12 order-lg-2 order-1">
        <div class="about-content-area-2 wow fadeInUp" data-wow-delay=".3s">
            <div class="about-content">
            <div class="sec-heading style-2">
                <span class="sub-title"><?php echo esc_html( $texto_get_to_know_us ); ?></span>
                <h2 class="sec-title title-highlight"><?php echo esc_html( $texto_driving_into_excellence_innovation_you ); ?>
                </h2>
            </div>
            <div class="wow fadeInUp" data-wow-delay=".3s">
                <a class="text-btn" href="<?php echo esc_url( $link_about_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_learn_more ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
            <div class="video-img wow fadeInRight" data-wow-delay=".7s">
            <img src="<?php echo esc_url( $imagen_assets_images_about_about_3_webp ); ?>" alt="Image">
            <a class="video-btn video-popup" data-autoplay="true" data-vbtype="video" data-maxwidth="1200px"
                href="<?php echo esc_url( $link_https_www_youtube_com_watch_v_mlpwranjfbi_a ); ?>">
                <span><i class="tji-play"></i></span>
            </a>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 order-lg-3 order-2">
        <div class="customers-box style-2 wow fadeInUp" data-wow-delay=".3s">
            <div class="customers-bg" data-bg-image="<?php echo esc_url( $imagen_assets_images_about_about_4_webp ); ?>"></div>
            <div class="customers">
            <ul>
                <li class="wow fadeInLeft" data-wow-delay=".3s"><img src="<?php echo esc_url( $imagen_assets_images_testimonial_client_1_webp ); ?>"
                    alt=""></li>
                <li class="wow fadeInLeft" data-wow-delay=".4s"><img src="<?php echo esc_url( $imagen_assets_images_testimonial_client_2_webp ); ?>"
                    alt=""></li>
                <li class="wow fadeInLeft" data-wow-delay=".5s"><img src="<?php echo esc_url( $imagen_assets_images_testimonial_client_3_webp ); ?>"
                    alt=""></li>
                <li class="wow fadeInLeft" data-wow-delay=".6s"><span><i class="tji-plus"></i></span></li>
            </ul>
            </div>
            <h6 class="customers-text wow fadeInLeft" data-wow-delay=".6s"><?php echo esc_html( $texto_we_have_100_happy_customer ); ?></h6>
            <div class="star-icon zoomInOut"><img src="<?php echo esc_url( $imagen_assets_images_shape_star_svg ); ?>" alt=""></div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 order-lg-4 order-4">
        <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".5s">
            <span class="count-icon"><i class="tji-worldwide"></i></span>
            <span class="steps">02.</span>
            <div class="count-inner">
            <span class="count-text"><?php echo esc_html( $texto_reach_worldwide ); ?></span>
            <div class="inline-content">
                <span class="odometer countup-number" data-count="20"></span>
                <span class="count-plus">M</span>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 order-lg-5 order-5">
        <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".7s">
            <span class="count-icon"><i class="tji-growth"></i></span>
            <span class="steps">03.</span>
            <div class="count-inner">
            <span class="count-text"><?php echo esc_html( $texto_faster_growth ); ?></span>
            <div class="inline-content">
                <span class="odometer countup-number" data-count="8.5"></span>
                <span class="count-plus">X</span>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: About Section 2 -->
