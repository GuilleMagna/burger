<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Blog details Section 3 -->
<section class="tj-blog-section section-gap slidebar-stickiy-container">
    <div class="container">
    <div class="row row-gap-5">
        <div class="col-lg-8">
        <div class="post-details-wrapper">
            <div class="blog-images wow fadeInUp" data-wow-delay=".1s">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_service_details_web', NAKAMA_THEME_URL . '/assets/images/service/service-details.webp' ) ); ?>" alt="Images">
            </div>
            <h2 class="title title-anim"><?php echo esc_html( $burger_get( 'texto_transforming_customer_tailored_solutio', 'Transforming Customer: Tailored Solutions for Experiences.' ) ); ?></h2>
            <div class="blog-text">
            <p class="wow fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post( $burger_get( 'texto_recognize_that_exceptional_customer_ex', 'Recognize that exceptional customer experiences are at the heart of every successful business. Our Customer Experience Solutions are crafted to help you transform every interaction your customers have with your brand into a meaningful and positive experience. We believe that understanding the customer journey and providing personalized, seamless experiences can significantly enhance customer loyalty, satisfaction, and lifetime value.Our approach to customer experience is comprehensive and data-driven.' ) ); ?>
            </p>
            <p class="wow fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post( $burger_get( 'texto_our_approach_to_customer_experience_is', 'Our approach to customer experience is comprehensive and data-driven. We begin by assessing your current customer touchpoints, identifying areas for improvement, and using insights to develop strategies that meet your customers’ evolving needs. From optimizing digital platforms.' ) ); ?></p>
            <ul class="wow fadeInUp" data-wow-delay=".3s">
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_personalization_at_scale', 'Personalization at Scale' ) ); ?></li>
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_improved_customer_retention', 'Improved Customer Retention' ) ); ?></li>
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_data_driven_insights', 'Data-Driven Insights' ) ); ?></li>
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_omni_channel_integration', 'Omni-channel Integration' ) ); ?></li>
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_customer_retention', 'Customer Retention' ) ); ?></li>
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_support_optimization', 'Support Optimization' ) ); ?></li>
                <li><span><i class="tji-check"></i></span><?php echo esc_html( $burger_get( 'texto_proactive_engagement', 'Proactive Engagement' ) ); ?></li>
            </ul>
            <div class="images-wrap">
                <div class="row">
                <div class="col-sm-6">
                    <div class="image-box wow fadeInUp" data-wow-delay=".3s">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_service_3_webp', NAKAMA_THEME_URL . '/assets/images/service/service-3.webp' ) ); ?>" alt="Image">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="image-box wow fadeInUp" data-wow-delay=".5s">
                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_service_service_4_webp', NAKAMA_THEME_URL . '/assets/images/service/service-4.webp' ) ); ?>" alt="Image">
                    </div>
                </div>
                </div>
            </div>
            <h3 class="wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $burger_get( 'texto_our_range_of_customer_services', 'Our Range of Customer Services' ) ); ?></h3>
            <p class="wow fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post( $burger_get( 'texto_at_bexon_we_don_t_just_focus_on_solvin', 'At Bexon, we don\'t just focus on solving customer problems—we focus on creating experiences that delight and build lasting relationships. Whether it\'s through improving customer service operations, leveraging technology, or designing more engaging digital experiences, our team is here to help you exceed your customers\' expectations every time. We help you understand your customers deeply, optimize their experience.' ) ); ?></p>
            <div class="details-content-box">
                <div class="service-details-item wow fadeInUp" data-wow-delay=".2s">
                <span class="number">01.</span>
                <h6 class="title"><?php echo esc_html( $burger_get( 'texto_increased_customer', 'Increased Customer' ) ); ?> <br><?php echo esc_html( $burger_get( 'texto_satisfaction', 'Satisfaction' ) ); ?></h6>
                <div class="desc">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_by_prov_consistent_personalized_experi', 'By prov consistent, personalized experience, customers are more likely to feel valued a satisfied, which directly.' ) ); ?></p>
                </div>
                </div>
                <div class="service-details-item wow fadeInUp" data-wow-delay=".4s">
                <div class="service-number">
                    <span class="number">02.</span>
                    <h6 class="title"><?php echo esc_html( $burger_get( 'texto_improved_operational', 'Improved Operational' ) ); ?> <br><?php echo esc_html( $burger_get( 'texto_efficiency', 'Efficiency' ) ); ?></h6>
                    <div class="desc">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_with_our_tools_and_strategies_your_cus', 'With our tools and strategies, your customer support teams can handle inquiries faster, while automated systems.' ) ); ?></p>
                    </div>
                </div>
                </div>
                <div class="service-details-item wow fadeInUp" data-wow-delay=".6s">
                <div class="service-number">
                    <span class="number">03.</span>
                    <h6 class="title"><?php echo esc_html( $burger_get( 'texto_insights_for_continuous_improvement', 'Insights for Continuous Improvement' ) ); ?></h6>
                    <div class="desc">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_our_data_driven_approach_provides_team', 'Our data-driven approach provides team with valuable insights into customer behavior, enabling to continual.' ) ); ?></p>
                    </div>
                </div>
                </div>
            </div>
            <h3 class="wow fadeInUp" data-wow-delay=".3s"><?php echo esc_html( $burger_get( 'texto_frequently_asked_questions', 'Frequently asked questions' ) ); ?></h3>
            <div class="accordion tj-faq style-2" id="faqOne">
                <div class="accordion-item active wow fadeInUp" data-wow-delay=".3s">
                <button class=" faq-title" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1"
                    aria-expanded="true"><?php echo esc_html( $burger_get( 'texto_what_is_customer_experience_cx_and_why', 'What is Customer Experience (CX) and why is it important?' ) ); ?></button>
                <div id="faq-1" class="collapse show" data-bs-parent="#faqOne">
                    <div class="accordion-body faq-text">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_customer_experience_cx_refers_to_the_o', 'Customer Experience (CX) refers to the overall impression a customer has of a business based on their interactions across various touchpoints—whether it’s a website visit, a customer support call, or an in-store purchase. It encompasses everything from ease of navigation and service quality to emotional connection and brand perception.' ) ); ?>
                    </p>
                    </div>
                </div>
                </div>
                <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-2" aria-expanded="false"><?php echo esc_html( $burger_get( 'texto_how_can_your_customer_experience_solut', 'How can your Customer Experience Solutions benefit?' ) ); ?></button>
                <div id="faq-2" class="collapse" data-bs-parent="#faqOne">
                    <div class="accordion-body faq-text">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_our_solutions_optimize_every_touchpoin', 'Our solutions optimize every touchpoint of the customer journey, ensuring seamless, personalized, and meaningful interactions. The benefits include improved customer satisfaction, higher retention rates, stronger brand loyalty, and actionable insights to continuously improve your customer engagement strategies. We help integrate these channels so customers feel valued.' ) ); ?></p>
                    </div>
                </div>
                </div>
                <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-3" aria-expanded="false"><?php echo esc_html( $burger_get( 'texto_how_do_you_personalize_the_customer_ex', 'How do you personalize the customer experience?' ) ); ?></button>
                <div id="faq-3" class="collapse" data-bs-parent="#faqOne">
                    <div class="accordion-body faq-text">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_getting_started_is_easy_simply_reach_o', 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.' ) ); ?>
                    </p>
                    </div>
                </div>
                </div>
                <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-4" aria-expanded="false"><?php echo esc_html( $burger_get( 'texto_what_kind_of_tools_do_you_use_to_impro', 'What kind of tools do you use to improve customer experience?' ) ); ?></button>
                <div id="faq-4" class="collapse" data-bs-parent="#faqOne">
                    <div class="accordion-body faq-text">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_getting_started_is_easy_simply_reach_o_2', 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.' ) ); ?>
                    </p>
                    </div>
                </div>
                </div>
                <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-5" aria-expanded="false"><?php echo esc_html( $burger_get( 'texto_how_do_you_collect_customer_feedback', 'How do you collect customer feedback?' ) ); ?></button>
                <div id="faq-5" class="collapse" data-bs-parent="#faqOne">
                    <div class="accordion-body faq-text">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_getting_started_is_easy_simply_reach_o_3', 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.' ) ); ?>
                    </p>
                    </div>
                </div>
                </div>
                <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-6" aria-expanded="false"><?php echo esc_html( $burger_get( 'texto_can_you_help_improve_our_customer_supp', 'Can you help improve our customer support system?' ) ); ?></button>
                <div id="faq-6" class="collapse" data-bs-parent="#faqOne">
                    <div class="accordion-body faq-text">
                    <p><?php echo wp_kses_post( $burger_get( 'texto_getting_started_is_easy_simply_reach_o_4', 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.' ) ); ?>
                    </p>
                    </div>
                </div>
                </div>
            </div>

            </div>
            <div class="tj-post__navigation mb-0 wow fadeInUp" data-wow-delay=".3s">
            <!-- previous post -->
            <div class="tj-nav__post previous">
                <div class="tj-nav-post__nav prev_post">
                <a href="<?php echo esc_url( $burger_get( 'link_service_details_html', 'service-details.html' ) ); ?>"><span><i class="tji-arrow-left"></i></span><?php echo esc_html( $burger_get( 'texto_previous', 'Previous' ) ); ?></a>
                </div>
            </div>
            <div class="tj-nav-post__grid">
                <a href="<?php echo esc_url( $burger_get( 'link_service_html', 'service.html' ) ); ?>"><i class="tji-window"></i></a>
            </div>
            <!-- next post -->
            <div class="tj-nav__post next">
                <div class="tj-nav-post__nav next_post">
                <a href="<?php echo esc_url( $burger_get( 'link_service_details_html_2', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_next', 'Next' ) ); ?><span><i class="tji-arrow-right"></i></span></a>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="tj-main-sidebar slidebar-stickiy">
            <div class="tj-sidebar-widget service-categories wow fadeInUp" data-wow-delay=".1s">
            <h4 class="widget-title"><?php echo esc_html( $burger_get( 'texto_more_services', 'More services' ) ); ?></h4>
            <ul>
                <li><a class="active" href="<?php echo esc_url( $burger_get( 'link_service_details_html_3', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_customer_experience', 'Customer Experience' ) ); ?><span class="icon"><i
                        class="tji-arrow-right"></i></span></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_4', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_training_programs', 'Training Programs' ) ); ?><span class="icon"><i
                        class="tji-arrow-right"></i></span></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_5', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_strategy', 'Business Strategy' ) ); ?><span class="icon"><i
                        class="tji-arrow-right"></i></span></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_6', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_training_program', 'Training Program' ) ); ?><span class="icon"><i
                        class="tji-arrow-right"></i></span></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_7', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_esg_consulting', 'ESG Consulting' ) ); ?><span class="icon"><i
                        class="tji-arrow-right"></i></span></a></li>
                <li><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_8', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_development_hub', 'Development Hub' ) ); ?><span class="icon"><i
                        class="tji-arrow-right"></i></span></a></li>
            </ul>
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
<!-- end: Blog details  Section 3 -->
