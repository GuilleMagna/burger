<?php $team_image = NAKAMA_THEME_URL . '/assets/images/axiron/hero-1.jpg'; ?>
<section class="axiron-section axiron-team">
    <div class="container">
        <header class="axiron-heading-centered"><p class="axiron-kicker"><span class="axiron-kicker__mark"></span>Nuestros expertos</p><h2 class="axiron-title">Liderazgo y conocimiento técnico</h2></header>
        <div class="axiron-card-grid axiron-card-grid--three">
            <?php foreach ([['Laura Méndez','Dirección industrial'],['Martín Costa','Ingeniería'],['Sofía Herrera','Calidad']] as $member): ?>
            <article class="axiron-team-card"><div><img src="<?php echo esc_url($team_image); ?>" alt=""></div><h3><?php echo esc_html($member[0]); ?></h3><p><?php echo esc_html($member[1]); ?></p></article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
