<?php
$content_fields = array(
    'texto_forgot_password' => 'Forgot password?',
    'texto_please_enter_your_username_or_email_ad' => 'Please enter your username or email address carefully. You will receive a secure link to create a new password via email address.',
    'texto_username_or_email' => 'Username or email',
    'texto_reset_password' => 'Reset password',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Password Section -->
<section class="full-width tj-page__area section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="tj-page__container">
            <div class="tj-entry__content">
            <div class="woocommerce">
                <div class="woo-lost-password">
                <h3><?php echo esc_html( $texto_forgot_password ); ?></h3>
                <p><?php echo wp_kses_post( $texto_please_enter_your_username_or_email_ad ); ?></p>

                <form method="post" class="woocommerce-ResetPassword lost_reset_password">
                    <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                    <label for="user_login"><?php echo esc_html( $texto_username_or_email ); ?><span class="required"
                        aria-hidden="true">*</span></label>
                    <input class="woocommerce-Input woocommerce-Input--text input-text" type="text"
                        name="user_login" id="user_login" autocomplete="username" required=""
                        aria-required="true">
                    </p>

                    <div class="clear"></div>


                    <p class="woocommerce-form-row form-row">
                    <input type="hidden" name="wc_reset_password" value="true">
                    <button type="submit" class="woocommerce-Button button" value="Reset password">
                        <span class="btn-text"><span><?php echo esc_html( $texto_reset_password ); ?></span></span>
                    </button>
                    </p>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Password Section -->
