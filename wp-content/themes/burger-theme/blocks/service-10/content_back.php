<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<section class="h5-service-section h10-service section-gap">

    <div class="container">

        <div class="row">
            <div class="col-12">
            <div class="sec-heading-wrap style-8">
                <div class="heading-wrap-content">
                <div class="sec-heading style-3">
                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i> <?php echo esc_html( $burger_get( 'texto_our_solutions', 'Our Solutions' ) ); ?></span>
                    <h2 class="sec-title text-anim"><?php echo esc_html( $burger_get( 'texto_tailor_business_solutions_for_corporat', 'Tailor Business Solutions for Corporates.' ) ); ?></h2>
                </div>
                <div class="btn-area wow fadeInUp" data-wow-delay=".8s">
                    <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_service_html', 'service.html' ) ); ?>">
                    <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_explore_more', 'Explore More' ) ); ?></span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="row">

            <div class="col-12">

                <div class="service-wrapper h10-service-wrapper wow fadeInUp" data-wow-delay=".4s">

                    <div class="swiper h10-service-slider">

                        <div class="swiper-wrapper">
                            
                            <div class="swiper-slide">
                                <div class="service-item style-4 wow fadeInUp" data-wow-delay=".1s">
                                    <h6 class="h10-service-sln">01.</h6>
                                    <div class="service-icon">
                                    <i class="tji-service-1"></i>
                                    </div>
                                    <div class="service-content">
                                    <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_strategy_development', 'Business Strategy Development' ) ); ?></a></h4>
                                    <p class="desc"><?php echo esc_html( $burger_get( 'texto_through_a_combination_of_data_driven_i', 'Through a combination of data-driven insights and innovative approaches business.' ) ); ?></p>
                                    <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_2', 'service-details.html' ) ); ?>">
                                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more', 'Learn More' ) ); ?></span></span>
                                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                    </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="service-item style-4 wow fadeInUp" data-wow-delay=".3s">
                                    <h6 class="h10-service-sln">02.</h6>
                                    <div class="service-icon">
                                    <i class="tji-service-2"></i>
                                    </div>
                                    <div class="service-content">
                                    <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_3', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_customer_experience_solutions', 'Customer Experience Solutions' ) ); ?></a></h4>
                                    <p class="desc"><?php echo esc_html( $burger_get( 'texto_through_a_combination_of_data_driven_i_2', 'Through a combination of data-driven insights and innovative approaches business.' ) ); ?></p>
                                    <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_4', 'service-details.html' ) ); ?>">
                                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more_2', 'Learn More' ) ); ?></span></span>
                                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                    </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="service-item style-4 wow fadeInUp" data-wow-delay=".7s">
                                    <h6 class="h10-service-sln">03.</h6>
                                    <div class="service-icon">
                                    <i class="tji-service-3"></i>
                                    </div>
                                    <div class="service-content">
                                    <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_5', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_sustainability_and_esg_consulting', 'Sustainability and ESG Consulting' ) ); ?></a></h4>
                                    <p class="desc"><?php echo esc_html( $burger_get( 'texto_through_a_combination_of_data_driven_i_3', 'Through a combination of data-driven insights and innovative approaches business.' ) ); ?></p>
                                    <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_6', 'service-details.html' ) ); ?>">
                                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more_3', 'Learn More' ) ); ?></span></span>
                                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                    </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="service-item style-4 wow fadeInUp" data-wow-delay=".5s">
                                    <h6 class="h10-service-sln">04.</h6>
                                    <div class="service-icon">
                                    <i class="tji-service-5"></i>
                                    </div>
                                    <div class="service-content">
                                    <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_service_details_html_7', 'service-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_training_and_development_programs', 'Training and Development Programs' ) ); ?></a></h4>
                                    <p class="desc"><?php echo esc_html( $burger_get( 'texto_through_a_combination_of_data_driven_i_4', 'Through a combination of data-driven insights and innovative approaches business.' ) ); ?></p>
                                    <a class="text-btn" href="<?php echo esc_url( $burger_get( 'link_service_details_html_8', 'service-details.html' ) ); ?>">
                                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_learn_more_4', 'Learn More' ) ); ?></span></span>
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