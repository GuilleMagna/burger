<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
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
                <h3><?php echo esc_html( $burger_get( 'texto_forgot_password', 'Forgot password?' ) ); ?></h3>
                <p><?php echo wp_kses_post( $burger_get( 'texto_please_enter_your_username_or_email_ad', 'Please enter your username or email address carefully. You will receive a secure link to create a new password via email address.' ) ); ?></p>

                <form method="post" class="woocommerce-ResetPassword lost_reset_password">
                    <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                    <label for="user_login"><?php echo esc_html( $burger_get( 'texto_username_or_email', 'Username or email' ) ); ?><span class="required"
                        aria-hidden="true">*</span></label>
                    <input class="woocommerce-Input woocommerce-Input--text input-text" type="text"
                        name="user_login" id="user_login" autocomplete="username" required=""
                        aria-required="true">
                    </p>

                    <div class="clear"></div>


                    <p class="woocommerce-form-row form-row">
                    <input type="hidden" name="wc_reset_password" value="true">
                    <button type="submit" class="woocommerce-Button button" value="Reset password">
                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_reset_password', 'Reset password' ) ); ?></span></span>
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
