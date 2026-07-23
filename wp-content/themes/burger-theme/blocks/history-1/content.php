<?php
$__block_fields = function_exists('get_fields') ? (array) get_fields() : [];
$__block_cache_key = 'acf_block_' . md5(($block['id'] ?? basename(__DIR__)) . serialize($__block_fields));

if (($__block_cached_html = get_transient($__block_cache_key)) !== false) {
    echo $__block_cached_html;
    return;
}

ob_start();
?>
<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: History Section -->
<section class="tj-history-area section-bottom-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="timeline">
            <div class="timeline-inner wow fadeInUp" data-wow-delay="0.1s">
            <div class="date">2008</div>
            <div class="content">
                <div class="top">
                <span>01.</span>
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_founding_and_early_years', 'Founding and Early Years' ) ); ?></h4>
                <p><?php echo wp_kses_post( $burger_get( 'texto_our_mission_is_to_empowers_businesses', 'Our mission is to empowers businesses off all size to thrive in an businesses ever changing marketplace. We are committed to the delivering exceptional in the value.' ) ); ?></p>
                </div>
                <div class="bottom">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_history_history_1_webp', NAKAMA_THEME_URL . '/assets/images/history/history-1.webp' ) ); ?>" alt="history">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_history_history_2_webp', NAKAMA_THEME_URL . '/assets/images/history/history-2.webp' ) ); ?>" alt="history">
                </div>
            </div>
            </div>
            <div class="timeline-inner wow fadeInUp" data-wow-delay="0.3s">
            <div class="date">2012</div>
            <div class="content">
                <div class="top">
                <span>02.</span>
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_expansion_and_growth', 'Expansion and Growth' ) ); ?></h4>
                <p><?php echo wp_kses_post( $burger_get( 'texto_our_mission_is_to_empowers_businesses_2', 'Our mission is to empowers businesses off all size to thrive in an businesses ever changing marketplace. We are committed to the delivering exceptional in the value.' ) ); ?></p>
                </div>
                <div class="bottom">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_history_history_3_webp', NAKAMA_THEME_URL . '/assets/images/history/history-3.webp' ) ); ?>" alt="history">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_history_history_4_webp', NAKAMA_THEME_URL . '/assets/images/history/history-4.webp' ) ); ?>" alt="history">
                </div>
            </div>
            </div>
            <div class="timeline-inner wow fadeInUp" data-wow-delay="0.5s">
            <div class="date">2016</div>
            <div class="content">
                <div class="top">
                <span>03.</span>
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_innovation_and_industry_leadership', 'Innovation and Industry Leadership' ) ); ?></h4>
                <p><?php echo wp_kses_post( $burger_get( 'texto_our_mission_is_to_empowers_businesses_3', 'Our mission is to empowers businesses off all size to thrive in an businesses ever changing marketplace. We are committed to the delivering exceptional in the value.' ) ); ?></p>
                </div>
                <div class="bottom">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_history_history_5_webp', NAKAMA_THEME_URL . '/assets/images/history/history-5.webp' ) ); ?>" alt="history">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_history_history_6_webp', NAKAMA_THEME_URL . '/assets/images/history/history-6.webp' ) ); ?>" alt="history">
                </div>
            </div>
            </div>
            <div class="timeline-inner wow fadeInUp" data-wow-delay="0.7s">
            <div class="date">2020</div>
            <div class="content">
                <div class="top">
                <span>04.</span>
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_global_expansion_and_diversification', 'Global Expansion and Diversification' ) ); ?></h4>
                <p><?php echo wp_kses_post( $burger_get( 'texto_our_mission_is_to_empowers_businesses_4', 'Our mission is to empowers businesses off all size to thrive in an businesses ever changing marketplace. We are committed to the delivering exceptional in the value.' ) ); ?></p>
                </div>
                <div class="bottom">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_history_history_7_webp', NAKAMA_THEME_URL . '/assets/images/history/history-7.webp' ) ); ?>" alt="history">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_history_history_8_webp', NAKAMA_THEME_URL . '/assets/images/history/history-8.webp' ) ); ?>" alt="history">
                </div>
            </div>
            </div>
            <div class="timeline-inner wow fadeInUp" data-wow-delay="0.9s">
            <div class="date">2024</div>
            <div class="content">
                <div class="top">
                <span>05.</span>
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_looking_ahead', 'Looking Ahead' ) ); ?></h4>
                <p><?php echo wp_kses_post( $burger_get( 'texto_our_mission_is_to_empowers_businesses_5', 'Our mission is to empowers businesses off all size to thrive in an businesses ever changing marketplace. We are committed to the delivering exceptional in the value.' ) ); ?></p>
                </div>
                <div class="bottom">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_history_history_9_webp', NAKAMA_THEME_URL . '/assets/images/history/history-9.webp' ) ); ?>" alt="history">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_history_history_10_webp', NAKAMA_THEME_URL . '/assets/images/history/history-10.webp' ) ); ?>" alt="history">
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: History Section -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
