<?php get_header(); ?>

<div class="container">
      
    <div class="row">

<!-- 正文字体放大缩小-->
<script type="text/javascript">
    function doZoom(size) {
        var zoom = document.all ? document.all['entry'] : document.getElementById('entry');
        zoom.style.fontSize = size + 'px';
    }
</script>

 		<div id="content" class="col-md-12" >

         <?php include (TEMPLATEPATH . '/include/breadcrumb.php'); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
	    <?php if(in_category('cs')){ ?>
    
           <div class="entry">
                <br><br>
                <h2>所有技术相关文章已经已经转移到新网站 juicecode.org<br>请移步至此文在新网站上的链接:</h2>
                <br>
                <a href="http://www.juicecode.org/archives/<?php the_ID(); ?>"><h1><?php the_title(); ?></h1></a>
                <br><br>
                <br>
			</div>
            
        <?php }else{
        	include_once "single-content.php";
        } ?>	

    	<?php endwhile; else: ?>
    	<?php endif; ?>	
	
</div>
<!-- end: single -->
  </div><!--/.row-->
</div><!--/.container-->
<?php get_footer();?>