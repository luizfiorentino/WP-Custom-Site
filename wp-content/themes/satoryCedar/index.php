<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php
/**
 * The template for displaying the index page
 * 
 * 
 * @package satoryCedar
 * @since satory Cedar 1.0
 */
?>
<head>
    <style>
        .jumbotron {
            background: rgb(2,0,36);
            background: linear-gradient(218deg, rgba(2,0,36,1) 0%, rgba(9,121,10,1) 0%, rgba(0,212,255,1) 100%);
            color: white;
        }
    </style>
</head>

<?php get_header(); ?> 
<div class="jumbotron">
  <h1 class="display-4">Welcome!</h1>
  
</div>

<div class="container">

    <div class="row">
        <div class="col-md-8">
            
        
            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>

            <!-- <h2 class="text-center"><?php the_title(); ?></h2> -->
            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink())), '</a></h2>' ) ; ?>
            <?php the_content(); ?>

            <?php endwhile; ?>

            <?php endif; ?>
        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
            </div>
            </div>
    
</div>

<?php get_footer(); ?>
</html>