<?php
$content_fields = array(
    'imagen_assets_images_cta_h9_cta_bg_webp' => 'assets/images/cta/h9-cta-bg.webp',
    'texto_let_s_talk_to' => 'Let’s Talk to',
    'imagen_assets_images_team_team_1_webp' => NAKAMA_THEME_URL . '/assets/images/team/team-1.webp',
    'link_contact_html' => 'contact.html',
    'texto_our_expert' => 'Our Expert.',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Cta Section 3 -->
<section class="h9-cta-section section-gap-x">
    <div class="cta-bg" data-bg-image="<?php echo esc_url( $imagen_assets_images_cta_h9_cta_bg_webp ); ?>"></div>
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="cta-content">
            <h2 class="title text-anim"><span><?php echo esc_html( $texto_let_s_talk_to ); ?></span> <span class="cta-img wow fadeInUp"
                data-wow-delay=".3s"><img src="<?php echo esc_url( $imagen_assets_images_team_team_1_webp ); ?>" alt=""><a class="tji-icon-btn"
                href="<?php echo esc_url( $link_contact_html ); ?>"><i class="tji-arrow-right-long"></i></a></span>
            <span><?php echo esc_html( $texto_our_expert ); ?></span>
            </h2>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Cta Section 3 -->
