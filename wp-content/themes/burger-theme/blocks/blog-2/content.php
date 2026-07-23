<?php
$content_fields = array(
    'texto_read_blogs' => 'Read Blogs',
    'texto_strategies_and' => 'Strategies and',
    'texto_insights' => 'Insights.',
    'texto_developing_personalized_customer_journ' => 'Developing personalized customer journeys to increase satisfaction and loyalty.',
    'link_blog_details_html' => 'blog-details.html',
    'imagen_assets_images_blog_blog_4_webp' => NAKAMA_THEME_URL . '/assets/images/blog/blog-4.webp',
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
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Blog Section 2 -->
<section class="tj-blog-section-2 section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading-wrap">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $texto_read_blogs ); ?></span>
            <div class="heading-wrap-content">
            <div class="sec-heading style-2">
                <h2 class="sec-title text-anim"><?php echo esc_html( $texto_strategies_and ); ?> <span><?php echo esc_html( $texto_insights ); ?></span></h2>
            </div>
            <div class="wow fadeInUp" data-wow-delay=".5s">
                <p class="desc"><?php echo esc_html( $texto_developing_personalized_customer_journ ); ?>
                </p>
            </div>
            <div class="slider-navigation d-none d-md-inline-flex wow fadeInUp" data-wow-delay=".7s">
                <div class="slider-prev">
                <span class="anim-icon">
                    <i class="tji-arrow-left"></i>
                    <i class="tji-arrow-left"></i>
                </span>
                </div>
                <div class="slider-next">
                <span class="anim-icon">
                    <i class="tji-arrow-right"></i>
                    <i class="tji-arrow-right"></i>
                </span>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="blog-wrapper wow fadeIn" data-wow-delay=".5s">
            <div class="swiper blog-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="blog-item style-2">
                    <div class="blog-thumb">
                    <a href="<?php echo esc_url( $link_blog_details_html ); ?>"><img src="<?php echo esc_url( $imagen_assets_images_blog_blog_4_webp ); ?>" alt=""></a>
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
                        <h4 class="title"><a href="<?php echo esc_url( $link_blog_details_html_4 ); ?>"><?php echo esc_html( $texto_harnessing_digital_transform_a_roadmap ); ?></a></h4>
                    </div>
                    <a class="text-btn" href="<?php echo esc_url( $link_blog_details_html_5 ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $texto_read_more ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="blog-item style-2">
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
                        <h4 class="title"><a href="<?php echo esc_url( $link_blog_details_html_9 ); ?>"><?php echo esc_html( $texto_mastering_change_management_lessons_fo ); ?></a></h4>
                    </div>
                    <a class="text-btn" href="<?php echo esc_url( $link_blog_details_html_10 ); ?>">
                        <span class="btn-text"><span><?php echo esc_html( $texto_read_more_2 ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                    </div>
                </div>
                </div>
            </div>
            <div class="swiper-pagination-area"></div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Blog Section 2 -->
