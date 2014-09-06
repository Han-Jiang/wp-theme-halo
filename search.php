<?php get_header(); ?>	
	
 	<div id="content" class="col-md-9" >



		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
					<?php include ( TEMPLATEPATH . '/include/archive_box.php'); ?>

		<?php endwhile; else: ?>

		<center>
			<h3>抱歉!无法搜索到与之相匹配的信息。您可以重新搜索或者直接浏览下面的文章</h3>
		</center>

		<?php endif; ?>
		
	</div>
	
<?php get_sidebar();?>
<?php get_footer();?>


