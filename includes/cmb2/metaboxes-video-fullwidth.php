<?php

add_action( 'cmb2_admin_init', 'lolly_video_fullwidth' );
/**
 * Define the metabox and field configurations.
 */
function lolly_video_fullwidth() {
	/**
	 * Initiate the metabox
	 */

	$video_fullwidth = new_cmb2_box(
		array(
			'id'           => 'video_fullwidth_content',
			'title'        => 'Video Fullwidth Content',
			'object_types' => array( 'page', 'cb' ), // post type,
			'show_on_cb'   => 'lolly_fullwidth_video_show_on_cb',
			'context'      => 'normal', // 'normal', 'advanced', or 'side'
			'show_names'   => true, // Show field names on the left
		)
	);
	$video_fullwidth->add_field(
		array(
			'name' => esc_html__( 'Embed Youtube Iframe', 'lolly' ),
			'id'   => 'video_fullwidth_youtube',
			'type' => 'textarea_code',
		)
	);
	$video_fullwidth->add_field(
		array(
			'name'    => esc_html__( 'Video Fullwidth', 'lolly' ),
			'id'      => 'video_fullwidth',
			'type'    => 'file',
			// Optional.
			'options' => array(
				'url' => false,
			),
			'text'    => array(
				'add_upload_file_text' => 'Add Video',
				'query_args'           => array(
					'type' => array(
						'video/mp4',
					),
				),
				'preview_size'         => 'medium',
			),
		)
	);
	$video_fullwidth->add_field(
		array(
			'name'    => esc_html__( 'Video Fullwidth', 'lolly' ),
			'id'      => 'video_fullwidth_thumbnail',
			'type'    => 'file',
			// Optional.
			'options' => array(
				'url' => false,
			),
			'text'    => array(
				'add_upload_file_text' => 'Add Thumbnail',
				'query_args'           => array(
					'type' => array(
						'image/jpeg',
						'image/png',
					),
				),
				'preview_size'         => 'medium',
			),
		)
	);
}

function lolly_fullwidth_video_show_on_cb() {
	$display = false;
	if ( 'front-page.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'page-product.php' === get_page_template_slug() ) {
		$display = true;
	} else {
		$display = false;
	}
	return apply_filters( 'lolly_fullwidth_video_show_on', $display );
}
