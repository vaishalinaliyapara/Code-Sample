<?php
/**
 * Enqueue scripts and styles.
 *
 * @package rawconscious
 */

/**
 * Enqueue frontent assets
 */
function ly_enqueue_frontent_scripts() {
	$version = LY_VERSION;
	if ( defined( 'LOCAL_ENV' ) && true === LOCAL_ENV ) {
		$version = wp_rand( 1, 9999 );
	}
	$dep_rc = require LY_PATH . '/build/script.asset.php';
	$dep_rc = array_unique( array_merge( $dep_rc['dependencies'], array() ), SORT_REGULAR );
	wp_enqueue_script( LY_PREFIX . '-primary', LY_URI . '/build/script.js', $dep_rc, $version, true );
	wp_enqueue_style( LY_PREFIX . '-primary', LY_URI . '/build/script.css', array(), $version );
	wp_enqueue_style( LY_PREFIX . '-secondary', LY_URI . '/build/style-script.css', array(), $version );
	wp_enqueue_style( LY_PREFIX . '-tertiery', LY_URI . '/style.css', array(), $version );
}
add_action( 'wp_enqueue_scripts', 'ly_enqueue_frontent_scripts' );

/**
 * []
 */
function lolly_remove_wp_block_library_css() {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
}
add_action( 'wp_enqueue_scripts', 'lolly_remove_wp_block_library_css', 100 );
