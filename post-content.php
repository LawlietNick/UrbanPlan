<div id="post-<?php the_ID(); ?>" <?php post_class( 'is-loop' ); ?>>
    <div class="post-header">
            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        <p>
            <?php the_time('j. F Y'); ?>
        </p>
        <span class="cat-links">Posted in 
                             <?php the_category(); ?>
                        </span>
    </div>
    <!-- .post-header -->
    <div class="post-featured-img">
        <!-- <img src="img/revenant_featured_img.jpeg" alt=""> -->
    </div>
    <div class="post-content">
        <?php the_content(); ?>
    </div>
    <div class="tag-links">
        <?php the_tags(); ?>
    </div>
</div>
<!-- .post -->