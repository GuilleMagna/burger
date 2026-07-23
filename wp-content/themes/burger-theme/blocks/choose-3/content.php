<?php
$content_fields = array(
    'texto_award_winning_expertise' => 'Award-Winning Expertise',
    'texto_recognized_by_industry_leaders_our_awa' => 'Recognized by industry leaders, our award-winning team has a proven record of delivering excellence across projects.',
    'texto_choose_the_best' => 'Choose the Best',
    'texto_solutions_built_for_business' => 'Solutions Built for Business.',
    'link_about_html' => 'about.html',
    'texto_learn_more' => 'Learn More',
    'texto_expert_team' => 'Expert Team',
    'texto_our_team_is_always_available_to_addres' => 'Our team is always available to address your concerns, providing quick and solution. to keep you competitive in marketplace.',
    'texto_dedicated_support' => 'Dedicated Support',
    'texto_our_team_is_always_available_to_addres_2' => 'Our team is always available to address your concerns, providing quick and effective solution to keep your business.',
    'texto_innovative_solutions' => 'Innovative Solutions',
    'texto_we_stay_ahead_of_the_curve_leveraging' => 'We stay ahead of the curve, leveraging cutting-edge technologies and strategies to keep you competitive in a marketplace.',
    'imagen_assets_images_choose_choose_img_webp' => NAKAMA_THEME_URL . '/assets/images/choose/choose-img.webp',
    'texto_faster_growth' => 'Faster Growth',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Choose Section 3 -->
<section id="choose" class="tj-choose-section section-gap">
    <div class="container">
    <div class="row row-gap-4">
        <div class="col-lg-4 col-md-6 order-lg-0 order-1">
        <div class="choose-box wow fadeInUp" data-wow-delay=".2s">
            <div class="choose-content">
            <div class="choose-icon">
                <i class="tji-award"></i>
            </div>
            <h4 class="title"><?php echo esc_html( $texto_award_winning_expertise ); ?></h4>
            <p class="desc"><?php echo wp_kses_post( $texto_recognized_by_industry_leaders_our_awa ); ?></p>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 order-lg-1 order-0">
        <div class="h4-content-wrap text-center">
            <div class="sec-heading style-4 text-center">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_choose_the_best ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $texto_solutions_built_for_business ); ?></h2>
            </div>
            <a class="tj-primary-btn wow fadeInUp" data-wow-delay=".5s" href="<?php echo esc_url( $link_about_html ); ?>">
            <span class="btn-text"><span><?php echo esc_html( $texto_learn_more ); ?></span></span>
            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 order-lg-2 order-2">
        <div class="choose-box wow fadeInUp" data-wow-delay=".3s">
            <div class="choose-content">
            <div class="choose-icon">
                <i class="tji-team"></i>
            </div>
            <h4 class="title"><?php echo esc_html( $texto_expert_team ); ?></h4>
            <p class="desc"><?php echo wp_kses_post( $texto_our_team_is_always_available_to_addres ); ?></p>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 order-lg-3 order-3">
        <div class="choose-box wow fadeInUp" data-wow-delay=".5s">
            <div class="choose-content">
            <div class="choose-icon">
                <i class="tji-support"></i>
            </div>
            <h4 class="title"><?php echo esc_html( $texto_dedicated_support ); ?></h4>
            <p class="desc"><?php echo wp_kses_post( $texto_our_team_is_always_available_to_addres_2 ); ?></p>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 order-lg-4 order-4">
        <div class="choose-box wow fadeInUp" data-wow-delay=".7s">
            <div class="choose-content">
            <div class="choose-icon">
                <i class="tji-innovative"></i>
            </div>
            <h4 class="title"><?php echo esc_html( $texto_innovative_solutions ); ?></h4>
            <p class="desc"><?php echo wp_kses_post( $texto_we_stay_ahead_of_the_curve_leveraging ); ?></p>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 order-lg-5 order-5">
        <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".9s"
            data-bg-image="<?php echo esc_url( $imagen_assets_images_choose_choose_img_webp ); ?>">
            <span class="count-icon"><i class="tji-growth"></i></span>
            <div class="count-inner">
            <span class="count-text"><?php echo esc_html( $texto_faster_growth ); ?></span>
            <div class="inline-content">
                <span class="odometer countup-number" data-count="8.5"></span>
                <span class="count-plus">X</span>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Choose Section 3 -->
