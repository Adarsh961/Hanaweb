<?php get_header(); ?>

<!-- ================================================
     HERO — full-bleed background photo
================================================= -->
<section class="hero-lp">
    <video class="hero-bg-video" autoplay muted loop playsinline poster="<?php echo esc_url( get_template_directory_uri() . '/images/hero-bg.png' ); ?>">
        <source src="<?php echo esc_url( get_template_directory_uri() . '/videos/Untitled_design.mp4' ); ?>" type="video/mp4">
    </video>

    <div class="hero-lp__overlay"></div>
	
	<div class="container">
		<div class="hero-lp__inner">

			<div class="hero-lp__content">
				<div class="hero-lp__badge-row">
					<span class="badge-pill">60+ Students Placed</span>
					<span class="badge-pill">JLPT N4 in 6 Months</span>
					<span class="badge-pill">Bilingual Support</span>
				</div>

				<h1 class="hero-lp__title">
					<span class="hero-lp__line">Build Your</span>
					<span class="hero-lp__line hero-lp__line--em"><em>Future in Japan.</em></span>
				</h1>

				<p class="hero-lp__sub">
					From Japanese language training to job placement and life in Japan &mdash; Hana Global Edutech supports you every step of the way.
				</p>

				<div class="hero-lp__actions">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-lg">
						Apply Now &mdash; Free
					</a>
					<a href="<?php echo esc_url( home_url( '/program/' ) ); ?>" class="btn btn-outline btn-outline--light">
						See the Program
					</a>
				</div>

				<p class="hero-lp__note">No obligation &nbsp;&middot;&nbsp; Free consultation &nbsp;&middot;&nbsp; Results in 6 months</p>
			</div>

		</div>
	</div>
</section>

<!-- ================================================
     TRUST BAR
================================================= -->
<div class="trust-bar-lp">
	<div class="container">
		<div class="trust-grid">
			<div class="trust-item">
				<strong>60+</strong>
				<span>Active Students</span>
			</div>
			<div class="trust-item">
				<strong>6</strong>
				<span>Months Program</span>
			</div>
			<div class="trust-item">
				<strong>N4</strong>
				<span>Japanese in 6 Months</span>
			</div>
			<div class="trust-item">
				<strong>300+</strong>
				<span>Partner Companies</span>
			</div>
		</div>
	</div>
</div>

<!-- ================================================
     WHY HANA
================================================= -->
<section class="section section--pink">
	<div class="container">
		<div class="why-hana-grid">

			<div class="why-hana__visual">
				<img
					src="<?php echo esc_url( get_template_directory_uri() . '/images/classroom-1.jpg' ); ?>"
					alt="Hana classroom"
					width="520" height="400"
					loading="lazy"
				>
			</div>

			<div class="why-hana__text">
				<p class="section-label about-hana__label">About HANA</p>
				<h2 class="section-title about-hana__title">
					Why do Hana students succeed<br>from day one in Japan?
				</h2>
				<p>
					It is because <strong>the organization behind us is different.</strong><br>
					Our sister company has operated Japanese language schools in Japan for over a decade. We bring that proven educational excellence directly to India.
				</p>
				<ul class="why-hana__list">
					<li>Native Japanese instructors on-site in Hyderabad</li>
					<li>Bilingual support team who understand both Indian and Japanese mindsets</li>
					<li>Industry-leading retention rate backed by 300+ partner companies</li>
				</ul>
				<a href="<?php echo esc_url( home_url( '/program/' ) ); ?>" class="btn btn-primary" style="margin-top:1.25rem;">
					See the Full Program &rarr;
				</a>
			</div>

		</div>
	</div>
</section>

<!-- ================================================
     INLINE CTA
================================================= -->
<section class="placed-banner reveal">
    <span class="placed-banner__petal placed-banner__petal--1" aria-hidden="true">🌸</span>
    <span class="placed-banner__petal placed-banner__petal--2" aria-hidden="true">🌸</span>
    <span class="placed-banner__petal placed-banner__petal--3" aria-hidden="true">🌸</span>

    <div class="container placed-banner__inner">
        <div class="placed-banner__text">
            <span class="placed-banner__pill">🎉 Placement success</span>
            <h2>Congratulations to our students who got placed!</h2>
            <p>Your dream of working in Japan can be next. Consultation is free.</p>
        </div>
    </div>
