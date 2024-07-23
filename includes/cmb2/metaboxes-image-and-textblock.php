<?php

add_action( 'cmb2_admin_init', 'lolly_image_textbox' );
/**
 * Define the metabox and field configurations.
 */
function lolly_image_textbox() {
	/**
	 * Initiate the metabox
	 */

	$image_textbox = new_cmb2_box(
		array(
			'id'           => 'image_textbox_content',
			'title'        => 'Image Textbox Content',
			'object_types' => array( 'page', 'cb' ),
			'show_on_cb'   => 'lolly_media_text_block_show_on_cb',
			'context'      => 'normal',
			'show_names'   => true,
		)
	);

	$image_textbox_group_id = $image_textbox->add_field(
		array(
			'id'         => 'image_textbox',
			'type'       => 'group',
			'repeatable' => true,
			'options'    => array(
				'group_title' => __( 'Image Textbox', 'lolly' ),
			),
		)
	);

	// add field.
	$image_textbox->add_group_field(
		$image_textbox_group_id,
		array(
			'name'    => 'Image Textbox Image',
			'id'      => 'image_textbox_image',
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
				'preview_size'         => 'medium',
			),
		)
	);
	$image_textbox->add_group_field(
		$image_textbox_group_id,
		array(
			'name'    => 'Image Textbox Video MP4',
			'id'      => 'image_textbox_video_mp4',
			'type'    => 'file',
			// Optional:
			'options' => array(
				'url' => false,
			),
			'text'    => array(
				'add_upload_file_text' => 'Add MP4 Video',
				'query_args'           => array(
					'type' => array(
						'video/mp4',
					),
				),
				'preview_size'         => 'medium',
			),
		)
	);
	$image_textbox->add_group_field(
		$image_textbox_group_id,
		array(
			'name'    => 'Image Textbox Video WebM',
			'id'      => 'image_textbox_video_webm',
			'type'    => 'file',
			// Optional:
			'options' => array(
				'url' => false,
			),
			'text'    => array(
				'add_upload_file_text' => 'Add WebM Video',
				'query_args'           => array(
					'type' => array(
						'video/webm',
					),
				),
				'preview_size'         => 'medium',
			),
		)
	);
	$image_textbox->add_group_field(
		$image_textbox_group_id,
		array(
			'name'    => esc_html__( 'SVG Script', 'lolly' ),
			'id'      => 'image_textbox_svg_script',
			'type'    => 'textarea_code',
			'options' => array(
				'disable_codemirror' => true,
			),
		)
	);
	$image_textbox->add_group_field(
		$image_textbox_group_id,
		array(
			'name' => esc_html__( 'Image Textbox Subtitle', 'lolly' ),
			'id'   => 'image_textbox_subtitle',
			'type' => 'text',
		)
	);
	$image_textbox->add_group_field(
		$image_textbox_group_id,
		array(
			'name'            => esc_html__( 'Image Textbox Title', 'lolly' ),
			'id'              => 'image_textbox_title',
			'type'            => 'text',
			'sanitization_cb' => 'sanitize_image_textbox_section_text',
		)
	);
	$image_textbox->add_group_field(
		$image_textbox_group_id,
		array(
			'name'            => esc_html__( 'Image Textbox Description', 'lolly' ),
			'id'              => 'image_textbox_description',
			'type'            => 'textarea',
			'sanitization_cb' => 'sanitize_image_textbox_section_text',
		)
	);
	$image_textbox->add_group_field(
		$image_textbox_group_id,
		array(
			'name'            => esc_html__( 'Image Textbox Title 2', 'lolly' ),
			'id'              => 'image_textbox_title_2',
			'type'            => 'text',
			'show_on_cb'      => 'lolly_conditional_image_text_box',
			'sanitization_cb' => 'sanitize_image_textbox_section_text',
		)
	);
	$image_textbox->add_group_field(
		$image_textbox_group_id,
		array(
			'name'            => esc_html__( 'Image Textbox Description 2', 'lolly' ),
			'id'              => 'image_textbox_description_2',
			'type'            => 'textarea',
			'show_on_cb'      => 'lolly_conditional_image_text_box',
			'sanitization_cb' => 'sanitize_image_textbox_section_text',
		)
	);
	$image_textbox->add_group_field(
		$image_textbox_group_id,
		array(
			'name'            => esc_html__( 'Image Textbox CTA Text', 'lolly' ),
			'id'              => 'image_textbox_cta_text',
			'type'            => 'text',
		)
	);
	$image_textbox->add_group_field(
		$image_textbox_group_id,
		array(
			'name'            => esc_html__( 'Image Textbox CTA Link', 'lolly' ),
			'id'              => 'image_textbox_cta_url',
			'type'            => 'text_url',
		)
	);
}

function sanitize_image_textbox_section_text( $value, $field_args, $field ) {
	$value = strip_tags( $value, '<span><br>' );
	return $value;
}

function lolly_media_text_block_show_on_cb() {
	$current_screen = get_current_screen();
	$display        = false;

	if ( 'page-feature.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'page-product.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'page-about.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'front-page.php' === get_page_template_slug() ) {
		$display = true;
	} elseif ( 'cb' === $current_screen->post_type ) {
		$display = true;
	} else {
		$display = false;
	}
	return apply_filters( 'lolly_media_text_block_show_on', $display );
}

function lolly_conditional_image_text_box() {

	if ( 'page-feature.php' === get_page_template_slug() ) {
		return true;
	}
	return false;
}
