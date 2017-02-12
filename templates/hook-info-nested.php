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
<div id="<?php echo esc_attr( $dashed_hook ); ?>-hook" class="cookbook-nested-hook <?php echo esc_attr( $dashed_hook ); ?>-hook">

	<h4 class="cookbook-nested-hook-name">
		<span class="function"><?php echo esc_html( $hook ); ?></span> <span class="priority"><?php echo esc_html( $priority ); ?></span>
	</h4>

	<?php if ( ! empty( $callbacks ) ) : ?>

		<ul class="cookbook-nested-hook-callbacks">
			<?php foreach ( $callbacks as $priority => $callback ) : ?>
				<li class="callback">
					<span class="function"><?php echo esc_html( $callback ); ?></span> <span class="priority"><?php echo esc_html( $priority ); ?></span>
				</li>
			<?php endforeach; ?>
		</ul>

	<?php endif; ?>

</div>
