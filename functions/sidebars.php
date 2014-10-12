<?php

function ci_widgets_init() {

	register_sidebar(array(
		'name' => __( 'Contact Sidebar', mustache),
		'id' => 'contact-sidebar',
		'description' => __( 'The list of widgets assigned here will appear in your Contact section.', mustache),
		'before_widget' => '<aside id="%1$s" class="widget %2$s group">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));
	
}
add_action( 'widgets_init', 'ci_widgets_init' );

?>
