<?php
/**
 * Template Name: Why Japan
 */
get_header(); ?>

<section class="page-hero">
    <div class="container">
        <h1>Why Japan?</h1>
        <p>Japan is more than just a place to work. It is a place to learn, grow, and build a stronger future.</p>
    </div>
</section>

<!-- INTRO -->
<section class="wj-intro">
    <div class="container">
        <p class="wj-intro__lead reveal">
            Working in Japan gives students opportunities to gain <mark>professional skills</mark>, <mark>international experience</mark>, <mark>Japanese language ability</mark>, and <mark>personal growth</mark>.
        </p>
    </div>
</section>

<!-- INDUSTRIES BAND -->
<section class="wj-industries">
    <div class="container">
        <p class="wj-industries__label reveal about-hana__label">High-demand industries</p>
        <div class="wj-industries__chips">
            <span class="reveal" style="--d:0s">🏥 Caregiving</span>
            <span class="reveal" style="--d:.1s">🏗️ Construction</span>
        </div>
    </div>
</section>

<!-- FIVE REASONS: TIMELINE -->
<section class="wj-reasons">
    <div class="container">
        <p class="wj-reasons__label reveal about-hana__label">Five reasons</p>
        <h2 class="wj-reasons__title reveal">Why students choose Japan</h2>

        <div class="wj-timeline">

            <div class="wj-card reveal">
                <span class="wj-card__num">1</span>
                <div class="wj-card__icon">💼</div>
                <h3>Stable Career Opportunities</h3>
                <p>Japan offers exceptional stability and career longevity across vital industries—such as caregiving, construction, manufacturing, and food service.

By training and working in Japan, you acquire practical technical expertise, cross-cultural competence, and international work standards. The experience and credentials you gain serve as a lifelong professional foundation, giving you a distinct competitive advantage in the global job market.</p>
            </div>

            <div class="wj-card reveal">
                <span class="wj-card__num">2</span>
                <div class="wj-card__icon">🗣️</div>
                <h3>Japanese Language Skills</h3>
                <p>In today's interconnected economy, Japanese communication skills represent a significant strategic advantage. Fluency opens direct access to high-demand sectors in Japan and global Japanese enterprises operating worldwide. By mastering the language, you build a distinguished professional profile that expands your career trajectory far beyond conventional local opportunities.</p>
            </div>

            <div class="wj-card reveal">
                <span class="wj-card__num">3</span>
                <div class="wj-card__icon">🌱</div>
                <h3>Personal Growth</h3>
                <p>Navigating life and work in an international environment is a catalyst for profound personal growth. Beyond technical competencies, independent living abroad develops high-level adaptability, accountability, and maturity. These core qualities serve as a lifelong foundation, enhancing your leadership potential and distinguishing you across all future career paths.</p>
            </div>

            <div class="wj-card reveal">
                <span class="wj-card__num">4</span>
                <div class="wj-card__icon">🌏</div>
                <h3>Global Experience</h3>
                <p>Japan is globally renowned for its commitment to quality, discipline, and operational perfection. Immersing yourself in a Japanese professional environment instills a refined work ethic, structured problem-solving skills, and seamless teamwork. The international communication skills and professional standards you develop in Japan provide a lifetime competitive advantage across global markets.</p>
            </div>

            <div class="wj-card reveal">
                <span class="wj-card__num">5</span>
                <div class="wj-card__icon">👨‍👩‍👧</div>
                <h3>Future Opportunities</h3>
                <p>Securing professional employment in Japan is a strategic catalyst for long-term family growth. Beyond personal advancement, the financial security and international experience you gain establish a strong economic foundation. This transition transforms your family’s trajectory—providing the resources, security, and global exposure necessary to create unprecedented opportunities for the future.</p>
            </div>

        </div>
    </div>
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