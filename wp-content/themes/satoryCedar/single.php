<?php get_header(); ?>

<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>

        <!-- Display Custom Meta Field Value -->
        <?php
        $custom_value = get_post_meta( get_the_ID(), 'custom_subtitle_field', true );
        if ( ! empty( $custom_value ) ) {
            echo '<p>Subtitle: ' . esc_html( $custom_value ) . '</p>';
        }
        ?>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
