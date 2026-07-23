<?php
$content_fields = array(
    'texto_choose_the_best' => 'Choose the Best',
    'texto_empowering_business_with_expertise' => 'Empowering Business with Expertise.',
    'texto_innovative_solutions' => 'Innovative Solutions',
    'texto_we_stay_ahead_of_the_curve_leveraging' => 'We stay ahead of the curve, leveraging cutting-edge technologies and strategies to keep you competitive in a marketplace.',
    'link_about_html' => 'about.html',
    'texto_read_more' => 'Read More',
    'texto_award_winning_expertise' => 'Award-Winning Expertise',
    'texto_recognized_by_industry_leaders_our_awa' => 'Recognized by industry leaders, our award-winning team has a proven record of delivering excellence across projects.',
    'link_about_html_2' => 'about.html',
    'texto_read_more_2' => 'Read More',
    'texto_dedicated_support' => 'Dedicated Support',
    'texto_our_team_is_always_available_to_addres' => 'Our team is always available to address your concerns, providing quick and effective solution to keep your business.',
    'link_about_html_3' => 'about.html',
    'texto_read_more_3' => 'Read More',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Choose Section 5 -->
<section id="choose" class="tj-choose-section h6-choose h7-choose section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading style-2 style-7 text-center">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_choose_the_best ); ?></span>
            <h2 class="sec-title text-anim"><?php echo esc_html( $texto_empowering_business_with_expertise ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row rightSwipeWrap h7-choose-item-wrapper  wow fadeInLeftBig" data-wow-delay=".4s">
        <div class="col-lg-4 h7-choose-item">
        <div class="choose-box h6-choose-box h7-choose-box">
            <div class="choose-content">
            <div class="choose-icon">
                <i class="tji-innovative"></i>
            </div>
            <h4 class="title"><?php echo esc_html( $texto_innovative_solutions ); ?></h4>
            <p class="desc"><?php echo wp_kses_post( $texto_we_stay_ahead_of_the_curve_leveraging ); ?></p>
            <a class="text-btn" href="<?php echo esc_url( $link_about_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_read_more ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
        <div class="col-lg-4 h7-choose-item">
        <div class="choose-box h6-choose-box h7-choose-box">
            <div class="choose-content">
            <div class="choose-icon">
                <i class="tji-award"></i>
            </div>
            <h4 class="title"><?php echo esc_html( $texto_award_winning_expertise ); ?></h4>
            <p class="desc"><?php echo wp_kses_post( $texto_recognized_by_industry_leaders_our_awa ); ?></p>
            <a class="text-btn" href="<?php echo esc_url( $link_about_html_2 ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_read_more_2 ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
        <div class="col-lg-4 h7-choose-item">
        <div class="choose-box h6-choose-box h7-choose-box">
            <div class="choose-content">
            <div class="choose-icon">
                <i class="tji-support"></i>
            </div>
            <h4 class="title"><?php echo esc_html( $texto_dedicated_support ); ?></h4>
            <p class="desc"><?php echo wp_kses_post( $texto_our_team_is_always_available_to_addres ); ?></p>
            <a class="text-btn" href="<?php echo esc_url( $link_about_html_3 ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_read_more_3 ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Choose Section 5 -->
