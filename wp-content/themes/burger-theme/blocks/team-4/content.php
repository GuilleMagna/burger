<?php
$content_fields = array(
    'texto_meet_our_team' => 'MEET OUR TEAM',
    'texto_meet_the_mind_behind_our_success' => 'Meet the Mind Behind Our Success.',
    'imagen_assets_images_team_team_1_webp' => NAKAMA_THEME_URL . '/assets/images/team/team-1.webp',
    'link_https_www_facebook_com' => 'https://www.facebook.com/',
    'link_https_www_instagram_com' => 'https://www.instagram.com/',
    'link_https_x_com' => 'https://x.com/',
    'link_https_www_linkedin_com' => 'https://www.linkedin.com/',
    'link_team_details_html' => 'team-details.html',
    'texto_james_anderson' => 'James Anderson',
    'texto_chief_executive' => 'Chief Executive',
    'imagen_assets_images_team_team_2_webp' => NAKAMA_THEME_URL . '/assets/images/team/team-2.webp',
    'link_https_www_facebook_com_2' => 'https://www.facebook.com/',
    'link_https_www_instagram_com_2' => 'https://www.instagram.com/',
    'link_https_x_com_2' => 'https://x.com/',
    'link_https_www_linkedin_com_2' => 'https://www.linkedin.com/',
    'link_team_details_html_2' => 'team-details.html',
    'texto_savannah_ngueen' => 'Savannah Ngueen',
    'texto_operations_head' => 'Operations Head',
    'imagen_assets_images_team_team_3_webp' => NAKAMA_THEME_URL . '/assets/images/team/team-3.webp',
    'link_https_www_facebook_com_3' => 'https://www.facebook.com/',
    'link_https_www_instagram_com_3' => 'https://www.instagram.com/',
    'link_https_x_com_3' => 'https://x.com/',
    'link_https_www_linkedin_com_3' => 'https://www.linkedin.com/',
    'link_team_details_html_3' => 'team-details.html',
    'texto_emma_richardson' => 'Emma Richardson',
    'texto_marketing_lead' => 'Marketing Lead',
    'imagen_assets_images_team_team_4_webp' => NAKAMA_THEME_URL . '/assets/images/team/team-4.webp',
    'link_https_www_facebook_com_4' => 'https://www.facebook.com/',
    'link_https_www_instagram_com_4' => 'https://www.instagram.com/',
    'link_https_x_com_4' => 'https://x.com/',
    'link_https_www_linkedin_com_4' => 'https://www.linkedin.com/',
    'link_team_details_html_4' => 'team-details.html',
    'texto_nathan_price' => 'Nathan Price',
    'texto_business_director' => 'Business Director',
    'imagen_assets_images_team_team_5_webp' => NAKAMA_THEME_URL . '/assets/images/team/team-5.webp',
    'link_https_www_facebook_com_5' => 'https://www.facebook.com/',
    'link_https_www_instagram_com_5' => 'https://www.instagram.com/',
    'link_https_x_com_5' => 'https://x.com/',
    'link_https_www_linkedin_com_5' => 'https://www.linkedin.com/',
    'link_team_details_html_5' => 'team-details.html',
    'texto_nathaniel_ellington' => 'Nathaniel Ellington',
    'texto_business_director_2' => 'Business Director',
    'imagen_assets_images_team_team_7_webp' => NAKAMA_THEME_URL . '/assets/images/team/team-7.webp',
    'link_https_www_facebook_com_6' => 'https://www.facebook.com/',
    'link_https_www_instagram_com_6' => 'https://www.instagram.com/',
    'link_https_x_com_6' => 'https://x.com/',
    'link_https_www_linkedin_com_6' => 'https://www.linkedin.com/',
    'link_team_details_html_6' => 'team-details.html',
    'texto_eade_marren' => 'Eade Marren',
    'texto_business_director_3' => 'Business Director',
    'imagen_assets_images_icons_more_rounded_text_svg' => 'assets/images/icons/more-rounded-text.svg',
    'link_team_html' => 'team.html',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Team Section 4 -->
<section class="h8-team section-gap section-gap-x">
    <div class="container">
    <div class="row  h8-team-wrapper  gap-0">
        <div class="col-lg-3 col-sm-6 ">
        <div class="sec-heading style-3">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $texto_meet_our_team ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $texto_meet_the_mind_behind_our_success ); ?></h2>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6  h8-team-item-wrapper">
        <div class="team-item wow fadeInRightBig" data-wow-delay=".2s">
            <div class="team-img">
            <div class="team-img-inner">
                <img src="<?php echo esc_url( $imagen_assets_images_team_team_1_webp ); ?>" alt="">
            </div>
            <div class="social-links">
                <ul>
                <li><a href="<?php echo esc_url( $link_https_www_facebook_com ); ?>" target="_blank"><i
                        class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $link_https_www_instagram_com ); ?>" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $link_https_x_com ); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="<?php echo esc_url( $link_https_www_linkedin_com ); ?>" target="_blank"><i
                        class="fa-brands fa-linkedin-in"></i></a>
                </li>
                </ul>
            </div>
            </div>
            <div class="team-content">
            <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html ); ?>"><?php echo esc_html( $texto_james_anderson ); ?></a></h5>
            <span class="designation"><?php echo esc_html( $texto_chief_executive ); ?></span>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6  h8-team-item-wrapper">
        <div class="team-item wow fadeInRightBig" data-wow-delay=".3s">
            <div class="team-img">
            <div class="team-img-inner">
                <img src="<?php echo esc_url( $imagen_assets_images_team_team_2_webp ); ?>" alt="">
            </div>
            <div class="social-links">
                <ul>
                <li><a href="<?php echo esc_url( $link_https_www_facebook_com_2 ); ?>" target="_blank"><i
                        class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $link_https_www_instagram_com_2 ); ?>" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $link_https_x_com_2 ); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="<?php echo esc_url( $link_https_www_linkedin_com_2 ); ?>" target="_blank"><i
                        class="fa-brands fa-linkedin-in"></i></a>
                </li>
                </ul>
            </div>
            </div>
            <div class="team-content">
            <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html_2 ); ?>"><?php echo esc_html( $texto_savannah_ngueen ); ?></a></h5>
            <span class="designation"><?php echo esc_html( $texto_operations_head ); ?></span>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6  h8-team-item-wrapper">
        <div class="team-item wow fadeInRightBig" data-wow-delay=".4s">
            <div class="team-img">
            <div class="team-img-inner">
                <img src="<?php echo esc_url( $imagen_assets_images_team_team_3_webp ); ?>" alt="">
            </div>
            <div class="social-links">
                <ul>
                <li><a href="<?php echo esc_url( $link_https_www_facebook_com_3 ); ?>" target="_blank"><i
                        class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $link_https_www_instagram_com_3 ); ?>" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $link_https_x_com_3 ); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="<?php echo esc_url( $link_https_www_linkedin_com_3 ); ?>" target="_blank"><i
                        class="fa-brands fa-linkedin-in"></i></a>
                </li>
                </ul>
            </div>
            </div>
            <div class="team-content">
            <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html_3 ); ?>"><?php echo esc_html( $texto_emma_richardson ); ?></a></h5>
            <span class="designation"><?php echo esc_html( $texto_marketing_lead ); ?></span>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6  h8-team-item-wrapper">
        <div class="team-item wow fadeInRightBig" data-wow-delay=".5s">
            <div class="team-img">
            <div class="team-img-inner">
                <img src="<?php echo esc_url( $imagen_assets_images_team_team_4_webp ); ?>" alt="">
            </div>
            <div class="social-links">
                <ul>
                <li><a href="<?php echo esc_url( $link_https_www_facebook_com_4 ); ?>" target="_blank"><i
                        class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $link_https_www_instagram_com_4 ); ?>" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $link_https_x_com_4 ); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="<?php echo esc_url( $link_https_www_linkedin_com_4 ); ?>" target="_blank"><i
                        class="fa-brands fa-linkedin-in"></i></a>
                </li>
                </ul>
            </div>
            </div>
            <div class="team-content">
            <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html_4 ); ?>"><?php echo esc_html( $texto_nathan_price ); ?></a></h5>
            <span class="designation"><?php echo esc_html( $texto_business_director ); ?></span>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6  h8-team-item-wrapper">
        <div class="team-item wow fadeInRightBig" data-wow-delay=".6s">
            <div class="team-img">
            <div class="team-img-inner">
                <img src="<?php echo esc_url( $imagen_assets_images_team_team_5_webp ); ?>" alt="">
            </div>
            <div class="social-links">
                <ul>
                <li><a href="<?php echo esc_url( $link_https_www_facebook_com_5 ); ?>" target="_blank"><i
                        class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $link_https_www_instagram_com_5 ); ?>" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $link_https_x_com_5 ); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="<?php echo esc_url( $link_https_www_linkedin_com_5 ); ?>" target="_blank"><i
                        class="fa-brands fa-linkedin-in"></i></a>
                </li>
                </ul>
            </div>
            </div>
            <div class="team-content">
            <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html_5 ); ?>"><?php echo esc_html( $texto_nathaniel_ellington ); ?></a></h5>
            <span class="designation"><?php echo esc_html( $texto_business_director_2 ); ?></span>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6  h8-team-item-wrapper">
        <div class="team-item wow fadeInRightBig" data-wow-delay=".7s">
            <div class="team-img">
            <div class="team-img-inner">
                <img src="<?php echo esc_url( $imagen_assets_images_team_team_7_webp ); ?>" alt="">
            </div>
            <div class="social-links">
                <ul>
                <li><a href="<?php echo esc_url( $link_https_www_facebook_com_6 ); ?>" target="_blank"><i
                        class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $link_https_www_instagram_com_6 ); ?>" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $link_https_x_com_6 ); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="<?php echo esc_url( $link_https_www_linkedin_com_6 ); ?>" target="_blank"><i
                        class="fa-brands fa-linkedin-in"></i></a>
                </li>
                </ul>
            </div>
            </div>
            <div class="team-content">
            <h5 class="title"><a href="<?php echo esc_url( $link_team_details_html_6 ); ?>"><?php echo esc_html( $texto_eade_marren ); ?></a></h5>
            <span class="designation"><?php echo esc_html( $texto_business_director_3 ); ?></span>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 ">
        <div class="h8-team-action wow fadeInRightBig" data-wow-delay=".8s">
            <div class="circle-text-wrap">
            <span class="circle-text" data-bg-image="<?php echo esc_url( $imagen_assets_images_icons_more_rounded_text_svg ); ?>"></span>
            <a class="circle-icon" href="<?php echo esc_url( $link_team_html ); ?>"><i class="tji-arrow-right-long"></i></a>
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
<!-- end: Team Section 4 -->
