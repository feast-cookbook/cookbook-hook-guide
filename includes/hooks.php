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
 * Output the hook info.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function cookbook_hook_guide_hook_info() {
	$hook = current_filter();
	$dashed_hook = str_replace( '_', '-', $hook );
	?>
	<div id="<?php echo esc_attr( $dashed_hook ); ?>-hook" class="cookbook-hook <?php echo esc_attr( $dashed_hook ); ?>-hook">
		<h3 class="cookbook-hook-name">
			<?php echo esc_attr( $hook ); ?>
		</h3>

		<?php $callbacks = cookbook_hook_guide_get_callbacks( $hook, __FUNCTION__ ); ?>

		<?php if ( ! empty( $callbacks ) ) : ?>

			<ul class="cookbook-hook-callbacks">
				<?php foreach ( $callbacks as $priority => $callback ) : ?>
					<li>
						<span class="function"><?php echo esc_html( $callback ); ?></span> <span class="priority"><?php echo esc_html( $priority ); ?></span>
					</li>
				<?php endforeach; ?>
			</ul>

		<?php endif; ?>

	</div>
	<?php
}
