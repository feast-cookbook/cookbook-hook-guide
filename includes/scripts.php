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
