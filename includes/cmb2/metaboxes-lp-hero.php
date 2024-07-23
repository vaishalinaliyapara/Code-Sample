<?php

add_action( 'cmb2_admin_init', 'lolly_lp_hero' );
/**
 * Define the metabox and field configurations.
 */
function lolly_lp_hero() {
	/**
	 * Initiate the metabox
	 */

	$contact = new_cmb2_box(
		array(
			'id'           => 'lp_hero_content',
			'title'        => 'Hero Content',
			'object_types' => array( 'lp' ),
			'context'      => 'normal',
			'show_names'   => true,
		)
	);
	// add fields.
	$contact->add_field(
		array(
			'name'             => esc_html__( 'Form', 'lolly' ),
			'id'               => 'lp_hero_form',
			'type'             => 'select',
			'show_option_none' => 'No Form',
			'options_cb'       => 'lolly_available_gravity_forms',

		)
	);
	$contact->add_field(
		array(
			'name' => esc_html__( 'Form title ', 'lolly' ),
			'id'   => 'lp_hero_form_title',
			'type' => 'text',
		)
	);

	$contact->add_field(
		array(
			'name'            => esc_html__( 'Headline ', 'lolly' ),
			'id'              => 'lp_hero_headline',
			'type'            => 'text',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);
	$contact->add_field(
		array(
			'name'            => esc_html__( 'Description ', 'lolly' ),
			'id'              => 'lp_hero_description',
			'type'            => 'textarea',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);
}