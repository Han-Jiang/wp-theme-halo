<?php get_header(); ?>


<!-- 正文字体放大缩小-->
<script type="text/javascript">
    function doZoom(size) {
        var zoom = document.all ? document.all['entry'] : document.getElementById('entry');
        zoom.style.fontSize = size + 'px';
    }
</script>

<style type="text/css">
.single_post_box {
	margin:10px 0 0 0;
	border:1px solid #ccc;
}/*输出框对于整体的位置及背景色等信息*/
</style>


 		<div class="col-md-9">
<?php echo "<h1>I am single</h1>" ?>
 		<div class="row">
 		<div class="col-md-12">
			<div class="browse pull-left">
			现在的位置: <a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a>
			＞<?php the_category(', ') ?>
			＞正文<!-- <?php the_title();?> -->
			</div>
			<div class="single-js-change-font-size pull-right">
					<a href="javascript:doZoom(14)">小</a> 
					<a href="javascript:doZoom(16)">中</a> 
					<a href="javascript:doZoom(20)">大</a>
			</div>
		</div>
		</div>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	 	
	 	<!-- 文章 -->	
		<div class="single_post_box col-md-12">
			
			<center>
				<div class="single_post_title_box">
					<!--文章题目-->
					<div class="single_post_title">
						<?php the_title(); ?>
					</div>

					<!--文章元信息-->
					<div class="single_post_info">
						<!--作者名字-->
						<span class="single_post_author_name">
							<?php the_author_posts_link('name'); ?>
						</span>
						<!--日期-->
						<span class="single_post_date">
							<?php the_time('Y/m/日') ?>
						</span>

						<!--类别-->
						<span class="single_post_category">
							&#8260; <?php the_category(', ') ?>
						</span>

						<!--文章浏览次数-->
						<span class="single_post_views">
							<?php setPostViews(get_the_ID()); ?>
							<?php echo getPostViews(get_the_ID());?>  浏览
						</span>

						<!--评论数-->
						<span class="single_post_comment"> 
							<?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
						</span>

						<!--编辑链接-->
						<span class="single_post_edit">
							<?php edit_post_link('Edit', ' | ', ''); ?>
						</span>

						<!--标签-->
						<span class="single_post_tag">
							<?php the_tags('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ', ', ', ''); ?>
						</span>

					</div>
				</div>
			</center>
			

			<!-- ****************显示文章正文********************* -->
			<div class="entry col-md-12" >
				<div id="entry">
					<?php the_content(); ?>
					<?php //the_content('Read more...'); ?>
					<?php // wp_link_pages( array( 'before' => '<p class="pages">' . __( '日志分页:'), 'after' => '</p>' ) ); ?>
				</div>	
			</div>

		</div><!--.single_post_box -->

		<div class="single-pre-next col-md-12 pager">
			<li class="clear"> <?php previous_post_link('%link','【上篇】%title') ?> </li>
			<li class="clear"> <?php next_post_link('%link','【下篇】%title') ?> </li>
		</div>
		
		<?php comments_template('', true);?>
	
	<?php endwhile; else: ?>
	<?php endif; ?>	
	
</div>
<!-- end: single -->

<?php get_sidebar();?>
<?php get_footer();?>