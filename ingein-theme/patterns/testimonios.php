<?php
/**
 * Title: Testimonios (pendiente de contenido real)
 * Slug: ingein/testimonios
 * Categories: ingein
 *
 * Fuera de la portada hasta tener testimonios reales. Para mostrarlo, incluir
 * <!-- wp:pattern {"slug":"ingein/testimonios"} /--> al final de patterns/proyectos.php
 * (dentro de la <section>).
 */
?>
<!-- wp:group {"align":"wide","className":"ingein-clientes","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide ingein-clientes">
	<!-- wp:heading {"level":3} -->
	<h3 class="wp-block-heading">Lo que dicen nuestros clientes</h3>
	<!-- /wp:heading -->

	<!-- wp:group {"align":"wide","className":"ingein-testimonios","layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group alignwide ingein-testimonios">
		<!-- wp:quote {"className":"ingein-testimonio"} -->
		<blockquote class="wp-block-quote ingein-testimonio">
			<!-- wp:paragraph -->
			<p>[Testimonio de ejemplo — reemplazar] Nos acompañaron en todo el proceso de compra y resolvieron cada duda técnica con claridad.</p>
			<!-- /wp:paragraph -->
			<cite>Nombre del cliente · Barrio</cite>
		</blockquote>
		<!-- /wp:quote -->

		<!-- wp:quote {"className":"ingein-testimonio"} -->
		<blockquote class="wp-block-quote ingein-testimonio">
			<!-- wp:paragraph -->
			<p>[Testimonio de ejemplo — reemplazar] Llegamos a Córdoba por trabajo y en pocas semanas teníamos casa. Muy profesionales.</p>
			<!-- /wp:paragraph -->
			<cite>Nombre del cliente · Empresa</cite>
		</blockquote>
		<!-- /wp:quote -->

		<!-- wp:quote {"className":"ingein-testimonio"} -->
		<blockquote class="wp-block-quote ingein-testimonio">
			<!-- wp:paragraph -->
			<p>[Testimonio de ejemplo — reemplazar] Invertimos en un emprendimiento propio de INGEIN: cumplieron plazos y calidad.</p>
			<!-- /wp:paragraph -->
			<cite>Nombre del cliente · Inversor</cite>
		</blockquote>
		<!-- /wp:quote -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