</section>


<!-- ================================================
    trail 1
================================================= -->
<!-- ================================================
     IMAGE SCROLL
================================================= -->
<div class="image-slider">
    <div class="image-track">

        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/photo1.png' ); ?>" alt="HANA Classroom">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/photo2.png' ); ?>" alt="HANA Classroom">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/photo3.png' ); ?>" alt="HANA Classroom">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/photo4.png' ); ?>" alt="Bilingual Support">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/photo5.png' ); ?>" alt="Bilingual Support">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/images/photo6.png' ); ?>" alt="HANA Classroom">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/images/photo7.png' ); ?>" alt="HANA Classroom">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/images/photo8.png' ); ?>" alt="HANA Classroom">
        <!-- Duplicate for seamless scrolling -->
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/photo1.png' ); ?>" alt="HANA Classroom">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/photo2.png' ); ?>" alt="HANA Classroom">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/photo3.png' ); ?>" alt="HANA Classroom">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/photo4.png' ); ?>" alt="Bilingual Support">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/photo5.png' ); ?>" alt="Bilingual Support">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/images/photo6.png' ); ?>" alt="HANA Classroom">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/images/photo7.png' ); ?>" alt="HANA Classroom">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/images/photo8.png' ); ?>" alt="HANA Classroom">
    </div>
</div>






<!-- ================================================
     PAIN POINTS
================================================= -->
<section class="section pain-section">
	<div class="container">
		<p class="section-label text-center about-hana__label">Common Concerns</p>
		<h2 class="section-title text-center">
			Do you have worries like these?
		</h2>

		<div class="pain-grid">
			<div class="pain-item">
				<span class="pain-icon">&#x2717;</span>
				<span>Is Japanese really too difficult to learn from scratch?</span>
			</div>
			<div class="pain-item">
				<span class="pain-icon">&#x2717;</span>
				<span>Will I actually get placed in a real Japanese company?</span>
			</div>
			<div class="pain-item">
				<span class="pain-icon">&#x2717;</span>
				<span>How do I handle the visa and all the documents?</span>
			</div>
			<div class="pain-item">
				<span class="pain-icon">&#x2717;</span>
				<span>What if I struggle to adapt after arriving in Japan?</span>
			</div>
			<div class="pain-item">
				<span class="pain-icon">&#x2717;</span>
				<span>How will I communicate at work without perfect Japanese?</span>
			</div>
			<div class="pain-item">
				<span class="pain-icon">&#x2717;</span>
				<span>Is this program really worth the investment?</span>
			</div>
		</div>

		<div class="pain-solution">
			<p class="pain-solution__label">These concerns are completely resolved by</p>
			<p class="pain-solution__name">Hana Global Edutech</p>
			<p class="pain-solution__sub">with one fully integrated program &mdash; from training to life in Japan.</p>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white">
				Talk to Us for Free &rarr;
			</a>
		</div>
	</div>
</section>

<!-- ================================================
     REASONS
