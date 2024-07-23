<?php
/**
 * Metabox for CTA Section
 *
 * @package lolly
 */

add_action( 'cmb2_admin_init', 'lolly_cta_section_top' );
/**
 * Define the metabox and field configurations.
 */
function lolly_cta_section_top() {
	/**
	 * Initiate the metabox
	 */

	$cta_section_top          = new_cmb2_box(
		array(
			'id'           => 'cta_section_top_content',
			'title'        => 'CTA Section Top Content',
			'object_types' => array( 'page', 'cb' ),
			'show_on_Cb'   => 'lolly_cta_top_show_on_cb',
			'context'      => 'normal',
			'show_names'   => true,
		)
	);
	$cta_section_top_group_id = $cta_section_top->add_field(
		array(
			'id'         => 'cta_section_top',
			'type'       => 'group',
			'repeatable' => false,
			'options'    => array(
				'group_title' => __( 'CTA Section Top', 'lolly' ),
			),
		)
	);
	// add field.
	$cta_section_top->add_group_field(
		$cta_section_top_group_id,
		array(
			'name' => esc_html__( 'CTA Section Subtitle', 'lolly' ),
			'id'   => 'cta_section_top_subtitle',
			'type' => 'text',
		)
	);
	$cta_section_top->add_group_field(
		$cta_section_top_group_id,
		array(
			'name'            => esc_html__( 'CTA Section Title', 'lolly' ),
			'id'              => 'cta_section_top_title',
			'type'            => 'text',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);

	$cta_section_top->add_group_field(
		$cta_section_top_group_id,
		array(
			'name'            => esc_html__( 'CTA Section Description', 'lolly' ),
			'id'              => 'cta_section_top_description',
			'type'            => 'textarea',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);
	$cta_section_top->add_group_field(
		$cta_section_top_group_id,
		array(
			'name'    => 'CTA Section Image',
			'id'      => 'cta_section_top_image',
			'type'    => 'file',
			// Optional.
			'options' => array(
				'url' => false,
			),
			'text'    => array(
				'add_upload_file_text' => 'Add Image',
				'query_args'           => array(
					'type' => array(
						'image/gif',
						'image/jpeg',
						'image/png',
						'image/svg',
					),
				),
				'preview_size'         => 'medium',
			),
		)
	);
	$cta_section_top->add_group_field(
		$cta_section_top_group_id,
		array(
			'name'    => 'CTA Section Video MP4',
			'id'      => 'cta_section_top_video_mp4',
			'type'    => 'file',
			// Optional.
			'options' => array(
				'url' => false,
			),
			'text'    => array(
				'add_upload_file_text' => 'Add Video',
				'query_args'           => array(
					'type' => array(
						'image/gif',
						'image/jpeg',
						'image/png',
						'image/svg',
					),
				),
				'preview_size'         => 'medium',
			),
		)
	);
	$cta_section_top->add_group_field(
		$cta_section_top_group_id,
		array(
			'name'    => 'CTA Section Video WebM',
			'id'      => 'cta_section_top_video_webm',
			'type'    => 'file',
			// Optional.
			'options' => array(
				'url' => false,
			),
			'text'    => array(
				'add_upload_file_text' => 'Add Video',
				'query_args'           => array(
					'type' => array(
						'image/gif',
						'image/jpeg',
						'image/png',
						'image/svg',
					),
				),
				'preview_size'         => 'medium',
			),
		)
	);
	$cta_section_top->add_group_field(
		$cta_section_top_group_id,
		array(
			'name'    => esc_html__( 'SVG Script', 'lolly' ),
			'id'      => 'cta_section_top_svg_script',
			'type'    => 'textarea_code',
			'options' => array(
				'disable_codemirror' => true,
			),
		)
	);
	// add fields.
	$cta_section_top->add_group_field(
		$cta_section_top_group_id,
		array(
			'name' => esc_html__( 'CTA Primary Text ', 'lolly' ),
			'id'   => 'cta_section_top_primary_text',
			'type' => 'text',
		)
	);
	$cta_section_top->add_group_field(
		$cta_section_top_group_id,
		array(
			'name' => esc_html__( 'CTA Primary Link ', 'lolly' ),
			'id'   => 'cta_section_top_primary_link',
			'type' => 'text_url',
		)
	);

	// add fields.
	$cta_section_top->add_group_field(
		$cta_section_top_group_id,
		array(
			'name' => esc_html__( 'CTA Secondary Text', 'lolly' ),
			'id'   => 'cta_section_top_secondary_text',
			'type' => 'text',
		)
	);
	$cta_section_top->add_group_field(
		$cta_section_top_group_id,
		array(
			'name' => esc_html__( 'CTA Secondary Link ', 'lolly' ),
			'id'   => 'cta_section_top_secondary_link',
			'type' => 'text_url',
		)
	);
}

function lolly_cta_top_show_on_cb() {
	$current_screen = get_current_screen();
	$display        = false;
	if ( 'page-about.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'front-page.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'page-product.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'page-feature.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'cb' === $current_screen->post_type ) {
		$display = true;
	} else {
		$display = false;
	}
	return apply_filters( 'lolly_cta_top_show_on', $display );
}