<?php
/**
 * Block styles.
 *
 * @package genos-place-test
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function genos_place_test_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'  => 'genos-place-test-sticky',
			'label' => __( 'Sticky header', 'genos-place-test' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'genos-place-test-flat-button',
			'label' => __( 'Flat button', 'genos-place-test' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'genos-place-test-button-shadow',
			'label' => __( 'Button with shadow', 'genos-place-test' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'genos-place-test-navigation-button',
			'label' => __( 'Button style', 'genos-place-test' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'genos-place-test-navigation-button-shadow',
			'label' => __( 'Button with shadow', 'genos-place-test' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'genos-place-test-list-underline',
			'label' => __( 'Underlined list items', 'genos-place-test' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'genos-place-test-box-shadow',
			'label' => __( 'Box shadow', 'genos-place-test' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'genos-place-test-box-shadow',
			'label' => __( 'Box shadow', 'genos-place-test' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'genos-place-test-box-shadow',
			'label' => __( 'Box shadow', 'genos-place-test' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/site-title',
		array(
			'name'  => 'genos-place-test-text-shadow',
			'label' => __( 'Text shadow', 'genos-place-test' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'genos-place-test-text-shadow',
			'label' => __( 'Text shadow', 'genos-place-test' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'genos-place-test-text-shadow',
			'label' => __( 'Text shadow', 'genos-place-test' ),
		)
	);
}
add_action( 'init', 'genos_place_test_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function genos_place_test_unregister_block_style() {
	wp_enqueue_script(
		'genos-place-test-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		GENOS_PLACE_TEST_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'genos_place_test_unregister_block_style' );
