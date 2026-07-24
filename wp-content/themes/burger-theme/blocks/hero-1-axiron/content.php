<?php
$image_url = NAKAMA_THEME_URL . '/assets/images/axiron/hero-1.jpg';
?>
<section class="axiron-hero axiron-hero--one">
    <div class="axiron-hero__media" aria-hidden="true">
        <img src="<?php echo esc_url($image_url); ?>" alt="">
    </div>
    <div class="axiron-hero__overlay"></div>

    <div class="container axiron-hero__container">
        <div class="axiron-hero__content">
            <p class="axiron-kicker">
                <span class="axiron-kicker__mark"></span>
                Impulsados por la calidad y la innovación
            </p>

            <h1 class="axiron-hero__title">
                Fortaleza industrial con experiencia comprobada
            </h1>

            <div class="axiron-hero__footer">
                <p class="axiron-hero__description">
                    Diseñamos y fabricamos soluciones industriales confiables para
                    operaciones que exigen precisión, continuidad y rendimiento.
                </p>

                <a class="axiron-button axiron-button--accent" href="#servicios">
                    <span>Explorar soluciones</span>
                    <span class="axiron-button__icon" aria-hidden="true">↗</span>
                </a>
            </div>
        </div>

        <aside class="axiron-hero__facts" aria-label="Características destacadas">
            <article class="axiron-hero-fact">
                <span class="axiron-hero-fact__number">01</span>
                <h2>Ingeniería de precisión</h2>
                <p>Procesos controlados para resultados consistentes.</p>
            </article>

            <article class="axiron-hero-fact">
                <span class="axiron-hero-fact__number">02</span>
                <h2>Soluciones personalizadas</h2>
                <p>Capacidad técnica adaptada a cada desafío productivo.</p>
            </article>
        </aside>
    </div>

    <div class="axiron-hero__scroll" aria-hidden="true">
        <span></span>
        Desplazarse
    </div>
</section>
