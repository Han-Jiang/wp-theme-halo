
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
			<h2><?php the_title(); ?></h2> 
		</a>
	</div>

	<div class="archive_meta pull-right">
		<span class="archive_date"><?php the_time('Y/m/d') ?></span>
		<span class="archive_author"><?//php _e('by'); ?> <?//php the_author(',') ?></span>
	</div>

</div>

</div>

