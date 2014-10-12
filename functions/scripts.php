<?php
// add_action('init', 'ci_register_theme_scripts');
// function ci_register_theme_scripts()
// {
// 	//
// 	// Register all front-end scripts here. There is no need to register them conditionally.
// 	//
// 	wp_register_script('isotope', get_template_directory_uri().'/js/jquery.isotope.min.js', array('jquery'), false, true);
// 	// wp_register_script('fancybox', get_template_directory_uri().'/fancybox/jquery.fancybox.pack.js', array('jquery'), false, true);
// 	wp_register_script('smoothscroll', get_template_directory_uri().'/js/jquery.smooth-scroll.min.js', array('jquery'), false, true);
// 	wp_register_script('ci-front-scripts', get_template_directory_uri().'/js/scripts.js', array('jquery', 'isotope','smoothscroll'), false, true);

// }

// add_action('wp_enqueue_scripts', 'ci_enqueue_theme_scripts');
// function ci_enqueue_theme_scripts()
// {
// 	//
// 	// Enqueue all (or most) front-end scripts here.
// 	// They can be also enqueued from within template files.
// 	//
	
// 	wp_enqueue_script('ci-front-scripts');

// }



//Load script 
function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	//Register animation script
	wp_register_script('isotope', get_template_directory_uri().'/js/jquery.isotope.min.js', array('jquery'), false, true);
	//Register animation script back to top
	wp_register_script('smoothscroll', get_template_directory_uri().'/js/jquery.smooth-scroll.min.js', array('jquery'), false, true);

	wp_register_script('Hitomi-Script', get_template_directory_uri().'/js/scripts.js', array('jquery', 'bootstrap','isotope','smoothscroll'), false, true);

	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'Hitomi-Script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );



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
?>
