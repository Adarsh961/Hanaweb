<?php
/**
 * Template Name: Student Voices
 */
get_header(); ?>

<section class="page-hero">
	<div class="container">
		<h1>Student Voices</h1>
		<p>Real stories from students who have walked this path with us.</p>
	</div>
</section>

<section class="section">
	<div class="container">

		<div class="voices-grid">

			<div class="voice-card">
				<div class="voice-card__header">
					<div class="voice-card__avatar">
						<img
							src="<?php echo esc_url( get_template_directory_uri() . '/images/voice-huileng.jpg' ); ?>"
							alt="Huileng Katumchon"
							width="56" height="56"
							loading="lazy"
						>
					</div>
					<div>
						<div class="voice-card__name">Huileng Katumchon</div>
						<div class="voice-card__meta">Caregiver &middot; Age 22</div>
					</div>
				</div>
				<p class="voice-card__quote">I chose Hana because its values and growth path align with what I was looking for — from training to placement support, it is reliable and committed to every student&rsquo;s success. My dream is to work hard and build a stable, fulfilling life. At Hana, I feel grateful, focused, and well-prepared for the working world. My communication skills have grown, and the confidence I gained here will make all the difference in my future.</p>
			</div>

			<div class="voice-card">
				<div class="voice-card__header">
					<div class="voice-card__avatar">
						<img
							src="<?php echo esc_url( get_template_directory_uri() . '/images/voice-sonawane.jpg' ); ?>"
							alt="Sonawane Vrushabh Bhau"
							width="56" height="56"
							loading="lazy"
						>
					</div>
					<div>
						<div class="voice-card__name">Sonawane Vrushabh Bhau</div>
						<div class="voice-card__meta">Construction &middot; Age 21</div>
					</div>
				</div>
				<p class="voice-card__quote">I chose Hana for its Japanese language training, study abroad support and career opportunities in Japan. The structured support made the path to Japan feel clear and achievable. My dream is to speak Japanese fluently and become a confident international professional, and Hana has given me the tools to make that happen. Since joining, my speaking, listening, reading, and writing have all improved. I now communicate in Japanese with a confidence I never had before.</p>
			</div>

			<div class="voice-card">
				<div class="voice-card__header">
					<div class="voice-card__avatar">
						<img
							src="<?php echo esc_url( get_template_directory_uri() . '/images/puruna.png' ); ?>"
							alt="Puruna Rambhau Nartam"
							width="56" height="56"
							loading="lazy"
						>
					</div>
					<div>
						<div class="voice-card__name">Puruna Rambhau Nartam</div>
						<div class="voice-card__meta">Caregiver &middot; Age 26</div>
					</div>
				</div>
				<p class="voice-card__quote">I chose Hana for its student-focused approach and excellent support. Reaching N4 in just four months seemed impossible, but after experiencing the classes myself, I was truly impressed. My childhood dream of living in Japan never faded. Learning Japanese at Hana is the first real step toward making that dream a reality. Since joining, I have grown far more confident through the fun classes, daily practice, and supportive sensei. I feel truly prepared for my future in Japan.</p>
			</div>

		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/section', 'cta' ); ?>

<?php get_footer(); ?>
