<?php
$content_fields = array(
    'link_index_html' => '/',
    'texto_inicio' => 'Inicio',
    'imagen_assets_images_shape_pheader_overlay_webp' => NAKAMA_THEME_URL . '/assets/images/shape/pheader-overlay.webp',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<?php
global $post;
?>
<!-- start: Breadcrumb Section -->
<section class="tj-page-header section-gap-x" data-bg-image="<?= $post->post_thumbnail ?>">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="tj-page-header-content text-center">

                    <h1 class="tj-page-title">
                        <?= $post->post_title ?>
                    </h1>

                    <div class="tj-page-link">

                        <span><i class="tji-home"></i></span>
                        <span>
                            <a href="<?php echo esc_url( $link_index_html ); ?>"><?php echo esc_html( $texto_inicio ); ?></a>
                        </span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span>
                            <span><?= $post->post_title ?></span>
                        </span>
                    </div>


                </div>

            </div>

        </div>

    </div>

    <div class="page-header-overlay" data-bg-image="<?php echo esc_url( $imagen_assets_images_shape_pheader_overlay_webp ); ?>"></div>

</section>
<!-- end: Breadcrumb Section -->
