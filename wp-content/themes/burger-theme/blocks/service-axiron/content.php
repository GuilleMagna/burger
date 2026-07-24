<?php
$eyebrow = 'Nuestros servicios';
$title = 'Soluciones precisas para industrias modernas';
$intro = 'Integramos ingeniería, producción y control para resolver desafíos industriales complejos.';
$items = [
    ['title' => 'Mecanizado de precisión', 'description' => 'Componentes confiables, fabricados con tolerancias exigentes.', 'link' => ['url' => '#', 'title' => 'Conocer más', 'target' => '']],
    ['title' => 'Fabricación a medida', 'description' => 'Soluciones adaptadas a cada proceso, escala y necesidad.', 'link' => ['url' => '#', 'title' => 'Conocer más', 'target' => '']],
    ['title' => 'Montaje industrial', 'description' => 'Ejecución coordinada, segura y orientada al rendimiento.', 'link' => ['url' => '#', 'title' => 'Conocer más', 'target' => '']],
];
?>
<section class="axiron-services-numbered <?php echo esc_attr(get_block_classes()); ?>">
    <div class="container">
        <header class="axiron-section-heading">
            <div>
                <span class="axiron-eyebrow"><?php echo esc_html($eyebrow); ?></span>
                <h2><?php echo esc_html($title); ?></h2>
            </div>
            <p><?php echo esc_html($intro); ?></p>
        </header>
        <div class="axiron-services-grid">
            <?php foreach ($items as $index => $item) :
                $link = $item['link'] ?? [];
                $url = $link['url'] ?? '#';
                $label = $link['title'] ?? 'Conocer más';
                $target = $link['target'] ?? '';
            ?>
                <article class="axiron-service-card">
                    <span class="axiron-service-number"><?php echo esc_html(sprintf('%02d', $index + 1)); ?></span>
                    <div>
                        <h3><?php echo esc_html($item['title'] ?? 'Servicio'); ?></h3>
                        <p><?php echo esc_html($item['description'] ?? ''); ?></p>
                    </div>
                    <a href="<?php echo esc_url($url); ?>"<?php echo $target ? ' target="' . esc_attr($target) . '" rel="noopener"' : ''; ?>>
                        <?php echo esc_html($label); ?><span aria-hidden="true">↗</span>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
