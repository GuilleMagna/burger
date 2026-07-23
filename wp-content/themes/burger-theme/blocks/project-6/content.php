<?php
$content_fields = array(
    'toptitulo_proyectos' => '',
    'titulo_proyectos' => '',
    'texto_proyectos' => '',
    'proyectos' => array(),
    'texto_m_s_productos' => 'M´s productos',
    'imagen_assets_images_shape_pattern_2_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-2.svg',
    'imagen_assets_images_shape_pattern_3_svg' => NAKAMA_THEME_URL . '/assets/images/shape/pattern-3.svg',
    'imagen_assets_images_shape_shape_blur_svg' => NAKAMA_THEME_URL . '/assets/images/shape/shape-blur.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );
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
                        <span class="btn-text"><span><?php echo esc_html( $texto_m_s_productos ); ?></span></span>
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

                    <?php foreach( $proyectos as $item ): extract( $item ) ?>

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

                    <?php endforeach ?>

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

    <div class="bg-shape-3">
        <img src="<?php echo esc_url( $imagen_assets_images_shape_shape_blur_svg ); ?>" alt="">
    </div>

</section>
<!-- end: Project Section 6 -->
