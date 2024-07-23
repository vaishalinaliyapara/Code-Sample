<?php

add_action( 'cmb2_admin_init', 'lolly_default_page' );
/**
 * Define the metabox and field configurations.
 */
function lolly_default_page() {
	/**
	 * Initiate the metabox
	 */

	$default_page = new_cmb2_box(
		array(
			'id'           => 'default_page_content',
			'title'        => 'Content',
			'object_types' => array( 'page' , 'cb','meetings' ), // post type
			'show_on_cb'   => 'lolly_default_page_show_on_cb',
			'context'      => 'normal', // 'normal', 'advanced', or 'side'
			'show_names'   => true, // Show field names on the left
		)
	);
	$default_page->add_field(
		array(
			'name'    => 'Content Box',
			'id'      => 'default_content_box',
			'type'    => 'wysiwyg',
		)
	);
}
function lolly_default_page_show_on_cb() {
	$current_screen = get_current_screen();
	$display        = false;
	if ( 'page-wysiwyg.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'cb' === $current_screen->post_type ) {
		$display = true;
	} elseif ( 'meetings' === $current_screen->post_type ) {
		$display = true;
	} else {
		$display = true;
	}
	return apply_filters( 'lolly_default_page_show_on', $display );
}