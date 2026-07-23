<?php
$__block_fields = function_exists('get_fields') ? (array) get_fields() : [];
$__block_cache_key = 'acf_block_' . md5(($block['id'] ?? basename(__DIR__)) . serialize($__block_fields));

if (($__block_cached_html = get_transient($__block_cache_key)) !== false) {
    echo $__block_cached_html;
    return;
}

ob_start();
?>
<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Working process Section -->
<div class="tj-working-process section-gap section-gap-x">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading-wrap">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $burger_get( 'texto_our_process', 'Our Process' ) ); ?></span>
            <div class="heading-wrap-content">
            <div class="sec-heading style-2">
                <h2 class="sec-title text-anim"><?php echo esc_html( $burger_get( 'texto_seamless_process_great', 'Seamless Process, Great' ) ); ?> <span><?php echo esc_html( $burger_get( 'texto_results', 'Results.' ) ); ?></span></h2>
            </div>
            <p class="desc wow fadeInUp" data-wow-delay=".5s"><?php echo esc_html( $burger_get( 'texto_developing_personalized_customer_journ', 'Developing personalized customer journeys to increase satisfaction and loyalty.' ) ); ?></p>
            <div class="btn-wrap wow fadeInUp" data-wow-delay=".6s">
                <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_request_a_call', 'Request a Call' ) ); ?></span></span>
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
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_discovery_planning', 'Discovery & Planning' ) ); ?></h4>
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_the_first_step_in_our_process_is_under', 'The first step in our process is understanding your unique business needs, objectives, and our cutomes challenges.' ) ); ?></p>
            </div>
            </div>
            <div class="process-item wow fadeInLeft" data-wow-delay=".7s">
            <div class="process-step">
                <span>02</span>
            </div>
            <div class="process-content">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_execution_delivery', 'Execution & Delivery' ) ); ?></h4>
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_once_the_plan_is_in_place_our_team_mov', 'Once the plan is in place, our team moves forward with execution, turning strategies into actiony to deliver.' ) ); ?></p>
            </div>
            </div>
            <div class="process-item wow fadeInLeft" data-wow-delay=".9s">
            <div class="process-step">
                <span>03</span>
            </div>
            <div class="process-content">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_review_support', 'Review & Support' ) ); ?></h4>
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_after_project_completion_we_conduct_a', 'After project completion, we conduct a thorough review to ensure everything aligns with your goals and requirements.' ) ); ?></p>
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
</div>
<!-- end: Working process Section -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
