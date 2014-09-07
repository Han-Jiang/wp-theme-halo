
<style type="text/css">
.archive_box { 
	padding:15px; 
	border-bottom:1px solid #ccc;
	} 
.archive_meta { 
	text-align: right; } 

.archive_box h2:hover{ 
    color: #97263e;} 
</style>


<div class="row archive_box">

	<div class="archive_title pull-left" >
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"> 
		<h2><?php if(in_category('twitter')){ 

				if(get_the_title()){ 
					the_title(); 
				}else{ 
					if (has_excerpt()) { 
							the_excerpt(); 
						} else{
							echo "&nbsp;&nbsp;&nbsp;&nbsp;".
							mb_strimwidth(
								strip_tags(
									apply_filters(
										'the_content',
										 $post->post_content)),
										  0, 40,"...");
						} 
				} 

			}else{
				the_title();
			} 
			?>	
		</h2>	
		</a>
	</div>

	<div class="archive_meta pull-right">
		<span class="archive_date"><?php the_time('Y/m/d') ?></span>
		<span class="archive_author"><?//php _e('by'); ?> <?//php the_author(',') ?></span>
	</div>

</div>


