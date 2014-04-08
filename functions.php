<?php 
require_once('include/wp-bootstrap-navwalker.php');
//Load script 
function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );


// // register menu
// function halo_menu_setup(){
 
  // register_nav_menu( 'primary', __( 'Primary Menu', 'mytheme' ) );
  
// }
// //run it when theme has been setup
// add_action( 'after_setup_theme', 'halo_menu_setup' );


/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
if ( ! function_exists( 'wpt_setup' ) ):
	function wpt_setup() { 
		register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
	} 
endif;


// function wpt_register_js() {
    // wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
    // wp_enqueue_script('jquery.bootstrap.min');
// }
// add_action( 'init', 'wpt_register_js' );
// function wpt_register_css() {
    // wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    // wp_enqueue_style( 'bootstrap.min' );
// }
// add_action( 'wp_enqueue_scripts', 'wpt_register_css' );






//Register Sidebars
if ( function_exists('register_sidebar') ){

register_sidebar(array(
'name' => 'Sidebar',
'description' => 'Widgets in this area will be shown in the sidebar.',
'before_widget' => '<div class="well sidebar-nav">',
'after_widget' => '</div>',
'before_title' => '<li class="nav-header">',
'after_title' => '</li>',
));

register_sidebar(array(
'name' => 'Sidebar_Cat1',
'description' => 'Widgets in this area will be shown in the category 1.',
'before_widget' => '<div class="well sidebar-nav">',
'after_widget' => '</div>',
'before_title' => '<li class="nav-header">',
'after_title' => '</li>',
));

register_sidebar(array(
'name' => 'Sidebar_Cat2',
'description' => 'Widgets in this area will be shown in the category 2.',
'before_widget' => '<div class="well sidebar-nav">',
'after_widget' => '</div>',
'before_title' => '<li class="nav-header">',
'after_title' => '</li>',
));

register_sidebar(array(
'name' => 'Sidebar_Cat3',
'description' => 'Widgets in this area will be shown in the category 3.',
'before_widget' => '<div class="well sidebar-nav">',
'after_widget' => '</div>',
'before_title' => '<li class="nav-header">',
'after_title' => '</li>',
));

register_sidebar(array(
'name' => 'Sidebar_Cat4',
'description' => 'Widgets in this area will be shown in the category 4.',
'before_widget' => '<div class="well sidebar-nav">',
'after_widget' => '</div>',
'before_title' => '<li class="nav-header">',
'after_title' => '</li>',
));

register_sidebar(array(
'name' => 'Sidebar_Cat5',
'description' => 'Widgets in this area will be shown in the category 5.',
'before_widget' => '<div class="well sidebar-nav">',
'after_widget' => '</div>',
'before_title' => '<li class="nav-header">',
'after_title' => '</li>',
));

register_sidebar(array(
'name' => 'Sidebar_Cat6',
'description' => 'Widgets in this area will be shown in the category 6.',
'before_widget' => '<div class="well sidebar-nav">',
'after_widget' => '</div>',
'before_title' => '<li class="nav-header">',
'after_title' => '</li>',
));

register_sidebar(array(
'name' => 'Sidebar_Cat7',
'description' => 'Widgets in this area will be shown in the category 7.',
'before_widget' => '<div class="well sidebar-nav">',
'after_widget' => '</div>',
'before_title' => '<li class="nav-header">',
'after_title' => '</li>',
));


register_sidebar(array(
'name' => 'Sidebar_Cat8',
'description' => 'Widgets in this area will be shown in the category 8.',
'before_widget' => '<div class="well sidebar-nav">',
'after_widget' => '</div>',
'before_title' => '<li class="nav-header">',
'after_title' => '</li>',
));


register_sidebar(array(
'name' => 'First Footer Area',
'description' => 'Widgets in this area will be shown in the footer - left side.',
'before_widget' => '<div class="footer-box">',
'after_widget' => '</div>',
'before_title' => '<h4>',
'after_title' => '</h4>',
));

register_sidebar(array(
'name' => 'Second Footer Area',
'description' => 'Widgets in this area will be shown in the footer - middle left.',
'before_widget' => '<div class="footer-box">',
'after_widget' => '</div>',
'before_title' => '<h4>',
'after_title' => '</h4>',
));

register_sidebar(array(
'name' => 'Third Footer Area',
'description' => 'Widgets in this area will be shown in the footer - middle right.',
'before_widget' => '<div class="footer-box">',
'after_widget' => '</div>',
'before_title' => '<h4>',
'after_title' => '</h4>',
));

register_sidebar(array(
'name' => 'Fourth Footer Area',
'description' => 'Widgets in this area will be shown in the footer - right side.',
'before_widget' => '<div class="footer-box">',
'after_widget' => '</div>',
'before_title' => '<h4>',
'after_title' => '</h4>',
));

}//if ( function_exists('register_sidebar') )


/*
Description: Get the top categoty ID 
Author: Han  
Date:2013/04/06
H2U: used in single.php
*/
function get_topCategoryID(){

  if ($current_category=single_cat_title('', false)){
     $currentID = get_cat_ID($current_category);
     return get_TopID($currentID);
  }

  $categories = get_the_category();
  //获取当前文章的分类信息，得到的是一个数组
  foreach($categories as $childcat) {
    $currentID = $childcat->cat_ID;
    $topCategoryID = get_TopID($currentID);
  }
  return $topCategoryID;
}
/*
Description: Get the top categoty ID through ID
*/
function get_TopID($currentID){

    $topCategoryID = $currentID;
    $category = get_category($currentID);

    $parentcat = $category->category_parent;
    while ($parentcat>0){
      $category = get_category($parentcat);
      $topCategoryID = $category->cat_ID;
      $parentcat = $category->category_parent;
    }
    return $topCategoryID;
}

/*Catch first image (post-thumbnail fallback) */
function catch_first_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];
  return $first_img;
}

/* debug function*/
function d($var){
	echo '<pre>';
	if (is_array($var)){
		var_dump($var);
	}elseif(is_string($var)){
		echo $var;
	}
	echo '</pre>';
}


function show_thumb(){ ?>
    <!-- 图片显示 Start-->
    <?php if (has_post_thumbnail()){ ?>

           <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
           <?php the_post_thumbnail('show'); ?>
           </a>

    <?php } else {

          $_path = catch_first_image();
         
            if(!empty($_path)){//Defines a default image ?> 
              <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
              <img class="home-thumb" src="<?php bloginfo('template_directory'); echo "/include/thumb.php?path=".$_path; ?>" width="400px" height="248px" alt="<?php the_title(); ?>"/></a>
            <?php 
            }// $_path=htmlentities($_path);?>

    <?php } ?>
    <?php
}//function show_thumb
          

function getPostViews($postID) {  //此函数用于输出文章浏览次数

    $count_key = 'post_views_count';

    $count = get_post_meta ( $postID, $count_key, true );// _post_meta()函数获取统一文章id，//用于返回同一数值

    if ($count == '') {

        delete_post_meta ( $postID, $count_key );

        add_post_meta ( $postID, $count_key, '0' );

        return 0;//如果从setPostViews()函数中读取到$count为空，则文章未被浏览//过

    }

    return $count;

}

 

function setPostViews($postID) {    //将文章id传到函数中，文章被采用一次，$count自加//1

    $count_key = 'post_views_count';

    $count = get_post_meta ( $postID, $count_key, true );

    if ($count == '') {

        $count = 0;

        delete_post_meta ( $postID, $count_key );

        add_post_meta ( $postID, $count_key, '0' );

    } else {

        $count ++;

        update_post_meta ( $postID, $count_key, $count );

    }

}


?>