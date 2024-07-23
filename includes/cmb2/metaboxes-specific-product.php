<?php
/**
 * Option Page
 *
 * @package lolly
 */

/**
 * Register option page and subpages
 */

add_action( 'cmb2_admin_init', 'lolly_register_metabox_specific_product', 10 );

function lolly_register_metabox_specific_product() {
	$show = apply_filters( 'lolly_show_product_specific_metabox', true );

	if ( ! $show ) {
		return;
	}

	$products = lolly_get_products();
	foreach ( $products as $product_slug => $product_name ) {
		/**
		 * Registers main options page menu item and form.
		 */
		$specific_product = new_cmb2_box(
			array(
				'id'           => 'lolly_specific_product_page_' . $product_slug,
				'title'        => esc_html__( $product_name . ' Content', 'lolly' ),
				'object_types' => array( 'options-page' ),
				'option_key'   => 'lolly_' . $product_slug . '_content',
			)
		);
	}
}


