<?php
$content_fields = array(
    'texto_our_fun_fact' => 'OUR FUN FACT',
    'texto_numbers_and_facts_that_define_performa' => 'Numbers and facts that define performance.',
    'texto_increased_revenue_in_the_last_6_months' => 'Increased revenue in the last 6 months.',
    'texto_faster_growth' => 'Faster Growth',
    'texto_reach_worldwide' => 'Reach Worldwide',
    'texto_projects_completed' => 'Projects Completed.',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Fun fact Section -->
<section class="tj-funfact-section section-gap section-gap-x">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="heading-wrap-content">
            <div class="sec-heading style-4">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_our_fun_fact ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $texto_numbers_and_facts_that_define_performa ); ?></h2>
            </div>
            <div class="progress-item">
            <div class="progress-circle">
                <input type="text" class="knob" value="0" data-rel="92" data-linecap="0" data-width="120"
                data-height="120" data-bgcolor="#ffffff" data-fgcolor="#1E8A8A" data-thickness=".16"
                data-readonly="true" disabled>
            </div>
            <div class="progress-text">
                <span class="sub-title"><?php echo esc_html( $texto_increased_revenue_in_the_last_6_months ); ?></span>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="row row-gap-4">
        <div class="col-lg-4 col-md-6">
        <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".7s">
            <span class="count-icon"><i class="tji-growth"></i></span>
            <span class="steps">01.</span>
            <div class="count-inner">
            <span class="count-text"><?php echo esc_html( $texto_faster_growth ); ?></span>
            <div class="inline-content">
                <span class="odometer countup-number" data-count="8.5"></span>
                <span class="count-plus">X</span>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6">
        <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".5s">
            <span class="count-icon"><i class="tji-worldwide"></i></span>
            <span class="steps">02.</span>
            <div class="count-inner">
            <span class="count-text"><?php echo esc_html( $texto_reach_worldwide ); ?></span>
            <div class="inline-content">
                <span class="odometer countup-number" data-count="20"></span>
                <span class="count-plus">M</span>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-md-6">
        <div class="countup-item style-2 wow fadeInUp" data-wow-delay=".1s">
            <span class="count-icon"><i class="tji-complete"></i></span>
            <span class="steps">03.</span>
            <div class="count-inner">
            <span class="count-text"><?php echo esc_html( $texto_projects_completed ); ?></span>
            <div class="inline-content">
                <span class="odometer countup-number" data-count="93"></span>
                <span class="count-plus">%</span>
            </div>
            </div>
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
<!-- end: Fun fact Section -->
