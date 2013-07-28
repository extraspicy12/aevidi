<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package aevidi_foundation
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function aevidi_foundation_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'aevidi_foundation_jetpack_setup' );
