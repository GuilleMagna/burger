<?php
$content_fields = array(
    'imagen_assets_images_404_error_webp' => NAKAMA_THEME_URL . '/assets/images/404/error.webp',
    'texto_oooop_page_not_found' => 'Oooop! Page not found',
    'texto_you_are_here_because_you_entered_the_a' => 'You are here because you entered the address of a page that no longer exists or has been moved to a different address',
    'link_index_html' => 'index.html',
    'texto_go_to_home_page' => 'Go to Home Page',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Error Section -->
    <section class="tj-error-section">
        <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="tj-error-wrap text-center">
                <div class="tj-error-content">
                <div class="error-img">
                    <img src="<?php echo esc_url( $imagen_assets_images_404_error_webp ); ?>" alt="">
                </div>
                <h2 class="error-title title-anim"><?php echo esc_html( $texto_oooop_page_not_found ); ?></h2>
                <div class="error-desc"><?php echo wp_kses_post( $texto_you_are_here_because_you_entered_the_a ); ?></div>
                <a class="tj-primary-btn error-btn" href="<?php echo esc_url( $link_index_html ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $texto_go_to_home_page ); ?></span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- end: Error Section -->
