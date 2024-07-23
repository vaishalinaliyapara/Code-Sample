<?php
/**
 * Option Page
 *
 * @package lolly
 */

add_action( 'cmb2_admin_init', 'lolly_register_pricing_page_offers' );
/**
 * Register option page and subpages
 */
function lolly_register_pricing_page_offers() {
	$pricing_common = new_cmb2_box(
		array(
			'id'           => 'lolly_pricing_offers',
			'title'        => esc_html__( 'Content for Pricing Offers', 'lolly' ),
			'object_types' => array( 'page', 'cb' ),
			'show_on_cb'   => 'lolly_pricing_show_on_cb',
			'context'      => 'normal',
			'show_names'   => true,
		)
	);
	// Pricing header.
	$pricing_header_group_id = $pricing_common->add_field(
		array(
			'id'         => 'lolly_pricing_header',
			'type'       => 'group',
			'repeatable' => false,
			'options'    => array(
				'group_title' => __( 'Pricing Header', 'lolly' ),
			),
		)
	);
	// add fields.
	$pricing_common->add_group_field(
		$pricing_header_group_id,
		array(
			'name'            => esc_html__( 'Pricing Title', 'lolly' ),
			'id'              => 'header_title',
			'type'            => 'text',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);
	// add fields.
	$pricing_common->add_group_field(
		$pricing_header_group_id,
		array(
			'name' => esc_html__( 'Pricing Description', 'lolly' ),
			'id'   => 'header_description',
			'type' => 'textarea_small',
		)
	);
	$pricing_common->add_group_field(
		$pricing_header_group_id,
		array(
			'name'    => esc_html__( 'Subscription Term Switch', 'lolly' ),
			'id'      => 'subscription_term_switch',
			'type'    => 'radio_inline',
			'options' => array(
				'show' => 'Show',
				'hide' => 'Hide',
			),
			'default' => 'hide',
		)
	);
	$pricing_common->add_group_field(
		$pricing_header_group_id,
		array(
			'name' => esc_html__( 'Discount for Annual Subscription (%)', 'lolly' ),
			'id'   => 'discount_annual',
			'type' => 'text',
		)
	);

	$pricing_common_group_id = $pricing_common->add_field(
		array(
			'id'         => 'lolly_pricing_offer',
			'type'       => 'group',
			'repeatable' => true,
			'options'    => array(
				'group_title'   => __( 'Pricing Offer {#}', 'lolly' ),
				'add_button'    => 'Add Another Offer',
				'remove_button' => 'Remove Offer',
				'closed'        => true,
			),
		)
	);
	// add fields.
	$pricing_common->add_group_field(
		$pricing_common_group_id,
		array(
			'name' => esc_html__( 'Offer Name ', 'lolly' ),
			'id'   => 'offer_name',
			'type' => 'text',
		)
	);
	// add fields.
	$pricing_common->add_group_field(
		$pricing_common_group_id,
		array(
			'name'    => esc_html__( 'Offer Icon ', 'lolly' ),
			'id'      => 'offer_icon',
			'type'    => 'file',
			// Optional.
			'options' => array(
				'url' => false,
			),
			'text'    => array(
				'add_upload_file_text' => 'Add Icon',
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
	// add fields.
	$pricing_common->add_group_field(
		$pricing_common_group_id,
		array(
			'name' => esc_html__( 'Offer Description ', 'lolly' ),
			'id'   => 'offer_description',
			'type' => 'text',
		)
	);
	// add fields.
	$pricing_common->add_group_field(
		$pricing_common_group_id,
		array(
			'name' => esc_html__( 'Offer Value in $', 'lolly' ),
			'id'   => 'offer_value',
			'type' => 'text',
		)
	);
	// add fields.
	$pricing_common->add_group_field(
		$pricing_common_group_id,
		array(
			'name' => esc_html__( 'Offer CTA Text ', 'lolly' ),
			'id'   => 'offer_cta_text',
			'type' => 'text',
		)
	);
	// add fields.
	$pricing_common->add_group_field(
		$pricing_common_group_id,
		array(
			'name' => esc_html__( 'Offer CTA Link ', 'lolly' ),
			'id'   => 'offer_cta_link',
			'type' => 'text_url',
		)
	);
	// add fields.
	$pricing_common->add_group_field(
		$pricing_common_group_id,
		array(
			'name'    => esc_html__( 'Offer Highlights ', 'lolly' ),
			'id'      => 'offer_highlights',
			'type'    => 'wysiwyg',
			'options' => array(
				'wpautop'       => false,
				'media_buttons' => false,
			),
		)
	);
	// add fields.
	$pricing_common->add_group_field(
		$pricing_common_group_id,
		array(
			'name'    => esc_html__( 'Slider Title ', 'lolly' ),
			'id'      => 'slider_visibility',
			'type'    => 'radio_inline',
			'options' => array(
				'show' => 'Show',
				'hide' => 'Hide',
			),
			'default' => 'hide',
		)
	);
	$pricing_common->add_group_field(
		$pricing_common_group_id,
		array(
			'name'    => 'Slider Range Data in JSON',
			'id'      => 'slider_data_jason',
			'type'    => 'textarea_code',
			'options' => array( 'disable_codemirror' => true ),
		)
	);
	// add fields.
	$pricing_common->add_group_field(
		$pricing_common_group_id,
		array(
			'name' => esc_html__( 'Slider Lower Limit ', 'lolly' ),
			'id'   => 'slider_lower_limit',
			'type' => 'text',
		)
	);
	// add fields.
	$pricing_common->add_group_field(
		$pricing_common_group_id,
		array(
			'name' => esc_html__( 'Slider Upper Limit ', 'lolly' ),
			'id'   => 'slider_upper_limit',
			'type' => 'text',
		)
	);
	// add fields.
	$pricing_common->add_group_field(
		$pricing_common_group_id,
		array(
			'name' => esc_html__( 'Badge', 'lolly' ),
			'id'   => 'offer_badge',
			'type' => 'text',
		)
	);
}
add_action( 'cmb2_admin_init', 'lolly_register_pricing_page_comparision' );
function lolly_register_pricing_page_comparision() {
	/**
	 * Initiate the metabox
	 */

	$pricing          = new_cmb2_box(
		array(
			'id'           => 'lolly_pricing_page_comparison',
			'title'        => 'Content for Pricing Comparison',
			'object_types' => array( 'page' ),
			'show_on'      => array(
				'key'   => 'page-template',
				'value' => array( 'page-pricing.php' ),
			),
			'context'      => 'normal',
			'show_names'   => true,
		)
	);
	$pricing_group_id = $pricing->add_field(
		array(
			'id'         => 'lolly_pricing_features',
			'type'       => 'group',
			'repeatable' => true,
			'options'    => array(
				'group_title'   => __( 'Product Feature {#}', 'lolly' ),
				'add_button'    => 'Add Another Feature',
				'remove_button' => 'Remove Feature',
				'closed'        => true,
			),
		)
	);
	$pricing->add_group_field(
		$pricing_group_id,
		array(
			'name' => esc_html__( 'Pricing Feature Name ', 'lolly' ),
			'id'   => 'pricing_feature_name',
			'type' => 'text',
		)
	);
	$pricing->add_group_field(
		$pricing_group_id,
		array(
			'name' => esc_html__( 'Pricing Feature Description', 'lolly' ),
			'id'   => 'pricing_feature_description',
			'type' => 'textarea',
		)
	);

	$current_post_id = $pricing->object_id;

	if ( 0 === $pricing->object_id && isset( $_POST['post_ID'] ) ) {
		$current_post_id = $_POST['post_ID'];
	}

	$offer_data = get_post_meta( $current_post_id, 'lolly_pricing_offer', true );
	if ( $offer_data ) {
		foreach ( $offer_data as $offer_key => $offer_item ) {
			$pricing = conditionally_add_pricing_field( $pricing, $pricing_group_id, $offer_key, $offer_item );
		}
	}
}
function conditionally_add_pricing_field( $cmb2, $group_id, $key, $value ) {
	$cmb2->add_group_field(
		$group_id,
		array(
			'name' => $value['offer_name'],
			'id'   => 'offer_' . ( $key + 1 ),
			'type' => 'checkbox',
		)
	);
	return $cmb2;
}

function lolly_pricing_show_on_cb() {
	$current_screen = get_current_screen();
	$display        = false;
	if ( 'page-pricing.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'cb' === $current_screen->post_type ) {
		$display = true;
	} else {
		$display = false;
	}
	return apply_filters( 'lolly_pricing_show_on', $display );
}