================================================= -->
<section class="section reasons-section">
	<div class="container">
		<h2 class="section-title text-center">Reasons Students Choose Hana</h2>

		<!-- Reason 01 -->
		<div class="reason-block">
			<div class="reason-block__inner">
				<div class="reason-block__visual">
					<img
						src="<?php echo esc_url( get_template_directory_uri() . '/images/classroom-2.jpg' ); ?>"
						alt="Japanese language class"
						width="520" height="380"
						loading="lazy"
					>
				</div>
				<div class="reason-block__text">
					<span class="reason-block__num">01</span>
					<h3>Japanese Language Training<br>by Native Instructors</h3>
					<p>
						Hana Global Edutech delivers an intensive, immersion-based Japanese language curriculum designed for rapid fluency. By combining conversational practice from day one with the pedagogical standards of leading Japanese language academies, our native instruction team enables dedicated students to reach JLPT N4 benchmark standards in four months.
					</p>
					<a href="<?php echo esc_url( home_url( '/program/' ) ); ?>" class="reason-block__link">
						Learn more about the program &rarr;
					</a>
				</div>
			</div>
		</div>

		<!-- Reason 02 (reversed) -->
		<div class="reason-block reason-block--alt">
			<div class="reason-block__inner">
				<div class="reason-block__visual">
					<img
						src="<?php echo esc_url( get_template_directory_uri() . '/images/classroom-3.jpg' ); ?>"
						alt="5 step training program"
						width="520" height="380"
						loading="lazy"
					>
				</div>
				<div class="reason-block__text">
					<span class="reason-block__num">02</span>
					<h3>6-Month Comprehensive<br>Program — All in One</h3>
					<p>
						Language, skills tests, Japanese culture, business manners, interview preparation, visa &amp; documents. Everything you need to be ready for Japan is included in one structured 6-month program. No gaps, no guesswork &mdash; just a clear path forward.
					</p>
					<a href="<?php echo esc_url( home_url( '/program/' ) ); ?>" class="reason-block__link">
	                   See what&rsquo;s included &rarr;
                    </a>
				</div>
			</div>
		</div>

		<!-- Reason 03 -->
		<div class="reason-block">
			<div class="reason-block__inner">
				<div class="reason-block__visual">
					<img
						src="<?php echo esc_url( get_template_directory_uri() . '/images/bilingual-support.jpg' ); ?>"
						alt="Bilingual support team"
						width="520" height="380"
						loading="lazy"
					>
				</div>
				<div class="reason-block__text">
					<span class="reason-block__num">03</span>
					<h3>Bilingual Support<br>from India to Japan — and Beyond</h3>
					<p>
						Our dedicated bilingual team deeply understands both Indian and Japanese mindsets. Support starts before you leave India and continues after you arrive in Japan. We bridge the gap between you and your employer to ensure long-term stability and success.
					</p>
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="reason-block__link">
						Talk to our support team &rarr;
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ================================================
     INLINE CTA
================================================= -->
<div class="inline-cta-strip">
	<div class="container">
		<p>For inquiries about <strong>Hana Global Edutech&rsquo;s program</strong> &mdash; consultation is completely free.</p>
		<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white">
			Apply Now &mdash; Free Consultation
		</a>
	</div>
</div>

<!-- ================================================
     STUDENT VOICES
