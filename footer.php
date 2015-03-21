<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Grad Student Finances 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Grad Student Finances footer text for footer customization.
				 *
				 * @since Grad Student Finances 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<a href="<?php echo get_site_url(); ?>/about">About</a>
			<a href="<?php echo get_site_url(); ?>/disclaimer">Disclaimer</a>
			<a href="<?php echo get_site_url(); ?>/contact">Contact</a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
