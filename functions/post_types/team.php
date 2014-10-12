<?php
//
// Menu Item Team Members related functions.
//
add_action('init', 'ci_create_cpt_team');

function ci_create_cpt_team() {
	$labels = array(
		'name' => _x('Team Members', 'post type general name', mustache),
		'singular_name' => _x('Team Member', 'post type singular name', mustache),
		'add_new' => __('New Team Member', mustache),
		'add_new_item' => __('Add New Team Member', mustache),
		'edit_item' => __('Edit Team Member', mustache),
		'new_item' => __('New Team Member', mustache),
		'view_item' => __('View Team Member', mustache),
		'search_items' => __('Search Team Members', mustache),
		'not_found' =>  __('No Team Members found', mustache),
		'not_found_in_trash' => __('No Team Members found in the trash', mustache),
		'parent_item_colon' => __('Parent Team Member:', mustache)
	);

	$args = array(
		'labels' => $labels,
		'singular_label' => __('Team Member', mustache),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => false,
		'rewrite' => true,
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'thumbnail')
	);

	register_post_type( 'Team Member' , $args );
}

?>
