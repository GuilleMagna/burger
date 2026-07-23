<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Faq Section 2 -->
<section class="tj-faq-section section-gap">
    <div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-6">
        <div class="faq-img-area wow fadeInLeft" data-wow-delay=".3s">
            <div class="faq-img">
            <img data-speed=".8" src="<?php echo esc_url( $burger_get( 'imagen_assets_images_faq_faq_webp', NAKAMA_THEME_URL . '/assets/images/faq/faq.webp' ) ); ?>" alt="">
            <h2 class="title title-anim"><?php echo esc_html( $burger_get( 'texto_need_help_start_here', 'Need Help? Start Here...' ) ); ?></h2>
            </div>
            <div class="box-area">
            <div class="call-box wow fadeInUp" data-wow-delay=".5s">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_get_started_free_call', 'Get Started Free Call?' ) ); ?> </h4>
                <span class="call-icon"><i class="tji-phone"></i></span>
                <a class="number" href="tel:18884521505"><span>1-888-452-1505</span></a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-6">
        <div class="accordion tj-faq style-2" id="faqTwo">
            <div class="accordion-item active wow fadeInUp" data-wow-delay=".3s">
            <button class=" faq-title" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo-1"
                aria-expanded="true"><?php echo esc_html( $burger_get( 'texto_what_services_does_bexon_offer_to_clie', 'What services does Bexon offer to clients?' ) ); ?></button>
            <div id="faqTwo-1" class="collapse show" data-bs-parent="#faqTwo">
                <div class="accordion-body faq-text">
                <p><?php echo wp_kses_post( $burger_get( 'texto_getting_started_is_easy_simply_reach_o', 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.' ) ); ?></p>
                </div>
            </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faqTwo-2" aria-expanded="false"><?php echo esc_html( $burger_get( 'texto_how_do_i_get_started_with_corporate_bu', 'How do I get started with Corporate Business?' ) ); ?></button>
            <div id="faqTwo-2" class="collapse" data-bs-parent="#faqTwo">
                <div class="accordion-body faq-text">
                <p><?php echo wp_kses_post( $burger_get( 'texto_getting_started_is_easy_simply_reach_o_2', 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.' ) ); ?></p>
                </div>
            </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faqTwo-3" aria-expanded="false"><?php echo esc_html( $burger_get( 'texto_how_do_you_ensure_the_success_of_a_pro', 'How do you ensure the success of a project?' ) ); ?></button>
            <div id="faqTwo-3" class="collapse" data-bs-parent="#faqTwo">
                <div class="accordion-body faq-text">
                <p><?php echo wp_kses_post( $burger_get( 'texto_getting_started_is_easy_simply_reach_o_3', 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.' ) ); ?></p>
                </div>
            </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faqTwo-4" aria-expanded="false"><?php echo esc_html( $burger_get( 'texto_how_long_will_it_take_to_complete_my_p', 'How long will it take to complete my project?' ) ); ?></button>
            <div id="faqTwo-4" class="collapse" data-bs-parent="#faqTwo">
                <div class="accordion-body faq-text">
                <p><?php echo wp_kses_post( $burger_get( 'texto_getting_started_is_easy_simply_reach_o_4', 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.' ) ); ?></p>
                </div>
            </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faqTwo-5" aria-expanded="false"><?php echo esc_html( $burger_get( 'texto_can_i_track_the_progress_of_my_project', 'Can I track the progress of my project?' ) ); ?></button>
            <div id="faqTwo-5" class="collapse" data-bs-parent="#faqTwo">
                <div class="accordion-body faq-text">
                <p><?php echo wp_kses_post( $burger_get( 'texto_getting_started_is_easy_simply_reach_o_5', 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.' ) ); ?></p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Faq Section 2 -->
