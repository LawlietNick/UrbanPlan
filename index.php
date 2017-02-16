<?php get_header(); ?>


<?php 
	if( have_posts() ):

		while( have_posts() ): the_post();
?>
			
<div class="content-fluid">
        <article class="post">
            <div class="post-wrap">
                <div class="post-header">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_time('j. F Y'); ?></p>
                    <span class="cat-links">Posted in 
                        <?php the_category(); ?>
                    </span>
                </div>
                <div class="post-content inner-column centering">
                    <?php the_content(); ?>
                </div>
                <!-- .post-content -->
                <div class="post-featured-img">
                    <img src="img/revenant_featured_img.jpeg" alt="">
                </div>
                <div class="tags-links">
                    <?php the_tags(); ?>
                </div>
            </div>
            <!-- .post-wrap -->
        </article>

<?php endwhile; endif;?>





<?php get_footer(); ?>