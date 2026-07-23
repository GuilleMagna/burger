<?php
$content_fields = array(
    'texto_insights_ideas' => 'Insights & Ideas',
    'texto_the_ultimate_resource' => 'The Ultimate Resource.',
    'link_blog_html' => 'blog.html',
    'texto_more_blogs' => 'More Blogs',
    'link_blog_details_html' => 'blog-details.html',
    'imagen_assets_images_blog_h5_blog_1_webp' => NAKAMA_THEME_URL . '/assets/images/blog/h5-blog-1.webp',
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
    'imagen_assets_images_blog_h5_blog_2_webp' => NAKAMA_THEME_URL . '/assets/images/blog/h5-blog-2.webp',
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
    'imagen_assets_images_blog_h5_blog_3_webp' => NAKAMA_THEME_URL . '/assets/images/blog/h5-blog-3.webp',
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

<!-- start: Blog Section 9 -->
<section class="h5-blog section-gap fix">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading-wrap style-8">
            <div class="heading-wrap-content">
            <div class="sec-heading style-8">
                <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $texto_insights_ideas ); ?></span>
                <h2 class="sec-title text-anim"><?php echo esc_html( $texto_the_ultimate_resource ); ?></h2>
            </div>
            <div class="btn-area wow fadeInUp" data-wow-delay=".8s">
                <a class="tj-primary-btn" href="<?php echo esc_url( $link_blog_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_more_blogs ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="h5-blog-wrapper h9-blog-wrapper">
            <div class="blog-item style-2 h5-blog-item wow fadeInLeft" data-wow-delay=".3s">
            <div class="blog-thumb">
                <a href="<?php echo esc_url( $link_blog_details_html ); ?>"><img src="<?php echo esc_url( $imagen_assets_images_blog_h5_blog_1_webp ); ?>" alt=""></a>
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
                <h4 class="title"><a href="<?php echo esc_url( $link_blog_details_html_4 ); ?>"><?php echo esc_html( $texto_harnessing_digital_transform_a_roadmap ); ?></a>
                </h4>
                </div>
                <a class="text-btn" href="<?php echo esc_url( $link_blog_details_html_5 ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_read_more ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
            <div class="blog-item  style-2 h5-blog-item wow fadeInRight" data-wow-delay=".4s">
            <div class="blog-thumb">
                <a href="<?php echo esc_url( $link_blog_details_html_6 ); ?>"><img src="<?php echo esc_url( $imagen_assets_images_blog_h5_blog_2_webp ); ?>" alt=""></a>
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
                <h4 class="title"><a href="<?php echo esc_url( $link_blog_details_html_9 ); ?>"><?php echo esc_html( $texto_mastering_change_management_lessons_fo ); ?></a></h4>
                </div>
                <a class="text-btn" href="<?php echo esc_url( $link_blog_details_html_10 ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_read_more_2 ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
            <div class="blog-item style-2 h5-blog-item wow fadeInRight" data-wow-delay=".5s">
            <div class="blog-thumb">
                <a href="<?php echo esc_url( $link_blog_details_html_11 ); ?>"><img src="<?php echo esc_url( $imagen_assets_images_blog_h5_blog_3_webp ); ?>" alt=""></a>
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
                <h4 class="title"><a href="<?php echo esc_url( $link_blog_details_html_14 ); ?>"><?php echo esc_html( $texto_harnessing_digital_transform_a_roadmap_2 ); ?></a></h4>
                </div>
                <a class="text-btn" href="<?php echo esc_url( $link_blog_details_html_15 ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_read_more_3 ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Blog Section 9 -->
