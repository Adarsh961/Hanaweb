<?php
/**
 * Template Name: About Us
 */
get_header(); ?>
<section class="page-hero">
	<div class="container">
		<h1>About Hana Global Edutech</h1>
		<p>Bridging students in India to a brighter future in Japan &mdash; through language, training, and genuine care.</p>
	</div>
</section>




<section class="about-story">
    <div class="container">
        <div class="about-story__grid">

            <div class="about-story__media">
                <img
                    src="<?php echo esc_url( get_template_directory_uri() . '/images/about-certificates.png' ); ?>"
                    alt="Hana Global Edutech students and Japanese team members holding their Japanese language certificates"
                    loading="lazy">
                
            </div>

            <div class="about-story__text">
                <span class="about-story__eyebrow ">Our Foundation</span>
                <h2>Empowering Global Careers, Guiding Every Step</h2>
                <p>Based in Hyderabad, Hana Global Edutech is a premier training institution dedicated to preparing students for successful careers in Japan. We offer comprehensive solutions—from Japanese language proficiency and technical skills training to direct job placement and post-arrival transition support.

Our dedicated bilingual team acts as a trusted mentor at every stage of the journey, ensuring a seamless, transparent, and fully supported transition to life and work in Japan.</p>
                
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Talk to our team</a>
            </div>

        </div>
    </div>
</section>

<section class="section" style="padding-top: 2rem;">
	<div class="container">

<div class="about-unified">
<!-- MISSION -->
<div class="about-mission reveal">
    <span class="about-mission__petal about-mission__petal--1" aria-hidden="true">🌸</span>
    <span class="about-mission__petal about-mission__petal--2" aria-hidden="true">🌸</span>
    <p class="about-mission__label">Our Mission</p>
    <p class="about-mission__statement">Enriching the lives of those we walk along with.</p>
</div>

<!-- VALUES -->
<div class="about-values reveal">
    <span class="about-mission__petal about-mission__petal--1" aria-hidden="true">🌸</span>
    <span class="about-mission__petal about-mission__petal--2" aria-hidden="true">🌸</span>
    <p class="about-values__label">Our Values</p>

    <div class="about-values__grid">
        <div class="about-value" style="--d:0s">
            <span class="about-value__num">01</span>
            <div class="about-value__icon">🌱</div>
            <h3>Nurturing Potential</h3>
            <p>We believe in every student&rsquo;s potential and help them grow it into real, usable skill.</p>
        </div>

        <div class="about-value" style="--d:.24s">
            <span class="about-value__num">02</span>
            <div class="about-value__icon">🎯</div>
            <h3>Delivering Results</h3>
            <p>We measure our success by the real opportunities and outcomes you achieve.</p>
        </div>

        <div class="about-value" style="--d:.12s">
            <span class="about-value__num">03</span>
            <div class="about-value__icon">🤝</div>
            <h3>Building Trust</h3>
            <p>Every promise we make to you, we keep &mdash; consistently and transparently.</p>
        </div>
        
        <div class="about-value" style="--d:.36s">
            <span class="about-value__num">04</span>
            <div class="about-value__icon">⛰️</div>
            <h3>Embracing Challenges</h3>
            <p>We grow alongside you, treating every challenge as a step toward progress.</p>
        </div>
    </div>
</div>

<!-- HANA 2030 VISION -->
<div class="about-vision reveal">
    <span class="about-mission__petal about-mission__petal--1" aria-hidden="true">🌸</span>
    <span class="about-mission__petal about-mission__petal--2" aria-hidden="true">🌸</span>
    <p class="about-vision__label">Vision 2030</p>

    <img class="about-vision__img" src="<?php echo esc_url( get_template_directory_uri() . '/images/vision-2030.jpg' ); ?>" alt="Hana Global Edutech students">
    <p class="about-vision__statement">Achieve India&rsquo;s No. 1 track record for sending students to Japan, and Japan&rsquo;s No. 1 settlement rate.</p>
</div>
</div><!-- /.about-unified -->
	</div><!-- /.container -->
</section>

<script>
(function () {
    var items = document.querySelectorAll('.reveal');
    if (!('IntersectionObserver' in window) || !items.length) return;
    document.documentElement.classList.add('reveal-ready');
    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (e.isIntersecting) {
                e.target.classList.add('is-visible');
                io.unobserve(e.target);
            }
        });
    }, { threshold: 0.15 });
    items.forEach(function (el) { io.observe(el); });
})();
</script>

<?php get_template_part( 'template-parts/section', 'cta' ); ?>

<?php get_footer(); ?>