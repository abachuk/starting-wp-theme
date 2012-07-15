<?php
/**
 * @package WordPress
 */
?>
		</section><!-- #main -->
		
		<footer role="contentinfo">
			<?php get_sidebar( 'footer' ); ?>
			
			<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<a href="http://wordpress.org/" title="Semantic Personal Publishing Platform" rel="generator">Proudly powered by WordPress </a>
		</footer><!-- footer -->
		
<?php wp_footer(); ?>

	</body>
</html>