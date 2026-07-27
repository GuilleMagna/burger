<?php
$tp_catalog = [
    [
        'id' => 'ordene',
        'number' => '01',
        'eyebrow' => 'Industria láctea',
        'title' => 'Ordeñe y conducción de leche',
        'description' => 'Componentes atóxicos para conducción, pulsado y tareas auxiliares dentro del sistema de ordeñe.',
        'groups' => [
            ['title' => 'Paso de leche', 'items' => ['Tubos atóxicos cristal y negro', 'Medidas de 12×19 a 23×41 mm', 'Rollos de 10, 20 o 25 m']],
            ['title' => 'Pulsado', 'items' => ['Pulsado simple y alternado', 'Tubos cortos de pulsado', 'Versiones cristal y negro']],
            ['title' => 'Funciones auxiliares', 'items' => ['Tubos lava ubre', 'Tubo aceitero', 'Distintas medidas y presentaciones']],
        ],
    ],
    [
        'id' => 'alimentos',
        'number' => '02',
        'eyebrow' => 'Alimentos y bebidas',
        'title' => 'Trasvase alimentario',
        'description' => 'Tubos aspirantes, expelentes y de presión para mover leche y otros fluidos alimentarios.',
        'groups' => [
            ['title' => 'Aspiración', 'items' => ['Aspirante alimentario 32, 38 y 50', 'Tubo alimentario 38 cristal']],
            ['title' => 'Expulsión', 'items' => ['Expelente alimentario 38', 'Presión alimentaria remallada 20 bar', 'Medidas 32 y 38 mm']],
        ],
    ],
    [
        'id' => 'riego',
        'number' => '03',
        'eyebrow' => 'Hogar, ferretería e industria',
        'title' => 'Riego y uso general',
        'description' => 'Una familia ordenada por función: jardín, nivelación, baja presión, hidrolavado y aspiración general.',
        'groups' => [
            ['title' => 'Riego de jardín', 'items' => ['PVC traslúcido azul', '1/2”, 3/4” y 1”', 'Rollos de 15, 25 y 50 m']],
            ['title' => 'Línea ferretera', 'items' => ['Manguera de nivel 8×12 cristal', 'Baja presión 1” azul']],
            ['title' => 'Uso industrial general', 'items' => ['Aspirantes amarillas 32, 38 y 50', 'Hidrolavado 7 bar 3/4” y 1”']],
        ],
    ],
    [
        'id' => 'agro',
        'number' => '04',
        'eyebrow' => 'Equipamiento agropecuario',
        'title' => 'Accesorios para jaulas',
        'description' => 'Perfiles y componentes de PVC resistentes para instalaciones de producción animal.',
        'groups' => [
            ['title' => 'Componentes', 'items' => ['Caño cuadrado curvo', 'Caño cuadrado gris y blanco', 'Manguera negra y cuadrada', 'Comedero en tramos de 2,445 m']],
        ],
    ],
    [
        'id' => 'construccion',
        'number' => '05',
        'eyebrow' => 'Construcción',
        'title' => 'Cortinas de enrollar',
        'description' => 'Tablillas elaboradas en PVC rígido para cerramientos de uso residencial y comercial.',
        'groups' => [
            ['title' => 'Modelos', 'items' => ['Cortinas reforzadas', 'Cortinas super reforzadas']],
        ],
    ],
    [
        'id' => 'especiales',
        'number' => '06',
        'eyebrow' => 'Desarrollos a medida',
        'title' => 'Perfiles especiales en PVC',
        'description' => 'Desarrollos flexibles para requerimientos que no encajan en una línea estándar.',
        'groups' => [
            ['title' => 'Aplicaciones', 'items' => ['Calzado y mobiliario', 'Bandas flexibles soldadas', 'Protección de cilindros para gas', 'Perfilería según requerimiento']],
        ],
    ],
];
?>
<main class="tp-inner tp-catalog">
    <section class="tp-inner-hero tp-inner-hero--catalog">
        <div class="tp-shell tp-inner-hero__grid">
            <div><p class="tp-kicker tp-kicker--light"><span></span>Catálogo</p><h1>Encontrá la solución por su <em>aplicación.</em></h1></div>
            <p>Reorganizamos el portfolio para que sea más simple llegar desde una necesidad concreta hasta la familia técnica correcta.</p>
        </div>
    </section>
    <nav class="tp-catalog-nav" aria-label="Categorías de productos">
        <div class="tp-shell">
            <?php foreach ($tp_catalog as $category): ?><a href="#<?php echo esc_attr($category['id']); ?>"><span><?php echo esc_html($category['number']); ?></span><?php echo esc_html($category['title']); ?></a><?php endforeach; ?>
        </div>
    </nav>
    <section class="tp-catalog-intro">
        <div class="tp-shell tp-catalog-intro__grid">
            <p class="tp-kicker"><span></span>Nueva arquitectura</p>
            <h2>Seis familias.<br>Un criterio <em>más claro.</em></h2>
            <p>La categoría principal responde a dónde se usa el producto. Dentro de cada familia se conservan las denominaciones técnicas, medidas y presentaciones actuales.</p>
        </div>
    </section>
    <section class="tp-catalog-list">
        <div class="tp-shell">
            <?php foreach ($tp_catalog as $index => $category): ?>
                <article class="tp-catalog-family" id="<?php echo esc_attr($category['id']); ?>">
                    <div class="tp-catalog-family__visual tp-catalog-family__visual--<?php echo esc_attr($index + 1); ?>"><span><?php echo esc_html($category['number']); ?></span></div>
                    <div class="tp-catalog-family__content">
                        <p class="tp-kicker"><span></span><?php echo esc_html($category['eyebrow']); ?></p>
                        <h2><?php echo esc_html($category['title']); ?></h2>
                        <p class="tp-catalog-family__description"><?php echo esc_html($category['description']); ?></p>
                        <div class="tp-catalog-groups">
                            <?php foreach ($category['groups'] as $group): ?>
                                <div><h3><?php echo esc_html($group['title']); ?></h3><ul><?php foreach ($group['items'] as $item): ?><li><?php echo esc_html($item); ?></li><?php endforeach; ?></ul></div>
                            <?php endforeach; ?>
                        </div>
                        <?php if ('alimentos' === $category['id']): ?>
                            <a class="tp-line-link" href="<?php echo esc_url(home_url('/troyplast/productos/single/')); ?>">Ver ficha de producto <b>→</b></a>
                        <?php else: ?>
                            <a class="tp-line-link" href="<?php echo esc_url(home_url('/troyplast/contacto/')); ?>">Consultar esta familia <b>↗</b></a>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="tp-catalog-help">
        <div class="tp-shell"><div><p class="tp-kicker tp-kicker--light"><span></span>Asesoramiento</p><h2>¿No sabés qué línea corresponde?</h2></div><p>Indicá fluido, presión, medida, temperatura y tipo de uso. El equipo de Troyplast puede orientarte hacia una línea existente o evaluar un desarrollo especial.</p><a class="tp-button tp-button--light" href="<?php echo esc_url(home_url('/troyplast/contacto/')); ?>">Contarnos la necesidad <b>→</b></a></div>
    </section>
</main>
