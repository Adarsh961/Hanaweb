<?php
/**
 * Template Name: Program
 */
get_header(); ?>

<section class="page-hero">
	<div class="container">
		<h1>Education Program</h1>
		<p>A structured 5-step path designed to take you from beginner to ready for Japan.</p>
	</div>
</section>

<!-- 5 Steps -->
<section class="section">
	<div class="container">
		<p class="section-label">5 Step Program</p>
		<h2 class="section-title">Your Complete Journey</h2>

		<div class="steps-list" style="max-width:780px;">

			<div class="step-item">
				<div class="step-num">1</div>
				<div class="step-content">
					<h3>Japanese Language Education</h3>
					<p>Practical Japanese communication and JLPT N4 preparation. Our native Japanese instructors teach you not just grammar and vocabulary, but real conversational Japanese that you will use on the job from day one. Classes focus on speaking, listening, reading, and writing in an immersive environment.</p>
				</div>
			</div>

			<div class="step-item">
				<div class="step-num">2</div>
				<div class="step-content">
					<h3>Specified Skilled Worker Training</h3>
					<p>We prepare you specifically for Japan&rsquo;s Specified Skilled Worker (SSW) program requirements. This includes targeted preparation for the skills tests required in your chosen field &mdash; caregiving, construction, food service, and more &mdash; as well as Japanese language proficiency testing.</p>
				</div>
			</div>

			<div class="step-item">
				<div class="step-num">3</div>
				<div class="step-content">
					<h3>Japanese Culture &amp; Business Manners</h3>
					<p>We don&rsquo;t just teach the language &mdash; we immerse you in Japanese corporate culture. You will learn punctuality, teamwork, the art of reporting and communication (Horenso), and professional workplace behavior so that from your very first day on the job, you can seamlessly integrate and contribute as a vital member of your Japanese team.</p>
				</div>
			</div>

			<div class="step-item">
				<div class="step-num">4</div>
				<div class="step-content">
					<h3>Interview &amp; Employment Support</h3>
					<p>Our dedicated bilingual support team bridges the gap between you and your employer. We provide practical mock interviews, job matching based on your skills and goals, and negotiation support to help you find the right position and enter the Japanese workforce with confidence.</p>
				</div>
			</div>

			<div class="step-item">
				<div class="step-num">5</div>
				<div class="step-content">
					<h3>Work in Japan</h3>
					<p>Our support does not end when you get hired. Our dedicated bilingual team &mdash; experts who deeply understand both Indian and Japanese mindsets &mdash; will walk right beside you after you relocate, continuously bridging the gap between you and your employer to ensure long-term stability and an industry-leading retention rate.</p>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- Learning Environment -->
<section class="section section--pink">
	<div class="container">
		<p class="section-label">Learning Environments</p>
		<h2 class="section-title">Where You Learn</h2>
		<p class="section-lead">
			Our Hyderabad training center provides a professional, Japan-inspired learning environment with small class sizes and dedicated native instructors.
		</p>

		<div class="photo-grid">
			<img
				src="<?php echo esc_url( get_template_directory_uri() . '/images/classroom-1.jpg' ); ?>"
				alt="Classroom learning environment"
				width="640" height="220"
				loading="lazy"
			>
			<img
				src="<?php echo esc_url( get_template_directory_uri() . '/images/classroom-2.jpg' ); ?>"
				alt="Students studying Japanese"
				width="640" height="220"
				loading="lazy"
			>
			<img
				src="<?php echo esc_url( get_template_directory_uri() . '/images/classroom-3.jpg' ); ?>"
				alt="Group activities and team work"
				width="640" height="220"
				loading="lazy"
			>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/section', 'cta' ); ?>

<?php get_footer(); ?>