================================================= -->
<section class="section section--pink">
	<div class="container">
		<p class="section-label text-center about-hana__label">Student Voices</p>
		<h2 class="section-title text-center">
			Students Building Their Future in Japan
		</h2>

		<div class="voices-carousel">
			<button class="voices-arrow voices-arrow--prev" aria-label="Previous testimonials">&larr;</button>

			<div class="voices-carousel__viewport">
				<div class="voices-track">

					<div class="voice-card">
						<div class="voice-card__header">
							<div class="voice-card__avatar">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/images/voice-huileng.jpg' ); ?>" alt="Huileng Katumchon" width="56" height="56">
							</div>
							<div>
								<div class="voice-card__name">Huileng Katumchon</div>
								<div class="voice-card__meta">Caregiver &middot; Age 22</div>
							</div>
						</div>
						<p class="voice-card__quote">I chose Hana because its values and growth path align with what I was looking for. From training to placement support, it is reliable and committed to every student&rsquo;s success.</p>
					</div>

					<div class="voice-card">
						<div class="voice-card__header">
							<div class="voice-card__avatar">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/images/voice-sonawane.jpg' ); ?>" alt="Sonawane Vrushabh Bhau" width="56" height="56">
							</div>
							<div>
								<div class="voice-card__name">Sonawane Vrushabh Bhau</div>
								<div class="voice-card__meta">Construction &middot; Age 21</div>
							</div>
						</div>
						<p class="voice-card__quote">Since joining, my speaking, listening, reading, and writing have all improved. I now communicate in Japanese with a confidence I never had before. Truly grateful for everything Hana has given me.</p>
					</div>

					<div class="voice-card">
						<div class="voice-card__header">
							<div class="voice-card__avatar">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/images/puruna.png' ); ?>" alt="Puruna Rambhau Nartam" width="56" height="56">
							</div>
							<div>
								<div class="voice-card__name">Puruna Rambhau Nartam</div>
								<div class="voice-card__meta">Caregiver &middot; Age 26</div>
							</div>
						</div>
						<p class="voice-card__quote">Reaching N4 in just four months seemed impossible. But after experiencing the classes myself, I was truly impressed. Learning Japanese at Hana is the first real step toward making my dream a reality.</p>
					</div>

					<div class="voice-card">
						<div class="voice-card__header">

							<div class="voice-card__avatar voice-card__avatar--initial">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/images/voice-sameer.jpg' ); ?>" alt="Sameer" width="56" height="56">
							</div>
							<div>
								<div class="voice-card__name">Sameer More</div>
								<div class="voice-card__meta">Construction &middot; Age 26</div>
							</div>
						</div>
						<p class="voice-card__quote">The instructors here genuinely care about your progress. I went from knowing almost no Japanese to holding real conversations in just a few months.</p>
					</div>

					<div class="voice-card">
						<div class="voice-card__header">

							<div class="voice-card__avatar voice-card__avatar--initial">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/images/voice-anurag.jpg' ); ?>" alt="Anurag" width="56" height="56">
							</div>
							<div>
								<div class="voice-card__name">Anurag Kumar</div>
								<div class="voice-card__meta">Construction &middot; Age 23</div>
							</div>
						</div>
						<p class="voice-card__quote">Hana didn&rsquo;t just teach me the language &mdash; they prepared me for what working in Japan actually feels like. That made all the difference.</p>
					</div>

					<div class="voice-card">
						<div class="voice-card__header">
							<div class="voice-card__avatar voice-card__avatar--initial">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/images/voice-buhaha.jpg' ); ?>" alt="buhaha" width="56" height="56">
							</div>
							<div>
								<div class="voice-card__name">Madhuri Vara Prasad</div>
								<div class="voice-card__meta">Construction &middot; Age 24</div>
							</div>
						</div>
						<p class="voice-card__quote">I was nervous about moving abroad so young, but the support system here made it feel possible. I finally feel ready for what&rsquo;s next.</p>
					</div>

					<div class="voice-card">
						<div class="voice-card__header">
							<div class="voice-card__avatar voice-card__avatar--initial">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/images/voice-vignesh.jpg' ); ?>" alt="Sonawane Vrushabh Bhau" width="56" height="56">
							</div>
							<div>
								<div class="voice-card__name">Vignesh Sandhupatla</div>
								<div class="voice-card__meta">Construction &middot; Age 27</div>
							</div>
						</div>
						<p class="voice-card__quote">Every class, every mock interview, every bit of guidance &mdash; it all added up. I got my placement faster than I expected.</p>
					</div>

				</div>
			</div>

			<button class="voices-arrow voices-arrow--next" aria-label="Next testimonials">&rarr;</button>
		</div>

		<div class="voices-dots"></div>

		<div style="text-align:center;margin-top:2.5rem;">
			<a href="<?php echo esc_url( home_url( '/student-voices/' ) ); ?>" class="btn btn-primary">
				Read All Stories &rarr;
			</a>
		</div>
	</div>
</section>

<!-- ================================================
     MEET OUR TEACHERS
