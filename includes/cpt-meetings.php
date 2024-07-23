<?php
/**
 * Registers the Meeting hook.
 * @since 1.0.0
 * @uses add_action()
 */

add_action( 'init' ,'cpt_lolly_meeting');

/**
 * Creates a new Meeting()
 * @since 1.0.0
 * @uses register_post_type()
 */

function cpt_lolly_meeting() {

	$labels = array(
		'name'               => _x( 'Meetings', 'post type general name', 'filed' ),
		'singular_name'      => _x( 'Meeting', 'post type singular name', 'filed' ),
		'menu_name'          => _x( 'Meetings', 'admin menu', 'filed' ),
		'name_admin_bar'     => _x( 'Meeting', 'add new on admin bar', 'filed' ),
		'add_new'            => _x( 'Add New', 'Meeting', 'filed' ),
		'add_new_item'       => __( 'Add New Meeting', 'filed' ),
		'new_item'           => __( 'New Meeting', 'filed' ),
		'edit_item'          => __( 'Edit Meeting', 'filed' ),
		'view_item'          => __( 'View Meeting', 'filed' ),
		'all_items'          => __( 'All Meetings', 'filed' ),
		'search_items'       => __( 'Search Meetings', 'filed' ),
		'parent_item_colon'  => __( 'Parent Meetings:', 'filed' ),
		'not_found'          => __( 'No Meetings found.', 'filed' ),
		'not_found_in_trash' => __( 'No Meetings found in Trash.', 'filed' )
	);

	$args = array(
		'labels'               => $labels, // An array of labels for this post type. 
        'description'          => 'CPT for Meetings', // A short descriptive summary of what the post type is.
		'public'               => true,    // Whether a post type is intended for use publicly either via the admin interface or by front-end users.
		'publicly_queryable'   => true,    // Whether queries can be performed on the front end for the post type as part of parse_request().
		'show_ui'              => true,    // Whether to generate and allow a UI for managing this post type in the admin.
		'show_in_menu'         => true,    // Whether to show this post type in admin menu. 
		'show_in_admin_bar'    => true,    // Whether to make this post available via adminn bar.
		'query_var'            => true,    // Triggers the handling of rewrites for this post type.
		'rewrite'              => true,	   // Sets the query_var key for this post type.
		'capability_type'      => 'page',  // The string to use to build the read, edit, and delete capabilities.
		'has_archive'          => false,    // Whether there should be post type archives, or if a string, the archive slug to use.
		'hierarchical'         => false,   // Whether the post type is hierarchical (e.g. page).
		'menu_position'        => null,    // The position in the menu order the post type should appear. default is null, means at the bottom.
		'exclude_from_search'  => true,   // Whether to exclude posts in this post type from fron-end search.
		'supports'             => array( 'title','thumbnail' ), // Core feature(s) the post type supports.
		'can_export'           => true,    // Whether to allow this post type to be exported. 
		'delete_with_user'     => null,    // Whether to delete posts of this type when deleting a user. If true, posts of this type belonging to the user will be moved to trash when then user is deleted. If false, posts of this type belonging to the user will *not* be trashed or deleted. 
	);

	register_post_type( 'meetings', $args ); // Registers the post type.
}

