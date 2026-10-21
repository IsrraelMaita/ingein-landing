<?php
/**
 * Title: Hero
 * Slug: ingein/hero
 * Categories: ingein
 */
?>
<!-- wp:cover {"url":"<?php echo ingein_img( 'duplex-docta-render.jpg' ); ?>","dimRatio":0,"focalPoint":{"x":0.62,"y":0.45},"minHeight":92,"minHeightUnit":"vh","contentPosition":"bottom left","isDark":true,"anchor":"inicio","align":"full","className":"ingein-hero","layout":{"type":"constrained"}} -->
<div id="inicio" class="wp-block-cover alignfull is-dark has-custom-content-position is-position-bottom-left ingein-hero" style="min-height:92vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Render del proyecto Dúplex Docta" src="<?php echo ingein_img( 'duplex-docta-render.jpg' ); ?>" style="object-position:62% 45%" data-object-fit="cover" data-object-position="62% 45%"/><div class="wp-block-cover__inner-container">
	<!-- wp:group {"align":"wide","className":"ingein-hero__contenido","layout":{"type":"constrained","contentSize":"720px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide ingein-hero__contenido">
		<!-- wp:paragraph {"className":"ingein-eyebrow"} -->
		<p class="ingein-eyebrow">Ingeniería · Inmobiliaria — Córdoba</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1} -->
		<h1 class="wp-block-heading">Creando <span class="ingein-acento">oportunidades.</span></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"large","className":"ingein-hero__bajada"} -->
		<p class="has-large-font-size ingein-hero__bajada">Desarrollamos proyectos inmobiliarios de punta a punta: viviendas, loteos y emprendimientos, del diseño a la venta, para que tu inversión sea segura y satisfactoria.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( ingein_whatsapp_url() ); ?>" target="_blank" rel="noopener">Escribinos por WhatsApp</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#proyectos">Ver proyectos</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"ingein-hero__datos","layout":{"type":"grid","minimumColumnWidth":"12rem"}} -->
	<div class="wp-block-group alignwide ingein-hero__datos">
		<!-- wp:paragraph -->
		<p><strong>+15 años</strong>en el mercado inmobiliario</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><strong>Ingeniero civil</strong>y corredor inmobiliario matriculado</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><strong>Proyecto + obra + venta</strong>un solo equipo de punta a punta</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
