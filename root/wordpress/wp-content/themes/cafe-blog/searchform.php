<?php
/**
 * Template for displaying the search forms
 *
 * @package Cafe Blog
 * @since Cafe Blog 1.0
 */
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" class="field" name="s" id="s" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'cafe-blog' ); ?>"/>
	<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'cafe-blog' ); ?>"/>
</form>