<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body>
<div id="page" class="hfeed site">
  <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-menu-collapse" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
              <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg">
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="top-menu-collapse">
            <div class="container">
              <?php wp_nav_menu([
                  'theme_location' => 'Top',
                  'menu_id' => 'top-menu',
                  'menu_class' => 'nav navbar-nav'
                ]) ?>
            </div>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
  </header>
	


	<div id="content" class="site-content">
