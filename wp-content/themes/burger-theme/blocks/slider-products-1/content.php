<?php
$content_fields = array(
    'titulo_seccion_slider_products' => 'Lo nuevo',
    'productos_slider_products' => array(),
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );
$titulo = $titulo_seccion_slider_products;
$productos = $productos_slider_products;

$productos_demo = [
    [
        'imagen_producto_slider_products'         => NAKAMA_THEME_URL . '/blocks/slider-products/assets/product-demo-1.svg',
        'etiqueta_producto_slider_products'       => 'Lo nuevo',
        'color_etiqueta_producto_slider_products' => '#9E3500',
        'nombre_producto_slider_products'         => 'Nike Tiempo Legend',
        'texto_producto_slider_products'          => 'Botines de pasto natural unisex',
        'precio_producto_slider_products'         => '$ 189.999',
        'color_fondo_producto_slider_products'    => '#f5f5f5',
        'enlace_producto_slider_products'         => ['url' => '#', 'title' => 'Ver producto', 'target' => ''],
    ],
    [
        'imagen_producto_slider_products'         => NAKAMA_THEME_URL . '/blocks/slider-products/assets/product-demo-2.svg',
        'etiqueta_producto_slider_products'       => 'Exclusivo',
        'color_etiqueta_producto_slider_products' => '#006400',
        'nombre_producto_slider_products'         => 'Nike Air Max',
        'texto_producto_slider_products'          => 'Zapatillas urbanas para hombre',
        'precio_producto_slider_products'         => '$ 249.999',
        'color_fondo_producto_slider_products'    => '#f5f5f5',
        'enlace_producto_slider_products'         => ['url' => '#', 'title' => 'Ver producto', 'target' => ''],
    ],
    [
        'imagen_producto_slider_products'         => NAKAMA_THEME_URL . '/blocks/slider-products/assets/product-demo-3.svg',
        'etiqueta_producto_slider_products'       => 'Oferta',
        'color_etiqueta_producto_slider_products' => '#d30000',
        'nombre_producto_slider_products'         => 'Nike Academy',
        'texto_producto_slider_products'          => 'Remera deportiva Dri-FIT',
        'precio_producto_slider_products'         => '$ 79.999',
        'color_fondo_producto_slider_products'    => '#f5f5f5',
        'enlace_producto_slider_products'         => ['url' => '#', 'title' => 'Ver producto', 'target' => ''],
    ],
    [
        'imagen_producto_slider_products'         => NAKAMA_THEME_URL . '/blocks/slider-products/assets/product-demo-4.svg',
        'etiqueta_producto_slider_products'       => 'Lo nuevo',
        'color_etiqueta_producto_slider_products' => '#9E3500',
        'nombre_producto_slider_products'         => 'Nike Phantom',
        'texto_producto_slider_products'          => 'Calzado deportivo de alto rendimiento',
        'precio_producto_slider_products'         => '$ 219.999',
        'color_fondo_producto_slider_products'    => '#f5f5f5',
        'enlace_producto_slider_products'         => ['url' => '#', 'title' => 'Ver producto', 'target' => ''],
    ],
];

if (empty($productos)) {
    $productos = $productos_demo;
}

$block_id = 'slider-products-' . uniqid();

if (!$cache_key) return;
?>

<section id="<?php echo esc_attr($block_id); ?>" class="slider-products-block section-gap-x">

    <div class="container-fluid">

        <div class="slider-products-header">

            <h2 class="slider-products-title">
                <?php echo esc_html($titulo); ?>
            </h2>

            <div class="slider-products-nav" aria-label="Navegación del carrusel">
                <button type="button" class="slider-products-arrow slider-products-prev" aria-label="Anterior">
                    <span aria-hidden="true">‹</span>
                </button>
                <button type="button" class="slider-products-arrow slider-products-next" aria-label="Siguiente">
                    <span aria-hidden="true">›</span>
                </button>
            </div>

        </div>

        <div class="owl-carousel slider-products-carousel">

            <?php foreach ($productos as $producto):

                $imagen         = $producto['imagen_producto_slider_products'] ?? '';
                $etiqueta       = $producto['etiqueta_producto_slider_products'] ?? '';
                $color_etiqueta = $producto['color_etiqueta_producto_slider_products'] ?? '#9E3500';
                $nombre         = $producto['nombre_producto_slider_products'] ?? '';
                $texto          = $producto['texto_producto_slider_products'] ?? '';
                $precio         = $producto['precio_producto_slider_products'] ?? '';
                $color_fondo    = $producto['color_fondo_producto_slider_products'] ?? '#f5f5f5';
                $enlace         = $producto['enlace_producto_slider_products'] ?? [];

                $url    = !empty($enlace['url']) ? $enlace['url'] : '#';
                $target = !empty($enlace['target']) ? $enlace['target'] : '_self';

                $favorite_id = md5($nombre . '|' . $url);

            ?>

                <article class="slider-product-card">

                    <button
                        type="button"
                        class="slider-product-favorite"
                        data-favorite-id="<?php echo esc_attr($favorite_id); ?>"
                        aria-label="Agregar a favoritos"
                    >
                        <span class="slider-product-heart-empty" aria-hidden="true">♡</span>
                        <span class="slider-product-heart-filled" aria-hidden="true">♥</span>
                    </button>

                    <a
                        href="<?php echo esc_url($url); ?>"
                        target="<?php echo esc_attr($target); ?>"
                        class="slider-product-link"
                        <?php echo $target === '_blank' ? 'rel="noopener noreferrer"' : ''; ?>
                    >

                        <div class="slider-product-image-wrap" style="background-color: <?php echo esc_attr($color_fondo); ?>;">
                            <?php if (!empty($imagen)): ?>
                                <img
                                    src="<?php echo esc_url($imagen); ?>"
                                    alt="<?php echo esc_attr($nombre); ?>"
                                    class="slider-product-image"
                                    loading="lazy"
                                >
                            <?php endif; ?>
                        </div>

                        <div class="slider-product-content">

                            <?php if (!empty($etiqueta)): ?>
                                <div class="slider-product-badge" style="color: <?php echo esc_attr($color_etiqueta); ?>;">
                                    <?php echo esc_html($etiqueta); ?>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($nombre)): ?>
                                <h3 class="slider-product-name">
                                    <?php echo esc_html($nombre); ?>
                                </h3>
                            <?php endif; ?>

                            <?php if (!empty($texto)): ?>
                                <p class="slider-product-text">
                                    <?php echo esc_html($texto); ?>
                                </p>
                            <?php endif; ?>

                            <?php if (!empty($precio)): ?>
                                <div class="slider-product-price">
                                    <?php echo esc_html($precio); ?>
                                </div>
                            <?php endif; ?>

                        </div>

                    </a>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>
