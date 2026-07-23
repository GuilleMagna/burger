<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Team Section 5 -->
<section class="tj-team-section-2 section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading style-8 sec-heading-centered">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $burger_get( 'texto_meet_our_team', 'Meet Our Team' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_empowering_business_with_expertise', 'Empowering Business with Expertise.' ) ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="h9-team-wrapper">
            <div class="h9-team-item-wrap">
            <div class="team-item wow fadeInUp" data-wow-delay=".3s">
                <div class="team-content">
                <h3 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_eade_marren', 'Eade Marren' ) ); ?></a></h3>
                <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive', 'Chief Executive' ) ); ?></span>
                </div>
                <div class="team-img">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_1_webp', NAKAMA_THEME_URL . '/assets/images/team/team-1.webp' ) ); ?>" alt="Images">
                </div>
                <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_team_details_html_2', 'team-details.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_know_more', 'Know More' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            <div class="team-item wow fadeInUp" data-wow-delay=".3s">
                <div class="team-content">
                <h3 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_3', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_savannah_ngueen', 'Savannah Ngueen' ) ); ?></a></h3>
                <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_2', 'Chief Executive' ) ); ?></span>
                </div>
                <div class="team-img">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_2_webp', NAKAMA_THEME_URL . '/assets/images/team/team-2.webp' ) ); ?>" alt="Images">
                </div>
                <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_team_details_html_4', 'team-details.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_know_more_2', 'Know More' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            <div class="team-item wow fadeInUp" data-wow-delay=".3s">
                <div class="team-content">
                <h3 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_5', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_emma_richardson', 'Emma Richardson' ) ); ?></a></h3>
                <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_3', 'Chief Executive' ) ); ?></span>
                </div>
                <div class="team-img">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_3_webp', NAKAMA_THEME_URL . '/assets/images/team/team-3.webp' ) ); ?>" alt="Images">
                </div>
                <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_team_details_html_6', 'team-details.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_know_more_3', 'Know More' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            <div class="team-item wow fadeInUp" data-wow-delay=".3s">
                <div class="team-content">
                <h3 class="title"><a href="<?php echo esc_url( $burger_get( 'link_team_details_html_7', 'team-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_nathaniel_ellington', 'Nathaniel Ellington' ) ); ?></a></h3>
                <span class="designation"><?php echo esc_html( $burger_get( 'texto_chief_executive_4', 'Chief Executive' ) ); ?></span>
                </div>
                <div class="team-img">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_team_team_4_webp', NAKAMA_THEME_URL . '/assets/images/team/team-4.webp' ) ); ?>" alt="Images">
                </div>
                <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_team_details_html_8', 'team-details.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_know_more_4', 'Know More' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Team Section 5 -->
