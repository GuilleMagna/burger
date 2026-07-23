<?php
$content_fields = array(
    'imagen_assets_images_testimonial_h6_testimonial' => NAKAMA_THEME_URL . '/assets/images/testimonial/h6-testimonial-banner.webp',
    'link_https_youtu_be_gxfatcwro_u' => 'https://youtu.be/gXFATcwrO-U',
    'texto_client_feedback' => 'CLIENT FEEDBACK',
    'texto_our_clients_share_their_success_storie' => 'Our Clients Share Their Success Stories',
    'texto_our_approach_to_customer_experience_is' => 'Our approach to customer experience is comprehensive and data-driven. We begin by assessing your current.',
    'link_contact_html' => 'contact.html',
    'texto_explore_more' => 'Explore More',
    'imagen_assets_images_testimonial_client_1_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-1.webp',
    'texto_guy_hawkins' => 'Guy Hawkins',
    'texto_co_founder' => 'Co. Founder',
    'texto_working_with_bexon_has_been_a_game_cha' => '“Working with Bexon has been a game-changer for our business. Their team\'s professionalism, attention to detail, and innovative solutions have helped us streamline operations our goals faster than imagined. We truly feel like a valued partner.”',
    'imagen_assets_images_testimonial_client_2_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-2.webp',
    'texto_ralph_edwards' => 'Ralph Edwards',
    'texto_co_founder_2' => 'Co. Founder',
    'texto_working_with_bexon_has_been_a_game_cha_2' => '“Working with Bexon has been a game-changer for our business. Their team\'s professionalism, attention to detail, and innovative solutions have helped us streamline operations our goals faster than imagined. We truly feel like a valued partner.”',
    'imagen_assets_images_testimonial_client_3_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-3.webp',
    'texto_devon_lane' => 'Devon Lane',
    'texto_co_founder_3' => 'Co. Founder',
    'texto_working_with_bexon_has_been_a_game_cha_3' => '“Working with Bexon has been a game-changer for our business. Their team\'s professionalism, attention to detail, and innovative solutions have helped us streamline operations our goals faster than imagined. We truly feel like a valued partner.”',
    'imagen_assets_images_testimonial_client_1_webp_2' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-1.webp',
    'texto_guy_hawkins_2' => 'Guy Hawkins',
    'texto_co_founder_4' => 'Co. Founder',
    'texto_working_with_bexon_has_been_a_game_cha_4' => '“Working with Bexon has been a game-changer for our business. Their team\'s professionalism, attention to detail, and innovative solutions have helped us streamline operations our goals faster than imagined. We truly feel like a valued partner.”',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Testimonial Section 5 -->
<section class="h6-testimonial section-gap section-gap-x slidebar-stickiy-container">
    <div class="container">
    <div class="row">
        <div class="col-lg-6">
        <div class="h6-testimonial-banner">
            <img src="<?php echo esc_url( $imagen_assets_images_testimonial_h6_testimonial ); ?>" alt="">
            <a class="h6-testimonial-banner-video video-popup" href="<?php echo esc_url( $link_https_youtu_be_gxfatcwro_u ); ?>"
            data-autoplay="true" data-vbtype="video">
            <i class="tji-play"></i>
            </a>
        </div>
        <div class="content-wrap slidebar-stickiy">
            <div class="sec-heading style-2 style-6">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_client_feedback ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $texto_our_clients_share_their_success_storie ); ?></h2>
            </div>
            <p class="desc"><?php echo wp_kses_post( $texto_our_approach_to_customer_experience_is ); ?></p>
            <div class="d-none d-lg-inline-flex wow fadeInUp" data-wow-delay=".6s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $link_contact_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_explore_more ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
        <div class="col-lg-6">
        <div class="testimonial-wrapper h6-testimonial-wrapper wow fadeInUp" data-wow-delay=".5s">
            <div class="swiper swiper-container h6-testimonial-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <div class="h6-testimonial-author-wrapper">
                    <div class="testimonial-author">
                        <div class="author-inner">
                        <div class="author-img">
                            <img src="<?php echo esc_url( $imagen_assets_images_testimonial_client_1_webp ); ?>" alt="">
                        </div>
                        <div class="author-header">
                            <h4 class="title"><?php echo esc_html( $texto_guy_hawkins ); ?></h4>
                            <span class="designation"><?php echo esc_html( $texto_co_founder ); ?></span>
                        </div>
                        </div>
                    </div>
                    <div class="star-ratings">
                        <div class="fill-ratings" style="width: 100%">
                        <span>★★★★★</span>
                        </div>
                        <div class="empty-ratings">
                        <span>★★★★★</span>
                        </div>
                    </div>
                    </div>
                    <div class="desc">
                    <p><?php echo wp_kses_post( $texto_working_with_bexon_has_been_a_game_cha ); ?></p>
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <div class="h6-testimonial-author-wrapper">
                    <div class="testimonial-author">
                        <div class="author-inner">
                        <div class="author-img">
                            <img src="<?php echo esc_url( $imagen_assets_images_testimonial_client_2_webp ); ?>" alt="">
                        </div>
                        <div class="author-header">
                            <h4 class="title"><?php echo esc_html( $texto_ralph_edwards ); ?></h4>
                            <span class="designation"><?php echo esc_html( $texto_co_founder_2 ); ?></span>
                        </div>
                        </div>
                    </div>
                    <div class="star-ratings">
                        <div class="fill-ratings" style="width: 100%">
                        <span>★★★★★</span>
                        </div>
                        <div class="empty-ratings">
                        <span>★★★★★</span>
                        </div>
                    </div>
                    </div>
                    <div class="desc">
                    <p><?php echo wp_kses_post( $texto_working_with_bexon_has_been_a_game_cha_2 ); ?></p>
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <div class="h6-testimonial-author-wrapper">
                    <div class="testimonial-author">
                        <div class="author-inner">
                        <div class="author-img">
                            <img src="<?php echo esc_url( $imagen_assets_images_testimonial_client_3_webp ); ?>" alt="">
                        </div>
                        <div class="author-header">
                            <h4 class="title"><?php echo esc_html( $texto_devon_lane ); ?></h4>
                            <span class="designation"><?php echo esc_html( $texto_co_founder_3 ); ?></span>
                        </div>
                        </div>
                    </div>
                    <div class="star-ratings">
                        <div class="fill-ratings" style="width: 100%">
                        <span>★★★★★</span>
                        </div>
                        <div class="empty-ratings">
                        <span>★★★★★</span>
                        </div>
                    </div>
                    </div>
                    <div class="desc">
                    <p><?php echo wp_kses_post( $texto_working_with_bexon_has_been_a_game_cha_3 ); ?></p>
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <div class="h6-testimonial-author-wrapper">
                    <div class="testimonial-author">
                        <div class="author-inner">
                        <div class="author-img">
                            <img src="<?php echo esc_url( $imagen_assets_images_testimonial_client_1_webp_2 ); ?>" alt="">
                        </div>
                        <div class="author-header">
                            <h4 class="title"><?php echo esc_html( $texto_guy_hawkins_2 ); ?></h4>
                            <span class="designation"><?php echo esc_html( $texto_co_founder_4 ); ?></span>
                        </div>
                        </div>
                    </div>
                    <div class="star-ratings">
                        <div class="fill-ratings" style="width: 100%">
                        <span>★★★★★</span>
                        </div>
                        <div class="empty-ratings">
                        <span>★★★★★</span>
                        </div>
                    </div>
                    </div>
                    <div class="desc">
                    <p><?php echo wp_kses_post( $texto_working_with_bexon_has_been_a_game_cha_4 ); ?></p>
                    </div>
                </div>
                </div>
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
</section>
<!-- end: Testimonial Section 5 -->
