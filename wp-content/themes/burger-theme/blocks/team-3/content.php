<?php
$content_fields = array(
    'texto_meet_our_team' => 'Meet Our Team',
    'texto_the_people_empowering_business_level' => 'The People Empowering Business Level.',
    'link_team_details_html' => 'team-details.html',
    'texto_james_anderson' => 'James Anderson',
    'texto_chief_executive' => 'Chief Executive',
    'imagen_assets_images_team_h7_team_1_webp' => NAKAMA_THEME_URL . '/assets/images/team/h7-team-1.webp',
    'link_team_details_html_2' => 'team-details.html',
    'texto_savannah_ngueen' => 'Savannah Ngueen',
    'texto_chief_executive_2' => 'Chief Executive',
    'imagen_assets_images_team_h7_team_2_webp' => NAKAMA_THEME_URL . '/assets/images/team/h7-team-2.webp',
    'link_team_details_html_3' => 'team-details.html',
    'texto_emma_richardson' => 'Emma Richardson',
    'texto_chief_executive_3' => 'Chief Executive',
    'imagen_assets_images_team_h7_team_3_webp' => NAKAMA_THEME_URL . '/assets/images/team/h7-team-3.webp',
    'link_team_details_html_4' => 'team-details.html',
    'texto_eade_marren' => 'Eade Marren',
    'texto_chief_executive_4' => 'Chief Executive',
    'imagen_assets_images_team_h7_team_4_webp' => NAKAMA_THEME_URL . '/assets/images/team/h7-team-4.webp',
    'link_team_details_html_5' => 'team-details.html',
    'texto_james_anderson_2' => 'James Anderson',
    'texto_chief_executive_5' => 'Chief Executive',
    'imagen_assets_images_team_h7_team_1_webp_2' => NAKAMA_THEME_URL . '/assets/images/team/h7-team-1.webp',
    'link_team_details_html_6' => 'team-details.html',
    'texto_savannah_ngueen_2' => 'Savannah Ngueen',
    'texto_chief_executive_6' => 'Chief Executive',
    'imagen_assets_images_team_h7_team_2_webp_2' => NAKAMA_THEME_URL . '/assets/images/team/h7-team-2.webp',
    'link_team_details_html_7' => 'team-details.html',
    'texto_emma_richardson_2' => 'Emma Richardson',
    'texto_chief_executive_7' => 'Chief Executive',
    'imagen_assets_images_team_h7_team_3_webp_2' => NAKAMA_THEME_URL . '/assets/images/team/h7-team-3.webp',
    'link_team_details_html_8' => 'team-details.html',
    'texto_eade_marren_2' => 'Eade Marren',
    'texto_chief_executive_8' => 'Chief Executive',
    'imagen_assets_images_team_h7_team_4_webp_2' => NAKAMA_THEME_URL . '/assets/images/team/h7-team-4.webp',
    'link_team_details_html_9' => 'team-details.html',
    'texto_benjamin_reed' => 'Benjamin Reed',
    'texto_chief_executive_9' => 'Chief Executive',
    'imagen_assets_images_team_h7_team_6_webp' => NAKAMA_THEME_URL . '/assets/images/team/h7-team-6.webp',
    'link_team_details_html_10' => 'team-details.html',
    'texto_nathaniel_ellington' => 'Nathaniel Ellington',
    'texto_chief_executive_10' => 'Chief Executive',
    'imagen_assets_images_team_h7_team_7_webp' => NAKAMA_THEME_URL . '/assets/images/team/h7-team-7.webp',
    'link_team_details_html_11' => 'team-details.html',
    'texto_nathan_price' => 'Nathan Price',
    'texto_chief_executive_11' => 'Chief Executive',
    'imagen_assets_images_team_h7_team_8_webp' => NAKAMA_THEME_URL . '/assets/images/team/h7-team-8.webp',
    'link_team_details_html_12' => 'team-details.html',
    'texto_caleb_turner' => 'Caleb Turner',
    'texto_chief_executive_12' => 'Chief Executive',
    'imagen_assets_images_team_h7_team_9_webp' => NAKAMA_THEME_URL . '/assets/images/team/h7-team-9.webp',
    'link_team_details_html_13' => 'team-details.html',
    'texto_benjamin_reed_2' => 'Benjamin Reed',
    'texto_chief_executive_13' => 'Chief Executive',
    'imagen_assets_images_team_h7_team_6_webp_2' => NAKAMA_THEME_URL . '/assets/images/team/h7-team-6.webp',
    'link_team_details_html_14' => 'team-details.html',
    'texto_nathaniel_ellington_2' => 'Nathaniel Ellington',
    'texto_chief_executive_14' => 'Chief Executive',
    'imagen_assets_images_team_h7_team_7_webp_2' => NAKAMA_THEME_URL . '/assets/images/team/h7-team-7.webp',
    'link_team_details_html_15' => 'team-details.html',
    'texto_nathan_price_2' => 'Nathan Price',
    'texto_chief_executive_15' => 'Chief Executive',
    'imagen_assets_images_team_h7_team_8_webp_2' => NAKAMA_THEME_URL . '/assets/images/team/h7-team-8.webp',
    'link_team_details_html_16' => 'team-details.html',
    'texto_caleb_turner_2' => 'Caleb Turner',
    'texto_chief_executive_16' => 'Chief Executive',
    'imagen_assets_images_team_h7_team_9_webp_2' => NAKAMA_THEME_URL . '/assets/images/team/h7-team-9.webp',
    'imagen_assets_images_shape_h7_testimonial_shape' => './assets/images/shape/h7-testimonial-shape-blur.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Team Section 3 -->
<section class="h7-team section-gap section-gap-x">
    <div class="container-fluid">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading style-2 style-7 sec-heading-centered">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i> <?php echo esc_html( $texto_meet_our_team ); ?></span>
            <h2 class="sec-title text-anim"><?php echo esc_html( $texto_the_people_empowering_business_level ); ?></h2>
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
                    <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html ); ?>"><?php echo esc_html( $texto_james_anderson ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $texto_chief_executive ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_team_h7_team_1_webp ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html_2 ); ?>"><?php echo esc_html( $texto_savannah_ngueen ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $texto_chief_executive_2 ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_team_h7_team_2_webp ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html_3 ); ?>"><?php echo esc_html( $texto_emma_richardson ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $texto_chief_executive_3 ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_team_h7_team_3_webp ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html_4 ); ?>"><?php echo esc_html( $texto_eade_marren ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $texto_chief_executive_4 ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_team_h7_team_4_webp ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html_5 ); ?>"><?php echo esc_html( $texto_james_anderson_2 ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $texto_chief_executive_5 ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_team_h7_team_1_webp_2 ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html_6 ); ?>"><?php echo esc_html( $texto_savannah_ngueen_2 ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $texto_chief_executive_6 ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_team_h7_team_2_webp_2 ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html_7 ); ?>"><?php echo esc_html( $texto_emma_richardson_2 ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $texto_chief_executive_7 ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_team_h7_team_3_webp_2 ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html_8 ); ?>"><?php echo esc_html( $texto_eade_marren_2 ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $texto_chief_executive_8 ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_team_h7_team_4_webp_2 ); ?>" alt="">
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
                    <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html_9 ); ?>"><?php echo esc_html( $texto_benjamin_reed ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $texto_chief_executive_9 ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_team_h7_team_6_webp ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html_10 ); ?>"><?php echo esc_html( $texto_nathaniel_ellington ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $texto_chief_executive_10 ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_team_h7_team_7_webp ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html_11 ); ?>"><?php echo esc_html( $texto_nathan_price ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $texto_chief_executive_11 ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_team_h7_team_8_webp ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html_12 ); ?>"><?php echo esc_html( $texto_caleb_turner ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $texto_chief_executive_12 ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_team_h7_team_9_webp ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html_13 ); ?>"><?php echo esc_html( $texto_benjamin_reed_2 ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $texto_chief_executive_13 ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_team_h7_team_6_webp_2 ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html_14 ); ?>"><?php echo esc_html( $texto_nathaniel_ellington_2 ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $texto_chief_executive_14 ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_team_h7_team_7_webp_2 ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html_15 ); ?>"><?php echo esc_html( $texto_nathan_price_2 ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $texto_chief_executive_15 ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_team_h7_team_8_webp_2 ); ?>" alt="">
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="team-item">
                    <div class="team-content">
                    <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html_16 ); ?>"><?php echo esc_html( $texto_caleb_turner_2 ); ?></a></h5>
                    <span class="designation"><?php echo esc_html( $texto_chief_executive_16 ); ?></span>
                    </div>
                    <div class="team-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_team_h7_team_9_webp_2 ); ?>" alt="">
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
    <img src="<?php echo esc_url( $imagen_assets_images_shape_h7_testimonial_shape ); ?>" alt="">
    </div>
</section>
<!-- end: Team Section 3 -->
