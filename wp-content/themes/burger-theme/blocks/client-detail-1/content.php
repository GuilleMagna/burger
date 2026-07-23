<?php
/**
 * Block Name: Client Detail 1
 *
 * @var array $block Datos del bloque ACF.
 */

$block_id = ! empty( $block['anchor'] )
	? sanitize_title( $block['anchor'] )
	: 'client-detail-1-' . sanitize_html_class( $block['id'] ?? uniqid() );

$classes = 'tj-client-section client-detail-1 section-gap';

if ( ! empty( $block['className'] ) ) {
	$classes .= ' ' . $block['className'];
}

$sobre_titulo = get_field( 'sobre_titulo' ) ?: 'CLIENTES QUE CONFÍAN';
$titulo       = get_field( 'titulo' ) ?: 'Impulsamos industrias en todo el país.';
$testimonios  = get_field( 'testimonios' );

if ( empty( $testimonios ) ) {
	$testimonios = [
		[
			'testimonio' => 'Los equipos DCM nos dieron la confiabilidad que necesitábamos para aumentar nuestra producción sin interrupciones.',
			'empresa'     => 'Agropecuaria La Victoria S.A.',
			'sector'      => 'Sector agropecuario',
		],
		[
			'testimonio' => 'El servicio técnico es excelente. Responden siempre y tienen los repuestos que necesitamos.',
			'empresa'     => 'Metalúrgica del Sur',
			'sector'      => 'Industria metalúrgica',
		],
		[
			'testimonio' => 'Trabajamos con DCM hace más de 10 años. Calidad de equipos y atención impecable.',
			'empresa'     => 'Lácteos El Trébol',
			'sector'      => 'Industria láctea',
		],
	];
}
?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $classes ); ?>">

	<div class="container">

		<div class="client-detail-1-heading wow fadeInUp" data-wow-delay=".2s">
            
			<?php if ( $sobre_titulo ) : ?>
				<span class="client-detail-1-subtitle"><?php echo esc_html( $sobre_titulo ); ?></span>
			<?php endif; ?>

			<?php if ( $titulo ) : ?>
				<h2 class="client-detail-1-title"><?php echo wp_kses_post( $titulo ); ?></h2>
			<?php endif; ?>
		</div>

		<?php if ( $testimonios ) : ?>

			<div class="client-detail-1-carousel owl-carousel" data-wow-delay=".3s">

				<?php foreach ( $testimonios as $index => $item ):
					$testimonio = $item['testimonio'] ?? '';
					$empresa     = $item['empresa'] ?? '';
					$sector      = $item['sector'] ?? '';
					$logo        = $item['logo'] ?? [];
					$logo_url    = is_array( $logo ) ? ( $logo['url'] ?? '' ) : $logo;
					$logo_alt    = is_array( $logo ) ? ( $logo['alt'] ?? '' ) : '';
					$enlace      = $item['enlace'] ?? [];
					$enlace_url  = is_array( $enlace ) ? ( $enlace['url'] ?? '' ) : $enlace;
					$target      = is_array( $enlace ) ? ( $enlace['target'] ?? '_self' ) : '_self';
					?>

					<article class="client-detail-1-card wow fadeInUp" data-wow-delay="<?= esc_attr(0.7 + ($index * 0.3)); ?>s">

						<?php if ( $testimonio ) : ?>
							<div class="client-detail-1-quote"><?php echo wp_kses_post( wpautop( $testimonio ) ); ?></div>
						<?php endif; ?>

						<div class="client-detail-1-footer">

							<div class="client-detail-1-client">
								<?php if ( $empresa ) : ?>
									<h3><?php echo esc_html( $empresa ); ?></h3>
								<?php endif; ?>

								<?php if ( $sector ) : ?>
									<span><?php echo esc_html( $sector ); ?></span>
								<?php endif; ?>
							</div>

							<?php if ( $logo_url ) : ?>
								<?php if ( $enlace_url ) : ?>
									<a class="client-detail-1-logo" href="<?php echo esc_url( $enlace_url ); ?>" target="<?php echo esc_attr( $target ); ?>"<?php echo '_blank' === $target ? ' rel="noopener noreferrer"' : ''; ?>>
										<img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( $logo_alt ?: $empresa ); ?>">
									</a>
								<?php else : ?>
									<div class="client-detail-1-logo">
										<img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( $logo_alt ?: $empresa ); ?>">
									</div>
								<?php endif; ?>
							<?php endif; ?>

						</div>

					</article>

				<?php endforeach; ?>

			</div>

		<?php endif; ?>

	</div>
    
</section>
