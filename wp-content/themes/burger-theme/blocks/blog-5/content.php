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

<!-- start: Blog Section 5 -->
<section class="h5-blog section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading sec-heading-centered style-3">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_read_blogs', 'READ BLOGS' ) ); ?></span>
            <h2 class="sec-title text-anim"><?php echo esc_html( $burger_get( 'texto_strategies_and_insights', 'Strategies and Insights.' ) ); ?></h2>
        </div>

        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="h5-blog-wrapper ">
            <div class="blog-item style-2 h5-blog-item wow fadeInUp" data-wow-delay=".3s">
            <div class="blog-thumb">
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html', 'blog-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_h5_blog_1_webp', NAKAMA_THEME_URL . '/assets/images/blog/h5-blog-1.webp' ) ); ?>" alt=""></a>
                <div class="blog-date">
                <span class="date">28</span>
                <span class="month"><?php echo esc_html( $burger_get( 'texto_feb', 'Feb' ) ); ?></span>
                </div>
            </div>
            <div class="blog-content">
                <div class="title-area">
                <div class="blog-meta">
                    <span class="categories"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_2', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business', 'Business' ) ); ?></a></span>
                    <span><?php echo esc_html( $burger_get( 'texto_by', 'By' ) ); ?> <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_3', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_ellinien_loma', 'Ellinien Loma' ) ); ?></a></span>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_4', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_innovative_solutions_for_every_busines', 'Innovative Solutions for every Business' ) ); ?></a></h4>
                <p class="desc"><?php echo wp_kses_post( $burger_get( 'texto_the_curve_whether_you_re_looking_to_st', 'The curve. Whether you\'re looking to streamline operations, enhance customer experiences, or explore new market opportunities, our tailored solutions are designed to empower your business.' ) ); ?></p>
                </div>
                <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_blog_details_html_5', 'blog-details.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_read_more', 'Read More' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
            <div class="blog-item  style-2 h5-blog-item wow fadeInUp" data-wow-delay=".4s">
            <div class="blog-thumb">
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_6', 'blog-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_h5_blog_2_webp', NAKAMA_THEME_URL . '/assets/images/blog/h5-blog-2.webp' ) ); ?>" alt=""></a>
                <div class="blog-date">
                <span class="date">28</span>
                <span class="month"><?php echo esc_html( $burger_get( 'texto_feb_2', 'Feb' ) ); ?></span>
                </div>
            </div>
            <div class="blog-content">
                <div class="title-area">
                <div class="blog-meta">
                    <span class="categories"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_7', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_2', 'Business' ) ); ?></a></span>
                    <span><?php echo esc_html( $burger_get( 'texto_by_2', 'By' ) ); ?> <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_8', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_ellinien_loma_2', 'Ellinien Loma' ) ); ?></a></span>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_9', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_mastering_change_management_lessons_fo', 'Mastering Change Management Lessons for Businesses.' ) ); ?></a></h4>
                </div>
                <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_blog_details_html_10', 'blog-details.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_read_more_2', 'Read More' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
            <div class="blog-item style-2 h5-blog-item wow fadeInUp" data-wow-delay=".5s">
            <div class="blog-thumb">
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_11', 'blog-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_h5_blog_3_webp', NAKAMA_THEME_URL . '/assets/images/blog/h5-blog-3.webp' ) ); ?>" alt=""></a>
                <div class="blog-date">
                <span class="date">28</span>
                <span class="month"><?php echo esc_html( $burger_get( 'texto_feb_3', 'Feb' ) ); ?></span>
                </div>
            </div>
            <div class="blog-content">
                <div class="title-area">
                <div class="blog-meta">
                    <span class="categories"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_12', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_3', 'Business' ) ); ?></a></span>
                    <span><?php echo esc_html( $burger_get( 'texto_by_3', 'By' ) ); ?> <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_13', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_ellinien_loma_3', 'Ellinien Loma' ) ); ?></a></span>
                </div>
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_14', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_harnessing_digital_transform_a_roadmap', 'Harnessing Digital Transform a Roadmap Businesses.' ) ); ?></a></h4>
                </div>
                <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_blog_details_html_15', 'blog-details.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_read_more_3', 'Read More' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Blog Section 5 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
