<?php
$content_fields = array(
    'link_shop_details_html' => 'shop-details.html',
    'imagen_assets_images_product_product_8_webp' => NAKAMA_THEME_URL . '/assets/images/product/product-8.webp',
    'link_shop_details_html_2' => 'shop-details.html',
    'texto_super_fast_charger' => 'Super fast charger',
    'texto_out_of_stock' => 'Out of stock',
    'link_shop_details_html_3' => 'shop-details.html',
    'texto_add_to_cart' => 'Add to cart',
    'link_shop_details_html_4' => 'shop-details.html',
    'imagen_assets_images_product_product_7_webp' => NAKAMA_THEME_URL . '/assets/images/product/product-7.webp',
    'link_shop_details_html_5' => 'shop-details.html',
    'texto_booster_speaker' => 'booster speaker',
    'texto_10_in_stock' => '10 in stock',
    'link_shop_details_html_6' => 'shop-details.html',
    'texto_add_to_cart_2' => 'Add to cart',
    'link_shop_details_html_7' => 'shop-details.html',
    'imagen_assets_images_product_product_1_webp' => NAKAMA_THEME_URL . '/assets/images/product/product-1.webp',
    'link_shop_details_html_8' => 'shop-details.html',
    'texto_personal_holding_earbud' => 'Personal holding earbud',
    'texto_10_in_stock_2' => '10 in stock',
    'link_shop_details_html_9' => 'shop-details.html',
    'texto_add_to_cart_3' => 'Add to cart',
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

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
                        <a href="<?php echo esc_url( $link_shop_details_html ); ?>">
                        <img src="<?php echo esc_url( $imagen_assets_images_product_product_8_webp ); ?>" alt="">
                        </a>
                    </td>
                    <td class="woosw-item--info">
                        <div class="woosw-item--name">
                        <a href="<?php echo esc_url( $link_shop_details_html_2 ); ?>">
                            <?php echo esc_html( $texto_super_fast_charger ); ?>
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
                            <span class="stock out-of-stock"><?php echo esc_html( $texto_out_of_stock ); ?></span>
                        </div>
                        </div>
                        <div class="woosw-item--atc">
                        <p class="product woocommerce add_to_cart_inline ">
                            <a href="<?php echo esc_url( $link_shop_details_html_3 ); ?>"
                            class="cart-button button tj-cart-btn stock-out  product_type_simple product-add-cart-btn">
                            <span class="btn-icon">
                                <i class="fal fa-shopping-cart"></i>
                                <i class="fal fa-shopping-cart"></i>
                            </span>
                            <span class="btn-text">
                                <span><?php echo esc_html( $texto_add_to_cart ); ?></span>
                            </span>
                            </a>
                        </p>
                        </div>
                    </td>
                    </tr>
                    <tr class="woosw-item">
                    <td class="woosw-item--remove"><span>×</span></td>
                    <td class="woosw-item--image">
                        <a href="<?php echo esc_url( $link_shop_details_html_4 ); ?>">
                        <img src="<?php echo esc_url( $imagen_assets_images_product_product_7_webp ); ?>" alt="">
                        </a>
                    </td>
                    <td class="woosw-item--info">
                        <div class="woosw-item--name">
                        <a href="<?php echo esc_url( $link_shop_details_html_5 ); ?>">
                            <?php echo esc_html( $texto_booster_speaker ); ?>
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
                            <span class="stock in-stock"><?php echo esc_html( $texto_10_in_stock ); ?></span>
                        </div>
                        </div>
                        <div class="woosw-item--atc">
                        <p class="product woocommerce add_to_cart_inline ">
                            <a href="<?php echo esc_url( $link_shop_details_html_6 ); ?>"
                            class="cart-button button tj-cart-btn stock-out  product_type_simple product-add-cart-btn">
                            <span class="btn-icon">
                                <i class="fal fa-shopping-cart"></i>
                                <i class="fal fa-shopping-cart"></i>
                            </span>
                            <span class="btn-text">
                                <span><?php echo esc_html( $texto_add_to_cart_2 ); ?></span>
                            </span>
                            </a>
                        </p>
                        </div>
                    </td>
                    </tr>
                    <tr class="woosw-item">
                    <td class="woosw-item--remove"><span>×</span></td>
                    <td class="woosw-item--image">
                        <a href="<?php echo esc_url( $link_shop_details_html_7 ); ?>">
                        <img src="<?php echo esc_url( $imagen_assets_images_product_product_1_webp ); ?>" alt="">
                        </a>
                    </td>
                    <td class="woosw-item--info">
                        <div class="woosw-item--name">
                        <a href="<?php echo esc_url( $link_shop_details_html_8 ); ?>">
                            <?php echo esc_html( $texto_personal_holding_earbud ); ?>
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
                            <span class="stock in-stock"><?php echo esc_html( $texto_10_in_stock_2 ); ?></span>
                        </div>
                        </div>
                        <div class="woosw-item--atc">
                        <p class="product woocommerce add_to_cart_inline ">
                            <a href="<?php echo esc_url( $link_shop_details_html_9 ); ?>"
                            class="cart-button button tj-cart-btn stock-out  product_type_simple product-add-cart-btn">
                            <span class="btn-icon">
                                <i class="fal fa-shopping-cart"></i>
                                <i class="fal fa-shopping-cart"></i>
                            </span>
                            <span class="btn-text">
                                <span><?php echo esc_html( $texto_add_to_cart_3 ); ?></span>
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
