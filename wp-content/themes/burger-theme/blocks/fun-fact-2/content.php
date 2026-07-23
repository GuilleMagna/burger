<?php
$content_fields = array(
    'texto_our_fun_fact' => 'OUR FUN FACT',
    'texto_numbers_and_facts_that_define_performa' => 'Numbers and facts that define performance.',
    'imagen_assets_images_funfact_h8_funfact_banner_w' => NAKAMA_THEME_URL . '/assets/images/funfact/h8-funfact-banner.webp',
    'texto_get_started_free_call' => 'Get Started Free Call?',
    'texto_complete_project' => 'Complete Project',
    'texto_through_a_combination_of_data_driven_i' => 'Through a combination of data-driven insights and innovative approaches.',
    'texto_faster_growtht' => 'Faster Growtht',
    'texto_through_a_combination_of_data_driven_i_2' => 'Through a combination of data-driven insights and innovative approaches.',
    'texto_awards_archived' => 'Awards Archived',
    'texto_through_a_combination_of_data_driven_i_3' => 'Through a combination of data-driven insights and innovative approaches.',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Fun fact Section 2 -->
<section class=" h8-funfact section-gap">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="sec-heading style-3 sec-heading-centered">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_our_fun_fact ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $texto_numbers_and_facts_that_define_performa ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-12 col-lg-6">
        <div class="h8-funfact-banner wow fadeInLeft" data-wow-delay=".3s">
            <div class="h8-funfact-banner-img">
            <img src="<?php echo esc_url( $imagen_assets_images_funfact_h8_funfact_banner_w ); ?>" alt="">
            </div>
            <div class="box-area">
            <div class="call-box wow fadeInUp" data-wow-delay=".5s">
                <h4 class="title"><?php echo esc_html( $texto_get_started_free_call ); ?> </h4>
                <span class="call-icon"><i class="tji-phone"></i></span>
                <a class="number" href="tel:18884521505"><span>1-888-452-1505</span></a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-12 col-lg-6 pl-0">
        <div class="h8-funfact-wrapper">
            <div class="countup-item style-2 h8-funfact-item">
            <div class="count-inner">
                <div class="inline-content">
                <span class="odometer countup-number" data-count="93"></span>
                <span class="count-plus">%</span>
                </div>
                <div class="counter-desc">
                <h4 class="counter-title"><?php echo esc_html( $texto_complete_project ); ?></h4>
                <p class="count-text"><?php echo esc_html( $texto_through_a_combination_of_data_driven_i ); ?>
                </p>
                </div>
            </div>
            </div>
            <div class="countup-item style-2 h8-funfact-item ">
            <div class="count-inner">
                <div class="inline-content">
                <span class="odometer countup-number" data-count="8.5"></span>
                <span class="count-plus">X</span>
                </div>
                <div class="counter-desc">
                <h4 class="counter-title"><?php echo esc_html( $texto_faster_growtht ); ?></h4>
                <p class="count-text"><?php echo esc_html( $texto_through_a_combination_of_data_driven_i_2 ); ?>
                </p>
                </div>
            </div>
            </div>
            <div class="countup-item style-2 h8-funfact-item">
            <div class="count-inner">
                <div class="inline-content">
                <span class="odometer countup-number" data-count="100"></span>
                <span class="count-plus">+</span>
                </div>
                <div class="counter-desc">
                <h4 class="counter-title"><?php echo esc_html( $texto_awards_archived ); ?></h4>
                <p class="count-text"><?php echo esc_html( $texto_through_a_combination_of_data_driven_i_3 ); ?>
                </p>
                </div>
            </div>
            </div>
        </div>
        </div>

    </div>
    </div>
</section>
<!-- end: Fun fact Section 2 -->
