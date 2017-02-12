<?php
/**
 * Display markup for info about a top-level template hook.
 *
 * @package   CookbookHookGuide\Templates
 * @copyright Copyright (c) 2016, WP Site Care
 * @license   MIT
 * @since     1.0.0
 */

?>
<div id="<?php echo esc_attr( $dashed_hook ); ?>-hook" class="cookbook-hook <?php echo esc_attr( $dashed_hook ); ?>-hook">

	<h3 class="cookbook-hook-name">
		<?php echo esc_attr( $hook ); ?>
	</h3>

	<?php if ( ! empty( $callbacks ) ) : ?>

		<ul class="cookbook-hook-callbacks">
			<?php foreach ( $callbacks as $priority => $callback ) : ?>
					<?php if ( false !== stripos( $callback, 'cookbook_recipe' ) ) : ?>
						<li class="nested-hook-callback">
							<?php cookbook_hook_guide_nested_hook_info( $callback, $priority, $hook ); ?>
						</li>
					<?php else : ?>
						<li class="callback">
							<span class="function"><?php echo esc_html( $callback ); ?></span>
							<?php cookbook_hook_guide_example_remove( $hook, $callback, $priority ); ?>
						</li>
					<?php endif; ?>
			<?php endforeach; ?>
		</ul>

	<?php endif; ?>

</div>
