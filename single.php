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

.single_post_meta{
	padding:3px;
	margin-top:5px;
	margin-bottom:15px;
	border-bottom:1px dashed  #ccc;
	border-top:1px dashed  #ccc;
}
</style>


 		<div id="content" class="col-md-9" >

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

<?php get_sidebar();?>
<?php get_footer();?>