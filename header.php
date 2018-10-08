<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<? bloginfo ('description')?>">
    <title><?php wp_title(); ?></title>
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <meta name="description" content=""> 
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
  </head>
  <body id="page-top">

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url(); ?>">Inicio</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse  navbar-right" id="bs-example-navbar-collapse-1">
  	    <?php
  			// Menu Location
  			wp_nav_menu( array(
  				'menu'              => 'Main Menu',
  				'theme_location'    => 'main_menu',
  				'depth'             => 3,
  				'container'         => 'div',
  				'container_class'   => 'collapse navbar-collapse',
  				'container_id'      => 'bs-example-navbar-collapse-1',
  				'menu_class'        => 'nav navbar-nav',
  				'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
  				'walker'            => new wp_bootstrap_navwalker())
  			 );
  		?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>




