<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package UrbanPlan
 */

if ( ! function_exists( 'urbanplan_post_time' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function urbanplan_post_time() {
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	// I don't want to have Posten on text before the date
	$posted_on = sprintf(
		esc_html_x( '%s', 'post date', 'urbanplan' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	); 

	echo $posted_on;
	// echo '<span class="posted-on">' . $posted_on . '</span>'; OLD STYLE
}
endif;

if ( ! function_exists( 'urbanplan_post_categories' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function urbanplan_post_categories() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ' ', 'urbanplan' ) );
		if ( $categories_list && urbanplan_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'urbanplan' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}
	}
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function urbanplan_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'urbanplan_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'urbanplan_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so urbanplan_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so urbanplan_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in urbanplan_categorized_blog.
 */
function urbanplan_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'urbanplan_categories' );
}
add_action( 'edit_category', 'urbanplan_category_transient_flusher' );
add_action( 'save_post',     'urbanplan_category_transient_flusher' );





if ( ! function_exists( 'urbanplan_post_tags' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function urbanplan_post_tags() {
	$tags_list = get_the_tag_list( '', __( ' ', 'urbanplan' ) );
		if ( $tags_list ) {
			printf( '<div class="tags-links">' . __( '%1$s', 'urbanplan' ) . '</div>', $tags_list );
		}
}
endif;