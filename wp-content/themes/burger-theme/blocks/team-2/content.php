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

<!-- start: Team Section 2 -->
<section class="tj-team-section-2 section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading-wrap">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_meet_our_team', 'Meet Our Team' ) ); ?></span>
            <div class="heading-wrap-content">
            <div class="sec-heading style-3">
                <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_people_behind_bexon', 'People Behind Bexon.' ) ); ?></h2>
            </div>
            <div class="btn-wrap wow fadeInUp" data-wow-delay=".5s">
                <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_team_html', 'team.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_more_members', 'More Members' ) ); ?></span></span>
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
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_1_big_webp', NAKAMA_THEME_URL . '/assets/images/team/team-1-big.webp' ) ); ?>" alt="Images">
            </div>
            </div>
            <div class="team-item-wrap">
            <div class="team-item active wow fadeInUp" data-wow-delay=".3s"
                data-src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_1_big_webp_2', NAKAMA_THEME_URL . '/assets/images/team/team-1-big.webp' ) ); ?>">
                <div class="team-item-inner">
                <div class="team-content">
                    <h3 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_eade_marren', 'Eade Marren' ) ); ?></a></h3>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive', 'Chief Executive' ) ); ?></span>
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
                <a class="team-link" href="<?php echo esc_url( $burger_get( 'link_team_details_html_2', 'team-details.html' ) ); ?>"><i class="tji-arrow-right-long"></i></a>
                </div>
                <div class="team-img-wrap">
                <div class="team-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_1_big_webp_3', NAKAMA_THEME_URL . '/assets/images/team/team-1-big.webp' ) ); ?>" alt="Images">
                </div>
                </div>
            </div>
            <div class="team-item wow fadeInUp" data-wow-delay=".3s"
                data-src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_2_big_webp', NAKAMA_THEME_URL . '/assets/images/team/team-2-big.webp' ) ); ?>">
                <div class="team-item-inner">
                <div class="team-content">
                    <h3 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_3', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_savannah_ngueen', 'Savannah Ngueen' ) ); ?></a></h3>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_operations_head', 'Operations Head' ) ); ?></span>
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
                <a class="team-link" href="<?php echo esc_url( $burger_get( 'link_team_details_html_4', 'team-details.html' ) ); ?>"><i class="tji-arrow-right-long"></i></a>
                </div>
                <div class="team-img-wrap">
                <div class="team-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_2_big_webp_2', NAKAMA_THEME_URL . '/assets/images/team/team-2-big.webp' ) ); ?>" alt="Images">
                </div>
                </div>
            </div>
            <div class="team-item wow fadeInUp" data-wow-delay=".3s"
                data-src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_3_big_webp', NAKAMA_THEME_URL . '/assets/images/team/team-3-big.webp' ) ); ?>">
                <div class="team-item-inner">
                <div class="team-content">
                    <h3 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_5', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_kristin_watson', 'Kristin Watson' ) ); ?></a></h3>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_marketing_lead', 'Marketing Lead' ) ); ?></span>
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
                <a class="team-link" href="<?php echo esc_url( $burger_get( 'link_team_details_html_6', 'team-details.html' ) ); ?>"><i class="tji-arrow-right-long"></i></a>
                </div>
                <div class="team-img-wrap">
                <div class="team-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_3_big_webp_2', NAKAMA_THEME_URL . '/assets/images/team/team-3-big.webp' ) ); ?>" alt="Images">
                </div>
                </div>
            </div>
            <div class="team-item wow fadeInUp" data-wow-delay=".3s"
                data-src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_4_big_webp', NAKAMA_THEME_URL . '/assets/images/team/team-4-big.webp' ) ); ?>">
                <div class="team-item-inner">
                <div class="team-content">
                    <h3 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_7', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_darlene_robertson', 'Darlene Robertson' ) ); ?></a></h3>
                    <span class="designation"><?php echo esc_html( $burger_get( 'texto_business_director', 'Business Director' ) ); ?></span>
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
                <a class="team-link" href="<?php echo esc_url( $burger_get( 'link_team_details_html_8', 'team-details.html' ) ); ?>"><i class="tji-arrow-right-long"></i></a>
                </div>
                <div class="team-img-wrap">
                <div class="team-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_4_big_webp_2', NAKAMA_THEME_URL . '/assets/images/team/team-4-big.webp' ) ); ?>" alt="Images">
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

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
