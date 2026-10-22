<?php
/**
 * Hana Theme functions and definitions
 */

if ( ! defined( 'HANA_VERSION' ) ) {
	define( 'HANA_VERSION', '1.0.2' );
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

add_filter( 'body_class', function( $classes ) {
    if ( is_page( 'caregiving' ) ) {
        $classes[] = 'has-hero';
    }
    return $classes;
} );


add_action( 'wp_footer', function () {
    if ( ! is_page( 'caregiving' ) ) { return; } // same slug as before
    ?>
    <script>
    (function () {
        var header = document.getElementById('masthead');
        if (!header) return;
        function onScroll() {
            header.classList.toggle('is-scrolled', window.scrollY > 40);
        }
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    })();
    </script>
    <?php
} );


function hana_is_hero_page() {
    return is_page( array( 'caregiving', 'construction', 'foreign-exchange', 'ssw' ) )
        || is_page_template( array( 'page-construction.php', 'page-foreign-exchange.php', 'page-ssw.php' ) );
}

add_filter( 'body_class', function ( $classes ) {
    if ( hana_is_hero_page() ) {
        $classes[] = 'has-hero';
    }
    return $classes;
} );

add_action( 'wp_footer', function () {
    if ( ! hana_is_hero_page() ) { return; }
    ?>
    <script>
    (function () {
        var header = document.getElementById('masthead');
        if (!header) return;
        function onScroll() {
            header.classList.toggle('is-scrolled', window.scrollY > 40);
        }
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    })();
    </script>
    <?php
} );


//whatsapp insta

add_action( 'wp_footer', function () {
    $whatsapp_number = '919967592704';   // country code + number, digits only (no + or spaces)
    $whatsapp_text   = 'Hi Hana Global Edutech, I would like to know more about your programs.';
    $instagram_url   = 'https://www.instagram.com/hanaglobaledutech/';   // replace with your real page
    ?>
    <div class="hana-social">
        <a class="hana-social__btn hana-social__btn--ig" href="<?php echo esc_url( $instagram_url ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Hana Global Edutech on Instagram">
            <svg viewBox="0 0 24 24" width="26" height="26" fill="currentColor" aria-hidden="true"><path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7zm5 3.5A4.5 4.5 0 1 1 7.5 12 4.5 4.5 0 0 1 12 7.5zm0 2A2.5 2.5 0 1 0 14.5 12 2.5 2.5 0 0 0 12 9.5zM17.2 6a1.1 1.1 0 1 1-1.1 1.1A1.1 1.1 0 0 1 17.2 6z"/></svg>
        </a>
        <a class="hana-social__btn hana-social__btn--wa" href="<?php echo esc_url( 'https://wa.me/' . $whatsapp_number . '?text=' . rawurlencode( $whatsapp_text ) ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Chat with Hana Global Edutech on WhatsApp">
            <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor" aria-hidden="true"><path d="M12.04 2a9.9 9.9 0 0 0-8.5 14.9L2 22l5.25-1.38A9.9 9.9 0 1 0 12.04 2zm0 1.8a8.1 8.1 0 0 1 0 16.2 8 8 0 0 1-4.13-1.14l-.3-.18-3.1.82.83-3.02-.2-.31A8.1 8.1 0 0 1 12.04 3.8zM8.6 7.5c-.2 0-.5.07-.77.36-.26.3-1 1-1 2.4s1.03 2.8 1.18 3c.15.2 2.03 3.1 4.9 4.3 2.4 1 2.88.8 3.4.75.52-.05 1.7-.7 1.94-1.37.24-.68.24-1.26.17-1.38-.07-.12-.26-.2-.55-.34-.3-.15-1.7-.84-1.97-.94-.26-.1-.46-.15-.65.15-.2.3-.75.94-.92 1.13-.17.2-.34.22-.63.07-.3-.15-1.22-.45-2.32-1.43-.86-.76-1.44-1.7-1.6-2-.18-.3-.02-.45.13-.6.13-.13.3-.34.44-.5.15-.18.2-.3.3-.5.1-.2.05-.38-.02-.53-.08-.15-.65-1.57-.9-2.15-.23-.55-.47-.48-.65-.49h-.55z"/></svg>
        </a>
    </div>
    <?php
}, 98 );
function hana_handle_contact() {
    $to       = 'hello@hanaglobal-japan.com';   // where enquiries are sent
    $redirect = home_url( '/contact/' );

    $nonce = isset( $_POST['hana_contact_nonce'] ) ? sanitize_text_field( wp_unslash( $_POST['hana_contact_nonce'] ) ) : '';
    if ( ! wp_verify_nonce( $nonce, 'hana_contact' ) ) {
        wp_safe_redirect( add_query_arg( 'sent', 'error', $redirect ) . '#contact-form' );
        exit;
    }
    if ( ! empty( $_POST['hana_website'] ) ) {   // spam trap
        wp_safe_redirect( add_query_arg( 'sent', '1', $redirect ) . '#contact-form' );
        exit;
    }

    $name     = isset( $_POST['full_name'] ) ? sanitize_text_field( wp_unslash( $_POST['full_name'] ) ) : '';
    $email    = isset( $_POST['email'] )     ? sanitize_email( wp_unslash( $_POST['email'] ) )          : '';
    $phone    = isset( $_POST['phone'] )     ? sanitize_text_field( wp_unslash( $_POST['phone'] ) )     : '';
    $interest = isset( $_POST['interest'] )  ? sanitize_text_field( wp_unslash( $_POST['interest'] ) )  : '';
    $message  = isset( $_POST['message'] )   ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

    if ( '' === $name || ! is_email( $email ) || '' === $phone || '' === $message ) {
        wp_safe_redirect( add_query_arg( 'sent', 'error', $redirect ) . '#contact-form' );
        exit;
    }

    $subject = 'New enquiry from ' . $name . ' (' . $interest . ')';
    $body    = "Name: $name\nEmail: $email\nPhone: $phone\nInterested in: $interest\n\nMessage:\n$message\n";
    $ok      = wp_mail( $to, $subject, $body, array( 'Reply-To: ' . $name . ' <' . $email . '>' ) );

    wp_safe_redirect( add_query_arg( 'sent', $ok ? '1' : 'error', $redirect ) . '#contact-form' );
    exit;
}
add_action( 'admin_post_nopriv_hana_contact', 'hana_handle_contact' );
add_action( 'admin_post_hana_contact', 'hana_handle_contact' );

add_action( 'wp_footer', function () {
    if ( ! is_front_page() ) { return; }
    ?>
    <script>
    (function () {
        var h = document.getElementById('masthead');
        if (!h) return;
        function f() { h.classList.toggle('is-scrolled', window.scrollY > 40); }
        window.addEventListener('scroll', f, { passive: true });
        f();
    })();
    </script>
    <?php
} );