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

<?
global $post; 
?>
<!-- start: Breadcrumb Section -->
<section class="tj-page-header section-gap-x" data-bg-image="<?= $post->post_thumbnail ?>">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="tj-page-header-content text-center">

                    <h1 class="tj-page-title">
                        <?= $post->post_title ?>
                    </h1>

                    <div class="tj-page-link">

                        <span><i class="tji-home"></i></span>
                        <span>
                            <a href="<?php echo esc_url( $burger_get( 'link_index_html', '/' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_inicio', 'Inicio' ) ); ?></a>
                        </span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span>
                            <span><?= $post->post_title ?></span>
                        </span>
                    </div>

                    
                </div>

            </div>

        </div>

    </div>

    <div class="page-header-overlay" data-bg-image="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_pheader_overlay_webp', NAKAMA_THEME_URL . '/assets/images/shape/pheader-overlay.webp' ) ); ?>"></div>

</section>
<!-- end: Breadcrumb Section -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
