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

<!-- start: Team Section 6 -->
<section class="tj-team-section">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading text-center">
            <span class="sub-title wow fadeInUp" data-wow-delay=".1s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_meet_our_team', 'Meet Our Team' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_people_behind', 'People Behind' ) ); ?> <span><?php echo esc_html( $burger_get( 'texto_bexon', 'Bexon.' ) ); ?></span></h2>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6">
        <div class="team-item wow fadeInUp" data-wow-delay=".1s">
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
        <div class="team-item wow fadeInUp" data-wow-delay=".3s">
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
        <div class="team-item wow fadeInUp" data-wow-delay=".5s">
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
        <div class="team-item wow fadeInUp" data-wow-delay=".7s">
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
        <div class="col-lg-3 col-sm-6">
        <div class="team-item wow fadeInUp" data-wow-delay=".1s">
            <div class="team-img">
            <div class="team-img-inner">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_5_webp', NAKAMA_THEME_URL . '/assets/images/team/team-5.webp' ) ); ?>" alt="">
            </div>
            <div class="social-links">
                <ul>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_facebook_com_5', 'https://www.facebook.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_instagram_com_5', 'https://www.instagram.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_x_com_5', 'https://x.com/' ) ); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_linkedin_com_5', 'https://www.linkedin.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-linkedin-in"></i></a>
                </li>
                </ul>
            </div>
            </div>
            <div class="team-content">
            <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_5', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_darlene_robertson_2', 'Darlene Robertson' ) ); ?></a></h4>
            <span class="designation"><?php echo esc_html( $burger_get( 'texto_business_director_2', 'Business Director' ) ); ?></span>
            <a class="mail-at" href="mailto:info@bexon.com"><i class="tji-at"></i></a>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6">
        <div class="team-item wow fadeInUp" data-wow-delay=".3s">
            <div class="team-img">
            <div class="team-img-inner">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_6_webp', NAKAMA_THEME_URL . '/assets/images/team/team-6.webp' ) ); ?>" alt="">
            </div>
            <div class="social-links">
                <ul>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_facebook_com_6', 'https://www.facebook.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_instagram_com_6', 'https://www.instagram.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_x_com_6', 'https://x.com/' ) ); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_linkedin_com_6', 'https://www.linkedin.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-linkedin-in"></i></a>
                </li>
                </ul>
            </div>
            </div>
            <div class="team-content">
            <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_6', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_kristin_watson_2', 'Kristin Watson' ) ); ?></a></h4>
            <span class="designation"><?php echo esc_html( $burger_get( 'texto_marketing_lead_2', 'Marketing Lead' ) ); ?></span>
            <a class="mail-at" href="mailto:info@bexon.com"><i class="tji-at"></i></a>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6">
        <div class="team-item wow fadeInUp" data-wow-delay=".5s">
            <div class="team-img">
            <div class="team-img-inner">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_7_webp', NAKAMA_THEME_URL . '/assets/images/team/team-7.webp' ) ); ?>" alt="">
            </div>
            <div class="social-links">
                <ul>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_facebook_com_7', 'https://www.facebook.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_instagram_com_7', 'https://www.instagram.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_x_com_7', 'https://x.com/' ) ); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_linkedin_com_7', 'https://www.linkedin.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-linkedin-in"></i></a>
                </li>
                </ul>
            </div>
            </div>
            <div class="team-content">
            <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_7', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_savannah_ngueen_2', 'Savannah Ngueen' ) ); ?></a></h4>
            <span class="designation"><?php echo esc_html( $burger_get( 'texto_operations_head_2', 'Operations Head' ) ); ?></span>
            <a class="mail-at" href="mailto:info@bexon.com"><i class="tji-at"></i></a>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6">
        <div class="team-item wow fadeInUp" data-wow-delay=".7s">
            <div class="team-img">
            <div class="team-img-inner">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_8_webp', NAKAMA_THEME_URL . '/assets/images/team/team-8.webp' ) ); ?>" alt="">
            </div>
            <div class="social-links">
                <ul>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_facebook_com_8', 'https://www.facebook.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_instagram_com_8', 'https://www.instagram.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_x_com_8', 'https://x.com/' ) ); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_linkedin_com_8', 'https://www.linkedin.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-linkedin-in"></i></a>
                </li>
                </ul>
            </div>
            </div>
            <div class="team-content">
            <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_8', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_eade_marren_2', 'Eade Marren' ) ); ?></a></h4>
            <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_2', 'Chief Executive' ) ); ?></span>
            <a class="mail-at" href="mailto:info@bexon.com"><i class="tji-at"></i></a>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Team Section 6 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
