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

<!-- start: Fun fact Section 2 -->
<section class=" h8-funfact section-gap">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="sec-heading style-3 sec-heading-centered">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_our_fun_fact', 'OUR FUN FACT' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_numbers_and_facts_that_define_performa', 'Numbers and facts that define performance.' ) ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-12 col-lg-6">
        <div class="h8-funfact-banner wow fadeInLeft" data-wow-delay=".3s">
            <div class="h8-funfact-banner-img">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_funfact_h8_funfact_banner_w', NAKAMA_THEME_URL . '/assets/images/funfact/h8-funfact-banner.webp' ) ); ?>" alt="">
            </div>
            <div class="box-area">
            <div class="call-box wow fadeInUp" data-wow-delay=".5s">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_get_started_free_call', 'Get Started Free Call?' ) ); ?> </h4>
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
                <h4 class="counter-title"><?php echo esc_html( $burger_get( 'texto_complete_project', 'Complete Project' ) ); ?></h4>
                <p class="count-text"><?php echo esc_html( $burger_get( 'texto_through_a_combination_of_data_driven_i', 'Through a combination of data-driven insights and innovative approaches.' ) ); ?>
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
                <h4 class="counter-title"><?php echo esc_html( $burger_get( 'texto_faster_growtht', 'Faster Growtht' ) ); ?></h4>
                <p class="count-text"><?php echo esc_html( $burger_get( 'texto_through_a_combination_of_data_driven_i_2', 'Through a combination of data-driven insights and innovative approaches.' ) ); ?>
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
                <h4 class="counter-title"><?php echo esc_html( $burger_get( 'texto_awards_archived', 'Awards Archived' ) ); ?></h4>
                <p class="count-text"><?php echo esc_html( $burger_get( 'texto_through_a_combination_of_data_driven_i_3', 'Through a combination of data-driven insights and innovative approaches.' ) ); ?>
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

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
