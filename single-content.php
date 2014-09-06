	 	<!-- 文章 -->	
		<div class="single_post_box col-md-10 col-md-offset-1">
			
			<center>
				<div class="single_post_title_box">
					<!--文章题目-->
					<div class="single_post_title">
						<h2><?php the_title(); ?></h2>
					</div>

					<!--文章元信息-->
					<div class="single_post_meta">
						<!--作者名字-->
						<span class="single_post_author">
							<?php //the_author_posts_link('name'); ?>
						</span> 
						
						<!--日期-->
						<span class="single_post_date">
							<?php the_time('Y-m-d') ?>
						</span>
						·
						<!--类别-->
						<span class="single_post_category">
							<?php the_category(', ') ?>
						</span>
						·
						<!--文章浏览次数-->
						<span class="single_post_views">
							<?php setPostViews(get_the_ID()); ?>
							<?php echo getPostViews(get_the_ID());?> Read
						</span>

						<!--评论数-->
						<span class="single_post_comment"> 
							<?php //comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
						</span>

						<!--编辑链接-->
						<span class="single_post_edit">
							<?php //edit_post_link('Edit', ' | ', ''); ?>
						</span>

						<!--标签-->
						<span class="single_post_tag">
							<?php //the_tags('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ', ', ', ''); ?>
						</span>

					</div>
				</div>
			</center>
			
			<!-- ****************显示文章正文********************* -->
			<div id="entry">
				<?php the_content(); ?>
				<?php //the_content('Read more...'); ?>
				<?php // wp_link_pages( array( 'before' => '<p class="pages">' . __( '日志分页:'), 'after' => '</p>' ) ); ?>
			</div>	

		</div><!--.single_post_box -->

		<div class="single-pre-next col-md-12 pager">
			<li class="clear"> <?php previous_post_link('%link','【上篇】%title') ?> </li>
			<li class="clear"> <?php next_post_link('%link','【下篇】%title') ?> </li>
		</div>
		
		