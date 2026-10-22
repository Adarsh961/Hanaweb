<?php
/* Template for the Caregiving page */
get_header();
?>

<!-- paste the <style> block and the <div class="hg"> ... </div> from my file here -->

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
.hg .hero::after{content:"";position:absolute;inset:0;background:linear-gradient(180deg,rgba(31,25,70,.65),rgba(40,20,50,.78))}
.hg .hero .tx{position:relative;z-index:2;max-width:900px;padding:90px 22px}
.hg .hero h1{font-size:clamp(34px,6vw,68px);line-height:1.12;font-weight:600;margin-bottom:20px}
.hg .hero p{font-size:clamp(16px,2vw,21px);max-width:760px;margin:0 auto 26px}
.hg .hero h1{font-weight:700;text-shadow:0 3px 18px rgba(0,0,0,.55)}
.hg .hero p{text-shadow:0 2px 12px rgba(0,0,0,.55)}

/* Sections */
.hg section{padding:70px 0}
.hg h2{font-size:clamp(26px,3.4vw,38px);font-weight:700;line-height:1.2;margin-bottom:14px}
.hg .lead{color:var(--muted);max-width:640px;margin-bottom:34px}
.hg .split{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center}
.hg .split p+p{margin-top:12px}
.hg .pic{border-radius:26px 6px 26px 6px;overflow:hidden;position:relative;background:var(--blush)}
.hg .pic svg{display:block;width:100%;height:auto}
.hg .pic img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover}

.hg .pic--duo{overflow:visible;background:none;border-radius:0;aspect-ratio:1/1;position:relative}
.hg .pic--duo img{position:absolute;object-fit:cover;box-shadow:0 14px 34px rgba(31,42,68,.18)}
.hg .pic--duo .pic__main{inset:0 14% 14% 0;width:86%;height:86%;border-radius:26px 6px 26px 6px}
.hg .pic--duo .pic__second{right:0;bottom:0;width:48%;height:48%;border-radius:6px 26px 6px 26px;border:6px solid #fff}
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
.hg .cta{background:var(--ink);color:#fff;text-align:center}
.hg .cta h2{color:#fff}
.hg .cta p{color:#d5d9e4;max-width:560px;margin:0 auto 22px}
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

<img src="<?php echo esc_url( get_template_directory_uri() . '/images/caregiving-hero.png' ); ?>" alt="Caregiver smiling with an elderly resident">
<div class="tx">
<h1>Caregiving Careers in Japan</h1>
<p>Bridging Compassion and Opportunity: Your Healthcare Career in Japan Starts Here.</p>
<a class="btn w" href="/contact">Apply now</a><a class="btn o" href="#how-it-works">How it works</a>
</div>
</div>

<section>
<div class="in split">
<div class="pic pic--duo">
<img class="pic__main" src="<?php echo esc_url( get_template_directory_uri() . '/images/caregiving-1.jpg' ); ?>" alt="Caregiver helping an elderly person" loading="lazy">
</div>
<div>
<h2>Start Your Caregiving (Kaigo) Journey to Japan</h2>
<p>Japan needs skilled, compassionate caregivers now more than ever. Our Hyderabad training center gives you everything needed to succeed abroad:

Language & Cultural Mastery: Master Japanese communication suited specifically for healthcare environments.

Professional Skills: Gain practical training tailored to Japanese elder care standards.

Direct Placement & Growth: Secure employment at reputable Japanese care facilities with a clear trajectory for long-term advancement.</p>
<ul class="ticks">
<li>A respected and in-demand profession</li>
<li>Employment with Japanese care facilities</li>
<li>A clear path to long-term growth</li>
</ul>
</div>
</div>
</section>

<section class="gr">
<div class="in">
<h2>The Role of a Caregiver (Kaigo)</h2>
<p class="lead">Caregivers in Japan provide essential, person-centered support designed to help elderly individuals live comfortable and fulfilling lives:</p>
<div class="g3">
<div class="card"><div class="ico">🏥</div><h3>Daily living support</h3><p>Help with meals, bathing, dressing and moving around, always with patience.</p></div>
<div class="card"><div class="ico">💬</div><h3>Companionship</h3><p>Talk, listen and join activities that bring comfort and joy to residents.</p></div>
<div class="card"><div class="ico">🩺</div><h3>Health and safety</h3><p>Work with nurses and staff to keep residents safe and comfortable.</p></div>
</div>
</div>
</section>

<section id="how-it-works">
<div class="in">
<h2>How Hana helps you get there</h2>
<p class="lead">A clear path, with our team beside you at every stage.</p>
<div class="steps">
<div class="step"><h3>Apply</h3><p>Share your details and we find the right program for you.</p></div>
<div class="step"><h3>Train</h3><p>Learn Japanese and caregiving skills at our Hyderabad center.</p></div>
<div class="step"><h3>Get matched</h3><p>We guide you through interviews, documents and job placement.</p></div>
<div class="step"><h3>Move to Japan</h3><p>Travel with our support for orientation, housing and settling in.</p></div>
</div>
</div>
</section>
<?php get_template_part( 'template-parts/section', 'cta' ); ?>

<?php get_footer(); ?>