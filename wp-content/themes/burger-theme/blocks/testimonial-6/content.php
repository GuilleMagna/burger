<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Testimonial Section 6 -->
<section class="tj-testimonial-section h7-testimonial section-gap section-gap-x">
    <div class="container">
    <div class="row justify-content-between">
        <div class="col-12">
        <div class="sec-heading style-2 style-7 sec-heading-centered">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i> <?php echo esc_html( $burger_get( 'texto_client_feedback', 'CLIENT FEEDBACK' ) ); ?></span>
            <h2 class="sec-title text-anim"><?php echo esc_html( $burger_get( 'texto_our_clients_share_their_success_storie', 'Our Clients Share Their Success Stories.' ) ); ?></h2>
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
                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_1_webp', NAKAMA_THEME_URL . '/assets/images/testimonial/client-1.webp' ) ); ?>" alt="">
                        </div>
                        <div class="author-header">
                        <h4 class="title"><?php echo esc_html( $burger_get( 'texto_guy_hawkins', 'Guy Hawkins' ) ); ?></h4>
                        <span class="designation"><?php echo esc_html( $burger_get( 'texto_co_founder', 'Co. Founder' ) ); ?></span>
                        </div>
                    </div>
                    </div>
                    <div class="desc">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_we_ve_been_working_with_us_for_years_t', 'We’ve been working with us for years & they continue to deliver outstanding results. Their team is proactive, responsive, and always goes the extra mile to ensure our needs are met.' ) ); ?>
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
                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_2_webp', NAKAMA_THEME_URL . '/assets/images/testimonial/client-2.webp' ) ); ?>" alt="">
                        </div>
                        <div class="author-header">
                        <h4 class="title"><?php echo esc_html( $burger_get( 'texto_ralph_edwards', 'Ralph Edwards' ) ); ?></h4>
                        <span class="designation"><?php echo esc_html( $burger_get( 'texto_co_founder_2', 'Co. Founder' ) ); ?></span>
                        </div>
                    </div>
                    </div>
                    <div class="desc">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_working_with_bexon_has_been_a_game_cha', 'Working with Bexon has been a game-changer for our business. Their team\'s professionalism, attention to detail, and innovative solutions have helped us streamline operations' ) ); ?>
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
                        <h4 class="title"><?php echo esc_html( $burger_get( 'texto_devon_lane', 'Devon Lane' ) ); ?></h4>
                        <span class="designation"><?php echo esc_html( $burger_get( 'texto_co_founder_3', 'Co. Founder' ) ); ?></span>
                        </div>
                    </div>
                    </div>
                    <div class="desc">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_the_results_we_ve_seen_after_partnerin', 'The results we’ve seen after partnering with Bexon are beyond our expectations. They not only understood our vision but also brought new ideas to the table that have taken our business' ) ); ?>
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
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_h7_testimonial_shape', './assets/images/shape/h7-testimonial-shape-blur.svg' ) ); ?>" alt="">
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
<!-- end: Testimonial Section 6 -->
