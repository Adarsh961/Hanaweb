<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Page Loader -->
<div id="hana-loader" aria-hidden="true">
	<img
		src="<?php echo esc_url( get_template_directory_uri() . '/images/hana_logo.png' ); ?>"
		alt=""
		class="loader-logo"
		width="160"
	>
</div>

<div id="page">

	<a class="screen-reader-text" href="#content">
		<?php esc_html_e( 'Skip to content', 'hana-theme' ); ?>
	</a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="header-inner">

				<div class="site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-logo-link">
						<img
							src="<?php echo esc_url( get_template_directory_uri() . '/images/hana_logo.png' ); ?>"
							alt="<?php bloginfo( 'name' ); ?>"
							class="site-logo"
							width="160"
							height="48"
						>
					</a>
				</div>

				<button
					class="menu-toggle"
					aria-controls="primary-menu"
					aria-expanded="false"
					aria-label="<?php esc_attr_e( 'Toggle navigation', 'hana-theme' ); ?>"
				>
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</button>

				<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary', 'hana-theme' ); ?>">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'container'      => false,
					) );
					?>
				</nav>

			</div>
		</div>
	</header>

	<div id="content" class="site-content">
