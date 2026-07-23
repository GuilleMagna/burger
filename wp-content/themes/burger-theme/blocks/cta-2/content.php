<?php
$content_fields = array(
    'texto_reach_out_to_our_support_team' => 'Reach Out To Our Support Team?',
    'link_contact_html' => 'contact.html',
    'texto_contact_us' => 'Contact us',
    'imagen_assets_images_shape_shape_blur_svg' => NAKAMA_THEME_URL . '/assets/images/shape/shape-blur.svg',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Cta Section 2 -->
<section class="tj-cta-section h7-cta section-gap-x">
    <div class="container-fluid">
    <div class="row">
        <div class="col-12">
        <div class="container">
            <div class="row">
            <div class="col-12">
                <div class="cta-area h7-cta-inner">
                <div class="cta-content">
                    <h2 class="title text-anim"><?php echo esc_html( $texto_reach_out_to_our_support_team ); ?></h2>
                    <div class="cta-btn wow fadeInUp" data-wow-delay=".6s">
                    <a class="tj-primary-btn tj-primary-btn-lg" href="<?php echo esc_url( $link_contact_html ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $texto_contact_us ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>
                </div>

                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>

    <div class="bg-shape-3">
    <img src="<?php echo esc_url( $imagen_assets_images_shape_shape_blur_svg ); ?>" alt="">
    </div>
</section>
<!-- end: Cta Section 2 -->
