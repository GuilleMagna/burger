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

<!-- start: Shop Section -->
<div class="tj-product-area section-gap slidebar-stickiy-container">
    <div class="container">
        <div class="row rg-50">
            <div class="col-xl-8 col-lg-8 col-md-12">
            <div class="tj-shop-listing d-flex flex-wrap align-items-center mb-40 justify-content-between">
                <div class="tj-shop-listing-number">
                    <p class="tj-shop-list-title">
                        <?php echo esc_html( $burger_get( 'texto_showing_1_6_of_9_results', 'Showing 1–6 of 9 results' ) ); ?> </p>
                </div>
                <div class="tj-shop-listing-popup">
                    <div class="tj-shop-from">
                        <form class="-ordering" method="get">
                        <select name="orderby" class="orderby" aria-label="Shop order">
                            <option value="popularity"><?php echo esc_html( $burger_get( 'texto_sort_by_popularity', 'Sort by popularity' ) ); ?></option>
                            <option value="rating"><?php echo esc_html( $burger_get( 'texto_sort_by_average_rating', 'Sort by average rating' ) ); ?></option>
                            <option value="date" selected="selected"><?php echo esc_html( $burger_get( 'texto_sort_by_latest', 'Sort by latest' ) ); ?></option>
                            <option value="price"><?php echo esc_html( $burger_get( 'texto_sort_by_price_low_to_high', 'Sort by price: low to high' ) ); ?></option>
                            <option value="price-desc"><?php echo esc_html( $burger_get( 'texto_sort_by_price_high_to_low', 'Sort by price: high to low' ) ); ?></option>
                        </select>
                        <input type="hidden" name="paged" value="1">
                        </form>
                    </div>
                </div>
            </div>


            <div class="tj-shop-item-wrapper">
                <div class="row rg-30 row-cols-xl-2 row-cols-lg-2 row-cols-md-2 row-cols-1">
                    <div class="tj-product">
                        <div class="tj-product-item">
                        <div class="tj-product-thumb">
                            <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html', 'shop-details.html' ) ); ?>">
                                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_1_webp', NAKAMA_THEME_URL . '/assets/images/product/product-1.webp' ) ); ?>" alt=""> </a>

                            <div class="tj-product-badge product-on-sale">
                                <span class="onsale"><?php echo esc_html( $burger_get( 'texto_sale', 'Sale' ) ); ?></span>
                            </div>

                            <!-- product action -->
                            <div class="tj-product-action">
                                <div class="tj-product-action-item d-flex flex-column">
                                    <div class="tj-product-action-btn product-add-wishlist-btn">
                                    <button><?php echo esc_html( $burger_get( 'texto_add_to_wishlist', 'Add to wishlist' ) ); ?></button> <span class="tj-product-action-btn-tooltip"><?php echo esc_html( $burger_get( 'texto_add_to_wishlist_2', 'Add to wishlist' ) ); ?></span>
                                    </div>

                                    <div class="tj-product-action-btn">
                                    <a class="tj-quick-product-details" href="#tj-product-modal-1"
                                        data-vbtype="inline"><i class="fal fa-eye"></i></a>
                                    <span class="tj-product-action-btn-tooltip"><?php echo esc_html( $burger_get( 'texto_quick_view', 'Quick view' ) ); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="tj-product-cart-btn">
                                <a href="#" data-quantity="1"
                                    class="cart-button button tj-cart-btn stock-available "><span
                                    class="btn-icon"><i class="fal fa-shopping-cart"></i><i
                                        class="fal fa-shopping-cart"></i></span><span
                                    class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_add_to_cart', 'Add to cart' ) ); ?></span></span></a>
                            </div>
                        </div>
                        <div class="tj-product-content">
                            <div class="tj-product-tag d-none">
                                <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_2', 'shop-details.html' ) ); ?>"> <?php echo esc_html( $burger_get( 'texto_power', 'Power' ) ); ?></a>
                            </div>
                            <h3 class="tj-product-title">
                                <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_3', 'shop-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_personal_holding_earbud', 'Personal holding earbud' ) ); ?></a>
                            </h3>

                            <div class="tj-product-price-wrapper">

                                <span class="price"><del><span><bdi><span>$</span>240.00</bdi></span></del>
                                    <ins><span><bdi><span>$</span>200.00</bdi></span></ins></span>
                            </div>

                        </div>
                        </div>
                    </div>
                    <div class="tj-product">
                        <div class="tj-product-item">
                        <div class="tj-product-thumb">
                            <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_4', 'shop-details.html' ) ); ?>">
                                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_2_webp', NAKAMA_THEME_URL . '/assets/images/product/product-2.webp' ) ); ?>" alt=""> </a>

                            <div class="tj-product-badge product-on-sale">
                                <span class="onsale sold-out"><?php echo esc_html( $burger_get( 'texto_sold', 'Sold' ) ); ?></span>
                            </div>

                            <!-- product action -->
                            <div class="tj-product-action">
                                <div class="tj-product-action-item d-flex flex-column">
                                    <div class="tj-product-action-btn product-add-wishlist-btn">
                                    <button><?php echo esc_html( $burger_get( 'texto_add_to_wishlist_3', 'Add to wishlist' ) ); ?></button> <span class="tj-product-action-btn-tooltip"><?php echo esc_html( $burger_get( 'texto_add_to_wishlist_4', 'Add to wishlist' ) ); ?></span>
                                    </div>

                                    <div class="tj-product-action-btn">
                                    <a class="tj-quick-product-details" href="#tj-product-modal-1"
                                        data-vbtype="inline"><i class="fal fa-eye"></i></a> <span
                                        class="tj-product-action-btn-tooltip"><?php echo esc_html( $burger_get( 'texto_quick_view_2', 'Quick view' ) ); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tj-product-content">
                            <div class="tj-product-tag d-none">
                                <a href="<?php echo esc_url( $burger_get( 'link_https_solvior_themejunction_net_product_cat', 'https://solvior.themejunction.net/product-category/charger/ ' ) ); ?>">
                                    <?php echo esc_html( $burger_get( 'texto_charger', 'Charger' ) ); ?></a>
                            </div>
                            <h3 class="tj-product-title">
                                <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_5', 'shop-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_echo_tune_wireless_headphones', 'Echo tune wireless headphones' ) ); ?></a>
                            </h3>

                            <div class="tj-product-price-wrapper">

                                <span class="price"><del><span><bdi><span>$</span>300.00</bdi></span></del>
                                    <ins><span><bdi><span>$</span>250.00</bdi></span></ins></span>
                            </div>

                        </div>
                        </div>
                    </div>
                    <div class="tj-product">
                        <div class="tj-product-item">
                        <div class="tj-product-thumb">
                            <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_6', 'shop-details.html' ) ); ?>">
                                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_7_webp', NAKAMA_THEME_URL . '/assets/images/product/product-7.webp' ) ); ?>" alt=""> </a>


                            <!-- product action -->
                            <div class="tj-product-action">
                                <div class="tj-product-action-item d-flex flex-column">
                                    <div class="tj-product-action-btn product-add-wishlist-btn">
                                    <button><?php echo esc_html( $burger_get( 'texto_add_to_wishlist_5', 'Add to wishlist' ) ); ?></button> <span class="tj-product-action-btn-tooltip"><?php echo esc_html( $burger_get( 'texto_add_to_wishlist_6', 'Add to wishlist' ) ); ?></span>
                                    </div>

                                    <div class="tj-product-action-btn">
                                    <a class="tj-quick-product-details" href="#tj-product-modal-1"
                                        data-vbtype="inline"><i class="fal fa-eye"></i></a> <span
                                        class="tj-product-action-btn-tooltip"><?php echo esc_html( $burger_get( 'texto_quick_view_3', 'Quick view' ) ); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="tj-product-cart-btn">
                                <a href="<?php echo esc_url( $burger_get( 'link_add_to_cart_5401', '?add-to-cart=5401' ) ); ?>" data-quantity="1"
                                    class="cart-button button tj-cart-btn stock-available "><span
                                    class="btn-icon"><i class="fal fa-shopping-cart"></i><i
                                        class="fal fa-shopping-cart"></i></span><span
                                    class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_add_to_cart_2', 'Add to cart' ) ); ?></span></span></a>
                            </div>
                        </div>
                        <div class="tj-product-content">
                            <div class="tj-product-tag d-none">
                                <a href="<?php echo esc_url( $burger_get( 'link_hshop_details_html', 'hshop-details.html' ) ); ?>"> <?php echo esc_html( $burger_get( 'texto_speaker', 'Speaker' ) ); ?></a>
                            </div>
                            <h3 class="tj-product-title">
                                <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_7', 'shop-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_base_booster_speaker', 'Base booster speaker' ) ); ?></a>
                            </h3>

                            <div class="tj-product-price-wrapper">

                                <span class="price"><span><bdi><span>$</span>200.00</bdi></span></span>
                            </div>

                        </div>
                        </div>
                    </div>
                    <div class="tj-product">
                        <div class="tj-product-item">
                        <div class="tj-product-thumb">
                            <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_8', 'shop-details.html' ) ); ?>">
                                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_6_webp', NAKAMA_THEME_URL . '/assets/images/product/product-6.webp' ) ); ?>" alt=""> </a>


                            <!-- product action -->
                            <div class="tj-product-action">
                                <div class="tj-product-action-item d-flex flex-column">
                                    <div class="tj-product-action-btn product-add-wishlist-btn">
                                    <button><?php echo esc_html( $burger_get( 'texto_add_to_wishlist_7', 'Add to wishlist' ) ); ?></button> <span class="tj-product-action-btn-tooltip"><?php echo esc_html( $burger_get( 'texto_add_to_wishlist_8', 'Add to wishlist' ) ); ?></span>
                                    </div>

                                    <div class="tj-product-action-btn">
                                    <a class="tj-quick-product-details" href="#tj-product-modal-1"
                                        data-vbtype="inline"><i class="fal fa-eye"></i></a> <span
                                        class="tj-product-action-btn-tooltip"><?php echo esc_html( $burger_get( 'texto_quick_view_4', 'Quick view' ) ); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="tj-product-cart-btn">
                                <a href="#" class="cart-button button tj-cart-btn stock-available "><span
                                    class="btn-icon"><i class="fal fa-shopping-cart"></i><i
                                        class="fal fa-shopping-cart"></i></span><span
                                    class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_add_to_cart_3', 'Add to cart' ) ); ?></span></span></a>
                            </div>
                        </div>
                        <div class="tj-product-content">
                            <div class="tj-product-tag d-none">
                                <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_9', 'shop-details.html' ) ); ?>"> <?php echo esc_html( $burger_get( 'texto_power_2', 'Power' ) ); ?></a>
                            </div>
                            <h3 class="tj-product-title">
                                <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_10', 'shop-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_cool_mini_usb_fan', 'Cool mini USB fan' ) ); ?></a>
                            </h3>

                            <div class="tj-product-price-wrapper">

                                <span class="price"><span><bdi><span>$</span>50.00</bdi></span></span>
                            </div>

                        </div>
                        </div>
                    </div>
                    <div class="tj-product">
                        <div class="tj-product-item">
                        <div class="tj-product-thumb">
                            <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_11', 'shop-details.html' ) ); ?>">
                                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_5_webp', NAKAMA_THEME_URL . '/assets/images/product/product-5.webp' ) ); ?>" alt=""> </a>


                            <!-- product action -->
                            <div class="tj-product-action">
                                <div class="tj-product-action-item d-flex flex-column">
                                    <div class="tj-product-action-btn product-add-wishlist-btn">
                                    <button><?php echo esc_html( $burger_get( 'texto_add_to_wishlist_9', 'Add to wishlist' ) ); ?></button> <span class="tj-product-action-btn-tooltip"><?php echo esc_html( $burger_get( 'texto_add_to_wishlist_10', 'Add to wishlist' ) ); ?></span>
                                    </div>

                                    <div class="tj-product-action-btn">
                                    <a class="tj-quick-product-details" href="#tj-product-modal-1"
                                        data-vbtype="inline"><i class="fal fa-eye"></i></a> <span
                                        class="tj-product-action-btn-tooltip"><?php echo esc_html( $burger_get( 'texto_quick_view_5', 'Quick view' ) ); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="tj-product-cart-btn">
                                <a href="#" class="cart-button button tj-cart-btn stock-available "><span
                                    class="btn-icon"><i class="fal fa-shopping-cart"></i><i
                                        class="fal fa-shopping-cart"></i></span><span
                                    class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_add_to_cart_4', 'Add to cart' ) ); ?></span></span></a>
                            </div>
                        </div>
                        <div class="tj-product-content">
                            <div class="tj-product-tag d-none">
                                <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_12', 'shop-details.html' ) ); ?>"> <?php echo esc_html( $burger_get( 'texto_cover', 'Cover' ) ); ?></a>
                            </div>
                            <h3 class="tj-product-title">
                                <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_13', 'shop-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_pure_white_slim_cover', 'Pure white slim cover' ) ); ?></a>
                            </h3>

                            <div class="tj-product-price-wrapper">

                                <span class="price"><span><bdi><span>$</span>30.00</bdi></span></span>
                            </div>

                        </div>
                        </div>
                    </div>
                    <div class="tj-product">
                        <div class="tj-product-item">
                        <div class="tj-product-thumb">
                            <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_14', 'shop-details.html' ) ); ?>">
                                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_4_webp', NAKAMA_THEME_URL . '/assets/images/product/product-4.webp' ) ); ?>" alt=""> </a>

                            <div class="tj-product-badge product-on-sale">
                                <span class="onsale"><?php echo esc_html( $burger_get( 'texto_sale_2', 'Sale' ) ); ?></span>
                            </div>

                            <!-- product action -->
                            <div class="tj-product-action">
                                <div class="tj-product-action-item d-flex flex-column">
                                    <div class="tj-product-action-btn product-add-wishlist-btn">
                                    <button><?php echo esc_html( $burger_get( 'texto_add_to_wishlist_11', 'Add to wishlist' ) ); ?></button> <span class="tj-product-action-btn-tooltip"><?php echo esc_html( $burger_get( 'texto_add_to_wishlist_12', 'Add to wishlist' ) ); ?></span>
                                    </div>

                                    <div class="tj-product-action-btn">
                                    <a class="tj-quick-product-details" href="#tj-product-modal-1"
                                        data-vbtype="inline"><i class="fal fa-eye"></i></a> <span
                                        class="tj-product-action-btn-tooltip"><?php echo esc_html( $burger_get( 'texto_quick_view_6', 'Quick view' ) ); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="tj-product-cart-btn">
                                <a href="#" class="cart-button button tj-cart-btn stock-available "><span
                                    class="btn-icon"><i class="fal fa-shopping-cart"></i><i
                                        class="fal fa-shopping-cart"></i></span><span
                                    class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_add_to_cart_5', 'Add to cart' ) ); ?></span></span></a>
                            </div>
                        </div>
                        <div class="tj-product-content">
                            <div class="tj-product-tag d-none">
                                <a href="<?php echo esc_url( $burger_get( 'link_hshop_details_html_2', 'hshop-details.html' ) ); ?>"> <?php echo esc_html( $burger_get( 'texto_speaker_2', 'Speaker' ) ); ?></a>
                            </div>
                            <h3 class="tj-product-title">
                                <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_15', 'shop-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_hi_fi_bluetooth_speaker', 'Hi-Fi bluetooth speaker' ) ); ?></a>
                            </h3>

                            <div class="tj-product-price-wrapper">

                                <span class="price"><del><span><bdi><span>$</span>800.00</bdi></span></del>
                                    <ins><span><bdi><span>$</span>600.00</bdi></span></ins></span>
                            </div>

                        </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="basic-pagination text-start">
                        <nav class=" tj-pagination shop">
                            <ul class="page-numbers">
                                <li><span class="page-numbers current">1</span></li>
                                <li><a aria-label="Page 2" class="page-numbers" href="#">2</a></li>
                                <li><a class="next page-numbers" href="#"> <i class="tji-arrow-right"></i>
                                    </a></li>
                            </ul>
                        </nav>
                        </div>
                    </div>
                </div>
            </div>

            </div>

            <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="tj-shop-sidebar slidebar-stickiy">
                <div id="_price_filter-2" class="product-widget widget_price_filter">
                    <h5 class="product-widget-title"><?php echo esc_html( $burger_get( 'texto_filter_by_price', 'Filter by price' ) ); ?></h5>
                    <form>
                        <div class="price_slider_wrapper">
                        <div class="price_slider" id="slider-range"></div> <!-- Added ID -->
                        <div class="price_slider_amount">
                            <button type="submit" class="button"><?php echo esc_html( $burger_get( 'texto_apply', 'Apply' ) ); ?></button>
                            <div class="price_label">
                                <span class="from">$<span id="price-from">75</span></span> &mdash;
                                <span class="to">$<span id="price-to">300</span></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                        </div>
                    </form>
                </div>
                <div class="product-widget  widget_product_categories">
                    <h5 class="product-widget-title"><?php echo esc_html( $burger_get( 'texto_categories', 'Categories' ) ); ?></h5>
                    <ul class="product-categories">
                        <li><a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_16', 'shop-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_bluetooth', 'Bluetooth' ) ); ?></a>
                        <span class="count">(1)</span>
                        </li>
                        <li><a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_17', 'shop-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_charger_2', 'Charger' ) ); ?></a> <span class="count">(2)</span></li>
                        <li><a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_18', 'shop-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_cover_2', 'Cover' ) ); ?></a> <span>(1)</span></li>
                        <li><a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_19', 'shop-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_power_3', 'Power' ) ); ?></a> <span class="count">(2)</span></li>
                        <li><a href="<?php echo esc_url( $burger_get( 'link_https_solvior_themejunction_net_product_cat_2', 'https://solvior.themejunction.net/product-category/speaker/' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_speaker_3', 'Speaker' ) ); ?></a>
                        <span class="count">(3)</span>
                        </li>
                    </ul>
                </div>
                <div class="product-widget  widget_products">
                    <h5 class="product-widget-title"><?php echo esc_html( $burger_get( 'texto_latest_products', 'Latest products' ) ); ?></h5>
                    <ul class="product_list_widget">
                        <li class="tj-recent-product-list sidebar-recent-post">
                        <div class="single-post d-flex align-items-center ">
                            <div class="post-image">
                                <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_20', 'shop-details.html' ) ); ?>">
                                    <img width="300" height="300" src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_1_webp_2', NAKAMA_THEME_URL . '/assets/images/product/product-1.webp' ) ); ?>"
                                    class="attachment-_thumbnail size-_thumbnail"
                                    alt="Personal holding earbud">
                                </a>
                            </div>

                            <div class="post-header">
                                <h5 class="tj-product-title">
                                    <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_21', 'shop-details.html' ) ); ?>">
                                    <?php echo esc_html( $burger_get( 'texto_personal_holding_earbud_2', 'Personal holding earbud' ) ); ?> </a>
                                </h5>
                                <div class="tj-product-sidebar-rating-price tj-product-price">
                                    <del><span><span>$</span>240.00</span></del>
                                    <ins><span><span>$</span>200.00</span></ins>
                                </div>
                            </div>

                        </div>
                        </li>
                        <li class="tj-recent-product-list sidebar-recent-post">
                        <div class="single-post d-flex align-items-center ">
                            <div class="post-image">
                                <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_22', 'shop-details.html' ) ); ?>">
                                    <img width="300" height="300" src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_2_webp_2', NAKAMA_THEME_URL . '/assets/images/product/product-2.webp' ) ); ?>"
                                    class="attachment-_thumbnail size-_thumbnail" alt="Super fast charger">
                                </a>
                            </div>

                            <div class="post-header">
                                <h5 class="tj-product-title">
                                    <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_23', 'shop-details.html' ) ); ?>">
                                    <?php echo esc_html( $burger_get( 'texto_echo_tune_wireless_headphones_2', 'Echo tune wireless headphones' ) ); ?></a>
                                </h5>
                                <div class="tj-product-sidebar-rating-price tj-product-price">
                                    <del><span><span>$</span>300.00</span></del>
                                    <ins><span><span>$</span>250.00</span></ins>
                                </div>
                            </div>

                        </div>
                        </li>
                        <li class="tj-recent-product-list sidebar-recent-post">
                        <div class="single-post d-flex align-items-center ">
                            <div class="post-image">
                                <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_24', 'shop-details.html' ) ); ?>">
                                    <img width="300" height="300" src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_7_webp_2', NAKAMA_THEME_URL . '/assets/images/product/product-7.webp' ) ); ?>"
                                    class="attachment-_thumbnail size-_thumbnail"
                                    alt="Base booster speaker"> </a>
                            </div>

                            <div class="post-header">
                                <h5 class="tj-product-title">
                                    <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_25', 'shop-details.html' ) ); ?>">
                                    <?php echo esc_html( $burger_get( 'texto_base_booster_speaker_2', 'Base booster speaker' ) ); ?> </a>
                                </h5>
                                <div class="tj-product-sidebar-rating-price tj-product-price">
                                    <span><span>$</span>200.00</span>
                                </div>
                            </div>

                        </div>
                        </li>
                    </ul>
                </div>
                <div class="product-widget  widget_product_tag_cloud">
                    <h5 class="product-widget-title"><?php echo esc_html( $burger_get( 'texto_tags', 'Tags' ) ); ?></h5>
                    <div class="tagcloud"><a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_26', 'shop-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_compact', 'Compact' ) ); ?></a>
                        <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_27', 'shop-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_durable', 'Durable' ) ); ?></a>
                        <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_28', 'shop-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_fast', 'Fast' ) ); ?></a>
                        <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_29', 'shop-details.html' ) ); ?>" class="tag-cloud-link"><?php echo esc_html( $burger_get( 'texto_portable', 'Portable' ) ); ?></a>
                        <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_30', 'shop-details.html' ) ); ?>" class="tag-cloud-link "><?php echo esc_html( $burger_get( 'texto_powerful', 'Powerful' ) ); ?></a>
                        <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_31', 'shop-details.html' ) ); ?>" class="tag-cloud-link "><?php echo esc_html( $burger_get( 'texto_reliable', 'Reliable' ) ); ?></a>
                        <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_32', 'shop-details.html' ) ); ?>" class="tag-cloud-link "><?php echo esc_html( $burger_get( 'texto_retiable', 'Retiable' ) ); ?></a>
                    </div>
                </div>
            </div>
            </div>

        </div>
    </div>
</div>
<!-- end: Shop Section -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
