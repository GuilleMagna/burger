<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Faq Section -->
<section class="tj-faq-section section-gap tj-arrange-container-2">
    <div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-6">
        <div class="faq-img-area tj-arrange-item-2">
            <div class="faq-img overflow-hidden">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_faq_faq_webp', NAKAMA_THEME_URL . '/assets/images/faq/faq.webp' ) ); ?>" alt="">
            <h2 class="title"><?php echo esc_html( $burger_get( 'texto_need_help_start_here', 'Need Help? Start Here...' ) ); ?></h2>
            </div>
            <div class="box-area ">
            <div class="call-box">
                <h4 class="title"><?php echo esc_html( $burger_get( 'texto_get_started_free_call', 'Get Started Free Call?' ) ); ?> </h4>
                <span class="call-icon"><i class="tji-phone"></i></span>
                <a class="number" href="tel:18884521505"><span>1-888-452-1505</span></a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-6">
        <div class="accordion tj-faq tj-arrange-item-2" id="faqOne">
            <div class="accordion-item active">
            <button class=" faq-title" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1"
                aria-expanded="true"><?php echo esc_html( $burger_get( 'texto_what_services_does_bexon_offer_to_clie', 'What services does Bexon offer to clients?' ) ); ?></button>
            <div id="faq-1" class="collapse show" data-bs-parent="#faqOne">
                <div class="accordion-body faq-text">
                <p><?php echo wp_kses_post( $burger_get( 'texto_getting_started_is_easy_simply_reach_o', 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.' ) ); ?></p>
                </div>
            </div>
            </div>
            <div class="accordion-item">
            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2"
                aria-expanded="false"><?php echo esc_html( $burger_get( 'texto_how_do_i_get_started_with_corporate_bu', 'How do I get started with Corporate Business?' ) ); ?></button>
            <div id="faq-2" class="collapse" data-bs-parent="#faqOne">
                <div class="accordion-body faq-text">
                <p><?php echo wp_kses_post( $burger_get( 'texto_getting_started_is_easy_simply_reach_o_2', 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.' ) ); ?></p>
                </div>
            </div>
            </div>
            <div class="accordion-item">
            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-3"
                aria-expanded="false"><?php echo esc_html( $burger_get( 'texto_how_do_you_ensure_the_success_of_a_pro', 'How do you ensure the success of a project?' ) ); ?></button>
            <div id="faq-3" class="collapse" data-bs-parent="#faqOne">
                <div class="accordion-body faq-text">
                <p><?php echo wp_kses_post( $burger_get( 'texto_getting_started_is_easy_simply_reach_o_3', 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.' ) ); ?></p>
                </div>
            </div>
            </div>
            <div class="accordion-item">
            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-4"
                aria-expanded="false"><?php echo esc_html( $burger_get( 'texto_how_long_will_it_take_to_complete_my_p', 'How long will it take to complete my project?' ) ); ?></button>
            <div id="faq-4" class="collapse" data-bs-parent="#faqOne">
                <div class="accordion-body faq-text">
                <p><?php echo wp_kses_post( $burger_get( 'texto_getting_started_is_easy_simply_reach_o_4', 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.' ) ); ?></p>
                </div>
            </div>
            </div>
            <div class="accordion-item">
            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-5"
                aria-expanded="false"><?php echo esc_html( $burger_get( 'texto_can_i_track_the_progress_of_my_project', 'Can I track the progress of my project?' ) ); ?></button>
            <div id="faq-5" class="collapse" data-bs-parent="#faqOne">
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
<!-- end: Faq Section -->
