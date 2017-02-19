<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UrbanPlan
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
	</header><!-- .entry-header -->


	<!-- IF FEATURED IMG / VIDEO has been set do this -->
	<div class="featured">
		<!-- PICTURE OR VIDEO TO HERE -->
	</div>
	<div class="entry-body">
		<div class="entry-meta">
			<!-- Written by -->
			<!-- Time -->
			<!-- Category? -->
			<?php if ( 'post' === get_post_type() ) : ?>
				<?php urbanplan_posted_on(); ?>
			<?php
			endif; ?>
		</div><!-- .entry-meta -->
		<div class="entry-content">
			<div>
				<?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'urbanplan' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'urbanplan' ),
						'after'  => '</div>',
					) );
				?>
			</div>
		</div><!-- .entry-content -->
	</div><!-- .entry-body -->
	<footer class="entry-footer">
		<?php urbanplan_entry_footer(); ?>
	</footer>


</article><!-- #post-## -->