
<style type="text/css">
.clear {
	clear:both;
}
.archive_box {
	margin-top:15px;
	margin-bottom:15px;
	float:left;
	border:1px solid #ccc;
}
.archive_box a {
	text-decoration:none;
	/*去除超链接下的线*/
}
.archive_title {
	width:100%;
	height:30px;
	margin-bottom:5px;
	/*背景颜色*/
/*background:rgb(230,7,0);
	*/
}
.archive_title a {
	margin-top:2px;
	font-size:24px;
	font-weight:bold;
	float:left;
	/*文字颜色*/
	/*color:#f2f2f2;*/
}
/*.archive_title a:hover {
	color:rgb(253,241,0);
}*/

.archive_category,.archive_author,.archive_date,.archive_comment,
.archive_edit,.archive_posttag,.archive_read_more{
	float:left;
/*	font-size:18px;*/
	padding:3px;
	margin-top:5px;
	margin-bottom:5px;
	border-bottom:1px dashed  #ccc;
	border-top:1px dashed  #ccc;
}

.archive_summary {
	float:left;
}
.archive_summary p {
	float:left;
}

.archive_read_more{
	float:right;
}
</style>

	
<div class="archive_box col-md-12">
	<div class="archive_title">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="详细阅读 <?php the_title_attribute(); ?>"> <h2><?php the_title(); ?></h2> </a>
	</div>
	<div class="clear"></div>
		
	<span class="archive_date"><?php the_time('Y/m/d') ?>&nbsp;&nbsp;&nbsp;&nbsp;</span>
	<span class="archive_author"><?php _e('by'); ?> <?php the_author(',') ?></span>
	
	<div class="clear"></div>
	
	<div class="archive_summary  col-md-12">

		<?php if (is_home() || is_front_page()) { ?>
			<?php the_content() ?>
		<?php }else{ ?> 
			<?php if (has_excerpt())
			{ ?> 
				<?php the_excerpt() ?>
			<?php
			}
			else{
				echo "&nbsp;&nbsp;&nbsp;&nbsp;".mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 480,"...");
			} 
			?>
		<?php } ?> 
	</div>
	
	<span class="archive_category"> <?php _e('Under:'); the_category(', ') ?></span>
	<span class="archive_comment"><?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></span>
	<span class="archive_edit"><?php edit_post_link('Edit', ' | ', ''); ?></span>
	<span class="archive_posttag"><?php the_tags('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ', ', ', ''); ?></span>
	<span class="archive_read_more"><a href="<?php the_permalink() ?>" title="详细阅读 <?php the_title(); ?>" rel="bookmark" class="title">阅读全文</a></span>
						
</div>
