<?php
$content_fields = array(
    'texto_choose_the_best' => 'Choose the Best',
    'texto_committed_delivering_measurable_result' => 'Committed Delivering Measurable Results and Building from the Lasting Relationships through out trust and innovation and corporate shared',
    'link_about_html' => 'about.html',
    'texto_learn_more' => 'Learn More',
    'texto_rebranding_strategy_for_a_growing' => 'Rebranding Strategy for a Growing',
    'imagen_assets_images_strategy_strategy_avatar_we' => './assets/images/strategy/strategy-avatar.webp',
    'texto_satisfied_customers_work_with_our_bexo' => 'Satisfied customers work with our Bexon.',
    'texto_rebranding_strategy_for_a_growing_2' => 'Rebranding Strategy for a Growing',
    'imagen_assets_images_strategy_strategy_chart_web' => './assets/images/strategy/strategy-chart.webp',
    'texto_rebranding_strategy_for_a_growing_3' => 'Rebranding Strategy for a Growing',
    'texto_our_team_are_always_available_to_addre' => 'Our team are always available to addressed our concerns, providing quick solution.',
    'texto_growth' => 'Growth',
    'texto_success' => 'Success',
    'texto_innovate' => 'Innovate',
    'texto_lead' => 'Lead',
    'texto_impact' => 'Impact',
    'texto_focus' => 'Focus',
    'texto_tech' => 'Tech',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Strategy Slider -->
<section class="h5-strategy section-gap ">
    <div class="container gap-30-30">
    <div class="row ">
        <div class="col-12">
        <div class="sec-heading style-3 h5-strategy-heading">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_choose_the_best ); ?></span>
            <h2 class="sec-title text-anim "><?php echo wp_kses_post( $texto_committed_delivering_measurable_result ); ?></h2>
            <a class="tj-primary-btn" href="<?php echo esc_url( $link_about_html ); ?>">
            <span class="btn-text"><span><?php echo esc_html( $texto_learn_more ); ?></span></span>
            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
        </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
        <div class="h5-strategy-item h5-strategy-item-1 wow fadeInUp" data-wow-delay=".3s">
            <h4 class="h5-strategy-title"><?php echo esc_html( $texto_rebranding_strategy_for_a_growing ); ?></h4>
            <div class="h5-strategy-avatar">
            <img src="<?php echo esc_url( $imagen_assets_images_strategy_strategy_avatar_we ); ?>" alt="">
            </div>
            <div class="h5-strategy-counter">
            <div class="count-inner h5-strategy-counter-inner">
                <div class="inline-content">
                <span class="odometer countup-number" data-count="200"></span>
                </div>
                <span class="count-text"><?php echo esc_html( $texto_satisfied_customers_work_with_our_bexo ); ?></span>
            </div>
            </div>
        </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
        <div class="h5-strategy-item h5-strategy-item-2 wow fadeInUp" data-wow-delay=".4s">
            <h4 class="h5-strategy-title"><?php echo esc_html( $texto_rebranding_strategy_for_a_growing_2 ); ?></h4>
            <div class="h5-strategy-chart">
            <img src="<?php echo esc_url( $imagen_assets_images_strategy_strategy_chart_web ); ?>" alt="">
            </div>
        </div>
        </div>
        <div class="col-12 col-lg-4">
        <div class="h5-strategy-item h5-strategy-item-3 wow fadeInUp" data-wow-delay=".5s">
            <h4 class="h5-strategy-title"><?php echo esc_html( $texto_rebranding_strategy_for_a_growing_3 ); ?></h4>
            <p class="h5-strategy-desc"><?php echo esc_html( $texto_our_team_are_always_available_to_addre ); ?></p>
            <div class="h5-strategy-tag-wrapper">

            <a class="h5-strategy-tag" href="#">
                <?php echo esc_html( $texto_growth ); ?>
            </a>
            <a class="h5-strategy-tag" href="#">
                <?php echo esc_html( $texto_success ); ?>
            </a>
            <a class="h5-strategy-tag" href="#">
                <?php echo esc_html( $texto_innovate ); ?>
            </a>
            <a class="h5-strategy-tag" href="#">
                <?php echo esc_html( $texto_lead ); ?>
            </a>
            <a class="h5-strategy-tag" href="#">
                <?php echo esc_html( $texto_impact ); ?>
            </a>
            <a class="h5-strategy-tag" href="#">
                <?php echo esc_html( $texto_focus ); ?>
            </a>
            <a class="h5-strategy-tag" href="#">
                <?php echo esc_html( $texto_tech ); ?>
            </a>

            </div>


        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Strategy Slider -->
