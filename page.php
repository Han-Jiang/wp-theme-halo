<?php
/*
Template Name: 显示所有文章
*/
?>
<?php get_header(); ?>	


 		<div class="col-md-9">
 		<?php echo "<h1>I am page</h1>" ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>

 		</div>

<?php get_sidebar();?>
<?php get_footer();?>