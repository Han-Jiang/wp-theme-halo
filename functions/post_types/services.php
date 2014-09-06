<?php
//
// Menu Item Services related functions.
//
add_action('init', 'ci_create_cpt_services');

function ci_create_cpt_services() {
  $labels = array(
    'name' => _x('Services', 'post type general name', mustache),
    'singular_name' => _x('Service', 'post type singular name', mustache),
    'add_new' => __('New Service', mustache),
    'add_new_item' => __('Add New Service', mustache),
    'edit_item' => __('Edit Service', mustache),
    'new_item' => __('New Service', mustache),
    'view_item' => __('View Service', mustache),
    'search_items' => __('Search Services', mustache),
    'not_found' =>  __('No Services found', mustache),
    'not_found_in_trash' => __('No Services found in the trash', mustache),
    'parent_item_colon' => __('Parent Service:', mustache)
  );

  $args = array(
    'labels' => $labels,
    'singular_label' => __('Service', mustache),
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'has_archive' => false,
    'rewrite' => true,
    'menu_position' => 5,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail')
  );

  register_post_type( 'Service' , $args );
}

?>
