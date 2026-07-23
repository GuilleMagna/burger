<?
$toptitulo_proyectos    = get_field( 'toptitulo_proyectos' ) ?? '';
$titulo_proyectos       = get_field( 'titulo_proyectos' ) ?? '';
$texto_proyectos        = get_field( 'texto_proyectos' ) ?? '';
$filtros_proyectos      = get_field( 'filtros_proyectos' ) ?? [];
$proyectos              = get_field( 'proyectos' ) ?? [];
?>

<!-- start: Project Section 10 -->
<section class="h10-project section-gap tj-sticky-panel-container">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="sec-heading style-3 sec-heading-centered">

                    <? if( $toptitulo_proyectos ): ?>
                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                            <i class="tji-box"></i> <?= $toptitulo_proyectos ?>
                        </span>
                    <? endif ?>

                    <? if( $titulo_proyectos ): ?>
                        <h2 class="sec-title text-anim">
                            <?= $titulo_proyectos ?>
                        </h2>
                    <? endif ?>

                    <? if( $filtros_proyectos ): ?>

                        <div class="portfolio-filter h10-project-filter text-center wow fadeInUp" data-wow-delay=".5s">

                            <div class="button-group h10-project-button-group filter-button-group">

                                <button data-filter="*" class="active">Todos</button>
                                <? foreach( $filtros_proyectos as $item ): extract( $item ) ?>
                                    <button data-filter=".<?= sanitize_title($categoria) ?>"><?= $categoria ?></button>
                                <? endforeach ?>
                                <div class="active-bg"></div>

                            </div>

                        </div>

                    <? endif ?>

                </div>

            </div>

            <div class="col-12">

                <div class="project-wrapper h7-project-wrapper h10-project-wrapper  portfolio-filter-box">

                    <div class="portfolio-sizer"></div>
                    <div class="gutter-sizer"></div>

                    <? foreach( $proyectos as $item ): extract( $item ) ?>

                        <div class="project-item h4-project-item portfolio-filter-item <?= sanitize_title($categoria) ?>">

                            <div class="project-img " data-cursor-text="Ver más">
                                <a href="">
                                    <img src="<?= $imagen ?>" alt="Image">
                                </a>
                            </div>

                            <div class="project-content">

                                <div class="project-text">

                                    <div>

                                        <h4 class="title">
                                            <a href="">
                                                <?= $titulo ?>
                                            </a>
                                        </h4>

                                        <? if( $categoria ): ?>
                                            <span class="categories">
                                                <a href=""><?= $categoria ?></a>
                                            </span>
                                        <? endif ?>

                                    </div>

                                </div>

                            </div>

                        </div>

                    <? endforeach ?>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- end: Project Section 10 -->