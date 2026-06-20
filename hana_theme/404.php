<?php get_header(); ?>

<div class="container">
	<div class="blog-layout">

		<main id="primary" class="site-main error-404">

			<article class="entry" style="text-align:center;padding:4rem 2rem;">
				<header class="entry-header">
					<div style="font-size:5rem;font-weight:800;color:var(--clr-primary);line-height:1;margin-bottom:0.5rem;">404</div>
					<h1 class="entry-title" style="font-size:1.75rem;">
						<?php esc_html_e( 'Page not found.', 'hana-theme' ); ?>
					</h1>
				</header>
				<div class="entry-content" style="margin-top:1rem;">
					<p style="color:var(--clr-muted);margin-bottom:1.5rem;">
						<?php esc_html_e( 'The page you are looking for might have been moved or deleted. Try searching below, or go back home.', 'hana-theme' ); ?>
					</p>
					<?php get_search_form(); ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary" style="margin-top:1.5rem;">
						<?php esc_html_e( 'Back to Home', 'hana-theme' ); ?>
					</a>
				</div>
			</article>

		</main>

		<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer(); ?>
