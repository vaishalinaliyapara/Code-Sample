<?php
/**
 * Option Page
 *
 * @package lolly
 */

add_action( 'cmb2_admin_init', 'lolly_register_common_content_metabox_form' );
/**
 * Register option page and subpages
 */
function lolly_register_common_content_metabox_form() {
	$form_common = new_cmb2_box(
		array(
			'id'           => 'lolly_form_options_page',
			'title'        => esc_html__( 'Form', 'lolly' ),
			'object_types' => array( 'options-page' ),
			'option_key'   => 'lolly_form_common',
			'parent_slug'  => 'lolly_common_content',
		)
	);

	$form_common->add_field(
		array(
			'name'            => esc_html__( 'Confirmation Content Heading ', 'lolly' ),
			'id'              => 'confirmation_content_heading',
			'type'            => 'text',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);
	$form_common->add_field(
		array(
			'name'            => esc_html__( 'Confirmation Content Description ', 'lolly' ),
			'id'              => 'confirmation_content_description',
			'type'            => 'textarea',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);
	// primary group.
	$form_common_cta_group_id = $form_common->add_field(
		array(
			'id'         => 'confirmation_content_cta',
			'type'       => 'group',
			'repeatable' => false,
			'options'    => array(
				'group_title' => __( 'Confirmation Content CTA', 'lolly' ),
			),
		)
	);
	// add fields.
	$form_common->add_group_field(
		$form_common_cta_group_id,
		array(
			'name' => esc_html__( 'CTA Text ', 'lolly' ),
			'id'   => 'cta_text',
			'type' => 'text',
		)
	);
	$form_common->add_group_field(
		$form_common_cta_group_id,
		array(
			'name' => esc_html__( 'CTA Link ', 'lolly' ),
			'id'   => 'cta_link',
			'type' => 'text_url',
		)
	);
	$form_common->add_field(
		array(
			'name'    => 'Form Background Image',
			'id'      => 'form_background_image',
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
	$form_common->add_field(
		array(
			'name'    => 'Form Confirmation Image',
			'id'      => 'form_confirmation_image',
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
	$form_common->add_field(
		array(
			'name' => esc_html__( 'Form Confirmation Heading ', 'lolly' ),
			'id'   => 'form_confirmation_heading',
			'type' => 'text',
		)
	);
	$form_common->add_field(
		array(
			'name'            => esc_html__( 'Form Confirmation Description ', 'lolly' ),
			'id'              => 'form_confirmation_description',
			'type'            => 'textarea',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);
}