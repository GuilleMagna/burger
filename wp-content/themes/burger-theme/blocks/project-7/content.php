<?php
$content_fields = array(
    'toptitulo_proyectos' => '',
    'titulo_proyectos' => '',
    'texto_proyectos' => '',
    'proyectos' => array(),
    'link_portfolio_html' => 'portfolio.html',
    'texto_mas_productos' => 'Más productos',
    'link_portfolio_details_html' => 'portfolio-details.html',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<?php
?>

<!-- start: Project Section 7 -->
<section class="h7-project section-gap tj-sticky-panel-container">

    <div class="container">

        <div class="row">

            <div class="col-12 col-lg-4 ">

                <div class="sec-heading style-2 style-7 tj-sticky-panel">

                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                        <i class="tji-box"></i> <?= $toptitulo_proyectos ?>
                    </span>

                    <h2 class="sec-title text-anim">
                        <?= $titulo_proyectos ?>
                    </h2>

                    <div class=" wow fadeInUp" data-wow-delay=".3s">
                        <a class="tj-primary-btn" href="<?php echo esc_url( $link_portfolio_html ); ?>">
                            <span class="btn-text"><span><?php echo esc_html( $texto_mas_productos ); ?> </span></span>
                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                        </a>
                    </div>
                </div>

            </div>


            <div class="col-12 col-lg-8 ">

                <div class="project-wrapper h7-project-wrapper">

                    <?php foreach( $proyectos as $item ): extract( $item ) ?>

                        <div class="project-item h4-project-item tj-sticky-panel">

                            <div class="project-img">
                                <img src="<?= $imagen ?>" alt="Image">
                            </div>

                            <div class="project-content">

                                <div class="project-text">

                                    <div>
                                        <h3 class="title">
                                            <a href="<?php echo esc_url( $link_portfolio_details_html ); ?>">
                                                <?= $titulo ?>
                                            </a>
                                        </h3>
                                        <span class="categories">
                                            <a href=""><?= $categoria ?></a>
                                        </span>
                                    </div>

                                    <a class="tji-icon-btn" href="">
                                        <i class="tji-arrow-right-long"></i>
                                    </a>

                                </div>
                            </div>

                        </div>

                    <?php endforeach ?>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- end: Project Section 7 -->
