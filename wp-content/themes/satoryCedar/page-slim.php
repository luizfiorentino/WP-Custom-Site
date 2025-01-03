<?php 
/**
 * Template Name: Slim Page
 * 
 * @package satoryCedar
 * @since Satory Cedar 1.0
 */
?>
<?php get_header(); ?> 


<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
    
            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <!-- <h2 class="text-center"><?php the_title(); ?></h2> -->
                    <h1 class="text-center"><?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink())), '</a></h2>' ) ; ?></h1>
                    <?php the_content(); ?>

                    <?php endwhile; ?>

                <?php endif; ?>
    </div> 
    </div> 
</div>

<?php get_footer(); ?>