<?php
/**
 * Title: Contacto
 * Slug: ingein/contacto
 * Categories: ingein
 */
$c   = ingein_contacto();
$map = 'https://www.google.com/maps?q=' . rawurlencode( $c['mapa_query'] );
?>
<!-- wp:group {"tagName":"section","anchor":"contacto","align":"full","className":"ingein-seccion ingein-contacto","layout":{"type":"constrained"}} -->
<section id="contacto" class="wp-block-group alignfull ingein-seccion ingein-contacto">
	<!-- wp:columns {"align":"wide","className":"ingein-contacto__columnas"} -->
	<div class="wp-block-columns alignwide ingein-contacto__columnas">
		<!-- wp:column {"width":"48%"} -->
		<div class="wp-block-column" style="flex-basis:48%">
			<!-- wp:paragraph {"className":"ingein-eyebrow"} -->
			<p class="ingein-eyebrow"><span class="ingein-num">05</span> Contacto</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading -->
			<h2 class="wp-block-heading">Hablemos de tu próximo proyecto.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"gris"} -->
			<p class="has-gris-color has-text-color">Escribinos por WhatsApp, llamanos o mandanos un mail. Te respondemos a la brevedad.</p>
			<!-- /wp:paragraph -->

			<!-- wp:html -->
			<ul class="ingein-canales">
				<li>
					<a class="ingein-canal ingein-canal--whatsapp" href="<?php echo esc_url( ingein_whatsapp_url() ); ?>" target="_blank" rel="noopener">
						<span class="ingein-canal__icono" aria-hidden="true"><svg viewBox="0 0 32 32"><path fill="currentColor" d="M16.04 3C9.1 3 3.46 8.63 3.46 15.57c0 2.22.58 4.39 1.69 6.3L3.36 28.4l6.7-1.76a12.53 12.53 0 0 0 5.98 1.52h.01c6.93 0 12.58-5.64 12.58-12.58C28.63 8.63 22.98 3 16.04 3Zm5.74 15.2c-.31-.16-1.86-.92-2.15-1.02-.29-.11-.5-.16-.71.16-.21.31-.81 1.02-1 1.23-.18.21-.37.24-.68.08-.31-.16-1.33-.49-2.53-1.56-.93-.83-1.56-1.86-1.75-2.18-.18-.31-.02-.48.14-.64.14-.14.31-.37.47-.55.16-.18.21-.31.31-.52.1-.21.05-.39-.03-.55-.08-.16-.71-1.71-.97-2.34-.26-.61-.52-.53-.71-.54h-.6c-.21 0-.55.08-.84.39-.29.31-1.1 1.07-1.1 2.62 0 1.55 1.13 3.04 1.28 3.25.16.21 2.22 3.39 5.38 4.75.75.32 1.34.52 1.8.66.75.24 1.44.21 1.98.13.6-.09 1.86-.76 2.12-1.5.26-.73.26-1.36.18-1.5-.08-.13-.29-.21-.6-.37Z"/></svg></span>
						<span class="ingein-canal__texto"><small>WhatsApp</small><?php echo esc_html( $c['telefono_txt'] ); ?></span>
					</a>
				</li>
				<li>
					<a class="ingein-canal" href="tel:<?php echo esc_attr( $c['telefono'] ); ?>">
						<span class="ingein-canal__icono" aria-hidden="true"><svg viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2Z"/></svg></span>
						<span class="ingein-canal__texto"><small>Teléfono</small><?php echo esc_html( $c['telefono_txt'] ); ?></span>
					</a>
				</li>
				<li>
					<a class="ingein-canal" href="mailto:<?php echo esc_attr( $c['email'] ); ?>?subject=<?php echo rawurlencode( 'Consulta desde la web' ); ?>">
						<span class="ingein-canal__icono" aria-hidden="true"><svg viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 6L2 7"/></g></svg></span>
						<span class="ingein-canal__texto"><small>Email</small><?php echo esc_html( $c['email'] ); ?></span>
					</a>
				</li>
				<li>
					<a class="ingein-canal" href="<?php echo esc_url( $map ); ?>" target="_blank" rel="noopener">
						<span class="ingein-canal__icono" aria-hidden="true"><svg viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></g></svg></span>
						<span class="ingein-canal__texto"><small>Oficina</small><?php echo esc_html( $c['direccion'] . ', ' . $c['ciudad'] ); ?></span>
					</a>
				</li>
			</ul>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"52%"} -->
		<div class="wp-block-column" style="flex-basis:52%">
			<!-- wp:html -->
			<div class="ingein-mapa">
				<iframe title="Ubicación de la oficina de INGEIN" src="<?php echo esc_url( $map . '&output=embed' ); ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
