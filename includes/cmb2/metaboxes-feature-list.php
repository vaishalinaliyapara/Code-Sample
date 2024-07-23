<?php
/**
 * Metabox for feature_list
 *
 * @package lolly
 */

add_action( 'cmb2_admin_init', 'lolly_feature_list' );
/**
 * Define the metabox and field configurations.
 */
function lolly_feature_list() {
	/**
	 * Initiate the metabox
	 */

	$feature_list = new_cmb2_box(
		array(
			'id'           => 'feature_list_content',
			'title'        => 'Feature List Content',
			'object_types' => array( 'page', 'cb' ),
			'show_on_cb'   => 'lolly_feature_list_show_on_cb',
			'context'      => 'normal',
			'show_names'   => true,
		)
	);
	// add field.
	$feature_list->add_field(
		array(
			'name' => esc_html__( 'Feature List Headline', 'lolly' ),
			'id'   => 'feature_list_headline',
			'type' => 'text',
		)
	);
	// features.
	$feature_list_features_group_id = $feature_list->add_field(
		array(
			'id'         => 'features',
			'type'       => 'group',
			'repeatable' => true,
			'options'    => array(
				'group_title' => __( 'Features', 'cmb2' ),
			),
		)
	);
	// add fields.
	$feature_list->add_group_field(
		$feature_list_features_group_id,
		array(
			'name'    => esc_html__( 'Features Icon ', 'lolly' ),
			'id'      => 'feature_icon',
			'type'    => 'file',
			// Optional:
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
	$feature_list->add_group_field(
		$feature_list_features_group_id,
		array(
			'name' => esc_html__( 'Features Heading ', 'lolly' ),
			'id'   => 'feature_heading',
			'type' => 'text',
		)
	);
	$feature_list->add_group_field(
		$feature_list_features_group_id,
		array(
			'name'            => esc_html__( 'Features Description ', 'lolly' ),
			'id'              => 'feature_description',
			'type'            => 'textarea',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);
	$feature_list->add_group_field(
		$feature_list_features_group_id,
		array(
			'name' => esc_html__( 'Features CTA Text ', 'lolly' ),
			'id'   => 'feature_cta_text',
			'type' => 'text',
		)
	);
	$feature_list->add_group_field(
		$feature_list_features_group_id,
		array(
			'name' => esc_html__( 'Features CTA Link ', 'lolly' ),
			'id'   => 'feature_cta_link',
			'type' => 'text_url',
		)
	);
}

function lolly_feature_list_show_on_cb() {
	$current_screen = get_current_screen();
	$display        = false;

	// if ( 'page-about.php' === get_page_template_slug() ) {
	// 	$display = true;
	// } 
	if ( 'page-product.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'page-request-pricing.php' === get_page_template_slug() ) {
		$display = true;
	}  elseif ( 'page-product-2.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'page-feature-2.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'cb' === $current_screen->post_type ) {
		$display = true;
	} else {
		$display = false;
	}
	return apply_filters( 'lolly_feature_list_show_on', $display );
}
