<?php
$eyebrow = 'Cómo trabajamos';
$title = 'Un proceso claro, de la idea a la entrega';
$steps = [
    ['title' => 'Análisis y diseño', 'description' => 'Comprendemos requisitos, contexto y objetivos técnicos.'],
    ['title' => 'Selección y planificación', 'description' => 'Definimos materiales, recursos, controles y plazos.'],
    ['title' => 'Producción y validación', 'description' => 'Fabricamos, verificamos y documentamos cada resultado.'],
];
?>
<section class="axiron-process <?php echo esc_attr(get_block_classes()); ?>">
    <div class="container">
        <header>
            <span class="axiron-eyebrow"><?php echo esc_html($eyebrow); ?></span>
            <h2><?php echo esc_html($title); ?></h2>
        </header>
        <ol class="axiron-process-list">
            <?php foreach ($steps as $index => $step) : ?>
                <li>
                    <span class="axiron-step-number"><?php echo esc_html(sprintf('%02d', $index + 1)); ?></span>
                    <div>
                        <h3><?php echo esc_html($step['title'] ?? 'Etapa'); ?></h3>
                        <p><?php echo esc_html($step['description'] ?? ''); ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>
