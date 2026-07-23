<?php
// Block Name: Service Section 7

$subtitulo   = get_field('subtitulo') ?? 'Para quién es';
$descripcion = get_field('descripcion') ?? 'Intia Hub está diseñado para empresas que quieren escalar con inteligencia.';
$boton       = get_field('boton') ?? [];

$items       = get_field('items') ?? [];
?>

<!--section class="h7-service section-gap slidebar-stickiy-container">

    <div class="container">

        <div class="row">

            <div class="col-12 col-lg-4 col-xl-3">

                <div class="section-desc-wrapper slidebar-stickiy">

                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                        <?= $subtitulo ?>
                    </span>

                    <p class="desc mt-4">
                        <?= $descripcion ?>
                    </p>

                    <?php if ($boton): ?>

                        <div class="wow fadeInUp" data-wow-delay=".3s">

                            <a class="tj-primary-btn"
                               href="<?= $boton['url'] ?>"
                               title="<?= $boton['title'] ?>"
                               target="<?= $boton['target'] ?>">

                                <span class="btn-text">
                                    <span><?= $boton['title'] ?></span>
                                </span>

                                <span class="btn-icon">
                                    <i class="tji-arrow-right-long"></i>
                                </span>

                            </a>

                        </div>

                    <?php endif; ?>

                </div>

            </div>

            <div class="col-12 col-lg-8 col-xl-9">

                <div class="service-wrapper h7-service-wrapper">

                    <?php foreach ($items as $item):

                        $titulo      = $item['titulo'] ?? '';
                        $texto       = $item['descripcion'] ?? '';
                        $enlace      = $item['enlace'] ?? [];

                    ?>

                        <div class="service-item h7-service-item wow fadeInUp" data-wow-delay=".3s">

                            <div class="service-content-wrap">

                                <div class="service-title">

                                    <?php if ($enlace): ?>

                                        <h4 class="title">
                                            <a href="<?= $enlace['url'] ?>"
                                               title="<?= $enlace['title'] ?>"
                                               target="<?= $enlace['target'] ?>">
                                                <?= $titulo ?>
                                            </a>
                                        </h4>

                                    <?php else: ?>

                                        <h4 class="title">
                                            <?= $titulo ?>
                                        </h4>

                                    <?php endif; ?>

                                    <p class="desc">
                                        <?= $texto ?>
                                    </p>

                                </div>

                                <?php if ($enlace): ?>

                                    <div class="h7-service-action">

                                        <a class="text-btn"
                                           href="<?= $enlace['url'] ?>"
                                           title="<?= $enlace['title'] ?>"
                                           target="<?= $enlace['target'] ?>">

                                            <span class="btn-icon">
                                                <i class="tji-arrow-right-long"></i>
                                            </span>

                                        </a>

                                    </div>

                                <?php endif; ?>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </div>

</section-->

<section class="h7-service  section-gap slidebar-stickiy-container">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="sec-heading style-2 style-7">
            <div class="row">
            <div class="col-12 col-lg-4 col-xl-3"><span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i
                    class="tji-box"></i>Our Solutions</span></div>
            <div class="col-12 col-lg-8 col-xl-9">
                <div class="sec-title-wrapper">
                <h2 class="sec-title text-anim">Tailor Business Solutions for Corporates.</h2>
                </div>

            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-4 col-xl-3">
        <div class="section-desc-wrapper  slidebar-stickiy">
            <p class="desc">Recognized by industry leaders, our award winning team has a proven.</p>
            <div class=" wow fadeInUp" data-wow-delay=".3s">
            <a class="tj-primary-btn" href="service.html">
                <span class="btn-text"><span>More services</span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>

        </div>
        <div class="col-12 col-lg-8 col-xl-9">
        <div class="service-wrapper h7-service-wrapper">
            <div class="service-item h7-service-item wow fadeInUp" data-wow-delay=".3s">
            <div class="service-content-wrap">
                <div class="service-title">
                <div class="service-icon">
                    <i class="tji-service-5"></i>
                </div>
                <h4 class="title"><a href="service-details.html">Business Strategy Development</a></h4>
                </div>
                <div class="h7-service-action">
                <a class="text-btn" href="service-details.html">
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>
            </div>
            <div class="service-item h7-service-item wow fadeInUp" data-wow-delay=".3s">
            <div class="service-content-wrap">
                <div class="service-title">
                <div class="service-icon">
                    <i class="tji-service-2"></i>
                </div>
                <h4 class="title"><a href="service-details.html">Customer Experience Solutions</a></h4>
                </div>
                <div class="h7-service-action">
                <a class="text-btn" href="service-details.html">
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>

            </div>
            <div class="service-item h7-service-item wow fadeInUp" data-wow-delay=".3s">
            <div class="service-content-wrap">
                <div class="service-title">
                <div class="service-icon">
                    <i class="tji-service-3"></i>
                </div>
                <h4 class="title"><a href="service-details.html">Sustainability and ESG Consulting</a></h4>
                </div>
                <div class="h7-service-action">
                <a class="text-btn" href="service-details.html">
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>

            </div>
            <div class="service-item h7-service-item wow fadeInUp" data-wow-delay=".3s">
            <div class="service-content-wrap">
                <div class="service-title">
                <div class="service-icon">
                    <i class="tji-service-4"></i>
                </div>
                <h4 class="title"><a href="service-details.html">Marketing Strategy & Campaigns</a></h4>
                </div>
                <div class="h7-service-action">
                <a class="text-btn" href="service-details.html">
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>

            </div>
        </div>
        </div>
    </div>
    </div>
</section>