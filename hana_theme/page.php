<?php get_header(); ?>

<div class="container" style="max-width:800px;padding:2.5rem 1.25rem;">

	<main id="primary" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>

				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>

				<?php hana_post_thumbnail(); ?>

				<div class="entry-content">
					<?php
					the_content();
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hana-theme' ),
						'after'  => '</div>',
					) );
					?>
				</div>

			</article>

		<?php endwhile; ?>

	</main>

</div>

<?php get_footer(); ?>
