<?php
$content_fields = array(
    'texto_meet_our_team' => 'Meet Our Team',
    'texto_empowering_business_with_expertise' => 'Empowering Business with Expertise.',
    'link_team_details_html' => 'team-details.html',
    'texto_eade_marren' => 'Eade Marren',
    'texto_chief_executive' => 'Chief Executive',
    'imagen_assets_images_team_team_1_webp' => NAKAMA_THEME_URL . '/assets/images/team/team-1.webp',
    'link_team_details_html_2' => 'team-details.html',
    'texto_know_more' => 'Know More',
    'link_team_details_html_3' => 'team-details.html',
    'texto_savannah_ngueen' => 'Savannah Ngueen',
    'texto_chief_executive_2' => 'Chief Executive',
    'imagen_assets_images_team_team_2_webp' => NAKAMA_THEME_URL . '/assets/images/team/team-2.webp',
    'link_team_details_html_4' => 'team-details.html',
    'texto_know_more_2' => 'Know More',
    'link_team_details_html_5' => 'team-details.html',
    'texto_emma_richardson' => 'Emma Richardson',
    'texto_chief_executive_3' => 'Chief Executive',
    'imagen_assets_images_team_team_3_webp' => NAKAMA_THEME_URL . '/assets/images/team/team-3.webp',
    'link_team_details_html_6' => 'team-details.html',
    'texto_know_more_3' => 'Know More',
    'link_team_details_html_7' => 'team-details.html',
    'texto_nathaniel_ellington' => 'Nathaniel Ellington',
    'texto_chief_executive_4' => 'Chief Executive',
    'imagen_assets_images_team_team_4_webp' => NAKAMA_THEME_URL . '/assets/images/team/team-4.webp',
    'link_team_details_html_8' => 'team-details.html',
    'texto_know_more_4' => 'Know More',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Team Section 5 -->
<section class="tj-team-section-2 section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading style-8 sec-heading-centered">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $texto_meet_our_team ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $texto_empowering_business_with_expertise ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="h9-team-wrapper">
            <div class="h9-team-item-wrap">
            <div class="team-item wow fadeInUp" data-wow-delay=".3s">
                <div class="team-content">
                <h3 class="title"><a href="<?php echo esc_url( $link_team_details_html ); ?>"><?php echo esc_html( $texto_eade_marren ); ?></a></h3>
                <span class="designation"><?php echo esc_html( $texto_chief_executive ); ?></span>
                </div>
                <div class="team-img">
                <img src="<?php echo esc_url( $imagen_assets_images_team_team_1_webp ); ?>" alt="Images">
                </div>
                <a class="text-btn" href="<?php echo esc_url( $link_team_details_html_2 ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_know_more ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            <div class="team-item wow fadeInUp" data-wow-delay=".3s">
                <div class="team-content">
                <h3 class="title"><a href="<?php echo esc_url( $link_team_details_html_3 ); ?>"><?php echo esc_html( $texto_savannah_ngueen ); ?></a></h3>
                <span class="designation"><?php echo esc_html( $texto_chief_executive_2 ); ?></span>
                </div>
                <div class="team-img">
                <img src="<?php echo esc_url( $imagen_assets_images_team_team_2_webp ); ?>" alt="Images">
                </div>
                <a class="text-btn" href="<?php echo esc_url( $link_team_details_html_4 ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_know_more_2 ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            <div class="team-item wow fadeInUp" data-wow-delay=".3s">
                <div class="team-content">
                <h3 class="title"><a href="<?php echo esc_url( $link_team_details_html_5 ); ?>"><?php echo esc_html( $texto_emma_richardson ); ?></a></h3>
                <span class="designation"><?php echo esc_html( $texto_chief_executive_3 ); ?></span>
                </div>
                <div class="team-img">
                <img src="<?php echo esc_url( $imagen_assets_images_team_team_3_webp ); ?>" alt="Images">
                </div>
                <a class="text-btn" href="<?php echo esc_url( $link_team_details_html_6 ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_know_more_3 ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            <div class="team-item wow fadeInUp" data-wow-delay=".3s">
                <div class="team-content">
                <h3 class="title"><a href="<?php echo esc_url( $link_team_details_html_7 ); ?>"><?php echo esc_html( $texto_nathaniel_ellington ); ?></a></h3>
                <span class="designation"><?php echo esc_html( $texto_chief_executive_4 ); ?></span>
                </div>
                <div class="team-img">
                <img src="<?php echo esc_url( $imagen_assets_images_team_team_4_webp ); ?>" alt="Images">
                </div>
                <a class="text-btn" href="<?php echo esc_url( $link_team_details_html_8 ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_know_more_4 ); ?></span></span>
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
