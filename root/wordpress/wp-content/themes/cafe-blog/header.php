<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="menu">

<nav class="off-canvas-nav">
	<span class="menu-item">
		<a class="menu-button" href="#menu">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
				<path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/>
			</svg>
		</a>
	</span>
</nav><!-- end .off-canvas-nav -->

<a class="mask-slidein" href="#menu"></a>

<div class="column-wrap">

	<div class="container">

		<?php get_sidebar(); ?>

		<section class="content-wrap">
			<header id="site-header" role="banner">

				<?php
				// Display the Custom Logo
				the_custom_logo();

				// No Custom Logo, just display the site's name
				if ( ! has_custom_logo() ) {
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						</h1>
					<?php else : ?>
						<p class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						</p>
						<?php
					endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
					endif;
				}
				?>

				<ul class="social-buttons">
					<?php if ( get_theme_mod( 'freebiescafe_social_media_twitter' ) ) { ?>
						<li>
							<a href="<?php echo esc_url( get_theme_mod( 'freebiescafe_social_media_twitter' ) ); ?>"><i class="fa fa-twitter"></i></a>
						</li>
					<?php } ?>
					<?php if ( get_theme_mod( 'freebiescafe_social_media_facebook' ) ) { ?>
						<li>
							<a href="<?php echo esc_url( get_theme_mod( 'freebiescafe_social_media_facebook' ) ); ?>"><i class="fa fa-facebook"></i></a>
						</li>
					<?php } ?>
					<?php if ( get_theme_mod( 'freebiescafe_social_media_instagram' ) ) { ?>
						<li>
							<a href="<?php echo esc_url( get_theme_mod( 'freebiescafe_social_media_instagram' ) ); ?>"><i class="fa fa-instagram"></i></a>
						</li>
					<?php } ?>
					<?php if ( get_theme_mod( 'freebiescafe_social_media_pinterest' ) ) { ?>
						<li>
							<a href="<?php echo esc_url( get_theme_mod( 'freebiescafe_social_media_pinterest' ) ); ?>"><i class="fa fa-pinterest"></i></a>
						</li>
					<?php } ?>
					<?php if ( get_theme_mod( 'freebiescafe_social_media_snapchat' ) ) { ?>
						<li>
							<a href="<?php echo esc_url( get_theme_mod( 'freebiescafe_social_media_snapchat' ) ); ?>"><i class="fa fa-snapchat-ghost"></i></a>
						</li>
					<?php } ?>
					<?php if ( get_theme_mod( 'freebiescafe_social_media_youtube' ) ) { ?>
						<li>
							<a href="<?php echo esc_url( get_theme_mod( 'freebiescafe_social_media_youtube' ) ); ?>"><i class="fa fa-youtube-play"></i></a>
						</li>
					<?php } ?>
					<?php if ( get_theme_mod( 'freebiescafe_social_media_googleplus' ) ) { ?>
						<li>
							<a href="<?php echo esc_url( get_theme_mod( 'freebiescafe_social_media_googleplus' ) ); ?>"><i class="fa fa-google-plus"></i></a>
						</li>
					<?php } ?>
				</ul>

			</header><!-- end .branding -->
