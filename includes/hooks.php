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

	$callbacks = $wp_filter[ $hook ]->callbacks;

	if ( $unset ) {
		foreach ( $callbacks as $priority => $groups ) {
			unset( $groups[ $unset ] );
			$callbacks[ $priority ] = $groups;

			if ( empty( $callbacks[ $priority ] ) ) {
				unset( $callbacks[ $priority ] );
			}
		}
	}

	return $callbacks;
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

	$callbacks = cookbook_hook_guide_get_callbacks( $hook, __FUNCTION__ );
	?>
	<div class="cookbook-hook-guide">
		<h3 class="cookbook-hook-name">
			<?php echo $hook; ?>
		</h3>

		<?php if ( ! empty( $callbacks ) ): ?>

			<ul class="cookbook-hook-callbacks">
				<?php foreach ( $callbacks as $priority => $args ) : ?>
					<?php foreach ( $args as $callback => $args ) : ?>
						<li>
							<span class="function"><?php echo $args['function']; ?></span> <span class="priority"><?php echo $priority; ?></span>

						</li>
					<?php endforeach; ?>
				<?php endforeach; ?>
			</ul>

		<?php endif; ?>

	</div>
	<?php
}
