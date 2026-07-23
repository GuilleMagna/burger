<?php
$content_fields = array(
    'texto_meet_our_team' => 'Meet Our Team',
    'texto_people_behind' => 'People Behind',
    'texto_bexon' => 'Bexon.',
    'imagen_assets_images_team_team_1_webp' => NAKAMA_THEME_URL . '/assets/images/team/team-1.webp',
    'link_https_www_facebook_com' => 'https://www.facebook.com/',
    'link_https_www_instagram_com' => 'https://www.instagram.com/',
    'link_https_x_com' => 'https://x.com/',
    'link_https_www_linkedin_com' => 'https://www.linkedin.com/',
    'link_team_details_html' => 'team-details.html',
    'texto_eade_marren' => 'Eade Marren',
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
    'texto_kristin_watson' => 'Kristin Watson',
    'texto_marketing_lead' => 'Marketing Lead',
    'imagen_assets_images_team_team_4_webp' => NAKAMA_THEME_URL . '/assets/images/team/team-4.webp',
    'link_https_www_facebook_com_4' => 'https://www.facebook.com/',
    'link_https_www_instagram_com_4' => 'https://www.instagram.com/',
    'link_https_x_com_4' => 'https://x.com/',
    'link_https_www_linkedin_com_4' => 'https://www.linkedin.com/',
    'link_team_details_html_4' => 'team-details.html',
    'texto_darlene_robertson' => 'Darlene Robertson',
    'texto_business_director' => 'Business Director',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Team Section -->
<section class="tj-team-section section-separator">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading text-center style-2">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $texto_meet_our_team ); ?></span>
            <h2 class="sec-title text-anim"><?php echo esc_html( $texto_people_behind ); ?> <span><?php echo esc_html( $texto_bexon ); ?></span></h2>
        </div>
        </div>
    </div>
    <div class="row leftSwipeWrap">
        <div class="col-lg-3 col-sm-6">
        <div class="team-item left-swipe">
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
            <h4 class="title"><a href="<?php echo esc_url( $link_team_details_html ); ?>"><?php echo esc_html( $texto_eade_marren ); ?></a></h4>
            <span class="designation"><?php echo esc_html( $texto_chief_executive ); ?></span>
            <a class="mail-at" href="mailto:info@bexon.com"><i class="tji-at"></i></a>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6">
        <div class="team-item left-swipe">
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
            <h4 class="title"><a href="<?php echo esc_url( $link_team_details_html_2 ); ?>"><?php echo esc_html( $texto_savannah_ngueen ); ?></a></h4>
            <span class="designation"><?php echo esc_html( $texto_operations_head ); ?></span>
            <a class="mail-at" href="mailto:info@bexon.com"><i class="tji-at"></i></a>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6">
        <div class="team-item left-swipe">
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
            <h4 class="title"><a href="<?php echo esc_url( $link_team_details_html_3 ); ?>"><?php echo esc_html( $texto_kristin_watson ); ?></a></h4>
            <span class="designation"><?php echo esc_html( $texto_marketing_lead ); ?></span>
            <a class="mail-at" href="mailto:info@bexon.com"><i class="tji-at"></i></a>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6">
        <div class="team-item left-swipe">
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
            <h4 class="title"><a href="<?php echo esc_url( $link_team_details_html_4 ); ?>"><?php echo esc_html( $texto_darlene_robertson ); ?></a></h4>
            <span class="designation"><?php echo esc_html( $texto_business_director ); ?></span>
            <a class="mail-at" href="mailto:info@bexon.com"><i class="tji-at"></i></a>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Team Section -->
