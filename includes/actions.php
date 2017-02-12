<?php
/**
 * All default actions for the plugin.
 *
 * @package   CookbookHookGuide\Actions
 * @copyright Copyright (c) 2016, WP Site Care
 * @license   MIT
 * @since     1.0.0
 */

defined( 'WPINC' ) || die;

/**
 * Callback defined in includes/scripts.php
 *
 * @see cookbook_hook_guide_load_css
 */
add_action( 'wp_enqueue_scripts', 'cookbook_hook_guide_load_css', 20 );

/**
 * Callback defined in includes/scripts.php
 *
 * @see cookbook_hook_guide_load_js
 */
add_action( 'wp_enqueue_scripts', 'cookbook_hook_guide_load_js',  20 );

/**
 * Callback defined in includes/scripts.php
 *
 * @see cookbook_hook_guide_output_print_styles
 */
add_action( 'cookbook_recipe_print_head', 'cookbook_hook_guide_output_print_styles' );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_before', 'cookbook_hook_guide_hook_info' );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_top', 'cookbook_hook_guide_hook_info', 0 );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_extras', 'cookbook_hook_guide_hook_info', 20 );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_time', 'cookbook_hook_guide_hook_info', 20 );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_content', 'cookbook_hook_guide_hook_info', 5 );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_ingredients', 'cookbook_hook_guide_hook_info', 4 );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_instructions', 'cookbook_hook_guide_hook_info', 4 );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_notes', 'cookbook_hook_guide_hook_info', 4 );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_bottom', 'cookbook_hook_guide_hook_info' );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_nutrition', 'cookbook_hook_guide_hook_info' );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_nutrition_header', 'cookbook_hook_guide_hook_info' );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_nutrition_table', 'cookbook_hook_guide_hook_info' );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_nutrition_table_head', 'cookbook_hook_guide_hook_info' );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_nutrition_table_body', 'cookbook_hook_guide_hook_info' );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_after', 'cookbook_hook_guide_hook_info' );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_print_head', 'cookbook_hook_guide_hook_info' );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_print_before', 'cookbook_hook_guide_hook_info' );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_print_preview_bar', 'cookbook_hook_guide_hook_info', 0 );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_print_top', 'cookbook_hook_guide_hook_info' );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_print_content', 'cookbook_hook_guide_hook_info' );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_print_bottom', 'cookbook_hook_guide_hook_info' );

/**
 * Callback defined in includes/hooks.php
 *
 * @see cookbook_hook_guide_hook_info
 */
add_action( 'cookbook_recipe_print_after', 'cookbook_hook_guide_hook_info' );
