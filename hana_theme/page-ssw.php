<?php
/*
Template Name: SSW
*/
get_header();
?>

<style>
    
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');
.hg{--rose:#b83a68;--blush:#fdeef3;--ink:#1f2a44;--rose:#b83a68;--mist:#f2f6f4;--muted:#5b6478;font-family:'Poppins','Segoe UI',Arial,sans-serif;color:var(--ink);line-height:1.7;font-size:16.5px;width:100vw;margin-left:calc(50% - 50vw);overflow:hidden}
.hg *{box-sizing:border-box}
.hg h1,.hg h2,.hg h3,.hg p{margin:0}
.hg .in{max-width:1100px;margin:0 auto;padding:0 22px}
.hg section{padding:80px 0}
.hg h2{font-size:clamp(26px,3.4vw,38px);font-weight:700;line-height:1.2;margin-bottom:14px}
.hg .eyebrow{border:2px solid var(--rose)}
.hg .eyebrow{display:inline-block;margin-bottom:12px;padding:4px 14px;border-radius:100px;background:var(--blush);color:var(--rose);font-size:12.5px;font-weight:700;letter-spacing:.12em;text-transform:uppercase}
.hg .lead{color:var(--muted);max-width:680px;margin-bottom:38px}
.hg .center{text-align:center}
.hg .center .lead{margin-left:auto;margin-right:auto}

/* Buttons */
.hg .btn{display:inline-block;padding:13px 28px;font-weight:600;text-decoration:none;border-radius:4px;transition:transform .2s;margin:6px 5px}
.hg .btn:hover{transform:translateY(-2px)}
.hg .w{background:#fff;color:var(--rose)}
.hg .o{border:2px solid #fff;color:#fff}
.hg .r{background:var(--rose);color:#fff}

/* Hero */
.hg .hero{position:relative;min-height:90vh;display:flex;align-items:center;justify-content:center;text-align:center;color:#fff;background:linear-gradient(135deg,#d9a35f,#7a8fb8)}
.hg .hero svg{position:absolute;inset:0;width:100%;height:100%;object-fit:cover}
.hg .hero::after{content:"";position:absolute;inset:0;background:linear-gradient(180deg,rgba(31,25,70,.55),rgba(60,25,60,.65))}
.hg .hero .tx{position:relative;z-index:2;max-width:900px;padding:150px 22px 90px}
.hg .hero h1{font-size:clamp(32px,5.6vw,62px);line-height:1.12;font-weight:700;margin-bottom:20px}
.hg .hero p{font-size:clamp(16px,2vw,21px);max-width:720px;margin:0 auto 26px}
.hg .hero .tag{display:inline-block;margin-bottom:18px;padding:6px 18px;border:1px solid rgba(255,255,255,.6);border-radius:100px;font-size:13px;letter-spacing:.12em;text-transform:uppercase}

/* Stats strip */
.hg .stats{padding:0;margin-top:-50px;position:relative;z-index:5}
.hg .stats__box{display:grid;grid-template-columns:repeat(4,1fr);background:#fff;border-radius:22px;box-shadow:0 14px 40px rgba(31,42,68,.14);overflow:hidden}
.hg .stat{padding:28px 18px;text-align:center;border-right:1px solid #eceeed}
.hg .stat:last-child{border-right:0}
.hg .stat strong{display:block;font-size:clamp(22px,3vw,32px);font-weight:800;color:var(--rose);line-height:1.2}
.hg .stat span{font-size:14px;color:var(--muted)}

/* What is SSW */
.hg .what{display:grid;grid-template-columns:1.1fr 1fr;gap:56px;align-items:center}
.hg .what p+p{margin-top:12px}
.hg .what__art{border-radius:26px 6px 26px 6px;background:var(--blush);padding:34px}
.hg .what__art svg{display:block;width:100%;height:auto}
.hg .what__art{padding:0;overflow:hidden}
.hg .what__art img{display:block;width:100%;height:100%;min-height:340px;object-fit:cover}


/* Categories */
.hg .gr{background:var(--mist)}
.hg .cats{display:grid;grid-template-columns:1fr 1fr;gap:24px}
.hg .cat{background:#fff;border-radius:22px;padding:34px 30px;border-top:6px solid var(--rose);box-shadow:0 6px 22px rgba(31,42,68,.06);transition:transform .3s,box-shadow .3s}

.hg .cat:hover{transform:translateY(-8px);box-shadow:0 18px 40px rgba(184,58,104,.16)}
.hg .cat__badge{display:inline-block;margin-bottom:12px;padding:4px 14px;border-radius:100px;background:var(--rose);color:#fff;font-size:13px;font-weight:700}

.hg .cat h3{font-size:22px;font-weight:700;margin-bottom:8px}
.hg .cat>p{color:var(--muted);font-size:15px;margin-bottom:12px}
.hg .ticks{list-style:none;padding:0;margin:0}
.hg .ticks li{padding:8px 0 8px 34px;position:relative;border-bottom:1px solid #eceeed;font-size:15px}
.hg .ticks li::before{content:"✓";position:absolute;left:0;top:10px;width:22px;height:22px;border-radius:50%;background:var(--rose);color:#fff;text-align:center;line-height:22px;font-size:12px;font-weight:700}

/* Requirements */
.hg .req{display:grid;grid-template-columns:repeat(3,1fr);gap:22px}
.hg .req__item{padding:30px 24px;border-radius:20px;background:var(--blush);transition:transform .3s}
.hg .req__item:hover{transform:translateY(-6px)}
.hg .req__ico{display:inline-flex;align-items:center;justify-content:center;width:56px;height:56px;margin-bottom:12px;border-radius:16px;background:#fff;font-size:28px}
.hg .req__item h3{font-size:18px;font-weight:600;margin-bottom:6px}
.hg .req__item p{font-size:15px;color:var(--muted)}

/* Fields */
.hg .fields{display:grid;grid-template-columns:1fr 1fr;gap:24px}
.hg .field{position:relative;display:block;padding:38px 30px 30px;border-radius:24px;color:#fff;text-decoration:none;overflow:hidden;transition:transform .3s,box-shadow .3s}
.hg .field:hover{transform:translateY(-8px);box-shadow:0 20px 44px rgba(31,42,68,.25)}
.hg .field--care{background:linear-gradient(135deg,#b83a68,#e0708f)}
.hg .field--build{background:linear-gradient(135deg,#1f2a44,#4a5f8f)}
.hg .field::after{content:"";position:absolute;width:240px;height:240px;right:-70px;top:-90px;border-radius:50%;background:rgba(255,255,255,.12)}
.hg .field__ico{position:relative;font-size:46px;margin-bottom:8px}
.hg .field h3{position:relative;font-size:26px;font-weight:700;margin-bottom:8px}
.hg .field p{position:relative;font-size:15px;opacity:.95;margin-bottom:18px}
.hg .field__go{position:relative;display:inline-block;padding:8px 18px;border-radius:100px;background:#fff;color:var(--ink);font-weight:600;font-size:14px}
.hg .note{margin-top:22px;text-align:center;color:var(--muted);font-size:15px}

/* Journey */
.hg .journey{display:grid;grid-template-columns:repeat(4,1fr);gap:18px;counter-reset:j;position:relative}
.hg .jstep{position:relative;padding:26px 20px;border-radius:18px;background:#fff;border:1px solid #eceeed;box-shadow:0 6px 22px rgba(31,42,68,.05)}
.hg .jstep::before{counter-increment:j;content:counter(j);display:flex;align-items:center;justify-content:center;width:42px;height:42px;margin-bottom:12px;border-radius:50%;background:var(--rose);color:#fff;font-weight:700}
.hg .jstep h3{font-size:17px;font-weight:600;margin-bottom:4px}
.hg .jstep p{font-size:14.5px;color:var(--muted)}

/* FAQ */
.hg .faq{max-width:820px;margin:0 auto}
.hg details{background:#fff;border:1px solid #eceeed;border-radius:16px;margin-bottom:12px;overflow:hidden}
.hg summary{cursor:pointer;list-style:none;padding:18px 54px 18px 22px;font-weight:600;position:relative}
.hg summary::-webkit-details-marker{display:none}
.hg summary::after{content:"+";position:absolute;right:22px;top:50%;transform:translateY(-50%);font-size:24px;color:var(--rose);transition:transform .2s}
.hg details[open] summary::after{content:"–"}
.hg details[open]{border-color:var(--rose)}
.hg details p{padding:0 22px 20px;color:var(--muted);font-size:15.5px}
.hg .disclaimer{margin-top:18px;text-align:center;font-size:13.5px;color:var(--muted)}
.hg .cat{border-top-color:var(--rose)}
.hg .cat .cat__badge{background:var(--rose)}
.hg .cat .ticks li::before{background:var(--rose)}
@media(max-width:900px){
.hg .what,.hg .cats,.hg .fields{grid-template-columns:1fr}
.hg .req{grid-template-columns:1fr}
.hg .journey{grid-template-columns:1fr 1fr}
.hg .stats__box{grid-template-columns:1fr 1fr}
.hg .stat:nth-child(2){border-right:0}
.hg .stat:nth-child(-n+2){border-bottom:1px solid #eceeed}
.hg section{padding:56px 0}
.hg .hero{min-height:80vh}
}
@media(max-width:520px){.hg .journey{grid-template-columns:1fr}}
</style>

<div class="hg">

<!-- HERO -->
<div class="hero">
<svg viewBox="0 0 1200 600" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
<defs><linearGradient id="sswbg" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#e3b66f"></stop><stop offset="1" stop-color="#8aa1c9"></stop></linearGradient></defs>
<rect width="1200" height="600" fill="url(#sswbg)"></rect>
<g fill="#fff" opacity=".2"><circle cx="900" cy="220" r="150"></circle><circle cx="1050" cy="420" r="90"></circle><circle cx="180" cy="120" r="60"></circle></g>
<rect x="240" y="260" width="300" height="360" rx="130" fill="#b83a68"></rect>
<circle cx="390" cy="200" r="78" fill="#e6b995"></circle>
<path d="M312 190c4-90 150-96 158 0-34-40-120-40-158 0z" fill="#2b2230"></path>
</svg>
<div class="tx">
<span class="tag">Program · SSW</span>
<h1>Specified Skilled Worker (SSW) in Japan</h1>
<p>Hana Global Edutech prepares you in Hyderabad for skilled worker roles with Japanese employers, from language to job placement.</p>
<a class="btn w" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Apply now</a><a class="btn o" href="#fields">Choose a field</a>
</div>
</div>

<!-- STATS -->
<section class="stats">
<div class="in">
<div class="stats__box">
<div class="stat"><strong>2</strong><span>SSW categories</span></div>
<div class="stat"><strong>Up to 5 yrs</strong><span>Stay under SSW (i)</span></div>
<div class="stat"><strong>N4</strong><span>Japanese level to aim for</span></div>
<div class="stat"><strong>60+</strong><span>Hana students placed</span></div>
</div>
</div>
</section>

<!-- WHAT IS SSW -->
<section>
<div class="in what">
<div>
<span class="eyebrow">Overview</span>
<h2>What is SSW?</h2>
<p>Specified Skilled Worker (SSW) is a Japanese visa status created for foreign workers in industries that face high skilled worker shortages. It lets companies hire people who already have the skills and basic Japanese needed to work from day one.</p>
<p>At our Hyderabad center we prepare you for it with Japanese language training, skills training and job placement support, with a bilingual team beside you at each step.</p>
</div>
<div class="what__art">
<img src="<?php echo esc_url( get_template_directory_uri() . '/images/ssw-overview.jpg' ); ?>" alt="Hana Global Edutech students training for SSW" loading="lazy">
</div>
</div>
</section>

<!-- CATEGORIES -->
<section class="gr">
<div class="in">
<div class="center">
<span class="eyebrow">Two categories</span>
<h2>SSW (i) and SSW (ii)</h2>
<p class="lead">Most people begin with SSW (i). SSW (ii) is a later step for workers with advanced skills.</p>
</div>
<div class="cats">
<div class="cat">
<span class="cat__badge">SSW (i)</span>
<h3>Where you start</h3>
<p>For workers with a defined level of skill and basic Japanese.</p>
<ul class="ticks">
<li>Stay of up to 5 years in total</li>
<li>Skills test in your chosen field</li>
<li>Basic Japanese test (such as JLPT N4)</li>
<li>Family generally cannot join you</li>
</ul>
</div>
<div class="cat">
<span class="cat__badge">SSW (ii)</span>
<h3>The next level</h3>
<p>For workers with advanced skills, in a limited number of fields.</p>
<ul class="ticks">
<li>Higher-level skills exam</li>
<li>Status can be renewed without a set limit</li>
<li>Family may be able to join you</li>
<li>Available only in certain fields</li>
</ul>
</div>
</div>
</div>
</section>

<!-- REQUIREMENTS -->
<section>
<div class="in">
<div class="center">
<span class="eyebrow">Getting ready</span>
<h2>What you need to get started</h2>
<p class="lead">Three things make up your preparation. We guide you through all of them.</p>
</div>
<div class="req">
<div class="req__item"><div class="req__ico">🗣️</div><h3>Japanese language</h3><p>Everyday Japanese for work and life. Our classes aim for JLPT N4 in 4 months.</p></div>
<div class="req__item"><div class="req__ico">🛠️</div><h3>Field skills</h3><p>Training for the skills test in your field, such as caregiving or construction.</p></div>
<div class="req__item"><div class="req__ico">📄</div><h3>Documents and interviews</h3><p>Help with paperwork, interview practice and matching with Japanese employers.</p></div>
</div>
</div>
</section>

<!-- FIELDS -->
<section class="gr" id="fields">
<div class="in">
<div class="center">
<span class="eyebrow">Your career path</span>
<h2>Choose your field</h2>
<p class="lead">Pick the career you want to explore. Each page explains the role and how we prepare you.</p>
</div>
<div class="fields">
<a class="field field--care" href="<?php echo esc_url( home_url( '/caregiving/' ) ); ?>">
<div class="field__ico">🏥</div>
<h3>Caregiving</h3>
<p>Support elderly residents in nursing care and elderly care roles, with patience and respect.</p>
<span class="field__go">Explore caregiving →</span>
</a>
<a class="field field--build" href="<?php echo esc_url( home_url( '/construction/' ) ); ?>">
<div class="field__ico">🏗️</div>
<h3>Construction</h3>
<p>Build and maintain structures with a strong focus on safety and quality.</p>
<span class="field__go">Explore construction →</span>
</a>
</div>
<p class="note">Not sure which field suits you? Our team will help you decide.</p>
</div>
</section>

<!-- JOURNEY -->
<section>
<div class="in">
<div class="center">
<span class="eyebrow">Your journey</span>
<h2>From Hyderabad to Japan</h2>
<p class="lead">A clear path, with our team beside you at every stage.</p>
</div>
<div class="journey">
<div class="jstep"><h3>Apply</h3><p>Share your details and we find the right field for you.</p></div>
<div class="jstep"><h3>Train</h3><p>Learn Japanese and field skills at our Hyderabad center.</p></div>
<div class="jstep"><h3>Get matched</h3><p>Interviews, documents and job placement with Japanese employers.</p></div>
<div class="jstep"><h3>Move to Japan</h3><p>Travel with our support for orientation, housing and settling in.</p></div>
</div>
</div>
</section>

<!-- FAQ -->
<section class="gr">
<div class="in">
<div class="center">
<span class="eyebrow">Questions</span>
<h2>Frequently asked questions</h2>
</div>
<div class="faq">
<details><summary>Do I need to know Japanese before I join?</summary><p>No. We teach you from the beginning. You will need basic Japanese for the SSW tests, and our classes aim to bring you to JLPT N4 level.</p></details>
<details><summary>How long can I work in Japan under SSW (i)?</summary><p>SSW (i) allows a total stay of up to 5 years. Some workers later move to SSW (ii) in eligible fields.</p></details>
<details><summary>Can my family come with me?</summary><p>Under SSW (i) families generally cannot accompany you. SSW (ii) may allow it. Our team can explain what applies to you.</p></details>
<details><summary>Which fields can I choose at Hana?</summary><p>You can currently explore Caregiving and Construction through Hana. Contact us to ask about other options.</p></details>
<details><summary>Is the consultation free?</summary><p>Yes. Consultation with our team is free.</p></details>
<p class="disclaimer">SSW rules are set by the Japanese government and can change. Please confirm the latest details with our team or the Immigration Services Agency of Japan.</p>
</div>
</div>
</section>

</div>

<?php get_template_part( 'template-parts/section', 'cta' ); ?>

<?php get_footer(); ?>