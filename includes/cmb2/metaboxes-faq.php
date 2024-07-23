<?php

add_action( 'cmb2_admin_init', 'lolly_pricing_faq' );
/**
 * Define the metabox and field configurations.
 */
function lolly_pricing_faq() {
	/**
	 * Initiate the metabox
	 */

	$faq                 = new_cmb2_box(
		array(
			'id'           => 'faq_content',
			'title'        => 'FAQ Content',
			'object_types' => array( 'page' , 'cb' ),
			'show_on_cb'   => 'lolly_faq_show_on_cb',
			'context'      => 'normal',
			'show_names'   => true,
		)
	);
	$faq_header_group_id = $faq->add_field(
		array(
			'id'         => 'faq_header',
			'type'       => 'group',
			'repeatable' => false,
			'options'    => array(
				'group_title' => __( 'FAQ Header', 'lolly' ),
			),
		)
	);
	$faq->add_group_field(
		$faq_header_group_id,
		array(
			'name'            => esc_html__( 'FAQ Header Title ', 'lolly' ),
			'id'              => 'faq_header_title',
			'type'            => 'text',
			'sanitization_cb' => 'lolly_sanitize_text',

		)
	);
	$faq->add_group_field(
		$faq_header_group_id,
		array(
			'name' => esc_html__( 'FAQ Header Description ', 'lolly' ),
			'id'   => 'faq_header_description',
			'type' => 'textarea',
		)
	);
	$faq_cta_group_id = $faq->add_field(
		array(
			'id'         => 'faq_cta',
			'type'       => 'group',
			'repeatable' => false,
			'options'    => array(
				'group_title' => __( 'FAQ CTA', 'lolly' ),
			),
		)
	);
	$faq->add_group_field(
		$faq_cta_group_id,
		array(
			'name' => esc_html__( 'FAQ CTA Text ', 'lolly' ),
			'id'   => 'faq_cta_text',
			'type' => 'text',
		)
	);
	$faq->add_group_field(
		$faq_cta_group_id,
		array(
			'name' => esc_html__( 'FAQ CTA Link ', 'lolly' ),
			'id'   => 'faq_cta_link',
			'type' => 'text_url',
		)
	);
	$faq_group_id = $faq->add_field(
		array(
			'id'         => 'faq',
			'type'       => 'group',
			'repeatable' => true,
			'options'    => array(
				'group_title'   => __( 'FAQ', 'lolly' ),
				'add_button'    => 'Add Another FAQ',
				'remove_button' => 'Remove FAQ',
				'closed'        => true,
			),
		)
	);
	$faq->add_group_field(
		$faq_group_id,
		array(
			'name' => esc_html__( 'FAQ Question ', 'lolly' ),
			'id'   => 'faq_question',
			'type' => 'text',
		)
	);
	$faq->add_group_field(
		$faq_group_id,
		array(
			'name' => esc_html__( 'FAQ Answer ', 'lolly' ),
			'id'   => 'faq_answer',
			'type' => 'wysiwyg',
		)
	);
}

function lolly_faq_show_on_cb() {
	$current_screen = get_current_screen();
	$display        = false;
	if ( 'page-pricing.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'page-faq.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'cb' === $current_screen->post_type ) {
		$display = true;
	} else {
		$display = false;
	}
	return apply_filters( 'lolly_faq_show_on', $display );
}