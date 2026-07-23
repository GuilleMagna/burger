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

$toptitulo_proyectos    = get_field( 'toptitulo_proyectos' );
$titulo_proyectos       = get_field( 'titulo_proyectos' );
$texto_proyectos        = get_field( 'texto_proyectos' );
$proyectos              = get_field( 'proyectos' );
?>

<!-- start: Project Section 6 -->
<section class="h6-project section-gap section-gap-x">

    <div class="container">

        <div class="row">
            
            <div class="col-12">
                    
                <div class="heading-wrap-content">
                    <div class="sec-heading style-2 style-6">

                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                            <i class="tji-box"></i> <?= $toptitulo_proyectos ?>
                        </span>
                        <h2 class="sec-title title-anim">
                            <?= $titulo_proyectos ?>
                        </h2>
                    </div>
                    <div class="btn-area wow fadeInUp" data-wow-delay=".8s">
                    <a class="tj-primary-btn" href="">
                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_m_s_productos', 'M´s productos' ) ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="h6-project-inner wow fadeInUp" data-wow-delay="0.6s">

                    <? foreach( $proyectos as $item ): extract( $item ) ?>
                    
                        <div class=" project-item h6-project-item ">

                            <div class="project-item-inner h6-project-item-inner" data-bg-image="<?= $imagen ?>">

                                <div class="project-content">

                                    <span class="categories">
                                        <a href=""><?= $categoria ?></a>
                                    </span>

                                    <div class="project-text">

                                        <h3 class="title">
                                            <a href="">
                                                <?= $titulo ?>
                                            </a>
                                        </h3>

                                        <a class="project-btn" href="">
                                            <i class="tji-arrow-right-long"></i>
                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    <? endforeach ?>

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
        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_shape_blur_svg', NAKAMA_THEME_URL . '/assets/images/shape/shape-blur.svg' ) ); ?>" alt="">
    </div>

</section>
<!-- end: Project Section 6 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
