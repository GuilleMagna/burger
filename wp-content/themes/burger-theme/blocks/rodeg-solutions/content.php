<?php
$rodeg_lines = [
    ['class' => 'large', 'image' => 'ordeno.jpg', 'number' => '01', 'eyebrow' => 'Ordeño eficiente', 'title' => 'Equipos de ordeño', 'copy' => 'Sistemas confiables, escalables y preparados para el ritmo real del tambo.', 'cta' => 'Conocer soluciones'],
    ['class' => '', 'image' => 'enfriado.jpg', 'number' => '02', 'eyebrow' => 'Calidad de leche', 'title' => 'Enfriamiento', 'copy' => '', 'cta' => 'Ver equipos'],
    ['class' => '', 'image' => 'bretes.jpg', 'number' => '03', 'eyebrow' => 'Flujo y bienestar', 'title' => 'Bretes y corrales', 'copy' => '', 'cta' => 'Ver soluciones'],
    ['class' => 'wide', 'image' => 'alimentacion.jpg', 'number' => '04', 'eyebrow' => 'Precisión productiva', 'title' => 'Alimentación durante el ordeño', 'copy' => '', 'cta' => 'Explorar línea'],
    ['class' => 'transport', 'image' => 'transporte.jpg', 'number' => '05', 'eyebrow' => 'Manejo de leche', 'title' => 'Transporte de leche', 'copy' => '', 'cta' => 'Ver equipos'],
];
?>
<section class="solutions" id="productos">
    <div class="shell">
        <div class="section-head"><div><p class="eyebrow"><span></span>Por necesidad productiva</p><h2>Encontrá la solución<br>para tu <em>tambo.</em></h2></div><p>Primero la necesidad del productor; después, el equipo indicado para resolverla.</p></div>
        <div class="solution-grid">
            <?php foreach ($rodeg_lines as $line) : ?>
                <a class="solution-card <?php echo esc_attr($line['class']); ?>" href="#">
                    <img src="<?php echo esc_url(NAKAMA_THEME_URL . '/assets/images/rodeg/' . $line['image']); ?>" alt="<?php echo esc_attr($line['title']); ?>" loading="lazy">
                    <span class="number"><?php echo esc_html($line['number']); ?></span>
                    <div><small><?php echo esc_html($line['eyebrow']); ?></small><h3><?php echo esc_html($line['title']); ?></h3><?php if ($line['copy']) : ?><p><?php echo esc_html($line['copy']); ?></p><?php endif; ?><b><?php echo esc_html($line['cta']); ?> ↗</b></div>
                </a>
            <?php endforeach; ?>
        </div>
        <a class="all-link" href="#">Ver todas las categorías <span>→</span></a>
    </div>
</section>
