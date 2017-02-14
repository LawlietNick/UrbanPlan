<?php get_header(); ?>


<?php 
	if( have_posts() ):

		while( have_posts() ): the_post();

			the_title();

			the_time('j. F Y');
			the_category();

			the_content();

			the_tags();

		endwhile;
	
	endif;
?>

<?php get_footer(); ?>