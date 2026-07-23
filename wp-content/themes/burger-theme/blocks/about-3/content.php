<?php
$content_fields = array(
    'imagen_assets_images_about_about_5_webp' => NAKAMA_THEME_URL . '/assets/images/about/about-5.webp',
    'texto_business_progress' => 'Business Progress',
    'texto_revenue' => 'Revenue',
    'texto_satisfaction' => 'Satisfaction',
    'texto_get_to_know_us' => 'Get to Know Us',
    'texto_driving_innovation_and_excellence_for' => 'Driving Innovation and Excellence for Sustainable Corporate Success Worldwide.',
    'texto_our_mission' => 'Our Mission',
    'texto_our_mission_is_empower_businesses_thro' => 'our mission is empower businesses through innovate best solution, exceptional service.',
    'texto_innovation_excellence' => 'Innovation & Excellence',
    'texto_exceptional_customer' => 'Exceptional Customer',
    'texto_business_growth' => 'Business Growth',
    'texto_our_vision' => 'Our Vision',
    'texto_our_vision_is_to_become_a_global_leade' => 'Our vision is to become a global leader in providing transformative business solutions.',
    'texto_global_leadership' => 'Global Leadership',
    'texto_transformative_impact' => 'Transformative Impact',
    'texto_sustainable_success' => 'Sustainable Success',
    'link_about_html' => 'about.html',
    'texto_learn_more_about_us' => 'Learn More About Us',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: About Section 3 -->
<section class="tj-about-section-2 section-gap section-gap-x ">
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 order-lg-1 order-2">
        <div class="about-img-area style-2 wow fadeInLeft" data-wow-delay=".3s">
            <div class="about-img overflow-hidden">
            <img data-speed=".8" src="<?php echo esc_url( $imagen_assets_images_about_about_5_webp ); ?>" alt="">
            </div>
            <div class="box-area">
            <div class="progress-box wow fadeInUp" data-wow-delay=".3s">
                <h4 class="title"><?php echo esc_html( $texto_business_progress ); ?></h4>
                <ul class="tj-progress-list">
                <li>
                    <h6 class="tj-progress-title"><?php echo esc_html( $texto_revenue ); ?></h6>
                    <div class="tj-progress">
                    <span class="tj-progress-percent">82%</span>
                    <div class="tj-progress-bar" data-percent="82">
                    </div>
                    </div>
                </li>
                <li>
                    <h6 class="tj-progress-title"><?php echo esc_html( $texto_satisfaction ); ?></h6>
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
        <div class="col-xl-6 col-lg-6 order-lg-2 order-1">
        <div class="about-content-area">
            <div class="sec-heading style-3">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_get_to_know_us ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $texto_driving_innovation_and_excellence_for ); ?>
            </h2>
            </div>
        </div>
        <div class="about-bottom-area">
            <div class="mission-vision-box wow fadeInLeft" data-wow-delay=".5s">
            <h4 class="title"><?php echo esc_html( $texto_our_mission ); ?></h4>
            <p class="desc"><?php echo esc_html( $texto_our_mission_is_empower_businesses_thro ); ?>
            </p>
            <ul class="list-items">
                <li><i class="tji-list"></i><?php echo esc_html( $texto_innovation_excellence ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_exceptional_customer ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_business_growth ); ?></li>
            </ul>
            </div>
            <div class="mission-vision-box wow fadeInRight" data-wow-delay=".5s">
            <h4 class="title"><?php echo esc_html( $texto_our_vision ); ?></h4>
            <p class="desc"><?php echo esc_html( $texto_our_vision_is_to_become_a_global_leade ); ?>
            </p>
            <ul class="list-items">
                <li><i class="tji-list"></i><?php echo esc_html( $texto_global_leadership ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_transformative_impact ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $texto_sustainable_success ); ?></li>
            </ul>
            </div>
        </div>
        <div class="about-btn-area wow fadeInUp" data-wow-delay=".5s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $link_about_html ); ?>">
            <span class="btn-text"><span><?php echo esc_html( $texto_learn_more_about_us ); ?></span></span>
            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
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
<!-- end: About Section 3 -->
