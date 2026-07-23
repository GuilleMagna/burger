<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Blog Section 7 -->
<section class="tj-blog-section h7-blog  section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading style-2 style-7 text-center">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_insights_ideas', 'Insights & Ideas' ) ); ?></span>
            <h2 class="sec-title text-anim"><?php echo esc_html( $burger_get( 'texto_the_ultimate_resource', 'The Ultimate Resource.' ) ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row row-gap-4 h7-blog-wrapper">
        <div class="col-xl-4 col-md-6">
        <div class="blog-item wow fadeInUp" data-wow-delay=".4s">
            <div class="blog-thumb">
            <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html', 'blog-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_blog_1_webp', NAKAMA_THEME_URL . '/assets/images/blog/blog-1.webp' ) ); ?>" alt=""></a>
            <div class="blog-meta">
                <span class="categories"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_2', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business', 'Business' ) ); ?></a></span>
            </div>
            </div>
            <div class="blog-content">
            <div class="blog-date">
                <p> <?php echo esc_html( $burger_get( 'texto_june_20_2025', 'June 20, 2025' ) ); ?></p>
            </div>
            <div class="title-wrapper">
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_3', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_innovative_solutions_for_every_busines', 'Innovative Solutions for every Business Success.' ) ); ?></a>
                </h4>
                <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html', 'service-details.html' ) ); ?>">
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="blog-item wow fadeInUp" data-wow-delay=".4s">
            <div class="blog-thumb">
            <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_4', 'blog-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_blog_2_webp', NAKAMA_THEME_URL . '/assets/images/blog/blog-2.webp' ) ); ?>" alt=""></a>
            <div class="blog-meta">
                <span class="categories"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_5', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_empower', 'Empower' ) ); ?></a></span>
            </div>
            </div>
            <div class="blog-content">
            <div class="blog-date">
                <p> <?php echo esc_html( $burger_get( 'texto_june_20_2025_2', 'June 20, 2025' ) ); ?></p>
            </div>
            <div class="title-wrapper">
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_6', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_harnessing_digital_transform_a_roadmap', 'Harnessing Digital Transform a Roadmap Businesses.' ) ); ?></a>
                </h4>
                <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_2', 'service-details.html' ) ); ?>">
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="blog-item wow fadeInUp" data-wow-delay=".4s">
            <div class="blog-thumb">
            <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_7', 'blog-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_blog_3_webp', NAKAMA_THEME_URL . '/assets/images/blog/blog-3.webp' ) ); ?>" alt=""></a>
            <div class="blog-meta">
                <span class="categories"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_8', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_support', 'Support' ) ); ?></a></span>
            </div>
            </div>
            <div class="blog-content">
            <div class="blog-date">
                <p> <?php echo esc_html( $burger_get( 'texto_june_20_2025_3', 'June 20, 2025' ) ); ?></p>
            </div>
            <div class="title-wrapper">
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_9', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_mastering_change_management_lessons_fo', 'Mastering Change Management Lessons for Businesses.' ) ); ?></a>
                </h4>
                <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_3', 'service-details.html' ) ); ?>">
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Blog Section 7 -->
