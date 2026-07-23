<?php
$__block_fields = function_exists('get_fields') ? (array) get_fields() : [];
$__block_cache_key = 'acf_block_' . md5(($block['id'] ?? basename(__DIR__)) . serialize($__block_fields));

if (($__block_cached_html = get_transient($__block_cache_key)) !== false) {
    echo $__block_cached_html;
    return;
}

ob_start();
?>
<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Testimonial Section 3 -->
<section class="tj-testimonial-section-3 section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="testimonial-wrapper-2 wow fadeInUp" data-wow-delay=".4s">
            <h5 class="sec-title"><?php echo esc_html( $burger_get( 'texto_our_clients_love', 'Our Clients Love' ) ); ?> <span><?php echo esc_html( $burger_get( 'texto_feedback', 'Feedback' ) ); ?></span></h5>
            <div class="swiper client-thumb">
            <div class="swiper-wrapper">
                <div class="swiper-slide thumb-item">
                <div class="thumb-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_1_webp', NAKAMA_THEME_URL . '/assets/images/testimonial/client-1.webp' ) ); ?>" alt="Image">
                </div>
                <div class="author-header">
                    <h4 class="title"><?php echo esc_html( $burger_get( 'texto_mevon_lane', 'Mevon Lane' ) ); ?></h4>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_co_founder', 'Co. Founder' ) ); ?></span>
                </div>
                </div>
                <div class="swiper-slide thumb-item">
                <div class="thumb-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_2_webp', NAKAMA_THEME_URL . '/assets/images/testimonial/client-2.webp' ) ); ?>" alt="Image">
                </div>
                <div class="author-header">
                    <h4 class="title"><?php echo esc_html( $burger_get( 'texto_ralph_edwards', 'Ralph Edwards' ) ); ?></h4>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_co_founder_2', 'Co. Founder' ) ); ?></span>
                </div>
                </div>
                <div class="swiper-slide thumb-item">
                <div class="thumb-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_3_webp', NAKAMA_THEME_URL . '/assets/images/testimonial/client-3.webp' ) ); ?>" alt="Image">
                </div>
                <div class="author-header">
                    <h4 class="title"><?php echo esc_html( $burger_get( 'texto_guy_hawkins', 'Guy Hawkins' ) ); ?></h4>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_co_founder_3', 'Co. Founder' ) ); ?></span>
                </div>
                </div>
            </div>
            </div>
            <div class="testimonial-navigation d-none d-md-inline-flex">
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
            <div class="swiper testimonial-slider-3">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <div class="desc">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_working_with_bexon_has_been_a_game_cha', 'Working with Bexon has been a game-changer for our business. Their team\'s professionalism, attention to detail, and innovative solutions have helped us streamline operations and achieve our goals faster than we imagined. We truly feel like a valued partner. The results we’ve seen after partnering.' ) ); ?></p>
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <div class="desc">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_the_results_we_ve_seen_after_partnerin', 'The results we’ve seen after partnering with Bexon are beyond our expectations. They not only understood our vision but also brought new ideas to the table that have taken our business to the next level. Their expertise and commitment to success make them a trusted.' ) ); ?>
                    </p>
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <div class="desc">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_we_ve_been_working_with_bexonfor_years', 'We’ve been working with Bexonfor years, and they continue to deliver outstanding results. Their team is proactive, responsive, and always goes the extra mile to ensure our needs are met. They’ve become a key contributor to our growth and success that really help us"' ) ); ?>
                    </p>
                    </div>
                </div>
                </div>
            </div>
            <div class="swiper-pagination-area"></div>
            </div>
            <span class="quote-icon"><i class="tji-quote"></i></span>
            <div class="bg-shape-1">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_2_svg', NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg' ) ); ?>" alt="">
            </div>
            <div class="bg-shape-2">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_3_svg', NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg' ) ); ?>" alt="">
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Testimonial Section 3 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
