<?php
$content_fields = array(
    'texto_growth' => 'Growth',
    'imagen_assets_images_marquee_marquee_1_webp' => NAKAMA_THEME_URL . '/assets/images/marquee/marquee-1.webp',
    'texto_leadership' => 'Leadership',
    'imagen_assets_images_marquee_marquee_2_webp' => NAKAMA_THEME_URL . '/assets/images/marquee/marquee-2.webp',
    'texto_enterprise' => 'Enterprise',
    'imagen_assets_images_marquee_marquee_1_webp_2' => NAKAMA_THEME_URL . '/assets/images/marquee/marquee-1.webp',
    'texto_leadership_2' => 'Leadership',
    'imagen_assets_images_marquee_marquee_2_webp_2' => NAKAMA_THEME_URL . '/assets/images/marquee/marquee-2.webp',
    'texto_enterprise_2' => 'Enterprise',
    'imagen_assets_images_marquee_marquee_1_webp_3' => NAKAMA_THEME_URL . '/assets/images/marquee/marquee-1.webp',
    'texto_leadership_3' => 'Leadership',
    'imagen_assets_images_marquee_marquee_2_webp_3' => NAKAMA_THEME_URL . '/assets/images/marquee/marquee-2.webp',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Marquee Section -->
<section class="tj-marquee-section section-gap-x">
    <div class="marquee-wrapper">
    <div class="swiper marquee-slider">
        <div class="swiper-wrapper">
        <div class="swiper-slide marquee-item">
            <h4 class="marquee-text"><?php echo esc_html( $texto_growth ); ?></h4>
            <div class="marquee-img">
            <img src="<?php echo esc_url( $imagen_assets_images_marquee_marquee_1_webp ); ?>" alt="">
            </div>
        </div>
        <div class="swiper-slide marquee-item">
            <h4 class="marquee-text"><?php echo esc_html( $texto_leadership ); ?></h4>
            <div class="marquee-img">
            <img src="<?php echo esc_url( $imagen_assets_images_marquee_marquee_2_webp ); ?>" alt="">
            </div>
        </div>
        <div class="swiper-slide marquee-item">
            <h4 class="marquee-text"><?php echo esc_html( $texto_enterprise ); ?></h4>
            <div class="marquee-img">
            <img src="<?php echo esc_url( $imagen_assets_images_marquee_marquee_1_webp_2 ); ?>" alt="">
            </div>
        </div>
        <div class="swiper-slide marquee-item">
            <h4 class="marquee-text"><?php echo esc_html( $texto_leadership_2 ); ?></h4>
            <div class="marquee-img">
            <img src="<?php echo esc_url( $imagen_assets_images_marquee_marquee_2_webp_2 ); ?>" alt="">
            </div>
        </div>
        <div class="swiper-slide marquee-item">
            <h4 class="marquee-text"><?php echo esc_html( $texto_enterprise_2 ); ?></h4>
            <div class="marquee-img">
            <img src="<?php echo esc_url( $imagen_assets_images_marquee_marquee_1_webp_3 ); ?>" alt="">
            </div>
        </div>
        <div class="swiper-slide marquee-item">
            <h4 class="marquee-text"><?php echo esc_html( $texto_leadership_3 ); ?></h4>
            <div class="marquee-img">
            <img src="<?php echo esc_url( $imagen_assets_images_marquee_marquee_2_webp_3 ); ?>" alt="">
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Marquee Section -->
