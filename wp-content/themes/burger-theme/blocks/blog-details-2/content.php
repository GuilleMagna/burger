<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Blog Section 2 -->
<section class="tj-blog-section section-gap slidebar-stickiy-container">
    <div class="container">
    <div class="row row-gap-5">
        <div class="col-lg-8">
        <div class="post-details-wrapper">
            <div class="blog-images wow fadeInUp" data-wow-delay=".1s">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_project_project_details_web', NAKAMA_THEME_URL . '/assets/images/project/project-details.webp' ) ); ?>" alt="Images">
            </div>
            <h2 class="title title-anim"><?php echo esc_html( $burger_get( 'texto_designing_a_modern_brand_identity_for', 'Designing a Modern Brand Identity for Competitive Edge' ) ); ?></h2>
            <div class="blog-text">
            <p class="wow fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post( $burger_get( 'texto_rebranding_is_more_than_just_a_logo_ch', 'Rebranding is more than just a logo change or a new color palette; it’s about reshaping how your company is perceived in the marketplace. At [Company Name], we specialize in crafting comprehensive rebranding strategies that align your business with its evolving goals, values, and target audience. Whether you’re launching in new markets, updating your identity for modern relevance, or simply reinvigorating a tired brand, we take a holistic approach to ensure your brand resonates with customers on a deeper level.' ) ); ?></p>
            <p class="wow fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post( $burger_get( 'texto_our_rebranding_process_is_rooted_in_st', 'Our rebranding process is rooted in strategic thinking, market research, and creativity. We work closely with you to understand your business, vision, and customers, ensuring that every element of the rebrand— from visual design to messaging— is authentic and impactful. The end result is a refreshed brand that speaks.' ) ); ?></p>
            <h3 class="wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $burger_get( 'texto_project_overview', 'Project Overview' ) ); ?></h3>
            <p class="wow fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post( $burger_get( 'texto_in_today_s_dynamic_market_a_strong_and', 'In today’s dynamic market, a strong and consistent brand identity is key to standing out and driving growth. [Client Name], a growing business in the Bexon, recognized the need to evolve its brand to better resonate with an expanding audience and adapt to shifting market trends.' ) ); ?></p>
            <ul class="wow fadeInUp" data-wow-delay=".3s">
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_brand_audit_research', 'Brand Audit & Research' ) ); ?></li>
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_holder_internal_communication', 'Holder & Internal Communication' ) ); ?></li>
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_customer_experience', 'Customer Experience' ) ); ?></li>
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_strategy_development', 'Strategy Development' ) ); ?></li>
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_launch_marketing', 'Launch & Marketing' ) ); ?></li>
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_creative_direction', 'Creative Direction' ) ); ?></li>
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_touchpoints', 'Touchpoints' ) ); ?></li>
            </ul>
            <h3 class="wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $burger_get( 'texto_project_galley', 'Project Galley' ) ); ?></h3>
            <P class="wow fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post( $burger_get( 'texto_our_rebranding_strategy_for_client_nam', 'Our Rebranding Strategy for [Client Name] transformed their entire brand identity, from a fresh new logo to an updated visual design that resonates with their growing audience.' ) ); ?></P>
            <div class="images-wrap">
                <div class="row">
                <div class="col-sm-12">
                    <div class="image-box wow fadeInUp" data-wow-delay=".3s">
                    <a class="gallery" data-gall="gallery"
                        href="<?php echo esc_url( $burger_get( 'link_assets_images_project_project_gallery_1_web', 'assets/images/project/project-gallery-1.webp' ) ); ?>"><img
                        src="<?php echo esc_url( $burger_get( 'imagen_assets_images_project_project_gallery_1_w', NAKAMA_THEME_URL . '/assets/images/project/project-gallery-1.webp' ) ); ?>" alt="Image"></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="image-box wow fadeInUp" data-wow-delay=".3s">
                    <a class="gallery" data-gall="gallery"
                        href="<?php echo esc_url( $burger_get( 'link_assets_images_project_project_gallery_2_web', 'assets/images/project/project-gallery-2.webp' ) ); ?>"><img
                        src="<?php echo esc_url( $burger_get( 'imagen_assets_images_project_project_gallery_2_w', NAKAMA_THEME_URL . '/assets/images/project/project-gallery-2.webp' ) ); ?>" alt="Image"></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="image-box wow fadeInUp" data-wow-delay=".5s">
                    <a class="gallery" data-gall="gallery"
                        href="<?php echo esc_url( $burger_get( 'link_assets_images_project_project_gallery_3_web', 'assets/images/project/project-gallery-3.webp' ) ); ?>"><img
                        src="<?php echo esc_url( $burger_get( 'imagen_assets_images_project_project_gallery_3_w', NAKAMA_THEME_URL . '/assets/images/project/project-gallery-3.webp' ) ); ?>" alt="Image"></a>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="tj-post__navigation mb-0 wow fadeInUp" data-wow-delay=".3s">
            <!-- previous post -->
            <div class="tj-nav__post previous">
                <div class="tj-nav-post__nav prev_post">
                <a href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html', 'portfolio-details.html' ) ); ?>"><span><i class="tji-arrow-left"></i></span><?php echo esc_html( $burger_get( 'texto_previous', 'Previous' ) ); ?></a>
                </div>
            </div>
            <div class="tj-nav-post__grid">
                <a href="<?php echo esc_url( $burger_get( 'link_portfolio_html', 'portfolio.html' ) ); ?>"><i class="tji-window"></i></a>
            </div>
            <!-- next post -->
            <div class="tj-nav__post next">
                <div class="tj-nav-post__nav next_post">
                <a href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html_2', 'portfolio-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_next', 'Next' ) ); ?><span><i class="tji-arrow-right"></i></span></a>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="tj-main-sidebar slidebar-stickiy">
            <div class="tj-sidebar-widget widget-categories wow fadeInUp" data-wow-delay=".1s">
            <h4 class="widget-title"><?php echo esc_html( $burger_get( 'texto_project_info', 'Project Info' ) ); ?></h4>
            <div class="infos-item">
                <div class="project-icons">
                <i class="tji-user"></i>
                </div>
                <div class="project-text">
                <span><?php echo esc_html( $burger_get( 'texto_clients', 'Clients' ) ); ?></span>
                <h6 class="title"><?php echo esc_html( $burger_get( 'texto_innovate_interiors_group', 'Innovate Interiors Group' ) ); ?></h6>
                </div>
            </div>
            <div class="infos-item">
                <div class="project-icons">
                <i class="tji-budget"></i>
                </div>
                <div class="project-text">
                <span><?php echo esc_html( $burger_get( 'texto_budget', 'Budget' ) ); ?></span>
                <h6 class="title"><?php echo esc_html( $burger_get( 'texto_100m_usd', '$100M USD' ) ); ?></h6>
                </div>
            </div>
            <div class="infos-item">
                <div class="project-icons">
                <i class="tji-location-2"></i>
                </div>
                <div class="project-text">
                <span><?php echo esc_html( $burger_get( 'texto_location', 'Location' ) ); ?></span>
                <h6 class="title"><?php echo esc_html( $burger_get( 'texto_maplewood_heights_ca', 'Maplewood Heights, CA' ) ); ?></h6>
                </div>
            </div>
            <div class="infos-item">
                <div class="project-icons">
                <i class="tji-chart"></i>
                </div>
                <div class="project-text">
                <span><?php echo esc_html( $burger_get( 'texto_sector', 'Sector' ) ); ?></span>
                <h6 class="title"><?php echo esc_html( $burger_get( 'texto_corporate_business', 'Corporate Business' ) ); ?></h6>
                </div>
            </div>
            <div class="infos-item">
                <div class="project-icons">
                <i class="tji-calendar"></i>
                </div>
                <div class="project-text">
                <span><?php echo esc_html( $burger_get( 'texto_complete_date', 'Complete date' ) ); ?></span>
                <h6 class="title"><?php echo esc_html( $burger_get( 'texto_oct_20_2024', 'OCT 20, 2024' ) ); ?></h6>
                </div>
            </div>

            </div>
            <div class="tj-sidebar-widget widget-feature-item wow fadeInUp" data-wow-delay=".3s">
            <div class="feature-box">
                <div class="feature-content">
                <h2 class="title"><?php echo esc_html( $burger_get( 'texto_modern', 'Modern' ) ); ?></h2>
                <span><?php echo esc_html( $burger_get( 'texto_home_makeover', 'Home Makeover' ) ); ?></span>
                <a class="read-more feature-contact" href="tel:8321890640">
                    <i class="tji-phone-3"></i>
                    <span>+8 (321) 890-640</span>
                </a>
                </div>
                <div class="feature-images">
                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_service_ad_webp', NAKAMA_THEME_URL . '/assets/images/service/service-ad.webp' ) ); ?>" alt="">
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Blog Section 2 -->
