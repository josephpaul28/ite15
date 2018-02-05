<?php
/**
 * Cafe Blog Theme Customizer
 *
 * @package Cafe Blog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function freebiescafe_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	// Signature
	$wp_customize->add_section(
		'freebiescafe_signature_image',
		array(
			'title'    => __( 'Signature Image', 'cafe-blog' ),
			'priority' => 1,
		)
	);

	$wp_customize->add_setting(
		'freebiescafe_signature_image_setting',
		array(
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'freebiescafe_signature_image_control',
			array(
				'section'  => 'freebiescafe_signature_image',
				'settings' => 'freebiescafe_signature_image_setting',
				'type'     => 'image',
			)
		)
	);

	// Social Media Icons
	$wp_customize->add_section(
		'freebiescafe_social_media_section',
		array(
			'title'    => __( 'Social Media Icons', 'cafe-blog' ),
			'priority' => 2,
		)
	);

	$wp_customize->add_setting(
		'freebiescafe_social_media_twitter',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'freebiescafe_sm_twitter',
			array(
				'label'    => __( 'Twitter URL', 'cafe-blog' ),
				'section'  => 'freebiescafe_social_media_section',
				'settings' => 'freebiescafe_social_media_twitter',
				'type'     => 'url',
			)
		)
	);

	$wp_customize->add_setting(
		'freebiescafe_social_media_facebook',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'freebiescafe_sm_facebook',
			array(
				'label'    => __( 'Facebook URL', 'cafe-blog' ),
				'section'  => 'freebiescafe_social_media_section',
				'settings' => 'freebiescafe_social_media_facebook',
				'type'     => 'url',
			)
		)
	);

	$wp_customize->add_setting(
		'freebiescafe_social_media_instagram',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'freebiescafe_sm_instagram',
			array(
				'label'    => __( 'Instagram URL', 'cafe-blog' ),
				'section'  => 'freebiescafe_social_media_section',
				'settings' => 'freebiescafe_social_media_instagram',
				'type'     => 'url',
			)
		)
	);

	$wp_customize->add_setting(
		'freebiescafe_social_media_pinterest',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'freebiescafe_sm_pinterest',
			array(
				'label'    => __( 'Pinterest URL', 'cafe-blog' ),
				'section'  => 'freebiescafe_social_media_section',
				'settings' => 'freebiescafe_social_media_pinterest',
				'type'     => 'url',
			)
		)
	);

	$wp_customize->add_setting(
		'freebiescafe_social_media_snapchat',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'freebiescafe_sm_snapchat', array(
				'label'    => __( 'Snapchat URL', 'cafe-blog' ),
				'section'  => 'freebiescafe_social_media_section',
				'settings' => 'freebiescafe_social_media_snapchat',
				'type'     => 'url',
			)
		)
	);

	$wp_customize->add_setting(
		'freebiescafe_social_media_youtube',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'freebiescafe_sm_youtube',
			array(
				'label'    => __( 'YouTube URL', 'cafe-blog' ),
				'section'  => 'freebiescafe_social_media_section',
				'settings' => 'freebiescafe_social_media_youtube',
				'type'     => 'url',
			)
		)
	);

	$wp_customize->add_setting(
		'freebiescafe_social_media_googleplus',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'freebiescafe_sm_googleplus',
			array(
				'label'    => __( 'Google+ URL', 'cafe-blog' ),
				'section'  => 'freebiescafe_social_media_section',
				'settings' => 'freebiescafe_social_media_googleplus',
				'type'     => 'url',
			)
		)
	);

	// Related posts
	$wp_customize->add_section(
		'freebiescafe_related_posts',
		array(
			'title'    => __( 'Related Posts', 'cafe-blog' ),
			'priority' => 3,
		)
	);

	$wp_customize->add_setting(
		'freebiescafe_related_posts_setting',
		array(
			'sanitize_callback' => 'freebiescafe_sanitize_related_posts_taxonomy',
			'transport'         => 'refresh',
			'default'			=> 'category'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'freebiescafe_related_posts_control',
			array(
				'label'    => __( 'Get related posts by', 'cafe-blog' ),
				'section'  => 'freebiescafe_related_posts',
				'settings' => 'freebiescafe_related_posts_setting',
				'type'     => 'select',
				'choices'  => freebiescafe_related_posts_taxonomies()
			)
		)
	);

}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function freebiescafe_customize_preview_js() {
	wp_enqueue_script( 'freebiescafe_customizer', get_theme_file_uri( '/js/customizer.js' ), array( 'customize-preview' ), '1.0.9', true );
}

/**
 * Get taxonomies array for related_posts
 * 
 * @return array
 */
function freebiescafe_related_posts_taxonomies() {
	return get_taxonomies( array(
		'public'  => true,
		'show_ui' => true
	), 'names' );
} 

/**
 * Sanitize taxonomy for related_posts
 * 
 * @param string $taxonomy_name
 * @return string
 */
function freebiescafe_sanitize_related_posts_taxonomy( $taxonomy_name ) {
	$taxonomies = freebiescafe_related_posts_taxonomies();
	
	// set default value if taxonomy name doesn't exists
	if( !in_array( $taxonomy_name, $taxonomies ) ) {
		return key( $taxonomies );
	}
	
	return $taxonomy_name;
}
