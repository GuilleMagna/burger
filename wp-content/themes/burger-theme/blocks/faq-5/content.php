<?php
$__block_fields = function_exists('get_fields') ? (array) get_fields() : [];
$__block_cache_key = 'acf_block_' . md5(($block['id'] ?? basename(__DIR__)) . serialize($__block_fields));

if (($__block_cached_html = get_transient($__block_cache_key)) !== false) {
    echo $__block_cached_html;
    return;
}

ob_start();
?>
<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Faq Section 5 -->
<section class="tj-faq-section section-gap">
    <div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-4">
        <div class="content-wrap">
            <div class="sec-heading">
            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i><?php echo esc_html( $burger_get( 'texto_common_questions', 'Common Questions' ) ); ?></span>
            <h2 class="sec-title title-anim"><?php echo esc_html( $burger_get( 'texto_need', 'Need' ) ); ?> <span><?php echo esc_html( $burger_get( 'texto_help', 'Help?' ) ); ?></span> <?php echo esc_html( $burger_get( 'texto_start_here', 'Start Here...' ) ); ?></h2>
            </div>
            <p class="desc wow fadeInUp" data-wow-delay=".6s"><?php echo esc_html( $burger_get( 'texto_we_stay_ahead_of_curve_leveraging', 'We stay ahead of curve, leveraging' ) ); ?> <br> <?php echo esc_html( $burger_get( 'texto_cutting_edge_are_technologies_and', 'cutting-edge are technologies and' ) ); ?> <br> <?php echo esc_html( $burger_get( 'texto_strategies_to_competitive', 'strategies to competitive' ) ); ?></p>
            <div class="wow fadeInUp" data-wow-delay=".8s">
            <a class="tj-primary-btn" href="<?php echo esc_url( $burger_get( 'link_contact_html', 'contact.html' ) ); ?>">
                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_request_a_call', 'Request a Call' ) ); ?></span></span>
                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
            </a>
            </div>
        </div>
        </div>
        <div class="col-lg-8">
        <div class="accordion tj-faq" id="faqOne">
            <div class="accordion-item active wow fadeInUp" data-wow-delay=".3s">
            <button class=" faq-title" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1"
                aria-expanded="true"><?php echo esc_html( $burger_get( 'texto_what_services_does_bexon_offer_to_clie', 'What services does Bexon offer to clients?' ) ); ?></button>
            <div id="faq-1" class="collapse show" data-bs-parent="#faqOne">
                <div class="accordion-body faq-text">
                <p><?php echo wp_kses_post( $burger_get( 'texto_getting_started_is_easy_simply_reach_o', 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.' ) ); ?></p>
                </div>
            </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay=".4s">
            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2"
                aria-expanded="false"><?php echo esc_html( $burger_get( 'texto_how_do_i_get_started_with_corporate_bu', 'How do I get started with Corporate Business?' ) ); ?></button>
            <div id="faq-2" class="collapse" data-bs-parent="#faqOne">
                <div class="accordion-body faq-text">
                <p><?php echo wp_kses_post( $burger_get( 'texto_getting_started_is_easy_simply_reach_o_2', 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.' ) ); ?></p>
                </div>
            </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-3"
                aria-expanded="false"><?php echo esc_html( $burger_get( 'texto_how_do_you_ensure_the_success_of_a_pro', 'How do you ensure the success of a project?' ) ); ?></button>
            <div id="faq-3" class="collapse" data-bs-parent="#faqOne">
                <div class="accordion-body faq-text">
                <p><?php echo wp_kses_post( $burger_get( 'texto_getting_started_is_easy_simply_reach_o_3', 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.' ) ); ?></p>
                </div>
            </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay=".6s">
            <button class="faq-title collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-4"
                aria-expanded="false"><?php echo esc_html( $burger_get( 'texto_how_long_will_it_take_to_complete_my_p', 'How long will it take to complete my project?' ) ); ?></button>
            <div id="faq-4" class="collapse" data-bs-parent="#faqOne">
                <div class="accordion-body faq-text">
                <p><?php echo wp_kses_post( $burger_get( 'texto_getting_started_is_easy_simply_reach_o_4', 'Getting started is easy! Simply reach out to us through our contact form or give us a call, and we’ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.' ) ); ?></p>
                </div>
            </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
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
<!-- end: Faq Section 5 -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
