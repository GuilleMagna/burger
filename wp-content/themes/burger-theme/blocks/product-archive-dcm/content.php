<?php
$dcm_products = [
    [
        'number' => '01',
        'category' => 'Aire comprimido',
        'title' => 'Compresores de aire',
        'copy' => 'Equipos para talleres, industrias y servicios, con distintas capacidades y configuraciones.',
        'class' => 'compressors',
        'filter' => 'aire',
    ],
    [
        'number' => '02',
        'category' => 'Instalaciones',
        'title' => 'Plantas de aire',
        'copy' => 'Sistemas preparados para entregar caudal estable y acompañar procesos productivos exigentes.',
        'class' => 'air',
        'filter' => 'aire',
    ],
    [
        'number' => '03',
        'category' => 'Vacío',
        'title' => 'Bombas y grupos de vacío',
        'copy' => 'Soluciones para ordeñe, equipos atmosféricos y aplicaciones industriales especiales.',
        'class' => 'vacuum',
        'filter' => 'aire',
    ],
    [
        'number' => '04',
        'category' => 'Tambo',
        'title' => 'Ordeñadoras',
        'copy' => 'Equipos portátiles de una y dos bajadas, pensados para simplificar el trabajo diario.',
        'class' => 'milking',
        'filter' => 'tambo',
    ],
    [
        'number' => '05',
        'category' => 'Tambo',
        'title' => 'Accesorios para ordeñe',
        'copy' => 'Colectores, filtros, casquillos, repuestos y componentes para mantener el sistema operativo.',
        'class' => 'milking-detail',
        'filter' => 'tambo',
    ],
    [
        'number' => '06',
        'category' => 'Lechería',
        'title' => 'Placas enfriadoras',
        'copy' => 'Intercambiadores para enfriamiento de leche disponibles en diferentes capacidades.',
        'class' => 'cooling',
        'filter' => 'tambo',
    ],
    [
        'number' => '07',
        'category' => 'Taller',
        'title' => 'Herramientas neumáticas',
        'copy' => 'Llaves de impacto, criques y amoladoras para trabajar con potencia y precisión.',
        'class' => 'tools',
        'filter' => 'herramientas',
    ],
    [
        'number' => '08',
        'category' => 'Agro y servicios',
        'title' => 'Equipos especiales',
        'copy' => 'Fumigadores, desagotadores, balones de inflado y desarrollos para necesidades concretas.',
        'class' => 'special',
        'filter' => 'especiales',
    ],
];
?>

<main class="dcm-catalog">
    <section class="dcm-catalog-hero">
        <div class="dcm-catalog-hero__media" aria-hidden="true"></div>
        <div class="dcm-shell dcm-catalog-hero__inner">
            <div>
                <p class="dcm-eyebrow dcm-eyebrow--light"><span></span>Catálogo de soluciones</p>
                <h1>Productos que<br>responden al<br><em>trabajo real.</em></h1>
            </div>
            <div class="dcm-catalog-hero__intro">
                <p>Equipos y componentes para aire comprimido, vacío, ordeñe y aplicaciones especiales.</p>
                <a href="#archivo">Explorar catálogo <span>↓</span></a>
            </div>
        </div>
        <div class="dcm-catalog-hero__breadcrumb"><a href="<?php echo esc_url(home_url('/dcm/')); ?>">DCM</a><span>/</span>Productos</div>
    </section>

    <section class="dcm-catalog-archive" id="archivo">
        <div class="dcm-shell">
            <div class="dcm-catalog-toolbar">
                <div>
                    <p class="dcm-eyebrow"><span></span>Archivo de productos</p>
                    <h2>Encontrá la línea<br>que necesitás.</h2>
                </div>
                <p><strong>08</strong> categorías principales</p>
            </div>

            <div class="dcm-catalog-controls">
                <p aria-live="polite"><strong data-dcm-results>08</strong> líneas disponibles</p>
                <div>
                    <label class="dcm-catalog-search">
                        <span class="screen-reader-text">Buscar en el catálogo</span>
                        <input type="search" placeholder="Buscar producto…" data-dcm-search>
                        <b aria-hidden="true">⌕</b>
                    </label>
                    <label class="dcm-catalog-sort">
                        <span class="screen-reader-text">Ordenar productos</span>
                        <select data-dcm-sort>
                            <option value="default">Orden original</option>
                            <option value="az">Nombre: A–Z</option>
                            <option value="za">Nombre: Z–A</option>
                        </select>
                    </label>
                </div>
            </div>

            <nav class="dcm-catalog-filters" aria-label="Filtrar categorías del catálogo">
                <button class="is-active" type="button" data-dcm-filter="all">Todos</button>
                <button type="button" data-dcm-filter="aire">Aire comprimido</button>
                <button type="button" data-dcm-filter="tambo">Tambo</button>
                <button type="button" data-dcm-filter="herramientas">Herramientas</button>
                <button type="button" data-dcm-filter="especiales">Equipos especiales</button>
            </nav>

            <div class="dcm-catalog-grid">
                <?php foreach ($dcm_products as $index => $product) : ?>
                    <?php
                    $anchor = '';
                    if ($index === 0) $anchor = 'aire-comprimido';
                    if ($index === 3) $anchor = 'tambo';
                    if ($index === 6) $anchor = 'herramientas';
                    if ($index === 7) $anchor = 'especiales';
                    ?>
                    <article
                        class="dcm-catalog-card dcm-catalog-card--<?php echo esc_attr($product['class']); ?>"
                        data-dcm-category="<?php echo esc_attr($product['filter']); ?>"
                        data-dcm-title="<?php echo esc_attr($product['title']); ?>"
                        data-dcm-search-text="<?php echo esc_attr($product['category'] . ' ' . $product['title'] . ' ' . $product['copy']); ?>"
                        <?php echo $anchor ? 'id="' . esc_attr($anchor) . '"' : ''; ?>
                    >
                        <div class="dcm-catalog-card__visual">
                            <span><?php echo esc_html($product['number']); ?></span>
                            <div class="dcm-catalog-card__image" aria-hidden="true"></div>
                            <?php if ($index === 0) : ?>
                                <a href="<?php echo esc_url(home_url('/dcm/single/')); ?>" aria-label="Ver ficha modelo de Compresores de aire">↗</a>
                            <?php else : ?>
                                <a href="mailto:dcm@compresoresdcm.com.ar?subject=<?php echo rawurlencode('Consulta por ' . $product['title']); ?>" aria-label="<?php echo esc_attr('Consultar por ' . $product['title']); ?>">↗</a>
                            <?php endif; ?>
                        </div>
                        <div class="dcm-catalog-card__body">
                            <p><?php echo esc_html($product['category']); ?></p>
                            <h3><?php echo esc_html($product['title']); ?></h3>
                            <div><span><?php echo esc_html($product['copy']); ?></span><strong><?php echo $index === 0 ? 'Ver ficha →' : 'Consultar →'; ?></strong></div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
            <p class="dcm-catalog-empty" data-dcm-empty hidden>No encontramos una línea con esos criterios. Probá con otra búsqueda o consultanos directamente.</p>

            <div class="dcm-catalog-note">
                <span>¿No encontrás el equipo que buscás?</span>
                <p>Contanos qué trabajo necesitás resolver. Podemos orientarte hacia una configuración existente o evaluar una solución especial.</p>
                <a class="dcm-button" href="mailto:dcm@compresoresdcm.com.ar?subject=Consulta%20por%20una%20solución%20especial">Consultar a DCM <span>↗</span></a>
            </div>
        </div>
    </section>
</main>
