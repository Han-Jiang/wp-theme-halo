<?php
/*
Template Name: 时间轴归档
*/
?>
<?php get_header(); ?>  

<style type="text/css">

.archive-title{border-bottom:1px #eee solid;position:relative;padding-bottom:4px;margin-bottom:10px}    
.archives li a{padding:8px 0;display:block}
.archives li a:hover .atitle:after{background:#ff5c43}
.archives li a span{display: inline-block;width:100px;font-size:12px;text-indent:20px}
.archives li a .atitle{display: inline-block;padding:0 15px;position:relative}
.archives li a .atitle:after{position:absolute;left:-6px;background:#ccc;height:8px;width:8px;border-radius:6px;top:8px;content:""}
.archives li a .atitle:before{position:absolute;left:-8px;background:#fff;height:12px;width:12px;border-radius:6px;top:6px;content:""}
.archives{position:relative;padding:10px 0}
.archives:before{height:100%;width:4px;background:#eee;position:absolute;left:100px;content:"";top:0}
.m-title{position:relative;margin:10px 0;cursor:pointer}    
.m-title:hover:after{background:#ff5c43}
.m-title:before{position:absolute;left:93px;background:#fff;height:18px;width:18px;border-radius:6px;top:3px;content:""}
.m-title:after{position:absolute;left:96px;background:#ccc;height:12px;width:12px;border-radius:6px;top:6px;content:""}
</style>

    <div id="content" class="col-md-9" >

    <div class="archives">
        <?php
        $previous_year = $year = 0;
        $previous_month = $month = 0;
        $ul_open = false;

        $myposts = get_posts('numberposts=-1&orderby=post_date&order=DESC');

        foreach($myposts as $post) :
            setup_postdata($post);

            $year = mysql2date('Y', $post->post_date);
            $month = mysql2date('n', $post->post_date);
            $day = mysql2date('j', $post->post_date);

            if($year != $previous_year || $month != $previous_month) :
                if($ul_open == true) : 
                    echo '</ul>';
                endif;

                echo '<h3 class="m-title">'; echo the_time('Y-m'); echo '</h3>';
                echo '<ul class="archives-monthlisting">';
                $ul_open = true;

            endif;

            $previous_year = $year; $previous_month = $month;
        ?>
            <li>
                 <a href="<?php the_permalink(); ?>"><span><?php the_time('Y-m-j'); ?></span>
               <div class="atitle"><?php the_title(); ?></div></a>

            </li>
        <?php endforeach; ?>
        </ul>
    </div>
    </div>

<script type="text/javascript">
 jQuery(function($) {

    $('.archives ul.archives-monthlisting').hide();
    $('.archives ul.archives-monthlisting:first').show();
    $('.archives .m-title').click(function() {
        $(this).next().slideToggle('fast');
        return false;
    });
 });
    

</script>

<?php get_footer();?>