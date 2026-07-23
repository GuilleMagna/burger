<?php
$subtitulo  = get_field( 'subtitulo' ) ?: 'Nuestros productos';
$titulo     = get_field( 'titulo' ) ?: 'Tailor Business Solutions for Corporates.';
$boton      = get_field( 'boton' ) ?? [];
$servicios  = get_field( 'servicios' ) ?? [];

?>

<section class="h5-service-section h10-service section-gap">

	<div class="container">

		<div class="row">

			<div class="col-12">

				<div class="sec-heading-wrap style-8">

					<div class="heading-wrap-content">

						<div class="sec-heading style-3">

							<?php if ( $subtitulo ) : ?>
								<span class="sub-title wow fadeInUp" data-wow-delay=".3s">
									<i class="tji-box"></i> <?php echo esc_html( $subtitulo ); ?>
								</span>
							<?php endif; ?>

							<?php if ( $titulo ) : ?>
								<h2 class="sec-title text-anim"><?php echo esc_html( $titulo ); ?></h2>
							<?php endif; ?>

						</div>

						<?php if ( ! empty( $boton['url'] ) && ! empty( $boton['title'] ) ): ?>

							<div class="btn-area wow fadeInUp" data-wow-delay=".8s">
								<a class="tj-primary-btn" href="<?php echo esc_url( $boton['url'] ); ?>" target="<?php echo esc_attr( $boton['target'] ?: '_self' ); ?>">
									<span class="btn-text"><span><?php echo esc_html( $boton['title'] ); ?></span></span>
									<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
								</a>
                            </div>

						<?php endif ?>

					</div>

				</div>

			</div>

		</div>

		<?php if ( $servicios ) : ?>

			<div class="row">

				<div class="col-12">

					<div class="service-wrapper h10-service-wrapper wow fadeInUp" data-wow-delay=".4s">

						<div class="swiper h10-service-slider">

							<div class="swiper-wrapper">

								<?php foreach ( $servicios as $indice => $servicio ) :
									$imagen      = $servicio['imagen'] ?? null;
									$titulo_item = $servicio['titulo'] ?? '';
									$descripcion = $servicio['descripcion'] ?? '';
									$enlace      = $servicio['enlace'] ?? null;
									$delay       = min( .1 + ( $indice * .15 ), .7 );
									?>
									<div class="swiper-slide">
										<div class="service-item style-4 wow fadeInUp" data-wow-delay="<?php echo esc_attr( number_format( $delay, 2, '.', '' ) ); ?>s">

											<h6 class="h10-service-sln">
                                                <?php echo esc_html( sprintf( '%02d.', $indice + 1 ) ); ?>
                                            </h6>

											<?php if ( $imagen ) : ?>

												<div class="service-image">
													<?php
													if ( is_array( $imagen ) && ! empty( $imagen['ID'] ) ) {
														echo wp_get_attachment_image( $imagen['ID'], 'medium', false, array( 'loading' => 'lazy' ) );
													} elseif ( is_numeric( $imagen ) ) {
														echo wp_get_attachment_image( (int) $imagen, 'medium', false, array( 'loading' => 'lazy' ) );
													}
													?>
												</div>

											<?php endif; ?>

											<div class="service-content">
												<?php if ( $titulo_item ) : ?>
													<h4 class="title">
														<?php if ( ! empty( $enlace['url'] ) ) : ?>
															<a href="<?php echo esc_url( $enlace['url'] ); ?>" target="<?php echo esc_attr( $enlace['target'] ?: '_self' ); ?>"><?php echo esc_html( $titulo_item ); ?></a>
														<?php else : ?>
															<?php echo esc_html( $titulo_item ); ?>
														<?php endif; ?>
													</h4>
												<?php endif; ?>

												<?php if ( $descripcion ) : ?>
													<p class="desc"><?php echo esc_html( $descripcion ); ?></p>
												<?php endif; ?>

												<?php if ( ! empty( $enlace['url'] ) && ! empty( $enlace['title'] ) ) : ?>
													<a class="text-btn" href="<?php echo esc_url( $enlace['url'] ); ?>" target="<?php echo esc_attr( $enlace['target'] ?: '_self' ); ?>">
														<span class="btn-text"><span><?php echo esc_html( $enlace['title'] ); ?></span></span>
														<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
													</a>
												<?php endif; ?>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</div>

							<div class="swiper-pagination-area"></div>

						</div>

					</div>

				</div>

			</div>

		<?php endif ?>

	</div>

</section>
