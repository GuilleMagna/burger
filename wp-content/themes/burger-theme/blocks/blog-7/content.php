<?php
$content_fields = array(
    'texto_insights_ideas' => 'Insights & Ideas',
    'texto_the_ultimate_resource' => 'The Ultimate Resource.',
    'link_blog_details_html' => 'blog-details.html',
    'imagen_assets_images_blog_blog_1_webp' => NAKAMA_THEME_URL . '/assets/images/blog/blog-1.webp',
    'link_blog_details_html_2' => 'blog-details.html',
    'texto_business' => 'Business',
    'texto_june_20_2025' => 'June 20, 2025',
    'link_blog_details_html_3' => 'blog-details.html',
    'texto_innovative_solutions_for_every_busines' => 'Innovative Solutions for every Business Success.',
    'link_service_details_html' => 'service-details.html',
    'link_blog_details_html_4' => 'blog-details.html',
    'imagen_assets_images_blog_blog_2_webp' => NAKAMA_THEME_URL . '/assets/images/blog/blog-2.webp',
    'link_blog_details_html_5' => 'blog-details.html',
    'texto_empower' => 'Empower',
    'texto_june_20_2025_2' => 'June 20, 2025',
    'link_blog_details_html_6' => 'blog-details.html',
    'texto_harnessing_digital_transform_a_roadmap' => 'Harnessing Digital Transform a Roadmap Businesses.',
    'link_service_details_html_2' => 'service-details.html',
    'link_blog_details_html_7' => 'blog-details.html',
    'imagen_assets_images_blog_blog_3_webp' => NAKAMA_THEME_URL . '/assets/images/blog/blog-3.webp',
    'link_blog_details_html_8' => 'blog-details.html',
    'texto_support' => 'Support',
    'texto_june_20_2025_3' => 'June 20, 2025',
    'link_blog_details_html_9' => 'blog-details.html',
    'texto_mastering_change_management_lessons_fo' => 'Mastering Change Management Lessons for Businesses.',
    'link_service_details_html_3' => 'service-details.html',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Blog Section 7 -->
<section class="tj-blog-section h7-blog  section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading style-2 style-7 text-center">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_insights_ideas ); ?></span>
            <h2 class="sec-title text-anim"><?php echo esc_html( $texto_the_ultimate_resource ); ?></h2>
        </div>
        </div>
    </div>
    <div class="row row-gap-4 h7-blog-wrapper">
        <div class="col-xl-4 col-md-6">
        <div class="blog-item wow fadeInUp" data-wow-delay=".4s">
            <div class="blog-thumb">
            <a href="<?php echo esc_url( $link_blog_details_html ); ?>"><img src="<?php echo esc_url( $imagen_assets_images_blog_blog_1_webp ); ?>" alt=""></a>
            <div class="blog-meta">
                <span class="categories"><a href="<?php echo esc_url( $link_blog_details_html_2 ); ?>"><?php echo esc_html( $texto_business ); ?></a></span>
            </div>
            </div>
            <div class="blog-content">
            <div class="blog-date">
                <p> <?php echo esc_html( $texto_june_20_2025 ); ?></p>
            </div>
            <div class="title-wrapper">
                <h4 class="title"><a href="<?php echo esc_url( $link_blog_details_html_3 ); ?>"><?php echo esc_html( $texto_innovative_solutions_for_every_busines ); ?></a>
                </h4>
                <a class="text-btn" href="<?php echo esc_url( $link_service_details_html ); ?>">
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="blog-item wow fadeInUp" data-wow-delay=".4s">
            <div class="blog-thumb">
            <a href="<?php echo esc_url( $link_blog_details_html_4 ); ?>"><img src="<?php echo esc_url( $imagen_assets_images_blog_blog_2_webp ); ?>" alt=""></a>
            <div class="blog-meta">
                <span class="categories"><a href="<?php echo esc_url( $link_blog_details_html_5 ); ?>"><?php echo esc_html( $texto_empower ); ?></a></span>
            </div>
            </div>
            <div class="blog-content">
            <div class="blog-date">
                <p> <?php echo esc_html( $texto_june_20_2025_2 ); ?></p>
            </div>
            <div class="title-wrapper">
                <h4 class="title"><a href="<?php echo esc_url( $link_blog_details_html_6 ); ?>"><?php echo esc_html( $texto_harnessing_digital_transform_a_roadmap ); ?></a>
                </h4>
                <a class="text-btn" href="<?php echo esc_url( $link_service_details_html_2 ); ?>">
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="blog-item wow fadeInUp" data-wow-delay=".4s">
            <div class="blog-thumb">
            <a href="<?php echo esc_url( $link_blog_details_html_7 ); ?>"><img src="<?php echo esc_url( $imagen_assets_images_blog_blog_3_webp ); ?>" alt=""></a>
            <div class="blog-meta">
                <span class="categories"><a href="<?php echo esc_url( $link_blog_details_html_8 ); ?>"><?php echo esc_html( $texto_support ); ?></a></span>
            </div>
            </div>
            <div class="blog-content">
            <div class="blog-date">
                <p> <?php echo esc_html( $texto_june_20_2025_3 ); ?></p>
            </div>
            <div class="title-wrapper">
                <h4 class="title"><a href="<?php echo esc_url( $link_blog_details_html_9 ); ?>"><?php echo esc_html( $texto_mastering_change_management_lessons_fo ); ?></a>
                </h4>
                <a class="text-btn" href="<?php echo esc_url( $link_service_details_html_3 ); ?>">
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
