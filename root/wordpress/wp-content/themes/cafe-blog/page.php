<?php
/**
 * The template for displaying standard pages.
 *
 * @package Cafe Blog
 * @since Cafe Blog 1.0
 */

get_header(); ?>

<div id="site-content">

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content', 'page' ); ?>
		<?php comments_template( '', true ); ?>
	<?php endwhile; // end of the loop. ?>

</div><!-- end #site-content -->

<?php get_footer(); ?>
