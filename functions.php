<?php 

// Registro de navegacion con navwalker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'mytheme' ),
) );

// Vincular estilo 
function wpdocs_theme_name_style() {

	wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap.css', get_template_directory_uri() . '/css/bootstrap.css' );

}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_style' );

// Vincular script 
function wpdocs_theme_name_scripts() {

	wp_enqueue_script( 'bootstrap.js', get_template_directory_uri() . '/js/bootstrap.js', '', '', true );
	wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri() . '/js/bootstrap..min.js', '','', true);



}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


/* 
by luis : https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts

wp_enqueue_111('2','get_template_directory_uri() . /3','4','5', {true or flase})

1 = style o script
2 = nombre que define para el archio
- el get_template_directory_uri() concatenas con la direcion raiz para llamar archivo.
3 = raiz del tema '/'
4 = sin definir
5 = sin definir
true o false = define la posicion (false lo pone dentro del head y true lopone en el footer)

*/

?>



