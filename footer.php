<?php
/**
 * @package WordPress
 * @subpackage themename
 */
?>

	</div><!-- #main  -->

	<footer id="colophon" role="contentinfo">
			<div id="site-generator">
				<small>&copy Copyright <?php echo date('Y') . " " . esc_attr( get_bloginfo( 'name', 'display' ) ); ?> <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'themename' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s.', 'themename' ), 'WordPress' ); ?></a></small>
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- Grab Google CDN's jQuery. Fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.4.4.min.js"%3E%3C/script%3E'))</script>

<?php wp_footer(); ?>

</body>
</html>