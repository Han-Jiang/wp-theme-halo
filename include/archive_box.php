
<style type="text/css">
.archive_box {
	margin-top:15px;
	margin-bottom:15px;
	border:1px solid #ccc;
}

/*.archive_category,.archive_author,.archive_date,.archive_comment,
.archive_edit,.archive_tag,.archive_read_more*/
.archive_meta{
	padding:3px;
	margin-top:5px;
	margin-bottom:15px;
	border-bottom:1px dashed  #ccc;
	border-top:1px dashed  #ccc;
}
</style>

	<div class ="row">

		<div class="archive_box col-md-12">
		
			<div class="archive_title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="详细阅读 <?php the_title_attribute(); ?>"> <h2><?php the_title(); ?></h2> </a>
			</div>

		
			<div class="archive_meta">
				<span class="archive_date"><?php the_time('Y/m/d') ?>&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<span class="archive_author"><?php _e('by'); ?> <?php the_author(',') ?></span>
			</div>

		
			<div class="archive_summary">

				<?php if (is_home() || is_front_page()) { ?>
					<?php the_content() ?>
				<?php }else{ ?> 
					<?php if (has_excerpt()) { ?> 
						<?php the_excerpt() ?>
					<?php } else{
						echo "&nbsp;&nbsp;&nbsp;&nbsp;".mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 480,"...");
					} ?>
				<?php } ?> 
			</div>

	
			<div class="archive_meta">
				<span class="archive_category"> <?php _e('Under:'); the_category(', ') ?></span>
				<span class="archive_comment"> <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></span>
				<span class="archive_edit"> <?php edit_post_link('Edit', ' | ', ''); ?></span>
				<span class="archive_tag"> <?php the_tags('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ', ', ', ''); ?></span>
				<div class="archive_read_more pull-right"> <a href="<?php the_permalink() ?>" title="详细阅读 <?php the_title(); ?>" >阅读全文</a></div>
			</div>
	

		</div>

	</div>

