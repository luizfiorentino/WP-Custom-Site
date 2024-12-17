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

</main>

<?php get_footer(); ?>
