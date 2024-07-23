<?php
/**
 * Option Page
 *
 * @package lolly
 */

/**
 * Register option page and subpages
 */
function lolly_register_common_content_metabox() {

	/**
	 * Registers main options page menu item and form.
	 */
	$common_content = new_cmb2_box(
		array(
			'id'           => 'lolly_common_content_page',
			'title'        => esc_html__( 'Common Content', 'lolly' ),
			'object_types' => array( 'options-page' ),

			'option_key'   => 'lolly_common_content',
		)
	);

	/**
	 * Options fields ids only need
	 * to be unique within this box.
	 * Prefix is not needed.
	 */
	$common_content->add_field(
		array(
			'name'    => esc_html__( 'Logo', 'lolly' ),
			'id'      => 'lolly_logo',
			'type'    => 'file',
			'default' => '',
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
	$common_content->add_field(
		array(
			'name'    => esc_html__( 'Meta Partner Logo', 'lolly' ),
			'id'      => 'lolly_meta_partner_logo',
			'type'    => 'file',
			'default' => '',
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
	$common_content->add_field(
		array(
			'name' => 'Blog page Header',
			'id'   => 'lolly_blog_page_header',
			'type' => 'text',
		)
	);
	$common_content->add_field(
		array(
			'name' => 'Blog page Description',
			'id'   => 'lolly_blog_page_description',
			'type' => 'text',
		)
	);
	/**
	 * Registers secondary options page, and set main item as parent.
	 */
	$logo_carousel          = new_cmb2_box(
		array(
			'id'           => 'lolly_logo_carousel',
			'title'        => esc_html__( 'Logo Carousel', 'lolly' ),
			'object_types' => array( 'options-page' ),
			'option_key'   => 'lolly_logo_carousel_options',
			'parent_slug'  => 'lolly_common_content',
		)
	);
	$logo_carousel_group_id = $logo_carousel->add_field(
		array(
			'id'         => 'lolly_logo_carousel',
			'type'       => 'group',
			'repeatable' => true,
			'options'    => array(
				'group_title' => __( 'logo Carousel', 'lolly' ),
			),
		)
	);
	$logo_carousel->add_group_field(
		$logo_carousel_group_id,
		array(
			'name'    => esc_html__( 'Logo Carousel', 'lolly' ),
			'id'      => 'lolly_logo_carousel_item',
			'type'    => 'file',
			'default' => '',
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

	/**
	 * Registers tertiary options page, and set main item as parent.
	 */
	$header = new_cmb2_box(
		array(
			'id'           => 'lolly_header_options_page',
			'title'        => esc_html__( 'Header', 'lolly' ),
			'object_types' => array( 'options-page' ),
			'option_key'   => 'lolly_header_options',
			'parent_slug'  => 'lolly_common_content',
		)
	);
	$header->add_field(
		array(
			'name'    => esc_html__( 'Header Logo', 'lolly' ),
			'id'      => 'lolly_header_image',
			'type'    => 'file',
			'default' => '',
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
	$header_primary_group_id = $header->add_field(
		array(
			'id'         => 'lolly_header_primary',
			'type'       => 'group',
			'repeatable' => false,
			'options'    => array(
				'group_title' => __( 'Header CTA Primary', 'lolly' ),
			),
		)
	);
	// add fields.
	$header->add_group_field(
		$header_primary_group_id,
		array(
			'name' => esc_html__( 'Header CTA Primary Text ', 'lolly' ),
			'id'   => 'lolly_header_cta_primary_text',
			'type' => 'text',
		)
	);
	$header->add_group_field(
		$header_primary_group_id,
		array(
			'name' => esc_html__( 'Header CTA Primary Link ', 'lolly' ),
			'id'   => 'lolly_header_cta_primary_link',
			'type' => 'text_url',
		)
	);
	// header_secondary group.
	$header_secondary_group_id = $header->add_field(
		array(
			'id'         => 'lolly_header_secondary',
			'type'       => 'group',
			'repeatable' => false,
			'options'    => array(
				'group_title' => __( 'Header CTA Secondary', 'lolly' ),
			),
		)
	);
	// add fields.
	$header->add_group_field(
		$header_secondary_group_id,
		array(
			'name' => esc_html__( 'Header CTA Secondary Text ', 'lolly' ),
			'id'   => 'lolly_header_cta_secondary_text',
			'type' => 'text',
		)
	);
	$header->add_group_field(
		$header_secondary_group_id,
		array(
			'name' => esc_html__( 'Header CTA Secondary Link ', 'lolly' ),
			'id'   => 'lolly_header_cta_secondary_link',
			'type' => 'text_url',
		)
	);
	$footer = new_cmb2_box(
		array(
			'id'           => 'lolly_footer_options_page',
			'title'        => esc_html__( 'Footer', 'lolly' ),
			'object_types' => array( 'options-page' ),
			'option_key'   => 'lolly_footer_options',
			'parent_slug'  => 'lolly_common_content',
		)
	);
	$footer->add_field(
		array(
			'name'    => 'Footer Logo',
			'id'      => 'lolly_footer_logo',
			'type'    => 'file',
			// Optional.
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
	$footer->add_field(
		array(
			'name' => esc_html__( 'Footer Tagline', 'lolly' ),
			'id'   => 'lolly_footer_tagline',
			'type' => 'text',
		)
	);
	// footer_primary social icon.
	$footer_social_icon_group_id = $footer->add_field(
		array(
			'id'         => 'lolly_footer_social_icon',
			'type'       => 'group',
			'repeatable' => false,
			'options'    => array(
				'group_title' => __( 'Footer Social Icon', 'lolly' ),
			),
		)
	);
	// add fields.
	$footer->add_group_field(
		$footer_social_icon_group_id,
		array(
			'name' => esc_html__( 'Facebook Link ', 'lolly' ),
			'id'   => 'lolly_footer_facebook_link',
			'type' => 'text_url',
		)
	);
	$footer->add_group_field(
		$footer_social_icon_group_id,
		array(
			'name' => esc_html__( 'Instagram Link ', 'lolly' ),
			'id'   => 'lolly_footer_insta_link',
			'type' => 'text_url',
		)
	);
	$footer->add_group_field(
		$footer_social_icon_group_id,
		array(
			'name' => esc_html__( 'Linkedin Link ', 'lolly' ),
			'id'   => 'lolly_footer_linkedin_link',
			'type' => 'text_url',
		)
	);
	$footer->add_group_field(
		$footer_social_icon_group_id,
		array(
			'name' => esc_html__( 'Twitter Link ', 'lolly' ),
			'id'   => 'lolly_footer_twitter_link',
			'type' => 'text_url',
		)
	);
	$footer->add_group_field(
		$footer_social_icon_group_id,
		array(
			'name' => esc_html__( 'Youtube Link ', 'lolly' ),
			'id'   => 'lolly_footer_youtube_link',
			'type' => 'text_url',
		)
	);
	$footer->add_field(
		array(
			'name' => esc_html__( 'Footer Headline', 'lolly' ),
			'id'   => 'lolly_footer_headline',
			'type' => 'text',
		)
	);
	$footer->add_field(
		array(
			'name' => esc_html__( 'Footer Description ', 'lolly' ),
			'id'   => 'lolly_footer_description',
			'type' => 'text',
		)
	);
	// footer_contact group.
	$footer_contact_group_id = $footer->add_field(
		array(
			'id'         => 'lolly_footer_contact',
			'type'       => 'group',
			'repeatable' => false,
			'options'    => array(
				'group_title' => __( 'Footer Contact', 'lolly' ),
			),
		)
	);
	// add fields.
	$footer->add_group_field(
		$footer_contact_group_id,
		array(
			'name' => esc_html__( 'Footer Contact Phone ', 'lolly' ),
			'id'   => 'lolly_footer_contact_phone',
			'type' => 'text',
		)
	);
	$footer->add_group_field(
		$footer_contact_group_id,
		array(
			'name' => esc_html__( 'Footer Contact Address ', 'lolly' ),
			'id'   => 'lolly_footer_contact_address',
			'type' => 'text',
		)
	);
}
add_action( 'cmb2_admin_init', 'lolly_register_common_content_metabox' );
