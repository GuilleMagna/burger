<?php
$dcm_home_lines = [
    ['number' => '01', 'eyebrow' => 'Producción continua', 'title' => 'Compresores de aire', 'copy' => 'Una amplia gama de modelos y prestaciones para talleres, industrias y servicios.', 'image' => 'line-compresores.jpg', 'link' => home_url('/dcm/productos/#aire-comprimido')],
    ['number' => '02', 'eyebrow' => 'Rendimiento estable', 'title' => 'Bombas y grupos de vacío', 'copy' => 'Equipos para ordeñe, servicios atmosféricos y aplicaciones productivas especiales.', 'image' => 'line-vacio.png', 'link' => home_url('/dcm/productos/#aire-comprimido')],
    ['number' => '03', 'eyebrow' => 'Tecnología para el tambo', 'title' => 'Ordeñadoras', 'copy' => 'Ordeñadoras portátiles de una y dos bajadas, directas al tacho y listas para trabajar.', 'image' => 'line-ordenadoras.jpg', 'link' => home_url('/dcm/productos/#tambo')],
    ['number' => '04', 'eyebrow' => 'Cuidado de la leche', 'title' => 'Placas enfriadoras', 'copy' => 'Placas de 10, 16, 20 y 26 separadores, con conexiones de 25 mm y tuercas de bronce.', 'image' => 'line-enfriado.jpg', 'link' => home_url('/dcm/productos/#tambo')],
];
$dcm_home_spares = [
    ['number' => '01', 'title' => 'Filtros de leche', 'copy' => 'Entradas y salidas de 25, 32 o 38 mm, resorte interior y distintas configuraciones.', 'image' => 'spare-filtro.jpg'],
    ['number' => '02', 'title' => 'Colectores y casquillos', 'copy' => 'Componentes sanitarios con pulido espejo o arenado para sistemas de ordeñe.', 'image' => 'spare-colector.jpg'],
    ['number' => '03', 'title' => 'Bombas de vacío', 'copy' => 'Bombas y componentes preparados para trabajo continuo y mantenimiento en el tambo.', 'image' => 'spare-bomba.jpg'],
    ['number' => '04', 'title' => 'Cabezales y componentes', 'copy' => 'Repuestos para conservar el rendimiento, prolongar la vida útil y evitar paradas.', 'image' => 'spare-cabezal.jpg'],
];
?>
<section class="dcm-section dcm-products" id="productos">
    <div class="dcm-shell">
        <div class="dcm-heading">
            <div><p class="dcm-eyebrow"><span></span>Nuestras líneas</p><h2>Equipos diseñados<br>para <em>rendir.</em></h2></div>
            <p>Fabricación propia y soluciones probadas para aire comprimido, vacío y producción lechera. Un resumen de las líneas que podés explorar en nuestro catálogo.</p>
        </div>
        <div class="dcm-products__grid">
            <?php foreach ($dcm_home_lines as $line) : ?>
                <article class="dcm-product-card">
                    <a class="dcm-product-card__media" href="<?php echo esc_url($line['link']); ?>" aria-label="<?php echo esc_attr('Ver ' . $line['title']); ?>">
                        <img src="<?php echo esc_url(NAKAMA_THEME_URL . '/assets/images/dcm/' . $line['image']); ?>" alt="<?php echo esc_attr($line['title']); ?>" loading="lazy">
                        <span class="dcm-product-card__number"><?php echo esc_html($line['number']); ?></span>
                    </a>
                    <div class="dcm-product-card__body">
                        <p><?php echo esc_html($line['eyebrow']); ?></p><h3><?php echo esc_html($line['title']); ?></h3>
                        <div><span><?php echo esc_html($line['copy']); ?></span><a href="<?php echo esc_url($line['link']); ?>" aria-label="<?php echo esc_attr('Conocer ' . $line['title']); ?>">↗</a></div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
        <a class="dcm-products__all" href="<?php echo esc_url(home_url('/dcm/productos/')); ?>">Ver todos los productos <span>→</span></a>
    </div>
</section>
<section class="dcm-section dcm-spares" id="repuestos">
    <div class="dcm-shell">
        <div class="dcm-heading">
            <div><p class="dcm-eyebrow"><span></span>Repuestos DCM</p><h2>Todo para mantener<br>tu equipo <em>activo.</em></h2></div>
            <p>Fabricamos y proveemos repuestos para ordeñadoras y equipos DCM. Te ayudamos a identificar el componente correcto para cada instalación.</p>
        </div>
        <div class="dcm-spares__grid">
            <?php foreach ($dcm_home_spares as $spare) : ?>
                <article class="dcm-spare-card">
                    <div class="dcm-spare-card__media"><img src="<?php echo esc_url(NAKAMA_THEME_URL . '/assets/images/dcm/' . $spare['image']); ?>" alt="<?php echo esc_attr($spare['title']); ?>" loading="lazy"><span><?php echo esc_html($spare['number']); ?></span></div>
                    <div class="dcm-spare-card__body"><h3><?php echo esc_html($spare['title']); ?></h3><p><?php echo esc_html($spare['copy']); ?></p></div>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="dcm-spares__footer">
            <p>¿Necesitás identificar un repuesto? Enviá una foto o los datos del equipo y te asesoramos.</p>
            <a class="dcm-button" href="<?php echo esc_url(home_url('/dcm/repuestos/')); ?>">Ver todos los repuestos <span>↗</span></a>
        </div>
    </div>
</section>
