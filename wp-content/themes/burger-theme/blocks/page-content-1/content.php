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

<!-- start: Page content Section -->
<section class="terms-and-conditions section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="terms-and-conditions-wrapper">
                    <div>
                    <h2><?php echo esc_html( $burger_get( 'texto_terms_conditions', 'Terms & Conditions' ) ); ?> <span class="pill"><?php echo esc_html( $burger_get( 'texto_bexon_corporate_business_html_template', 'Bexon – Corporate Business HTML Template' ) ); ?></span></h2>
                    <p class="muted"><?php echo esc_html( $burger_get( 'texto_last_updated_september_9_2025', 'Last updated: September 9, 2025' ) ); ?></p>
                    <p><?php echo esc_html( $burger_get( 'texto_thank_you_for_choosing', 'Thank you for choosing' ) ); ?> <strong><?php echo esc_html( $burger_get( 'texto_bexon_corporate_business_html_template_2', 'Bexon – Corporate Business HTML Template' ) ); ?></strong> <?php echo esc_html( $burger_get( 'texto_these_terms_conditions_govern_your_use', '. These Terms & Conditions govern your use of the Template purchased from' ) ); ?> <a href="<?php echo esc_url( $burger_get( 'link_https_themeforest_net', 'https://themeforest.net/' ) ); ?>" target="_blank" rel="noopener"><?php echo esc_html( $burger_get( 'texto_themeforest_envato_market', 'ThemeForest (Envato Market)' ) ); ?></a><?php echo wp_kses_post( $burger_get( 'texto_by_downloading_installing_or_using_the', '. By downloading, installing, or using the Template, you agree to be bound by these Terms and the applicable' ) ); ?> <a href="<?php echo esc_url( $burger_get( 'link_https_themeforest_net_licenses_standard', 'https://themeforest.net/licenses/standard' ) ); ?>" target="_blank"
                        rel="noopener"><?php echo esc_html( $burger_get( 'texto_envato_license', 'Envato License' ) ); ?></a>.</p>
                    <div class="note"><strong><?php echo esc_html( $burger_get( 'texto_short_version', 'Short version:' ) ); ?></strong> <?php echo wp_kses_post( $burger_get( 'texto_you_can_use_bexon_on_the_number_of_end', 'You can use Bexon on the number of end products allowed by your Envato license, but you can’t resell, redistribute, or share the source files. Support and updates are provided according to the policies below.' ) ); ?></div>
                    </div>


                    <nav class="toc" aria-label="Table of contents">
                    <h2><?php echo esc_html( $burger_get( 'texto_table_of_contents', 'Table of Contents' ) ); ?></h2>
                    <ol>
                        <li><button class="tj-scroll-btn" data-target="#definitions"><?php echo esc_html( $burger_get( 'texto_definitions', 'Definitions' ) ); ?></button></li>
                        <li><button class="tj-scroll-btn" data-target="#license"><?php echo esc_html( $burger_get( 'texto_license_permitted_use', 'License & Permitted Use' ) ); ?></button></li>
                        <li><button class="tj-scroll-btn" data-target="#restrictions"><?php echo esc_html( $burger_get( 'texto_restrictions', 'Restrictions' ) ); ?></button></li>
                        <li><button class="tj-scroll-btn" data-target="#support"><?php echo esc_html( $burger_get( 'texto_support_policy', 'Support Policy' ) ); ?></button></li>
                        <li><button class="tj-scroll-btn" data-target="#updates"><?php echo esc_html( $burger_get( 'texto_updates_compatibility', 'Updates & Compatibility' ) ); ?></button></li>

                    </ol>
                    </nav>


                    <div id="definitions">
                    <h3><?php echo esc_html( $burger_get( 'texto_1_definitions', '1. Definitions' ) ); ?></h3>
                    <p><strong><?php echo esc_html( $burger_get( 'texto_we_us_our', '“We”, “Us”, “Our”' ) ); ?></strong> <?php echo esc_html( $burger_get( 'texto_refers_to', 'refers to' ) ); ?> <em><a
                            href="<?php echo esc_url( $burger_get( 'link_https_themeforest_net_user_theme_junction', 'https://themeforest.net/user/theme-junction' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_theme_junction', 'Theme Junction' ) ); ?></a></em><?php echo esc_html( $burger_get( 'texto_the_author_of_the_template_on_themefor', ', the author of the Template on ThemeForest.' ) ); ?></p>
                    <p><strong><?php echo esc_html( $burger_get( 'texto_you_your', '“You”, “Your”' ) ); ?></strong> <?php echo esc_html( $burger_get( 'texto_refers_to_the_purchaser_licensee_who_d', 'refers to the purchaser/licensee who downloads or uses the Template.' ) ); ?></p>
                    <p><strong><?php echo esc_html( $burger_get( 'texto_license', '“License”' ) ); ?></strong> <?php echo wp_kses_post( $burger_get( 'texto_refers_to_the_envato_market_license_re', 'refers to the Envato Market license (Regular or Extended) under which the Template is purchased. For full details, see the' ) ); ?> <a
                        href="<?php echo esc_url( $burger_get( 'link_https_themeforest_net_licenses_standard_2', 'https://themeforest.net/licenses/standard' ) ); ?>" target="_blank" rel="noopener"><?php echo esc_html( $burger_get( 'texto_envato_license_terms', 'Envato License Terms' ) ); ?></a>.</p>
                    </div>


                    <div id="license">
                    <h3><?php echo esc_html( $burger_get( 'texto_2_license_permitted_use', '2. License & Permitted Use' ) ); ?></h3>
                    <p><?php echo esc_html( $burger_get( 'texto_your_rights_to_use_the_template_are_de', 'Your rights to use the Template are determined by the Envato license you purchased:' ) ); ?></p>
                    <ul>
                        <li><strong><?php echo esc_html( $burger_get( 'texto_regular_license', 'Regular License:' ) ); ?></strong> <?php echo esc_html( $burger_get( 'texto_permits_the_use_of_the_template_in_a_s', 'Permits the use of the Template in a single' ) ); ?> <em><?php echo esc_html( $burger_get( 'texto_end_product', 'end product' ) ); ?></em> <?php echo esc_html( $burger_get( 'texto_that_is_not_offered_for_sale_where_end', 'that is not offered for sale, where end users are not charged to access or use it.' ) ); ?></li>
                        <li><strong><?php echo esc_html( $burger_get( 'texto_extended_license', 'Extended License:' ) ); ?></strong> <?php echo esc_html( $burger_get( 'texto_permits_the_use_of_the_template_in_a_s_2', 'Permits the use of the Template in a single' ) ); ?> <em><?php echo esc_html( $burger_get( 'texto_end_product_offered_for_sale', 'end product offered for sale' ) ); ?></em> <?php echo esc_html( $burger_get( 'texto_e_g_a_saas_or_paid_access_site_the_tem', '(e.g., a SaaS or paid access site). The Template itself cannot be resold as a template or theme.' ) ); ?></li>
                    </ul>
                    <p><?php echo esc_html( $burger_get( 'texto_each_license_is_valid_for', 'Each license is valid for' ) ); ?> <strong><?php echo esc_html( $burger_get( 'texto_one_end_product', 'one end product' ) ); ?></strong><?php echo wp_kses_post( $burger_get( 'texto_if_you_need_the_template_for_multiple', '. If you need the Template for multiple projects, you must purchase one license for each end product. All uses must comply with Envato’s licensing rules.' ) ); ?></p>
                    </div>


                    <div id="restrictions">
                    <h3><?php echo esc_html( $burger_get( 'texto_3_restrictions', '3. Restrictions' ) ); ?></h3>
                    <p><?php echo esc_html( $burger_get( 'texto_you_agree_that_you_will', 'You agree that you will' ) ); ?> <strong><?php echo esc_html( $burger_get( 'texto_not', 'not' ) ); ?></strong>:</p>
                    <ul>
                        <li><?php echo wp_kses_post( $burger_get( 'texto_resell_redistribute_sublicense_share_o', 'Resell, redistribute, sublicense, share, or make the Template (or any source files) publicly available, except as permitted by your Envato license.' ) ); ?></li>
                        <li><?php echo wp_kses_post( $burger_get( 'texto_use_the_template_in_any_way_that_compe', 'Use the Template in any way that competes with the original item (e.g., as a theme/template for sale, or in a template library/marketplace).' ) ); ?></li>
                        <li><?php echo esc_html( $burger_get( 'texto_remove_obscure_or_alter_copyright_noti', 'Remove, obscure, or alter copyright notices, license headers, or item metadata where present.' ) ); ?>
                        </li>
                        <li><?php echo esc_html( $burger_get( 'texto_claim_the_template_as_your_own_origina', 'Claim the Template as your own original work.' ) ); ?></li>
                        <li><?php echo wp_kses_post( $burger_get( 'texto_use_the_template_for_unlawful_harmful', 'Use the Template for unlawful, harmful, or offensive content, or in violation of any applicable law or regulation.' ) ); ?></li>
                    </ul>
                    </div>


                    <div id="support">
                    <h3><?php echo esc_html( $burger_get( 'texto_4_support_policy', '4. Support Policy' ) ); ?></h3>
                    <p><?php echo esc_html( $burger_get( 'texto_item_support_is_provided_in_accordance', 'Item support is provided in accordance with Envato’s' ) ); ?> <a
                        href="<?php echo esc_url( $burger_get( 'link_https_themeforest_net_page_item_support_pol', 'https://themeforest.net/page/item_support_policy' ) ); ?>" target="_blank" rel="noopener"><?php echo esc_html( $burger_get( 'texto_item_support_policy', 'Item Support Policy' ) ); ?></a> <?php echo esc_html( $burger_get( 'texto_for_the_support_period_associated_with', 'for the support period associated with your purchase.' ) ); ?></p>
                    <p><strong><?php echo esc_html( $burger_get( 'texto_what_s_included', 'What’s included:' ) ); ?></strong></p>
                    <ul>
                        <li><?php echo esc_html( $burger_get( 'texto_answering_questions_about_item_feature', 'Answering questions about item features and functionality.' ) ); ?></li>
                        <li><?php echo esc_html( $burger_get( 'texto_bug_fixes_and_reported_issue_investiga', 'Bug fixes and reported issue investigation (if the issue is reproducible with the original item).' ) ); ?></li>
                        <li><?php echo wp_kses_post( $burger_get( 'texto_updates_to_maintain_item_compatibility', 'Updates to maintain item compatibility with supported browsers and dependencies listed in the documentation.' ) ); ?></li>
                    </ul>
                    <p><strong><?php echo esc_html( $burger_get( 'texto_what_s_not_included', 'What’s not included:' ) ); ?></strong></p>
                    <ul>
                        <li><?php echo esc_html( $burger_get( 'texto_installation_customization_or_new_feat', 'Installation, customization, or new feature requests.' ) ); ?></li>
                        <li><?php echo esc_html( $burger_get( 'texto_support_for_third_party_plugins_script', 'Support for third‑party plugins, scripts, or hosting/server issues.' ) ); ?></li>
                        <li><?php echo wp_kses_post( $burger_get( 'texto_issues_arising_from_modifications_beyo', 'Issues arising from modifications beyond the provided code or from outdated dependencies not specified in the docs.' ) ); ?></li>
                    </ul>
                    <p><strong><?php echo esc_html( $burger_get( 'texto_how_to_get_support', 'How to get support:' ) ); ?></strong> <?php echo esc_html( $burger_get( 'texto_please_open_a_ticket_or_contact_us_via', 'Please open a ticket or contact us via ThemeForest comments with your' ) ); ?> <em><?php echo esc_html( $burger_get( 'texto_envato_username', 'Envato username' ) ); ?></em> <?php echo esc_html( $burger_get( 'texto_and', 'and' ) ); ?> <em><?php echo esc_html( $burger_get( 'texto_purchase_code', 'purchase code' ) ); ?></em><?php echo esc_html( $burger_get( 'texto_we_may_ask_for_temporary_access_or_add', '. We may ask for temporary access or additional details to diagnose issues.' ) ); ?></p>
                    </div>


                    <div id="updates">
                    <h3><?php echo esc_html( $burger_get( 'texto_5_updates_compatibility', '5. Updates & Compatibility' ) ); ?></h3>
                    <p><?php echo wp_kses_post( $burger_get( 'texto_we_may_release_updates_to_improve_feat', 'We may release updates to improve features, fix bugs, or maintain compatibility. You’ll have access to updates via your ThemeForest downloads during the support/maintenance period.' ) ); ?></p>
                    <ul>
                        <li><?php echo esc_html( $burger_get( 'texto_the_template_is_built_as_a_static_html', 'The Template is built as a static HTML/CSS/JS item. It does not include server‑side code.' ) ); ?></li>
                        <li><?php echo wp_kses_post( $burger_get( 'texto_browser_support_targets_versions_liste', 'Browser support targets versions listed in the documentation. Older/legacy browsers may require polyfills or are not supported.' ) ); ?></li>
                    </ul>
                    </div>
                    <p class="muted"><small><?php echo wp_kses_post( $burger_get( 'texto_this_terms_conditions_page_is_provided', 'This Terms & Conditions page is provided for general guidance only and does not constitute legal advice. Please consult your legal advisor to adapt it to your specific needs and local laws.' ) ); ?></small></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Page content Section -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
