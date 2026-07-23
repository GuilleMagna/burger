<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
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
                    <h2 class="title text-anim"><?php echo esc_html( $burger_get( 'texto_reach_out_to_our_support_team', 'Reach Out To Our Support Team?' ) ); ?></h2>
                    <div class="cta-btn wow fadeInUp" data-wow-delay=".6s">
                    <a class="tj-primary-btn tj-primary-btn-lg" href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_contact_us', 'Contact us' ) ); ?></span></span>
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
    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_shape_blur_svg', NAKAMA_THEME_URL . '/assets/images/shape/shape-blur.svg' ) ); ?>" alt="">
    </div>
</section>
<!-- end: Cta Section 2 -->
