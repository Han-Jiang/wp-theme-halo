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