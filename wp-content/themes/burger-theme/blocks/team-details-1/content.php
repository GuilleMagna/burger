<?php
$content_fields = array(
    'imagen_assets_images_team_team_1_big_webp' => NAKAMA_THEME_URL . '/assets/images/team/team-1-big.webp',
    'texto_hello_i_am_eade_marren' => 'Hello, I am Eade Marren',
    'texto_chief_executive' => 'Chief Executive',
    'texto_our_mission_is_to_empowers_businesses' => 'Our mission is to empowers businesses sizes thrive businesses ev changing marketplace We are committed to the delivering exceptional value through strategic inset innovative approaches. Our consulting of our missing empower.',
    'texto_email_address' => 'Email address',
    'texto_eade_marren_bexon_com' => 'eade.marren@bexon.com',
    'texto_phone_number' => 'Phone number',
    'link_https_www_facebook_com' => 'https://www.facebook.com/',
    'link_https_www_instagram_com' => 'https://www.instagram.com/',
    'link_https_x_com' => 'https://x.com/',
    'link_https_www_linkedin_com' => 'https://www.linkedin.com/',
    'texto_work_experience' => 'Work experience',
    'texto_our_mission_is_to_empowers_businesses_2' => 'Our mission is to empowers businesses size to thrivie in ses ever changing marketplace We are committed to the delivering exceptionals the value thro strategic ins innovative approaches. Our consulting of our missing empowers businesses of all sizes Committed to the delivering exceptional in the values',
    'texto_our_mission_is_to_empowers_businesses_3' => 'Our mission is to empowers businesses size to thrivie in ses ever changing marketplace We are committed to the delivering exceptionals the value thro strategic ins innovative approaches. Our consulting of our missing empowers',
    'texto_we_believe_that_the_human_essential_st' => 'We believe that the human essential start any successful project.',
    'texto_we_believe_that_the_human_essential_st_2' => 'We believe that the human essential start any successful project.',
    'texto_we_believe_that_the_human_essential_st_3' => 'We believe that the human essential start any successful project.',
    'texto_we_believe_that_the_human_essential_st_4' => 'We believe that the human essential start any successful project.',
    'texto_professional_skills' => 'Professional skills',
    'texto_our_mission_is_to_empowers_businesses_4' => 'Our mission is to empowers businesses size to thrivie in ses ever changing marketplace We are committed to the delivering exceptionals the value thro strategic ins innovative approaches. Our consulting of our missing empowers.',
    'texto_business_consultants' => 'Business Consultants',
    'texto_client_communication' => 'Client Communication',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Team Details Section -->
<section class="team-details slidebar-stickiy-container">

    <div class="container">
    <div class="row justify-content-center">
        <!--  left -->
        <div class="col-12 col-md-8 col-lg-5">
        <div class="team-details__img slidebar-stickiy wow fadeInUp" data-wow-delay=".1s">
            <img src="<?php echo esc_url( $imagen_assets_images_team_team_1_big_webp ); ?>" alt="">
        </div>
        </div>
        <!-- right -->
        <div class="col-12 col-lg-7 ">
        <div class="team-details__content">
            <h2 class="team-details__name title-anim"><?php echo esc_html( $texto_hello_i_am_eade_marren ); ?></h2>
            <span class="team-details__desig wow fadeInUp" data-wow-delay=".1s"><?php echo esc_html( $texto_chief_executive ); ?></span>
            <p class="wow fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post( $texto_our_mission_is_to_empowers_businesses ); ?></p>
            <div class="team-details__contact-info wow fadeInUp" data-wow-delay=".5s">
            <ul>
                <li>
                <span><?php echo esc_html( $texto_email_address ); ?></span>
                <a href="mailto:eade.marren@bexon.com"><?php echo esc_html( $texto_eade_marren_bexon_com ); ?></a>
                </li>
                <li>
                <span><?php echo esc_html( $texto_phone_number ); ?></span>
                <a href="tel:10095447818">+1 (009) 544-7818</a>
                </li>
            </ul>
            </div>
            <div class="social-links wow fadeInUp" data-wow-delay=".5s">
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
            <div class="team-details__experience">
            <h4 class="team-details__subtitle wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $texto_work_experience ); ?></h4>
            <p class="wow fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post( $texto_our_mission_is_to_empowers_businesses_2 ); ?></p>
            <p class="wow fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post( $texto_our_mission_is_to_empowers_businesses_3 ); ?></p>
            <div class="team-details__experience__list wow fadeInUp" data-wow-delay=".3s">
                <ul>
                <li><i class="tji-check"></i>
                    <p><?php echo esc_html( $texto_we_believe_that_the_human_essential_st ); ?></p>
                </li>
                <li><i class="tji-check"></i>
                    <p><?php echo esc_html( $texto_we_believe_that_the_human_essential_st_2 ); ?></p>
                </li>
                <li><i class="tji-check"></i>
                    <p><?php echo esc_html( $texto_we_believe_that_the_human_essential_st_3 ); ?></p>
                </li>
                <li><i class="tji-check"></i>
                    <p><?php echo esc_html( $texto_we_believe_that_the_human_essential_st_4 ); ?></p>
                </li>
                </ul>
            </div>
            </div>
            <div class="team-details__skills">
            <h4 class="team-details__subtitle wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $texto_professional_skills ); ?></h4>
            <p class="wow fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post( $texto_our_mission_is_to_empowers_businesses_4 ); ?></p>
            <ul class="tj-progress-list wow fadeInUp" data-wow-delay=".3s">
                <li>
                <h6 class="tj-progress-title"><?php echo esc_html( $texto_business_consultants ); ?></h6>
                <div class="tj-progress">
                    <span class="tj-progress-percent">82%</span>
                    <div class="tj-progress-bar" data-percent="82">
                    </div>
                </div>
                </li>
                <li>
                <h6 class="tj-progress-title"><?php echo esc_html( $texto_client_communication ); ?></h6>
                <div class="tj-progress">
                    <span class="tj-progress-percent">90%</span>
                    <div class="tj-progress-bar" data-percent="90">
                    </div>
                </div>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Team Details Section -->
