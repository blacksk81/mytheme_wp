Documentacion para crear tema de wordpress.
Por Luisbernal.com.ve

Html -> wordpress -> custom field

1.- Maquetar tu pagina web en html con el framework que desee o puees incluso bajarte una plantilla y integrarla a tu wordpres para usarlo como CMS.
	pegaras tu web en la siguiente ruta /public_html/wp-content/themes/ pegaras tu carpeta hay, y luego tiene que segmentar el contenido de tu web.

2.- dentro de tu plantilla tienes que crear una hoja de estilo 	y otras mas <BR>
<BR>
		CSS<BR>
			.STYLE<BR>
		JS<BR>
			.JS<BR>
		IMG<BR>
			.IMAGENS<BR>
		INDEX.PHP<BR>
		HEADER.PHP<BR>
		FOOTER.PHP<BR>
		FONCTIONS.PHP<BR>
		STYLE.CSS 
		SCREENSHOT.PNG



2.1 HOLJA INDEX.PHP	<br>
get_header(); // llama al contenido del header.php
 /* todo el contenido del body*/
get_footer(); // llama al contenido de footer.php
	

2.2 HOJA HEADER.PHP<br>
	Todo el contenido de las la cabezera desde doctype hasta el /head< <br>

	en la hoja index pegaras todo el contenido dentro de las etiquetas body.<br>

	<b> <?php wp_head(); ?> </b> tambien tenemos que agregar el head para llamar a las funciones nativas del head de wordpress
	<meta name="description" content="<? bloginfo ('description')?>"> agrega la descripcion del sitio de wordpress

	Y OTRAS NECESARIAS

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

2.3 HOJA FOOTER.PHP<br>
	Todo lo que va1s  poner en el pie de pagina

2.4 HOJA FUNCTIONS.PHP<br>
	Todas las funciones importante de wordpress y todos lo que vayamos a crear en nuestros custom type y fields entre otros:

	para agregar las clases de nuestos css y js de nuestra plantilla.



	// Vincular estilo 
	get_template_directory_uri  nos ubica en nuetro directorio raiz para ubicar la clase que deseamos llamas


	function wpdocs_theme_name_style() {

		wp_enqueue_style( 'agency.css', get_template_directory_uri() . '/css/agency.css' );

	}
	add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_style' );

	// Vincular script 
	function wpdocs_theme_name_scripts() {

		wp_enqueue_script( 'jquery.min.js', get_template_directory_uri() . '/js/jquery.min.js', '', '', true );	

		//el argunmento true nos indica que la posicion de script estara al final de nuestra hoja.

	}
	add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );





















2.5 HOJA STYLE
	Esa hoja de estilo la creas con esto:

	/*
	Theme Name: mytheme
	Theme URI: http://lbernal.com.ve
	Author: Luis Bernal
	Author URI: http://lbernal.com.ve/
	Description: The 2018 theme for WordPress takes us back to the blog, featuring a full range of post formats, each displayed beautifully in their own unique way. Design details abound, starting with a vibrant color scheme and matching header images, beautiful typography and icons, and a flexible layout that looks great on any device, big or small.
	Version: 1.0
	License: GNU General Public License v2 or later
	License URI: http://www.gnu.org/licenses/gpl-2.0.html
	Tags: black, brown, orange, tan, white, yellow, light, one-column, two-columns, right-sidebar, flexible-width, custom-header, custom-menu, editor-style, featured-images, microformats, post-formats, rtl-language-support, sticky-post, translation-ready
	Text Domain: twentythirteen

	This theme, like WordPress, is licensed under the GPL.
	Use it to make something cool, have fun, and share what you've learned with others.
	*/


