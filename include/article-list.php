<?php function show_article_list($catID){ ?>

	<?php 
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args=array(
		'cat' => $catID,   // 分类ID
		'posts_per_page' => 10,  // 只显示10篇
		'paged'=>$paged,
		);
		query_posts($args);
	?>

	<div style="min-height: 260px;">
		<span style="font-size: 30px;"><?php single_cat_title(); ?></span>
		<ul>
			<?php
				if  (have_posts()) : while  (have_posts()) : the_post();
			?>
			<!-- 文章标题显示 Start-->
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			


			<?php endwhile; endif; ?>
			
			<p><a class="btn" href="<?php echo get_category_link($catID);?>">View more &raquo;</a></p>   
			<?php wp_reset_query();?>
		</ul>
		       
	</div>
<?php } ?>