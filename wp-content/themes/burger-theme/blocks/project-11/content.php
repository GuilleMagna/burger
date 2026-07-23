<?php
$content_fields = array(
    'sobre_titulo' => 'CATEGORÍAS',
    'titulo' => 'Soluciones para cada necesidad industrial.',
    'items' => array(),
);

$fields = get_block_content_fields( $content_fields );
extract( $fields, EXTR_SKIP );

/**
 * Block Name: Project 11
 *
 * @var array $block Datos del bloque ACF.
 */

$block_id = ! empty( $block['anchor'] )
	? sanitize_title( $block['anchor'] )
	: 'project-11-' . sanitize_html_class( $block['id'] ?? uniqid() );

$classes = 'tj-project-section project-11 section-gap';

if ( ! empty( $block['className'] ) ) {
	$classes .= ' ' . $block['className'];
}
if ( empty( $items ) ) {
	$items = [
		[
			'titulo'      => 'Compresores.',
			'descripcion' => 'Gran variedad de compresores industriales de alta eficiencia.',
			'enlace'      => [ 'url' => '#', 'target' => '_self' ],
		],
		[
			'titulo'      => 'Ordeñadoras.',
			'descripcion' => 'Equipos robustos y confiables para el sector agropecuario.',
			'enlace'      => [ 'url' => '#', 'target' => '_self' ],
		],
		[
			'titulo'      => 'Plantas de aire.',
			'descripcion' => 'Sistemas completos de generación y tratamiento de aire comprimido.',
			'enlace'      => [ 'url' => '#', 'target' => '_self' ],
		],
		[
			'titulo'      => 'Herramientas neumáticas.',
			'descripcion' => 'Potencia y durabilidad para aplicaciones exigentes.',
			'enlace'      => [ 'url' => '#', 'target' => '_self' ],
		],
	];
}
?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $classes ); ?>">

	<div class="container">

		<div class="project-11-heading wow fadeInUp" data-wow-delay=".2s">

			<?php if ( $sobre_titulo ) : ?>
				<span class="project-11-subtitle">
                    <?php echo esc_html( $sobre_titulo ); ?>
                </span>
			<?php endif; ?>

			<?php if ( $titulo ) : ?>
				<h2 class="project-11-title">
                    <?php echo wp_kses_post( $titulo ); ?>
                </h2>
			<?php endif; ?>

		</div>

		<?php if ( $items ) : ?>

			<div class="project-11-carousel-animation wow fadeInUp" data-wow-delay=".3s">

                <div class="project-11-carousel owl-carousel">

                    <?php foreach ( $items as $index => $item ) :
                        $imagen       = $item['imagen'] ?? [];
                        $imagen_url   = is_array( $imagen ) ? ( $imagen['url'] ?? '' ) : $imagen;
                        $imagen_alt   = is_array( $imagen ) ? ( $imagen['alt'] ?? '' ) : '';
                        $item_titulo  = $item['titulo'] ?? '';
                        $descripcion  = $item['descripcion'] ?? '';
                        $enlace       = $item['enlace'] ?? [];
                        $enlace_url   = is_array( $enlace ) ? ( $enlace['url'] ?? '' ) : $enlace;
                        $enlace_label = is_array( $enlace ) ? ( $enlace['title'] ?? '' ) : '';
                        $target       = is_array( $enlace ) ? ( $enlace['target'] ?? '_self' ) : '_self';
                        ?>

                        <article class="project-11-card wow fadeInUp" data-wow-delay="<?= esc_attr(0.7 + ($index * 0.3)); ?>s">

                            <?php if ( $imagen_url ) : ?>
                                <div class="project-11-card-image">
                                    <img src="<?php echo esc_url( $imagen_url ); ?>" alt="<?php echo esc_attr( $imagen_alt ?: $item_titulo ); ?>">
                                </div>
                            <?php endif; ?>

                            <div class="project-11-card-content">

                                <?php if ( $item_titulo ) : ?>
                                    <h3><?php echo esc_html( $item_titulo ); ?></h3>
                                <?php endif; ?>

                                <?php if ( $descripcion ) : ?>
                                    <div class="project-11-card-description"><?php echo wp_kses_post( wpautop( $descripcion ) ); ?></div>
                                <?php endif; ?>

                                <?php if ( $enlace_url ) : ?>
                                    <a class="project-11-card-link" href="<?php echo esc_url( $enlace_url ); ?>" target="<?php echo esc_attr( $target ); ?>"<?php echo '_blank' === $target ? ' rel="noopener noreferrer"' : ''; ?> aria-label="<?php echo esc_attr( $enlace_label ?: $item_titulo ); ?>">
                                        <?php echo esc_attr($enlace_label); ?> <i class="tji-arrow-right-long" aria-hidden="true"></i>
                                    </a>
                                <?php endif; ?>

                            </div>

                        </article>

                    <?php endforeach; ?>

                </div>  

			</div>

		<?php endif; ?>

	</div>

</section>
