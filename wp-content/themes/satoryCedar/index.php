<?php
/**
 * The template for displaying the index page
 * 
 * 
 * @package satoryCedar
 * @since satory Cedar 1.0
 */
?>

<?php get_header(); ?>

<div class="container">

    <div class="row">
        
            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>

            <h1 class="text-center"><?php the_title(); ?></h1>
            <?php the_content(); ?>

            <?php endwhile; ?>

            <?php endif; ?>
        </div>
    
</div>

<?php get_footer(); ?>