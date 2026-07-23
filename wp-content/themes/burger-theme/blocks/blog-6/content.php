<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Blog Section 6 -->
<section class="tj-blog-section h6-blog section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading style-2 style-6 text-center">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_insights_ideas', 'Insights & Ideas' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_the_ultimate_resource', 'The Ultimate Resource.' ) ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row row-gap-4 h6-blog-wrapper">
        <div class="col-xl-4 col-md-6">
        <div class="blog-item wow fadeInUp" data-wow-delay=".4s">
            <div class="blog-thumb">
            <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html', 'blog-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_blog_1_webp', NAKAMA_THEME_URL . '/assets/images/blog/blog-1.webp' ) ); ?>" alt=""></a>
            <div class="blog-date">
                <span class="date">28</span>
                <span class="month"><?php echo esc_html( $burger_get( 'texto_feb', 'Feb' ) ); ?></span>
            </div>
            </div>
            <div class="blog-content">
            <div class="blog-meta">
                <span class="categories"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_2', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business', 'Business' ) ); ?></a></span>
                <span><?php echo esc_html( $burger_get( 'texto_by', 'By' ) ); ?> <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_3', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_ellinien_loma', 'Ellinien Loma' ) ); ?></a></span>
            </div>
            <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_4', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_innovative_solutions_for_every_busines', 'Innovative Solutions for every Business Success.' ) ); ?></a>
            </h4>
            <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_blog_details_html_5', 'blog-details.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_read_more', 'Read More' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="blog-item wow fadeInUp" data-wow-delay=".4s">
            <div class="blog-thumb">
            <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_6', 'blog-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_blog_2_webp', NAKAMA_THEME_URL . '/assets/images/blog/blog-2.webp' ) ); ?>" alt=""></a>
            <div class="blog-date">
                <span class="date">28</span>
                <span class="month"><?php echo esc_html( $burger_get( 'texto_feb_2', 'Feb' ) ); ?></span>
            </div>
            </div>
            <div class="blog-content">
            <div class="blog-meta">
                <span class="categories"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_7', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_empower', 'Empower' ) ); ?></a></span>
                <span><?php echo esc_html( $burger_get( 'texto_by_2', 'By' ) ); ?> <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_8', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_maurice_dalton', 'Maurice Dalton' ) ); ?></a></span>
            </div>
            <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_9', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_harnessing_digital_transform_a_roadmap', 'Harnessing Digital Transform a Roadmap Businesses.' ) ); ?></a>
            </h4>
            <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_blog_details_html_10', 'blog-details.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_read_more_2', 'Read More' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="blog-item wow fadeInUp" data-wow-delay=".4s">
            <div class="blog-thumb">
            <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_11', 'blog-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_blog_3_webp', NAKAMA_THEME_URL . '/assets/images/blog/blog-3.webp' ) ); ?>" alt=""></a>
            <div class="blog-date">
                <span class="date">28</span>
                <span class="month"><?php echo esc_html( $burger_get( 'texto_feb_3', 'Feb' ) ); ?></span>
            </div>
            </div>
            <div class="blog-content">
            <div class="blog-meta">
                <span class="categories"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_12', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_support', 'Support' ) ); ?></a></span>
                <span><?php echo esc_html( $burger_get( 'texto_by_3', 'By' ) ); ?> <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_13', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_thierry_lawson', 'Thierry Lawson' ) ); ?></a></span>
            </div>
            <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_14', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_mastering_change_management_lessons_fo', 'Mastering Change Management Lessons for Businesses.' ) ); ?></a>
            </h4>
            <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_blog_details_html_15', 'blog-details.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_read_more_3', 'Read More' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Blog Section 6 -->
