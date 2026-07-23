<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<?php
$toptitulo_proyectos    = get_field( 'toptitulo_proyectos' ) ?? '';
$titulo_proyectos       = get_field( 'titulo_proyectos' ) ?? '';
$texto_proyectos        = get_field( 'texto_proyectos' ) ?? '';
$proyectos              = get_field( 'proyectos' ) ?? [];
?>

<!-- start: Project Section 2 -->
<section class="tj-project-section-2 section-gap">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="sec-heading style-2 text-center">

                    <?php if( $toptitulo_proyectos ): ?>
                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                            <?= $toptitulo_proyectos ?>
                        </span>
                    <?php endif ?>

                    <?php if( $titulo_proyectos ): ?>
                        <h2 class="sec-title text-anim">
                            <?= $titulo_proyectos ?> <span></span>
                        </h2>
                    <?php endif ?>

                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="project-wrapper wow fadeInUp" data-wow-delay=".5s">

                    <div class="swiper project-slider">

                        <div class="swiper-wrapper">

                            <?php foreach( $proyectos as $item ): extract( $item ) ?>

                                <div class="swiper-slide">

                                    <div class="project-item">

                                        <div class="project-img" data-bg-image="<?= $imagen ?>"></div>

                                        <div class="project-content">

                                            <?php if( $categoria ): ?>
                                                <span class="categories">
                                                    <a href=""><?= $categoria ?></a>
                                                </span>
                                            <?php endif ?>

                                            <div class="project-text">

                                                <h3 class="title">
                                                    <a href="">
                                                        <?= $titulo ?>
                                                    </a>
                                                </h3>

                                                <a class="project-btn" href="">
                                                    <i class="tji-arrow-right-big"></i>
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

</section>
<!-- end: Project Section 2 -->
