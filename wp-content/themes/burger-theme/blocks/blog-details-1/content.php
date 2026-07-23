<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Blog Details Section -->
<section class="tj-blog-section section-gap slidebar-stickiy-container">
    <div class="container">
    <div class="row row-gap-5">
        <div class="col-lg-8">
        <div class="post-details-wrapper">
            <div class="blog-images wow fadeInUp" data-wow-delay=".1s">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_blog_1_webp', NAKAMA_THEME_URL . '/assets/images/blog/blog-1.webp' ) ); ?>" alt="Images">
            </div>
            <h2 class="title title-anim"><?php echo esc_html( $burger_get( 'texto_unlocking_business_potential_innovativ', 'Unlocking Business Potential: Innovative Solutions for Unmatched Success' ) ); ?>
            </h2>
            <div class="blog-category-two wow fadeInUp" data-wow-delay=".3s">
            <div class="category-item">
                <div class="cate-images">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_testimonial_client_2_webp', NAKAMA_THEME_URL . '/assets/images/testimonial/client-2.webp' ) ); ?>" alt="Images">
                </div>
                <div class="cate-text">
                <span class="degination"><?php echo esc_html( $burger_get( 'texto_authored_by', 'Authored by' ) ); ?></span>
                <h6 class="title"><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_burdee_nicolas', 'Burdee Nicolas' ) ); ?></a></h6>
                </div>
            </div>
            <div class="category-item">
                <div class="cate-icons">
                <i class="tji-calendar"></i>
                </div>
                <div class="cate-text">
                <span class="degination"><?php echo esc_html( $burger_get( 'texto_date_released', 'Date Released' ) ); ?></span>
                <h6 class="text"><?php echo esc_html( $burger_get( 'texto_29_december_2025', '29 December, 2025' ) ); ?></h6>
                </div>
            </div>
            <div class="category-item">
                <div class="cate-icons">
                <i class="tji-comment"></i>
                </div>
                <div class="cate-text">
                <span class="degination"><?php echo esc_html( $burger_get( 'texto_comments', 'Comments' ) ); ?></span>
                <h6 class="text"><?php echo esc_html( $burger_get( 'texto_03_comments', '03 Comments' ) ); ?></h6>
                </div>
            </div>
            </div>
            <div class="blog-text">
            <p class="wow fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post( $burger_get( 'texto_in_today_s_competitive_landscape_busin', 'In today’s competitive landscape, businesses must continuously adapt and innovate to thrive. Unlocking Business Potential means identifying untapped opportunities and leveraging innovative solutions to drive growth, enhance efficiency, and foster lasting success. At [Company Name], we believe that success is not just about working harder—it\'s about working smarter. By harnessing cutting-edge technologies, data-driven insights, and creative problem-solving, we provide businesses with the tools and strategies needed to stay ahead.' ) ); ?></p>
            <p class="wow fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post( $burger_get( 'texto_the_curve_whether_you_re_looking_to_st', 'The curve. Whether you\'re looking to streamline operations, enhance customer experiences, or explore new market opportunities, our tailored solutions are designed to empower your business to achieve unparalleled success. With a focus on sustainability, scalability, and adaptability, we help your business.' ) ); ?></p>
            <blockquote class="wow fadeInUp" data-wow-delay=".3s">
                <p><?php echo wp_kses_post( $burger_get( 'texto_the_true_entrepreneur_is_a_doer_not_a', 'The true entrepreneur is a doer, not a dreamer. Innovation is the catalyst that transforms ideas into reality. In today’s fast-paced world, success depends not on just surviving change.' ) ); ?></p>
                <cite><?php echo esc_html( $burger_get( 'texto_kevin_hooks', 'Kevin Hooks' ) ); ?></cite>
            </blockquote>
            <h3 class="wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $burger_get( 'texto_kye_lessons_of_business_potential', 'Kye lessons of Business Potential' ) ); ?></h3>
            <p class="wow fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post( $burger_get( 'texto_unlocking_your_business_potential_requ', 'Unlocking your business potential requires more than just vision and ambition—it involves strategic thinking, adaptability, and an unwavering commitment to growth. Over time, successful businesses have learned essential lessons that allow them to not only survive but thrive in an ever-changing marketplace. One of the most important lessons is understanding the need for continuous innovation.' ) ); ?>
            </p>
            <div class="images-wrap">
                <div class="row">
                <div class="col-sm-6">
                    <div class="image-box wow fadeInUp" data-wow-delay=".3s">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_blog_9_webp', NAKAMA_THEME_URL . '/assets/images/blog/blog-9.webp' ) ); ?>" alt="Image">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="image-box wow fadeInUp" data-wow-delay=".5s">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_blog_10_webp', NAKAMA_THEME_URL . '/assets/images/blog/blog-10.webp' ) ); ?>" alt="Image">
                    </div>
                </div>
                </div>
            </div>
            <p class="wow fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post( $burger_get( 'texto_lastly_effective_leadership_that_inspi', 'Lastly, effective leadership that inspires and motivates employees, customers, and stakeholders is essential in steering the business toward achieving its full potential. By applying these lessons, businesses can unlock new opportunities, overcome obstacles, and reach new levels of success.' ) ); ?></p>
            <ul class="wow fadeInUp" data-wow-delay=".3s">
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_embrace_innovation', 'Embrace Innovation' ) ); ?></li>
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_customer_centric_approach', 'Customer-Centric Approach' ) ); ?></li>
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_effective_leadership', 'Effective Leadership' ) ); ?></li>
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_operational_efficiency', 'Operational Efficiency' ) ); ?></li>
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_scalable_systems', 'Scalable Systems' ) ); ?></li>
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_resilience', 'Resilience' ) ); ?></li>
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_continuous_learning', 'Continuous Learning' ) ); ?></li>
            </ul>
            <div class="blog-video wow fadeInUp" data-wow-delay=".3s">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_blog_video_webp', NAKAMA_THEME_URL . '/assets/images/blog/blog-video.webp' ) ); ?>" alt="Video">
                <a class="video-btn video-popup" data-autoplay="true" data-vbtype="video" data-maxwidth="1200px"
                href="<?php echo esc_url( $burger_get( 'link_https_www_youtube_com_watch_v_mlpwranjfbi_a', 'https://www.youtube.com/watch?v=MLpWrANjFbI&ab_channel=eidelchteinadvogados' ) ); ?>">
                <span><i class="tji-play"></i></span>
                </a>
            </div>
            <h3 class="wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $burger_get( 'texto_conclusions', 'Conclusions' ) ); ?></h3>
            <p class="wow fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post( $burger_get( 'texto_unlocking_your_business_s_full_potenti', 'Unlocking your business’s full potential is a journey that requires vision, innovation, and strategic on our execution. By embracing key lessons such as leveraging data, focusing on customer are experience, fostering of adaptability, and nurturing effective leadership, businesses can thrive in an ever-evolving marketplace..' ) ); ?></p>
            <p class="wow fadeInUp" data-wow-delay=".3s"> <?php echo wp_kses_post( $burger_get( 'texto_the_ability_to_continuously_learn_coll', 'The ability to continuously learn, collaborate, and optimize operations will not only drive growth but ensure long-term sustainability. Remember, the path to success is not linear.' ) ); ?></p>
            </div>
            <div class="tj-tags-post wow fadeInUp" data-wow-delay=".3s">
            <div class="tagcloud">
                <span><?php echo esc_html( $burger_get( 'texto_tags', 'Tags:' ) ); ?></span>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_html', 'blog.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_growth', 'Growth' ) ); ?></a>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_html_2', 'blog.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_success', 'Success' ) ); ?></a>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_html_3', 'blog.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_innovate', 'Innovate' ) ); ?></a>
            </div>
            <div class="post-share">
                <ul>
                <li> <?php echo esc_html( $burger_get( 'texto_share', 'Share:' ) ); ?></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_facebook_com', 'https://www.facebook.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_x_com', 'https://x.com/' ) ); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_instagram_com', 'https://www.instagram.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                </li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_https_www_linkedin_com', 'https://www.linkedin.com/' ) ); ?>" target="_blank"><i
                        class="fa-brands fa-linkedin-in"></i></a>
                </li>
                </ul>
            </div>
            </div>
            <div class="tj-post__navigation wow fadeInUp" data-wow-delay=".3s">
            <!-- previous post -->
            <div class="tj-nav__post previous">
                <div class="tj-nav-post__nav prev_post">
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_2', 'blog-details.html' ) ); ?>"><span><i class="tji-arrow-left"></i></span><?php echo esc_html( $burger_get( 'texto_previous', 'Previous' ) ); ?></a>
                </div>
            </div>
            <div class="tj-nav-post__grid">
                <a href="<?php echo esc_url( $burger_get( 'link_blog_html_4', 'blog.html' ) ); ?>"><i class="tji-window"></i></a>
            </div>
            <!-- next post -->
            <div class="tj-nav__post next">
                <div class="tj-nav-post__nav next_post">
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_3', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_next', 'Next' ) ); ?><span><i class="tji-arrow-right"></i></span></a>
                </div>
            </div>
            </div>

            <div class="tj-comments-container">
            <div class="tj-comments-wrap">
                <div class="comments-title">
                <h3 class="title"><?php echo esc_html( $burger_get( 'texto_top_comments_02', 'Top Comments (02)' ) ); ?></h3>
                </div>
                <div class="tj-latest-comments">
                <ul>
                    <li class="tj-comment">
                    <div class="comment-content">
                        <div class="comment-avatar">
                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_avatar_1_webp', NAKAMA_THEME_URL . '/assets/images/blog/avatar-1.webp' ) ); ?>" alt="Image">
                        </div>
                        <div class="comments-header">
                        <div class="avatar-name">
                            <h6 class="title">
                            <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_4', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_great_insights', 'Great insights!' ) ); ?></a>
                            </h6>
                        </div>
                        <div class="comment-text">
                            <span class="date"><?php echo esc_html( $burger_get( 'texto_june_18_2024_at_06_00_pm', 'June 18, 2024 at 06:00 pm' ) ); ?></span>
                            <a class="reply" href="<?php echo esc_url( $burger_get( 'link_blog_details_html_5', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_reply', 'Reply' ) ); ?></a>
                        </div>
                        <div class="desc">
                            <p><?php echo wp_kses_post( $burger_get( 'texto_i_completely_agree_that_embracing_inno', '"I completely agree that embracing innovation and leveraging data are crucial for any business looking to stay competitive in today\'s market. The focus on leadership and adaptability really resonated with me. Looking forward to implementing these strategies"' ) ); ?>
                            </p>
                        </div>
                        </div>
                    </div>
                    </li>
                    <li class="tj-comment">
                    <ul class="children">
                        <li class="tj-comment">
                        <div class="comment-content">
                            <div class="comment-avatar">
                            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_avatar_2_webp', NAKAMA_THEME_URL . '/assets/images/blog/avatar-2.webp' ) ); ?>" alt="Image">
                            </div>
                            <div class="comments-header">
                            <div class="avatar-name">
                                <h6 class="title">
                                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_6', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_this_was_a_fantastic_read', 'This was a fantastic read' ) ); ?></a>
                                </h6>
                            </div>
                            <div class="comment-text">
                                <span class="date"><?php echo esc_html( $burger_get( 'texto_june_18_2024_at_06_00_pm_2', 'June 18, 2024 at 06:00 pm' ) ); ?></span>
                                <a class="reply" href="<?php echo esc_url( $burger_get( 'link_blog_details_html_7', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_reply_2', 'Reply' ) ); ?></a>
                            </div>
                            <div class="desc">
                                <p><?php echo wp_kses_post( $burger_get( 'texto_the_lessons_on_customer_centric_approa', '"The lessons on customer-centric approaches and operational efficiency are especially relevant. It\'s inspiring to see how these core principles can truly unlock a business\'s potential. Thanks for sharing such valuable content!"' ) ); ?></p>
                            </div>
                            </div>
                        </div>
                        </li>
                    </ul>
                    </li>
                    <li class="tj-comment">
                    <div class="comment-content">
                        <div class="comment-avatar">
                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_avatar_2_webp_2', NAKAMA_THEME_URL . '/assets/images/blog/avatar-2.webp' ) ); ?>" alt="Image">
                        </div>
                        <div class="comments-header">
                        <div class="avatar-name">
                            <h6 class="title">
                            <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_8', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_this_was_a_fantastic_read_2', 'This was a fantastic read' ) ); ?></a>
                            </h6>
                        </div>
                        <div class="comment-text">
                            <span class="date"><?php echo esc_html( $burger_get( 'texto_june_18_2024_at_06_00_pm_3', 'June 18, 2024 at 06:00 pm' ) ); ?></span>
                            <a class="reply" href="<?php echo esc_url( $burger_get( 'link_blog_details_html_9', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_reply_3', 'Reply' ) ); ?></a>
                        </div>
                        <div class="desc">
                            <p><?php echo wp_kses_post( $burger_get( 'texto_the_lessons_on_customer_centric_approa_2', '"The lessons on customer-centric approaches and operational efficiency are especially relevant. It\'s inspiring to see how these core principles can truly unlock a business\'s potential. Thanks for sharing such valuable content!"' ) ); ?></p>
                        </div>
                        </div>
                    </div>
                    </li>
                </ul>
                </div>
            </div>
            <div class="tj-comments__container">
                <div class="comment-respond">
                <h3 class="comment-reply-title"><?php echo esc_html( $burger_get( 'texto_leave_a_comment', 'Leave a Comment' ) ); ?></h3>
                <div class="row">
                    <div class="col-lg-12">
                    <div class="form-input">
                        <textarea id="comment" name="message" placeholder="Write Your Comment *"></textarea>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="form-input">
                        <input type="text" id="name" name="name" placeholder="Full Name *" required="">
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="form-input">
                        <input type="email" id="emailOne" name="name" placeholder="Your Email *" required="">
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="form-input">
                        <input type="text" id="website" name="name" placeholder="Website" required="">
                    </div>
                    </div>
                    <div class="comments-btn">
                    <button class="tj-primary-btn" type="submit">
                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_submit_now', 'Submit Now' ) ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </button>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="tj-main-sidebar slidebar-stickiy">
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
                    <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_10', 'blog-details.html' ) ); ?>"> <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_post_1_webp', NAKAMA_THEME_URL . '/assets/images/blog/post-1.webp' ) ); ?>" alt="Blog"></a>
                </div>
                <div class="post-content">
                    <h6 class="post-title">
                    <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_11', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_how_to_stay_ahead_of_the_business_curv', 'How to Stay Ahead of the Business Curve' ) ); ?></a>
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
                    <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_12', 'blog-details.html' ) ); ?>"> <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_post_2_webp', NAKAMA_THEME_URL . '/assets/images/blog/post-2.webp' ) ); ?>" alt="Blog"></a>
                </div>
                <div class="post-content">
                    <h6 class="post-title">
                    <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_13', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_how_digital_tools_shaping_the_workforc', 'How Digital Tools Shaping the Workforce' ) ); ?></a>
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
                    <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_14', 'blog-details.html' ) ); ?>"> <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_post_3_webp', NAKAMA_THEME_URL . '/assets/images/blog/post-3.webp' ) ); ?>" alt="Blog"></a>
                </div>
                <div class="post-content">
                    <h6 class="post-title">
                    <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_15', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_how_to_sustainability_into_your_strate', 'How to Sustainability into your Strategy' ) ); ?></a>
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
                <li><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_16', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_innovation', 'Innovation' ) ); ?><span class="number">(03)</span></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_17', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_leadership', 'Leadership' ) ); ?><span class="number">(02)</span></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_18', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_technology', 'Technology' ) ); ?><span class="number">(03)</span></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_19', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_marketing', 'Marketing' ) ); ?><span class="number">(06)</span></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_20', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_management', 'Management' ) ); ?><span class="number">(04)</span></a></li>
            </ul>
            </div>
            <div class="tj-sidebar-widget widget-tag-cloud wow fadeInUp" data-wow-delay=".7s">
            <h4 class="widget-title"><?php echo esc_html( $burger_get( 'texto_tags_2', 'Tags' ) ); ?></h4>
            <nav>
                <div class="tagcloud">
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_21', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_growth_2', 'Growth' ) ); ?></a>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_22', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_success_2', 'Success' ) ); ?></a>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_23', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_innovate_2', 'Innovate' ) ); ?></a>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_24', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_lead', 'Lead' ) ); ?></a>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_25', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_impact', 'Impact' ) ); ?></a>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_26', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_focus', 'Focus' ) ); ?></a>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_27', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_tech', 'Tech' ) ); ?></a>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_28', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_optimize', 'Optimize' ) ); ?></a>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_29', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_results', 'Results' ) ); ?></a>
                <a href="<?php echo esc_url( $burger_get( 'link_blog_details_html_30', 'blog-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_drive', 'Drive' ) ); ?></a>
                </div>
            </nav>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Blog Details Section -->
