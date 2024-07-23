<?php

add_action( 'cmb2_admin_init', 'lolly_contact' );
/**
 * Define the metabox and field configurations.
 */
function lolly_contact() {
	/**
	 * Initiate the metabox
	 */

	$contact = new_cmb2_box(
		array(
			'id'           => 'contact_content',
			'title'        => 'Contact Content',
			'object_types' => array( 'page' , 'cb' ),
			'show_on_cb'   => 'lolly_contact_show_on_cb',
			'context'      => 'normal',
			'show_names'   => true,
		)
	);
	// add fields.
	$contact->add_field(
		array(
			'name'             => esc_html__( 'Form', 'lolly' ),
			'id'               => 'contact_page_form',
			'type'             => 'select',
			'show_option_none' => 'No Form',
			'options_cb'       => 'lolly_available_gravity_forms',

		)
	);
	$contact->add_field(
		array(
			'name' => esc_html__( 'Form title ', 'lolly' ),
			'id'   => 'contact_form_title',
			'type' => 'text',
		)
	);
	$contact->add_field(
		array(
			'name'    => 'Contact Form Background Image',
			'id'      => 'contact_form_background_image',
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
	
	$contact->add_field(
		array(
			'name' => esc_html__( 'Contact Headline ', 'lolly' ),
			'id'   => 'contact_headline',
			'type' => 'text',
		)
	);
	$contact->add_field(
		array(
			'name'            => esc_html__( 'Contact Description ', 'lolly' ),
			'id'              => 'contact_description',
			'type'            => 'textarea',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);
	$contact->add_field(
		array(
			'name' => esc_html__( 'Contact Bullet Points ', 'lolly' ),
			'id'   => 'contact_bullet_points',
			'type' => 'text',
			'repeatable' => true,
		)
	);
	// contact_secondary group.
	$contact_secondary_group_id = $contact->add_field(
		array(
			'id'         => 'contact_cta',
			'type'       => 'group',
			'repeatable' => false,
			'options'    => array(
				'group_title' => __( 'Contact CTA', 'lolly' ),
			),
		)
	);
	// add fields.
	$contact->add_group_field(
		$contact_secondary_group_id,
		array(
			'name' => esc_html__( 'Contact CTA Text ', 'lolly' ),
			'id'   => 'contact_cta_text',
			'type' => 'text',
		)
	);
	$contact->add_group_field(
		$contact_secondary_group_id,
		array(
			'name' => esc_html__( 'Contact CTA Link ', 'lolly' ),
			'id'   => 'contact_cta_link',
			'type' => 'text_url',
		)
	);
	$contact->add_field(
		array(
			'name'            => esc_html__( 'Contact Confirmation Heading ', 'lolly' ),
			'id'              => 'contact_confirmation_heading',
			'type'            => 'text',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);
	$contact->add_field(
		array(
			'name'            => esc_html__( 'Contact Confirmation Description ', 'lolly' ),
			'id'              => 'contact_confirmation_description',
			'type'            => 'textarea',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);
	// contact_primary group.
	$contact_primary_group_id = $contact->add_field(
		array(
			'id'         => 'contact_confirmation_cta',
			'type'       => 'group',
			'repeatable' => false,
			'options'    => array(
				'group_title' => __( 'Contact Confirmation CTA', 'lolly' ),
			),
		)
	);
	// add fields.
	$contact->add_group_field(
		$contact_primary_group_id,
		array(
			'name' => esc_html__( 'Contact Confirmation CTA Text ', 'lolly' ),
			'id'   => 'contact_confirmation_cta_text',
			'type' => 'text',
		)
	);
	$contact->add_group_field(
		$contact_primary_group_id,
		array(
			'name' => esc_html__( 'Contact Confirmation CTA Primary Link ', 'lolly' ),
			'id'   => 'contact_confirmation_cta_link',
			'type' => 'text_url',
		)
	);
	$contact->add_field(
		array(
			'name'    => 'Contact Form Confirmation Image',
			'id'      => 'contact_form_confirmation_image',
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
	$contact->add_field(
		array(
			'name' => esc_html__( 'Form Confirmation Heading ', 'lolly' ),
			'id'   => 'contact_form_confirmation_heading',
			'type' => 'text',
		)
	);
	$contact->add_field(
		array(
			'name'            => esc_html__( 'Form Confirmation Description ', 'lolly' ),
			'id'              => 'contact_form_confirmation_description',
			'type'            => 'textarea',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);
}

function lolly_contact_show_on_cb() {
	$current_screen = get_current_screen();
	$display        = false;
	if ( 'page-contact.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'cb' === $current_screen->post_type ) {
		$display = true;
	} else {
		$display = false;
	}
	return apply_filters( 'lolly_contact_show_on', $display );
}