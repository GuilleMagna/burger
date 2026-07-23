<?php
$content_fields = array(
    'texto_login' => 'Login',
    'texto_username_or_email_address' => 'Username or email address',
    'texto_password' => 'Password',
    'texto_remember_me' => 'Remember me',
    'link_password_html' => 'password.html',
    'texto_lost_your_password' => 'Lost your password?',
    'texto_login_2' => 'Login',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

?>

<!-- start: Login Section -->
<section class="full-width tj-page__area section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="tj-page__container">
            <div class="tj-entry__content">
            <div class="woocommerce">
                <div class="woo-login-form">
                <h3><?php echo esc_html( $texto_login ); ?></h3>

                <form class="woocommerce-form woocommerce-form-login login" method="post" novalidate="">
                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label for="username"><?php echo esc_html( $texto_username_or_email_address ); ?><span class="required"
                        aria-hidden="true">*</span></label>
                    <input type="text" name="username" id="username" autocomplete="username" value=""
                        required="" aria-required="true">
                    </p>
                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label for="password"><?php echo esc_html( $texto_password ); ?><span class="required"
                        aria-hidden="true">*</span></label>
                    <span class="password-input"><input type="password" name="password" id="password"
                        autocomplete="current-password" required="" aria-required="true"><button type="button"
                        class="show-password-input" aria-label="Show password"
                        aria-describedby="password"></button></span>
                    </p>

                    <div class="row form-row algin-items-center rg-15">
                    <div class="col-6">
                        <label
                        class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                        <input class="woocommerce-form__input woocommerce-form__input-checkbox"
                            name="rememberme" type="checkbox" id="rememberme" value="forever"> <span><?php echo esc_html( $texto_remember_me ); ?></span>
                        </label>
                    </div>
                    <div class="col-6 text-end">
                        <p class="woocommerce-LostPassword lost_password">
                        <a href="<?php echo esc_url( $link_password_html ); ?>"><?php echo esc_html( $texto_lost_your_password ); ?></a>
                        </p>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="woocommerce-button button woocommerce-form-login__submit"
                        name="login" value="Log in">
                        <span class="btn-text"><span><?php echo esc_html( $texto_login_2 ); ?></span></span>
                        </button>
                    </div>
                    </div>


                </form>
                </div>


            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Login Section -->
