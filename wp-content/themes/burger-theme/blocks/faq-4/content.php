<?php
$content_fields = array(
    'texto_common_questions' => 'Common Questions',
    'texto_need' => 'Need',
    'texto_help' => 'Help?',
    'texto_start_here' => 'Start Here...',
    'texto_what_services_does_bexon_offer_to_clie' => 'What services does Bexon offer to clients?',
    'texto_getting_started_is_easy_simply_reach_o' => 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.',
    'texto_how_do_i_get_started_with_corporate_bu' => 'How do I get started with Corporate Business?',
    'texto_getting_started_is_easy_simply_reach_o_2' => 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.',
    'texto_how_do_you_ensure_the_success_of_a_pro' => 'How do you ensure the success of a project?',
    'texto_getting_started_is_easy_simply_reach_o_3' => 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.',
    'texto_how_long_will_it_take_to_complete_my_p' => 'How long will it take to complete my project?',
    'texto_getting_started_is_easy_simply_reach_o_4' => 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.',
    'texto_can_i_track_the_progress_of_my_project' => 'Can I track the progress of my project?',
    'texto_getting_started_is_easy_simply_reach_o_5' => 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Faq Section 4 -->
<section class="tj-faq-section section-gap section-separator">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="sec-heading text-center">
            <span class="sub-title wow fadeInUp" data-wow-delay=".1s"><i class="tji-box"></i><?php echo esc_html( $texto_common_questions ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $texto_need ); ?> <span><?php echo esc_html( $texto_help ); ?></span> <?php echo esc_html( $texto_start_here ); ?></h2>
        </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="accordion tj-faq" id="faqOne">
            <div class="accordion-item active wow fadeInUp" data-wow-delay=".3s">
                <button class=" faq-title" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1"
                aria-expanded="true"><?php echo esc_html( $texto_what_services_does_bexon_offer_to_clie ); ?></button>
                <div id="faq-1" class="collapse show" data-bs-parent="#faqOne">
                <div class="accordion-body faq-text">
                    <p><?php echo wp_kses_post( $texto_getting_started_is_easy_simply_reach_o ); ?></p>
                </div>
                </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faq-2" aria-expanded="false"><?php echo esc_html( $texto_how_do_i_get_started_with_corporate_bu ); ?></button>
                <div id="faq-2" class="collapse" data-bs-parent="#faqOne">
                <div class="accordion-body faq-text">
                    <p><?php echo wp_kses_post( $texto_getting_started_is_easy_simply_reach_o_2 ); ?></p>
                </div>
                </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faq-3" aria-expanded="false"><?php echo esc_html( $texto_how_do_you_ensure_the_success_of_a_pro ); ?></button>
                <div id="faq-3" class="collapse" data-bs-parent="#faqOne">
                <div class="accordion-body faq-text">
                    <p><?php echo wp_kses_post( $texto_getting_started_is_easy_simply_reach_o_3 ); ?></p>
                </div>
                </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faq-4" aria-expanded="false"><?php echo esc_html( $texto_how_long_will_it_take_to_complete_my_p ); ?></button>
                <div id="faq-4" class="collapse" data-bs-parent="#faqOne">
                <div class="accordion-body faq-text">
                    <p><?php echo wp_kses_post( $texto_getting_started_is_easy_simply_reach_o_4 ); ?></p>
                </div>
                </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                <button class="faq-title collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faq-5" aria-expanded="false"><?php echo esc_html( $texto_can_i_track_the_progress_of_my_project ); ?></button>
                <div id="faq-5" class="collapse" data-bs-parent="#faqOne">
                <div class="accordion-body faq-text">
                    <p><?php echo wp_kses_post( $texto_getting_started_is_easy_simply_reach_o_5 ); ?></p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Faq Section 4 -->
