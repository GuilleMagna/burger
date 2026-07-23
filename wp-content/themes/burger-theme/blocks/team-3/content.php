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

<!-- start: Team Section 3 -->
<section class="h7-team section-gap section-gap-x">
    <div class="container-fluid">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading style-2 style-7 sec-heading-centered">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i> <?php echo esc_html( $burger_get( 'texto_meet_our_team', 'Meet Our Team' ) ); ?></span>
            <h2 class="sec-title text-anim"><?php echo esc_html( $burger_get( 'texto_the_people_empowering_business_level', 'The People Empowering Business Level.' ) ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="h7-team-wrapper">
            <div class="h7-team-marquee swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_james_anderson', 'James Anderson' ) ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive', 'Chief Executive' ) ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_h7_team_1_webp', NAKAMA_THEME_URL . '/assets/images/team/h7-team-1.webp' ) ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_2', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_savannah_ngueen', 'Savannah Ngueen' ) ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_2', 'Chief Executive' ) ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_h7_team_2_webp', NAKAMA_THEME_URL . '/assets/images/team/h7-team-2.webp' ) ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_3', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_emma_richardson', 'Emma Richardson' ) ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_3', 'Chief Executive' ) ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_h7_team_3_webp', NAKAMA_THEME_URL . '/assets/images/team/h7-team-3.webp' ) ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_4', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_eade_marren', 'Eade Marren' ) ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_4', 'Chief Executive' ) ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_h7_team_4_webp', NAKAMA_THEME_URL . '/assets/images/team/h7-team-4.webp' ) ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_5', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_james_anderson_2', 'James Anderson' ) ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_5', 'Chief Executive' ) ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_h7_team_1_webp_2', NAKAMA_THEME_URL . '/assets/images/team/h7-team-1.webp' ) ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_6', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_savannah_ngueen_2', 'Savannah Ngueen' ) ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_6', 'Chief Executive' ) ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_h7_team_2_webp_2', NAKAMA_THEME_URL . '/assets/images/team/h7-team-2.webp' ) ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_7', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_emma_richardson_2', 'Emma Richardson' ) ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_7', 'Chief Executive' ) ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_h7_team_3_webp_2', NAKAMA_THEME_URL . '/assets/images/team/h7-team-3.webp' ) ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_8', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_eade_marren_2', 'Eade Marren' ) ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_8', 'Chief Executive' ) ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_h7_team_4_webp_2', NAKAMA_THEME_URL . '/assets/images/team/h7-team-4.webp' ) ); ?>" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div dir="rtl" class="h7-team-marquee swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_9', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_benjamin_reed', 'Benjamin Reed' ) ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_9', 'Chief Executive' ) ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_h7_team_6_webp', NAKAMA_THEME_URL . '/assets/images/team/h7-team-6.webp' ) ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_10', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_nathaniel_ellington', 'Nathaniel Ellington' ) ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_10', 'Chief Executive' ) ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_h7_team_7_webp', NAKAMA_THEME_URL . '/assets/images/team/h7-team-7.webp' ) ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_11', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_nathan_price', 'Nathan Price' ) ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_11', 'Chief Executive' ) ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_h7_team_8_webp', NAKAMA_THEME_URL . '/assets/images/team/h7-team-8.webp' ) ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_12', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_caleb_turner', 'Caleb Turner' ) ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_12', 'Chief Executive' ) ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_h7_team_9_webp', NAKAMA_THEME_URL . '/assets/images/team/h7-team-9.webp' ) ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_13', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_benjamin_reed_2', 'Benjamin Reed' ) ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_13', 'Chief Executive' ) ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_h7_team_6_webp_2', NAKAMA_THEME_URL . '/assets/images/team/h7-team-6.webp' ) ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_14', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_nathaniel_ellington_2', 'Nathaniel Ellington' ) ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_14', 'Chief Executive' ) ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_h7_team_7_webp_2', NAKAMA_THEME_URL . '/assets/images/team/h7-team-7.webp' ) ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_15', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_nathan_price_2', 'Nathan Price' ) ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_15', 'Chief Executive' ) ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_h7_team_8_webp_2', NAKAMA_THEME_URL . '/assets/images/team/h7-team-8.webp' ) ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_16', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_caleb_turner_2', 'Caleb Turner' ) ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_16', 'Chief Executive' ) ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_h7_team_9_webp_2', NAKAMA_THEME_URL . '/assets/images/team/h7-team-9.webp' ) ); ?>" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>

        </div>

        </div>

    </div>
    </div>
    <div class="bg-shape-3">
    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_h7_testimonial_shape', './assets/images/shape/h7-testimonial-shape-blur.svg' ) ); ?>" alt="">
    </div>
</section>
<!-- end: Team Section 3 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
