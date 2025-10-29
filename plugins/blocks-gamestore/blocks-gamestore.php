<?php
/**
 * Plugin Name:       Blocks Gamestore
 * Description:       Example block scaffolded with Create Block tool.
 * Version:           0.1.0
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       blocks-gamestore
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Registers the block using a `blocks-manifest.php` file, which improves the performance of block type registration.
 * Behind the scenes, it also registers all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://make.wordpress.org/core/2025/03/13/more-efficient-block-type-registration-in-6-8/
 * @see https://make.wordpress.org/core/2024/10/17/new-block-type-registration-apis-to-improve-performance-in-wordpress-6-7/
 */
function create_block_blocks_gamestore_block_init() {
	/**
	 * Registers the block(s) metadata from the `blocks-manifest.php` and registers the block type(s)
	 * based on the registered block metadata.
	 * Added in WordPress 6.8 to simplify the block metadata registration process added in WordPress 6.7.
	 *
	 */
	register_block_type(__DIR__ . '/build/block-header' );
	register_block_type(__DIR__ . '/build/block-hero' );
	register_block_type(__DIR__ . '/build/block-contact' );
}
add_action( 'init', 'create_block_blocks_gamestore_block_init' );
/**
 * Register a custom block category.
 */
function gamestore_register_block_category( $categories, $post ) {
    return array_merge(
    
        array(
            array(
                'slug'  => 'gamestore-blocks',
                'title' => __( 'Game Store Blocks', 'gamestore' ),
                'icon'  => null, // Optional: can be 'gamepad', 'store', etc.
            ),
        ),
		$categories
    );
}
add_filter( 'block_categories_all', 'gamestore_register_block_category', 10, 2 );
