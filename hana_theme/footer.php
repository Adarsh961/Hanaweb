		</div><!-- .site-inner -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site">
			<div class="site-info">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php bloginfo( 'name' ); ?>
				</a>
				&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
				&mdash;
				<?php
				printf(
					/* translators: %s: WordPress link */
					esc_html__( 'Proudly powered by %s', 'hana-theme' ),
					'<a href="https://wordpress.org/">WordPress</a>'
				);
				?>
			</div>

			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'footer',
						'menu_id'        => 'footer-menu',
						'depth'          => 1,
					) );
					?>
				</nav>
			<?php endif; ?>
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
