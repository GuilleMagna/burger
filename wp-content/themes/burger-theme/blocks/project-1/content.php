<?php
$content_fields = array(
    'toptitulo_proyectos' => '',
    'titulo_proyectos' => '',
    'texto_proyectos' => '',
    'proyectos' => array(),
    'texto_mas_proyectos' => 'Más Proyectos',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );
$proyectos = is_array( $proyectos ) ? array_values( $proyectos ) : array();
for ( $project_index = 0; $project_index < 4; $project_index++ ) {
    $project = isset( $proyectos[ $project_index ] ) && is_array( $proyectos[ $project_index ] )
        ? $proyectos[ $project_index ]
        : array();
    $proyectos[ $project_index ] = array_merge(
        array( 'imagen' => '', 'categoria' => '', 'titulo' => '' ),
        $project
    );
}
?>

<!-- start: Project Section -->
<section class="tj-project-section section-gap">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="sec-heading-wrap">

                    <?php if( $toptitulo_proyectos ): ?>
                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                            <i class="tji-box"></i> <?= $toptitulo_proyectos ?>
                        </span>
                    <?php endif ?>

                    <div class="heading-wrap-content">

                        <?php if( $titulo_proyectos ): ?>
                            <div class="sec-heading">
                                <h2 class="sec-title title-anim">
                                    <span><?= $titulo_proyectos ?></span>
                                </h2>
                            </div>
                        <?php endif ?>

                        <?php if( $texto_proyectos ): ?>
                            <p class="desc wow fadeInUp" data-wow-delay=".5s">
                                <?= $texto_proyectos ?>
                            </p>
                        <?php endif ?>

                        <div class="btn-wrap wow fadeInUp" data-wow-delay=".6s">
                            <a class="tj-primary-btn" href="">
                                <span class="btn-text"><span><?php echo esc_html( $texto_mas_proyectos ); ?></span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-12">

                <div class="project-area tj-arrange-container">

                    <?php if( !empty($proyectos[0]['imagen']) ): ?>

                        <div class="project-item tj-arrange-item">

                            <div class="project-img" data-bg-image="<?= $proyectos[0]['imagen'] ?>"></div>

                            <div class="project-content">

                                <?php if( $proyectos[0]['categoria'] ): ?>
                                    <span class="categories">
                                        <a href="">
                                            <?= $proyectos[0]['categoria'] ?>
                                        </a>
                                    </span>
                                <?php endif ?>

                                <div class="project-text">

                                    <h4 class="title">
                                        <a href="">
                                            <?= $proyectos[0]['titulo'] ?>
                                        </a>
                                    </h4>

                                    <a class="project-btn" href="">
                                        <i class="tji-arrow-right-long"></i>
                                    </a>

                                </div>

                            </div>

                        </div>

                    <?php endif ?>

                    <?php if( !empty($proyectos[1]['imagen']) ): ?>

                        <div class="project-item tj-arrange-item">

                            <div class="project-img" data-bg-image="<?= $proyectos[1]['imagen'] ?>"></div>

                            <div class="project-content">

                                <?php if( $proyectos[1]['categoria'] ): ?>
                                    <span class="categories">
                                        <a href="">
                                            <?= $proyectos[1]['categoria'] ?>
                                        </a>
                                    </span>
                                <?php endif ?>

                                <div class="project-text">

                                    <h4 class="title">
                                        <a href="">
                                            <?= $proyectos[1]['titulo'] ?>
                                        </a>
                                    </h4>

                                    <a class="project-btn" href="">
                                        <i class="tji-arrow-right-long"></i>
                                    </a>

                                </div>

                            </div>

                        </div>

                    <?php endif ?>

                    <?php if( !empty($proyectos[2]['imagen']) ): ?>

                        <div class="project-item tj-arrange-item">

                            <div class="project-img" data-bg-image="<?= $proyectos[2]['imagen'] ?>"></div>

                            <div class="project-content">

                                <?php if( $proyectos[2]['categoria'] ): ?>
                                    <span class="categories">
                                        <a href="">
                                            <?= $proyectos[2]['categoria'] ?>
                                        </a>
                                    </span>
                                <?php endif ?>

                                <div class="project-text">

                                    <h4 class="title">
                                        <a href="">
                                            <?= $proyectos[2]['titulo'] ?>
                                        </a>
                                    </h4>

                                    <a class="project-btn" href="">
                                        <i class="tji-arrow-right-long"></i>
                                    </a>

                                </div>

                            </div>

                        </div>

                    <?php endif ?>

                    <?php if( !empty($proyectos[3]['imagen']) ): ?>

                        <div class="project-item tj-arrange-item">

                            <div class="project-img" data-bg-image="<?= $proyectos[3]['imagen'] ?>"></div>

                            <div class="project-content">

                                <?php if( $proyectos[3]['categoria'] ): ?>
                                    <span class="categories">
                                        <a href="">
                                            <?= $proyectos[3]['categoria'] ?>
                                        </a>
                                    </span>
                                <?php endif ?>

                                <div class="project-text">

                                    <h4 class="title">
                                        <a href="">
                                            <?= $proyectos[3]['titulo'] ?>
                                        </a>
                                    </h4>

                                    <a class="project-btn" href="">
                                        <i class="tji-arrow-right-long"></i>
                                    </a>

                                </div>

                            </div>

                        </div>

                    <?php endif ?>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- end: Project Section -->
