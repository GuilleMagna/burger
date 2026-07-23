<?php
$content_fields = array(
    'texto_founding_and_early_years' => 'Founding and Early Years',
    'texto_our_mission_is_to_empowers_businesses' => 'Our mission is to empowers businesses off all size to thrive in an businesses ever changing marketplace. We are committed to the delivering exceptional in the value.',
    'imagen_assets_images_history_history_1_webp' => NAKAMA_THEME_URL . '/assets/images/history/history-1.webp',
    'imagen_assets_images_history_history_2_webp' => NAKAMA_THEME_URL . '/assets/images/history/history-2.webp',
    'texto_expansion_and_growth' => 'Expansion and Growth',
    'texto_our_mission_is_to_empowers_businesses_2' => 'Our mission is to empowers businesses off all size to thrive in an businesses ever changing marketplace. We are committed to the delivering exceptional in the value.',
    'imagen_assets_images_history_history_3_webp' => NAKAMA_THEME_URL . '/assets/images/history/history-3.webp',
    'imagen_assets_images_history_history_4_webp' => NAKAMA_THEME_URL . '/assets/images/history/history-4.webp',
    'texto_innovation_and_industry_leadership' => 'Innovation and Industry Leadership',
    'texto_our_mission_is_to_empowers_businesses_3' => 'Our mission is to empowers businesses off all size to thrive in an businesses ever changing marketplace. We are committed to the delivering exceptional in the value.',
    'imagen_assets_images_history_history_5_webp' => NAKAMA_THEME_URL . '/assets/images/history/history-5.webp',
    'imagen_assets_images_history_history_6_webp' => NAKAMA_THEME_URL . '/assets/images/history/history-6.webp',
    'texto_global_expansion_and_diversification' => 'Global Expansion and Diversification',
    'texto_our_mission_is_to_empowers_businesses_4' => 'Our mission is to empowers businesses off all size to thrive in an businesses ever changing marketplace. We are committed to the delivering exceptional in the value.',
    'imagen_assets_images_history_history_7_webp' => NAKAMA_THEME_URL . '/assets/images/history/history-7.webp',
    'imagen_assets_images_history_history_8_webp' => NAKAMA_THEME_URL . '/assets/images/history/history-8.webp',
    'texto_looking_ahead' => 'Looking Ahead',
    'texto_our_mission_is_to_empowers_businesses_5' => 'Our mission is to empowers businesses off all size to thrive in an businesses ever changing marketplace. We are committed to the delivering exceptional in the value.',
    'imagen_assets_images_history_history_9_webp' => NAKAMA_THEME_URL . '/assets/images/history/history-9.webp',
    'imagen_assets_images_history_history_10_webp' => NAKAMA_THEME_URL . '/assets/images/history/history-10.webp',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

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
                <h4 class="title"><?php echo esc_html( $texto_founding_and_early_years ); ?></h4>
                <p><?php echo wp_kses_post( $texto_our_mission_is_to_empowers_businesses ); ?></p>
                </div>
                <div class="bottom">
                <img src="<?php echo esc_url( $imagen_assets_images_history_history_1_webp ); ?>" alt="history">
                <img src="<?php echo esc_url( $imagen_assets_images_history_history_2_webp ); ?>" alt="history">
                </div>
            </div>
            </div>
            <div class="timeline-inner wow fadeInUp" data-wow-delay="0.3s">
            <div class="date">2012</div>
            <div class="content">
                <div class="top">
                <span>02.</span>
                <h4 class="title"><?php echo esc_html( $texto_expansion_and_growth ); ?></h4>
                <p><?php echo wp_kses_post( $texto_our_mission_is_to_empowers_businesses_2 ); ?></p>
                </div>
                <div class="bottom">
                <img src="<?php echo esc_url( $imagen_assets_images_history_history_3_webp ); ?>" alt="history">
                <img src="<?php echo esc_url( $imagen_assets_images_history_history_4_webp ); ?>" alt="history">
                </div>
            </div>
            </div>
            <div class="timeline-inner wow fadeInUp" data-wow-delay="0.5s">
            <div class="date">2016</div>
            <div class="content">
                <div class="top">
                <span>03.</span>
                <h4 class="title"><?php echo esc_html( $texto_innovation_and_industry_leadership ); ?></h4>
                <p><?php echo wp_kses_post( $texto_our_mission_is_to_empowers_businesses_3 ); ?></p>
                </div>
                <div class="bottom">
                <img src="<?php echo esc_url( $imagen_assets_images_history_history_5_webp ); ?>" alt="history">
                <img src="<?php echo esc_url( $imagen_assets_images_history_history_6_webp ); ?>" alt="history">
                </div>
            </div>
            </div>
            <div class="timeline-inner wow fadeInUp" data-wow-delay="0.7s">
            <div class="date">2020</div>
            <div class="content">
                <div class="top">
                <span>04.</span>
                <h4 class="title"><?php echo esc_html( $texto_global_expansion_and_diversification ); ?></h4>
                <p><?php echo wp_kses_post( $texto_our_mission_is_to_empowers_businesses_4 ); ?></p>
                </div>
                <div class="bottom">
                <img src="<?php echo esc_url( $imagen_assets_images_history_history_7_webp ); ?>" alt="history">
                <img src="<?php echo esc_url( $imagen_assets_images_history_history_8_webp ); ?>" alt="history">
                </div>
            </div>
            </div>
            <div class="timeline-inner wow fadeInUp" data-wow-delay="0.9s">
            <div class="date">2024</div>
            <div class="content">
                <div class="top">
                <span>05.</span>
                <h4 class="title"><?php echo esc_html( $texto_looking_ahead ); ?></h4>
                <p><?php echo wp_kses_post( $texto_our_mission_is_to_empowers_businesses_5 ); ?></p>
                </div>
                <div class="bottom">
                <img src="<?php echo esc_url( $imagen_assets_images_history_history_9_webp ); ?>" alt="history">
                <img src="<?php echo esc_url( $imagen_assets_images_history_history_10_webp ); ?>" alt="history">
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: History Section -->
