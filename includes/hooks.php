<?php
/**
 * Functions for outputting hook info.
 *
 * @package   CookbookHookGuide\Functions
 * @copyright Copyright (c) 2016, WP Site Care
 * @license   MIT
 * @since     1.0.0
 */

/**
 * Get the callbacks attached to a given hook.
 *
 * @since  1.0.0
 * @access public
 * @param  string $hook The hook to use when getting callbacks.
 * @param  string $unset A function name to be unset from the list of callbacks.
 * @return array
 */
function cookbook_hook_guide_get_callbacks( $hook, $unset = false ) {
	global $wp_filter;

	if ( ! isset( $wp_filter[ $hook ] ) ) {
		return array();
	}

	$callbacks = $wp_filter[ $hook ];

	// WordPress 4.7 Changed this to an instance of the WP_Hook object.
	if ( $callbacks instanceof WP_Hook ) {
		$callbacks = $callbacks->callbacks;
	}

	$formatted = array();

	foreach ( $callbacks as $priority => $groups ) {
		if ( $unset ) {
			unset( $groups[ $unset ] );

			$callbacks[ $priority ] = $groups;
		}

		if ( empty( $callbacks[ $priority ] ) ) {
			unset( $callbacks[ $priority ] );
		}

		foreach ( $groups as $callback => $args ) {
			$formatted[ $priority ] = $callback;
		}
	}

	return $formatted;
}

/**
 * Output hook info.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function cookbook_hook_guide_hook_info() {
	$hook        = current_filter();
	$dashed_hook = str_replace( '_', '-', $hook );
	$callbacks   = cookbook_hook_guide_get_callbacks( $hook, __FUNCTION__ );
	require COOKBOOK_HOOK_GUIDE_DIR . 'templates/hook-info.php';
}

/**
 * Output nested hook info.
 *
 * @since  1.0.0
 * @access public
 * @param  string $hook The hook to be used when displaying info.
 * @param  int    $priority The priority used when hooking the hook.
 * @return void
 */
function cookbook_hook_guide_nested_hook_info( $hook, $priority ) {
	$dashed_hook = str_replace( '_', '-', $hook );
	$callbacks   = cookbook_hook_guide_get_callbacks( $hook );
	require COOKBOOK_HOOK_GUIDE_DIR . 'templates/hook-info-nested.php';
}
