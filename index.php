<?php get_header(); ?>




<?php if( have_posts() ): ?>
<?php endif; ?>

<?php /* Start the Loop */ ?>
<main class="site-main">
            <div class="post-body">
<?php while ( have_posts() ) : the_post(); ?>
			
<?php get_template_part( 'post-content' );?>

<?php endwhile; ?>


           </div><!-- .post-body -->
        </main>




<?php get_footer(); ?>