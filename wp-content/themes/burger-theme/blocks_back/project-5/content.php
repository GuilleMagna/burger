<?
$toptitulo_proyectos    = get_field( 'toptitulo_proyectos' ) ?? '';
$titulo_proyectos       = get_field( 'titulo_proyectos' ) ?? '';
$texto_proyectos        = get_field( 'texto_proyectos' ) ?? '';
$proyectos              = get_field( 'proyectos' ) ?? [];
?>

<!-- start: Project Section 5 -->
<section class="h5-project">

    <div class="tj-scroll-slider  section-gap">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="sec-heading-wrap style-3">

                        <? if( $toptitulo_proyectos ): ?>
                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                                <i class="tji-box"></i> <?= $toptitulo_proyectos ?>
                            </span>
                        <? endif ?>

                        <div class="heading-wrap-content">

                            <? if( $titulo_proyectos ): ?>
                                <div class="sec-heading style-3">
                                    <h2 class="sec-title text-anim">
                                        <?= $titulo_proyectos ?>
                                    </h2>
                                </div>
                            <? endif ?>

                            <div class="btn-area wow fadeInUp" data-wow-delay=".8s">
                                <a class="tj-primary-btn" href="">
                                    <span class="btn-text"><span>Conocer m&aacute;s</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-12">

                    <div class="project-wrapper h5-project-wrapper">

                        <? foreach( $proyectos as $item ): extract( $item ) ?>

                            <div class="h5-project-item-wrapper tj-scroll-slider-item">

                                <div class="project-item h4-project-item  h5-project-item">

                                    <div class="project-img">
                                        <img src="<?= $imagen ?>" alt="Image">
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
                                            <h3 class="title">
                                                <a href="">
                                                    <?= $titulo ?>
                                                </a>
                                            </h3>
                                        </div>

                                        <? if( $categoria ): ?>
                                            <p class="desc">
                                                <?= $texto ?>
                                            </p>
                                        <? endif ?>

                                        <a class="tj-primary-btn" href="">
                                            <span class="btn-text"><span>Ver m&aacute;s</span></span>
                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                        </a>
                                        
                                    </div>

                                </div>

                            </div>
                            
                        <? endforeach ?>

                    </div>
                </div>

            </div>

        </div>

    </div>

</section>
<!-- end: Project Section 5 -->