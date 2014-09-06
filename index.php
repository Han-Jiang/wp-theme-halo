<?php get_header(); ?>

      <div id="top"></div>

<div id="logo-nav">
  <header class="container">
    <hgroup>
      <h1 id="logo"> Han Jiang </h1>
    </hgroup><!-- /hgroup -->
    <nav id="navigation" class="sixteen group">
      <ul class="col-md-4 left main-nav">
        <?php if ( true ) :?>
          <li><a href="#" class="opt1"><?php echo "services_menu_title"; ?></a></li>
        <?php endif; ?>
        <?php if ( true ) :?>
          <li><a href="#" class="opt2"> portfolio_menu_title </a></li>
        <?php endif; ?>
      </ul><!-- /nav.left -->
      <p class="col-md-4"></p>
      <ul class="col-md-4 right main-nav">
        <?php if ( true ) :?>
          <li><a href="#" class="opt3">team_menu_title</a></li>
        <?php endif; ?>
        <?php if ( true ) :?>
          <li><a href="#" class="opt4">contact_menu_title</a></li>
        <?php endif; ?>
      </ul><!-- /nav.right -->
    </nav><!-- /navigation -->
  </header><!-- /header.container -->
</div><!-- /logo-nav -->


<?php get_template_part('./include/inc_portfolio'); ?>


<?php get_footer();?>