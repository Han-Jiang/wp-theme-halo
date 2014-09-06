<?php get_header(); ?>

      <div id="content" class="col-md-9" >

			<!-- Main loop -->
        	<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

						<?php include (TEMPLATEPATH . '/include/archive_box.php'); ?>
						
					<?php endwhile; ?>

					<!-- pager -->
					<?php include (TEMPLATEPATH . '/include/pager.php'); ?>
					
			<?php else : ?>
			<center>
				<h3><?php _e('Not Found'); ?></h3>
			</center>
			<?php endif; ?>

      </div>

<?php get_footer();?>