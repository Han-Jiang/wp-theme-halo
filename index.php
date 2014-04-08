<?php get_header(); ?>  
      <div class="col-md-9">
            <!-- Example row of columns -->
            <div >
            	<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>

							<?php include (TEMPLATEPATH . '/include/archive_box.php'); ?>
							
						<?php endwhile; ?>
						<div class="navigation">
							<?php posts_nav_link(); ?>
							<?php //posts_nav_link('in between','befor','after'); ?>
						</div>
				<?php else : ?>
				<div class="post">
					<h2><?php _e('Not Found'); ?></h2>
				</div>
				<?php endif; ?>

            </div>
      </div>
      
<?php get_sidebar(); ?>  
<?php get_footer();?>