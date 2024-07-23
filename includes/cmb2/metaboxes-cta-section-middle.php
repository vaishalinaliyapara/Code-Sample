<?php
/**
 * Metabox for CTA Section
 *
 * @package lolly
 */

add_action( 'cmb2_admin_init', 'lolly_cta_section_middle' );
/**
 * Define the metabox and field configurations.
 */
function lolly_cta_section_middle() {
	/**
	 * Initiate the metabox
	 */

	$cta_section_middle          = new_cmb2_box(
		array(
			'id'           => 'cta_section_middle_content',
			'title'        => 'CTA Section Middle Content',
			'object_types' => array( 'page', 'cb' ),
			'show_on_cb'   => 'lolly_cta_middle_show_on_cb',
			'context'      => 'normal',
			'show_names'   => true,
		)
	);
	$cta_section_middle_header_group_id = $cta_section_middle->add_field(
		array(
			'id'         => 'cta_section_middle_header',
			'type'       => 'group',
			'repeatable' => false,
			'options'    => array(
				'group_title' => __( 'CTA Section Middle Header', 'lolly' ),
			),
		)
	);
	$cta_section_middle->add_group_field(
		$cta_section_middle_header_group_id,
		array(
			'name'            => esc_html__( 'CTA Section Header Title', 'lolly' ),
			'id'              => 'cta_section_middle_header_title',
			'type'            => 'text',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);

	$cta_section_middle->add_group_field(
		$cta_section_middle_header_group_id,
		array(
			'name'            => esc_html__( 'CTA Section Header Description', 'lolly' ),
			'id'              => 'cta_section_middle_header_description',
			'type'            => 'textarea',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);

	$cta_section_middle_group_id = $cta_section_middle->add_field(
		array(
			'id'         => 'cta_section_middle',
			'type'       => 'group',
			'repeatable' => true,
			'options'    => array(
				'group_title' => __( 'CTA Section Middle', 'lolly' ),
			),
		)
	);
	$cta_section_middle->add_group_field(
		$cta_section_middle_group_id,
		array(
			'name'            => esc_html__( 'CTA Section Title', 'lolly' ),
			'id'              => 'cta_section_middle_title',
			'type'            => 'text',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);

	$cta_section_middle->add_group_field(
		$cta_section_middle_group_id,
		array(
			'name'            => esc_html__( 'CTA Section Description', 'lolly' ),
			'id'              => 'cta_section_middle_description',
			'type'            => 'textarea',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);
	$cta_section_middle->add_group_field(
		$cta_section_middle_group_id,
		array(
			'name'    => 'CTA Section Image',
			'id'      => 'cta_section_middle_image',
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
	$cta_section_middle->add_group_field(
		$cta_section_middle_group_id,
		array(
			'name'    => esc_html__( 'SVG Script', 'lolly' ),
			'id'      => 'cta_section_middle_svg_script',
			'type'    => 'textarea_code',
			'options' => array(
				'disable_codemirror' => true,
			),
		)
	);

	// add fields.
	$cta_section_middle->add_group_field(
		$cta_section_middle_group_id,
		array(
			'name' => esc_html__( 'CTA Primary Text ', 'lolly' ),
			'id'   => 'cta_section_middle_primary_text',
			'type' => 'text',
		)
	);
	$cta_section_middle->add_group_field(
		$cta_section_middle_group_id,
		array(
			'name' => esc_html__( 'CTA Primary Link ', 'lolly' ),
			'id'   => 'cta_section_middle_primary_link',
			'type' => 'text_url',
		)
	);
}

function lolly_cta_middle_show_on_cb() {
	$current_screen = get_current_screen();
	$display        = false;
	// if ( 'page-about.php' === get_page_template_slug() ) {
	// 	$display = true;
	// } 
	if ( 'cb' === $current_screen->post_type ) {
		$display = true;
	} elseif ( 'page-request-pricing.php' === get_page_template_slug() ) {
		$display = true;
	}  else {
		$display = false;
	}
	return apply_filters( 'lolly_cta_middle_show_on', $display );
}