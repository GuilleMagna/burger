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

<!-- start: Banner Section 6 -->
<section class="h9-hero">
    <div class="h9-hero-inner">
    <div class="h9-hero-bg-image" data-bg-image="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_h9_hero_bg_webp', 'assets/images/hero/h9-hero-bg.webp' ) ); ?>"></div>
    <div class="h9-hero-item-wrapper">
        <div class="h9-hero-content">
        <h1 class="h9-hero-title text-anim"><?php echo esc_html( $burger_get( 'texto_empower', 'Empower' ) ); ?> <span class="wow fadeInLeft" data-wow-delay="0.3s"></span>
            <?php echo esc_html( $burger_get( 'texto_your_business', 'Your Business.' ) ); ?>
        </h1>
        <div class="h9-hero-desc-area">
            <h4 class="title wow fadeInUp" data-wow-delay="0.5s"><?php echo esc_html( $burger_get( 'texto_solutions_that_scale', 'Solutions That Scale.' ) ); ?></h4>
            <div class="desc-inner wow fadeInUp" data-wow-delay="0.7s">
            <p class="desc"><?php echo esc_html( $burger_get( 'texto_recognized_by_the_industry_leaders_of', 'Recognized by the industry leaders, of our award-winning team has are' ) ); ?> <a
                href="<?php echo esc_url( $burger_get( 'link_portfolio_html', 'portfolio.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_proven_record', 'Proven record' ) ); ?></a> <?php echo esc_html( $burger_get( 'texto_of_delivering_excellence_across_an_pro', 'of delivering excellence across an projects. Recognized by the industry leaders, of our award.' ) ); ?></p>
            <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_get_started', 'Get Started' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        <div class="h9-hero-social wow fadeInUp" data-wow-delay="0.9s">
            <div class="social-links style-3">
            <ul>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_facebook_com', 'https://www.facebook.com/' ) ); ?>" target="_blank"><i
                    class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_instagram_com', 'https://www.instagram.com/' ) ); ?>" target="_blank"><i
                    class="fa-brands fa-instagram"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_x_com', 'https://x.com/' ) ); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_linkedin_com', 'https://www.linkedin.com/' ) ); ?>" target="_blank"><i
                    class="fa-brands fa-linkedin-in"></i></a>
                </li>
            </ul>
            </div>
        </div>
        </div>
        <div class="h9-hero-img  img-parallax wow fadeInUp" data-wow-delay="0.9s">
        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_hero_h9_hero_img_webp', NAKAMA_THEME_URL . '/assets/images/hero/h9-hero-img.webp' ) ); ?>" alt="">
        </div>
    </div>
    </div>
    <div class="h7-hero-shape h9-hero-shape-1 wow fadeInUpBig" data-wow-delay="1s"><img
        class="tj-anim-move-var-big" src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_h7_hero_blur_1_png', NAKAMA_THEME_URL . '/assets/images/shape/h7-hero-blur-1.png' ) ); ?>" alt=""></div>
    <div class="h7-hero-shape h9-hero-shape-2 wow fadeInDownBig" data-wow-delay="1.2s"><img
        class="tj-anim-move-var-big-reverse" src="<?php echo esc_url( $burger_get( 'imagen_assets_images_shape_h7_hero_blur_2_png', NAKAMA_THEME_URL . '/assets/images/shape/h7-hero-blur-2.png' ) ); ?>" alt=""></div>
</section>
<!-- end: Banner Section 6 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
