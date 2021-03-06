<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 */
?>

	</div><!-- #content -->
	<?php if ( is_active_sidebar( 'sidebar-4' ) || is_active_sidebar( 'sidebar-5' ) || is_active_sidebar( 'sidebar-6' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-info col-md-6 col-sm-6">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'awie' ) ); ?>" rel="nofollow"><?php printf( __( 'Proudly powered by %s', 'awie' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %2$s by %1$s.', 'awie' ), 'ThemeIsle', '<a href="http://themeisle.com/themes/awie/" rel="nofollow">Awie</a>' ); ?>
			</div><!-- .site-info -->
			<?php if ( has_nav_menu( 'social' ) ) : ?>
			<nav class="social-navigation col-md-6 col-sm-6 clearfix">
				<?php wp_nav_menu( array( 'theme_location' => 'social', 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'menu_class' => 'menu clearfix', 'fallback_cb' => false ) ); ?>
			</nav>
			<?php endif; ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
