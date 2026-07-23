<?php
$content_fields = array(
    'texto_insights_ideas' => 'Insights & Ideas',
    'texto_the_ultimate_resource' => 'The Ultimate Resource.',
    'link_blog_html' => 'blog.html',
    'texto_more_blogs' => 'More Blogs',
    'link_blog_details_html' => 'blog-details.html',
    'imagen_assets_images_blog_blog_1_webp' => NAKAMA_THEME_URL . '/assets/images/blog/blog-1.webp',
    'texto_by' => 'By',
    'link_blog_details_html_2' => 'blog-details.html',
    'texto_ellinien_loma' => 'Ellinien Loma',
    'texto_june_20_2025' => 'June 20, 2025',
    'link_blog_details_html_3' => 'blog-details.html',
    'texto_business' => 'Business',
    'link_blog_details_html_4' => 'blog-details.html',
    'texto_harnessing_digital_transform_a_roadmap' => 'Harnessing Digital Transform a Roadmap Businesses.',
    'link_blog_details_html_5' => 'blog-details.html',
    'texto_read_more' => 'Read More',
    'link_blog_details_html_6' => 'blog-details.html',
    'imagen_assets_images_blog_blog_5_webp' => NAKAMA_THEME_URL . '/assets/images/blog/blog-5.webp',
    'texto_by_2' => 'By',
    'link_blog_details_html_7' => 'blog-details.html',
    'texto_ellinien_loma_2' => 'Ellinien Loma',
    'texto_june_20_2025_2' => 'June 20, 2025',
    'link_blog_details_html_8' => 'blog-details.html',
    'texto_success' => 'Success',
    'link_blog_details_html_9' => 'blog-details.html',
    'texto_mastering_change_management_lessons_fo' => 'Mastering Change Management Lessons for Businesses.',
    'link_blog_details_html_10' => 'blog-details.html',
    'texto_read_more_2' => 'Read More',
    'link_blog_details_html_11' => 'blog-details.html',
    'imagen_assets_images_blog_blog_4_webp' => NAKAMA_THEME_URL . '/assets/images/blog/blog-4.webp',
    'texto_by_3' => 'By',
    'link_blog_details_html_12' => 'blog-details.html',
    'texto_ellinien_loma_3' => 'Ellinien Loma',
    'texto_june_20_2025_3' => 'June 20, 2025',
    'link_blog_details_html_13' => 'blog-details.html',
    'texto_connect' => 'Connect',
    'link_blog_details_html_14' => 'blog-details.html',
    'texto_leading_through_change_proven_lessons' => 'Leading Through Change: Proven Lessons for Effective Change Business.',
    'link_blog_details_html_15' => 'blog-details.html',
    'texto_read_more_3' => 'Read More',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Blog Section 10 -->
<section class="h10-blog section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading-wrap ">
            <div class="heading-wrap-content">
            <div class="sec-heading style-3">
                <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_insights_ideas ); ?></span>
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
        <div class="col-12 ">
        <div class="blog-wrapper h8-blog-wrapper h10-blog-wrapper ">
            <div class="blog-item style-2 wow fadeInUp" data-wow-delay=".3s">
            <div class="blog-thumb">
                <a href="<?php echo esc_url( $link_blog_details_html ); ?>"><img src="<?php echo esc_url( $imagen_assets_images_blog_blog_1_webp ); ?>" alt=""></a>
            </div>
            <div class="blog-content">
                <div class="blog-meta">
                <div class="blog-date-wrapper">
                    <span class="blog-author"><?php echo esc_html( $texto_by ); ?> <a href="<?php echo esc_url( $link_blog_details_html_2 ); ?>"><?php echo esc_html( $texto_ellinien_loma ); ?></a></span>
                    <span class="blog-date"><?php echo esc_html( $texto_june_20_2025 ); ?></span>
                </div>
                <span class="categories"><a href="<?php echo esc_url( $link_blog_details_html_3 ); ?>"><?php echo esc_html( $texto_business ); ?></a></span>

                </div>
                <div class="title-area">
                <h3 class="title"><a href="<?php echo esc_url( $link_blog_details_html_4 ); ?>"><?php echo esc_html( $texto_harnessing_digital_transform_a_roadmap ); ?></a></h3>
                <a class="text-btn" href="<?php echo esc_url( $link_blog_details_html_5 ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $texto_read_more ); ?></span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>

            </div>
            </div>
            <div class="blog-item style-2 wow fadeInUp" data-wow-delay=".4s">
            <div class="blog-thumb">
                <a href="<?php echo esc_url( $link_blog_details_html_6 ); ?>"><img src="<?php echo esc_url( $imagen_assets_images_blog_blog_5_webp ); ?>" alt=""></a>
            </div>
            <div class="blog-content">
                <div class="blog-meta">
                <div class="blog-date-wrapper">
                    <span class="blog-author"><?php echo esc_html( $texto_by_2 ); ?> <a href="<?php echo esc_url( $link_blog_details_html_7 ); ?>"><?php echo esc_html( $texto_ellinien_loma_2 ); ?></a></span>
                    <span class="blog-date"><?php echo esc_html( $texto_june_20_2025_2 ); ?></span>
                </div>
                <span class="categories"><a href="<?php echo esc_url( $link_blog_details_html_8 ); ?>"><?php echo esc_html( $texto_success ); ?></a></span>

                </div>
                <div class="title-area">
                <h3 class="title"><a href="<?php echo esc_url( $link_blog_details_html_9 ); ?>"><?php echo esc_html( $texto_mastering_change_management_lessons_fo ); ?></a></h3>
                <a class="text-btn" href="<?php echo esc_url( $link_blog_details_html_10 ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $texto_read_more_2 ); ?></span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
                </div>
            </div>
            </div>
            <div class="blog-item style-2 wow fadeInUp" data-wow-delay=".5s">
            <div class="blog-thumb">
                <a href="<?php echo esc_url( $link_blog_details_html_11 ); ?>"><img src="<?php echo esc_url( $imagen_assets_images_blog_blog_4_webp ); ?>" alt=""></a>
            </div>
            <div class="blog-content">
                <div class="blog-meta">
                <div class="blog-date-wrapper">
                    <span class="blog-author"><?php echo esc_html( $texto_by_3 ); ?> <a href="<?php echo esc_url( $link_blog_details_html_12 ); ?>"><?php echo esc_html( $texto_ellinien_loma_3 ); ?></a></span>
                    <span class="blog-date"><?php echo esc_html( $texto_june_20_2025_3 ); ?></span>
                </div>
                <span class="categories"><a href="<?php echo esc_url( $link_blog_details_html_13 ); ?>"><?php echo esc_html( $texto_connect ); ?></a></span>

                </div>
                <div class="title-area">
                <h3 class="title"><a href="<?php echo esc_url( $link_blog_details_html_14 ); ?>"><?php echo esc_html( $texto_leading_through_change_proven_lessons ); ?></a></h3>
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

    </div>
</section>
<!-- end: Blog Section 10 -->
