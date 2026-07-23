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
<section class="tj-blog-section section-gap">
    <div class="container">
    <div class="row row-gap-5">
        <div class="col-lg-8">
        <div class="row row-gap-4">
            <div class="col-md-6">
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
            <div class="col-md-6">
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
            <div class="col-md-6">
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
            <div class="col-md-6">
            <div class="blog-item wow fadeInUp" data-wow-delay=".1s">
                <div class="blog-thumb">
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_16', 'blog-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_blog_1_webp_2', NAKAMA_THEME_URL . '/assets/images/blog/blog-1.webp' ) ); ?>" alt=""></a>
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
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_19', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_innovative_solutions_for_every_busines_2', 'Innovative Solutions for every Business Success.' ) ); ?></a>
                </h4>
                <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_blog_details_html_20', 'blog-details.html' ) ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_read_more_4', 'Read More' ) ); ?></span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="blog-item wow fadeInUp" data-wow-delay=".1s">
                <div class="blog-thumb">
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_21', 'blog-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_blog_2_webp_2', NAKAMA_THEME_URL . '/assets/images/blog/blog-2.webp' ) ); ?>" alt=""></a>
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
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_24', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_harnessing_digital_transform_a_roadmap_2', 'Harnessing Digital Transform a Roadmap Businesses.' ) ); ?></a>
                </h4>
                <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_blog_details_html_25', 'blog-details.html' ) ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_read_more_5', 'Read More' ) ); ?></span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="blog-item wow fadeInUp" data-wow-delay=".1s">
                <div class="blog-thumb">
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_26', 'blog-details.html' ) ); ?>"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_blog_3_webp_2', NAKAMA_THEME_URL . '/assets/images/blog/blog-3.webp' ) ); ?>" alt=""></a>
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
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_29', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_mastering_change_management_lessons_fo_2', 'Mastering Change Management Lessons for Businesses.' ) ); ?></a>
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
        <div class="col-lg-4">
        <div class="tj-main-sidebar p-0 slidebar-stickiy">
            <div class="tj-sidebar-widget widget-search wow fadeInUp" data-wow-delay=".1s">
            <h4 class="widget-title"><?php echo esc_html( $burger_get( 'texto_search_here', 'Search here' ) ); ?></h4>
            <div class="search-box">
                <form action="#">
                <input type="search" name="search" id="searchTwo" placeholder="Search here">
                <button type="submit" value="search">
                    <i class="tji-search"></i>
                </button>
                </form>
            </div>
            </div>
            <div class="tj-sidebar-widget tj-recent-posts wow fadeInUp" data-wow-delay=".3s">
            <h4 class="widget-title"><?php echo esc_html( $burger_get( 'texto_related_post', 'Related post' ) ); ?></h4>
            <ul>
                <li>
                <div class="post-thumb">
                    <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_31', 'blog-details.html' ) ); ?>"> <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_post_1_webp', NAKAMA_THEME_URL . '/assets/images/blog/post-1.webp' ) ); ?>" alt="Blog"></a>
                </div>
                <div class="post-content">
                    <h6 class="post-title">
                    <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_32', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_how_to_stay_ahead_of_the_business_curv', 'How to Stay Ahead of the Business Curve' ) ); ?></a>
                    </h6>
                    <div class="blog-meta">
                    <ul>
                        <li><?php echo esc_html( $burger_get( 'texto_04_sep_2025', '04 SEP 2025' ) ); ?></li>
                    </ul>
                    </div>
                </div>
                </li>
                <li>
                <div class="post-thumb">
                    <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_33', 'blog-details.html' ) ); ?>"> <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_post_2_webp', NAKAMA_THEME_URL . '/assets/images/blog/post-2.webp' ) ); ?>" alt="Blog"></a>
                </div>
                <div class="post-content">
                    <h6 class="post-title">
                    <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_34', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_how_digital_tools_shaping_the_workforc', 'How Digital Tools Shaping the Workforce' ) ); ?></a>
                    </h6>
                    <div class="blog-meta">
                    <ul>
                        <li><?php echo esc_html( $burger_get( 'texto_02_jan_2025', '02 JAN 2025' ) ); ?></li>
                    </ul>
                    </div>
                </div>
                </li>
                <li>
                <div class="post-thumb">
                    <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_35', 'blog-details.html' ) ); ?>"> <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_post_3_webp', NAKAMA_THEME_URL . '/assets/images/blog/post-3.webp' ) ); ?>" alt="Blog"></a>
                </div>
                <div class="post-content">
                    <h6 class="post-title">
                    <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_36', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_how_to_sustainability_into_your_strate', 'How to Sustainability into your Strategy' ) ); ?></a>
                    </h6>
                    <div class="blog-meta">
                    <ul>
                        <li><?php echo esc_html( $burger_get( 'texto_24_feb_2025', '24 FEB 2025' ) ); ?></li>
                    </ul>
                    </div>
                </div>
                </li>
            </ul>
            </div>
            <div class="tj-sidebar-widget widget-categories wow fadeInUp" data-wow-delay=".5s">
            <h4 class="widget-title"><?php echo esc_html( $burger_get( 'texto_categories', 'Categories' ) ); ?></h4>
            <ul>
                <li><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_37', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_innovation', 'Innovation' ) ); ?><span class="number">(03)</span></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_38', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_leadership', 'Leadership' ) ); ?><span class="number">(02)</span></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_39', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_technology', 'Technology' ) ); ?><span class="number">(03)</span></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_40', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_marketing', 'Marketing' ) ); ?><span class="number">(06)</span></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_41', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_management', 'Management' ) ); ?><span class="number">(04)</span></a></li>
            </ul>
            </div>
            <div class="tj-sidebar-widget widget-tag-cloud wow fadeInUp" data-wow-delay=".7s">
            <h4 class="widget-title"><?php echo esc_html( $burger_get( 'texto_tags', 'Tags' ) ); ?></h4>
            <nav>
                <div class="tagcloud">
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_42', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_growth', 'Growth' ) ); ?></a>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_43', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_success', 'Success' ) ); ?></a>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_44', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_innovate', 'Innovate' ) ); ?></a>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_45', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_lead', 'Lead' ) ); ?></a>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_46', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_impact', 'Impact' ) ); ?></a>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_47', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_focus', 'Focus' ) ); ?></a>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_48', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_tech', 'Tech' ) ); ?></a>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_49', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_optimize', 'Optimize' ) ); ?></a>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_50', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_results', 'Results' ) ); ?></a>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_51', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_drive', 'Drive' ) ); ?></a>
                </div>
            </nav>
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
