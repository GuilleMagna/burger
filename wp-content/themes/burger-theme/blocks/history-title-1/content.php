<?php
$content_fields = array(
    'texto_our_background' => 'Our background',
    'texto_discover_how_we_have_evolved_our_compa' => 'Discover how we have Evolved our Company’s on',
    'texto_legacy' => 'Legacy.',
    'texto_our_mission_is_to_empowers_businesses' => 'Our mission is to empowers businesses off all size to thrive in an businesses ever changing marketplace. We are committed to the delivering exceptional in the value through our strategic inset, innovative approaches. Our mission is to empower businesses of all sizes to thrive.',
    'texto_committed_to_the_delivering_exceptiona' => 'Committed to the delivering exceptional in the value through our strategic inset, innovative approaches empower.',
    'link_about_html' => 'about.html',
    'texto_learn_more' => 'Learn More',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: History title Section -->
<section class="tj-history section-gap">
    <div class="container">
    <div class="row rg-30 justify-content-between">
        <div class="col-xl-5">
        <div class="sec-heading mb-0">
            <span class="sub-title wow fadeInUp" data-wow-delay="0.1s"><i class="tji-box"></i> <?php echo esc_html( $texto_our_background ); ?>
            </span>
            <h2 class="sec-title text-anim">
            <?php echo esc_html( $texto_discover_how_we_have_evolved_our_compa ); ?> <span><?php echo esc_html( $texto_legacy ); ?></span>
            </h2>

        </div>
        </div>
        <div class="col-xl-5">
        <div class="desc wow fadeInUp" data-wow-delay="0.3s">
            <p>
            <?php echo wp_kses_post( $texto_our_mission_is_to_empowers_businesses ); ?>
            </p>
            <p>
            <?php echo wp_kses_post( $texto_committed_to_the_delivering_exceptiona ); ?>
            </p>
        </div>
        <div class="history-btn mt-30 wow fadeInUp" data-wow-delay="0.5s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $link_about_html ); ?>">
            <span class="btn-text"><span><?php echo esc_html( $texto_learn_more ); ?></span></span>
            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>

        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: History tile Section -->
