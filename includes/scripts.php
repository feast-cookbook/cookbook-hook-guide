<?php
/**
 * Functions for loading plugin scripts and styles.
 *
 * @package   CookbookHookGuide\Functions\Scripts
 * @copyright Copyright (c) 2016, WP Site Care
 * @license   MIT
 * @since     1.0.0
 */

/**
 * Helper function for getting the script `.min` suffix for minified files.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function cookbook_hook_guide_get_suffix() {
	static $suffix;

	if ( null === $suffix ) {
		$debug   = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG;
		$enabled = (bool) apply_filters( 'cookbook_hook_guide_enable_suffix', ! $debug );
		$suffix  = $enabled ? '.min' : '';
	}

	return $suffix;
}

/**
 * Helper function to determine whether or not to load a packed version of
 * our JavaScript libraries on the front end.
 *
 * Developers can filter cookbook_hook_guide_enable_packed_js to false if they
 * are loading any of the following libraries in their theme or plugin:
 *
 * @since  1.0.0
 * @access protected
 * @return bool
 */
function _cookbook_hook_guide_enable_packed_js() {
	$suffix = cookbook_hook_guide_get_suffix();

	if ( empty( $suffix ) ) {
		return false;
	}

	return (bool) apply_filters( 'cookbook_hook_guide_enable_packed_js', true );
}

/**
 * Load all required CSS files on the front end.
 *
 * Developers can disable our CSS by filtering cookbook_hook_guide_load_css to
 * false within their theme or plugin.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function cookbook_hook_guide_load_css() {
	if ( ! apply_filters( 'cookbook_hook_guide_load_css', true ) ) {
		return;
	}

	$suffix = cookbook_hook_guide_get_suffix();

	wp_enqueue_style(
		'cookbook-hook-guide',
		COOKBOOK_HOOK_GUIDE_URI . "css/cookbook-hook-guide{$suffix}.css",
		array(),
		COOKBOOK_HOOK_GUIDE_VERSION
	);
}

/**
 * Load all required JavaScript files on the front end.
 *
 * Developers can disable our JS by filtering cookbook_hook_guide_load_js to
 * false within their theme or plugin.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function cookbook_hook_guide_load_js() {
	if ( ! apply_filters( 'cookbook_hook_guide_load_js', true ) ) {
		return;
	}

	$suffix = cookbook_hook_guide_get_suffix();

	wp_enqueue_script(
		'cookbook-hook-guide',
		COOKBOOK_HOOK_GUIDE_URI . "js/cookbookHookGuide{$suffix}.js",
		array( 'jquery' ),
		COOKBOOK_HOOK_GUIDE_VERSION,
		true
	);
}

/**
 * Load all required CSS files on the cookbook print preview.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function cookbook_hook_guide_output_print_styles() {
	$suffix = cookbook_hook_guide_get_suffix();

	cookbook_print_style(
		COOKBOOK_HOOK_GUIDE_DIR . "css/cookbook-hook-guide{$suffix}.css",
		COOKBOOK_HOOK_GUIDE_URI . "css/cookbook-hook-guide{$suffix}.css",
		COOKBOOK_HOOK_GUIDE_VERSION
	);
}
