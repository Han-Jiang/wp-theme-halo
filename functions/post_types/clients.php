<?php
//
// Menu Item Clients related functions.
//
add_action('init', 'ci_create_cpt_clients');

function ci_create_cpt_clients() {
  $labels = array(
    'name' => _x('Clients', 'post type general name', mustache),
    'singular_name' => _x('Client', 'post type singular name', mustache),
    'add_new' => __('New Client', mustache),
    'add_new_item' => __('Add New Client', mustache),
    'edit_item' => __('Edit Client', mustache),
    'new_item' => __('New Client', mustache),
    'view_item' => __('View Client', mustache),
    'search_items' => __('Search Clients', mustache),
    'not_found' =>  __('No Clients found', mustache),
    'not_found_in_trash' => __('No Clients found in the trash', mustache),
    'parent_item_colon' => __('Parent Client:', mustache)
  );

  $args = array(
    'labels' => $labels,
    'singular_label' => __('Client', mustache),
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'has_archive' => false,
    'rewrite' => true,
    'menu_position' => 5,
    'supports' => array('title', 'editor', 'thumbnail')
  );

  register_post_type( 'Client' , $args );
}

?>
