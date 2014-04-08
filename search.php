<?php get_header(); ?>	
<style type="text/css">
.unfind {
	clear:both;
	float:left;
}
</style>
 	<div class="col-md-9">

		<div class="browse">现在位置 ＞
		<a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a>
		 ＞搜索结果
		</div>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
					<?php include (TEMPLATEPATH . '/include/archive_box.php'); ?>

		<?php endwhile; else: ?>

		<div class="unfind">
		<h3 class="center">抱歉!无法搜索到与之相匹配的信息。您可以重新搜索或者直接浏览下面的文章</h3>
		</div>

		<?php endif; ?>
		
	</div>
	
<?php get_sidebar();?>
<?php get_footer();?>


