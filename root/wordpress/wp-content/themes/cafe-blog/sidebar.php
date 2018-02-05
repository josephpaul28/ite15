<?php
/**
 * The Sidebar left containing the main navigation, a search form and widget areas.
 *
 * @package Cafe Blog
 * @since Cafe Blog 1.0
 */
?>

<section class="sidebar-left" role="navigation">
	<?php get_search_form(); ?>

	<?php wp_nav_menu( array(
			'theme_location'  => 'primary',
			'depth'           => 1,
			'container_class' => 'main-nav',
			'container'       => 'nav',
			'fallback_cb'	  => 'freebiescafe_menu_fallback'
		)
	); ?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php endif; ?>
</section><!-- .sidebar-left -->