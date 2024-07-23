<?php
/**
 * Metabox for CTA Section
 *
 * @package lolly
 */

add_action( 'cmb2_admin_init', 'lolly_cta_section_bottom' );
/**
 * Define the metabox and field configurations.
 */
function lolly_cta_section_bottom() {
	/**
	 * Initiate the metabox
	 */
	$cta_section_bottom = new_cmb2_box(
		array(
			'id'           => 'cta_section_bottom_content',
			'title'        => 'CTA Section Bottom Content',
			'object_types' => array( 'page', 'cb' ),
			'show_on_cb'   => 'lolly_cta_bottom_show_on_cb',
			'context'      => 'normal',
			'show_names'   => true,
		)
	);

	$cta_section_bottom_header_group_id = $cta_section_bottom->add_field(
		array(
			'id'         => 'cta_section_bottom_header',
			'type'       => 'group',
			'repeatable' => false,
			'options'    => array(
				'group_title' => __( 'CTA Section Bottom Header', 'lolly' ),
			),
		)
	);
	$cta_section_bottom->add_group_field(
		$cta_section_bottom_header_group_id,
		array(
			'name'            => esc_html__( 'CTA Section Header Title', 'lolly' ),
			'id'              => 'cta_section_bottom_header_title',
			'type'            => 'text',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);

	$cta_section_bottom->add_group_field(
		$cta_section_bottom_header_group_id,
		array(
			'name'            => esc_html__( 'CTA Section Header Description', 'lolly' ),
			'id'              => 'cta_section_bottom_header_description',
			'type'            => 'textarea',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);

	$cta_section_bottom_group_id = $cta_section_bottom->add_field(
		array(
			'id'         => 'cta_section_bottom',
			'type'       => 'group',
			'repeatable' => true,
			'options'    => array(
				'group_title' => __( 'CTA Section Bottom', 'lolly' ),
			),
		)
	);
	$cta_section_bottom->add_group_field(
		$cta_section_bottom_group_id,
		array(
			'name'            => esc_html__( 'CTA Section Title', 'lolly' ),
			'id'              => 'cta_section_bottom_title',
			'type'            => 'text',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);

	$cta_section_bottom->add_group_field(
		$cta_section_bottom_group_id,
		array(
			'name'            => esc_html__( 'CTA Section Description', 'lolly' ),
			'id'              => 'cta_section_bottom_description',
			'type'            => 'textarea',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);
	$cta_section_bottom->add_group_field(
		$cta_section_bottom_group_id,
		array(
			'name'    => 'CTA Section Image',
			'id'      => 'cta_section_bottom_image',
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
	$cta_section_bottom->add_group_field(
		$cta_section_bottom_group_id,
		array(
			'name'    => esc_html__( 'SVG Script', 'lolly' ),
			'id'      => 'cta_section_bottom_svg_script',
			'type'    => 'textarea_code',
			'options' => array(
				'disable_codemirror' => true,
			),
		)
	);

	// add fields.
	$cta_section_bottom->add_group_field(
		$cta_section_bottom_group_id,
		array(
			'name' => esc_html__( 'CTA Primary Text ', 'lolly' ),
			'id'   => 'cta_section_bottom_primary_text',
			'type' => 'text',
		)
	);
	$cta_section_bottom->add_group_field(
		$cta_section_bottom_group_id,
		array(
			'name' => esc_html__( 'CTA Primary Link ', 'lolly' ),
			'id'   => 'cta_section_bottom_primary_link',
			'type' => 'text_url',
		)
	);
}

function lolly_cta_bottom_show_on_cb() {
	$current_screen = get_current_screen();
	$display        = false;
	// if ( 'page-about.php' === get_page_template_slug() ) {
	// 	$display = true;
	// } 
	if ( 'page-pricing.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'page-request-pricing.php' === get_page_template_slug() ) {
		$display = true;
	}  elseif ( 'page-contact.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'cb' === $current_screen->post_type ) {
		$display = true;
	} else {
		$display = false;
	}
	return apply_filters( 'lolly_cta_bottom_show_on', $display );
}
