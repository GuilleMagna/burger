<?php
$content_fields = array(
    'texto_our_achievements' => 'Our Achievements',
    'texto_our_pursuit_of_perfection_has_recogniz' => 'Our pursuit of perfection has recognized',
    'imagen_assets_images_award_award_1_png' => NAKAMA_THEME_URL . '/assets/images/award/award-1.png',
    'imagen_assets_images_award_award_1_white_png' => NAKAMA_THEME_URL . '/assets/images/award/award-1-white.png',
    'texto_inspire' => 'Inspire',
    'texto_growth_award' => 'Growth Award',
    'texto_winner' => 'Winner',
    'imagen_assets_images_award_award_2_png' => NAKAMA_THEME_URL . '/assets/images/award/award-2.png',
    'imagen_assets_images_award_award_2_white_png' => NAKAMA_THEME_URL . '/assets/images/award/award-2-white.png',
    'texto_pinnacle' => 'Pinnacle',
    'texto_excellence_award' => 'Excellence Award',
    'texto_nominee' => 'Nominee',
    'imagen_assets_images_award_award_3_png' => NAKAMA_THEME_URL . '/assets/images/award/award-3.png',
    'imagen_assets_images_award_award_3_white_png' => NAKAMA_THEME_URL . '/assets/images/award/award-3-white.png',
    'texto_mastermind' => 'Mastermind',
    'texto_excellence_award_2' => 'Excellence Award',
    'texto_distinguished' => 'Distinguished',
    'imagen_assets_images_award_award_4_png' => NAKAMA_THEME_URL . '/assets/images/award/award-4.png',
    'imagen_assets_images_award_award_4_white_png' => NAKAMA_THEME_URL . '/assets/images/award/award-4-white.png',
    'texto_game' => 'Game',
    'texto_changer_award' => 'Changer Award',
    'texto_champion' => 'Champion',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Award Section -->
<section class="tj-award section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading sec-heading-centered style-2 style-6 ">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_our_achievements ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $texto_our_pursuit_of_perfection_has_recogniz ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-12">
        <div class="tj-award-wrapper tj-active-bg-wrapper">
            <div class="tj-award-item tj-active-bg-item wow fadeInUp" data-wow-delay=".3s">
            <div class="tj-award-item-inner">
                <div class="row align-items-center justify-content-between">
                <div class="col-md-4 tj-award-img-wrapper">
                    <h6 class="tj-award-index">
                    01.
                    </h6>
                    <div class="tj-award-img"><img src="<?php echo esc_url( $imagen_assets_images_award_award_1_png ); ?>" alt=""><img
                        src="<?php echo esc_url( $imagen_assets_images_award_award_1_white_png ); ?>" alt=""></div>
                </div>
                <div class="col-md-4 col-lg-3 tj-award-title-wrapper">
                    <h5 class="tj-award-title">
                    <?php echo esc_html( $texto_inspire ); ?><br>
                    <?php echo esc_html( $texto_growth_award ); ?>
                    </h5>
                </div>
                <div class="col-md-4 tj-award-date-wrapper">
                    <h6 class="tj-award-result">
                    <?php echo esc_html( $texto_winner ); ?>
                    </h6>
                    <h6 class="tj-award-date">
                    2010
                    </h6>
                </div>
                </div>
            </div>
            </div>
            <div class="tj-award-item tj-active-bg-item wow fadeInUp" data-wow-delay=".3s">
            <div class="tj-award-item-inner">
                <div class="row align-items-center justify-content-between">
                <div class="col-md-4 tj-award-img-wrapper">
                    <h6 class="tj-award-index">
                    02.
                    </h6>
                    <div class="tj-award-img"><img src="<?php echo esc_url( $imagen_assets_images_award_award_2_png ); ?>" alt="">
                    <img src="<?php echo esc_url( $imagen_assets_images_award_award_2_white_png ); ?>" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 tj-award-title-wrapper">
                    <h5 class="tj-award-title">
                    <?php echo esc_html( $texto_pinnacle ); ?><br>
                    <?php echo esc_html( $texto_excellence_award ); ?>
                    </h5>
                </div>
                <div class="col-md-4 tj-award-date-wrapper">
                    <h6 class="tj-award-result">
                    <?php echo esc_html( $texto_nominee ); ?>
                    </h6>
                    <h6 class="tj-award-date">
                    2016
                    </h6>
                </div>
                </div>
            </div>
            </div>
            <div class="tj-award-item tj-active-bg-item wow fadeInUp" data-wow-delay=".3s">
            <div class="tj-award-item-inner">
                <div class="row align-items-center justify-content-between">
                <div class="col-md-4 tj-award-img-wrapper">
                    <h6 class="tj-award-index">
                    03.
                    </h6>
                    <div class="tj-award-img"><img src="<?php echo esc_url( $imagen_assets_images_award_award_3_png ); ?>" alt="">
                    <img src="<?php echo esc_url( $imagen_assets_images_award_award_3_white_png ); ?>" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 tj-award-title-wrapper">
                    <h5 class="tj-award-title">
                    <?php echo esc_html( $texto_mastermind ); ?> <br> <?php echo esc_html( $texto_excellence_award_2 ); ?>
                    </h5>
                </div>
                <div class="col-md-4 tj-award-date-wrapper">
                    <h6 class="tj-award-result">
                    <?php echo esc_html( $texto_distinguished ); ?>
                    </h6>
                    <h6 class="tj-award-date">
                    2020
                    </h6>
                </div>
                </div>
            </div>
            </div>
            <div class="tj-award-item tj-active-bg-item wow fadeInUp" data-wow-delay=".3s">
            <div class="tj-award-item-inner">
                <div class="row align-items-center justify-content-between">
                <div class="col-md-4 tj-award-img-wrapper">
                    <h6 class="tj-award-index">
                    04.
                    </h6>
                    <div class="tj-award-img"><img src="<?php echo esc_url( $imagen_assets_images_award_award_4_png ); ?>" alt="">
                    <img src="<?php echo esc_url( $imagen_assets_images_award_award_4_white_png ); ?>" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 tj-award-title-wrapper">
                    <h5 class="tj-award-title">
                    <?php echo esc_html( $texto_game ); ?> <br>
                    <?php echo esc_html( $texto_changer_award ); ?>
                    </h5>
                </div>
                <div class="col-md-4 tj-award-date-wrapper">
                    <h6 class="tj-award-result">
                    <?php echo esc_html( $texto_champion ); ?>
                    </h6>
                    <h6 class="tj-award-date">
                    2025
                    </h6>
                </div>
                </div>
            </div>
            </div>
            <span class="active-bg"></span>
        </div>
        </div>

    </div>
    </div>
</section>
<!-- end: Award Section -->
