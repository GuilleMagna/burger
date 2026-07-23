<?php
$content_fields = array(
    'toptitulo_proyectos' => '',
    'titulo_proyectos' => '',
    'texto_proyectos' => '',
    'proyectos' => [],
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<?php
?>

<!-- start: Project Section 9 -->
<section class="tj-project-section-3 h9-project section-gap section-gap-x">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="sec-heading-wrap">

                    <div class="heading-wrap-content">

                        <div class="sec-heading style-8">

                            <?php if( $toptitulo_proyectos ): ?>
                                <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                                    <?= $toptitulo_proyectos ?>
                                </span>
                            <?php endif ?>

                            <?php if( $titulo_proyectos ): ?>
                                <h2 class="sec-title title-anim">
                                    <?= $titulo_proyectos ?>
                                </h2>
                            <?php endif ?>

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

                            <?php foreach( $proyectos as $item ): extract( $item ) ?>

                                <div class="swiper-slide">

                                    <div class="project-item">

                                        <div class="project-img">
                                            <img src="<?= $imagen ?>" alt="imagen">
                                        </div>

                                        <div class="project-content">

                                            <?php if( $categoria ): ?>
                                                <span class="categories">
                                                    <a href="" title="<?= $titulo ?>">
                                                        <?= $categoria ?>
                                                    </a>
                                                </span>
                                            <?php endif ?>

                                            <div class="project-text">
                                                <h4 class="title">
                                                    <a href=""><?= $titulo ?></a>
                                                </h4>
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
        <img src="<?php echo esc_url( $imagen_assets_images_shape_pattern_2_svg ); ?>" alt="">
    </div>

    <div class="bg-shape-2">
        <img src="<?php echo esc_url( $imagen_assets_images_shape_pattern_3_svg ); ?>" alt="">
    </div>

</section>
<!-- end: Project Section 9 -->
