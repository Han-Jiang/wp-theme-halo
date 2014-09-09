<div id="client-wrap">
<?php
  $clients_q = new WP_Query('post_type=client');
  if ( $clients_q->have_posts() ) :
?>
<section id="clients" class="container">
  <h4 id="opt3"  class="section-title section-dark"><span>
  Clients</span></h4>
  
  <div id="client-items" class="row">
    <?php
      while ( $clients_q->have_posts() ) : $clients_q->the_post();
    ?>
    <article class="col-md-3 client-item">
      <?php the_post_thumbnail('client_thumb', array("class"=>"scale-with-grid")); ?>
    </article><!-- /portfolio-item -->
    <?php endwhile; ?>
  </div><!-- /client-items -->

  <h3 class="action">"Like it, contact me!"</h3>

</section><!-- /portfolio -->

<?php endif; wp_reset_postdata(); //loop ?>

</div><!-- /portfolio-wrap -->
