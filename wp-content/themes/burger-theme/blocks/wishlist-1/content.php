<?php
$burger_block_fields = function_exists( 'get_fields' ) ? (array) get_fields() : array();
$burger_get = function( $key, $default = '' ) use ( $burger_block_fields ) {
    return isset( $burger_block_fields[ $key ] ) && $burger_block_fields[ $key ] !== '' ? $burger_block_fields[ $key ] : $default;
};
?>

<!-- start: Wishlist Section -->
<section class="full-width tj-page__area section-gap">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="tj-page__container">
            <div class="tj-entry__content">
            <div class="woosw-list">
                <table class="woosw-items">
                <tbody>
                    <tr class="woosw-item">
                    <td class="woosw-item--remove"><span>×</span></td>
                    <td class="woosw-item--image">
                        <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html', 'shop-details.html' ) ); ?>">
                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_8_webp', NAKAMA_THEME_URL . '/assets/images/product/product-8.webp' ) ); ?>" alt="">
                        </a>
                    </td>
                    <td class="woosw-item--info">
                        <div class="woosw-item--name">
                        <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_2', 'shop-details.html' ) ); ?>">
                            <?php echo esc_html( $burger_get( 'texto_super_fast_charger', 'Super fast charger' ) ); ?>
                        </a>
                        </div>
                        <div class="woosw-item--price">
                        <del aria-hidden="true">
                            <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>
                            40.00
                            </span>
                        </del>
                        <ins aria-hidden="true">
                            <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>
                            25.00
                            </span>
                        </ins>
                        </div>
                    </td>
                    <td class="woosw-item--actions">
                        <div class="woosw-item--stock">
                        <div class="product-stock">
                            <span class="stock out-of-stock"><?php echo esc_html( $burger_get( 'texto_out_of_stock', 'Out of stock' ) ); ?></span>
                        </div>
                        </div>
                        <div class="woosw-item--atc">
                        <p class="product woocommerce add_to_cart_inline ">
                            <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_3', 'shop-details.html' ) ); ?>"
                            class="cart-button button tj-cart-btn stock-out  product_type_simple product-add-cart-btn">
                            <span class="btn-icon">
                                <i class="fal fa-shopping-cart"></i>
                                <i class="fal fa-shopping-cart"></i>
                            </span>
                            <span class="btn-text">
                                <span><?php echo esc_html( $burger_get( 'texto_add_to_cart', 'Add to cart' ) ); ?></span>
                            </span>
                            </a>
                        </p>
                        </div>
                    </td>
                    </tr>
                    <tr class="woosw-item">
                    <td class="woosw-item--remove"><span>×</span></td>
                    <td class="woosw-item--image">
                        <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_4', 'shop-details.html' ) ); ?>">
                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_7_webp', NAKAMA_THEME_URL . '/assets/images/product/product-7.webp' ) ); ?>" alt="">
                        </a>
                    </td>
                    <td class="woosw-item--info">
                        <div class="woosw-item--name">
                        <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_5', 'shop-details.html' ) ); ?>">
                            <?php echo esc_html( $burger_get( 'texto_booster_speaker', 'booster speaker' ) ); ?>
                        </a>
                        </div>
                        <div class="woosw-item--price">
                        <ins aria-hidden="true">
                            <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>
                            200.00
                            </span>
                        </ins>
                        </div>
                    </td>
                    <td class="woosw-item--actions">
                        <div class="woosw-item--stock">
                        <div class="product-stock">
                            <span class="stock in-stock"><?php echo esc_html( $burger_get( 'texto_10_in_stock', '10 in stock' ) ); ?></span>
                        </div>
                        </div>
                        <div class="woosw-item--atc">
                        <p class="product woocommerce add_to_cart_inline ">
                            <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_6', 'shop-details.html' ) ); ?>"
                            class="cart-button button tj-cart-btn stock-out  product_type_simple product-add-cart-btn">
                            <span class="btn-icon">
                                <i class="fal fa-shopping-cart"></i>
                                <i class="fal fa-shopping-cart"></i>
                            </span>
                            <span class="btn-text">
                                <span><?php echo esc_html( $burger_get( 'texto_add_to_cart_2', 'Add to cart' ) ); ?></span>
                            </span>
                            </a>
                        </p>
                        </div>
                    </td>
                    </tr>
                    <tr class="woosw-item">
                    <td class="woosw-item--remove"><span>×</span></td>
                    <td class="woosw-item--image">
                        <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_7', 'shop-details.html' ) ); ?>">
                        <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_1_webp', NAKAMA_THEME_URL . '/assets/images/product/product-1.webp' ) ); ?>" alt="">
                        </a>
                    </td>
                    <td class="woosw-item--info">
                        <div class="woosw-item--name">
                        <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_8', 'shop-details.html' ) ); ?>">
                            <?php echo esc_html( $burger_get( 'texto_personal_holding_earbud', 'Personal holding earbud' ) ); ?>
                        </a>
                        </div>
                        <div class="woosw-item--price">
                        <del aria-hidden="true">
                            <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>
                            240.00
                            </span>
                        </del>
                        <ins aria-hidden="true">
                            <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>
                            200.00
                            </span>
                        </ins>
                        </div>
                    </td>
                    <td class="woosw-item--actions">
                        <div class="woosw-item--stock">
                        <div class="product-stock">
                            <span class="stock in-stock"><?php echo esc_html( $burger_get( 'texto_10_in_stock_2', '10 in stock' ) ); ?></span>
                        </div>
                        </div>
                        <div class="woosw-item--atc">
                        <p class="product woocommerce add_to_cart_inline ">
                            <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_9', 'shop-details.html' ) ); ?>"
                            class="cart-button button tj-cart-btn stock-out  product_type_simple product-add-cart-btn">
                            <span class="btn-icon">
                                <i class="fal fa-shopping-cart"></i>
                                <i class="fal fa-shopping-cart"></i>
                            </span>
                            <span class="btn-text">
                                <span><?php echo esc_html( $burger_get( 'texto_add_to_cart_3', 'Add to cart' ) ); ?></span>
                            </span>
                            </a>
                        </p>
                        </div>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div><!-- /woosw-list -->
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- end: Wishlist Section -->
