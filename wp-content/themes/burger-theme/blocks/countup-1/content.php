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

<!-- start: Countup Section -->
<div class="tj-countup-section">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="countup-wrap">
            <div class="countup-item">
            <div class="inline-content">
                <span class="odometer countup-number" data-count="93"></span>
                <span class="count-plus">%</span>
            </div>
            <span class="count-text"><?php echo esc_html( $burger_get( 'texto_projects_completed', 'Projects Completed.' ) ); ?></span>
            <span class="count-separator" data-bg-image="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_separator_svg', NAKAMA_THEME_URL . '/assets/images/shape/separator.svg' ) ); ?>"></span>
            </div>
            <div class="countup-item">
            <div class="inline-content">
                <span class="odometer countup-number" data-count="20"></span>
                <span class="count-plus">M</span>
            </div>
            <span class="count-text"><?php echo esc_html( $burger_get( 'texto_reach_worldwide', 'Reach Worldwide' ) ); ?></span>
            <span class="count-separator" data-bg-image="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_separator_svg_2', NAKAMA_THEME_URL . '/assets/images/shape/separator.svg' ) ); ?>"></span>
            </div>
            <div class="countup-item">
            <div class="inline-content">
                <span class="odometer countup-number" data-count="8.5"></span>
                <span class="count-plus">X</span>
            </div>
            <span class="count-text"><?php echo esc_html( $burger_get( 'texto_faster_growth', 'Faster Growth' ) ); ?></span>
            <span class="count-separator" data-bg-image="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_separator_svg_3', NAKAMA_THEME_URL . '/assets/images/shape/separator.svg' ) ); ?>"></span>
            </div>
            <div class="countup-item">
            <div class="inline-content">
                <span class="odometer countup-number" data-count="100"></span>
                <span class="count-plus">+</span>
            </div>
            <span class="count-text"><?php echo esc_html( $burger_get( 'texto_awards_archived', 'Awards Archived' ) ); ?></span>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- end: Countup Section -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
