<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Cart Section -->
<section class="full-width tj-page__area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="tj-page__container">
                <!-- page content -->
                <div class="woocommerce">
                    <div class="woocommerce-notices-wrapper"></div>
                    <div class="row cart-wrapper ">
                        <div class="col-sm-12">
                        <form class="woocommerce-cart-form section-bottom-gap">

                            <div class="shop_table_wrapper">
                                <table
                                    class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                                    <thead>
                                    <tr>
                                        <th class="product-thumbnail"><?php echo esc_html( $burger_get( 'texto_product', 'Product' ) ); ?></th>
                                        <th class="product-name"></th>
                                        <th class="product-price"><?php echo esc_html( $burger_get( 'texto_price', 'Price' ) ); ?></th>
                                        <th class="product-quantity"><?php echo esc_html( $burger_get( 'texto_quantity', 'Quantity' ) ); ?></th>
                                        <th class="product-subtotal"><?php echo esc_html( $burger_get( 'texto_subtotal', 'Subtotal' ) ); ?></th>
                                        <th class="product-remove">&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr class="woocommerce-cart-form__cart-item cart_item">
                                        <td class="product-thumbnail" data-title="Product">
                                            <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html', 'shop-details.html' ) ); ?>"><img
                                                src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_1_webp', NAKAMA_THEME_URL . '/assets/images/product/product-1.webp' ) ); ?>"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="Personal holding earbud"></a>
                                        </td>
                                        <td class="product-name" data-title="Name">
                                            <h5><a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_2', 'shop-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_personal_holding_earbud', 'Personal holding earbud' ) ); ?></a></h5>
                                        </td>
                                        <td class="product-price" data-title="Price">
                                            <span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>200.00</bdi></span>
                                        </td>
                                        <td class="product-quantity tj-cart-quantity" data-title="Quantity">
                                            <div class="tj-product-quantity">
                                                <div class="quantity">
                                                <label class="screen-reader-text"></label>
                                                <span class="qty_button minus tj-cart-minus">
                                                    <i class="far fa-minus"></i>
                                                </span>
                                                <input type="text"
                                                    class="input-text tj-cart-input qty tj-cart-input text"
                                                    value="1">
                                                <span class="qty_button plus tj-cart-plus ">
                                                    <i class="far fa-plus"></i>
                                                </span>
                                                </div>

                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Subtotal">
                                            <span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>200.00</bdi></span>
                                        </td>
                                        <td class="product-remove">
                                            <a href="#" class="remove">×</a>
                                        </td>
                                    </tr>
                                    <tr class="woocommerce-cart-form__cart-item cart_item">
                                        <td class="product-thumbnail" data-title="Product">
                                            <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_3', 'shop-details.html' ) ); ?>"><img
                                                src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_7_webp', NAKAMA_THEME_URL . '/assets/images/product/product-7.webp' ) ); ?>"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="Base booster speaker"></a>
                                        </td>
                                        <td class="product-name" data-title="Name">
                                            <h5><a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_4', 'shop-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_base_booster_speaker', 'Base booster speaker' ) ); ?></a></h5>
                                        </td>

                                        <td class="product-price" data-title="Price">
                                            <span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>200.00</bdi></span>
                                        </td>

                                        <td class="product-quantity tj-cart-quantity" data-title="Quantity">
                                            <div class="tj-product-quantity">
                                                <div class="quantity">
                                                <label class="screen-reader-text"></label>
                                                <span class="qty_button minus tj-cart-minus">
                                                    <i class="far fa-minus"></i>
                                                </span>
                                                <input type="text"
                                                    class="input-text tj-cart-input qty tj-cart-input text"
                                                    value="1">
                                                <span class="qty_button plus tj-cart-plus ">
                                                    <i class="far fa-plus"></i>
                                                </span>
                                                </div>

                                            </div>
                                        </td>

                                        <td class="product-subtotal" data-title="Subtotal">
                                            <span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>200.00</bdi></span>
                                        </td>

                                        <td class="product-remove">
                                            <a href="#" class="remove" aria-label="Remove this item">×</a>
                                        </td>
                                    </tr>
                                    <tr class="woocommerce-cart-form__cart-item cart_item">

                                        <td class="product-thumbnail" data-title="Product">
                                            <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_5', 'shop-details.html' ) ); ?>"><img
                                                src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_6_webp', NAKAMA_THEME_URL . '/assets/images/product/product-6.webp' ) ); ?>"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="Cool mini USB fan"></a>
                                        </td>

                                        <td class="product-name" data-title="Name">
                                            <h5><a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_6', 'shop-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_cool_mini_usb_fan', 'Cool mini USB fan' ) ); ?></a></h5>
                                        </td>

                                        <td class="product-price" data-title="Price">
                                            <span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>50.00</bdi></span>
                                        </td>

                                        <td class="product-quantity tj-cart-quantity" data-title="Quantity">
                                            <div class="tj-product-quantity">
                                                <div class="quantity">
                                                <label class="screen-reader-text"></label>
                                                <span class="qty_button minus tj-cart-minus">
                                                    <i class="far fa-minus"></i>
                                                </span>
                                                <input type="text"
                                                    class="input-text tj-cart-input qty tj-cart-input text"
                                                    value="1">
                                                <span class="qty_button plus tj-cart-plus ">
                                                    <i class="far fa-plus"></i>
                                                </span>
                                                </div>

                                            </div>
                                        </td>

                                        <td class="product-subtotal" data-title="Subtotal">
                                            <span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>50.00</bdi></span>
                                        </td>

                                        <td class="product-remove">
                                            <a href="#" class="remove">×</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="cart_totals_action_wrap">
                                <div class="actions">
                                    <div class="row rg-30 align-items-center">
                                    <div class="col-md-8">
                                        <div class="coupon">
                                            <input type="text" name="coupon_code" class="input-text"
                                                id="coupon_code" value="" placeholder="Coupon code">

                                            <button type="submit" class="tj-primary-btn" name="apply_coupon"
                                                value="Apply coupon">
                                                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_apply_coupon', 'Apply coupon' ) ); ?></span></span>
                                                <span class="btn-icon"><i
                                                    class="tji-arrow-right-long"></i></span>

                                            </button>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="tj-cart-update-btn text-md-end">
                                            <button type="submit" class="update-cart tj-primary-btn"
                                                name="update_cart" value="Update cart" disabled="">
                                                <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_update_cart', 'Update cart' ) ); ?></span></span>
                                                <span class="btn-icon"><i
                                                    class="tji-arrow-right-long"></i></span>

                                            </button>
                                        </div>
                                    </div>
                                    </div>
                                    <input type="hidden" id="woocommerce-cart-nonce"
                                    name="woocommerce-cart-nonce">
                                </div>
                            </div>
                        </form>
                        </div>
                        <div class="col-sm-12">

                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h3><?php echo esc_html( $burger_get( 'texto_cart_totals', 'Cart totals' ) ); ?></h3>
                                <table class="shop_table shop_table_responsive">
                                    <tbody>
                                    <tr class="cart-subtotal">
                                        <th><?php echo esc_html( $burger_get( 'texto_subtotal_2', 'Subtotal' ) ); ?></th>
                                        <td data-title="Subtotal"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>450.00</bdi></span>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th><?php echo esc_html( $burger_get( 'texto_total', 'Total' ) ); ?></th>
                                        <td data-title="Total"><strong><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">$</span>450.00</bdi></span></strong>
                                        </td>
                                    </tr>


                                    </tbody>
                                </table>

                                <div class="wc-proceed-to-checkout">
                                    <a href="<?php echo esc_url( $burger_get( 'link_checkout_html', 'checkout.html' ) ); ?>"
                                    class="tj-primary-btn checkout-button button alt wc-forward">
                                    <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_proceed_to_checkout', 'Proceed to checkout' ) ); ?></span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>

                                    </a>
                                </div>


                            </div>
                        </div>
                        </div>
                    </div>
                </div>


            </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Cart Section -->
