<?php
/**
 * Template Name: Contact
 */
get_header(); ?>

<section class="page-hero">
	<div class="container">
		<h1>Apply Now</h1>
		<p>Take the first step toward your future in Japan. Consultation is completely free.</p>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="contact-wrap">

			<!-- Cloud Form Embed -->
			<div class="contact-form-area">
				<h2>Free Consultation Form</h2>
				<!--
					Replace the src attribute below with your Cloud Form embed URL.
					Example: src="https://your-cloudform-url.com/embed/form-id"
				-->
				<iframe
					src="REPLACE_WITH_YOUR_CLOUD_FORM_EMBED_URL"
					title="<?php esc_attr_e( 'Apply Now — Free Consultation Form', 'hana-theme' ); ?>"
					loading="lazy"
					allowfullscreen
				></iframe>
			</div>

			<!-- Contact Info Sidebar -->
			<div class="contact-info">

				<div class="contact-info-card">
					<h3><?php esc_html_e( 'Contact Information', 'hana-theme' ); ?></h3>

					<div class="contact-detail">
						<?php echo wp_kses_post( hana_icon( 'location' ) ); ?>
						<span>2nd Floor, Plot no 729, Road No. 36, CBI Colony, Jubilee Hills, Hyderabad, Telangana 500033</span>
					</div>

					<div class="contact-detail">
						<?php echo wp_kses_post( hana_icon( 'phone' ) ); ?>
						<a href="tel:+919967592704">+91-9967592704</a>
					</div>

					<div class="contact-detail">
						<?php echo wp_kses_post( hana_icon( 'email' ) ); ?>
						<a href="mailto:info@hanaglobaledutech.com">info@hanaglobaledutech.com</a>
					</div>

					<div class="contact-detail">
						<?php echo wp_kses_post( hana_icon( 'web' ) ); ?>
						<a href="https://www.hanaglobaledutech.com" target="_blank" rel="noopener noreferrer">
							hanaglobaledutech.com
						</a>
					</div>
				</div>

				<div class="contact-info-card">
					<h3><?php esc_html_e( 'What Happens Next?', 'hana-theme' ); ?></h3>
					<ol style="font-size:0.9rem;padding-left:1.25rem;color:#444;line-height:2.1;">
						<li><?php esc_html_e( 'We receive your application', 'hana-theme' ); ?></li>
						<li><?php esc_html_e( 'Our team contacts you within 24 hours', 'hana-theme' ); ?></li>
						<li><?php esc_html_e( 'Free consultation to discuss your goals', 'hana-theme' ); ?></li>
						<li><?php esc_html_e( 'Enrollment &amp; program kickoff', 'hana-theme' ); ?></li>
						<li><?php esc_html_e( 'Begin your journey to Japan', 'hana-theme' ); ?></li>
					</ol>
				</div>

				<div class="contact-info-card">
					<h3><?php esc_html_e( 'Find Us', 'hana-theme' ); ?></h3>
					<p style="font-size:0.875rem;color:#444;margin-bottom:0.75rem;">
						<?php esc_html_e( 'Jubilee Hills, Hyderabad — one of the city\'s most accessible locations.', 'hana-theme' ); ?>
					</p>
					<!--
						Replace the src below with your actual Google Maps embed URL.
						Example: src="https://www.google.com/maps/embed?pb=..."
					-->
					<iframe
						src="REPLACE_WITH_GOOGLE_MAPS_EMBED_URL"
						width="100%"
						height="180"
						style="border:0;border-radius:8px;"
						allowfullscreen
						loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"
						title="<?php esc_attr_e( 'Hana Global Edutech location map', 'hana-theme' ); ?>"
					></iframe>
				</div>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
