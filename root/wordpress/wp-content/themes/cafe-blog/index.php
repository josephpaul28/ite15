<?php
/**
 * The main template file.
 *
 * @package Cafe Blog
 * @since Cafe Blog 1.0
 */

get_header(); ?>

	<div id="site-content">
		<?php
		while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
			<?php freebiescafe_related_posts(); ?>
		<?php endwhile; // end of the loop. ?>

		<?php freebiescafe_pagination(); ?>
	</div><!-- end #site-content -->

<?php get_footer(); ?>