<?php
/**
 * Metabox for Metrics
 *
 * @package lolly
 */

add_action( 'cmb2_admin_init', 'lolly_metrics' );
/**
 * Define the metabox and field configurations.
 */
function lolly_metrics() {
	/**
	 * Initiate the metabox
	 */

	$metrics = new_cmb2_box(
		array(
			'id'           => 'metrics_content',
			'title'        => 'Metrics Content',
			'object_types' => array( 'page', 'cb' ),
			'show_on_cb'   => 'lolly_metrics_show_on_cb',
			'context'      => 'normal',
			'show_names'   => true,
		)
	);
	// add field.
	$metrics->add_field(
		array(
			'name' => esc_html__( 'Metrics Headline', 'lolly' ),
			'id'   => 'metrics_headline',
			'type' => 'text',
		)
	);
	// metrics cta primary group.
	$metrics_cta_primary_group_id = $metrics->add_field(
		array(
			'id'         => 'metrics_cta_primary',
			'type'       => 'group',
			'repeatable' => false,
			'options'    => array(
				'group_title' => __( 'Metrics CTA Primary', 'cmb2' ),
			),
		)
	);
	// add fields.
	$metrics->add_group_field(
		$metrics_cta_primary_group_id,
		array(
			'name' => esc_html__( 'Metrics CTA Primary Text ', 'lolly' ),
			'id'   => 'metrics_cta_primary_text',
			'type' => 'text',
		)
	);
	$metrics->add_group_field(
		$metrics_cta_primary_group_id,
		array(
			'name' => esc_html__( 'Metrics CTA Primary Link ', 'lolly' ),
			'id'   => 'metrics_cta_primary_link',
			'type' => 'text_url',
		)
	);
	// metrics cta secondary group.
	$metrics_cta_secondary_group_id = $metrics->add_field(
		array(
			'id'         => 'metrics_cta_secondary',
			'type'       => 'group',
			'repeatable' => false,
			'options'    => array(
				'group_title' => __( 'Metrics Secondary CTA', 'lolly' ),
			),
		)
	);
	// add fields.
	$metrics->add_group_field(
		$metrics_cta_secondary_group_id,
		array(
			'name' => esc_html__( 'Metrics Secondary CTA Text ', 'lolly' ),
			'id'   => 'metrics_cta_secondary_text',
			'type' => 'text',
		)
	);
	$metrics->add_group_field(
		$metrics_cta_secondary_group_id,
		array(
			'name' => esc_html__( 'Metrics Secondary CTA Link', 'lolly' ),
			'id'   => 'metrics_cta_secondary_link',
			'type' => 'text_url',
		)
	);
	// metrics Cards group.
	$metrics_card_group_id = $metrics->add_field(
		array(
			'id'         => 'metrics_card',
			'type'       => 'group',
			'repeatable' => true,
			'options'    => array(
				'group_title' => __( 'Metrics Card', 'cmb2' ),
			),
		)
	);
	// add fields.
	$metrics->add_group_field(
		$metrics_card_group_id,
		array(
			'name'            => esc_html__( 'Metrics Card Data ', 'lolly' ),
			'id'              => 'metrics_card_data',
			'type'            => 'text',
			'sanitization_cb' => 'lolly_sanitize_text',
		)
	);
	$metrics->add_group_field(
		$metrics_card_group_id,
		array(
			'name' => esc_html__( 'Metrics Card Description ', 'lolly' ),
			'id'   => 'metrics_card_description',
			'type' => 'text',
		)
	);
}

function lolly_metrics_show_on_cb() {
	$current_screen = get_current_screen();
	$display        = false;
	// if ( 'page-about.php' === get_page_template_slug() ) {
	// 	$display = true;
	// } 
	if ( 'front-page.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'page-request-pricing.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'cb' === $current_screen->post_type ) {
		$display = true;
	} else {
		$display = false;
	}
	return apply_filters( 'lolly_metrics_show_on', $display );
}


