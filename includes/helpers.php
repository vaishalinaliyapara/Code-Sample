<?php
/**
 *
 * Helper Functions
 *
 * @package lolly
 */

/**
 * Extract useful data from GForm
 *
 * @param array $fields GForm Fields.
 * @return array
 */
function lolly_get_phone_data_from_form_field( $fields ) {
	$country_code        = null;
	$country_tele_code   = null;
	$user_phone          = null;
	$pre_invalidated     = false;
	$user_phone_field_id = null;
	foreach ( $fields as $field ) {
		if ( 'Country Code' === $field['label'] ) {
			$country_tele_code = rgpost( 'input_' . $field['id'] );
			foreach ( $field['choices'] as $coutry_code_array ) {
				if ( $country_tele_code === $coutry_code_array['value'] ) {
					$country_code = substr( trim( $coutry_code_array['text'] ), 0, 2 );
				}
			}
		}
		if ( 'Phone Number' === $field['label'] ) {
			$user_phone_field_id = $field['id'];
			$user_phone          = rgpost( 'input_' . $field['id'] );
			if ( $field->failed_validation ) {
				$pre_invalidated = true;
			}
		}
	}

	if ( 'UK' === $country_code ) {
		$country_code = 'GB';
	}

	return array( $country_code, $user_phone, $user_phone_field_id, $pre_invalidated, $country_tele_code );
}

/**
 * Get Available gravity forms.
 */
function lolly_available_gravity_forms() {
	$form_array = array();

	// Gravity Form.
	if ( class_exists( 'RGFormsModel' ) ) {
		$forms = RGFormsModel::get_forms( null, 'title' );
		if ( ! empty( $forms ) && is_array( $forms ) ) {
			foreach ( $forms as $form ) {
				if ( isset( $form->title, $form->id ) ) {
					$form_array[ $form->id ] = $form->title;
				}
			}
		}
	}

	return $form_array;
}


