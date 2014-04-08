<div class="col-md-3">
      <?php include (TEMPLATEPATH . '/include/article-list.php'); 
      show_article_list(1);
      show_article_list(2);
      ?>
</div>


<?php
      if ( function_exists('dynamic_sidebar') &&
               dynamic_sidebar('Sidebar_Cat1') ) : 
      endif; 

    //  $topCatID = get_topCategoryID();
    // // echo "<pre>TopCat is $topCatID <br>Name is ".get_cat_name($topCatID).'</pre>';

    // // echo "<br>single_cat_title is <pre>";
    // // var_dump(single_cat_title('', false));
    // // echo "</pre>";

    // if ( $topCatID == 1 ) {
    //   if ( function_exists('dynamic_sidebar') &&
    //            dynamic_sidebar('Sidebar_Cat1') ) : 
    //   endif; 
    // }

    // if ( $topCatID == 2 ) {
    //   if ( function_exists('dynamic_sidebar') &&
    //            dynamic_sidebar('Sidebar_Cat2') ) : 
    //   endif; 
    // }

    // if ( $topCatID == 3  ) {
    //   if ( function_exists('dynamic_sidebar') &&
    //            dynamic_sidebar('Sidebar_Cat3') ) : 
    //   endif; 
    // }

    // if ( $topCatID == 4  ) {
    //   if ( function_exists('dynamic_sidebar') &&
    //            dynamic_sidebar('Sidebar_Cat4') ) : 
    //   endif; 
    // }

    // if ( $topCatID == 5  ) {
    //   if ( function_exists('dynamic_sidebar') &&
    //            dynamic_sidebar('Sidebar_Cat5') ) : 
    //   endif; 
    // }

    // if ( $topCatID == 6  ) {
    //   if ( function_exists('dynamic_sidebar') &&
    //            dynamic_sidebar('Sidebar_Cat6') ) : 
    //   endif; 
    // }

    // if ( $topCatID == 7  ) {
    //   if ( function_exists('dynamic_sidebar') &&
    //            dynamic_sidebar('Sidebar_Cat7') ) : 
    //   endif; 
    // }

    // if ( $topCatID == 8  ) {
    //   if ( function_exists('dynamic_sidebar') &&
    //            dynamic_sidebar('Sidebar_Cat8') ) : 
    //   endif; 
    // }

?>

