<?php
$content_fields = array(
    'imagen_assets_images_testimonial_testimonial_img' => NAKAMA_THEME_URL . '/assets/images/testimonial/testimonial-img.webp',
    'texto_hear_from_our' => 'Hear from Our',
    'texto_customer' => 'Customer.',
    'texto_80_clients_reviews' => '(80+ Clients Reviews)',
    'texto_working_with_bexon_has_been_a_game_cha' => 'Working with Bexon has been a game-changer for our business. Their team\'s professionalism, attention to detail, and innovative solutions have helped us streamline operations and achieve our goals faster than we imagined. We truly feel like a valued partner. The results we’ve seen after partnering.',
    'imagen_assets_images_testimonial_client_1_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-1.webp',
    'texto_guy_hawkins' => 'Guy Hawkins',
    'texto_co_founder' => 'Co. Founder',
    'texto_the_results_we_ve_seen_after_partnerin' => 'The results we’ve seen after partnering with Bexon are beyond our expectations. They not only understood our vision but also brought new ideas to the table that have taken our business to the next level. Their expertise and commitment to success make them a trusted.',
    'imagen_assets_images_testimonial_client_2_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-2.webp',
    'texto_ralph_edwards' => 'Ralph Edwards',
    'texto_co_founder_2' => 'Co. Founder',
    'texto_we_ve_been_working_with_bexonfor_years' => 'We’ve been working with Bexonfor years, and they continue to deliver outstanding results. Their team is proactive, responsive, and always goes the extra mile to ensure our needs are met. They’ve become a key contributor to our growth and success that really help us"',
    'imagen_assets_images_testimonial_client_3_webp' => NAKAMA_THEME_URL . '/assets/images/testimonial/client-3.webp',
    'texto_devon_lane' => 'Devon Lane',
    'texto_co_founder_3' => 'Co. Founder',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Testimonial Section 2 -->
<section class="tj-testimonial-section-2 section-gap">
    <div class="container">
    <div class="row row-gap-3">
        <div class="col-lg-6">
        <div class="testimonial-img-area wow fadeInUp" data-wow-delay=".3s">
            <div class="testimonial-img">
            <img data-speed=".8" src="<?php echo esc_url( $imagen_assets_images_testimonial_testimonial_img ); ?>" alt="">
            <div class="sec-heading style-2">
                <h2 class="sec-title text-anim"><?php echo esc_html( $texto_hear_from_our ); ?> <span><?php echo esc_html( $texto_customer ); ?></span></h2>
            </div>
            </div>
            <div class="box-area">
            <div class="rating-box wow fadeInUp" data-wow-delay=".3s">
                <h2 class="title">4.9</h2>
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
                <span class="rating-text"><?php echo esc_html( $texto_80_clients_reviews ); ?></span>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-6">
        <div class="testimonial-wrapper wow fadeInUp" data-wow-delay=".5s">
            <div class="swiper testimonial-slider-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <span class="quote-icon"><i class="tji-quote"></i></span>
                    <div class="desc">
                    <p><?php echo wp_kses_post( $texto_working_with_bexon_has_been_a_game_cha ); ?></p>
                    </div>
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
                </div>
                </div>
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <span class="quote-icon"><i class="tji-quote"></i></span>
                    <div class="desc">
                    <p><?php echo wp_kses_post( $texto_the_results_we_ve_seen_after_partnerin ); ?>
                    </p>
                    </div>
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
                </div>
                </div>
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <span class="quote-icon"><i class="tji-quote"></i></span>
                    <div class="desc">
                    <p><?php echo wp_kses_post( $texto_we_ve_been_working_with_bexonfor_years ); ?>
                    </p>
                    </div>
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
                </div>
                </div>
            </div>
            <div class="swiper-pagination-area"></div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Testimonial Section 2 -->
