<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Error Section -->
    <section class="tj-error-section">
        <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="tj-error-wrap text-center">
                <div class="tj-error-content">
                <div class="error-img">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_404_error_webp', NAKAMA_THEME_URL . '/assets/images/404/error.webp' ) ); ?>" alt="">
                </div>
                <h2 class="error-title title-anim"><?php echo esc_html( $burger_get( 'texto_oooop_page_not_found', 'Oooop! Page not found' ) ); ?></h2>
                <div class="error-desc"><?php echo wp_kses_post( $burger_get( 'texto_you_are_here_because_you_entered_the_a', 'You are here because you entered the address of a page that no longer exists or has been moved to a different address' ) ); ?></div>
                <a class="tj-primary-btn error-btn" href="<?php echo esc_url( $burger_get( 'link_index_html', 'index.html' ) ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_go_to_home_page', 'Go to Home Page' ) ); ?></span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- end: Error Section -->
