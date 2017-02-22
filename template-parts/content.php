<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UrbanPlan
 */

?>


<!-- <?php post_class(); ?> -->
<article id="post-<?php the_ID(); ?>" class="post">
	<header class="post-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		?>
		<p>
			<?php urbanplan_post_time(); ?>
		</p>
		<?php urbanplan_post_categories(); ?>
	</header>

	 <div class="post-featured-img">


		<?php if ( has_post_thumbnail() ) : ?>

			<?php
				$meta	= wp_get_attachment_metadata( get_post_thumbnail_id( get_the_ID() ) );
				$width	= $meta['width'];
				$height	= $meta['height'];
			?>
			<figure>
				<?php the_post_thumbnail(); ?>
			</figure>

		<?php endif; ?>
     </div><!-- .post-featured-img -->


	 <div class="post-content">
	 	<?php the_content(); ?>
	 </div><!-- .post-content -->
	 <?php urbanplan_post_tags(); ?>


</article><!-- #post-## -->