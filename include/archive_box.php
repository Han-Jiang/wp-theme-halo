
<style type="text/css">
.archive_box { 
	padding-top:15px; 
	padding-bottom:15px; 
	border-bottom:1px solid #ccc; } 
</style>

<div class ="row">

<div class="archive_box col-md-12">

	<div class="archive_title pull-left" >
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"> 
		<?php if(in_category('twitter')){ 

			if(get_the_title()){ ?>
				<h2><?php the_title(); ?></h2> 
			<?php }else{ ?>

					<?php if (has_excerpt()) { ?> 
						<?php the_excerpt() ?>
					<?php } else{
						echo "&nbsp;&nbsp;&nbsp;&nbsp;".mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 40,"...");
					} ?>

			<?php } ?>


    			

        <?php }else{ ?>
        	<h2><?php the_title(); ?></h2> 
        <?php } ?>	
			
		</a>
	</div>

	<div class="archive_meta pull-right">
		<span class="archive_date"><?php the_time('Y/m/d') ?></span>
		<span class="archive_author"><?//php _e('by'); ?> <?//php the_author(',') ?></span>
	</div>

</div>

</div>

