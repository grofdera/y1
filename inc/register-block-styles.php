<?php
/**
 * Block styles.
 *
 * @package yubaspace
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function yubaspace_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'yubaspace-flat-button',
			'label' => __( 'Flat button', 'yubaspace' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'yubaspace-shadow-button',
			'label' => __( 'Button with shadow', 'yubaspace' ),
		)
	);
}
add_action( 'init', 'yubaspace_register_block_styles' );
