<?php
/**
 * Display markup for info about a nested template hook.
 *
 * @package   CookbookHookGuide\Templates
 * @copyright Copyright (c) 2017, WP Site Care
 * @license   MIT
 * @since     1.0.0
 */

?>
<div id="<?php echo esc_attr( $dashed_hook ); ?>-hook" class="cookbook-nested-hook <?php echo esc_attr( $dashed_hook ); ?>-hook">

	<h4 class="cookbook-hook-name">
		<span class="function"><?php echo esc_html( $hook ); ?></span>
		<?php cookbook_hook_guide_example_remove( $parent, $hook, $priority ); ?>
	</h4>

	<?php if ( ! empty( $callbacks ) ) : ?>

		<ul class="cookbook-nested-hook-callbacks">
			<?php foreach ( $callbacks as $priority => $callback ) : ?>
				<li class="callback">
					<span class="function"><?php echo esc_html( $callback ); ?></span>
					<?php cookbook_hook_guide_example_remove( $hook, $callback, $priority ); ?>
				</li>
			<?php endforeach; ?>
		</ul>

	<?php endif; ?>

</div>
