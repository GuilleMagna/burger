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
$toptitulo_proyectos    = get_field( 'toptitulo_proyectos' ) ?? '';
$titulo_proyectos       = get_field( 'titulo_proyectos' ) ?? '';
$texto_proyectos        = get_field( 'texto_proyectos' ) ?? '';
$proyectos              = get_field( 'proyectos' ) ?? [];
?>

<!-- start: Project Section 9 -->
<section class="tj-project-section-3 h9-project section-gap section-gap-x">

    <div class="container">
    
        <div class="row">

            <div class="col-12">

                <div class="sec-heading-wrap">

                    <div class="heading-wrap-content">

                        <div class="sec-heading style-8">

                            <? if( $toptitulo_proyectos ): ?>
                                <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                                    <?= $toptitulo_proyectos ?>
                                </span>
                            <? endif ?>

                            <? if( $titulo_proyectos ): ?>
                                <h2 class="sec-title title-anim">
                                    <?= $titulo_proyectos ?>
                                </h2>
                            <? endif ?>

                        </div>

                        <div class="slider-navigation d-none d-md-inline-flex wow fadeInUp" data-wow-delay=".5s">

                            <div class="slider-prev">
                                <span class="anim-icon">
                                    <i class="tji-arrow-left"></i>
                                    <i class="tji-arrow-left"></i>
                                </span>
                            </div>

                            <div class="slider-next">
                                <span class="anim-icon">
                                    <i class="tji-arrow-right"></i>
                                    <i class="tji-arrow-right"></i>
                                </span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="project-wrapper h9-project-wrapper wow fadeInUp" data-wow-delay=".4s">

                    <div class="swiper h9-project-slider">

                        <div class="swiper-wrapper">

                            <? foreach( $proyectos as $item ): extract( $item ) ?>

                                <div class="swiper-slide">

                                    <div class="project-item">

                                        <div class="project-img">
                                            <img src="<?= $imagen ?>" alt="imagen">
                                        </div>

                                        <div class="project-content">

                                            <? if( $categoria ): ?>
                                                <span class="categories">
                                                    <a href="" title="<?= $titulo ?>">
                                                        <?= $categoria ?>
                                                    </a>
                                                </span>
                                            <? endif ?>

                                            <div class="project-text">
                                                <h4 class="title">
                                                    <a href=""><?= $titulo ?></a>
                                                </h4>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            <? endforeach ?>

                        </div>

                        <div class="swiper-pagination-area"></div>
                        
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

</section>
<!-- end: Project Section 9 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
