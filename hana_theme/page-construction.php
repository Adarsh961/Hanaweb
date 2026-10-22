<?php
/*
Template Name: Construction
*/
get_header();
?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
.hg{--rose:#b83a68;--blush:#fdeef3;--ink:#1f2a44;--matcha:#4f7f5f;--mist:#f2f6f4;--muted:#5b6478;font-family:'Poppins','Segoe UI',Arial,sans-serif;color:var(--ink);line-height:1.7;font-size:16.5px;width:100vw;margin-left:calc(50% - 50vw);margin-top:-30px;overflow:hidden}
.hg *{box-sizing:border-box}
.hg h1,.hg h2,.hg h3,.hg p{margin:0}
.hg .in{max-width:1100px;margin:0 auto;padding:0 22px}
.hg .btn{display:inline-block;padding:13px 28px;font-weight:600;text-decoration:none;border-radius:4px;transition:transform .2s;margin:6px 5px}
.hg .btn:hover{transform:translateY(-2px)}
.hg .w{background:#fff;color:var(--rose)}
.hg .o{border:2px solid #fff;color:#fff}
.hg .r{background:var(--rose);color:#fff}
.hg .l{border:2px solid var(--ink);color:var(--ink)}

/* Hero */
.hg .hero{position:relative;min-height:88vh;display:flex;align-items:center;justify-content:center;text-align:center;color:#fff;background:linear-gradient(135deg,#d9a35f,#7a8fb8)}
.hg .hero svg,.hg .hero>img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover}
.hg .hero::after{content:"";position:absolute;inset:0;background:linear-gradient(180deg,rgba(31,25,70,.55),rgba(60,25,60,.6))}
.hg .hero .tx{position:relative;z-index:2;max-width:900px;padding:90px 22px}
.hg .hero h1{font-size:clamp(34px,6vw,68px);line-height:1.12;font-weight:600;margin-bottom:20px}
.hg .hero p{font-size:clamp(16px,2vw,21px);max-width:760px;margin:0 auto 26px}

/* Sections */
.hg section{padding:70px 0}
.hg h2{font-size:clamp(26px,3.4vw,38px);font-weight:700;line-height:1.2;margin-bottom:14px}
.hg .lead{color:var(--muted);max-width:640px;margin-bottom:34px}
.hg .split{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center}
.hg .split p+p{margin-top:12px}
.hg .pic{border-radius:26px 6px 26px 6px;overflow:hidden;position:relative;background:var(--blush)}
.hg .pic svg{display:block;width:100%;height:auto}
.hg .pic img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover}
.hg .ticks{list-style:none;padding:0;margin:18px 0 0}
.hg .ticks li{padding:9px 0 9px 36px;position:relative;border-bottom:1px solid #eceeed}
.hg .ticks li::before{content:"✓";position:absolute;left:0;top:11px;width:24px;height:24px;border-radius:50%;background:var(--matcha);color:#fff;text-align:center;line-height:24px;font-size:13px;font-weight:700}
.hg .gr{background:var(--mist)}
.hg .g3{display:grid;grid-template-columns:repeat(3,1fr);gap:22px}
.hg .card{background:#fff;border-radius:18px;padding:28px 24px;border-top:5px solid var(--rose)}
.hg .card:nth-child(2){border-top-color:var(--rose)}
.hg .card:nth-child(3){border-top-color:var(--rose)}
.hg .card .ico{font-size:32px;margin-bottom:8px}
.hg .card h3{font-size:18px;font-weight:600;margin-bottom:6px}
.hg .card p{color:var(--muted);font-size:15px}
.hg .steps{display:grid;grid-template-columns:repeat(4,1fr);gap:18px;counter-reset:s}
.hg .step{padding:24px 20px;border-radius:16px;background:var(--blush)}
.hg .step::before{counter-increment:s;content:counter(s);display:flex;align-items:center;justify-content:center;width:38px;height:38px;border-radius:50%;background:var(--rose);color:#fff;font-weight:600;margin-bottom:12px}
.hg .step h3{font-size:17px;font-weight:600;margin-bottom:4px}
.hg .step p{font-size:14.5px;color:var(--muted)}
@media(max-width:820px){
.hg .split,.hg .g3{grid-template-columns:1fr}
.hg .steps{grid-template-columns:1fr 1fr}
.hg section{padding:48px 0}
.hg .hero{min-height:78vh}
}
@media(max-width:480px){.hg .steps{grid-template-columns:1fr}}
</style>

<div class="hg">

<div class="hero">
<svg viewBox="0 0 1200 600" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
<defs><linearGradient id="hgbgc" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#e3a65f"></stop><stop offset="1" stop-color="#6f86b5"></stop></linearGradient></defs>
<rect width="1200" height="600" fill="url(#hgbgc)"></rect>
<g fill="#fff" opacity=".2"><rect x="700" y="260" width="120" height="340"></rect><rect x="850" y="180" width="140" height="420"></rect><rect x="1020" y="300" width="120" height="300"></rect></g>
<rect x="240" y="260" width="300" height="360" rx="130" fill="#e07b2f"></rect>
<circle cx="390" cy="200" r="78" fill="#e6b995"></circle>
<path d="M305 195c0-70 170-70 170 0z" fill="#f2c230"></path>
<rect x="296" y="190" width="188" height="16" rx="8" fill="#e0ab18"></rect>
</svg>
<img src="<?php echo esc_url( get_template_directory_uri() . '/images/construction-hero.jpg' ); ?>" alt="Construction worker on site" onerror="this.style.display='none'">
<div class="tx">
<h1>Construction Careers in Japan</h1>
<p>Hana Global Edutech trains and prepares skilled workers in Hyderabad for construction roles with Japanese employers.</p>
<a class="btn w" href="/contact">Apply now</a><a class="btn o" href="#how-it-works">How it works</a>
</div>
</div>

<section>
<div class="in split">
<div class="pic" style="aspect-ratio:4/3">
<img src="<?php echo esc_url( get_template_directory_uri() . '/images/construction-1.jpg' ); ?>" alt="Construction workers on a Japanese site" loading="lazy">
</div>
<div>
<h2>Why Japan needs construction workers</h2>
<p>As Japan actively modernizes and expands its infrastructure, the demand for skilled, reliable construction professionals continues to surge.

At our specialized Hyderabad training center, we provide comprehensive preparation—equipping you with Japanese language proficiency, site safety protocols, and workplace cultural integration so you can step onto Japanese job sites with confidence.</p>
<p>At our Hyderabad training center, we prepare you with the language, safety knowledge and workplace culture you need to work confidently on Japanese sites.</p>
<ul class="ticks">
<li>Steady demand for skilled workers</li>
<li>Employment with Japanese companies</li>
<li>Skills that support long-term career growth</li>
</ul>
</div>
</div>
</section>

<section class="gr">
<div class="in">
<h2>What you will work on</h2>
<p class="lead">You build and maintain the structures that people live and work in, with a strong focus on safety and quality.</p>
<div class="g3">
<div class="card"><div class="ico">🏗️</div><h3>Building work</h3><p>Take part in construction and finishing tasks under skilled supervision.</p></div>
<div class="card"><div class="ico">🦺</div><h3>Site safety</h3><p>Learn Japanese safety standards and practices that protect every worker.</p></div>
<div class="card"><div class="ico">🤝</div><h3>Teamwork</h3><p>Work closely with your team and supervisors, with clear communication.</p></div>
</div>
</div>
</section>

<section id="how-it-works">
<div class="in">
<h2>How Hana helps you get there</h2>
<p class="lead">A clear path, with our team beside you at every stage.</p>
<div class="steps">
<div class="step"><h3>Apply</h3><p>Share your details and we find the right program for you.</p></div>
<div class="step"><h3>Train</h3><p>Learn Japanese and construction skills at our Hyderabad center.</p></div>
<div class="step"><h3>Get matched</h3><p>We guide you through interviews, documents and job placement.</p></div>
<div class="step"><h3>Move to Japan</h3><p>Travel with our support for orientation, housing and settling in.</p></div>
</div>
</div>
</section>

</div>

<?php get_template_part( 'template-parts/section', 'cta' ); ?>

<?php get_footer(); ?>