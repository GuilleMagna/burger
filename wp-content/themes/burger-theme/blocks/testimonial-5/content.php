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

<!-- start: Testimonial Section 5 -->
<section class="h6-testimonial section-gap section-gap-x slidebar-stickiy-container">
    <div class="container">
    <div class="row">
        <div class="col-lg-6">
        <div class="h6-testimonial-banner">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_h6_testimonial', NAKAMA_THEME_URL . '/assets/images/testimonial/h6-testimonial-banner.webp' ) ); ?>" alt="">
            <a class="h6-testimonial-banner-video video-popup" href="<?php echo esc_url( $burger_get( 'link_https_youtu_be_gxfatcwro_u', 'https://youtu.be/gXFATcwrO-U' ) ); ?>"
            data-autoplay="true" data-vbtype="video">
            <i class="tji-play"></i>
            </a>
        </div>
        <div class="content-wrap slidebar-stickiy">
            <div class="sec-heading style-2 style-6">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_client_feedback', 'CLIENT FEEDBACK' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_our_clients_share_their_success_storie', 'Our Clients Share Their Success Stories' ) ); ?></h2>
            </div>
            <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_our_approach_to_customer_experience_is', 'Our approach to customer experience is comprehensive and data-driven. We begin by assessing your current.' ) ); ?></p>
            <div class="d-none d-lg-inline-flex wow fadeInUp" data-wow-delay=".6s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_explore_more', 'Explore More' ) ); ?></span></span>
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
                            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_1_webp', NAKAMA_THEME_URL . '/assets/images/testimonial/client-1.webp' ) ); ?>" alt="">
                        </div>
                        <div class="author-header">
                            <h4 class="title"><?php echo esc_html( $burger_get( 'texto_guy_hawkins', 'Guy Hawkins' ) ); ?></h4>
                            <span class="designation"><?php echo esc_html( $burger_get( 'texto_co_founder', 'Co. Founder' ) ); ?></span>
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
                    <p><?php echo wp_kses_post( $burger_get( 'texto_working_with_bexon_has_been_a_game_cha', '“Working with Bexon has been a game-changer for our business. Their team\'s professionalism, attention to detail, and innovative solutions have helped us streamline operations our goals faster than imagined. We truly feel like a valued partner.”' ) ); ?></p>
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <div class="h6-testimonial-author-wrapper">
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
                    <p><?php echo wp_kses_post( $burger_get( 'texto_working_with_bexon_has_been_a_game_cha_2', '“Working with Bexon has been a game-changer for our business. Their team\'s professionalism, attention to detail, and innovative solutions have helped us streamline operations our goals faster than imagined. We truly feel like a valued partner.”' ) ); ?></p>
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <div class="h6-testimonial-author-wrapper">
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
                    <p><?php echo wp_kses_post( $burger_get( 'texto_working_with_bexon_has_been_a_game_cha_3', '“Working with Bexon has been a game-changer for our business. Their team\'s professionalism, attention to detail, and innovative solutions have helped us streamline operations our goals faster than imagined. We truly feel like a valued partner.”' ) ); ?></p>
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="testimonial-item">
                    <div class="h6-testimonial-author-wrapper">
                    <div class="testimonial-author">
                        <div class="author-inner">
                        <div class="author-img">
                            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_1_webp_2', NAKAMA_THEME_URL . '/assets/images/testimonial/client-1.webp' ) ); ?>" alt="">
                        </div>
                        <div class="author-header">
                            <h4 class="title"><?php echo esc_html( $burger_get( 'texto_guy_hawkins_2', 'Guy Hawkins' ) ); ?></h4>
                            <span class="designation"><?php echo esc_html( $burger_get( 'texto_co_founder_4', 'Co. Founder' ) ); ?></span>
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
                    <p><?php echo wp_kses_post( $burger_get( 'texto_working_with_bexon_has_been_a_game_cha_4', '“Working with Bexon has been a game-changer for our business. Their team\'s professionalism, attention to detail, and innovative solutions have helped us streamline operations our goals faster than imagined. We truly feel like a valued partner.”' ) ); ?></p>
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
    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_2_svg', NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg' ) ); ?>" alt="">
    </div>
    <div class="bg-shape-2">
    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_3_svg', NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg' ) ); ?>" alt="">
    </div>
</section>
<!-- end: Testimonial Section 5 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
