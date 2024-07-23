<?php

add_action( 'cmb2_admin_init', 'lolly_lp_content_block' );
/**
 * Define the metabox and field configurations.
 */
function lolly_lp_content_block() {
	/**
	 * Initiate the metabox
	 */

	$lp = new_cmb2_box(
		array(
			'id'           => 'lp_content_block',
			'title'        => 'Content Block',
			'object_types' => array( 'lp' ),
			'context'      => 'normal',
			'show_names'   => true,
		)
	);
	$lp->add_field(
		array(
			'name'             => 'Select Content Block',
			'desc'             => 'Choose the Content Block for the Landing Page.',
			'id'               => 'cb_for_lp',
			'type'             => 'select',
			'show_option_none' => 'No Content Block',
			'options_cb'       => 'lolly_available_content_block',
		)
	);
}

function lolly_available_content_block() {
	$cpt_args                = array(
		'post_type'      => 'cb',
		'posts_per_page' => 99,
	);
	$content_blocks_dropdown = array();
	$content_blocks          = new WP_Query( $cpt_args );
	while ( $content_blocks->have_posts() ) {
		$content_blocks->the_post();
		$content_blocks_dropdown[ get_the_ID() ] = get_the_title();

	}
	return $content_blocks_dropdown;
}
