<?php get_header( 'page' ) //template name: news?>


<h1><?php the_field( 'news' ); ?></h1>
<p><?php the_field( 'news_text' ); ?></p>

<?php get_footer(); ?>