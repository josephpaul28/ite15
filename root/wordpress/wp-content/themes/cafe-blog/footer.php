<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the .container and wp_footer hook
 *
 * @package Cafe Blog
 * @since Cafe Blog 1.0
 */
?>

<div class="site-footer">

	<?php wp_nav_menu( array(
			'theme_location'  => 'secondary',
			'depth'           => 1,
			'container'       => 'nav',
			'container_class' => 'footer-nav',
			'fallback_cb'	  => 'freebiescafe_menu_fallback'
		)
	); ?>

	<div class="site-info">
		&copy; <?php echo date_i18n( __( 'Y', 'cafe-blog' ) ); ?> <?php bloginfo( 'name' ); ?> &middot;
		<?php 
		$credit_link = sprintf( '<a href="%1$s" title="%2$s" rel="%3$s">%4$s</a>', 'https://freebiescafe.com', esc_attr__( 'Handpicked Free Web Design Resources', 'cafe-blog' ), 'nofollow', 'FreebiesCafe' );
		printf( esc_html__( '%1$s Theme by %2$s', 'cafe-blog' ), 'Cafe Blog', $credit_link ); 
		?>
	</div>

</div>
</section><!-- end .content-wrap -->

<?php get_sidebar( 'right' ); ?>

</div><!-- end .container -->
</div><!-- end .column-wrap -->

<?php wp_footer(); ?>
</body>
</html>