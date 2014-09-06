<?php
//
// Menu Item Post Type related functions.
//
add_action('init', 'ci_create_cpt_portfolio');
add_action('admin_init', 'ci_add_cpt_portfolio_meta');
add_action('save_post', 'ci_update_cpt_portfolio_meta');

function ci_create_cpt_portfolio() {
	$labels = array(
		'name' => _x('Portfolios', 'post type general name', mustache),
		'singular_name' => _x('Portfolio', 'post type singular name', mustache),
		'add_new' => __('New Portfolio', mustache),
		'add_new_item' => __('Add New Portfolio', mustache),
		'edit_item' => __('Edit Portfolio', mustache),
		'new_item' => __('New Portfolio', mustache),
		'view_item' => __('View Portfolio', mustache),
		'search_items' => __('Search Portfolios', mustache),
		'not_found' =>  __('No Portfolios found', mustache),
		'not_found_in_trash' => __('No Portfolios found in the trash', mustache),
		'parent_item_colon' => __('Parent Portfolio:', mustache)
	);

	$args = array(
		'labels' => $labels,
		'singular_label' => __('Portfolio', mustache),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => false,
		'rewrite' => true,
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
	);

	register_post_type( 'portfolio' , $args );
}

function ci_add_cpt_portfolio_meta(){
	add_meta_box("ci_cpt_portfolio_meta", __('Portfolio Details', mustache), "ci_add_cpt_portfolio_meta_box", "portfolio", "normal", "high");
}

function ci_update_cpt_portfolio_meta($post_id){
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return;
	if (isset($_POST['post_view']) and $_POST['post_view']=='list') return;

	if (isset($_POST['post_type']) && $_POST['post_type'] == "portfolio")
	{
		update_post_meta($post_id, "ci_cpt_portfolio_on_homepage", (isset($_POST["ci_cpt_portfolio_on_homepage"]) ? $_POST["ci_cpt_portfolio_on_homepage"] : '') );
	}
}

function ci_add_cpt_portfolio_meta_box(){
	global $post;
	$on_homepage = get_post_meta($post->ID, 'ci_cpt_portfolio_on_homepage', true);
	?>
	<p><?php _e('You should upload your work you want to promote. You need to upload at least one image on this portfolio. You should also upload and/or select a Featured Image, so that it will be used as the cover of the portfolio.', mustache); ?></p>
	<input id="ci_cpt_portfolio_upload" type="text" class="button" value="<?php _e('Upload', mustache); ?>" />
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('#ci_cpt_portfolio_upload').click(function() {
				var url = $('#add_image').attr('href');
				if(typeof url === 'undefined') {
					url = $('#content-add_media').attr('href');
				}
				tb_show('', url);
				return false;
			});
		}); 
	</script>
	

	<?php

}
?>
