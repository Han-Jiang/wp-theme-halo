<?php get_header(); ?>
	<?php echo "<h1>I am index</h1>"?>
      <div class="col-md-9">
			
        	<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

						<?php include (TEMPLATEPATH . '/include/archive_box.php'); ?>
						
					<?php endwhile; ?>
					<div class="pager">
					  <li class="pull-left"><?php previous_posts_link() ?></li>
					  <li class="pull-right"><?php next_posts_link() ?></li>
					</div>
			<?php else : ?>
			<center>
				<h2><?php _e('Not Found'); ?></h2>
			</center>
			<?php endif; ?>

      </div>
      
<?php get_sidebar(); ?>  
<?php get_footer();?>