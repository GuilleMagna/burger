<?php
$content_fields = array(
    'toptitulo_proyectos' => '',
    'titulo_proyectos' => '',
    'texto_proyectos' => '',
    'proyectos' => [],
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<?php
?>

<!-- start: Project Section 4 -->
<section class="tj-project-section-4 section-gap">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="sec-heading style-4 text-center">

                    <?php if( $toptitulo_proyectos ): ?>
                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                            <i class="tji-box"></i> <?= $toptitulo_proyectos ?>
                        </span>
                    <?php endif ?>

                    <?php if( $titulo_proyectos ): ?>
                        <h2 class="sec-title title-anim">
                            <?= $titulo_proyectos ?>
                        </h2>
                    <?php endif ?>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-12">

                <div class="project-wrapper wow fadeInUp" data-wow-delay=".5s">

                    <div class="swiper project-slider-3">

                        <div class="swiper-wrapper">

                            <?php foreach( $proyectos as $item ): extract( $item ) ?>

                                <div class="swiper-slide">

                                    <div class="project-item h4-project-item">

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
                                                    <a href="" title="<?= $titulo ?>">
                                                        <?= $titulo ?>
                                                    </a>
                                                </h4>

                                                <a class="tji-icon-btn" href="">
                                                    <i class="tji-arrow-right-long"></i>
                                                </a>

                                            </div>
                                        </div>

                                        <div class="project-img">
                                            <img src="<?= $imagen ?>" alt="Image">
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

</section>
<!-- end: Project Section 4 -->
