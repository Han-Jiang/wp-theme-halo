<div id="portfolio-wrap" class = "col-md-12">
<?php if ( true ) : ?>

  <section id="portfolio">
   
    <h4 id="opt2" class="section-title section-title-offset"><span><?php echo "Protfolio"; ?></span></h4>

    <nav id="portfolio-filters">
      <a href="#" data-filter="*"><?php echo "Show All"; ?></a>
       
      <?php
        $args = array(
          'hide_empty' => 0
        );
        $skills = get_terms('skill', $args);?>

      <?php foreach ( $skills as $skill ) : ?>
            <a href="#filter" data-filter=".<?php echo $skill->slug; ?>">
              <?php echo $skill->name; ?>
            </a>
      <?php endforeach; ?>

    </nav><!-- /portfolio-filters -->

    <div id="portfolio-items" >
    <?php
      $ci_portfolio_query = 
          new WP_Query(array(
                          'post_type' => 'portfolio',
                          'posts_per_page'=> -1
                      ));
        if ( $ci_portfolio_query->have_posts() ) : while ( $ci_portfolio_query->have_posts() ) : $ci_portfolio_query->the_post();

        $item_skills = wp_get_object_terms($post->ID, 'skill');

        $thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" );

    ?>

      <div class="portfolio-item <?php foreach ( $item_skills as $item_skill ) :
      echo $item_skill->slug.' ';
      endforeach; ?> ">

        <a href="<?php echo $thumb_url[0]; ?>"
        rel="fancybox[<?php echo $post->ID; ?>]"
        title="<?php echo esc_attr(get_the_excerpt()); ?>" class="fb">

        <?php the_post_thumbnail('portfolio_thumb', array('class'=>'scale-with-grid')); ?>
        </a>
        <h3><?php the_title(); ?></h3>

       
      </div><!-- /portfolio-item -->

     <?php endwhile; endif; wp_reset_postdata();; ?>

    </div><!-- /portfolio-items -->

  </section><!-- /portfolio -->

<?php endif; ?>
</div><!-- /portfolio-wrap -->



