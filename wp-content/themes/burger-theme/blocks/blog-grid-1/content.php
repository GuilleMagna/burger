<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Blog Section -->
<section class="tj-blog-section section-gap">
    <div class="container">
    <div class="row row-gap-4">
        <div class="col-xl-4 col-md-6">
        <div class="blog-item wow fadeInUp" data-wow-delay=".1s">
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
        <div class="blog-item wow fadeInUp" data-wow-delay=".1s">
            <div class="blog-thumb">
            <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_6', 'blog-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_blog_2_webp', NAKAMA_THEME_URL . '/assets/images/blog/blog-2.webp' ) ); ?>" alt=""></a>
            <div class="blog-date">
                <span class="date">28</span>
                <span class="month"><?php echo esc_html( $burger_get( 'texto_feb_2', 'Feb' ) ); ?></span>
            </div>
            </div>
            <div class="blog-content">
            <div class="blog-meta">
                <span class="categories"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_7', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_2', 'Business' ) ); ?></a></span>
                <span><?php echo esc_html( $burger_get( 'texto_by_2', 'By' ) ); ?> <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_8', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_ellinien_loma_2', 'Ellinien Loma' ) ); ?></a></span>
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
        <div class="blog-item wow fadeInUp" data-wow-delay=".1s">
            <div class="blog-thumb">
            <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_11', 'blog-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_blog_3_webp', NAKAMA_THEME_URL . '/assets/images/blog/blog-3.webp' ) ); ?>" alt=""></a>
            <div class="blog-date">
                <span class="date">28</span>
                <span class="month"><?php echo esc_html( $burger_get( 'texto_feb_3', 'Feb' ) ); ?></span>
            </div>
            </div>
            <div class="blog-content">
            <div class="blog-meta">
                <span class="categories"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_12', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_3', 'Business' ) ); ?></a></span>
                <span><?php echo esc_html( $burger_get( 'texto_by_3', 'By' ) ); ?> <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_13', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_ellinien_loma_3', 'Ellinien Loma' ) ); ?></a></span>
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
        <div class="col-xl-4 col-md-6">
        <div class="blog-item wow fadeInUp" data-wow-delay=".1s">
            <div class="blog-thumb">
            <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_16', 'blog-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_blog_2_webp_2', NAKAMA_THEME_URL . '/assets/images/blog/blog-2.webp' ) ); ?>" alt=""></a>
            <div class="blog-date">
                <span class="date">28</span>
                <span class="month"><?php echo esc_html( $burger_get( 'texto_feb_4', 'Feb' ) ); ?></span>
            </div>
            </div>
            <div class="blog-content">
            <div class="blog-meta">
                <span class="categories"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_17', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_4', 'Business' ) ); ?></a></span>
                <span><?php echo esc_html( $burger_get( 'texto_by_4', 'By' ) ); ?> <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_18', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_ellinien_loma_4', 'Ellinien Loma' ) ); ?></a></span>
            </div>
            <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_19', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_harnessing_digital_transform_a_roadmap_2', 'Harnessing Digital Transform a Roadmap Businesses.' ) ); ?></a>
            </h4>
            <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_blog_details_html_20', 'blog-details.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_read_more_4', 'Read More' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="blog-item wow fadeInUp" data-wow-delay=".1s">
            <div class="blog-thumb">
            <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_21', 'blog-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_blog_3_webp_2', NAKAMA_THEME_URL . '/assets/images/blog/blog-3.webp' ) ); ?>" alt=""></a>
            <div class="blog-date">
                <span class="date">28</span>
                <span class="month"><?php echo esc_html( $burger_get( 'texto_feb_5', 'Feb' ) ); ?></span>
            </div>
            </div>
            <div class="blog-content">
            <div class="blog-meta">
                <span class="categories"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_22', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_5', 'Business' ) ); ?></a></span>
                <span><?php echo esc_html( $burger_get( 'texto_by_5', 'By' ) ); ?> <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_23', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_ellinien_loma_5', 'Ellinien Loma' ) ); ?></a></span>
            </div>
            <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_24', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_mastering_change_management_lessons_fo_2', 'Mastering Change Management Lessons for Businesses.' ) ); ?></a>
            </h4>
            <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_blog_details_html_25', 'blog-details.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_read_more_5', 'Read More' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="blog-item wow fadeInUp" data-wow-delay=".1s">
            <div class="blog-thumb">
            <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_26', 'blog-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_blog_1_webp_2', NAKAMA_THEME_URL . '/assets/images/blog/blog-1.webp' ) ); ?>" alt=""></a>
            <div class="blog-date">
                <span class="date">28</span>
                <span class="month"><?php echo esc_html( $burger_get( 'texto_feb_6', 'Feb' ) ); ?></span>
            </div>
            </div>
            <div class="blog-content">
            <div class="blog-meta">
                <span class="categories"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_27', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_6', 'Business' ) ); ?></a></span>
                <span><?php echo esc_html( $burger_get( 'texto_by_6', 'By' ) ); ?> <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_28', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_ellinien_loma_6', 'Ellinien Loma' ) ); ?></a></span>
            </div>
            <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_29', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_innovative_solutions_for_every_busines_2', 'Innovative Solutions for every Business Success.' ) ); ?></a>
            </h4>
            <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_blog_details_html_30', 'blog-details.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_read_more_6', 'Read More' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
    </div>
    <!-- post pagination -->
    <div class="tj-pagination d-flex justify-content-center">
        <ul>
        <li>
            <span aria-current="page" class="page-numbers current">01</span>
        </li>
        <li>
            <a class="page-numbers" href="#">02</a>
        </li>
        <li>
            <a class="next page-numbers" href="#"><i class="tji-arrow-right-long"></i></a>
        </li>
        </ul>
    </div>
    </div>

</section>
<!-- end: Blog Section -->
