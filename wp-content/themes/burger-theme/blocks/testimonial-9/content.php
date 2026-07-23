<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Testimonial Section 9 -->
<section class="h10-testimonial section-gap section-gap-x">
    <div class="container">
    <div class="row justify-content-between">
        <div class="col-12">
        <div class="sec-heading-wrap">
            <div class="heading-wrap-content">
            <div class="sec-heading style-3">
                <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_clients_feedback', 'Clients Feedback' ) ); ?></span>
                <h2 class="sec-title text-anim"><?php echo esc_html( $burger_get( 'texto_our_clients_share_their_success_storie', 'Our Clients Share Their Success Stories.' ) ); ?></h2>
            </div>
            <div class="slider-navigation d-none d-md-inline-flex wow fadeInUp" data-wow-delay=".5s">
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
            </div>
            </div>
        </div>

        </div>
    </div>

    </div>
    <div class="container-fluid gap-0">
    <div class="row">
        <div class="col-12">
        <div class="testimonial-wrapper h8-testimonial-wrapper h10-testimonial-wrapper wow fadeInUp"
            data-wow-delay=".3s">
            <div class="swiper swiper-container h10-testimonial-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <div class="testimonial-author">
                    <div class="author-inner">
                        <div class="author-img">
                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_1_webp', NAKAMA_THEME_URL . '/assets/images/testimonial/client-1.webp' ) ); ?>" alt="">
                        </div>
                        <div class="author-header">
                        <h5 class="title"><?php echo esc_html( $burger_get( 'texto_guy_hawkins', 'Guy Hawkins' ) ); ?></h5>
                        <span class="designation"><?php echo esc_html( $burger_get( 'texto_co_founder', 'Co. Founder' ) ); ?></span>
                        </div>
                    </div>
                    </div>
                    <div class="desc">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_working_with_bexon_has_been_a_game_cha', 'Working with Bexon has been a game-changer for our business. Their team\'s professionalism, attention to detail, and innovative solutions have helped us achieve our goals faster than we imagined. We truly feel like a valued partner.' ) ); ?></p>
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
                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_2_webp', NAKAMA_THEME_URL . '/assets/images/testimonial/client-2.webp' ) ); ?>" alt="">
                        </div>
                        <div class="author-header">
                        <h5 class="title"><?php echo esc_html( $burger_get( 'texto_ralph_edwards', 'Ralph Edwards' ) ); ?></h5>
                        <span class="designation"><?php echo esc_html( $burger_get( 'texto_co_founder_2', 'Co. Founder' ) ); ?></span>
                        </div>
                    </div>
                    </div>
                    <div class="desc">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_the_results_we_ve_seen_after_partnerin', 'The results we’ve seen after partnering with Bexon are beyond our expectations. They not only understood our vision but also brought new ideas to the table that have taken our business to the next level. Their expertise and commitment to success make them a trusted.' ) ); ?>
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
                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_3_webp', NAKAMA_THEME_URL . '/assets/images/testimonial/client-3.webp' ) ); ?>" alt="">
                        </div>
                        <div class="author-header">
                        <h5 class="title"><?php echo esc_html( $burger_get( 'texto_devon_lane', 'Devon Lane' ) ); ?></h5>
                        <span class="designation"><?php echo esc_html( $burger_get( 'texto_co_founder_3', 'Co. Founder' ) ); ?></span>
                        </div>
                    </div>
                    </div>
                    <div class="desc">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_we_ve_been_working_with_bexonfor_years', 'We’ve been working with Bexonfor years, and they continue to deliver outstanding results. Their team is proactive and responsive to ensure our needs are met. They’ve become a key contributor to our growth and success that really help us"' ) ); ?>
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
</section>
<!-- end: Testimonial Section 9 -->
