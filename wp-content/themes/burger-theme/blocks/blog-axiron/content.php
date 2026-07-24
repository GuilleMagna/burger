<?php $blog_image = NAKAMA_THEME_URL . '/assets/images/axiron/hero-1.jpg'; ?>
<section class="axiron-section axiron-blog">
    <div class="container">
        <header class="axiron-heading-split"><div><p class="axiron-kicker"><span class="axiron-kicker__mark"></span>Actualidad</p><h2 class="axiron-title">Ideas para una industria más eficiente</h2></div><a class="axiron-text-link" href="#">Ver artículos <span>↗</span></a></header>
        <div class="axiron-card-grid axiron-card-grid--three">
            <?php foreach (['Precisión aplicada a la manufactura moderna','Prácticas sostenibles para crecer','Cómo fortalecer la cadena de suministro'] as $post_title): ?>
            <article class="axiron-blog-card"><img src="<?php echo esc_url($blog_image); ?>" alt=""><span>Industria · 6 min</span><h3><?php echo esc_html($post_title); ?></h3><a href="#">Leer artículo ↗</a></article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
