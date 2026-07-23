<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Testimonial Section 8 -->
<section class="h9-testimonial section-gap">
    <div class="container">
    <div class="row">
        <div class="col-lg-4 order-2 order-lg-1">
        <div class="h9-testimonial-wrap">
            <div class="testimonial-item wow fadeInUpBig" data-wow-delay=".2s">
            <div class="star-ratings">
                <div class="fill-ratings" style="width: 100%">
                <span>★★★★★</span>
                </div>
                <div class="empty-ratings">
                <span>★★★★★</span>
                </div>
            </div>
            <div class="desc">
                <p><?php echo wp_kses_post( $burger_get( 'texto_working_with_bexon_has_been_a_game_cha', '“Working with Bexon has been a game-changer business. Their team\'s profession alism, attention to detail, and innovative solutions have help streamline operations our goals faster than imagined. We truly feel like a valued partner.”' ) ); ?></p>
            </div>
            <div class="testimonial-author">
                <div class="author-inner">
                <div class="author-header">
                    <h5 class="title"><?php echo esc_html( $burger_get( 'texto_nathaniel_ellington', 'Nathaniel Ellington' ) ); ?></h5>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive', 'Chief Executive' ) ); ?></span>
                </div>
                </div>
            </div>
            </div>
            <div class="testimonial-item style-2 wow fadeInUpBig" data-wow-delay=".4s">
            <div class="star-ratings">
                <div class="fill-ratings" style="width: 100%">
                <span>★★★★★</span>
                </div>
                <div class="empty-ratings">
                <span>★★★★★</span>
                </div>
            </div>
            <div class="desc">
                <p><?php echo wp_kses_post( $burger_get( 'texto_working_with_bexon_has_been_a_game_cha_2', '“Working with Bexon has been a game-changer business. Their team\'s profession alism, attention to detail, and innovative solutions have help streamline operations our goals faster than imagined. We truly feel like a valued partner.”' ) ); ?></p>
            </div>
            <div class="testimonial-author">
                <div class="author-inner">
                <div class="author-header">
                    <h5 class="title"><?php echo esc_html( $burger_get( 'texto_nathaniel_ellington_2', 'Nathaniel Ellington' ) ); ?></h5>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_2', 'Chief Executive' ) ); ?></span>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2">
        <div class="h9-testimonial-heading">
            <div class="sec-heading style-8">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $burger_get( 'texto_clients_testimonials', 'Clients Testimonials' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_our_trusted_clients', 'Our Trusted Clients.' ) ); ?></h2>
            </div>
            <div class="testimonial-img wow fadeInUpBig" data-wow-delay=".3s">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_h9_testimonial', NAKAMA_THEME_URL . '/assets/images/testimonial/h9-testimonial-img.webp' ) ); ?>" alt="">
            </div>
            <div class="shape-icon wow fadeIn" data-wow-delay=".5s"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_big_icon_png', NAKAMA_THEME_URL . '/assets/images/shape/big-icon.png' ) ); ?>"
                alt=""></div>
        </div>
        </div>
        <div class="col-lg-4 order-3 order-lg-3">
        <div class="h9-testimonial-wrap style-2">
            <div class="testimonial-item style-2 wow fadeInUpBig" data-wow-delay=".2s">
            <div class="star-ratings">
                <div class="fill-ratings" style="width: 100%">
                <span>★★★★★</span>
                </div>
                <div class="empty-ratings">
                <span>★★★★★</span>
                </div>
            </div>
            <div class="desc">
                <p><?php echo wp_kses_post( $burger_get( 'texto_working_with_bexon_has_been_a_game_cha_3', '“Working with Bexon has been a game-changer business. Their team\'s profession alism, attention to detail, and innovative solutions have help streamline operations our goals faster than imagined. We truly feel like a valued partner.”' ) ); ?></p>
            </div>
            <div class="testimonial-author">
                <div class="author-inner">
                <div class="author-header">
                    <h5 class="title"><?php echo esc_html( $burger_get( 'texto_nathaniel_ellington_3', 'Nathaniel Ellington' ) ); ?></h5>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_3', 'Chief Executive' ) ); ?></span>
                </div>
                </div>
            </div>
            </div>
            <div class="testimonial-item wow fadeInUpBig" data-wow-delay=".4s">
            <div class="star-ratings">
                <div class="fill-ratings" style="width: 100%">
                <span>★★★★★</span>
                </div>
                <div class="empty-ratings">
                <span>★★★★★</span>
                </div>
            </div>
            <div class="desc">
                <p><?php echo wp_kses_post( $burger_get( 'texto_working_with_bexon_has_been_a_game_cha_4', '“Working with Bexon has been a game-changer business. Their team\'s profession alism, attention to detail, and innovative solutions have help streamline operations our goals faster than imagined. We truly feel like a valued partner.”' ) ); ?></p>
            </div>
            <div class="testimonial-author">
                <div class="author-inner">
                <div class="author-header">
                    <h5 class="title"><?php echo esc_html( $burger_get( 'texto_nathaniel_ellington_4', 'Nathaniel Ellington' ) ); ?></h5>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_4', 'Chief Executive' ) ); ?></span>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Testimonial Section 8 -->
