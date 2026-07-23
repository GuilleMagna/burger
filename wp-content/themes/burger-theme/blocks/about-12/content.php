<?php
/**
 * Block Name: About 12
 *
 * @var array $block Datos del bloque ACF.
 */

$block_id = ! empty( $block['anchor'] )
	? sanitize_title( $block['anchor'] )
	: 'about-11-' . sanitize_html_class( $block['id'] ?? uniqid() );

$classes = 'tj-about-section about-11 section-gap';

if ( ! empty( $block['className'] ) ) {
	$classes .= ' ' . sanitize_html_class( $block['className'] );
}

if ( ! empty( $block['align'] ) ) {
	$classes .= ' align' . sanitize_html_class( $block['align'] );
}

$imagen       = get_field( 'imagen' );
$imagen_url   = is_array( $imagen ) ? ( $imagen['url'] ?? '' ) : $imagen;
$imagen_alt   = is_array( $imagen ) ? ( $imagen['alt'] ?? '' ) : '';
$sobre_titulo = get_field( 'sobre_titulo' ) ?? 'SOMOS DCM';
$titulo       = get_field( 'titulo' ) ?? 'Fabricamos, reparamos y acompañamos.';
$descripcion  = get_field( 'descripcion' ) ?? 'Desde hace más de 20 años diseñamos y fabricamos equipos robustos, brindamos servicio técnico especializado y soluciones neumáticas adaptadas a cada industria.';
$items        = get_field( 'items' ) ?? [];
$boton_texto  = get_field( 'boton_texto' ) ?? 'Conocé más sobre DCM';
$boton_link   = get_field( 'boton_link' ) ?? [];

$boton_url    = is_array( $boton_link ) ? ( $boton_link['url'] ?? '' ) : $boton_link;
$boton_target = is_array( $boton_link ) ? ( $boton_link['target'] ?? '_self' ) : '_self';

if ( empty( $items ) ) {
	$items = [
		[ 'icono' => 'tji-box', 'titulo' => 'Fabricación propia' ],
		[ 'icono' => 'tji-shield-check', 'titulo' => 'Calidad certificada' ],
		[ 'icono' => 'tji-settings', 'titulo' => 'Repuestos originales' ],
		[ 'icono' => 'tji-support', 'titulo' => 'Acompañamiento postventa' ],
	];
}
?>

<section id="about-dcm" class="<?php echo esc_attr( $block_id ); ?> <?php echo esc_attr( $classes ); ?>">

	<div class="container">

		<div class="row align-items-stretch g-4 g-xl-5">

			<div class="col-12 col-lg-6 wow fadeInLeft" data-wow-delay=".2s">

				<div class="about-12-image h-100">
					<?php if ( $imagen_url ) : ?>
						<img src="<?php echo esc_url( $imagen_url ); ?>" alt="<?php echo esc_attr( $imagen_alt ); ?>">
					<?php else : ?>
						<div class="about-11-image-placeholder" aria-hidden="true"></div>
					<?php endif; ?>
				</div>

			</div>

			<div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay=".3s">

				<div class="about-12-content h-100">

					<?php if ( $sobre_titulo ) : ?>
						<span class="about-12-subtitle"><?php echo esc_html( $sobre_titulo ); ?></span>
					<?php endif; ?>

					<?php if ( $titulo ) : ?>
						<h2 class="about-12-title"><?php echo wp_kses_post( $titulo ); ?></h2>
					<?php endif; ?>

					<?php if ( $descripcion ) : ?>
						<div class="about-12-description"><?php echo wp_kses_post( wpautop( $descripcion ) ); ?></div>
					<?php endif; ?>

					<?php if ( $items ) : ?>

						<div class="about-12-features">
							<?php foreach ( $items as $item ) :
								$icono      = $item['icono'] ?? 'tji-box';
								$item_titulo = $item['titulo'] ?? '';
								?>
								<div class="about-12-feature">
									<?php if ( $icono ) : ?>
										<div class="about-12-feature-icon" aria-hidden="true"><i class="<?php echo esc_attr( $icono ); ?>"></i></div>
									<?php endif; ?>
									<?php if ( $item_titulo ) : ?>
										<h3><?php echo esc_html( $item_titulo ); ?></h3>
									<?php endif; ?>
								</div>
							<?php endforeach; ?>
						</div>
                        
					<?php endif; ?>

					<?php if ( $boton_texto && $boton_url ) : ?>

                        <div class="btn-area wow fadeInUp" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                            <a class="tj-primary-btn" href="<?php echo esc_url( $boton_url ); ?>">
                                <span class="btn-text"><span><?php echo esc_html( $boton_texto ); ?></span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>

					<?php endif; ?>

				</div>

			</div>

		</div>

	</div>

</section>
