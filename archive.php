
<?php get_header(); ?>	
 	
 		<div class="col-md-9" >

			<div>
				<ol class="breadcrumb">
				  <li><a href="<?=site_url();?>">Home</a> <span class="divider" /></li>
				  <li class="active"><a href="#"><?php single_cat_title(); ?></a> <span class="divider"/></li>

				</ol>
			</div>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
					<?php include (TEMPLATEPATH . '/include/archive_box.php'); ?>

			<?php endwhile; else: ?>

			<center>
				<h3 class="center">暂时没有文章哦!</h3>
			</center>

			<?php endif; ?>
 		</div>

<?php get_sidebar();?>
<?php get_footer();?>
