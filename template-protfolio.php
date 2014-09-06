<?php
/*
Template Name: PROTOFOLIO
*/
?>
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
          <li><a href="#" class="opt3">team_menu_title')</a></li>
        <?php endif; ?>
        <?php if ( true ) :?>
          <li><a href="#" class="opt4">contact_menu_title</a></li>
        <?php endif; ?>
      </ul><!-- /nav.right -->
    </nav><!-- /navigation -->
  </header><!-- /header.container -->
</div><!-- /logo-nav -->





<div id="portfolio-wrap">
<?php if ( true ) : ?>

  <section id="portfolio" class="container">
    
    <h4 id="opt2" class="section-title section-title-offset"><span><?php echo "Title"; ?></span></h4>

    <nav id="portfolio-filters">
      <a href="#" data-filter="*"><?php echo "all"; ?></a>
      
      <?php
        $args = array(
          'hide_empty' => 0
        );
        $skills = get_terms('skill', $args);

        foreach ( $skills as $skill ) : ?>
        <a href="#filter" data-filter=".<?php echo $skill->slug; ?>">
        <?php echo $skill->name; ?></a>
      <?php endforeach; ?>

    </nav><!-- /portfolio-filters -->

    <div id="portfolio-items" class="row">
    <?php
      $ci_portfolio_query = new WP_Query(array(
                                            'post_type' => 'portfolio',
                                            'posts_per_page'=> -1
                                        ));
    ?>

    <?php

        if ( $ci_portfolio_query->have_posts() ) : while ( $ci_portfolio_query->have_posts() ) : $ci_portfolio_query->the_post();

        $item_skills = wp_get_object_terms($post->ID, 'skill');

        $thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" );

    ?>

      <article class="col-md-6 portfolio-item <?php foreach ( $item_skills as $item_skill ) : 
      echo $item_skill->slug.' '; 
      endforeach; ?> ">

        <a href="<?php echo $thumb_url[0]; ?>" 
        rel="fancybox[<?php echo $post->ID; ?>]" 
        title="<?php echo esc_attr(get_the_excerpt()); ?>" class="fb">

        <?php the_post_thumbnail('portfolio_thumb', array('class'=>'scale-with-grid')); ?>
        </a>
        <h3><?php the_title(); ?></h3>

        
      </article><!-- /portfolio-item -->

     <?php endwhile; endif; wp_reset_postdata();; ?>

    </div><!-- /portfolio-items -->

  </section><!-- /portfolio -->

<?php endif; ?>
<div></div><!-- /portfolio-wrap -->

<?php get_footer();?>