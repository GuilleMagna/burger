<?php
$__block_fields = function_exists('get_fields') ? (array) get_fields() : [];
$__block_cache_key = 'acf_block_' . md5(($block['id'] ?? basename(__DIR__)) . serialize($__block_fields));

if (($__block_cached_html = get_transient($__block_cache_key)) !== false) {
    echo $__block_cached_html;
    return;
}

ob_start();
?>
<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<?
$toptitulo_proyectos    = get_field( 'toptitulo_proyectos' );
$titulo_proyectos       = get_field( 'titulo_proyectos' );
$texto_proyectos        = get_field( 'texto_proyectos' );
$proyectos              = get_field( 'proyectos' );
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
                        <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_portfolio_html', 'portfolio.html' ) ); ?>">
                            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_mas_productos', 'Más productos' ) ); ?> </span></span>
                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                        </a>
                    </div>
                </div>

            </div>


            <div class="col-12 col-lg-8 ">

                <div class="project-wrapper h7-project-wrapper">

                    <? foreach( $proyectos as $item ): extract( $item ) ?>

                        <div class="project-item h4-project-item tj-sticky-panel">

                            <div class="project-img">
                                <img src="<?= $imagen ?>" alt="Image">
                            </div>

                            <div class="project-content">

                                <div class="project-text">

                                    <div>
                                        <h3 class="title">
                                            <a href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html', 'portfolio-details.html' ) ); ?>">
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

                    <? endforeach ?>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- end: Project Section 7 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
