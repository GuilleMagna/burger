<?php
$rodeg_news = [
    ['image' => 'pasteurizadores.jpg', 'meta' => 'Guía técnica · 6 min', 'title' => 'Cómo preservar la calidad de la leche desde el primer minuto'],
    ['image' => 'accesorios.jpg', 'meta' => 'Mantenimiento · 4 min', 'title' => 'Las señales que anticipan una parada del equipo de ordeño'],
    ['image' => 'alimentacion.jpg', 'meta' => 'Eficiencia · 5 min', 'title' => 'Datos simples para mejorar la rutina de cada ordeño'],
];
?>
<section class="news section" id="actualidad">
    <div class="shell">
        <div class="section-head compact"><div><p class="eyebrow"><span></span>Actualidad</p><h2>Conocimiento que<br>se comparte.</h2></div><a class="line-link" href="#">Ver todas las notas <span>→</span></a></div>
        <div class="news-grid"><?php foreach ($rodeg_news as $item) : ?><article><img src="<?php echo esc_url(NAKAMA_THEME_URL . '/assets/images/rodeg/' . $item['image']); ?>" alt="" loading="lazy"><small><?php echo esc_html($item['meta']); ?></small><h3><?php echo esc_html($item['title']); ?></h3><a href="#">Leer nota ↗</a></article><?php endforeach; ?></div>
    </div>
</section>
