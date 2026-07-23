<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: About Section 3 -->
<section class="tj-about-section-2 section-gap section-gap-x ">
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 order-lg-1 order-2">
        <div class="about-img-area style-2 wow fadeInLeft" data-wow-delay=".3s">
            <div class="about-img overflow-hidden">
            <img data-speed=".8" src="<?php echo esc_url( $burger_get( 'imagen_assets_images_about_about_5_webp', NAKAMA_THEME_URL . '/assets/images/about/about-5.webp' ) ); ?>" alt="">
            </div>
            <div class="box-area">
            <div class="progress-box wow fadeInUp" data-wow-delay=".3s">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_business_progress', 'Business Progress' ) ); ?></h4>
                <ul class="tj-progress-list">
                <li>
                    <h6 class="tj-progress-title"><?php echo esc_html( $burger_get( 'texto_revenue', 'Revenue' ) ); ?></h6>
                    <div class="tj-progress">
                    <span class="tj-progress-percent">82%</span>
                    <div class="tj-progress-bar" data-percent="82">
                    </div>
                    </div>
                </li>
                <li>
                    <h6 class="tj-progress-title"><?php echo esc_html( $burger_get( 'texto_satisfaction', 'Satisfaction' ) ); ?></h6>
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
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_get_to_know_us', 'Get to Know Us' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_driving_innovation_and_excellence_for', 'Driving Innovation and Excellence for Sustainable Corporate Success Worldwide.' ) ); ?>
            </h2>
            </div>
        </div>
        <div class="about-bottom-area">
            <div class="mission-vision-box wow fadeInLeft" data-wow-delay=".5s">
            <h4 class="title"><?php echo esc_html( $burger_get( 'texto_our_mission', 'Our Mission' ) ); ?></h4>
            <p class="desc"><?php echo esc_html( $burger_get( 'texto_our_mission_is_empower_businesses_thro', 'our mission is empower businesses through innovate best solution, exceptional service.' ) ); ?>
            </p>
            <ul class="list-items">
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_innovation_excellence', 'Innovation & Excellence' ) ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_exceptional_customer', 'Exceptional Customer' ) ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_business_growth', 'Business Growth' ) ); ?></li>
            </ul>
            </div>
            <div class="mission-vision-box wow fadeInRight" data-wow-delay=".5s">
            <h4 class="title"><?php echo esc_html( $burger_get( 'texto_our_vision', 'Our Vision' ) ); ?></h4>
            <p class="desc"><?php echo esc_html( $burger_get( 'texto_our_vision_is_to_become_a_global_leade', 'Our vision is to become a global leader in providing transformative business solutions.' ) ); ?>
            </p>
            <ul class="list-items">
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_global_leadership', 'Global Leadership' ) ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_transformative_impact', 'Transformative Impact' ) ); ?></li>
                <li><i class="tji-list"></i><?php echo esc_html( $burger_get( 'texto_sustainable_success', 'Sustainable Success' ) ); ?></li>
            </ul>
            </div>
        </div>
        <div class="about-btn-area wow fadeInUp" data-wow-delay=".5s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_about_html', 'about.html' ) ); ?>">
            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more_about_us', 'Learn More About Us' ) ); ?></span></span>
            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
        </div>
        </div>
    </div>
    </div>
    <div class="bg-shape-1">
    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_2_svg', NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg' ) ); ?>" alt="">
    </div>
    <div class="bg-shape-2">
    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pattern_3_svg', NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg' ) ); ?>" alt="">
    </div>
</section>
<!-- end: About Section 3 -->
