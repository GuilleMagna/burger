<?php
$content_fields = array(
    'texto_client_feedback' => 'CLIENT FEEDBACK',
    'texto_our_clients_share_their_success_storie' => 'Our Clients Share Their Success Stories.',
    'imagen_assets_images_testimonial_client_1_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-1.webp',
    'texto_guy_hawkins' => 'Guy Hawkins',
    'texto_co_founder' => 'Co. Founder',
    'texto_we_ve_been_working_with_us_for_years_t' => 'We’ve been working with us for years & they continue to deliver outstanding results. Their team is proactive, responsive, and always goes the extra mile to ensure our needs are met.',
    'imagen_assets_images_testimonial_client_2_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-2.webp',
    'texto_ralph_edwards' => 'Ralph Edwards',
    'texto_co_founder_2' => 'Co. Founder',
    'texto_working_with_bexon_has_been_a_game_cha' => 'Working with Bexon has been a game-changer for our business. Their team\'s professionalism, attention to detail, and innovative solutions have helped us streamline operations',
    'imagen_assets_images_testimonial_client_3_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-3.webp',
    'texto_devon_lane' => 'Devon Lane',
    'texto_co_founder_3' => 'Co. Founder',
    'texto_the_results_we_ve_seen_after_partnerin' => 'The results we’ve seen after partnering with Bexon are beyond our expectations. They not only understood our vision but also brought new ideas to the table that have taken our business',
    'imagen_assets_images_shape_h7_testimonial_shape' => './assets/images/shape/h7-testimonial-shape-blur.svg',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Testimonial Section 6 -->
<section class="tj-testimonial-section h7-testimonial section-gap section-gap-x">
    <div class="container">
    <div class="row justify-content-between">
        <div class="col-12">
        <div class="sec-heading style-2 style-7 sec-heading-centered">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i> <?php echo esc_html( $texto_client_feedback ); ?></span>
            <h2 class="sec-title text-anim"><?php echo esc_html( $texto_our_clients_share_their_success_storie ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="testimonial-wrapper  h7-testimonial-wrapper  wow fadeInRightBig" data-wow-delay=".3s">
            <div class="swiper swiper-container testimonial-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="testimonial-item">
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
                    <div class="desc">
                    <p><?php echo wp_kses_post( $texto_we_ve_been_working_with_us_for_years_t ); ?>
                    </p>
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
                </div>
                <div class="swiper-slide">
                <div class="testimonial-item">
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
                    <div class="desc">
                    <p><?php echo wp_kses_post( $texto_working_with_bexon_has_been_a_game_cha ); ?>
                    </p>
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
                </div>
                <div class="swiper-slide">
                <div class="testimonial-item">
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
                    <div class="desc">
                    <p><?php echo wp_kses_post( $texto_the_results_we_ve_seen_after_partnerin ); ?>
                    </p>
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
                </div>
            </div>
            <div class="swiper-pagination-area"></div>
            </div>
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
            <div class="bg-shape-3">
            <img src="<?php echo esc_url( $imagen_assets_images_shape_h7_testimonial_shape ); ?>" alt="">
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
<!-- end: Testimonial Section 6 -->
