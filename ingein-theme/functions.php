<?php
/**
 * INGEIN — funciones del tema.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Datos de contacto: se usan en los patterns y en el botón flotante.
 * Cambiarlos acá los actualiza en toda la landing.
 */
function ingein_contacto() {
	return array(
		'whatsapp'      => '5493517072751',
		'whatsapp_msg'  => 'Hola INGEIN, quisiera hacer una consulta.',
		'telefono'      => '+5493517072751',
		'telefono_txt'  => '+54 9 351 707-2751',
		'email'         => 'info@ingein.com.ar',
		'direccion'     => 'Duarte Quirós 559 - 1A',
		'ciudad'        => 'Córdoba, Argentina',
		'mapa_query'    => 'Duarte Quirós 559, Córdoba, Argentina',
	);
}

function ingein_whatsapp_url( $mensaje = '' ) {
	$c = ingein_contacto();
	return 'https://wa.me/' . $c['whatsapp'] . '?text=' . rawurlencode( $mensaje ? $mensaje : $c['whatsapp_msg'] );
}

function ingein_img( $archivo ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $archivo ) );
}

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'ingein-fuentes',
		'https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600&family=Barlow+Semi+Condensed:wght@500;600;700&display=swap',
		array(),
		null
	);
	$css = get_theme_file_path( 'assets/css/ingein.css' );
	wp_enqueue_style( 'ingein', get_theme_file_uri( 'assets/css/ingein.css' ), array(), filemtime( $css ) );
} );

add_action( 'enqueue_block_editor_assets', function () {
	wp_enqueue_style(
		'ingein-fuentes-editor',
		'https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600&family=Barlow+Semi+Condensed:wght@500;600;700&display=swap',
		array(),
		null
	);
} );

add_action( 'after_setup_theme', function () {
	add_editor_style( 'assets/css/ingein.css' );
} );

/** En la portada el encabezado arranca en grafito sobre el hero. */
add_filter( 'body_class', function ( $classes ) {
	if ( is_front_page() ) {
		$classes[] = 'ingein-landing';
	}
	return $classes;
} );

/** Favicon de la marca (la "N" rayada). Si se carga un Ícono del sitio en WordPress, ese tiene prioridad. */
add_action( 'wp_head', 'ingein_favicon' );
add_action( 'admin_head', 'ingein_favicon' );
function ingein_favicon() {
	if ( has_site_icon() ) {
		return;
	}
	$dir = get_theme_file_uri( 'assets/favicon/' );
	printf( '<link rel="icon" href="%s" sizes="32x32" />' . "\n", esc_url( $dir . 'favicon-32.png' ) );
	printf( '<link rel="icon" href="%s" sizes="192x192" />' . "\n", esc_url( $dir . 'favicon-192.png' ) );
	printf( '<link rel="apple-touch-icon" href="%s" />' . "\n", esc_url( $dir . 'apple-touch-icon.png' ) );
	printf( '<meta name="msapplication-TileImage" content="%s" />' . "\n", esc_url( $dir . 'favicon-270.png' ) );
}

add_action( 'init', function () {
	register_block_pattern_category( 'ingein', array( 'label' => 'INGEIN' ) );
} );

/** Botón flotante de WhatsApp. */
add_action( 'wp_footer', function () {
	?>
	<a class="ingein-wa-flotante" href="<?php echo esc_url( ingein_whatsapp_url() ); ?>" target="_blank" rel="noopener" aria-label="Escribinos por WhatsApp">
		<svg viewBox="0 0 32 32" width="28" height="28" aria-hidden="true"><path fill="currentColor" d="M16.04 3C9.1 3 3.46 8.63 3.46 15.57c0 2.22.58 4.39 1.69 6.3L3.36 28.4l6.7-1.76a12.53 12.53 0 0 0 5.98 1.52h.01c6.93 0 12.58-5.64 12.58-12.58C28.63 8.63 22.98 3 16.04 3Zm0 23.04h-.01c-1.88 0-3.72-.5-5.33-1.46l-.38-.23-3.98 1.04 1.06-3.88-.25-.4a10.43 10.43 0 0 1-1.6-5.55c0-5.77 4.7-10.46 10.49-10.46 2.8 0 5.43 1.09 7.4 3.07a10.39 10.39 0 0 1 3.07 7.4c0 5.77-4.7 10.47-10.47 10.47Zm5.74-7.84c-.31-.16-1.86-.92-2.15-1.02-.29-.11-.5-.16-.71.16-.21.31-.81 1.02-1 1.23-.18.21-.37.24-.68.08-.31-.16-1.33-.49-2.53-1.56-.93-.83-1.56-1.86-1.75-2.18-.18-.31-.02-.48.14-.64.14-.14.31-.37.47-.55.16-.18.21-.31.31-.52.1-.21.05-.39-.03-.55-.08-.16-.71-1.71-.97-2.34-.26-.61-.52-.53-.71-.54h-.6c-.21 0-.55.08-.84.39-.29.31-1.1 1.07-1.1 2.62 0 1.55 1.13 3.04 1.28 3.25.16.21 2.22 3.39 5.38 4.75.75.32 1.34.52 1.8.66.75.24 1.44.21 1.98.13.6-.09 1.86-.76 2.12-1.5.26-.73.26-1.36.18-1.5-.08-.13-.29-.21-.6-.37Z"/></svg>
	</a>
	<script>
		// Encabezado: grafito sobre el hero, sólido al llegar a la primera sección.
		( function () {
			var wrap = document.querySelector( '.ingein-landing .ingein-header-wrap' );
			var hero = document.querySelector( '.ingein-hero' );
			if ( ! wrap || ! hero ) return;
			function actualizar() {
				var limite = wrap.getBoundingClientRect().bottom;
				wrap.classList.toggle( 'is-solido', hero.getBoundingClientRect().bottom <= limite );
			}
			window.addEventListener( 'scroll', actualizar, { passive: true } );
			window.addEventListener( 'resize', actualizar );
			actualizar();
		} )();

		// El menú móvil de WordPress no se cierra al tocar un enlace a una sección (#ancla).
		document.addEventListener( 'click', function ( e ) {
			var link = e.target.closest( '.wp-block-navigation__responsive-container.is-menu-open a[href^="#"]' );
			if ( ! link ) return;
			var cerrar = link.closest( '.wp-block-navigation__responsive-container' ).querySelector( '.wp-block-navigation__responsive-container-close' );
			if ( cerrar ) cerrar.click();
			var destino = document.querySelector( link.getAttribute( 'href' ) );
			if ( destino ) {
				e.preventDefault();
				// esperar a que WordPress libere el bloqueo de scroll del modal
				setTimeout( function () { destino.scrollIntoView( { behavior: 'smooth' } ); history.replaceState( null, '', link.getAttribute( 'href' ) ); }, 300 );
			}
		} );
	</script>
	<?php
} );
