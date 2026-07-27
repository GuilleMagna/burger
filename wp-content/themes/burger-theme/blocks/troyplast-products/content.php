<?php
$tp_products = [
    ['n'=>'01','kind'=>'Agro & hogar','title'=>'Mangueras de riego','copy'=>'Líneas reforzadas para ferretería, jardín y múltiples usos.','class'=>'garden'],
    ['n'=>'02','kind'=>'Industria alimenticia','title'=>'Tubos aspirantes y expelentes','copy'=>'Soluciones para paso de leche y fluidos, desarrolladas para trabajo continuo.','class'=>'milk'],
    ['n'=>'03','kind'=>'Industria láctea','title'=>'Tubos para sistemas de ordeñe','copy'=>'Tubos para paso de leche, pulsado y distintas funciones dentro del sistema.','class'=>'milking'],
    ['n'=>'04','kind'=>'Soluciones técnicas','title'=>'Perfiles flexibles en PVC','copy'=>'Desarrollos para calzado, muebles, protección de cilindros y necesidades especiales.','class'=>'profiles'],
    ['n'=>'05','kind'=>'Equipamiento','title'=>'Accesorios para jaulas','copy'=>'Componentes funcionales, resistentes y simples de instalar.','class'=>'cages'],
    ['n'=>'06','kind'=>'Aislación industrial','title'=>'Cortinas en PVC','copy'=>'Separación de ambientes con visibilidad, higiene y control térmico.','class'=>'curtains'],
];
?>
<section class="tp-products" id="productos"><div class="tp-shell"><div class="tp-section-head"><div><p class="tp-kicker"><span></span>Portfolio Troyplast</p><h2>Un material.<br><em>Muchas respuestas.</em></h2></div><p>Productos estándar y desarrollos adaptables para sectores que necesitan rendimiento, higiene y durabilidad.</p></div><div class="tp-products__grid"><?php foreach($tp_products as $product): ?><article class="tp-product tp-product--<?php echo esc_attr($product['class']); ?>"><div class="tp-product__visual"><span><?php echo esc_html($product['n']); ?></span><i aria-hidden="true"></i></div><div class="tp-product__body"><p><?php echo esc_html($product['kind']); ?></p><h3><?php echo esc_html($product['title']); ?></h3><div><span><?php echo esc_html($product['copy']); ?></span><a href="<?php echo esc_url(home_url('/troyplast/productos/')); ?>" aria-label="<?php echo esc_attr('Ver catálogo de ' . $product['title']); ?>">↗</a></div></div></article><?php endforeach; ?></div></div></section>
