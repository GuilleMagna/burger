<?php
$content_fields = array(
    'texto_common_questions' => 'Common Questions',
    'texto_need' => 'Need',
    'texto_help' => 'Help?',
    'texto_start_here' => 'Start Here...',
    'texto_we_stay_ahead_of_curve_leveraging' => 'We stay ahead of curve, leveraging',
    'texto_cutting_edge_are_technologies_and' => 'cutting-edge are technologies and',
    'texto_strategies_to_competitive' => 'strategies to competitive',
    'link_contact_html' => 'contact.html',
    'texto_request_a_call' => 'Request a Call',
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

<!-- start: Faq Section 5 -->
<section class="tj-faq-section section-gap">
    <div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-4">
        <div class="content-wrap">
            <div class="sec-heading">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $texto_common_questions ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $texto_need ); ?> <span><?php echo esc_html( $texto_help ); ?></span> <?php echo esc_html( $texto_start_here ); ?></h2>
            </div>
            <p class="desc wow fadeInUp" data-wow-delay=".6s"><?php echo esc_html( $texto_we_stay_ahead_of_curve_leveraging ); ?> <br> <?php echo esc_html( $texto_cutting_edge_are_technologies_and ); ?> <br> <?php echo esc_html( $texto_strategies_to_competitive ); ?></p>
            <div class="wow fadeInUp" data-wow-delay=".8s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $link_contact_html ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $texto_request_a_call ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
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
            <div class="accordion-item wow fadeInUp" data-wow-delay=".4s">
            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2"
                aria-expanded="false"><?php echo esc_html( $texto_how_do_i_get_started_with_corporate_bu ); ?></button>
            <div id="faq-2" class="collapse" data-bs-parent="#faqOne">
                <div class="accordion-body faq-text">
                <p><?php echo wp_kses_post( $texto_getting_started_is_easy_simply_reach_o_2 ); ?></p>
                </div>
            </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-3"
                aria-expanded="false"><?php echo esc_html( $texto_how_do_you_ensure_the_success_of_a_pro ); ?></button>
            <div id="faq-3" class="collapse" data-bs-parent="#faqOne">
                <div class="accordion-body faq-text">
                <p><?php echo wp_kses_post( $texto_getting_started_is_easy_simply_reach_o_3 ); ?></p>
                </div>
            </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay=".6s">
            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-4"
                aria-expanded="false"><?php echo esc_html( $texto_how_long_will_it_take_to_complete_my_p ); ?></button>
            <div id="faq-4" class="collapse" data-bs-parent="#faqOne">
                <div class="accordion-body faq-text">
                <p><?php echo wp_kses_post( $texto_getting_started_is_easy_simply_reach_o_4 ); ?></p>
                </div>
            </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-5"
                aria-expanded="false"><?php echo esc_html( $texto_can_i_track_the_progress_of_my_project ); ?></button>
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
</section>
<!-- end: Faq Section 5 -->
