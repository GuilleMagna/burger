<?php
$content_fields = array(
    'texto_our_process' => 'OUR PROCESS',
    'texto_seamless_process_and_great_results' => 'Seamless Process and Great Results.',
    'texto_step_01' => 'Step 01',
    'texto_discovery_planning' => 'Discovery & Planning',
    'texto_the_first_step_in_our_process_is_under' => 'The first step in our process is understanding your unique business needs, objectives, and our cutomes challenges.',
    'texto_step_02' => 'Step 02',
    'texto_execution_delivery' => 'Execution & Delivery',
    'texto_once_the_plan_is_in_place_our_team_mov' => 'Once the plan is in place, our team moves forward with execution, turning strategies into actiony to deliver.',
    'texto_step_03' => 'Step 03',
    'texto_review_support' => 'Review & Support',
    'texto_after_project_completion_we_conduct_a' => 'After project completion, we conduct a thorough review to ensure everything aligns with your goals and requirements.',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
    'imagen_assets_images_shape_shape_blur_svg' => NAKAMA_THEME_URL . '/assets/images/shape/shape-blur.svg',
    'imagen_assets_images_shape_shape_blur_svg_2' => NAKAMA_THEME_URL . '/assets/images/shape/shape-blur.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Working process Section 2 -->
<section class="h5-working-process section-gap section-gap-x ">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading sec-heading-centered style-3">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i> <?php echo esc_html( $texto_our_process ); ?></span>
            <h2 class="sec-title text-anim  text-white"><?php echo esc_html( $texto_seamless_process_and_great_results ); ?></h2>
        </div>
        </div>
    </div>
    </div>

    <div class="h5-working-process-inner">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="working-process-area h5-working-process-wrapper">
            <div class="process-item h5-working-process-item wow bounceInUp" data-wow-delay=".3s">
                <h5 class="h5-working-process-indicator"><?php echo esc_html( $texto_step_01 ); ?></h5>
                <div class="process-step">
                <span>01</span>
                </div>
                <div class="process-content">
                <h4 class="title"><?php echo esc_html( $texto_discovery_planning ); ?></h4>
                <p class="desc"><?php echo wp_kses_post( $texto_the_first_step_in_our_process_is_under ); ?></p>
                </div>
            </div>
            <div class="process-item h5-working-process-item wow bounceInUp" data-wow-delay=".4s">
                <h5 class="h5-working-process-indicator"><?php echo esc_html( $texto_step_02 ); ?></h5>
                <div class="process-step">
                <span>02</span>
                </div>
                <div class="process-content">
                <h4 class="title"><?php echo esc_html( $texto_execution_delivery ); ?></h4>
                <p class="desc"><?php echo wp_kses_post( $texto_once_the_plan_is_in_place_our_team_mov ); ?></p>
                </div>
            </div>
            <div class="process-item h5-working-process-item wow bounceInUp" data-wow-delay=".5s">
                <h5 class="h5-working-process-indicator"><?php echo esc_html( $texto_step_03 ); ?></h5>
                <div class="process-step">
                <span>03</span>
                </div>
                <div class="process-content">
                <h4 class="title"><?php echo esc_html( $texto_review_support ); ?></h4>
                <p class="desc"><?php echo wp_kses_post( $texto_after_project_completion_we_conduct_a ); ?></p>
                </div>
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
    <div class="bg-shape-3">
    <img src="<?php echo esc_url( $imagen_assets_images_shape_shape_blur_svg ); ?>" alt="">
    </div>
    <div class="bg-shape-4">
    <img src="<?php echo esc_url( $imagen_assets_images_shape_shape_blur_svg_2 ); ?>" alt="">
    </div>
</section>
<!-- end: Working process Section 2 -->
