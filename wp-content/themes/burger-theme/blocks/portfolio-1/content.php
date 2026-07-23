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

<!-- start: Project Section -->
<section class="tj-project-section section-gap">
    <div class="container">
    <div class="row row-gap-4">
        <div class="col-xl-4 col-md-6">
        <div class="project-item wow fadeInUp" data-wow-delay=".1s">
            <div class="project-img">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_project_project_6_webp', NAKAMA_THEME_URL . '/assets/images/project/project-6.webp' ) ); ?>" alt="">
            </div>
            <div class="project-content">
            <span class="categories"><a href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html', 'portfolio-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business', 'Business' ) ); ?></a></span>
            <div class="project-text">
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html_2', 'portfolio-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_event_management_platform', 'Event Management Platform' ) ); ?></a></h4>
                <a class="project-btn" href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html_3', 'portfolio-details.html' ) ); ?>">
                <i class="tji-arrow-right-big"></i>
                </a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="project-item wow fadeInUp" data-wow-delay=".3s">
            <div class="project-img">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_project_project_7_webp', NAKAMA_THEME_URL . '/assets/images/project/project-7.webp' ) ); ?>" alt="">
            </div>
            <div class="project-content">
            <span class="categories"><a href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html_4', 'portfolio-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_2', 'Business' ) ); ?></a></span>
            <div class="project-text">
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html_5', 'portfolio-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_rebranding_strategy_for_a_growing', 'Rebranding Strategy for a Growing' ) ); ?></a></h4>
                <a class="project-btn" href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html_6', 'portfolio-details.html' ) ); ?>">
                <i class="tji-arrow-right-big"></i>
                </a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="project-item wow fadeInUp" data-wow-delay=".5s">
            <div class="project-img">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_project_project_8_webp', NAKAMA_THEME_URL . '/assets/images/project/project-8.webp' ) ); ?>" alt="">
            </div>
            <div class="project-content">
            <span class="categories"><a href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html_7', 'portfolio-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_3', 'Business' ) ); ?></a></span>
            <div class="project-text">
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html_8', 'portfolio-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_interactive_learning_platform', 'Interactive Learning Platform' ) ); ?></a></h4>
                <a class="project-btn" href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html_9', 'portfolio-details.html' ) ); ?>">
                <i class="tji-arrow-right-big"></i>
                </a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="project-item wow fadeInUp" data-wow-delay=".7s">
            <div class="project-img">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_project_project_9_webp', NAKAMA_THEME_URL . '/assets/images/project/project-9.webp' ) ); ?>" alt="">
            </div>
            <div class="project-content">
            <span class="categories"><a href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html_10', 'portfolio-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_4', 'Business' ) ); ?></a></span>
            <div class="project-text">
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html_11', 'portfolio-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_environmental_impact_dashboard', 'Environmental Impact Dashboard' ) ); ?></a></h4>
                <a class="project-btn" href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html_12', 'portfolio-details.html' ) ); ?>">
                <i class="tji-arrow-right-big"></i>
                </a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="project-item wow fadeInUp" data-wow-delay=".9s">
            <div class="project-img">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_project_project_8_webp_2', NAKAMA_THEME_URL . '/assets/images/project/project-8.webp' ) ); ?>" alt="">
            </div>
            <div class="project-content">
            <span class="categories"><a href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html_13', 'portfolio-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_5', 'Business' ) ); ?></a></span>
            <div class="project-text">
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html_14', 'portfolio-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_interactive_learning_platform_2', 'Interactive Learning Platform' ) ); ?></a></h4>
                <a class="project-btn" href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html_15', 'portfolio-details.html' ) ); ?>">
                <i class="tji-arrow-right-big"></i>
                </a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-md-6">
        <div class="project-item wow fadeInUp" data-wow-delay="1s">
            <div class="project-img">
            <img src="<?php echo esc_url( $burger_get( 'imagen_assets_images_project_project_7_webp_2', NAKAMA_THEME_URL . '/assets/images/project/project-7.webp' ) ); ?>" alt="">
            </div>
            <div class="project-content">
            <span class="categories"><a href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html_16', 'portfolio-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_business_6', 'Business' ) ); ?></a></span>
            <div class="project-text">
                <h4 class="title"><a href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html_17', 'portfolio-details.html' ) ); ?>"><?php echo esc_html( $burger_get( 'texto_rebranding_strategy_for_a_growing_2', 'Rebranding Strategy for a Growing' ) ); ?></a></h4>
                <a class="project-btn" href="<?php echo esc_url( $burger_get( 'link_portfolio_details_html_18', 'portfolio-details.html' ) ); ?>">
                <i class="tji-arrow-right-big"></i>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="tj-pagination d-flex justify-content-center">
        <ul>
        <li>
            <span aria-current="page" class="page-numbers current">1</span>
        </li>
        <li>
            <a class="page-numbers" href="#">2</a>
        </li>
        <li>
            <a class="page-numbers" href="#">3</a>
        </li>
        <li>
            <a class="next page-numbers" href="#"><i class="tji-arrow-right-long"></i></a>
        </li>
        </ul>
    </div>
    </div>
</section>
<!-- end: Project Section -->

<?php
$__block_html = ob_get_clean();

set_transient($__block_cache_key, $__block_html, 10 * MINUTE_IN_SECONDS);

echo $__block_html;
?>
