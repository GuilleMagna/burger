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

<!-- start: Strategy Slider -->
<section class="h5-strategy section-gap ">
    <div class="container gap-30-30">
    <div class="row ">
        <div class="col-12">
        <div class="sec-heading style-3 h5-strategy-heading">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_choose_the_best', 'Choose the Best' ) ); ?></span>
            <h2 class="sec-title text-anim "><?php echo wp_kses_post( $burger_get( 'texto_committed_delivering_measurable_result', 'Committed Delivering Measurable Results and Building from the Lasting Relationships through out trust and innovation and corporate shared' ) ); ?></h2>
            <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_about_html', 'about.html' ) ); ?>">
            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more', 'Learn More' ) ); ?></span></span>
            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
        </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
        <div class="h5-strategy-item h5-strategy-item-1 wow fadeInUp" data-wow-delay=".3s">
            <h4 class="h5-strategy-title"><?php echo esc_html( $burger_get( 'texto_rebranding_strategy_for_a_growing', 'Rebranding Strategy for a Growing' ) ); ?></h4>
            <div class="h5-strategy-avatar">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_strategy_strategy_avatar_we', './assets/images/strategy/strategy-avatar.webp' ) ); ?>" alt="">
            </div>
            <div class="h5-strategy-counter">
            <div class="count-inner h5-strategy-counter-inner">
                <div class="inline-content">
                <span class="odometer countup-number" data-count="200"></span>
                </div>
                <span class="count-text"><?php echo esc_html( $burger_get( 'texto_satisfied_customers_work_with_our_bexo', 'Satisfied customers work with our Bexon.' ) ); ?></span>
            </div>
            </div>
        </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
        <div class="h5-strategy-item h5-strategy-item-2 wow fadeInUp" data-wow-delay=".4s">
            <h4 class="h5-strategy-title"><?php echo esc_html( $burger_get( 'texto_rebranding_strategy_for_a_growing_2', 'Rebranding Strategy for a Growing' ) ); ?></h4>
            <div class="h5-strategy-chart">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_strategy_strategy_chart_web', './assets/images/strategy/strategy-chart.webp' ) ); ?>" alt="">
            </div>
        </div>
        </div>
        <div class="col-12 col-lg-4">
        <div class="h5-strategy-item h5-strategy-item-3 wow fadeInUp" data-wow-delay=".5s">
            <h4 class="h5-strategy-title"><?php echo esc_html( $burger_get( 'texto_rebranding_strategy_for_a_growing_3', 'Rebranding Strategy for a Growing' ) ); ?></h4>
            <p class="h5-strategy-desc"><?php echo esc_html( $burger_get( 'texto_our_team_are_always_available_to_addre', 'Our team are always available to addressed our concerns, providing quick solution.' ) ); ?></p>
            <div class="h5-strategy-tag-wrapper">

            <a class="h5-strategy-tag" href="#">
                <?php echo esc_html( $burger_get( 'texto_growth', 'Growth' ) ); ?>
            </a>
            <a class="h5-strategy-tag" href="#">
                <?php echo esc_html( $burger_get( 'texto_success', 'Success' ) ); ?>
            </a>
            <a class="h5-strategy-tag" href="#">
                <?php echo esc_html( $burger_get( 'texto_innovate', 'Innovate' ) ); ?>
            </a>
            <a class="h5-strategy-tag" href="#">
                <?php echo esc_html( $burger_get( 'texto_lead', 'Lead' ) ); ?>
            </a>
            <a class="h5-strategy-tag" href="#">
                <?php echo esc_html( $burger_get( 'texto_impact', 'Impact' ) ); ?>
            </a>
            <a class="h5-strategy-tag" href="#">
                <?php echo esc_html( $burger_get( 'texto_focus', 'Focus' ) ); ?>
            </a>
            <a class="h5-strategy-tag" href="#">
                <?php echo esc_html( $burger_get( 'texto_tech', 'Tech' ) ); ?>
            </a>

            </div>


        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Strategy Slider -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
