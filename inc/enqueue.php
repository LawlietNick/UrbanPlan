<?php
/**
 * Enqueue scripts and styles.
 *
 *
 * @package UrbanPlan
 */

function urbanplan_scripts() {
	wp_enqueue_style( 'urbanplan-style', get_stylesheet_uri() );

	wp_enqueue_script( 'urbanplan-umbrellajs', get_template_directory_uri() . '/js/umbrella.min.js', array(), '', true );
	wp_enqueue_script( 'urbanplan-custom', get_template_directory_uri() . '/js/custom.js', array(), '0.0.0.1', true );

	// these two might be dropped later 
	wp_enqueue_script( 'urbanplan-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'urbanplan_scripts' );