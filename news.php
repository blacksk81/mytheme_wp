<?php get_header( 'page' ) //template name: news?>

<!-- ESTA SERIA UNA PAGINA EN BLANCO -->

<!-- AQUI ADENTRO TODO SU CONTENIDO -->

<h1><?php the_field( 'news' ); ?></h1>
<p><?php the_field( 'news_text' ); ?></p>

<!-- AQUI ADENTRO TODO SU CONTENIDO -->

<?php get_footer(); ?>