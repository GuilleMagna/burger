<?php
$content_fields = array(
    'texto_let_s_build_future_together' => 'Let’s Build Future Together.',
    'link_contact_html' => 'contact.html',
    'texto_get_started_now' => 'Get Started Now',
    'imagen_assets_images_cta_cta_bg_webp' => NAKAMA_THEME_URL . '/assets/images/cta/cta-bg.webp',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Cta Section -->
<section class="tj-cta-section">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="cta-area">
            <div class="cta-content">
            <h2 class="title title-anim"><?php echo esc_html( $texto_let_s_build_future_together ); ?></h2>
            <div class="cta-btn wow fadeInUp" data-wow-delay=".6s">
                <a class="tj-primary-btn btn-dark" href="<?php echo esc_url( $link_contact_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_get_started_now ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
            <div class="cta-img">
            <img src="<?php echo esc_url( $imagen_assets_images_cta_cta_bg_webp ); ?>" alt="">
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Cta Section -->
