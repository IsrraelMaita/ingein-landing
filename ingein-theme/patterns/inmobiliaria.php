<?php
/**
 * Title: Inmobiliaria
 * Slug: ingein/inmobiliaria
 * Categories: ingein
 */
?>
<!-- wp:group {"tagName":"section","anchor":"inmobiliaria","align":"full","className":"ingein-seccion ingein-seccion--oscura","backgroundColor":"grafito","textColor":"blanco","layout":{"type":"constrained"}} -->
<section id="inmobiliaria" class="wp-block-group alignfull ingein-seccion ingein-seccion--oscura has-blanco-color has-grafito-background-color has-text-color has-background">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"ingein-intro ingein-intro--invertida"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center ingein-intro ingein-intro--invertida">
		<!-- wp:column {"verticalAlignment":"center","width":"54%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:54%">
			<!-- wp:image {"sizeSlug":"full","className":"ingein-foto"} -->
			<figure class="wp-block-image size-full ingein-foto"><img src="<?php echo ingein_img( 'duplex-docta-interior.jpg' ); ?>" alt="Vista interior de una vivienda dúplex"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"46%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:46%">
			<!-- wp:paragraph {"className":"ingein-eyebrow"} -->
			<p class="ingein-eyebrow"><span class="ingein-num">02</span> Inmobiliaria</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading -->
			<h2 class="wp-block-heading">Propiedades de categoría, operaciones con respaldo profesional.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"ingein-texto-suave"} -->
			<p class="ingein-texto-suave">Viviendas destacadas en barrios consolidados de la Ciudad de Córdoba. Nos enfocamos en el mercado inmobiliario empresarial: resolvemos la vivienda de gerentes, profesionales y referentes que llegan a la ciudad.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( ingein_whatsapp_url( 'Hola INGEIN, quisiera consultar por una propiedad.' ) ); ?>" target="_blank" rel="noopener">Consultar propiedades</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","className":"ingein-tarjetas ingein-tarjetas--oscuras","layout":{"type":"grid","minimumColumnWidth":"16rem"}} -->
	<div class="wp-block-group alignwide ingein-tarjetas ingein-tarjetas--oscuras">
		<!-- wp:group {"className":"ingein-tarjeta","layout":{"type":"default"}} -->
		<div class="wp-block-group ingein-tarjeta">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Venta</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Casas en barrios cerrados, housings, countries y departamentos en torres de la ciudad.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"ingein-tarjeta","layout":{"type":"default"}} -->
		<div class="wp-block-group ingein-tarjeta">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Alquiler</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Locación de propiedades de categoría, con asesoramiento legal para que el contrato te dé tranquilidad.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"ingein-tarjeta","layout":{"type":"default"}} -->
		<div class="wp-block-group ingein-tarjeta">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Administración y tasaciones</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Administramos tu propiedad, tasamos con criterio técnico y te asesoramos en cualquier operación inmobiliaria.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
