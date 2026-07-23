<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Testimonial Section 7 -->
<section class="h8-testimonial section-gap">
    <div class="container">
    <div class="row justify-content-between">
        <div class="col-12">
        <div class="sec-heading style-3 sec-heading-centered ">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_choose_the_best', 'Choose the Best' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_our_clients_share_their_success_storie', 'Our Clients Share Their Success Stories.' ) ); ?></h2>
        </div>

        </div>
    </div>

    </div>
    <div class="container-fluid gap-0">
    <div class="row">
        <div class="col-12">
        <div class="testimonial-wrapper h8-testimonial-wrapper wow fadeInUpBig" data-wow-delay=".3s">
            <div class="swiper swiper-container h8-testimonial-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <div class="star-ratings">
                    <div class="fill-ratings" style="width: 100%">
                        <span>★★★★★</span>
                    </div>
                    <div class="empty-ratings">
                        <span>★★★★★</span>
                    </div>
                    </div>
                    <div class="desc">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_working_with_bexon_has_been_a_game_cha', 'Working with Bexon has been a game-changer for our business. Their team\'s professionalism, attention to detail, and innovative solutions have helped us streamline operations and achieve our goals faster than we imagined. We truly feel like a valued partner.' ) ); ?></p>
                    </div>
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
                </div>
                </div>
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <div class="star-ratings">
                    <div class="fill-ratings" style="width: 100%">
                        <span>★★★★★</span>
                    </div>
                    <div class="empty-ratings">
                        <span>★★★★★</span>
                    </div>
                    </div>
                    <div class="desc">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_the_results_we_ve_seen_after_partnerin', 'The results we’ve seen after partnering with Bexon are beyond our expectations. They not only understood our vision but also brought new ideas to the table that have taken our business to the next level. Their expertise and commitment to success make them a trusted.' ) ); ?>
                    </p>
                    </div>
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
                </div>
                </div>
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <div class="star-ratings">
                    <div class="fill-ratings" style="width: 100%">
                        <span>★★★★★</span>
                    </div>
                    <div class="empty-ratings">
                        <span>★★★★★</span>
                    </div>
                    </div>
                    <div class="desc">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_we_ve_been_working_with_bexonfor_years', 'We’ve been working with Bexonfor years, and they continue to deliver outstanding results. Their team is proactive, responsive, and always goes the extra mile to ensure our needs are met. They’ve become a key contributor to our growth and success that really help us"' ) ); ?>
                    </p>
                    </div>
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
<!-- end: Testimonial Section 7 -->
