<?php
$content_fields = array(
    'toptitulo_proyectos' => '',
    'titulo_proyectos' => '',
    'texto_proyectos' => '',
    'filtros_proyectos' => [],
    'proyectos' => [],
    'texto_todos' => 'Todos',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<?php
?>

<!-- start: Project Section 10 -->
<section class="h10-project section-gap tj-sticky-panel-container">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="sec-heading style-3 sec-heading-centered">

                    <?php if( $toptitulo_proyectos ): ?>
                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                            <i class="tji-box"></i> <?= $toptitulo_proyectos ?>
                        </span>
                    <?php endif ?>

                    <?php if( $titulo_proyectos ): ?>
                        <h2 class="sec-title text-anim">
                            <?= $titulo_proyectos ?>
                        </h2>
                    <?php endif ?>

                    <?php if( $filtros_proyectos ): ?>

                        <div class="portfolio-filter h10-project-filter text-center wow fadeInUp" data-wow-delay=".5s">

                            <div class="button-group h10-project-button-group filter-button-group">

                                <button data-filter="*" class="active"><?php echo esc_html( $texto_todos ); ?></button>
                                <?php foreach( $filtros_proyectos as $item ): extract( $item ) ?>
                                    <button data-filter=".<?= sanitize_title($categoria) ?>"><?= $categoria ?></button>
                                <?php endforeach ?>
                                <div class="active-bg"></div>

                            </div>

                        </div>

                    <?php endif ?>

                </div>

            </div>

            <div class="col-12">

                <div class="project-wrapper h7-project-wrapper h10-project-wrapper  portfolio-filter-box">

                    <div class="portfolio-sizer"></div>
                    <div class="gutter-sizer"></div>

                    <?php foreach( $proyectos as $item ): extract( $item ) ?>

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

                                        <?php if( $categoria ): ?>
                                            <span class="categories">
                                                <a href=""><?= $categoria ?></a>
                                            </span>
                                        <?php endif ?>

                                    </div>

                                </div>

                            </div>

                        </div>

                    <?php endforeach ?>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- end: Project Section 10 -->
