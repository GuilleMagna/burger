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

<!-- start: Product Section -->
<section class="tj-product-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="row section-bottom-gap product">
                <div class="col-xl-6 col-lg-6">
                    <div
                        class="tj-product-details-thumb-wrapper d-flex flex-wrap flex-md-nowrap justify-content-center justify-content-md-between">
                        <div class="tj-product-thumb-items nav order-2 order-md-1" role="tablist"
                        aria-orientation="vertical">
                        <button class="nav-link tj-pdt-thumb-img active" id="thumb-1-tab"
                            data-bs-toggle="pill" data-bs-target="#thumb-1" type="button" role="tab"
                            aria-controls="thumb-1" aria-selected="true"><img
                                src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_1_webp', NAKAMA_THEME_URL . '/assets/images/product/product-1.webp' ) ); ?>" alt="images"></button>
                        <button class="nav-link tj-pdt-thumb-img" id="thumb-2-tab" data-bs-toggle="pill"
                            data-bs-target="#thumb-2" type="button" role="tab" aria-controls="thumb-2"
                            aria-selected="false"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_11_webp', NAKAMA_THEME_URL . '/assets/images/product/product-11.webp' ) ); ?>"
                                alt="images"></button>
                        <button class="nav-link tj-pdt-thumb-img" id="thumb-3-tab" data-bs-toggle="pill"
                            data-bs-target="#thumb-3" type="button" role="tab" aria-controls="thumb-3"
                            aria-selected="false"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_1_webp_2', NAKAMA_THEME_URL . '/assets/images/product/product-1.webp' ) ); ?>"
                                alt="images"></button>
                        <button class="nav-link tj-pdt-thumb-img" id="thumb-4-tab" data-bs-toggle="pill"
                            data-bs-target="#thumb-4" type="button" role="tab" aria-controls="thumb-4"
                            aria-selected="false"><img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_2_webp', NAKAMA_THEME_URL . '/assets/images/product/product-2.webp' ) ); ?>"
                                alt="images"></button>
                        </div>
                        <div class="tab-content tj-product-img-wrap order-1 order-md-2">
                        <div class="tj-product-badge product-on-sale">
                            <span class="onsale"><?php echo esc_html( $burger_get( 'texto_sale', 'Sale' ) ); ?></span>
                        </div>
                        <div class="tj-product-action-btn">
                            <a class="ig-gallery" data-gall="gallery01"
                                href="<?php echo esc_url( $burger_get( 'link_assets_images_product_product_1_webp', 'assets/images/product/product-1.webp' ) ); ?>"><i class="tji-search"></i></a>
                            <a class="ig-gallery" data-gall="gallery01"
                                href="<?php echo esc_url( $burger_get( 'link_assets_images_product_product_11_webp', 'assets/images/product/product-11.webp' ) ); ?>"><i class="tji-search"></i></a>
                            <a class="ig-gallery" data-gall="gallery01"
                                href="<?php echo esc_url( $burger_get( 'link_assets_images_product_product_2_webp', 'assets/images/product/product-2.webp' ) ); ?>"><i class="tji-search"></i></a>
                        </div>
                        <div class="tab-pane fade show active" id="thumb-1" role="tabpanel"
                            aria-labelledby="thumb-1-tab" tabindex="0">
                            <div class="product-img-area">
                                <div class="product-img">
                                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_1_webp_3', NAKAMA_THEME_URL . '/assets/images/product/product-1.webp' ) ); ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="thumb-2" role="tabpanel"
                            aria-labelledby="thumb-2-tab" tabindex="0">
                            <div class="product-img-area">
                                <div class="product-img">
                                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_11_webp_2', NAKAMA_THEME_URL . '/assets/images/product/product-11.webp' ) ); ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="thumb-3" role="tabpanel"
                            aria-labelledby="thumb-3-tab" tabindex="0">
                            <div class="product-img-area">
                                <div class="product-img">
                                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_1_webp_4', NAKAMA_THEME_URL . '/assets/images/product/product-1.webp' ) ); ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="thumb-4" role="tabpanel"
                            aria-labelledby="thumb-4-tab" tabindex="0">
                            <div class="product-img-area">
                                <div class="product-img">
                                    <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_2_webp_2', NAKAMA_THEME_URL . '/assets/images/product/product-2.webp' ) ); ?>" alt="">
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="tj-product-details-wrapper">
                        <h3 class="tj-product-details-title"><?php echo esc_html( $burger_get( 'texto_personal_holding_earbud', 'Personal holding earbud' ) ); ?></h3>
                        <!-- price -->
                        <div class="tj-product-details-price-wrapper">
                        <p class="price">
                            <del>
                                <span><span>$</span>240.00</span>
                            </del>
                            <ins>
                                <span><span>$</span>200.00</span>
                            </ins>
                        </p>
                        </div>

                        <div class="product-details__short-description">
                        <p><?php echo wp_kses_post( $burger_get( 'texto_experience_true_wireless_freedom_with', 'Experience true wireless freedom with our latest earbuds, designed to deliver crystal-clear sound and deep bass in compact, lightweight package. Perfectly crafted for everyday use, these earbuds feature.' ) ); ?></p>
                        </div>

                        <!-- actions -->
                        <div class="tj-product-details-action-wrapper">
                        <div class="tj-product-details-action-wrapper">
                            <form class="cart" action="#" method="post">
                                <div
                                    class="tj-product-details-action-item-wrapper d-flex flex-wrap align-items-center">
                                    <div class="tj-product-details-quantity">
                                    <div class="tj-product-quantity">
                                        <div class="quantity">
                                            <span class="tj-cart-minus">
                                                <i class="far fa-minus"></i>
                                            </span>
                                            <input type="text" class="input-text tj-cart-input"
                                                name="quantity" value="1" title="Qty" size="4"
                                                autocomplete="off">
                                            <span class="tj-cart-plus ">
                                                <i class="far fa-plus"></i>
                                            </span>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="tj-product-details-add-to-cart">
                                    <button type="submit" name="add-to-cart" class="tj-cart-btn ">
                                        <span class="btn-icon"><i class="fal fa-shopping-cart"></i><i
                                                class="fal fa-shopping-cart"></i></span>
                                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_add_to_cart', 'Add to cart' ) ); ?></span></span>
                                    </button>
                                    </div>
                                    <div class="tj-product-details-wishlist">
                                    <button class="wishlist-btn"><?php echo esc_html( $burger_get( 'texto_add_to_wishlist', 'Add to wishlist' ) ); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- buy now button -->
                        <a href="<?php echo esc_url( $burger_get( 'link_checkout_html', 'checkout.html' ) ); ?>" class="tj-product-details-buy-now-btn w-100">
                            <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_shop_now', 'Shop now' ) ); ?></span></span></a>
                        </div>
                        <div class="tj-product-details-query">
                        <h6 class="tj-product-details-query-title"><?php echo esc_html( $burger_get( 'texto_product_info', 'Product Info' ) ); ?></h6>
                        <div class="tj-product-details-query-item d-flex align-items-center">
                            <span><?php echo esc_html( $burger_get( 'texto_sku', 'SKU:' ) ); ?></span>
                            <p><?php echo esc_html( $burger_get( 'texto_sv_18', 'SV-18' ) ); ?></p>
                        </div>
                        <div class="tj-product-details-query-item d-flex align-items-center">
                            <span><?php echo esc_html( $burger_get( 'texto_category', 'Category:' ) ); ?></span> <a href="#"><?php echo esc_html( $burger_get( 'texto_power', 'Power' ) ); ?></a>
                        </div>
                        <div class="tj-product-details-query-item d-flex align-items-center">
                            <span><?php echo esc_html( $burger_get( 'texto_tag', 'Tag:' ) ); ?></span> <a href="#"><?php echo esc_html( $burger_get( 'texto_portable', 'Portable' ) ); ?></a>
                        </div>
                        </div>
                        <div class="tj-product-details-share">
                        <h6><?php echo esc_html( $burger_get( 'texto_share', 'Share:' ) ); ?></h6>
                        <a href="<?php echo esc_url( $burger_get( 'link_https_www_facebook_com', 'https://www.facebook.com/' ) ); ?>" title="Facebook"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a href="<?php echo esc_url( $burger_get( 'link_https_x_com', 'https://x.com/' ) ); ?>" title="Twitter"><i class="fab fa-x-twitter"></i></a>
                        <a href="<?php echo esc_url( $burger_get( 'link_https_www_linkedin_com', 'https://www.linkedin.com/' ) ); ?>" title="Linkedin"><i
                                class="fa-brands fa-linkedin-in"></i></a>
                        <a href="<?php echo esc_url( $burger_get( 'link_https_www_pinterest_com', 'https://www.pinterest.com/' ) ); ?>" title="Pinterest"><i
                                class="fa-brands fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tj-product-details-bottom section-bottom-gap">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tj-product-details-tab-nav tj-tab">
                        <nav>
                            <div class="nav nav-tabs p-relative tj-product-tab" id="navPresentationTab"
                                role="tablist">
                                <button class="nav-link description_tab active" id="nav-desc-tab-description"
                                    data-bs-toggle="tab" data-bs-target="#nav-desc-description" type="button"
                                    role="tab" aria-controls="nav-desc-description"
                                    aria-selected="true"><?php echo esc_html( $burger_get( 'texto_description', 'Description' ) ); ?>
                                </button>
                                <button class="nav-link additional_information_tab"
                                    id="nav-desc-tab-additional_information" data-bs-toggle="tab"
                                    data-bs-target="#nav-desc-additional_information" type="button" role="tab"
                                    aria-controls="nav-desc-additional_information" aria-selected="false"
                                    tabindex="-1"><?php echo esc_html( $burger_get( 'texto_additional_information', 'Additional information' ) ); ?> </button>
                                <button class="nav-link reviews_tab" id="nav-desc-tab-reviews"
                                    data-bs-toggle="tab" data-bs-target="#nav-desc-reviews" type="button"
                                    role="tab" aria-controls="nav-desc-reviews" aria-selected="false"
                                    tabindex="-1"><?php echo esc_html( $burger_get( 'texto_reviews_01', 'Reviews (01)' ) ); ?>
                                </button>
                            </div>
                        </nav>
                        <div class="tab-content" id="navPresentationTabContent">
                            <div class="tab-pane fade active show" id="nav-desc-description" role="tabpanel"
                                aria-labelledby="nav-desc-tab-description">
                                <div class="tj-product-details-description mt-30">
                                    <p><?php echo wp_kses_post( $burger_get( 'texto_experience_true_wireless_freedom_with_2', 'Experience true wireless freedom with our latest earbuds, designed to deliver crystal-clear sound and deep bass in a compact, lightweight package. Perfectly crafted for everyday use, these earbuds feature advanced Bluetooth connectivity for seamless pairing and stable audio streaming. Whether you’re hitting the gym, commuting, or relaxing at home, enjoy up to 8 hours of uninterrupted playtime with a portable charging case that keeps you powered on the go.' ) ); ?></p>
                                    <p><?php echo wp_kses_post( $burger_get( 'texto_with_ergonomic_ear_tips_and_sweat_resi', 'With ergonomic ear tips and sweat-resistant materials, they provide a secure and comfortable fit for any activity. Plus, intuitive touch controls let you manage music, calls, and voice assistants effortlessly. Elevate your audio experience with earbuds that combine style, performance, and convenience' ) ); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-desc-additional_information" role="tabpanel"
                                aria-labelledby="nav-desc-tab-additional_information">
                                <div class="tj-product-details-description mt-30">
                                    <table>
                                    <tbody>
                                        <tr>
                                            <th>
                                                <?php echo esc_html( $burger_get( 'texto_weight', 'Weight' ) ); ?></th>
                                            <td><?php echo esc_html( $burger_get( 'texto_55_kg', '55 kg' ) ); ?></td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <?php echo esc_html( $burger_get( 'texto_dimensions', 'Dimensions' ) ); ?></th>
                                            <td><?php echo esc_html( $burger_get( 'texto_55_55_55_cm', '55 × 55 × 55 cm' ) ); ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-desc-reviews" role="tabpanel"
                                aria-labelledby="nav-desc-tab-reviews">
                                <div class="tj-product-details-description mt-30">
                                    <div class="reviews-area">
                                    <div class="comments-area">
                                        <h3 class="d-none mb-30">
                                            <?php echo esc_html( $burger_get( 'texto_1_review_for', '1 review for “' ) ); ?><span><?php echo esc_html( $burger_get( 'texto_personal_holding_earbud_2', 'Personal holding earbud' ) ); ?></span>” </h3>

                                        <ol class="commentlist">
                                            <li class="review">
                                                <div class="comment_container">
                                                <img class="avatar" src="<?php echo esc_url( $burger_get( 'imagen_assets_images_blog_avatar_1_webp', NAKAMA_THEME_URL . '/assets/images/blog/avatar-1.webp' ) ); ?>"
                                                    alt="">
                                                <div class="comment-text">
                                                    <div class="star-rating">
                                                        <span style="width:100%"></span>
                                                    </div>
                                                    <p class="meta">
                                                        <strong class="review__author"><?php echo esc_html( $burger_get( 'texto_berlee_hopper', 'Berlee Hopper' ) ); ?> </strong>
                                                        <span class="review__dash">–</span>
                                                        <span class="review__published-date"><?php echo esc_html( $burger_get( 'texto_june_30_2025', 'June 30, 2025' ) ); ?></span>
                                                    </p>

                                                    <div class="description">
                                                        <p><?php echo wp_kses_post( $burger_get( 'texto_i_ve_been_using_these_earbuds_daily_fo', '“I’ve been using these earbuds daily for a few weeks, and they’ve truly exceeded my expectations. The sound quality is crisp, with deep bass and clear highs — perfect for music, calls, or podcasts. The Bluetooth connection is stable, and pairing was super easy.”' ) ); ?></p>
                                                    </div>
                                                </div>
                                                </div>
                                            </li><!-- #comment-## -->
                                        </ol>


                                    </div>

                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond">
                                                <h3><?php echo esc_html( $burger_get( 'texto_leave_a_comment', 'Leave a comment' ) ); ?></h3>
                                                <form class="comment-form" action="#" method="post"
                                                id="commentform">
                                                <p class="comment-notes"><?php echo esc_html( $burger_get( 'texto_your_email_address_will_not_be_publish', 'Your email address will not be published. Required fields are marked' ) ); ?>
                                                    <span class="required">*</span>
                                                </p>
                                                <p class="comment-form-author comment-input"><label
                                                        for="author"><?php echo esc_html( $burger_get( 'texto_name', 'Name' ) ); ?> <span
                                                            class="required">*</span></label><input id="author"
                                                        name="author" type="text" value="" size="30"
                                                        required="">
                                                </p>
                                                <p class="comment-form-email comment-input"><label
                                                        for="email"><?php echo esc_html( $burger_get( 'texto_email', 'Email' ) ); ?> <span
                                                            class="required">*</span></label><input id="semail"
                                                        name="semail" type="email" value="" size="30"
                                                        required="">
                                                </p>
                                                <div class="comment-form-rating comment-rating d-flex">
                                                    <span><?php echo esc_html( $burger_get( 'texto_your_rating', 'Your rating' ) ); ?> <span class="required">*</span></span>
                                                    <div class="star-ratings">
                                                        <div class="fill-ratings" style="width: 60%">
                                                            <span>★★★★★</span>
                                                        </div>
                                                        <div class="empty-ratings">
                                                            <span>★★★★★</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <p class="comment-input"><label for="comment"><?php echo esc_html( $burger_get( 'texto_type_your_review', 'Type your review' ) ); ?><span
                                                            class="required">*</span></label><textarea
                                                        id="comment" name="comment" cols="45" rows="8"
                                                        required=""></textarea></p>
                                                <p class="comment-check"><input id="comment-check"
                                                        name="comment-check" type="checkbox" value="yes">
                                                    <label for="comment-check"><?php echo esc_html( $burger_get( 'texto_save_my_name_email_and_website_in_this', 'Save my name, email, and website in this browser for the next time I comment.' ) ); ?></label>
                                                </p>
                                                <p class="form-submit">

                                                    <button type="submit" class="tj-primary-btn mt-0">
                                                        <span class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_submit_reviews', 'Submit reviews' ) ); ?></span></span>
                                                        <span class="btn-icon"><i
                                                            class="tji-arrow-right-long"></i></span>
                                                    </button>
                                                </p>
                                                </form>
                                            </div><!-- #respond -->
                                        </div>
                                    </div>

                                    <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="related-products has-border">

                <div class="sec-heading text-center">
                    <span class="sub-title wow fadeInUp" data-wow-delay="0.1s"><i class="tji-box"></i> <?php echo esc_html( $burger_get( 'texto_related_products', 'Related products' ) ); ?></span>
                    <h2 class="sec-title text-anim"><?php echo esc_html( $burger_get( 'texto_customers_also_bought', 'Customers also bought' ) ); ?></h2>
                </div>

                <div class="row rg-30 row-cols-xl-3 row-cols-lg-3 row-cols-md-2 row-cols-1">
                    <div class="tj-product">
                        <div class="tj-product-item">
                        <div class="tj-product-thumb">
                            <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html', 'shop-details.html' ) ); ?>">
                                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_1_webp_5', NAKAMA_THEME_URL . '/assets/images/product/product-1.webp' ) ); ?>" alt=""> </a>

                            <div class="tj-product-badge product-on-sale">
                                <span class="onsale"><?php echo esc_html( $burger_get( 'texto_sale_2', 'Sale' ) ); ?></span>
                            </div>

                            <!-- product action -->
                            <div class="tj-product-action">
                                <div class="tj-product-action-item d-flex flex-column">
                                    <div class="tj-product-action-btn product-add-wishlist-btn">
                                    <button><?php echo esc_html( $burger_get( 'texto_add_to_wishlist_2', 'Add to wishlist' ) ); ?></button> <span class="tj-product-action-btn-tooltip"><?php echo esc_html( $burger_get( 'texto_add_to_wishlist_3', 'Add to wishlist' ) ); ?></span>
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
                                    class="btn-text"><span><?php echo esc_html( $burger_get( 'texto_add_to_cart_2', 'Add to cart' ) ); ?></span></span></a>
                            </div>
                        </div>
                        <div class="tj-product-content">
                            <div class="tj-product-tag d-none">
                                <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_2', 'shop-details.html' ) ); ?>"> <?php echo esc_html( $burger_get( 'texto_power_2', 'Power' ) ); ?></a>
                            </div>
                            <h3 class="tj-product-title">
                                <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_3', 'shop-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_personal_holding_earbud_3', 'Personal holding earbud' ) ); ?></a>
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
                                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_2_webp_3', NAKAMA_THEME_URL . '/assets/images/product/product-2.webp' ) ); ?>" alt=""> </a>

                            <div class="tj-product-badge product-on-sale">
                                <span class="onsale sold-out"><?php echo esc_html( $burger_get( 'texto_sold', 'Sold' ) ); ?></span>
                            </div>

                            <!-- product action -->
                            <div class="tj-product-action">
                                <div class="tj-product-action-item d-flex flex-column">
                                    <div class="tj-product-action-btn product-add-wishlist-btn">
                                    <button><?php echo esc_html( $burger_get( 'texto_add_to_wishlist_4', 'Add to wishlist' ) ); ?></button> <span class="tj-product-action-btn-tooltip"><?php echo esc_html( $burger_get( 'texto_add_to_wishlist_5', 'Add to wishlist' ) ); ?></span>
                                    </div>

                                    <div class="tj-product-action-btn">
                                    <a class="tj-quick-product-details" href="#tj-product-modal-1"
                                        data-vbtype="inline"><i class="fal fa-eye"></i></a>
                                    <span class="tj-product-action-btn-tooltip"><?php echo esc_html( $burger_get( 'texto_quick_view_2', 'Quick view' ) ); ?></span>
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
                                <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_product_product_6_webp', NAKAMA_THEME_URL . '/assets/images/product/product-6.webp' ) ); ?>" alt=""> </a>


                            <!-- product action -->
                            <div class="tj-product-action">
                                <div class="tj-product-action-item d-flex flex-column">
                                    <div class="tj-product-action-btn product-add-wishlist-btn">
                                    <button><?php echo esc_html( $burger_get( 'texto_add_to_wishlist_6', 'Add to wishlist' ) ); ?></button> <span class="tj-product-action-btn-tooltip"><?php echo esc_html( $burger_get( 'texto_add_to_wishlist_7', 'Add to wishlist' ) ); ?></span>
                                    </div>

                                    <div class="tj-product-action-btn">
                                    <a class="tj-quick-product-details" href="#tj-product-modal-1"
                                        data-vbtype="inline"><i class="fal fa-eye"></i></a>
                                    <span class="tj-product-action-btn-tooltip"><?php echo esc_html( $burger_get( 'texto_quick_view_3', 'Quick view' ) ); ?></span>
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
                                <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_7', 'shop-details.html' ) ); ?>"> <?php echo esc_html( $burger_get( 'texto_power_3', 'Power' ) ); ?></a>
                            </div>
                            <h3 class="tj-product-title">
                                <a href="<?php echo esc_url( $burger_get( 'link_shop_details_html_8', 'shop-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_cool_mini_usb_fan', 'Cool mini USB fan' ) ); ?></a>
                            </h3>

                            <div class="tj-product-price-wrapper">

                                <span class="price"><span><bdi><span>$</span>50.00</bdi></span></span>
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
<!-- end: Product Section -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
