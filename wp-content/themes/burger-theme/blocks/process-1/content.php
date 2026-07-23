<?php
$content_fields = array(
    'texto_our_process' => 'Our PROCESS',
    'texto_seamless_process_and_great_results' => 'Seamless Process and Great Results.',
    'link_aboout_html' => 'aboout.html',
    'texto_explore_more' => 'Explore More',
    'texto_step_01' => 'Step 01',
    'texto_discovery_planning' => 'Discovery & Planning',
    'texto_he_first_step_in_our_process_is_unders' => 'he first step in our process is understanding your unique business needs, objectives, and our cutomes challenges. he first step in our process is understanding your unique business needs, objectives, and our cutomes challenges. he first step in our process is understanding .',
    'texto_step_02' => 'Step 02',
    'texto_execution_delivery' => 'Execution & Delivery',
    'texto_he_first_step_in_our_process_is_unders_2' => 'he first step in our process is understanding your unique business needs, objectives, and our cutomes challenges. he first step in our process is understanding your unique business needs, objectives, and our cutomes challenges. he first step in our process is understanding .',
    'texto_step_03' => 'Step 03',
    'texto_review_support' => 'Review & Support',
    'texto_he_first_step_in_our_process_is_unders_3' => 'he first step in our process is understanding your unique business needs, objectives, and our cutomes challenges. he first step in our process is understanding your unique business needs, objectives, and our cutomes challenges. he first step in our process is understanding .',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
    'imagen_assets_images_shape_h7_testimonial_shape' => NAKAMA_THEME_URL . '/assets/images/shape/h7-testimonial-shape-blur.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Process Section -->
<section class="h10-process section-gap section-gap-x tj-sticky-panel-3-container">
    <div class="container">
    <div class="row">
        <div class="col-12 col-lg-5">
        <div class="sec-heading style-3 tj-sticky-panel-3">
            <span class="sub-title"><i class="tji-box"></i> <?php echo esc_html( $texto_our_process ); ?></span>
            <h2 class="sec-title text-anim"><?php echo esc_html( $texto_seamless_process_and_great_results ); ?></h2>
            <div class="h10-process-more">
            <a class="tj-primary-btn" href="<?php echo esc_url( $link_aboout_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_explore_more ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
        <div class="col-12 col-lg-7 ">
        <div class="h10-process-wrapper">
            <div class="h10-process-item tj-sticky-panel-3">
            <h6 class="h10-process-sln"><?php echo esc_html( $texto_step_01 ); ?></h6>
            <div class="h10-process-icon">
                <i class="tji-growth"></i>
            </div>
            <div class="h10-process-content">
                <h4 class="title"><?php echo esc_html( $texto_discovery_planning ); ?></h4>
                <p class="desc"><?php echo wp_kses_post( $texto_he_first_step_in_our_process_is_unders ); ?>
                </p>
            </div>
            </div>
            <div class="h10-process-item tj-sticky-panel-3">
            <h6 class="h10-process-sln"><?php echo esc_html( $texto_step_02 ); ?></h6>
            <div class="h10-process-icon">
                <i class="tji-worldwide"></i>
            </div>
            <div class="h10-process-content">
                <h4 class="title"><?php echo esc_html( $texto_execution_delivery ); ?></h4>
                <p class="desc"><?php echo wp_kses_post( $texto_he_first_step_in_our_process_is_unders_2 ); ?>
                </p>
            </div>
            </div>
            <div class="h10-process-item tj-sticky-panel-3">
            <h6 class="h10-process-sln"><?php echo esc_html( $texto_step_03 ); ?></h6>
            <div class="h10-process-icon">
                <i class="tji-complete"></i>
            </div>
            <div class="h10-process-content">
                <h4 class="title"><?php echo esc_html( $texto_review_support ); ?></h4>
                <p class="desc"><?php echo wp_kses_post( $texto_he_first_step_in_our_process_is_unders_3 ); ?>
                </p>
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
    <img src="<?php echo esc_url( $imagen_assets_images_shape_h7_testimonial_shape ); ?>" alt="">
    </div>
</section>
<!-- end: Process Section -->
