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

<!-- start: Checkout Section -->
<section class="full-width tj-page__area section-gap woocommerce-checkout">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="tj-page__container">
            <div class="tj-entry__content">
            <div class="woocommerce">
                <div class="row">
                <div class="col-lg-12">
                    <div class="tj-checkout-billing-coupon">
                    <div class="woocommerce-form-coupon-toggle">
                        <div class="woocommerce-info">
                        <?php echo esc_html( $burger_get( 'texto_have_a_coupon', 'Have a coupon?' ) ); ?>
                        <a href="#" class="showcoupon"><?php echo esc_html( $burger_get( 'texto_click_here_to_enter_your_code', 'Click here to enter your code' ) ); ?></a>
                        </div>
                    </div>

                    <form class="checkout_coupon woocommerce-form-coupon" method="post">

                        <p><?php echo esc_html( $burger_get( 'texto_if_you_have_a_coupon_code_please_apply', 'If you have a coupon code, please apply it below.' ) ); ?></p>

                        <div class="d-flex align-items-center flex-wrap rg-30">
                        <div class="form-row form-row-first">
                            <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code"
                            id="coupon_code" value="">
                        </div>
                        <div class="form-row form-row-last">
                            <button type="submit" class="tj-primary-btn button" name="apply_coupon"
                            value="Apply coupon">
                            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_apply_coupon', 'Apply coupon' ) ); ?></span></span>
                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>

                            </button>
                        </div>
                        </div>
                        <div class="clear"></div>
                    </form>
                    </div>
                </div>
                </div>

                <form name="checkout" method="post" class="checkout" action="#">
                <div class="row rg-40" id="customer_details">
                    <div class="col-sm-12">
                    <div class="tj-checkout-billing-wrapper" id="customer_form_details">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="woocommerce-billing-fields">
                            <h3><?php echo esc_html( $burger_get( 'texto_billing_details', 'Billing details' ) ); ?></h3>
                            <div class="woocommerce-billing-fields__field-wrapper">
                                <p class="form-row form-row-first validate-required" id="billing_first_name_field"
                                data-priority="10">
                                <label for="billing_first_name" class="required_field"><?php echo esc_html( $burger_get( 'texto_first_name', 'First name' ) ); ?><span class="required" aria-hidden="true">*</span></label>
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text " name="billing_first_name"
                                    id="billing_first_name" placeholder="" value="" aria-required="true"
                                    autocomplete="given-name">
                                </span>
                                </p>
                                <p class="form-row form-row-last validate-required" id="billing_last_name_field"
                                data-priority="20">
                                <label for="billing_last_name" class="required_field"><?php echo esc_html( $burger_get( 'texto_last_name', 'Last name' ) ); ?><span class="required" aria-hidden="true">*</span></label>
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text " name="billing_last_name"
                                    id="billing_last_name" placeholder="" value="" aria-required="true"
                                    autocomplete="family-name">
                                </span>
                                </p>
                                <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                id="billing_country_field" data-priority="40">
                                <label for="billing_country" class="required_field"><?php echo esc_html( $burger_get( 'texto_country_region', 'Country / Region' ) ); ?><span
                                    class="required" aria-hidden="true">*</span></label>
                                <span class="woocommerce-input-wrapper">
                                    <select name="billing_country" id="billing_country" class="country_to_state"
                                    autocomplete="country" data-placeholder="Select a country / region…">
                                    <option value=""><?php echo esc_html( $burger_get( 'texto_select_a_country_region', 'Select a country / region…' ) ); ?></option>
                                    <option value="AF"><?php echo esc_html( $burger_get( 'texto_afghanistan', 'Afghanistan' ) ); ?></option>
                                    <option value="AX"><?php echo esc_html( $burger_get( 'texto_land_islands', 'Åland Islands' ) ); ?></option>
                                    <option value="AL"><?php echo esc_html( $burger_get( 'texto_albania', 'Albania' ) ); ?></option>
                                    <option value="DZ"><?php echo esc_html( $burger_get( 'texto_algeria', 'Algeria' ) ); ?></option>
                                    <option value="AS"><?php echo esc_html( $burger_get( 'texto_american_samoa', 'American Samoa' ) ); ?></option>
                                    <option value="AD"><?php echo esc_html( $burger_get( 'texto_andorra', 'Andorra' ) ); ?></option>
                                    <option value="AO"><?php echo esc_html( $burger_get( 'texto_angola', 'Angola' ) ); ?></option>
                                    <option value="AI"><?php echo esc_html( $burger_get( 'texto_anguilla', 'Anguilla' ) ); ?></option>
                                    <option value="AQ"><?php echo esc_html( $burger_get( 'texto_antarctica', 'Antarctica' ) ); ?></option>
                                    <option value="AG"><?php echo esc_html( $burger_get( 'texto_antigua_and_barbuda', 'Antigua and Barbuda' ) ); ?></option>
                                    <option value="AR"><?php echo esc_html( $burger_get( 'texto_argentina', 'Argentina' ) ); ?></option>
                                    <option value="AM"><?php echo esc_html( $burger_get( 'texto_armenia', 'Armenia' ) ); ?></option>
                                    <option value="AW"><?php echo esc_html( $burger_get( 'texto_aruba', 'Aruba' ) ); ?></option>
                                    <option value="AU"><?php echo esc_html( $burger_get( 'texto_australia', 'Australia' ) ); ?></option>
                                    <option value="AT"><?php echo esc_html( $burger_get( 'texto_austria', 'Austria' ) ); ?></option>
                                    <option value="AZ"><?php echo esc_html( $burger_get( 'texto_azerbaijan', 'Azerbaijan' ) ); ?></option>
                                    <option value="BS"><?php echo esc_html( $burger_get( 'texto_bahamas', 'Bahamas' ) ); ?></option>
                                    <option value="BH"><?php echo esc_html( $burger_get( 'texto_bahrain', 'Bahrain' ) ); ?></option>
                                    <option value="BD"><?php echo esc_html( $burger_get( 'texto_bangladesh', 'Bangladesh' ) ); ?></option>
                                    <option value="BB"><?php echo esc_html( $burger_get( 'texto_barbados', 'Barbados' ) ); ?></option>
                                    <option value="BY"><?php echo esc_html( $burger_get( 'texto_belarus', 'Belarus' ) ); ?></option>
                                    <option value="PW"><?php echo esc_html( $burger_get( 'texto_belau', 'Belau' ) ); ?></option>
                                    <option value="BE"><?php echo esc_html( $burger_get( 'texto_belgium', 'Belgium' ) ); ?></option>
                                    <option value="BZ"><?php echo esc_html( $burger_get( 'texto_belize', 'Belize' ) ); ?></option>
                                    <option value="BJ"><?php echo esc_html( $burger_get( 'texto_benin', 'Benin' ) ); ?></option>
                                    <option value="BM"><?php echo esc_html( $burger_get( 'texto_bermuda', 'Bermuda' ) ); ?></option>
                                    <option value="BT"><?php echo esc_html( $burger_get( 'texto_bhutan', 'Bhutan' ) ); ?></option>
                                    <option value="BO"><?php echo esc_html( $burger_get( 'texto_bolivia', 'Bolivia' ) ); ?></option>
                                    <option value="BQ"><?php echo esc_html( $burger_get( 'texto_bonaire_saint_eustatius_and_saba', 'Bonaire, Saint Eustatius and Saba' ) ); ?></option>
                                    <option value="BA"><?php echo esc_html( $burger_get( 'texto_bosnia_and_herzegovina', 'Bosnia and Herzegovina' ) ); ?></option>
                                    <option value="BW"><?php echo esc_html( $burger_get( 'texto_botswana', 'Botswana' ) ); ?></option>
                                    <option value="BV"><?php echo esc_html( $burger_get( 'texto_bouvet_island', 'Bouvet Island' ) ); ?></option>
                                    <option value="BR"><?php echo esc_html( $burger_get( 'texto_brazil', 'Brazil' ) ); ?></option>
                                    <option value="IO"><?php echo esc_html( $burger_get( 'texto_british_indian_ocean_territory', 'British Indian Ocean Territory' ) ); ?></option>
                                    <option value="BN"><?php echo esc_html( $burger_get( 'texto_brunei', 'Brunei' ) ); ?></option>
                                    <option value="BG"><?php echo esc_html( $burger_get( 'texto_bulgaria', 'Bulgaria' ) ); ?></option>
                                    <option value="BF"><?php echo esc_html( $burger_get( 'texto_burkina_faso', 'Burkina Faso' ) ); ?></option>
                                    <option value="BI"><?php echo esc_html( $burger_get( 'texto_burundi', 'Burundi' ) ); ?></option>
                                    <option value="KH"><?php echo esc_html( $burger_get( 'texto_cambodia', 'Cambodia' ) ); ?></option>
                                    <option value="CM"><?php echo esc_html( $burger_get( 'texto_cameroon', 'Cameroon' ) ); ?></option>
                                    <option value="CA"><?php echo esc_html( $burger_get( 'texto_canada', 'Canada' ) ); ?></option>
                                    <option value="CV"><?php echo esc_html( $burger_get( 'texto_cape_verde', 'Cape Verde' ) ); ?></option>
                                    <option value="KY"><?php echo esc_html( $burger_get( 'texto_cayman_islands', 'Cayman Islands' ) ); ?></option>
                                    <option value="CF"><?php echo esc_html( $burger_get( 'texto_central_african_republic', 'Central African Republic' ) ); ?></option>
                                    <option value="TD"><?php echo esc_html( $burger_get( 'texto_chad', 'Chad' ) ); ?></option>
                                    <option value="CL"><?php echo esc_html( $burger_get( 'texto_chile', 'Chile' ) ); ?></option>
                                    <option value="CN"><?php echo esc_html( $burger_get( 'texto_china', 'China' ) ); ?></option>
                                    <option value="CX"><?php echo esc_html( $burger_get( 'texto_christmas_island', 'Christmas Island' ) ); ?></option>
                                    <option value="CC"><?php echo esc_html( $burger_get( 'texto_cocos_keeling_islands', 'Cocos (Keeling) Islands' ) ); ?></option>
                                    <option value="CO"><?php echo esc_html( $burger_get( 'texto_colombia', 'Colombia' ) ); ?></option>
                                    <option value="KM"><?php echo esc_html( $burger_get( 'texto_comoros', 'Comoros' ) ); ?></option>
                                    <option value="CG"><?php echo esc_html( $burger_get( 'texto_congo_brazzaville', 'Congo (Brazzaville)' ) ); ?></option>
                                    <option value="CD"><?php echo esc_html( $burger_get( 'texto_congo_kinshasa', 'Congo (Kinshasa)' ) ); ?></option>
                                    <option value="CK"><?php echo esc_html( $burger_get( 'texto_cook_islands', 'Cook Islands' ) ); ?></option>
                                    <option value="CR"><?php echo esc_html( $burger_get( 'texto_costa_rica', 'Costa Rica' ) ); ?></option>
                                    <option value="HR"><?php echo esc_html( $burger_get( 'texto_croatia', 'Croatia' ) ); ?></option>
                                    <option value="CU"><?php echo esc_html( $burger_get( 'texto_cuba', 'Cuba' ) ); ?></option>
                                    <option value="CW"><?php echo esc_html( $burger_get( 'texto_cura_ao', 'Curaçao' ) ); ?></option>
                                    <option value="CY"><?php echo esc_html( $burger_get( 'texto_cyprus', 'Cyprus' ) ); ?></option>
                                    <option value="CZ"><?php echo esc_html( $burger_get( 'texto_czech_republic', 'Czech Republic' ) ); ?></option>
                                    <option value="DK"><?php echo esc_html( $burger_get( 'texto_denmark', 'Denmark' ) ); ?></option>
                                    <option value="DJ"><?php echo esc_html( $burger_get( 'texto_djibouti', 'Djibouti' ) ); ?></option>
                                    <option value="DM"><?php echo esc_html( $burger_get( 'texto_dominica', 'Dominica' ) ); ?></option>
                                    <option value="DO"><?php echo esc_html( $burger_get( 'texto_dominican_republic', 'Dominican Republic' ) ); ?></option>
                                    <option value="EC"><?php echo esc_html( $burger_get( 'texto_ecuador', 'Ecuador' ) ); ?></option>
                                    <option value="EG"><?php echo esc_html( $burger_get( 'texto_egypt', 'Egypt' ) ); ?></option>
                                    <option value="SV"><?php echo esc_html( $burger_get( 'texto_el_salvador', 'El Salvador' ) ); ?></option>
                                    <option value="GQ"><?php echo esc_html( $burger_get( 'texto_equatorial_guinea', 'Equatorial Guinea' ) ); ?></option>
                                    <option value="ER"><?php echo esc_html( $burger_get( 'texto_eritrea', 'Eritrea' ) ); ?></option>
                                    <option value="EE"><?php echo esc_html( $burger_get( 'texto_estonia', 'Estonia' ) ); ?></option>
                                    <option value="SZ"><?php echo esc_html( $burger_get( 'texto_eswatini', 'Eswatini' ) ); ?></option>
                                    <option value="ET"><?php echo esc_html( $burger_get( 'texto_ethiopia', 'Ethiopia' ) ); ?></option>
                                    <option value="FK"><?php echo esc_html( $burger_get( 'texto_falkland_islands', 'Falkland Islands' ) ); ?></option>
                                    <option value="FO"><?php echo esc_html( $burger_get( 'texto_faroe_islands', 'Faroe Islands' ) ); ?></option>
                                    <option value="FJ"><?php echo esc_html( $burger_get( 'texto_fiji', 'Fiji' ) ); ?></option>
                                    <option value="FI"><?php echo esc_html( $burger_get( 'texto_finland', 'Finland' ) ); ?></option>
                                    <option value="FR"><?php echo esc_html( $burger_get( 'texto_france', 'France' ) ); ?></option>
                                    <option value="GF"><?php echo esc_html( $burger_get( 'texto_french_guiana', 'French Guiana' ) ); ?></option>
                                    <option value="PF"><?php echo esc_html( $burger_get( 'texto_french_polynesia', 'French Polynesia' ) ); ?></option>
                                    <option value="TF"><?php echo esc_html( $burger_get( 'texto_french_southern_territories', 'French Southern Territories' ) ); ?></option>
                                    <option value="GA"><?php echo esc_html( $burger_get( 'texto_gabon', 'Gabon' ) ); ?></option>
                                    <option value="GM"><?php echo esc_html( $burger_get( 'texto_gambia', 'Gambia' ) ); ?></option>
                                    <option value="GE"><?php echo esc_html( $burger_get( 'texto_georgia', 'Georgia' ) ); ?></option>
                                    <option value="DE"><?php echo esc_html( $burger_get( 'texto_germany', 'Germany' ) ); ?></option>
                                    <option value="GH"><?php echo esc_html( $burger_get( 'texto_ghana', 'Ghana' ) ); ?></option>
                                    <option value="GI"><?php echo esc_html( $burger_get( 'texto_gibraltar', 'Gibraltar' ) ); ?></option>
                                    <option value="GR"><?php echo esc_html( $burger_get( 'texto_greece', 'Greece' ) ); ?></option>
                                    <option value="GL"><?php echo esc_html( $burger_get( 'texto_greenland', 'Greenland' ) ); ?></option>
                                    <option value="GD"><?php echo esc_html( $burger_get( 'texto_grenada', 'Grenada' ) ); ?></option>
                                    <option value="GP"><?php echo esc_html( $burger_get( 'texto_guadeloupe', 'Guadeloupe' ) ); ?></option>
                                    <option value="GU"><?php echo esc_html( $burger_get( 'texto_guam', 'Guam' ) ); ?></option>
                                    <option value="GT"><?php echo esc_html( $burger_get( 'texto_guatemala', 'Guatemala' ) ); ?></option>
                                    <option value="GG"><?php echo esc_html( $burger_get( 'texto_guernsey', 'Guernsey' ) ); ?></option>
                                    <option value="GN"><?php echo esc_html( $burger_get( 'texto_guinea', 'Guinea' ) ); ?></option>
                                    <option value="GW"><?php echo esc_html( $burger_get( 'texto_guinea_bissau', 'Guinea-Bissau' ) ); ?></option>
                                    <option value="GY"><?php echo esc_html( $burger_get( 'texto_guyana', 'Guyana' ) ); ?></option>
                                    <option value="HT"><?php echo esc_html( $burger_get( 'texto_haiti', 'Haiti' ) ); ?></option>
                                    <option value="HM"><?php echo esc_html( $burger_get( 'texto_heard_island_and_mcdonald_islands', 'Heard Island and McDonald Islands' ) ); ?></option>
                                    <option value="HN"><?php echo esc_html( $burger_get( 'texto_honduras', 'Honduras' ) ); ?></option>
                                    <option value="HK"><?php echo esc_html( $burger_get( 'texto_hong_kong', 'Hong Kong' ) ); ?></option>
                                    <option value="HU"><?php echo esc_html( $burger_get( 'texto_hungary', 'Hungary' ) ); ?></option>
                                    <option value="IS"><?php echo esc_html( $burger_get( 'texto_iceland', 'Iceland' ) ); ?></option>
                                    <option value="IN"><?php echo esc_html( $burger_get( 'texto_india', 'India' ) ); ?></option>
                                    <option value="ID"><?php echo esc_html( $burger_get( 'texto_indonesia', 'Indonesia' ) ); ?></option>
                                    <option value="IR"><?php echo esc_html( $burger_get( 'texto_iran', 'Iran' ) ); ?></option>
                                    <option value="IQ"><?php echo esc_html( $burger_get( 'texto_iraq', 'Iraq' ) ); ?></option>
                                    <option value="IE"><?php echo esc_html( $burger_get( 'texto_ireland', 'Ireland' ) ); ?></option>
                                    <option value="IM"><?php echo esc_html( $burger_get( 'texto_isle_of_man', 'Isle of Man' ) ); ?></option>
                                    <option value="IL"><?php echo esc_html( $burger_get( 'texto_israel', 'Israel' ) ); ?></option>
                                    <option value="IT"><?php echo esc_html( $burger_get( 'texto_italy', 'Italy' ) ); ?></option>
                                    <option value="CI"><?php echo esc_html( $burger_get( 'texto_ivory_coast', 'Ivory Coast' ) ); ?></option>
                                    <option value="JM"><?php echo esc_html( $burger_get( 'texto_jamaica', 'Jamaica' ) ); ?></option>
                                    <option value="JP"><?php echo esc_html( $burger_get( 'texto_japan', 'Japan' ) ); ?></option>
                                    <option value="JE"><?php echo esc_html( $burger_get( 'texto_jersey', 'Jersey' ) ); ?></option>
                                    <option value="JO"><?php echo esc_html( $burger_get( 'texto_jordan', 'Jordan' ) ); ?></option>
                                    <option value="KZ"><?php echo esc_html( $burger_get( 'texto_kazakhstan', 'Kazakhstan' ) ); ?></option>
                                    <option value="KE"><?php echo esc_html( $burger_get( 'texto_kenya', 'Kenya' ) ); ?></option>
                                    <option value="KI"><?php echo esc_html( $burger_get( 'texto_kiribati', 'Kiribati' ) ); ?></option>
                                    <option value="KW"><?php echo esc_html( $burger_get( 'texto_kuwait', 'Kuwait' ) ); ?></option>
                                    <option value="KG"><?php echo esc_html( $burger_get( 'texto_kyrgyzstan', 'Kyrgyzstan' ) ); ?></option>
                                    <option value="LA"><?php echo esc_html( $burger_get( 'texto_laos', 'Laos' ) ); ?></option>
                                    <option value="LV"><?php echo esc_html( $burger_get( 'texto_latvia', 'Latvia' ) ); ?></option>
                                    <option value="LB"><?php echo esc_html( $burger_get( 'texto_lebanon', 'Lebanon' ) ); ?></option>
                                    <option value="LS"><?php echo esc_html( $burger_get( 'texto_lesotho', 'Lesotho' ) ); ?></option>
                                    <option value="LR"><?php echo esc_html( $burger_get( 'texto_liberia', 'Liberia' ) ); ?></option>
                                    <option value="LY"><?php echo esc_html( $burger_get( 'texto_libya', 'Libya' ) ); ?></option>
                                    <option value="LI"><?php echo esc_html( $burger_get( 'texto_liechtenstein', 'Liechtenstein' ) ); ?></option>
                                    <option value="LT"><?php echo esc_html( $burger_get( 'texto_lithuania', 'Lithuania' ) ); ?></option>
                                    <option value="LU"><?php echo esc_html( $burger_get( 'texto_luxembourg', 'Luxembourg' ) ); ?></option>
                                    <option value="MO"><?php echo esc_html( $burger_get( 'texto_macao', 'Macao' ) ); ?></option>
                                    <option value="MG"><?php echo esc_html( $burger_get( 'texto_madagascar', 'Madagascar' ) ); ?></option>
                                    <option value="MW"><?php echo esc_html( $burger_get( 'texto_malawi', 'Malawi' ) ); ?></option>
                                    <option value="MY"><?php echo esc_html( $burger_get( 'texto_malaysia', 'Malaysia' ) ); ?></option>
                                    <option value="MV"><?php echo esc_html( $burger_get( 'texto_maldives', 'Maldives' ) ); ?></option>
                                    <option value="ML"><?php echo esc_html( $burger_get( 'texto_mali', 'Mali' ) ); ?></option>
                                    <option value="MT"><?php echo esc_html( $burger_get( 'texto_malta', 'Malta' ) ); ?></option>
                                    <option value="MH"><?php echo esc_html( $burger_get( 'texto_marshall_islands', 'Marshall Islands' ) ); ?></option>
                                    <option value="MQ"><?php echo esc_html( $burger_get( 'texto_martinique', 'Martinique' ) ); ?></option>
                                    <option value="MR"><?php echo esc_html( $burger_get( 'texto_mauritania', 'Mauritania' ) ); ?></option>
                                    <option value="MU"><?php echo esc_html( $burger_get( 'texto_mauritius', 'Mauritius' ) ); ?></option>
                                    <option value="YT"><?php echo esc_html( $burger_get( 'texto_mayotte', 'Mayotte' ) ); ?></option>
                                    <option value="MX"><?php echo esc_html( $burger_get( 'texto_mexico', 'Mexico' ) ); ?></option>
                                    <option value="FM"><?php echo esc_html( $burger_get( 'texto_micronesia', 'Micronesia' ) ); ?></option>
                                    <option value="MD"><?php echo esc_html( $burger_get( 'texto_moldova', 'Moldova' ) ); ?></option>
                                    <option value="MC"><?php echo esc_html( $burger_get( 'texto_monaco', 'Monaco' ) ); ?></option>
                                    <option value="MN"><?php echo esc_html( $burger_get( 'texto_mongolia', 'Mongolia' ) ); ?></option>
                                    <option value="ME"><?php echo esc_html( $burger_get( 'texto_montenegro', 'Montenegro' ) ); ?></option>
                                    <option value="MS"><?php echo esc_html( $burger_get( 'texto_montserrat', 'Montserrat' ) ); ?></option>
                                    <option value="MA"><?php echo esc_html( $burger_get( 'texto_morocco', 'Morocco' ) ); ?></option>
                                    <option value="MZ"><?php echo esc_html( $burger_get( 'texto_mozambique', 'Mozambique' ) ); ?></option>
                                    <option value="MM"><?php echo esc_html( $burger_get( 'texto_myanmar', 'Myanmar' ) ); ?></option>
                                    <option value="NA"><?php echo esc_html( $burger_get( 'texto_namibia', 'Namibia' ) ); ?></option>
                                    <option value="NR"><?php echo esc_html( $burger_get( 'texto_nauru', 'Nauru' ) ); ?></option>
                                    <option value="NP"><?php echo esc_html( $burger_get( 'texto_nepal', 'Nepal' ) ); ?></option>
                                    <option value="NL"><?php echo esc_html( $burger_get( 'texto_netherlands', 'Netherlands' ) ); ?></option>
                                    <option value="NC"><?php echo esc_html( $burger_get( 'texto_new_caledonia', 'New Caledonia' ) ); ?></option>
                                    <option value="NZ"><?php echo esc_html( $burger_get( 'texto_new_zealand', 'New Zealand' ) ); ?></option>
                                    <option value="NI"><?php echo esc_html( $burger_get( 'texto_nicaragua', 'Nicaragua' ) ); ?></option>
                                    <option value="NE"><?php echo esc_html( $burger_get( 'texto_niger', 'Niger' ) ); ?></option>
                                    <option value="NG"><?php echo esc_html( $burger_get( 'texto_nigeria', 'Nigeria' ) ); ?></option>
                                    <option value="NU"><?php echo esc_html( $burger_get( 'texto_niue', 'Niue' ) ); ?></option>
                                    <option value="NF"><?php echo esc_html( $burger_get( 'texto_norfolk_island', 'Norfolk Island' ) ); ?></option>
                                    <option value="KP"><?php echo esc_html( $burger_get( 'texto_north_korea', 'North Korea' ) ); ?></option>
                                    <option value="MK"><?php echo esc_html( $burger_get( 'texto_north_macedonia', 'North Macedonia' ) ); ?></option>
                                    <option value="MP"><?php echo esc_html( $burger_get( 'texto_northern_mariana_islands', 'Northern Mariana Islands' ) ); ?></option>
                                    <option value="NO"><?php echo esc_html( $burger_get( 'texto_norway', 'Norway' ) ); ?></option>
                                    <option value="OM"><?php echo esc_html( $burger_get( 'texto_oman', 'Oman' ) ); ?></option>
                                    <option value="PK"><?php echo esc_html( $burger_get( 'texto_pakistan', 'Pakistan' ) ); ?></option>
                                    <option value="PS"><?php echo esc_html( $burger_get( 'texto_palestinian_territory', 'Palestinian Territory' ) ); ?></option>
                                    <option value="PA"><?php echo esc_html( $burger_get( 'texto_panama', 'Panama' ) ); ?></option>
                                    <option value="PG"><?php echo esc_html( $burger_get( 'texto_papua_new_guinea', 'Papua New Guinea' ) ); ?></option>
                                    <option value="PY"><?php echo esc_html( $burger_get( 'texto_paraguay', 'Paraguay' ) ); ?></option>
                                    <option value="PE"><?php echo esc_html( $burger_get( 'texto_peru', 'Peru' ) ); ?></option>
                                    <option value="PH"><?php echo esc_html( $burger_get( 'texto_philippines', 'Philippines' ) ); ?></option>
                                    <option value="PN"><?php echo esc_html( $burger_get( 'texto_pitcairn', 'Pitcairn' ) ); ?></option>
                                    <option value="PL"><?php echo esc_html( $burger_get( 'texto_poland', 'Poland' ) ); ?></option>
                                    <option value="PT"><?php echo esc_html( $burger_get( 'texto_portugal', 'Portugal' ) ); ?></option>
                                    <option value="PR"><?php echo esc_html( $burger_get( 'texto_puerto_rico', 'Puerto Rico' ) ); ?></option>
                                    <option value="QA"><?php echo esc_html( $burger_get( 'texto_qatar', 'Qatar' ) ); ?></option>
                                    <option value="RE"><?php echo esc_html( $burger_get( 'texto_reunion', 'Reunion' ) ); ?></option>
                                    <option value="RO"><?php echo esc_html( $burger_get( 'texto_romania', 'Romania' ) ); ?></option>
                                    <option value="RU"><?php echo esc_html( $burger_get( 'texto_russia', 'Russia' ) ); ?></option>
                                    <option value="RW"><?php echo esc_html( $burger_get( 'texto_rwanda', 'Rwanda' ) ); ?></option>
                                    <option value="ST"><?php echo esc_html( $burger_get( 'texto_s_o_tome_and_principe', 'São Tomé and Príncipe' ) ); ?></option>
                                    <option value="BL"><?php echo esc_html( $burger_get( 'texto_saint_barthelemy', 'Saint Barthélemy' ) ); ?></option>
                                    <option value="SH"><?php echo esc_html( $burger_get( 'texto_saint_helena', 'Saint Helena' ) ); ?></option>
                                    <option value="KN"><?php echo esc_html( $burger_get( 'texto_saint_kitts_and_nevis', 'Saint Kitts and Nevis' ) ); ?></option>
                                    <option value="LC"><?php echo esc_html( $burger_get( 'texto_saint_lucia', 'Saint Lucia' ) ); ?></option>
                                    <option value="SX"><?php echo esc_html( $burger_get( 'texto_saint_martin_dutch_part', 'Saint Martin (Dutch part)' ) ); ?></option>
                                    <option value="MF"><?php echo esc_html( $burger_get( 'texto_saint_martin_french_part', 'Saint Martin (French part)' ) ); ?></option>
                                    <option value="PM"><?php echo esc_html( $burger_get( 'texto_saint_pierre_and_miquelon', 'Saint Pierre and Miquelon' ) ); ?></option>
                                    <option value="VC"><?php echo esc_html( $burger_get( 'texto_saint_vincent_and_the_grenadines', 'Saint Vincent and the Grenadines' ) ); ?></option>
                                    <option value="WS"><?php echo esc_html( $burger_get( 'texto_samoa', 'Samoa' ) ); ?></option>
                                    <option value="SM"><?php echo esc_html( $burger_get( 'texto_san_marino', 'San Marino' ) ); ?></option>
                                    <option value="SA"><?php echo esc_html( $burger_get( 'texto_saudi_arabia', 'Saudi Arabia' ) ); ?></option>
                                    <option value="SN"><?php echo esc_html( $burger_get( 'texto_senegal', 'Senegal' ) ); ?></option>
                                    <option value="RS"><?php echo esc_html( $burger_get( 'texto_serbia', 'Serbia' ) ); ?></option>
                                    <option value="SC"><?php echo esc_html( $burger_get( 'texto_seychelles', 'Seychelles' ) ); ?></option>
                                    <option value="SL"><?php echo esc_html( $burger_get( 'texto_sierra_leone', 'Sierra Leone' ) ); ?></option>
                                    <option value="SG"><?php echo esc_html( $burger_get( 'texto_singapore', 'Singapore' ) ); ?></option>
                                    <option value="SK"><?php echo esc_html( $burger_get( 'texto_slovakia', 'Slovakia' ) ); ?></option>
                                    <option value="SI"><?php echo esc_html( $burger_get( 'texto_slovenia', 'Slovenia' ) ); ?></option>
                                    <option value="SB"><?php echo esc_html( $burger_get( 'texto_solomon_islands', 'Solomon Islands' ) ); ?></option>
                                    <option value="SO"><?php echo esc_html( $burger_get( 'texto_somalia', 'Somalia' ) ); ?></option>
                                    <option value="ZA"><?php echo esc_html( $burger_get( 'texto_south_africa', 'South Africa' ) ); ?></option>
                                    <option value="GS"><?php echo esc_html( $burger_get( 'texto_south_georgia_sandwich_islands', 'South Georgia/Sandwich Islands' ) ); ?></option>
                                    <option value="KR"><?php echo esc_html( $burger_get( 'texto_south_korea', 'South Korea' ) ); ?></option>
                                    <option value="SS"><?php echo esc_html( $burger_get( 'texto_south_sudan', 'South Sudan' ) ); ?></option>
                                    <option value="ES"><?php echo esc_html( $burger_get( 'texto_spain', 'Spain' ) ); ?></option>
                                    <option value="LK"><?php echo esc_html( $burger_get( 'texto_sri_lanka', 'Sri Lanka' ) ); ?></option>
                                    <option value="SD"><?php echo esc_html( $burger_get( 'texto_sudan', 'Sudan' ) ); ?></option>
                                    <option value="SR"><?php echo esc_html( $burger_get( 'texto_suriname', 'Suriname' ) ); ?></option>
                                    <option value="SJ"><?php echo esc_html( $burger_get( 'texto_svalbard_and_jan_mayen', 'Svalbard and Jan Mayen' ) ); ?></option>
                                    <option value="SE"><?php echo esc_html( $burger_get( 'texto_sweden', 'Sweden' ) ); ?></option>
                                    <option value="CH"><?php echo esc_html( $burger_get( 'texto_switzerland', 'Switzerland' ) ); ?></option>
                                    <option value="SY"><?php echo esc_html( $burger_get( 'texto_syria', 'Syria' ) ); ?></option>
                                    <option value="TW"><?php echo esc_html( $burger_get( 'texto_taiwan', 'Taiwan' ) ); ?></option>
                                    <option value="TJ"><?php echo esc_html( $burger_get( 'texto_tajikistan', 'Tajikistan' ) ); ?></option>
                                    <option value="TZ"><?php echo esc_html( $burger_get( 'texto_tanzania', 'Tanzania' ) ); ?></option>
                                    <option value="TH"><?php echo esc_html( $burger_get( 'texto_thailand', 'Thailand' ) ); ?></option>
                                    <option value="TL"><?php echo esc_html( $burger_get( 'texto_timor_leste', 'Timor-Leste' ) ); ?></option>
                                    <option value="TG"><?php echo esc_html( $burger_get( 'texto_togo', 'Togo' ) ); ?></option>
                                    <option value="TK"><?php echo esc_html( $burger_get( 'texto_tokelau', 'Tokelau' ) ); ?></option>
                                    <option value="TO"><?php echo esc_html( $burger_get( 'texto_tonga', 'Tonga' ) ); ?></option>
                                    <option value="TT"><?php echo esc_html( $burger_get( 'texto_trinidad_and_tobago', 'Trinidad and Tobago' ) ); ?></option>
                                    <option value="TN"><?php echo esc_html( $burger_get( 'texto_tunisia', 'Tunisia' ) ); ?></option>
                                    <option value="TR"><?php echo esc_html( $burger_get( 'texto_turkey', 'Turkey' ) ); ?></option>
                                    <option value="TM"><?php echo esc_html( $burger_get( 'texto_turkmenistan', 'Turkmenistan' ) ); ?></option>
                                    <option value="TC"><?php echo esc_html( $burger_get( 'texto_turks_and_caicos_islands', 'Turks and Caicos Islands' ) ); ?></option>
                                    <option value="TV"><?php echo esc_html( $burger_get( 'texto_tuvalu', 'Tuvalu' ) ); ?></option>
                                    <option value="UG"><?php echo esc_html( $burger_get( 'texto_uganda', 'Uganda' ) ); ?></option>
                                    <option value="UA"><?php echo esc_html( $burger_get( 'texto_ukraine', 'Ukraine' ) ); ?></option>
                                    <option value="AE"><?php echo esc_html( $burger_get( 'texto_united_arab_emirates', 'United Arab Emirates' ) ); ?></option>
                                    <option value="GB"><?php echo esc_html( $burger_get( 'texto_united_kingdom_uk', 'United Kingdom (UK)' ) ); ?></option>
                                    <option value="US" selected="selected"><?php echo esc_html( $burger_get( 'texto_united_states_us', 'United States (US)' ) ); ?></option>
                                    <option value="UM"><?php echo esc_html( $burger_get( 'texto_united_states_us_minor_outlying_island', 'United States (US) Minor Outlying Islands' ) ); ?></option>
                                    <option value="UY"><?php echo esc_html( $burger_get( 'texto_uruguay', 'Uruguay' ) ); ?></option>
                                    <option value="UZ"><?php echo esc_html( $burger_get( 'texto_uzbekistan', 'Uzbekistan' ) ); ?></option>
                                    <option value="VU"><?php echo esc_html( $burger_get( 'texto_vanuatu', 'Vanuatu' ) ); ?></option>
                                    <option value="VA"><?php echo esc_html( $burger_get( 'texto_vatican', 'Vatican' ) ); ?></option>
                                    <option value="VE"><?php echo esc_html( $burger_get( 'texto_venezuela', 'Venezuela' ) ); ?></option>
                                    <option value="VN"><?php echo esc_html( $burger_get( 'texto_vietnam', 'Vietnam' ) ); ?></option>
                                    <option value="VG"><?php echo esc_html( $burger_get( 'texto_virgin_islands_british', 'Virgin Islands (British)' ) ); ?></option>
                                    <option value="VI"><?php echo esc_html( $burger_get( 'texto_virgin_islands_us', 'Virgin Islands (US)' ) ); ?></option>
                                    <option value="WF"><?php echo esc_html( $burger_get( 'texto_wallis_and_futuna', 'Wallis and Futuna' ) ); ?></option>
                                    <option value="EH"><?php echo esc_html( $burger_get( 'texto_western_sahara', 'Western Sahara' ) ); ?></option>
                                    <option value="YE"><?php echo esc_html( $burger_get( 'texto_yemen', 'Yemen' ) ); ?></option>
                                    <option value="ZM"><?php echo esc_html( $burger_get( 'texto_zambia', 'Zambia' ) ); ?></option>
                                    <option value="ZW"><?php echo esc_html( $burger_get( 'texto_zimbabwe', 'Zimbabwe' ) ); ?></option>
                                    </select>
                                </span>
                                </p>
                                <p class="form-row address-field validate-required form-row-wide"
                                id="billing_address_1_field" data-priority="50">
                                <label for="billing_address_1" class="required_field"><?php echo esc_html( $burger_get( 'texto_street_address', 'Street address' ) ); ?><span
                                    class="required" aria-hidden="true">*</span></label>
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text " name="billing_address_1"
                                    id="billing_address_1" placeholder="House number and street name" value=""
                                    aria-required="true" autocomplete="address-line1"
                                    data-placeholder="House number and street name">
                                </span>
                                </p>
                                <p class="form-row address-field form-row-wide" id="billing_address_2_field"
                                data-priority="60">
                                <label for="billing_address_2" class="screen-reader-text"><?php echo esc_html( $burger_get( 'texto_apartment_suite_unit_etc', 'Apartment, suite, unit, etc.' ) ); ?><span class="optional"><?php echo esc_html( $burger_get( 'texto_optional', '(optional)' ) ); ?></span>
                                </label>
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text " name="billing_address_2"
                                    id="billing_address_2" placeholder="Apartment, suite, unit, etc. (optional)"
                                    value="" autocomplete="address-line2"
                                    data-placeholder="Apartment, suite, unit, etc. (optional)">
                                </span>
                                </p>
                                <p class="form-row address-field validate-required form-row-wide"
                                id="billing_city_field" data-priority="70"
                                data-o_class="form-row form-row-wide address-field validate-required">
                                <label for="billing_city" class="required_field"><?php echo esc_html( $burger_get( 'texto_town_city', 'Town / City' ) ); ?><span
                                    class="required" aria-hidden="true">*</span></label>
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text " name="billing_city" id="billing_city"
                                    placeholder="" value="" aria-required="true" autocomplete="address-level2">
                                </span>
                                </p>
                                <p class="form-row address-field validate-required validate-state form-row-wide"
                                id="billing_state_field" data-priority="80"
                                data-o_class="form-row form-row-wide address-field validate-required validate-state">
                                <label for="billing_state" class="required_field"><?php echo esc_html( $burger_get( 'texto_state', 'State' ) ); ?><span
                                    class="required" aria-hidden="true">*</span></label>
                                <span class="woocommerce-input-wrapper">
                                    <select name="billing_state" id="billing_state" class="state_select"
                                    data-placeholder="Select an option…" data-label="State">
                                    <option value=""><?php echo esc_html( $burger_get( 'texto_select_an_option', 'Select an option…' ) ); ?></option>
                                    <option value="AL"><?php echo esc_html( $burger_get( 'texto_alabama', 'Alabama' ) ); ?></option>
                                    <option value="AK"><?php echo esc_html( $burger_get( 'texto_alaska', 'Alaska' ) ); ?></option>
                                    <option value="AZ"><?php echo esc_html( $burger_get( 'texto_arizona', 'Arizona' ) ); ?></option>
                                    <option value="AR"><?php echo esc_html( $burger_get( 'texto_arkansas', 'Arkansas' ) ); ?></option>
                                    <option value="CA"><?php echo esc_html( $burger_get( 'texto_california', 'California' ) ); ?></option>
                                    <option value="CO"><?php echo esc_html( $burger_get( 'texto_colorado', 'Colorado' ) ); ?></option>
                                    <option value="CT"><?php echo esc_html( $burger_get( 'texto_connecticut', 'Connecticut' ) ); ?></option>
                                    <option value="DE"><?php echo esc_html( $burger_get( 'texto_delaware', 'Delaware' ) ); ?></option>
                                    <option value="DC"><?php echo esc_html( $burger_get( 'texto_district_of_columbia', 'District of Columbia' ) ); ?></option>
                                    <option value="FL"><?php echo esc_html( $burger_get( 'texto_florida', 'Florida' ) ); ?></option>
                                    <option value="GA"><?php echo esc_html( $burger_get( 'texto_georgia_2', 'Georgia' ) ); ?></option>
                                    <option value="HI"><?php echo esc_html( $burger_get( 'texto_hawaii', 'Hawaii' ) ); ?></option>
                                    <option value="ID"><?php echo esc_html( $burger_get( 'texto_idaho', 'Idaho' ) ); ?></option>
                                    <option value="IL"><?php echo esc_html( $burger_get( 'texto_illinois', 'Illinois' ) ); ?></option>
                                    <option value="IN"><?php echo esc_html( $burger_get( 'texto_indiana', 'Indiana' ) ); ?></option>
                                    <option value="IA"><?php echo esc_html( $burger_get( 'texto_iowa', 'Iowa' ) ); ?></option>
                                    <option value="KS"><?php echo esc_html( $burger_get( 'texto_kansas', 'Kansas' ) ); ?></option>
                                    <option value="KY"><?php echo esc_html( $burger_get( 'texto_kentucky', 'Kentucky' ) ); ?></option>
                                    <option value="LA"><?php echo esc_html( $burger_get( 'texto_louisiana', 'Louisiana' ) ); ?></option>
                                    <option value="ME"><?php echo esc_html( $burger_get( 'texto_maine', 'Maine' ) ); ?></option>
                                    <option value="MD"><?php echo esc_html( $burger_get( 'texto_maryland', 'Maryland' ) ); ?></option>
                                    <option value="MA"><?php echo esc_html( $burger_get( 'texto_massachusetts', 'Massachusetts' ) ); ?></option>
                                    <option value="MI"><?php echo esc_html( $burger_get( 'texto_michigan', 'Michigan' ) ); ?></option>
                                    <option value="MN"><?php echo esc_html( $burger_get( 'texto_minnesota', 'Minnesota' ) ); ?></option>
                                    <option value="MS"><?php echo esc_html( $burger_get( 'texto_mississippi', 'Mississippi' ) ); ?></option>
                                    <option value="MO"><?php echo esc_html( $burger_get( 'texto_missouri', 'Missouri' ) ); ?></option>
                                    <option value="MT"><?php echo esc_html( $burger_get( 'texto_montana', 'Montana' ) ); ?></option>
                                    <option value="NE"><?php echo esc_html( $burger_get( 'texto_nebraska', 'Nebraska' ) ); ?></option>
                                    <option value="NV"><?php echo esc_html( $burger_get( 'texto_nevada', 'Nevada' ) ); ?></option>
                                    <option value="NH"><?php echo esc_html( $burger_get( 'texto_new_hampshire', 'New Hampshire' ) ); ?></option>
                                    <option value="NJ"><?php echo esc_html( $burger_get( 'texto_new_jersey', 'New Jersey' ) ); ?></option>
                                    <option value="NM"><?php echo esc_html( $burger_get( 'texto_new_mexico', 'New Mexico' ) ); ?></option>
                                    <option value="NY"><?php echo esc_html( $burger_get( 'texto_new_york', 'New York' ) ); ?></option>
                                    <option value="NC"><?php echo esc_html( $burger_get( 'texto_north_carolina', 'North Carolina' ) ); ?></option>
                                    <option value="ND"><?php echo esc_html( $burger_get( 'texto_north_dakota', 'North Dakota' ) ); ?></option>
                                    <option value="OH"><?php echo esc_html( $burger_get( 'texto_ohio', 'Ohio' ) ); ?></option>
                                    <option value="OK"><?php echo esc_html( $burger_get( 'texto_oklahoma', 'Oklahoma' ) ); ?></option>
                                    <option value="OR"><?php echo esc_html( $burger_get( 'texto_oregon', 'Oregon' ) ); ?></option>
                                    <option value="PA"><?php echo esc_html( $burger_get( 'texto_pennsylvania', 'Pennsylvania' ) ); ?></option>
                                    <option value="RI"><?php echo esc_html( $burger_get( 'texto_rhode_island', 'Rhode Island' ) ); ?></option>
                                    <option value="SC"><?php echo esc_html( $burger_get( 'texto_south_carolina', 'South Carolina' ) ); ?></option>
                                    <option value="SD"><?php echo esc_html( $burger_get( 'texto_south_dakota', 'South Dakota' ) ); ?></option>
                                    <option value="TN"><?php echo esc_html( $burger_get( 'texto_tennessee', 'Tennessee' ) ); ?></option>
                                    <option value="TX"><?php echo esc_html( $burger_get( 'texto_texas', 'Texas' ) ); ?></option>
                                    <option value="UT"><?php echo esc_html( $burger_get( 'texto_utah', 'Utah' ) ); ?></option>
                                    <option value="VT"><?php echo esc_html( $burger_get( 'texto_vermont', 'Vermont' ) ); ?></option>
                                    <option value="VA"><?php echo esc_html( $burger_get( 'texto_virginia', 'Virginia' ) ); ?></option>
                                    <option value="WA"><?php echo esc_html( $burger_get( 'texto_washington', 'Washington' ) ); ?></option>
                                    <option value="WV"><?php echo esc_html( $burger_get( 'texto_west_virginia', 'West Virginia' ) ); ?></option>
                                    <option value="WI"><?php echo esc_html( $burger_get( 'texto_wisconsin', 'Wisconsin' ) ); ?></option>
                                    <option value="WY"><?php echo esc_html( $burger_get( 'texto_wyoming', 'Wyoming' ) ); ?></option>
                                    <option value="AA"><?php echo esc_html( $burger_get( 'texto_armed_forces_aa', 'Armed Forces (AA)' ) ); ?></option>
                                    <option value="AE"><?php echo esc_html( $burger_get( 'texto_armed_forces_ae', 'Armed Forces (AE)' ) ); ?></option>
                                    <option value="AP"><?php echo esc_html( $burger_get( 'texto_armed_forces_ap', 'Armed Forces (AP)' ) ); ?></option>
                                    </select>
                                </span>
                                </p>
                                <p class="form-row address-field validate-required validate-postcode form-row-wide"
                                id="billing_postcode_field" data-priority="90"
                                data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                <label for="billing_postcode" class="required_field"><?php echo esc_html( $burger_get( 'texto_zip_code', 'ZIP Code' ) ); ?><span
                                    class="required" aria-hidden="true">*</span></label>
                                <span class="woocommerce-input-wrapper">
                                    <input type="text" class="input-text " name="billing_postcode"
                                    id="billing_postcode" placeholder="" value="" aria-required="true"
                                    autocomplete="postal-code">
                                </span>
                                </p>
                                <p class="form-row form-row-wide validate-phone" id="billing_phone_field"
                                data-priority="100">
                                <label for="billing_phone" class=""><?php echo esc_html( $burger_get( 'texto_phone', 'Phone' ) ); ?><span
                                    class="optional"><?php echo esc_html( $burger_get( 'texto_optional_2', '(optional)' ) ); ?></span></label>
                                <span class="woocommerce-input-wrapper">
                                    <input type="tel" class="input-text " name="billing_phone" id="billing_phone"
                                    placeholder="" value="" autocomplete="tel">
                                </span>
                                </p>
                                <p class="form-row form-row-wide validate-required validate-email"
                                id="billing_email_field" data-priority="110">
                                <label for="billing_email" class="required_field"><?php echo esc_html( $burger_get( 'texto_email_address', 'Email address' ) ); ?><span
                                    class="required" aria-hidden="true">*</span></label>
                                <span class="woocommerce-input-wrapper">
                                    <input type="email" class="input-text " name="billing_email"
                                    id="billing_email" placeholder="" value="admin@themejunction.net"
                                    aria-required="true" autocomplete="email">
                                </span>
                                </p>
                            </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="woocommerce-shipping-fields">
                            </div>
                            <div class="woocommerce-additional-fields">
                            <h3><?php echo esc_html( $burger_get( 'texto_additional_information', 'Additional information' ) ); ?></h3>

                            <div class="woocommerce-additional-fields__field-wrapper">
                                <p class="form-row notes" id="order_comments_field" data-priority=""><label
                                    for="order_comments" class=""><?php echo esc_html( $burger_get( 'texto_order_notes', 'Order notes' ) ); ?><span
                                    class="optional"><?php echo esc_html( $burger_get( 'texto_optional_3', '(optional)' ) ); ?></span></label><span
                                    class="woocommerce-input-wrapper"><textarea name="order_comments"
                                    class="input-text " id="order_comments"
                                    placeholder="Notes about your order, e.g. special notes for delivery."
                                    rows="2" cols="5"></textarea></span></p>
                            </div>


                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-12">
                    <div class="cart-wrapper">
                        <div class="order-review-wrapper">
                        <h3 id="order_review_heading"><?php echo esc_html( $burger_get( 'texto_your_order', 'Your order' ) ); ?></h3>


                        <div id="order_review" class="woocommerce-checkout-review-order">
                            <table class="shop_table woocommerce-checkout-review-order-table ss">
                            <thead>
                                <tr>
                                <th class="product-name"><?php echo esc_html( $burger_get( 'texto_product', 'Product' ) ); ?></th>
                                <th class="product-total"><?php echo esc_html( $burger_get( 'texto_subtotal', 'Subtotal' ) ); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="cart_item">
                                <td class="product-name">
                                    <?php echo esc_html( $burger_get( 'texto_base_booster_speaker', 'Base booster speaker' ) ); ?> <strong class="product-quantity">×&nbsp;1</strong>
                                </td>
                                <td class="product-total">
                                    <span class="woocommerce-Price-amount amount"><bdi><span
                                        class="woocommerce-Price-currencySymbol">$</span>200.00</bdi></span>
                                </td>
                                </tr>
                                <tr class="cart_item">
                                <td class="product-name">
                                    <?php echo esc_html( $burger_get( 'texto_cool_mini_usb_fan', 'Cool mini USB fan' ) ); ?> <strong class="product-quantity">×&nbsp;1</strong>
                                </td>
                                <td class="product-total">
                                    <span class="woocommerce-Price-amount amount"><bdi><span
                                        class="woocommerce-Price-currencySymbol">$</span>50.00</bdi></span>
                                </td>
                                </tr>
                                <tr class="cart_item">
                                <td class="product-name">
                                    <?php echo esc_html( $burger_get( 'texto_echo_tune_wireless_headphones', 'Echo tune wireless headphones' ) ); ?> <strong
                                    class="product-quantity">×&nbsp;1</strong> </td>
                                <td class="product-total">
                                    <span class="woocommerce-Price-amount amount"><bdi><span
                                        class="woocommerce-Price-currencySymbol">$</span>100.00</bdi></span>
                                </td>
                                </tr>
                                <tr class="cart_item">
                                <td class="product-name">
                                    <?php echo esc_html( $burger_get( 'texto_personal_holding_earbud', 'Personal holding earbud' ) ); ?> <strong
                                    class="product-quantity">×&nbsp;5</strong>
                                </td>
                                <td class="product-total">
                                    <span class="woocommerce-Price-amount amount"><bdi><span
                                        class="woocommerce-Price-currencySymbol">$</span>1,000.00</bdi></span>
                                </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal dd">
                                <th><?php echo esc_html( $burger_get( 'texto_subtotal_2', 'Subtotal' ) ); ?></th>
                                <td><span class="woocommerce-Price-amount amount"><bdi><span
                                        class="woocommerce-Price-currencySymbol">$</span>1,350.00</bdi></span>
                                </td>
                                </tr>

                                <tr class="order-total">
                                <th><?php echo esc_html( $burger_get( 'texto_total', 'Total' ) ); ?></th>
                                <td><strong><span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">$</span>1,350.00</bdi></span></strong>
                                </td>
                                </tr>
                            </tfoot>
                            </table>
                            <div id="payment" class="woocommerce-checkout-payment">
                            <ul class="wc_payment_methods payment_methods methods">
                                <li class="wc_payment_method payment_method_bacs">
                                <input id="payment_method_bacs" type="radio" class="input-radio"
                                    name="payment_method" value="bacs" checked="checked"
                                    data-order_button_text="">

                                <label for="payment_method_bacs">
                                    <?php echo esc_html( $burger_get( 'texto_direct_bank_transfer', 'Direct bank transfer' ) ); ?> </label>
                                <div class="payment_box payment_method_bacs" style="display: block;">
                                    <p><?php echo wp_kses_post( $burger_get( 'texto_make_your_payment_directly_into_our_ba', 'Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.' ) ); ?></p>
                                </div>
                                </li>
                                <li class="wc_payment_method payment_method_cod">
                                <input id="payment_method_cod" type="radio" class="input-radio"
                                    name="payment_method" value="cod" data-order_button_text="">
                                <label for="payment_method_cod">
                                    <?php echo esc_html( $burger_get( 'texto_cash_on_delivery', 'Cash on delivery' ) ); ?> </label>
                                </li>
                            </ul>
                            </div>

                        </div>

                        </div>
                    </div>
                    <div class="wc-proceed-to-checkout mt-30">
                        <a href="<?php echo esc_url( $burger_get( 'link_checkout_html', 'checkout.html' ) ); ?>" class="tj-primary-btn checkout-button button alt wc-forward">
                        <span class="btn-text"><span> <?php echo esc_html( $burger_get( 'texto_checkout', 'checkout' ) ); ?></span></span>
                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>

                        </a>
                    </div>
                    </div>
                </div>



                </form>

            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Checkout Section -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
