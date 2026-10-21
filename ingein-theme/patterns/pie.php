<?php
/**
 * Title: Pie de página
 * Slug: ingein/pie
 * Categories: ingein
 * Inserter: no
 */
$c = ingein_contacto();
?>
<!-- wp:group {"align":"wide","className":"ingein-pie__fila","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group alignwide ingein-pie__fila">
	<!-- wp:group {"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:image {"width":"200px","sizeSlug":"full","linkDestination":"custom","className":"ingein-pie__logo"} -->
		<figure class="wp-block-image size-full is-resized ingein-pie__logo"><a href="#inicio"><img src="<?php echo ingein_img( 'logo-ingein.png' ); ?>" alt="INGEIN — Ingeniería e Inmobiliaria" style="width:200px"/></a></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"className":"ingein-pie__links"} -->
	<p class="ingein-pie__links"><a href="#ingenieria">Ingeniería</a><a href="#inmobiliaria">Inmobiliaria</a><a href="#proyectos">Proyectos</a><a href="#nosotros">Nosotros</a><a href="#contacto">Contacto</a></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"className":"ingein-pie__contacto"} -->
	<p class="ingein-pie__contacto"><a href="tel:<?php echo esc_attr( $c['telefono'] ); ?>"><?php echo esc_html( $c['telefono_txt'] ); ?></a><a href="mailto:<?php echo esc_attr( $c['email'] ); ?>"><?php echo esc_html( $c['email'] ); ?></a><span><?php echo esc_html( $c['direccion'] . ', ' . $c['ciudad'] ); ?></span></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"wide","className":"ingein-pie__legal"} -->
<p class="alignwide ingein-pie__legal">© <?php echo esc_html( gmdate( 'Y' ) ); ?> INGEIN SAS · Córdoba, Argentina</p>
<!-- /wp:paragraph -->
