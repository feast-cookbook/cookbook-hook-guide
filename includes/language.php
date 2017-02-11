<?php
/**
 * Functions to load translations for the plugin.
 *
 * @package   CookbookHookGuide\Functions\Languages
 * @copyright Copyright (c) 2016, WP Site Care
 * @license   MIT
 * @since     1.0.0
 */

/**
 * Loads translation file.
 *
 * @since  1.0.0
 * @access public
 * @return bool true when the file was found, false otherwise.
 */
function cookbook_hook_guide_load_textdomain() {
	return load_plugin_textdomain(
		'cookbook-hook-guide',
		false,
		dirname( plugin_basename( COOKBOOK_HOOK_GUIDE_FILE ) ) . '/languages'
	);
}

/**
 * Remove translations from memory.
 *
 * @since  1.0.0
 * @access public
 * @return bool true if the text domain was loaded, false if it was not.
 */
function cookbook_hook_guide_unload_textdomain() {
	return unload_textdomain( 'cookbook-hook-guide' );
}

/**
 * Whether or not the language has been loaded already.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function cookbook_hook_guide_is_textdomain_loaded() {
	return is_textdomain_loaded( 'cookbook-hook-guide' );
}
