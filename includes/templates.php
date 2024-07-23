<?php
/**
 * Functions related to plugin templates.
 *
 * @package lolly
 */

/**
 * Locate template.
 *
 * @since 1.0.0
 *
 * @param   string $template_name Template to load.
 * @param   string $template_path Path to templates.
 * @param   string $default_path Default path to template files.
 * @return  string Path to the template file.
 */
function ly_locate_template( $template_name, $template_path = '', $default_path = '' ) {

	if ( ! $template_path ) {
		$template_path = get_stylesheet_directory() . '/templates/';
	}

	if ( ! $default_path ) {
		$default_path = LY_PATH . '/templates/';
	}

	$template = locate_template(
		array(
			$template_path . $template_name,
		)
	);

	if ( ! $template ) {
		$template = $default_path . $template_name;
	}

	return $template;

}


add_filter( 'template_include', 'ly_donate_template' );

/**
 * Locate template.
 *
 * @since 1.0.0
 *
 * @param   string $template Template to load.
 * @return  string Path to the template file.
 */
function ly_donate_template( $template ) {
	global $wp;
	global $wp_query;
	if ( '' === $wp->request || 'brands' === $wp->request ) {
		$template         = ly_locate_template( 'brands.php' );
		$wp_query->is_404 = false;
	} elseif ( 'creators' === $wp->request ) {
		$template         = ly_locate_template( 'creators.php' );
		$wp_query->is_404 = false;
	} elseif ( 'faqs' === $wp->request ) {
		$template         = ly_locate_template( 'faqs.php' );
		$wp_query->is_404 = false;
	} elseif ( 'contact-us' === $wp->request ) {
		$template         = ly_locate_template( 'contact.php' );
		$wp_query->is_404 = false;
	} elseif ( 'shopify' === $wp->request ) {
		$template         = ly_locate_template( 'shopify.php' );
		$wp_query->is_404 = false;
	} elseif ( 'get-started' === $wp->request ) {
		$template         = ly_locate_template( 'get-started.php' );
		$wp_query->is_404 = false;
	} elseif ( 'blogs' === $wp->request ) {
		$template         = ly_locate_template( 'blogs.php' );
		$wp_query->is_404 = false;
	} 
	elseif ( 'features' === $wp->request ) {
		$template         = ly_locate_template( 'features.php' );
		$wp_query->is_404 = false;
	} 
	elseif ( 'pricing' === $wp->request ) {
		$template         = ly_locate_template( 'pricing.php' );
		$wp_query->is_404 = false;
	} 
	elseif ( 'pricing-v2' === $wp->request ) {
		$template         = ly_locate_template( 'pricing-v2.php' );
		$wp_query->is_404 = false;
	} 
	return $template;
}

add_action( 'init', 'ly_custom_route' );
/**
 * Add rewrite rule
 */
function ly_custom_route() {
	add_rewrite_rule( 'brands', 'index.php?pagename=brands', 'top' );
	add_rewrite_rule( 'creators', 'index.php?pagename=creators', 'top' );
	add_rewrite_rule( 'faqs', 'index.php?pagename=faqs', 'top' );
	add_rewrite_rule( 'contact-us', 'index.php?pagename=contact-us', 'top' );
	add_rewrite_rule( 'shopify', 'index.php?pagename=shopify', 'top' );
	add_rewrite_rule( 'get-started', 'index.php?pagename=get-started', 'top' );
}

