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
 * Format and escape HTML for an example code callback function.
 *
 * The encoded character wrapping the callback is a single quote.
 *
 * @since  1.0.0
 * @access public
 * @param  string $callback The callback to be formatted.
 * @return string
 */
function cookbook_hook_guide_format_example_callback( $callback ) {
	return '&#39;' . esc_html( $callback ) . '&#39;<span class="out">,</span>';
}

/**
 * Display example code for a removing a given callback from a given hook.
 *
 * @since  1.0.0
 * @access public
 * @param  string $hook The hook to be used when displaying example code.
 * @param  string $callback The callback hook to be used when displaying example code.
 * @param  int    $priority The priority used when hooking the hook.
 * @return void
 */
function cookbook_hook_guide_example_remove( $hook, $callback, $priority ) {
	$action = sprintf( '<span class="out">remove_action(</span> %s %s <span class="num">%s</span> <span class="out">);</span>',
		cookbook_hook_guide_format_example_callback( $hook ),
		cookbook_hook_guide_format_example_callback( $callback ),
		absint( $priority )
	);

	echo '<code class="cookbook-hook-example-code">' . $action . '</code>';
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
 * @param  string $parent The parent hook to be used when displaying info.
 * @return void
 */
function cookbook_hook_guide_nested_hook_info( $hook, $priority, $parent ) {
	$dashed_hook = str_replace( '_', '-', $hook );
	$callbacks   = cookbook_hook_guide_get_callbacks( $hook );
	require COOKBOOK_HOOK_GUIDE_DIR . 'templates/hook-info-nested.php';
}
