<?
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
                            <a href="index.html">Inicio</a>
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

    <div class="page-header-overlay" data-bg-image="<?= NAKAMA_THEME_URL ?>/assets/images/shape/pheader-overlay.webp"></div>

</section>
<!-- end: Breadcrumb Section -->