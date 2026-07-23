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

<!-- start: Working process Section 3 -->
<section class="h6-working-process section-gap slidebar-stickiy-container">
    <div class="container">
    <div class="row">
        <div class="col-lg-6 order-2 order-lg-1">
        <div class="h6-working-process-inner">
            <div class="h6-working-process-wrapper">
            <div class="process-item h6-working-process-item tj-hover-active-item active">
                <div class="process-step">
                <span>01.</span>
                </div>
                <div class="process-content">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_discovery_planning', 'Discovery & Planning' ) ); ?></h4>
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_he_first_step_in_our_s_process_is_unde', 'he first step in our’s process is understanding your unique business needs, objectives, and our cutomes challenges. first step in our process is understanding' ) ); ?></p>
                </div>
            </div>
            <div class="process-item h6-working-process-item tj-hover-active-item">
                <div class="process-step">
                <span>02.</span>
                </div>
                <div class="process-content">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_execution_delivery', 'Execution & Delivery' ) ); ?></h4>
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_he_first_step_in_our_s_process_is_unde_2', 'he first step in our’s process is understanding your unique business needs, objectives, and our cutomes challenges. first step in our process is understanding' ) ); ?></p>
                </div>
            </div>
            <div class="process-item h6-working-process-item tj-hover-active-item">
                <div class="process-step">
                <span>03.</span>
                </div>
                <div class="process-content">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_review_support', 'Review & Support' ) ); ?></h4>
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_he_first_step_in_our_s_process_is_unde_3', 'he first step in our’s process is understanding your unique business needs, objectives, and our cutomes challenges. first step in our process is understanding' ) ); ?></p>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
        <div class="content-wrap slidebar-stickiy">
            <div class="sec-heading style-2 style-6">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_our_process', 'OUR PROCESS' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_seamless_process_and_great_results', 'Seamless Process and Great Results.' ) ); ?></h2>
            </div>
            <p class="desc"><?php echo esc_html( $burger_get( 'texto_we_stay_ahead_of_curve_leveraging_cutt', 'We stay ahead of curve, leveraging cutting-edge are technologies and strategies to competitive' ) ); ?></p>
            <div class="d-none d-lg-inline-flex wow fadeInUp" data-wow-delay=".6s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_request_a_call', 'Request a Call' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
    </div>

    </div>
</section>
<!-- end: Working process Section 3 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
