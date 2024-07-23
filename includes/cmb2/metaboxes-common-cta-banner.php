<?php

add_action( 'cmb2_admin_init', 'lolly_cta_banner' );
/**
 * Define the metabox and field configurations.
 */
function lolly_cta_banner() {
	/**
	 * Initiate the metabox
	 */

	$cta_banner = new_cmb2_box(
		array(
			'id'           => 'lolly_cta_banner_option_page',
			'title'        => 'CTA Banner Content',
			'object_types' => array( 'options-page' ),
			'option_key'   => 'lolly_cta_banner',
			'parent_slug'  => 'lolly_common_content',
		)
	);

	// add field.

	$cta_banner->add_field(
		array(
			'name' => esc_html__( 'CTA Banner Text', 'lolly' ),
			'id'   => 'cta_banner_text',
			'type' => 'text',
		)
	);
	$cta_banner_background_image_group_id = $cta_banner->add_field(
		array(
			'id'         => 'cta_banner_background_image',
			'type'       => 'group',
			'repeatable' => false,
			'options'    => array(
				'group_title' => __( 'CTA Banner Background Image', 'lolly' ),
				'closed'      => true,
			),
		)
	);
	$cta_banner                           = conditionally_add_image_field( $cta_banner, $cta_banner_background_image_group_id, 'background' );

	$cta_banner_foreground_image_group_id_1 = $cta_banner->add_field(
		array(
			'id'         => 'cta_banner_foreground_image_1',
			'type'       => 'group',
			'repeatable' => false,
			'options'    => array(
				'group_title' => __( 'CTA Banner Foreground Image 1', 'lolly' ),
				'closed'      => true,
			),
		)
	);
	$cta_banner = conditionally_add_image_field( $cta_banner, $cta_banner_foreground_image_group_id_1, 'foreground' );

	$cta_banner_foreground_image_group_id_2 = $cta_banner->add_field(
		array(
			'id'         => 'cta_banner_foreground_image_2',
			'type'       => 'group',
			'repeatable' => false,
			'options'    => array(
				'group_title' => __( 'CTA Banner Foreground Image 2', 'lolly' ),
				'closed'      => true,
			),
		)
	);
	$cta_banner = conditionally_add_image_field( $cta_banner, $cta_banner_foreground_image_group_id_2, 'foreground' );

	$cta_banner_cta_group_id = $cta_banner->add_field(
		array(
			'id'         => 'cta_banner_cta',
			'type'       => 'group',
			'repeatable' => false,
			'options'    => array(
				'group_title' => __( 'CTA Banner CTA', 'lolly' ),
			),
		)
	);
	// add fields.
	$cta_banner->add_group_field(
		$cta_banner_cta_group_id,
		array(
			'name' => esc_html__( ' CTA Text ', 'lolly' ),
			'id'   => 'cta_text',
			'type' => 'text',
		)
	);
	$cta_banner->add_group_field(
		$cta_banner_cta_group_id,
		array(
			'name' => esc_html__( 'CTA Link ', 'lolly' ),
			'id'   => 'cta_link',
			'type' => 'text_url',
		)
	);
}

function conditionally_add_image_field( $cmb2, $group_id, $placement ) {
	$cmb2->add_group_field(
		$group_id,
		array(
			'name'    => ucfirst( $placement ) . ' Mobile Image',
			'id'      => $placement . '_mobile_image',
			'type'    => 'file',
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
				'preview_size'         => 'small',
			),
		)
	);
	$cmb2->add_group_field(
		$group_id,
		array(
			'name'    => ucfirst( $placement ) . ' Desktop Image',
			'id'      => $placement . '_desktop_image',
			'type'    => 'file',
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
				'preview_size'         => 'small',
			),
		)
	);
	return $cmb2;
}
