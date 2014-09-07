<?php if ( true ) : ?>
<h4 class="section-title section-title-offset"><span><?php echo "Hello World"; ?></span></h4>

<?php if ( true ): ?>
  <hgroup>
    <h2><?php echo 'welcome_message_1'; ?></h2>
    <?php if ( true ) : ?>
    <h3 class="action"><?php echo 'welcome_message_2'; ?></h3>
    <?php endif; ?>
  </hgroup>
  <?php endif; ?>
<?php endif; //endif display intro section ?>

<?php if (true ) : ?>
<h4 id="opt1" class="section-title section-light 
<?php if ( 'disable_intro_section' ) { echo 'no-intro'; } ?>">
<span><?php echo 'services_title'; ?></span></h4>
<ul class="services sixteen columns group">

  <?php

  $services_q = new WP_Query('post_type=service');

  if ( $services_q->have_posts() ) : while ( $services_q->have_posts() ) : $services_q->the_post();

  ?>
    <li class=" columns ">
      <?php the_post_thumbnail('full', array('class' => 'scale-with-grid')); ?>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </li>

    <?php
  endwhile;
  endif;
  wp_reset_postdata();
  ?>

</ul><!-- /services.group -->
<?php endif; //endif disable services section ?>
