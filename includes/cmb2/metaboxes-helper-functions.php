<?php
/**
 * Metabox Helper Functions
 *
 * @package lolly
 */

/**
 * Custom Sanitaization
 */
function lolly_sanitize_text( $value, $field_args, $field ) {
	$value = strip_tags( $value, '<span><br>' );
	return $value;
}

