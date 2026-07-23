<?
$toptitulo_proyectos    = get_field( 'toptitulo_proyectos' ) ?? '';
$titulo_proyectos       = get_field( 'titulo_proyectos' ) ?? '';
$texto_proyectos        = get_field( 'texto_proyectos' ) ?? '';
$proyectos              = get_field( 'proyectos' ) ?? [];
?>

<!-- start: Project Section 4 -->
<section class="tj-project-section-4 section-gap">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="sec-heading style-4 text-center">

                    <? if( $toptitulo_proyectos ): ?>
                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                            <i class="tji-box"></i> <?= $toptitulo_proyectos ?>
                        </span>
                    <? endif ?>

                    <? if( $titulo_proyectos ): ?>
                        <h2 class="sec-title title-anim">
                            <?= $titulo_proyectos ?>
                        </h2>
                    <? endif ?>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-12">

                <div class="project-wrapper wow fadeInUp" data-wow-delay=".5s">

                    <div class="swiper project-slider-3">

                        <div class="swiper-wrapper">

                            <? foreach( $proyectos as $item ): extract( $item ) ?>

                                <div class="swiper-slide">

                                    <div class="project-item h4-project-item">

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
                            
                            <? endforeach ?>
                        </div>

                        <div class="swiper-pagination-area"></div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- end: Project Section 4 -->