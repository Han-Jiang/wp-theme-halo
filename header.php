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

    <!-- Font
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,900italic,700|Prata|Qwigley' rel='stylesheet' type='text/css'>
  
   
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
      

  <?php //wp_enqueue_script("jquery"); ?>
  <?php wp_head(); ?>   
  
  </head>  

<body>
<headrer>

    <!-- Static navbar -->
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
        </div>
        
        <div class="navbar-collapse collapse">
        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => false,
                //'container'         => 'div',
                //'container_class'   => 'collapse navbar-collapse',
				        //'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                // 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
		    ?>
	    </div>

      </div>
    </div>

</headrer>
<div class="container">
      
    <div class="row">






