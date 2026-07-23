<?php
$content_fields = array(
    'texto_meet_our_team' => 'Meet Our Team',
    'texto_people_behind_bexon' => 'People Behind Bexon.',
    'link_team_html' => 'team.html',
    'texto_more_members' => 'More Members',
    'imagen_assets_images_team_team_1_big_webp' => NAKAMA_THEME_URL . '/assets/images/team/team-1-big.webp',
    'imagen_assets_images_team_team_1_big_webp_2' => NAKAMA_THEME_URL . '/assets/images/team/team-1-big.webp',
    'link_team_details_html' => 'team-details.html',
    'texto_eade_marren' => 'Eade Marren',
    'texto_chief_executive' => 'Chief Executive',
    'link_https_www_facebook_com' => 'https://www.facebook.com/',
    'link_https_www_instagram_com' => 'https://www.instagram.com/',
    'link_https_x_com' => 'https://x.com/',
    'link_https_www_linkedin_com' => 'https://www.linkedin.com/',
    'link_team_details_html_2' => 'team-details.html',
    'imagen_assets_images_team_team_1_big_webp_3' => NAKAMA_THEME_URL . '/assets/images/team/team-1-big.webp',
    'imagen_assets_images_team_team_2_big_webp' => NAKAMA_THEME_URL . '/assets/images/team/team-2-big.webp',
    'link_team_details_html_3' => 'team-details.html',
    'texto_savannah_ngueen' => 'Savannah Ngueen',
    'texto_operations_head' => 'Operations Head',
    'link_https_www_facebook_com_2' => 'https://www.facebook.com/',
    'link_https_www_instagram_com_2' => 'https://www.instagram.com/',
    'link_https_x_com_2' => 'https://x.com/',
    'link_https_www_linkedin_com_2' => 'https://www.linkedin.com/',
    'link_team_details_html_4' => 'team-details.html',
    'imagen_assets_images_team_team_2_big_webp_2' => NAKAMA_THEME_URL . '/assets/images/team/team-2-big.webp',
    'imagen_assets_images_team_team_3_big_webp' => NAKAMA_THEME_URL . '/assets/images/team/team-3-big.webp',
    'link_team_details_html_5' => 'team-details.html',
    'texto_kristin_watson' => 'Kristin Watson',
    'texto_marketing_lead' => 'Marketing Lead',
    'link_https_www_facebook_com_3' => 'https://www.facebook.com/',
    'link_https_www_instagram_com_3' => 'https://www.instagram.com/',
    'link_https_x_com_3' => 'https://x.com/',
    'link_https_www_linkedin_com_3' => 'https://www.linkedin.com/',
    'link_team_details_html_6' => 'team-details.html',
    'imagen_assets_images_team_team_3_big_webp_2' => NAKAMA_THEME_URL . '/assets/images/team/team-3-big.webp',
    'imagen_assets_images_team_team_4_big_webp' => NAKAMA_THEME_URL . '/assets/images/team/team-4-big.webp',
    'link_team_details_html_7' => 'team-details.html',
    'texto_darlene_robertson' => 'Darlene Robertson',
    'texto_business_director' => 'Business Director',
    'link_https_www_facebook_com_4' => 'https://www.facebook.com/',
    'link_https_www_instagram_com_4' => 'https://www.instagram.com/',
    'link_https_x_com_4' => 'https://x.com/',
    'link_https_www_linkedin_com_4' => 'https://www.linkedin.com/',
    'link_team_details_html_8' => 'team-details.html',
    'imagen_assets_images_team_team_4_big_webp_2' => NAKAMA_THEME_URL . '/assets/images/team/team-4-big.webp',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Team Section 2 -->
<section class="tj-team-section-2 section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading-wrap">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_meet_our_team ); ?></span>
            <div class="heading-wrap-content">
            <div class="sec-heading style-3">
                <h2 class="sec-title title-anim"><?php echo esc_html( $texto_people_behind_bexon ); ?></h2>
            </div>
            <div class="btn-wrap wow fadeInUp" data-wow-delay=".5s">
                <a class="tj-primary-btn" href="<?php echo esc_url( $link_team_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_more_members ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="team-wrapper">
            <div class="team-img-wrap wow fadeInUp" data-wow-delay=".5s">
            <div id="team-img" class="team-img">
                <img src="<?php echo esc_url( $imagen_assets_images_team_team_1_big_webp ); ?>" alt="Images">
            </div>
            </div>
            <div class="team-item-wrap">
            <div class="team-item active wow fadeInUp" data-wow-delay=".3s"
                data-src="<?php echo esc_url( $imagen_assets_images_team_team_1_big_webp_2 ); ?>">
                <div class="team-item-inner">
                <div class="team-content">
                    <h3 class="title"><a href="<?php echo esc_url( $link_team_details_html ); ?>"><?php echo esc_html( $texto_eade_marren ); ?></a></h3>
                    <span class="designation"><?php echo esc_html( $texto_chief_executive ); ?></span>
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
                <a class="team-link" href="<?php echo esc_url( $link_team_details_html_2 ); ?>"><i class="tji-arrow-right-long"></i></a>
                </div>
                <div class="team-img-wrap">
                <div class="team-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_team_team_1_big_webp_3 ); ?>" alt="Images">
                </div>
                </div>
            </div>
            <div class="team-item wow fadeInUp" data-wow-delay=".3s"
                data-src="<?php echo esc_url( $imagen_assets_images_team_team_2_big_webp ); ?>">
                <div class="team-item-inner">
                <div class="team-content">
                    <h3 class="title"><a href="<?php echo esc_url( $link_team_details_html_3 ); ?>"><?php echo esc_html( $texto_savannah_ngueen ); ?></a></h3>
                    <span class="designation"><?php echo esc_html( $texto_operations_head ); ?></span>
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
                <a class="team-link" href="<?php echo esc_url( $link_team_details_html_4 ); ?>"><i class="tji-arrow-right-long"></i></a>
                </div>
                <div class="team-img-wrap">
                <div class="team-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_team_team_2_big_webp_2 ); ?>" alt="Images">
                </div>
                </div>
            </div>
            <div class="team-item wow fadeInUp" data-wow-delay=".3s"
                data-src="<?php echo esc_url( $imagen_assets_images_team_team_3_big_webp ); ?>">
                <div class="team-item-inner">
                <div class="team-content">
                    <h3 class="title"><a href="<?php echo esc_url( $link_team_details_html_5 ); ?>"><?php echo esc_html( $texto_kristin_watson ); ?></a></h3>
                    <span class="designation"><?php echo esc_html( $texto_marketing_lead ); ?></span>
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
                <a class="team-link" href="<?php echo esc_url( $link_team_details_html_6 ); ?>"><i class="tji-arrow-right-long"></i></a>
                </div>
                <div class="team-img-wrap">
                <div class="team-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_team_team_3_big_webp_2 ); ?>" alt="Images">
                </div>
                </div>
            </div>
            <div class="team-item wow fadeInUp" data-wow-delay=".3s"
                data-src="<?php echo esc_url( $imagen_assets_images_team_team_4_big_webp ); ?>">
                <div class="team-item-inner">
                <div class="team-content">
                    <h3 class="title"><a href="<?php echo esc_url( $link_team_details_html_7 ); ?>"><?php echo esc_html( $texto_darlene_robertson ); ?></a></h3>
                    <span class="designation"><?php echo esc_html( $texto_business_director ); ?></span>
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
                <a class="team-link" href="<?php echo esc_url( $link_team_details_html_8 ); ?>"><i class="tji-arrow-right-long"></i></a>
                </div>
                <div class="team-img-wrap">
                <div class="team-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_team_team_4_big_webp_2 ); ?>" alt="Images">
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Team Section 2 -->
