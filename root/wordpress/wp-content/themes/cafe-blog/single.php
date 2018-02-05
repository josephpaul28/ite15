<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Cafe Blog
 * @since Cafe Blog 1.0
 */

get_header(); ?>

<div id="site-content">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

		<?php
		the_post_navigation();
		freebiescafe_related_posts(); ?>

		<?php
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		?>
	<?php endwhile; // end of the loop.?>

</div><!-- end #site-content -->

<?php get_footer(); ?>
