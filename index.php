<?php get_header(); ?>


<header>


<div id="gentle-bar" class="navbar">

    <div id="navigation">
      <ul id="gentle-left" class="col-md-4 pull-left gentle main-nav">
          <li><a href="#" class="opt1" id="nopt1">Services</a></li>
          <li><a href="#" class="opt2" id="nopt2">Portfolio</a></li>
      </ul><!-- /nav.left -->
      <ul class="col-md-4 gentle">
        <h1 id="logo"> Han Jiang </h1>        
      </ul>
      <ul class="col-md-4 pull-right gentle main-nav"> 
          <li><a href="#" class="opt3" id="nopt3">Clients</a></li>
          <li><a href="#" class="opt4" id="nopt4">Contact Me</a></li>
      </ul><!-- /nav.right -->
    </div><!-- /navigation -->
  </div><!-- /navigation -->
</header><!-- /header -->

<?php get_template_part('./include/inc_services'); ?>

<div class="container">
      
    <div class="row">


<?php get_template_part('./include/inc_portfolio'); ?>



  </div><!--/.row-->
</div><!--/.container-->


<?php get_template_part('./include/inc_clients'); ?>

<?php get_template_part('./include/inc_contact'); ?>



<?php get_footer();?>