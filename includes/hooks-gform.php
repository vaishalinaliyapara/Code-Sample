<?php
/**
 * Hooks for gravity forms.
 *
 * @package lolly
 */

add_filter( 'gform_confirmation_anchor', '__return_false' );

require_once get_template_directory() . '/dependencies/vendor/autoload.php';

add_filter( 'gform_field_validation', 'lolly_gform_custom_validation', 10, 4 );

//phpcs:disable
/**
 * GForm.
 *
 * @param Result $result .
 * @param Value  $value .
 * @param Rorm   $form .
 * @param Field  $field .
 */
function lolly_gform_custom_validation( $result, $value, $form, $field ) {
	if ( $field->type === 'text' || $field->type === 'textarea' ) {
		if ( $field->label === 'Company Website' ) {

			if ( ! strpos( $value, '.' ) ) {
				$result['is_valid'] = false;
				$result['message']  = 'Please enter a valid URL (eg: www.lolly.com)';
			}

			$value = strpos( $value, 'http' ) !== 0 ? "http://$value" : $value;

			if ( ! filter_var( $value, FILTER_VALIDATE_URL ) ) {
				$result['is_valid'] = false;
				$result['message']  = 'Please enter a valid web address';
			}
		} else {

			$forbidden = false;

			if ( ! preg_match( '/^[a-zA-Z ]*$/', $value ) ) {
				$forbidden = true;
			}

			if ( true === $forbidden ) {
				$result['is_valid'] = false;
				$result['message']  = empty( $field->errorMessage ) ? 'Only Enter Letters' : $field->errorMessage;
			}
		}
    
	}
	if ( $field->type === 'number' || $field->type === 'phone' ) {
		$forbidden = false;

		if ( ! preg_match( '/^[0-9]*$/', $value ) ) {
			$forbidden = true;
		}

		if ( true === $forbidden ) {
			$result['is_valid'] = false;
			$result['message']  = empty( $field->errorMessage ) ? 'Only Enter Numbers. No spaces and letters.' : $field->errorMessage;
		}
	}
	if ( 'email' === $field->type ) {

		if ( false === $result['is_valid'] ) {
			$result['message'] = 'Invalid email format';
		} 
		// {
		// 	if ( false === ly_is_company_email( $value ) ) {
		// 		$result['is_valid'] = false;
		// 		$result['message']  = 'Enter a valid company email';
		// 	}
		// }
	}
	return $result;
}
//phpcs:enable
add_filter( 'gform_validation', 'lolly_gform_validate_phone' );
/**
 * GForm.
 *
 * @param Array $validation_result .
 */
function lolly_gform_validate_phone( $validation_result ) {
	$fields              = $validation_result['form']['fields'];
	$is_user_phone_valid = true;
	$pre_invalidated     = false;

	list( $country_code , $user_phone , $user_phone_field_id, $pre_invalidated , $country_tele_code ) = lolly_get_phone_data_from_form_field( $fields );

	if ( ! $pre_invalidated & ! empty( $user_phone ) && ! empty( $country_code ) ) {
		$phone_util          = \libphonenumber\PhoneNumberUtil::getInstance();
		$user_phone_object   = $phone_util->parse( $user_phone, $country_code );
		$is_user_phone_valid = $phone_util->isValidNumber( $user_phone_object );
		if ( $is_user_phone_valid ) {
			if ( ! in_array( $phone_util->getNumberType( $user_phone_object ), array( 0, 1, 2, 7 ) ) ) {
				$is_user_phone_valid = false;
			}
		}
		// if ( $is_user_phone_valid ) {
		// 	$is_user_phone_valid = ly_numerify_api( $country_tele_code . $user_phone );
		// }
	}
	if ( ! $is_user_phone_valid ) {
		foreach ( $fields as &$field ) {
			if ( $user_phone_field_id === $field->id ) {
				$validation_result['is_valid'] = false;
				$field->failed_validation      = true;
				$field->validation_message     = 'Invalid phone number for ' . $country_code;
				break;
			}
		}
	}
	return $validation_result;
}
/**
 * GForm.
 *
 * @param String $value .
 */
function ly_is_company_email( $value ) {
	$value_array             = explode( '@', $value );
	$blocked_email_providers = array(
		'gmail.com',
		'outlook.com',
		'ymail.com',
		'yahoo.com',
		'outlook.in',
	);
	if ( in_array( strtolower( $value_array[1] ), $blocked_email_providers, true ) ) {
		return false;
	}

	return ly_abstract_api( $value );

}

/**
 * GForm.
 *
 * @param String $phone .
 */
function ly_numerify_api( $phone ) {
	$curl = curl_init();

	curl_setopt_array(
		$curl,
		array(
			CURLOPT_URL            => 'https://api.apilayer.com/number_verification/validate?number=' . $phone,
			CURLOPT_HTTPHEADER     => array(
				'Content-Type: text/plain',
				'apikey: e3jPSmmB82IRgDNGAMk3Z1jD0MLFghI1',
			),
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING       => '',
			CURLOPT_MAXREDIRS      => 10,
			CURLOPT_TIMEOUT        => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST  => 'GET',
		)
	);

	$response = curl_exec( $curl );

	curl_close( $curl );

	$response = json_decode( $response );

	return $response->valid;
}

/**
 * GForm.
 *
 * @param String $email .
 */
function ly_abstract_api( $email ) {
	// Initialize cURL.
	$curl = curl_init();

	// Set the URL that you want to GET by using the CURLOPT_URL option.
	curl_setopt( $curl, CURLOPT_URL, 'https://emailvalidation.abstractapi.com/v1/?api_key=5f0c1896a53d494fa79dcb26124dc82e&email=' . $email );

	// Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );

	// Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
	curl_setopt( $curl, CURLOPT_FOLLOWLOCATION, true );

	// Execute the request.
	$response = curl_exec( $curl );

	// Close the cURL handle.
	curl_close( $curl );

	$response = json_decode( $response );

	$is_company_email = 'DELIVERABLE' === $response->deliverability;
	$is_company_email = $is_company_email && $response->is_valid_format->value;
	$is_company_email = $is_company_email && ! $response->is_free_email->value;
	$is_company_email = $is_company_email && ! $response->is_displosable_email->value;
	$is_company_email = $is_company_email && ! $response->is_catchall_email->value;
	$is_company_email = $is_company_email && $response->is_mx_found->value;
	$is_company_email = $is_company_email && $response->is_smtp_valid->value;

	// Print the data out onto the page.
	return $is_company_email;
}

add_action( 'gform_pre_submission', 'ly_pre_gform_submission' );
/**
 * GForm.
 *
 * @param Form $form .
 */
function ly_pre_gform_submission( $form ) {
	$fields               = $form['fields'];
	$phone_number_intr_id = null;
	$phone_number_intr    = null;

	list( $country_code , $user_phone ) = lolly_get_phone_data_from_form_field( $fields );

	if ( ! empty( $user_phone ) && ! empty( $country_code ) ) {
		$phone_util        = \libphonenumber\PhoneNumberUtil::getInstance();
		$user_phone_object = $phone_util->parse( $user_phone, $country_code );
		$phone_number_intr = $phone_util->format( $user_phone_object, \libphonenumber\PhoneNumberFormat::INTERNATIONAL );
	}

	foreach ( $fields as $field_key => $field_array ) {
		if ( 'Phone Number International' === $field_array->label ) {
			$phone_number_intr_id = $field_array->id;
		}
	}

	if ( is_int( $phone_number_intr_id ) && ! empty( $phone_number_intr ) ) {
		$_POST[ 'input_' . $phone_number_intr_id ] = $phone_number_intr;
	}

}
