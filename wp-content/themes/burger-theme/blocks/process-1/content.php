<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Process Section -->
<section class="h10-process section-gap section-gap-x tj-sticky-panel-3-container">
    <div class="container">
    <div class="row">
        <div class="col-12 col-lg-5">
        <div class="sec-heading style-3 tj-sticky-panel-3">
            <span class="sub-title"><i class="tji-box"></i> <?php echo esc_html( $burger_get( 'texto_our_process', 'Our PROCESS' ) ); ?></span>
            <h2 class="sec-title text-anim"><?php echo esc_html( $burger_get( 'texto_seamless_process_and_great_results', 'Seamless Process and Great Results.' ) ); ?></h2>
            <div class="h10-process-more">
            <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_aboout_html', 'aboout.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_explore_more', 'Explore More' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
        <div class="col-12 col-lg-7 ">
        <div class="h10-process-wrapper">
            <div class="h10-process-item tj-sticky-panel-3">
            <h6 class="h10-process-sln"><?php echo esc_html( $burger_get( 'texto_step_01', 'Step 01' ) ); ?></h6>
            <div class="h10-process-icon">
                <i class="tji-growth"></i>
            </div>
            <div class="h10-process-content">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_discovery_planning', 'Discovery & Planning' ) ); ?></h4>
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_he_first_step_in_our_process_is_unders', 'he first step in our process is understanding your unique business needs, objectives, and our cutomes challenges. he first step in our process is understanding your unique business needs, objectives, and our cutomes challenges. he first step in our process is understanding .' ) ); ?>
                </p>
            </div>
            </div>
            <div class="h10-process-item tj-sticky-panel-3">
            <h6 class="h10-process-sln"><?php echo esc_html( $burger_get( 'texto_step_02', 'Step 02' ) ); ?></h6>
            <div class="h10-process-icon">
                <i class="tji-worldwide"></i>
            </div>
            <div class="h10-process-content">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_execution_delivery', 'Execution & Delivery' ) ); ?></h4>
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_he_first_step_in_our_process_is_unders_2', 'he first step in our process is understanding your unique business needs, objectives, and our cutomes challenges. he first step in our process is understanding your unique business needs, objectives, and our cutomes challenges. he first step in our process is understanding .' ) ); ?>
                </p>
            </div>
            </div>
            <div class="h10-process-item tj-sticky-panel-3">
            <h6 class="h10-process-sln"><?php echo esc_html( $burger_get( 'texto_step_03', 'Step 03' ) ); ?></h6>
            <div class="h10-process-icon">
                <i class="tji-complete"></i>
            </div>
            <div class="h10-process-content">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_review_support', 'Review & Support' ) ); ?></h4>
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_he_first_step_in_our_process_is_unders_3', 'he first step in our process is understanding your unique business needs, objectives, and our cutomes challenges. he first step in our process is understanding your unique business needs, objectives, and our cutomes challenges. he first step in our process is understanding .' ) ); ?>
                </p>
            </div>
            </div>
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
    <div class="bg-shape-3">
    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_h7_testimonial_shape', NAKAMA_THEME_URL . '/assets/images/shape/h7-testimonial-shape-blur.svg' ) ); ?>" alt="">
    </div>
</section>
<!-- end: Process Section -->
