<?php 
/**
 * The template for displaying the posts
 * 
 * @package satoryCedar
 * @since Satory Cedar 1.0
 */
?>

<?php get_header(); ?> 

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php if ( have_posts() ) : ?>

             <?php while ( have_posts() ) : the_post(); ?>
             <div <?php post_class(); ?>>

            <!-- <h2 class="text-center"><?php the_title(); ?></h2> -->
             <h1><?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink())), '</a></h2>' ) ; ?></h1>
             <?php the_date() ?>
             <?php the_content(); ?>

             <?php 
             wp_link_pages( array (
                'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages', 'customtheme') . '</span>', 
                'after' => '</div>',
                'link_before' => '<span>',
                'link_after' => '</span>',
                'pagelink' => '<span class="screen-reader-text">' . __('Page', 'customtheme') . '</span>%',
                'separator' => '<span class="screen-reader-text"> , </span>'
             ))
             ?>
             </div>
             <?php 
             if( comments_open() || get_comments_number()) {
                comments_template();
             }
             ?>
            <?php endwhile; ?>

        <?php endif; ?>

        <?php 
            if( is_singular('post')) {
                the_post_navigation( array (
                    'next_text' => 'Next',
                    'prev_text' => 'Previous'
                ));
            }
        ?>
    </div> 

    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>

    </div> 
</div>

<?php get_footer(); ?>