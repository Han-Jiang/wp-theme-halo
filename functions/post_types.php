<?php
//
// Include all custom post types here (one custom post type per file)
//

// require_once('post_types/services.php');
require_once('post_types/portfolio.php');
// require_once('post_types/clients.php');
// require_once('post_types/team.php');


add_action( 'init', 'ci_tax_create_taxonomies');
function ci_tax_create_taxonomies() {
	//
	// Create your taxonomies here.
	//
	
	$labels = array(
		'name' => _x( 'Skills', 'taxonomy general name', mustache ),
		'singular_name' => _x( 'Skill', 'taxonomy singular name', mustache ),
		'search_items' =>  __( 'Search Skills', mustache ),
		'all_items' => __( 'All Skills', mustache ),
		'parent_item' => __( 'Parent Skill', mustache ),
		'parent_item_colon' => __( 'Parent Skill:', mustache ),
		'edit_item' => __( 'Edit Skill', mustache ),
		'update_item' => __( 'Update Skill', mustache ),
		'add_new_item' => __( 'Add New Skill', mustache ),
		'new_item_name' => __( 'New Skill Name', mustache ),
	); 	
	register_taxonomy(
		"skill", 
		"portfolio", 
		array(
			"hierarchical" => true, 
			"labels" => $labels,
			"rewrite" => true
		));
		
}


add_action('admin_enqueue_scripts', 'ci_load_post_scripts');
function ci_load_post_scripts($hook)
{
	//
	// Add here all scripts and styles, to load on all admin pages.
	//
	
	
	if('post.php' == $hook or 'post-new.php' == $hook)
	{
		//
		// Add here all scripts and styles, specific on post edit screens.
		//

	}
}

?>
