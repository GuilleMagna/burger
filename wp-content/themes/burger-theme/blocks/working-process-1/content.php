<?php
$content_fields = array(
    'texto_our_process' => 'Our Process',
    'texto_seamless_process_great' => 'Seamless Process, Great',
    'texto_results' => 'Results.',
    'texto_developing_personalized_customer_journ' => 'Developing personalized customer journeys to increase satisfaction and loyalty.',
    'link_contact_html' => 'contact.html',
    'texto_request_a_call' => 'Request a Call',
    'texto_discovery_planning' => 'Discovery & Planning',
    'texto_the_first_step_in_our_process_is_under' => 'The first step in our process is understanding your unique business needs, objectives, and our cutomes challenges.',
    'texto_execution_delivery' => 'Execution & Delivery',
    'texto_once_the_plan_is_in_place_our_team_mov' => 'Once the plan is in place, our team moves forward with execution, turning strategies into actiony to deliver.',
    'texto_review_support' => 'Review & Support',
    'texto_after_project_completion_we_conduct_a' => 'After project completion, we conduct a thorough review to ensure everything aligns with your goals and requirements.',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Working process Section -->
<div class="tj-working-process section-gap section-gap-x">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading-wrap">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $texto_our_process ); ?></span>
            <div class="heading-wrap-content">
            <div class="sec-heading style-2">
                <h2 class="sec-title text-anim"><?php echo esc_html( $texto_seamless_process_great ); ?> <span><?php echo esc_html( $texto_results ); ?></span></h2>
            </div>
            <p class="desc wow fadeInUp" data-wow-delay=".5s"><?php echo esc_html( $texto_developing_personalized_customer_journ ); ?></p>
            <div class="btn-wrap wow fadeInUp" data-wow-delay=".6s">
                <a class="tj-primary-btn" href="<?php echo esc_url( $link_contact_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_request_a_call ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="working-process-area">
            <div class="process-item wow fadeInLeft" data-wow-delay=".5s">
            <div class="process-step">
                <span>01</span>
            </div>
            <div class="process-content">
                <h4 class="title"><?php echo esc_html( $texto_discovery_planning ); ?></h4>
                <p class="desc"><?php echo wp_kses_post( $texto_the_first_step_in_our_process_is_under ); ?></p>
            </div>
            </div>
            <div class="process-item wow fadeInLeft" data-wow-delay=".7s">
            <div class="process-step">
                <span>02</span>
            </div>
            <div class="process-content">
                <h4 class="title"><?php echo esc_html( $texto_execution_delivery ); ?></h4>
                <p class="desc"><?php echo wp_kses_post( $texto_once_the_plan_is_in_place_our_team_mov ); ?></p>
            </div>
            </div>
            <div class="process-item wow fadeInLeft" data-wow-delay=".9s">
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
    <div class="bg-shape-1">
    <img src="<?php echo esc_url( $imagen_assets_images_shape_pattern_2_svg ); ?>" alt="">
    </div>
    <div class="bg-shape-2">
    <img src="<?php echo esc_url( $imagen_assets_images_shape_pattern_3_svg ); ?>" alt="">
    </div>
</div>
<!-- end: Working process Section -->
