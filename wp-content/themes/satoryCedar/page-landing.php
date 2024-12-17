<?php
/*
Template Name: Landing Page
*/
get_header(); ?>

<main class="landing-page">
    <section class="hero">
        <h1>Welcome to Satory Cedar</h1>
        <p>Enjoy the beauty of natural designs</p>
        <h1><?php the_title(); ?></h1>
<div><?php the_content(); ?></div>

</section>

<section class="features">
    <h2>Our Features</h2>
    <p>Dazzle yourself by discovering how design and functionality integrate to give wings to your imagination</p>
</section>
<?php
    $custom_value = get_post_meta( get_the_ID(), 'my_custom_field', true );
    if ( ! empty( $custom_value ) ) {
        echo '<p>Custom Field Value: ' . esc_html( $custom_value ) . '</p>';
    }
    ?>

</main>

<?php get_footer(); ?>
