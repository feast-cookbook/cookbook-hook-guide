<?php
/**
 * Plugin Name: Cookbook Hook Guide
 * Plugin URI:  https://cookbookplugin.com
 * Description: The best hook guide for the best recipe plugin for WordPress.
 * Version:     1.0.0
 * Author:      Cookbook
 * Author URI:  https://cookbookplugin.com
 * License:     GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain: cookbook-hook-guide
 * Domain Path: /languages
 *
 * @package   CookbookHookGuide
 * @copyright Copyright (c) 2017, WP Site Care
 * @license   MIT
 * @since     1.0.0
 */

defined( 'WPINC' ) || die;

/**
 * The current version of the plugin.
 *
 * @since 1.0.0
 */
define( 'COOKBOOK_HOOK_GUIDE_VERSION', '1.0.0' );

/**
 * The absolute path to the root plugin file.
 *
 * @since 1.0.0
 */
define( 'COOKBOOK_HOOK_GUIDE_FILE', __FILE__ );

/**
 * The absolute path to the plugin's root directory with a trailing slash.
 *
 * @since 1.0.0
 * @uses  plugin_dir_path()
 */
define( 'COOKBOOK_HOOK_GUIDE_DIR', plugin_dir_path( __FILE__ ) );

/**
 * The absolute path to the plugin's root directory with a trailing slash.
 *
 * @since 1.0.0
 * @uses  plugin_dir_url()
 */
define( 'COOKBOOK_HOOK_GUIDE_URI', plugin_dir_url( __FILE__ ) );

require_once COOKBOOK_HOOK_GUIDE_DIR . 'includes/language.php';
require_once COOKBOOK_HOOK_GUIDE_DIR . 'includes/hooks.php';
require_once COOKBOOK_HOOK_GUIDE_DIR . 'includes/scripts.php';

add_action( 'plugins_loaded', 'cookbook_hook_guide' );
/**
 * Fire all of the actions, filters, and any other functionality kickoffs.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function cookbook_hook_guide() {
	if ( current_user_can( 'activate_plugins' ) ) {
		do_action( 'cookbook_hook_guide_before_init' );

		require_once COOKBOOK_HOOK_GUIDE_DIR . 'includes/actions.php';

		do_action( 'cookbook_hook_guide_after_init' );
	}
}