================================================= -->
<section class="section teachers-section">
	<div class="container">
		<p class="section-label text-center about-hana__label">Our Teachers</p>
		<h2 class="section-title text-center">Meet Our Teachers</h2>
		<p class="teachers-intro text-center">
			Learn from experienced instructors who know both the language and the life you are preparing for.
		</p>

		<div class="teachers-carousel">
			<button class="teachers-arrow teachers-arrow--prev" aria-label="Previous teacher">&larr;</button>

			<div class="teachers-carousel__viewport">
				<div class="teachers-track">

					<div class="teacher-card">
						<div class="teacher-card__photo"> <img src="<?php echo esc_url( get_template_directory_uri() . '/images/teacher-miwoo.png' ); ?>" alt="Miwoo Han" width="120" height="120" style="object-position: center 25%;"> </div>
						<h3 class="teacher-card__name">Miwoo Han</h3>
						<p class="teacher-card__role">Director</p>
						<p class="teacher-card__bio">As Director and Japanese educator, I bring years of teaching experience focused on structured guidance and interactive learning. I strive to create an engaging classroom where every student feels motivated and supported on their journey to Japan.</p>
					</div>

					<div class="teacher-card">
						<div class="teacher-card__photo"> <img src="<?php echo esc_url( get_template_directory_uri() . '/images/teacher-hyangseon.png' ); ?>" alt="Hyangseon" width="120" height="120" style="object-position: center 25%;"> </div>
						<h3 class="teacher-card__name">Hyangseon</h3>
						<p class="teacher-card__role">Head of Education</p>
						<p class="teacher-card__bio">As Head of Education, I design tailored, immersive curricula that turn language learning into a practical, rewarding experience. My teaching style combines structured academic rigor with warm, interactive mentorship to help every student thrive in Japan.</p>
					</div>

					<div class="teacher-card">
						<div class="teacher-card__photo teacher-card__photo--initial"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/teacher-shizuku.png' ); ?>" alt="Shizuku" width="120" height="120" style="object-position: center 25%;"> </div>
						<h3 class="teacher-card__name">Shizuku</h3>
						<p class="teacher-card__role">Japanese Language Instructor</p>
						<p class="teacher-card__bio">As a Japanese Language Instructor, I focus on practical, conversational learning that helps students communicate naturally and confidently. My teaching style is interactive and supportive, making every lesson an engaging step toward adapting to life in Japan.</p>
					</div>

					<div class="teacher-card">
						<div class="teacher-card__photo"> <img src="<?php echo esc_url( get_template_directory_uri() . '/images/teacher-ankit.png' ); ?>" alt="Ankit" width="120" height="120" style="object-position: fill 25%;"> </div>
						<h3 class="teacher-card__name">Ankit Singh</h3>
						<p class="teacher-card__role">Japanese Language Instructor</p>
						<p class="teacher-card__bio">At Hana, I help ambitious learners turn their dreams of living and working in Japan into reality. I create an encouraging, structured space where students build strong habits and confidently achieve their career goals. As a passionate educator, I celebrate every milestone and constantly bring fresh, creative approaches to keep learning engaging.</p>
					</div>

					<div class="teacher-card">
						<div class="teacher-card__photo"> <img src="<?php echo esc_url( get_template_directory_uri() . '/images/teacher-laveena.png' ); ?>" alt="Laveena" width="120" height="120" style="object-position: center 25%;"> </div>
						<h3 class="teacher-card__name">Laveena Kapoor</h3>
						<p class="teacher-card__role">Japanese Language Instructor</p>
						<p class="teacher-card__bio">As a Japanese language teacher at Hana, I am passionate about helping students develop their Japanese language skills and prepare for new opportunities in Japan. I strive to create an engaging and supportive learning environment that builds students’ confidence, discipline, and cultural understanding.</p>
					</div>

					<div class="teacher-card">
						<div class="teacher-card__photo teacher-card__photo--initial"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/teacher-shalini.png' ); ?>" alt="Shalini" width="120" height="120" style="object-position: center 25%;"></div>
						<h3 class="teacher-card__name">Shalini</h3>
						<p class="teacher-card__role">Japanese Language Instructor</p>
						<p class="teacher-card__bio">An enthusiastic Japanese educator who finds joy in connecting with students through language and culture. I believe in growing alongside my students and becoming a better educator every day.</p>
					</div>

					<div class="teacher-card">
						<div class="teacher-card__photo"> <img src="<?php echo esc_url( get_template_directory_uri() . '/images/teacher-shruthi.png' ); ?>" alt="Miwoo Han" width="120" height="120" style="object-position: center 25%;"> </div>
						<h3 class="teacher-card__name">Shruthi Lakshmi</h3>
						<p class="teacher-card__role">Japanese Language Instructor</p>
						<p class="teacher-card__bio">With an MA in English Literature and JLPT N2 certification, my Japanese journey began as a self-taught learner. Having experienced the challenges and joys firsthand, I strive to make learning engaging at Hana Global, helping students build the confidence to pursue their dreams in Japan.</p>
					</div>

					<div class="teacher-card">
						<div class="teacher-card__photo"> <img src="<?php echo esc_url( get_template_directory_uri() . '/images/teacher-pranita.png' ); ?>" alt="Pranita" width="120" height="120" style="object-position: center 25%;"> </div>
						<h3 class="teacher-card__name">Pranita Singh</h3>
						<p class="teacher-card__role">japanese Language Instructor</p>
						<p class="teacher-card__bio">As a Japanese Language Instructor, I create an immersive and interactive environment where learning Japanese feels natural and fun. I aim to simplify complex concepts and nurture every student's passion for living and working in Japan.</p>
					</div>

					<div class="teacher-card">
						<div class="teacher-card__photo"> <img src="<?php echo esc_url( get_template_directory_uri() . '/images/teacher-chanchal.png' ); ?>" alt="Chanchal" width="120" height="120" style="object-position: center 25%;"> </div>
						<h3 class="teacher-card__name">Chanchal Sharma</h3>
						<p class="teacher-card__role">Japanese Language Instructor</p>
						<p class="teacher-card__bio">A dedicated language teacher who thrives on seeing students overcome challenges and unlock new possibilities. I view teaching as a shared journey where every lesson is an opportunity to refine my craft, nurture curiosity, and help students build sustainable careers in Japan.</p>
					</div>

					<div class="teacher-card">
						<div class="teacher-card__photo"> <img src="<?php echo esc_url( get_template_directory_uri() . '/images/teacher-ramya.png' ); ?>" alt="Ramya Hegde" width="120" height="120" style="object-position: center 25%;"> </div>
						<h3 class="teacher-card__name">Ramya Hegde</h3>
						<p class="teacher-card__role">Japanese Language Instructor</p>
						<p class="teacher-card__bio">An empathetic educator who believes that learning a language is the key to expanding one’s worldview. I am passionate about mentoring students through their personal growth, learning from their unique perspectives, and evolving into a more inspiring teacher every day.</p>
					</div>

					<div class="teacher-card">
						<div class="teacher-card__photo"> <img src="<?php echo esc_url( get_template_directory_uri() . '/images/teacher-rishu.png' ); ?>" alt="Rishu Kumar" width="120" height="120" style="object-position: center 25%;"> </div>
						<h3 class="teacher-card__name">Rishu Kumar</h3>
						<p class="teacher-card__role">Marketing Head</p>
						<p class="teacher-card__bio">As the Marketing Head at Hana, I am passionate about connecting ambitious learners with life-changing opportunities in Japan. My goal is to build transparent, engaging, and meaningful channels that communicate the true value of our programs, ensuring every student feels informed, supported, and inspired to take the first step toward their global career.</p>
					</div>

				</div>
			</div>

			<button class="teachers-arrow teachers-arrow--next" aria-label="Next teacher">&rarr;</button>
		</div>

		<div class="teachers-dots"></div>
	</div>
</section>

<!-- ================================================
     COURSE QUICK INFO STRIP
================================================= -->
<div class="course-strip">
	<div class="container">
		<div class="course-strip__grid">
			<div class="course-strip__item">
				<span class="course-strip__label">Duration</span>
				<span class="course-strip__val">6 Months</span>
			</div>
			<div class="course-strip__item">
				<span class="course-strip__label">Target Level</span>
				<span class="course-strip__val">JLPT N4 + SSW Prep</span>
			</div>
			<div class="course-strip__item">
				<span class="course-strip__label">Location</span>
				<span class="course-strip__val">Hyderabad</span>
			</div>
			<div class="course-strip__item">
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">
	Get in Touch &rarr;
</a>
			</div>
		</div>
	</div>
</div>

<!-- ================================================
     CTA BANNER
================================================= -->
<?php get_template_part( 'template-parts/section', 'cta' ); ?>




<?php get_footer(); ?>

