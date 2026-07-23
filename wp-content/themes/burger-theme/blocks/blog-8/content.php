<?php
$content_fields = array(
    'texto_insights_ideas' => 'Insights & Ideas',
    'texto_read_our_latest_blog_news' => 'Read Our Latest Blog & News.',
    'link_blog_html' => 'blog.html',
    'texto_more_blogs' => 'More Blogs',
    'link_blog_details_html' => 'blog-details.html',
    'imagen_assets_images_blog_blog_1_webp' => NAKAMA_THEME_URL . '/assets/images/blog/blog-1.webp',
    'texto_feb' => 'Feb',
    'link_blog_details_html_2' => 'blog-details.html',
    'texto_business' => 'Business',
    'texto_by' => 'By',
    'link_blog_details_html_3' => 'blog-details.html',
    'texto_ellinien_loma' => 'Ellinien Loma',
    'link_blog_details_html_4' => 'blog-details.html',
    'texto_harnessing_digital_transform_a_roadmap' => 'Harnessing Digital Transform a Roadmap Businesses.',
    'link_blog_details_html_5' => 'blog-details.html',
    'texto_read_more' => 'Read More',
    'link_blog_details_html_6' => 'blog-details.html',
    'imagen_assets_images_blog_blog_5_webp' => NAKAMA_THEME_URL . '/assets/images/blog/blog-5.webp',
    'texto_feb_2' => 'Feb',
    'link_blog_details_html_7' => 'blog-details.html',
    'texto_business_2' => 'Business',
    'texto_by_2' => 'By',
    'link_blog_details_html_8' => 'blog-details.html',
    'texto_ellinien_loma_2' => 'Ellinien Loma',
    'link_blog_details_html_9' => 'blog-details.html',
    'texto_mastering_change_management_lessons_fo' => 'Mastering Change Management Lessons for Businesses.',
    'link_blog_details_html_10' => 'blog-details.html',
    'texto_read_more_2' => 'Read More',
    'link_blog_details_html_11' => 'blog-details.html',
    'imagen_assets_images_blog_blog_4_webp' => NAKAMA_THEME_URL . '/assets/images/blog/blog-4.webp',
    'texto_feb_3' => 'Feb',
    'link_blog_details_html_12' => 'blog-details.html',
    'texto_business_3' => 'Business',
    'texto_by_3' => 'By',
    'link_blog_details_html_13' => 'blog-details.html',
    'texto_ellinien_loma_3' => 'Ellinien Loma',
    'link_blog_details_html_14' => 'blog-details.html',
    'texto_harnessing_digital_transform_a_roadmap_2' => 'Harnessing Digital Transform a Roadmap Businesses.',
    'link_blog_details_html_15' => 'blog-details.html',
    'texto_read_more_3' => 'Read More',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Blog Section 8 -->
<section class="tj-blog-section-2 h8-blog section-gap slidebar-stickiy-container">
    <div class="container">
    <div class="row">
        <div class="col-12 col-lg-4 col-xl-3">
        <div class="sec-heading style-3 slidebar-stickiy">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_insights_ideas ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $texto_read_our_latest_blog_news ); ?></h2>
            <div class="h8-blog-more wow fadeInUp" data-wow-delay=".8s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $link_blog_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_more_blogs ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
        <div class="col-12 col-lg-8 col-xl-9">
        <div class="blog-wrapper h8-blog-wrapper ">
            <div class="blog-item style-2 wow fadeInUp" data-wow-delay=".3s">
            <div class="blog-thumb">
                <a href="<?php echo esc_url( $link_blog_details_html ); ?>"><img src="<?php echo esc_url( $imagen_assets_images_blog_blog_1_webp ); ?>" alt=""></a>
                <div class="blog-date">
                <span class="date">28</span>
                <span class="month"><?php echo esc_html( $texto_feb ); ?></span>
                </div>
            </div>
            <div class="blog-content">
                <div class="title-area">
                <div class="blog-meta">
                    <span class="categories"><a href="<?php echo esc_url( $link_blog_details_html_2 ); ?>"><?php echo esc_html( $texto_business ); ?></a></span>
                    <span><?php echo esc_html( $texto_by ); ?> <a href="<?php echo esc_url( $link_blog_details_html_3 ); ?>"><?php echo esc_html( $texto_ellinien_loma ); ?></a></span>
                </div>
                <h3 class="title"><a href="<?php echo esc_url( $link_blog_details_html_4 ); ?>"><?php echo esc_html( $texto_harnessing_digital_transform_a_roadmap ); ?></a></h3>
                </div>
                <a class="text-btn" href="<?php echo esc_url( $link_blog_details_html_5 ); ?>">
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                <span class="btn-text"><span><?php echo esc_html( $texto_read_more ); ?></span></span>
                </a>
            </div>
            </div>
            <div class="blog-item style-2 wow fadeInUp" data-wow-delay=".4s">
            <div class="blog-thumb">
                <a href="<?php echo esc_url( $link_blog_details_html_6 ); ?>"><img src="<?php echo esc_url( $imagen_assets_images_blog_blog_5_webp ); ?>" alt=""></a>
                <div class="blog-date">
                <span class="date">28</span>
                <span class="month"><?php echo esc_html( $texto_feb_2 ); ?></span>
                </div>
            </div>
            <div class="blog-content">
                <div class="title-area">
                <div class="blog-meta">
                    <span class="categories"><a href="<?php echo esc_url( $link_blog_details_html_7 ); ?>"><?php echo esc_html( $texto_business_2 ); ?></a></span>
                    <span><?php echo esc_html( $texto_by_2 ); ?> <a href="<?php echo esc_url( $link_blog_details_html_8 ); ?>"><?php echo esc_html( $texto_ellinien_loma_2 ); ?></a></span>
                </div>
                <h3 class="title"><a href="<?php echo esc_url( $link_blog_details_html_9 ); ?>"><?php echo esc_html( $texto_mastering_change_management_lessons_fo ); ?></a></h3>
                </div>
                <a class="text-btn" href="<?php echo esc_url( $link_blog_details_html_10 ); ?>">
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                <span class="btn-text"><span><?php echo esc_html( $texto_read_more_2 ); ?></span></span>
                </a>
            </div>
            </div>
            <div class="blog-item style-2 wow fadeInUp" data-wow-delay=".5s">
            <div class="blog-thumb">
                <a href="<?php echo esc_url( $link_blog_details_html_11 ); ?>"><img src="<?php echo esc_url( $imagen_assets_images_blog_blog_4_webp ); ?>" alt=""></a>
                <div class="blog-date">
                <span class="date">28</span>
                <span class="month"><?php echo esc_html( $texto_feb_3 ); ?></span>
                </div>
            </div>
            <div class="blog-content">
                <div class="title-area">
                <div class="blog-meta">
                    <span class="categories"><a href="<?php echo esc_url( $link_blog_details_html_12 ); ?>"><?php echo esc_html( $texto_business_3 ); ?></a></span>
                    <span><?php echo esc_html( $texto_by_3 ); ?> <a href="<?php echo esc_url( $link_blog_details_html_13 ); ?>"><?php echo esc_html( $texto_ellinien_loma_3 ); ?></a></span>
                </div>
                <h3 class="title"><a href="<?php echo esc_url( $link_blog_details_html_14 ); ?>"><?php echo esc_html( $texto_harnessing_digital_transform_a_roadmap_2 ); ?></a></h3>
                </div>
                <a class="text-btn" href="<?php echo esc_url( $link_blog_details_html_15 ); ?>">
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                <span class="btn-text"><span><?php echo esc_html( $texto_read_more_3 ); ?></span></span>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>

    </div>
</section>
<!-- end: Blog Section 8 -->
