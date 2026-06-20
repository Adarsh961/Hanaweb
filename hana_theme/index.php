<?php get_header(); ?>

<div class="container">
	<main id="primary" class="site-main" style="max-width:800px;margin:2.5rem auto;">

			<?php if ( have_posts() ) : ?>

				<?php if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php endif; ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>

						<header class="entry-header">
							<?php if ( is_singular() ) : ?>
								<h1 class="entry-title"><?php the_title(); ?></h1>
							<?php else : ?>
								<h2 class="entry-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
							<?php endif; ?>
							<div class="entry-meta">
								<?php hana_posted_on(); ?>
								<?php hana_posted_by(); ?>
							</div>
						</header>

						<?php hana_post_thumbnail(); ?>

						<div class="entry-content">
							<?php
							if ( is_singular() ) {
								the_content();
								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hana-theme' ),
									'after'  => '</div>',
								) );
							} else {
								the_excerpt();
								echo '<a class="more-link" href="' . esc_url( get_permalink() ) . '">'
									. esc_html__( 'Read more', 'hana-theme' ) . ' &rarr;</a>';
							}
							?>
						</div>

					</article>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<article class="entry no-results">
					<header class="entry-header">
						<h1 class="entry-title"><?php esc_html_e( 'Nothing found.', 'hana-theme' ); ?></h1>
					</header>
					<div class="entry-content">
						<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Try a search below.', 'hana-theme' ); ?></p>
						<?php get_search_form(); ?>
					</div>
				</article>

			<?php endif; ?>

	</main>
</div>

<?php get_footer(); ?>
