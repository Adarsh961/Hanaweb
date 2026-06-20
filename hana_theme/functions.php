<?php
/**
 * Hana Theme functions and definitions
 */

if ( ! defined( 'HANA_VERSION' ) ) {
	define( 'HANA_VERSION', '1.0.0' );
}

function hana_setup() {
	load_theme_textdomain( 'hana-theme', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );
	add_theme_support( 'customize-selective-refresh-widgets' );

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'hana-theme' ),
		'footer'  => esc_html__( 'Footer Menu', 'hana-theme' ),
	) );

	add_image_size( 'hana-voice',  120, 120, true );
	add_image_size( 'hana-photo',  800, 560, true );
	add_image_size( 'hana-thumb',  640, 400, true );
}
add_action( 'after_setup_theme', 'hana_setup' );

function hana_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hana_content_width', 1140 );
}
add_action( 'after_setup_theme', 'hana_content_width', 0 );

function hana_scripts() {
	wp_enqueue_style(
		'hana-style',
		get_stylesheet_uri(),
		array(),
		HANA_VERSION
	);

	wp_enqueue_script(
		'gsap',
		'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
		array(),
		'3.12.5',
		true
	);

	wp_enqueue_script(
		'gsap-scrolltrigger',
		'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
		array( 'gsap' ),
		'3.12.5',
		true
	);

	wp_enqueue_script(
		'hana-navigation',
		get_template_directory_uri() . '/js/navigation.js',
		array(),
		HANA_VERSION,
		true
	);

	wp_enqueue_script(
		'hana-animations',
		get_template_directory_uri() . '/js/animations.js',
		array( 'gsap', 'gsap-scrolltrigger' ),
		HANA_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'hana_scripts' );

/* -----------------------------------------------
   Template helper functions
----------------------------------------------- */

function hana_posted_on() {
	printf(
		'<span class="posted-on"><a href="%1$s" rel="bookmark"><time datetime="%2$s">%3$s</time></a></span>',
		esc_url( get_permalink() ),
		esc_attr( get_the_date( DATE_W3C ) ),
		esc_html( get_the_date() )
	);
}

function hana_posted_by() {
	printf(
		'<span class="byline"><a href="%1$s">%2$s</a></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_html( get_the_author() )
	);
}

function hana_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}
	echo '<div class="entry-thumbnail">';
	the_post_thumbnail( is_singular() ? 'full' : 'hana-thumb' );
	echo '</div>';
}

/* SVG icons used in templates */
function hana_icon( $name ) {
	$icons = array(
		'location' => '<svg class="%s" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>',
		'phone'    => '<svg class="%s" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>',
		'email'    => '<svg class="%s" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>',
		'web'      => '<svg class="%s" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>',
	);

	if ( isset( $icons[ $name ] ) ) {
		return sprintf( $icons[ $name ], 'contact-detail-icon' );
	}

	return '';
}
