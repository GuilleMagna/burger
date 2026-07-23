<?php
$content_fields = array(
    'texto_projects_completed' => 'Projects Completed.',
    'imagen_assets_images_shape_separator_svg' => NAKAMA_THEME_URL . '/assets/images/shape/separator.svg',
    'texto_reach_worldwide' => 'Reach Worldwide',
    'imagen_assets_images_shape_separator_svg_2' => NAKAMA_THEME_URL . '/assets/images/shape/separator.svg',
    'texto_faster_growth' => 'Faster Growth',
    'imagen_assets_images_shape_separator_svg_3' => NAKAMA_THEME_URL . '/assets/images/shape/separator.svg',
    'texto_awards_archived' => 'Awards Archived',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Countup Section -->
<div class="tj-countup-section">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="countup-wrap">
            <div class="countup-item">
            <div class="inline-content">
                <span class="odometer countup-number" data-count="93"></span>
                <span class="count-plus">%</span>
            </div>
            <span class="count-text"><?php echo esc_html( $texto_projects_completed ); ?></span>
            <span class="count-separator" data-bg-image="<?php echo esc_url( $imagen_assets_images_shape_separator_svg ); ?>"></span>
            </div>
            <div class="countup-item">
            <div class="inline-content">
                <span class="odometer countup-number" data-count="20"></span>
                <span class="count-plus">M</span>
            </div>
            <span class="count-text"><?php echo esc_html( $texto_reach_worldwide ); ?></span>
            <span class="count-separator" data-bg-image="<?php echo esc_url( $imagen_assets_images_shape_separator_svg_2 ); ?>"></span>
            </div>
            <div class="countup-item">
            <div class="inline-content">
                <span class="odometer countup-number" data-count="8.5"></span>
                <span class="count-plus">X</span>
            </div>
            <span class="count-text"><?php echo esc_html( $texto_faster_growth ); ?></span>
            <span class="count-separator" data-bg-image="<?php echo esc_url( $imagen_assets_images_shape_separator_svg_3 ); ?>"></span>
            </div>
            <div class="countup-item">
            <div class="inline-content">
                <span class="odometer countup-number" data-count="100"></span>
                <span class="count-plus">+</span>
            </div>
            <span class="count-text"><?php echo esc_html( $texto_awards_archived ); ?></span>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- end: Countup Section -->
