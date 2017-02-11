<?php
/**
 * All default actions for the plugin.
 *
 * @package   CookbookHookGuide\Admin\Actions
 * @copyright Copyright (c) 2016, WP Site Care
 * @license   MIT
 * @since     1.0.0
 */

defined( 'WPINC' ) || die;

/**
 * Callback defined in includes/language.php
 *
 * @see cookbook_hook_guide_load_textdomain
 */
add_action( 'admin_head-plugins.php', 'cookbook_hook_guide_load_textdomain' );
