<?php
$dcm_spares = [
    ['number' => '01', 'category' => 'Línea de leche', 'title' => 'Filtros de leche', 'copy' => 'Entradas y salidas de 25, 32 o 38 mm, resorte interior con punteras y distintas configuraciones.', 'image' => 'spare-filtro.jpg'],
    ['number' => '02', 'category' => 'Ordeñe', 'title' => 'Colectores', 'copy' => 'Colectores sanitarios de distintas capacidades, preparados para pulsado alterno o simultáneo.', 'image' => 'spare-colector.jpg'],
    ['number' => '03', 'category' => 'Ordeñe', 'title' => 'Casquillos', 'copy' => 'Casquillos modelo Irlanda con terminaciones pulidas, espejo o arenadas.', 'image' => 'spare-colector.jpg'],
    ['number' => '04', 'category' => 'Vacío', 'title' => 'Bombas y paletas', 'copy' => 'Bombas, rotores, paletas y componentes para sostener el vacío y el trabajo continuo.', 'image' => 'spare-bomba.jpg'],
    ['number' => '05', 'category' => 'Aire comprimido', 'title' => 'Cabezales', 'copy' => 'Cabezales y piezas para diferentes potencias, tanques y necesidades de producción de aire.', 'image' => 'spare-cabezal.jpg'],
    ['number' => '06', 'category' => 'Enfriamiento', 'title' => 'Placas y conexiones', 'copy' => 'Separadores, conexiones y componentes para placas enfriadoras de leche.', 'image' => 'line-enfriado.jpg'],
];
?>
<main class="dcm-spares-page">
    <section class="dcm-spares-hero">
        <div class="dcm-spares-hero__media" aria-hidden="true"></div>
        <div class="dcm-shell dcm-spares-hero__inner">
            <div><p class="dcm-eyebrow dcm-eyebrow--light"><span></span>Repuestos DCM</p><h1>Componentes para<br>seguir <em>produciendo.</em></h1></div>
            <div><p>Repuestos para ordeñadoras, bombas de vacío, compresores y sistemas de enfriamiento, con asesoramiento directo para identificar cada pieza.</p><a href="#catalogo-repuestos">Explorar repuestos <span>↓</span></a></div>
        </div>
        <div class="dcm-catalog-hero__breadcrumb"><a href="<?php echo esc_url(home_url('/dcm/')); ?>">DCM</a><span>/</span>Repuestos</div>
    </section>
    <section class="dcm-spares-archive" id="catalogo-repuestos">
        <div class="dcm-shell">
            <div class="dcm-heading"><div><p class="dcm-eyebrow"><span></span>Principales familias</p><h2>El repuesto correcto,<br>cuando lo <em>necesitás.</em></h2></div><p>La información de cada equipo ayuda a encontrar la pieza adecuada. Si tenés dudas, envianos una foto, medida o modelo y te orientamos.</p></div>
            <div class="dcm-spares-catalog">
                <?php foreach ($dcm_spares as $spare) : ?>
                    <article><div class="dcm-spares-catalog__media"><img src="<?php echo esc_url(NAKAMA_THEME_URL . '/assets/images/dcm/' . $spare['image']); ?>" alt="<?php echo esc_attr($spare['title']); ?>" loading="lazy"><span><?php echo esc_html($spare['number']); ?></span></div><div class="dcm-spares-catalog__body"><p><?php echo esc_html($spare['category']); ?></p><h2><?php echo esc_html($spare['title']); ?></h2><span><?php echo esc_html($spare['copy']); ?></span><a href="mailto:dcm@compresoresdcm.com.ar?subject=<?php echo rawurlencode('Consulta por repuesto: ' . $spare['title']); ?>">Consultar <b>↗</b></a></div></article>
                <?php endforeach; ?>
            </div>
            <aside class="dcm-spares-guide"><div><p class="dcm-eyebrow dcm-eyebrow--light"><span></span>Para agilizar la consulta</p><h2>Contanos qué equipo tenés.</h2></div><ol><li><b>01</b><span>Modelo o potencia del equipo</span></li><li><b>02</b><span>Foto general y detalle de la pieza</span></li><li><b>03</b><span>Medidas o código, si están disponibles</span></li></ol><a class="dcm-button dcm-button--light" href="mailto:dcm@compresoresdcm.com.ar?subject=Identificación%20de%20repuesto">Enviar consulta <span>↗</span></a></aside>
        </div>
    </section>
</main>
