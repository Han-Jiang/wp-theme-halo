<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="暨林瀚">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri().'/img/favicon.ico' ?>">

    <title> <?php bloginfo('name'); ?></title>

    <!-- Core CSS -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
   
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
      
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	
  <?php wp_enqueue_script("jquery"); ?>
  <?php wp_head(); ?>   
  
  </head>  

<body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('url')?>"> <?php bloginfo('name'); ?></a>
		  
		  <!-- Search box -->
		  <form class="navbar-form navbar-right">
			<input type="search" class="form-control" results="5" name="s"  placeholder="Search">
		  </form>
		  
        </div>

        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
				// 'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                // 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
		?>

      </div>
    </div>
	
<div class="container">
      
    <div class="row">






