<?php
$eyebrow = 'Impacto global';
$title = 'Creamos valor medible en cada proyecto';
$description = 'Capacidad técnica, procesos consistentes y una mirada de largo plazo.';
$image_url = NAKAMA_THEME_URL . '/assets/images/axiron/hero-1.jpg';
$metrics = [
    ['value' => '120K+', 'label' => 'unidades producidas'],
    ['value' => '40+', 'label' => 'mercados alcanzados'],
    ['value' => '98%', 'label' => 'entregas a término'],
    ['value' => '15+', 'label' => 'años de experiencia'],
];
?>
<section class="axiron-impact <?php echo esc_attr(get_block_classes()); ?>">
    <div class="container">
        <div class="axiron-impact-panel"<?php echo $image_url ? ' style="--axiron-impact-image:url(' . esc_url($image_url) . ')"' : ''; ?>>
            <div class="axiron-impact-copy">
                <span class="axiron-eyebrow"><?php echo esc_html($eyebrow); ?></span>
                <h2><?php echo esc_html($title); ?></h2>
                <p><?php echo esc_html($description); ?></p>
            </div>
            <div class="axiron-metrics">
                <?php foreach ($metrics as $metric) : ?>
                    <div class="axiron-metric">
                        <strong><?php echo esc_html($metric['value'] ?? '0'); ?></strong>
                        <span><?php echo esc_html($metric['label'] ?? ''); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
