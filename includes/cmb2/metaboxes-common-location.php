<?php

add_action( 'cmb2_admin_init', 'lolly_location' );
/**
 * Define the metabox and field configurations.
 */
function lolly_location() {
	/**
	 * Initiate the metabox
	 */

	$location = new_cmb2_box(
		array(
			'id'           => 'lolly_location_option_page',
			'title'        => 'Location Content',
			'object_types' => array( 'options-page' ),
			'option_key'   => 'lolly_location',
			'parent_slug'  => 'lolly_common_content',
		)
	);

	$location_group_id = $location->add_field(
		array(
			'id'         => 'lolly_locations',
			'type'       => 'group',
			'repeatable' => true,
			'options'    => array(
				'group_title'   => __( 'Location {#}', 'lolly' ),
				'add_button'    => 'Add Another Location',
				'remove_button' => 'Remove Location',
				'closed'        => true,
			),
		)
	);

	// add field.

	$location->add_group_field(
		$location_group_id,
		array(
			'name' => esc_html__( 'Location Text', 'lolly' ),
			'id'   => 'location_name',
			'type' => 'text',
		)
	);

	$location->add_group_field(
		$location_group_id,
		array(
			'name' => esc_html__( 'Location Address', 'lolly' ),
			'id'   => 'location_address',
			'type' => 'textarea',
		)
	);
	$location->add_group_field(
		$location_group_id,
		array(
			'name' => esc_html__( 'Location Co-ordinates', 'lolly' ),
			'id'   => 'location_map',
			'type' => 'text_url',
		)
	);
}
