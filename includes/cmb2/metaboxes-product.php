<?php
/**
 * Option Page
 *
 * @package lolly
 */

add_action( 'cmb2_admin_init', 'lolly_register_common_content_metabox_product' );
/**
 * Register option page and subpages
 */
function lolly_register_common_content_metabox_product() {
	$product_common = new_cmb2_box(
		array(
			'id'           => 'lolly_product_options_page',
			'title'        => esc_html__( 'Product', 'lolly' ),
			'object_types' => array( 'options-page' ),
			'option_key'   => 'lolly_product_common',
			'parent_slug'  => 'lolly_common_content',
		)
	);
	// footer_primary social icon.
	$product_common_group_id = $product_common->add_field(
		array(
			'id'         => 'lolly_products',
			'type'       => 'text',
			'repeatable' => true,
		)
	);
}



add_action( 'cmb2_admin_init', 'lolly_register_product_page_metaboxes' );

function lolly_register_product_page_metaboxes() {
	$product = new_cmb2_box(
		array(
			'id'           => 'product',
			'title'        => 'Product',
			'object_types' => array( 'page', 'lp' ),
			'show_on_cb'   => 'lolly_product_show_on_cb',
		)
	);

	$product->add_field(
		array(
			'name'             => 'Select Product',
			'desc'             => 'Choose the product that this page belongs to.',
			'id'               => 'page_meta_product',
			'type'             => 'select',
			'show_option_none' => 'No Product',
			'options_cb'       => 'lolly_get_products',
		)
	);
}

function lolly_product_show_on_cb( $product ) {
	$current_screen = get_current_screen();
	$display = true;
	
	return apply_filters( 'lolly_product_show_on', $display );
}
