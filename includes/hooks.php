<?php
/**
 * Hooks
 *
 * @package lolly
 */

add_filter( 'upload_mimes', 'lolly_mime_types' );
/**
 * Mimes.
 *
 * @param Array $mimes .
 */
function lolly_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

add_filter( 'use_block_editor_for_post', 'lolly_disable_guttenberg_for_page', 10, 2 );

/**
 * Guttenberg.
 *
 * @param Bool $use_block_editor .
 * @param Post $post .
 */
function lolly_disable_guttenberg_for_page( $use_block_editor, $post ) {
	// Enable Block Editor for post with ID 123.
	if ( 'page' === $post->post_type ) {
		return false;
	}
	return $use_block_editor;
}

add_action( 'init', 'ly_remove_editor_for_pages' );
/**
 * Remove editor support from pages.
 */
function ly_remove_editor_for_pages() {
	if ( 'page.php' !== get_page_template_slug() ) {
		remove_post_type_support( 'page', 'editor' );
	}
	remove_post_type_support( 'page', 'custom-fields' );
	remove_post_type_support( 'page', 'comments' );
}

/**
 * Edit editor capability
 */
function ly_edit_editor_cap() {
	$role = get_role( 'editor' );
	$role->add_cap( 'gravityforms_export_entries' );
}
add_action( 'admin_init', 'ly_edit_editor_cap' );

