<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};

$toptitulo_proyectos    = get_field( 'toptitulo_proyectos' ) ?? '';
$titulo_proyectos       = get_field( 'titulo_proyectos' ) ?? '';
$texto_proyectos        = get_field( 'texto_proyectos' ) ?? '';
$proyectos              = get_field( 'proyectos' ) ?? [];
?>

<!-- start: Project Section 8 -->
<section class="h8-project section-gap section-gap-x">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="sec-heading-wrap">

                    <?php if( $toptitulo_proyectos ): ?>
                        <div class="sec-heading style-3 m-0">
                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                                <i class="tji-box"></i> <?= $toptitulo_proyectos ?>
                            </span>
                        </div>
                    <?php endif ?>

                    <div class="heading-wrap-content">

                        <?php if( $titulo_proyectos ): ?>
                            <div class="sec-heading style-3">
                                <h2 class="sec-title title-anim">
                                    <?= $titulo_proyectos ?>
                                </h2>
                            </div>
                        <?php endif ?>

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

    <div class="container container-end-align  wow bounceInRight" data-wow-delay=".3s">

        <div class="row">

            <div class="col-12">

                <div class="project-wrapper h7-project-wrapper h8-project-wrapper">

                    <div class="h8-project-slider swiper">

                        <div class="swiper-wrapper">

                            <?php foreach( $proyectos as $item ): extract( $item ) ?>

                                <div class="swiper-slide">

                                    <div class="project-item h4-project-item">

                                        <div class="project-img">
                                            <img src="<?= $imagen ?>" alt="Image">
                                        </div>

                                        <div class="project-content">

                                            <div class="project-text">

                                                <div>
                                                    <h3 class="title">
                                                        <a href="">
                                                            <?= $titulo ?>
                                                        </a>
                                                    </h3>

                                                    <?php if( $categoria ): ?>
                                                        <span class="categories">
                                                            <a href="" title="<?= $titulo ?>">
                                                                <?= $categoria ?>
                                                            </a>
                                                        </span>
                                                    <?php endif ?>

                                                </div>

                                                <a class="tji-icon-btn" href="">
                                                    <i class="tji-arrow-right-long"></i>
                                                </a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            <?php endforeach ?>

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
<!-- end: Project Section 8 -->
