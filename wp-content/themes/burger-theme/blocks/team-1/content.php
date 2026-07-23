<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Team Section -->
<section class="tj-team-section section-separator">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading text-center style-2">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $burger_get( 'texto_meet_our_team', 'Meet Our Team' ) ); ?></span>
            <h2 class="sec-title text-anim"><?php echo esc_html( $burger_get( 'texto_people_behind', 'People Behind' ) ); ?> <span><?php echo esc_html( $burger_get( 'texto_bexon', 'Bexon.' ) ); ?></span></h2>
        </div>
        </div>
    </div>
    <div class="row leftSwipeWrap">
        <div class="col-lg-3 col-sm-6">
        <div class="team-item left-swipe">
            <div class="team-img">
            <div class="team-img-inner">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_1_webp', NAKAMA_THEME_URL . '/assets/images/team/team-1.webp' ) ); ?>" alt="">
            </div>
            <div class="social-links">
                <ul>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_facebook_com', 'https://www.facebook.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_instagram_com', 'https://www.instagram.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_x_com', 'https://x.com/' ) ); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_linkedin_com', 'https://www.linkedin.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-linkedin-in"></i></a>
                </li>
                </ul>
            </div>
            </div>
            <div class="team-content">
            <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_eade_marren', 'Eade Marren' ) ); ?></a></h4>
            <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive', 'Chief Executive' ) ); ?></span>
            <a class="mail-at" href="mailto:info@bexon.com"><i class="tji-at"></i></a>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6">
        <div class="team-item left-swipe">
            <div class="team-img">
            <div class="team-img-inner">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_2_webp', NAKAMA_THEME_URL . '/assets/images/team/team-2.webp' ) ); ?>" alt="">
            </div>
            <div class="social-links">
                <ul>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_facebook_com_2', 'https://www.facebook.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_instagram_com_2', 'https://www.instagram.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_x_com_2', 'https://x.com/' ) ); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_linkedin_com_2', 'https://www.linkedin.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-linkedin-in"></i></a>
                </li>
                </ul>
            </div>
            </div>
            <div class="team-content">
            <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_2', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_savannah_ngueen', 'Savannah Ngueen' ) ); ?></a></h4>
            <span class="designation"><?php echo esc_html( $burger_get( 'texto_operations_head', 'Operations Head' ) ); ?></span>
            <a class="mail-at" href="mailto:info@bexon.com"><i class="tji-at"></i></a>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6">
        <div class="team-item left-swipe">
            <div class="team-img">
            <div class="team-img-inner">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_3_webp', NAKAMA_THEME_URL . '/assets/images/team/team-3.webp' ) ); ?>" alt="">
            </div>
            <div class="social-links">
                <ul>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_facebook_com_3', 'https://www.facebook.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_instagram_com_3', 'https://www.instagram.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_x_com_3', 'https://x.com/' ) ); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_linkedin_com_3', 'https://www.linkedin.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-linkedin-in"></i></a>
                </li>
                </ul>
            </div>
            </div>
            <div class="team-content">
            <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_3', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_kristin_watson', 'Kristin Watson' ) ); ?></a></h4>
            <span class="designation"><?php echo esc_html( $burger_get( 'texto_marketing_lead', 'Marketing Lead' ) ); ?></span>
            <a class="mail-at" href="mailto:info@bexon.com"><i class="tji-at"></i></a>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6">
        <div class="team-item left-swipe">
            <div class="team-img">
            <div class="team-img-inner">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_4_webp', NAKAMA_THEME_URL . '/assets/images/team/team-4.webp' ) ); ?>" alt="">
            </div>
            <div class="social-links">
                <ul>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_facebook_com_4', 'https://www.facebook.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_instagram_com_4', 'https://www.instagram.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_x_com_4', 'https://x.com/' ) ); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_linkedin_com_4', 'https://www.linkedin.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-linkedin-in"></i></a>
                </li>
                </ul>
            </div>
            </div>
            <div class="team-content">
            <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_4', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_darlene_robertson', 'Darlene Robertson' ) ); ?></a></h4>
            <span class="designation"><?php echo esc_html( $burger_get( 'texto_business_director', 'Business Director' ) ); ?></span>
            <a class="mail-at" href="mailto:info@bexon.com"><i class="tji-at"></i></a>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Team Section -->
