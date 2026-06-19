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
}
add_action( 'after_setup_theme', 'hana_setup' );

function hana_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hana_content_width', 860 );
}
add_action( 'after_setup_theme', 'hana_content_width', 0 );

function hana_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hana-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'hana-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hana_widgets_init' );

function hana_scripts() {
	wp_enqueue_style(
		'hana-style',
		get_stylesheet_uri(),
		array(),
		HANA_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'hana_scripts' );

function hana_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

	$time_string = sprintf(
		$time_string,
		esc_attr( get_the_date( DATE_W3C ) ),
		esc_html( get_the_date() )
	);

	printf(
		'<span class="posted-on"><a href="%1$s" rel="bookmark">%2$s</a></span>',
		esc_url( get_permalink() ),
		$time_string
	);
}

function hana_posted_by() {
	printf(
		'<span class="byline"><span class="author vcard"><a class="url fn n" href="%1$s">%2$s</a></span></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_html( get_the_author() )
	);
}

function hana_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}
	if ( is_singular() ) {
		echo '<div class="entry-thumbnail">';
		the_post_thumbnail( 'full' );
		echo '</div>';
	} else {
		echo '<div class="entry-thumbnail">';
		the_post_thumbnail( 'large' );
		echo '</div>';
	}
}
