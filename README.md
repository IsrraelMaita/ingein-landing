# INGEIN — Landing

Tema de bloques de WordPress (`ingein-theme/`) para la landing de INGEIN, Ingeniería e Inmobiliaria (Córdoba).

## Verla online

**[Abrir en WordPress Playground](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/IsrraelMaita/ingein-landing/main/playground-blueprint.json)**

WordPress corre dentro del navegador de quien abre el link (la primera carga tarda 15–30 s). `playground-blueprint.json` instala el tema directamente desde la rama `main` de este repo, así que cada push se ve en el link sin hacer nada más. El repo tiene que ser público.

## Levantar en local

```bash
npm install
npm run dev
```

Abre WordPress en http://127.0.0.1:9400 con el tema activado y la sesión de admin iniciada.
Playground arranca un sitio nuevo en cada inicio (configurado por `blueprint.json`), así que **todo el contenido vive en los archivos del tema**, no en la base de datos.

> En Git Bash no conviene llamar al CLI directamente porque convierte `/wordpress/...` en una ruta de Windows. Usá `npm run dev` o PowerShell.

## Dónde se edita cada cosa

| Qué | Archivo |
|---|---|
| Colores, tipografías, tamaños | `ingein-theme/theme.json` |
| Teléfono, WhatsApp, email, dirección | `ingein_contacto()` en `ingein-theme/functions.php` |
| Textos e imágenes de cada sección | `ingein-theme/patterns/*.php` (hero, ingenieria, inmobiliaria, proyectos, nosotros, contacto) |
| Orden de las secciones | `ingein-theme/templates/front-page.html` |
| Menú y encabezado | `ingein-theme/parts/header.html` |
| Estilos | `ingein-theme/assets/css/ingein.css` |
| Fotos | `ingein-theme/assets/images/` |
| Favicon | `ingein-theme/assets/favicon/` |

## Pendiente de contenido

- Testimonios de clientes: el bloque está armado en `patterns/testimonios.php` con textos de ejemplo, pero **no se muestra** en la portada hasta tener testimonios reales.
- Más proyectos y fotos reales de obras terminadas.
- Logo original en SVG. El `logo-ingein.png` actual es transparente, pero lo generé a partir del JPG.

## Licencia

El **código fuente** (PHP, CSS, JSON y plantillas) se distribuye bajo [GPL-2.0-or-later](LICENSE), la misma licencia que WordPress.

Los **logos, el favicon, las imágenes, los textos y los demás elementos de marca de INGEIN SAS** no están cubiertos por esa licencia: © INGEIN SAS, todos los derechos reservados. La foto de planos y casco de la sección Ingeniería es de stock y pertenece a su autor.
