<footer id="site-footer">
   <div class="container"><p class="has-text-align-right">
    
    <a href="<php? echo esc_url( home_url('/') ); ?>" rel="home">
        <?php bloginfo( 'name'); ?>
    </a> 
		<?php
		printf(
			/* Translators: WordPress link. */
			esc_html__( 'Proudly powered by %s', 'twentytwentythree' ),
			'<a href="' . esc_url( __( 'https://wordpress.org', 'twentytwentythree' ) ) . '" rel="nofollow">WordPress</a>'
		)
		?>
		</p></div>
</footer>

<?php wp_footer(); ?> <!-- Add this line to load scripts -->
</body>
</html>
