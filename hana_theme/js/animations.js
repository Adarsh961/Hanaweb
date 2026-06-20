(function () {
	'use strict';

	if (typeof gsap === 'undefined') { return; }
	gsap.registerPlugin(ScrollTrigger);

	/* ─────────────────────────────────────────────────
	   SET INITIAL STATES (before any frame paints)
	───────────────────────────────────────────────── */
	var isHomepage = document.querySelector('.hero-lp') !== null;

	if (isHomepage) {
		gsap.set([
			'.hero-lp__badge-row',
			'.hero-lp__line',
			'.hero-lp__sub',
			'.hero-lp__actions .btn',
			'.hero-lp__note'
		], { opacity: 0 });

		gsap.set('.hero-lp__badge-row',        { y: 20 });
		gsap.set('.hero-lp__line',             { y: 48 });
		gsap.set('.hero-lp__sub',              { y: 20 });
		gsap.set('.hero-lp__actions .btn',     { y: 16, scale: 0.88 });
		gsap.set('.hero-lp__note',             { y: 10 });
		gsap.set('.hero-lp__visual',           { opacity: 0, x: 32 });
	} else {
		/* Legacy hero selectors for other pages if needed */
		gsap.set([
			'.hero__eyebrow',
			'.hero__line',
			'.hero__subtitle',
			'.hero__actions .btn',
			'.hero__badge'
		], { opacity: 0 });

		gsap.set('.hero__eyebrow',      { y: 20 });
		gsap.set('.hero__line',         { y: 44 });
		gsap.set('.hero__subtitle',     { y: 20 });
		gsap.set('.hero__actions .btn', { y: 16, scale: 0.88 });
		gsap.set('.hero__badge',        { x: 20 });
	}

	/* ─────────────────────────────────────────────────
	   HERO SEQUENCE
	───────────────────────────────────────────────── */
	function playHero() {
		if (isHomepage) {
			var tl = gsap.timeline({ defaults: { ease: 'power3.out' } });
			tl.to('.hero-lp__badge-row', { opacity: 1, y: 0, duration: 0.5 })
			  .to('.hero-lp__line', { opacity: 1, y: 0, duration: 0.7, stagger: 0.14 }, '-=0.2')
			  .to('.hero-lp__sub', { opacity: 1, y: 0, duration: 0.55 }, '-=0.35')
			  .to('.hero-lp__actions .btn', {
					opacity: 1, y: 0, scale: 1,
					duration: 0.5, ease: 'back.out(1.7)', stagger: 0.1
			  }, '-=0.3')
			  .to('.hero-lp__note', { opacity: 1, y: 0, duration: 0.4 }, '-=0.25')
			  .to('.hero-lp__visual', { opacity: 1, x: 0, duration: 0.75, ease: 'power2.out' }, '-=0.7');
		} else {
			var tl = gsap.timeline({ defaults: { ease: 'power3.out' } });
			tl.to('.hero__eyebrow', { opacity: 1, y: 0, duration: 0.55 })
			  .to('.hero__line', { opacity: 1, y: 0, duration: 0.7, stagger: 0.12 }, '-=0.25')
			  .to('.hero__subtitle', { opacity: 1, y: 0, duration: 0.55 }, '-=0.35')
			  .to('.hero__actions .btn', {
					opacity: 1, y: 0, scale: 1,
					duration: 0.5, ease: 'back.out(1.7)', stagger: 0.1
			  }, '-=0.3')
			  .to('.hero__badge', { opacity: 1, x: 0, duration: 0.45, ease: 'power2.out' }, '-=0.3');
		}
	}

	/* ─────────────────────────────────────────────────
	   PAGE LOADER
	───────────────────────────────────────────────── */
	var loader = document.getElementById('hana-loader');

	if (loader) {
		var loaderLogo = loader.querySelector('.loader-logo');
		if (loaderLogo) {
			gsap.fromTo(loaderLogo,
				{ opacity: 0, scale: 0.8 },
				{ opacity: 1, scale: 1, duration: 0.45, ease: 'power2.out' }
			);
		}
		gsap.to(loader, {
			yPercent: -100,
			duration: 0.85,
			ease: 'power3.inOut',
			delay: 0.9,
			onComplete: function () {
				loader.style.display = 'none';
				playHero();
			}
		});
	} else {
		playHero();
	}

	/* ─────────────────────────────────────────────────
	   TRUST BAR ITEMS
	───────────────────────────────────────────────── */
	var trustGrid = document.querySelector('.trust-grid');
	if (trustGrid) {
		gsap.from(trustGrid.querySelectorAll('.trust-item'), {
			y: 20, opacity: 0, duration: 0.5, ease: 'power2.out', stagger: 0.09,
			scrollTrigger: { trigger: trustGrid, start: 'top 88%', once: true }
		});
	}

	/* ─────────────────────────────────────────────────
	   WHY HANA GRID
	───────────────────────────────────────────────── */
	var whyHanaGrid = document.querySelector('.why-hana-grid');
	if (whyHanaGrid) {
		gsap.from(whyHanaGrid.querySelector('.why-hana__visual'), {
			x: -44, opacity: 0, duration: 0.75, ease: 'power2.out',
			scrollTrigger: { trigger: whyHanaGrid, start: 'top 80%', once: true }
		});
		gsap.from(whyHanaGrid.querySelector('.why-hana__text'), {
			x: 44, opacity: 0, duration: 0.75, ease: 'power2.out', delay: 0.1,
			scrollTrigger: { trigger: whyHanaGrid, start: 'top 80%', once: true }
		});
	}

	/* ─────────────────────────────────────────────────
	   PAIN POINTS
	───────────────────────────────────────────────── */
	var painGrid = document.querySelector('.pain-grid');
	if (painGrid) {
		gsap.from(painGrid.querySelectorAll('.pain-item'), {
			y: 24, opacity: 0, duration: 0.45, ease: 'power2.out', stagger: 0.06,
			scrollTrigger: { trigger: painGrid, start: 'top 84%', once: true }
		});
	}

	var painSolution = document.querySelector('.pain-solution');
	if (painSolution) {
		gsap.from(painSolution, {
			y: 36, opacity: 0, duration: 0.65, ease: 'back.out(1.4)',
			scrollTrigger: { trigger: painSolution, start: 'top 85%', once: true }
		});
	}

	/* ─────────────────────────────────────────────────
	   REASON BLOCKS (numbered)
	───────────────────────────────────────────────── */
	gsap.utils.toArray('.reason-block').forEach(function (block) {
		var visual = block.querySelector('.reason-block__visual');
		var text   = block.querySelector('.reason-block__text');
		var isAlt  = block.classList.contains('reason-block--alt');

		if (visual) {
			gsap.from(visual, {
				x: isAlt ? 44 : -44, opacity: 0, duration: 0.75, ease: 'power2.out',
				scrollTrigger: { trigger: block, start: 'top 82%', once: true }
			});
		}
		if (text) {
			gsap.from(text, {
				x: isAlt ? -44 : 44, opacity: 0, duration: 0.75, ease: 'power2.out', delay: 0.1,
				scrollTrigger: { trigger: block, start: 'top 82%', once: true }
			});
		}
	});

	/* ─────────────────────────────────────────────────
	   CEO MESSAGE
	───────────────────────────────────────────────── */
	var ceoGrid = document.querySelector('.ceo-message-grid');
	if (ceoGrid) {
		gsap.from(ceoGrid.querySelector('.ceo-message__photo'), {
			x: -44, opacity: 0, duration: 0.75, ease: 'power2.out',
			scrollTrigger: { trigger: ceoGrid, start: 'top 80%', once: true }
		});
		gsap.from(ceoGrid.querySelector('.ceo-message__text'), {
			x: 44, opacity: 0, duration: 0.75, ease: 'power2.out', delay: 0.1,
			scrollTrigger: { trigger: ceoGrid, start: 'top 80%', once: true }
		});
	}

	/* ─────────────────────────────────────────────────
	   COURSE STRIP
	───────────────────────────────────────────────── */
	var courseStrip = document.querySelector('.course-strip__grid');
	if (courseStrip) {
		gsap.from(courseStrip.querySelectorAll('.course-strip__item'), {
			y: 20, opacity: 0, duration: 0.5, ease: 'power2.out', stagger: 0.08,
			scrollTrigger: { trigger: courseStrip, start: 'top 88%', once: true }
		});
	}

	/* ─────────────────────────────────────────────────
	   FLOATING PETALS (hero background)
	───────────────────────────────────────────────── */
	var heroEl = document.querySelector('.hero');
	if (heroEl) {
		for (var p = 0; p < 16; p++) {
			var petal  = document.createElement('span');
			var size   = 5 + Math.random() * 14;
			var isRound = Math.random() > 0.5;
			petal.style.cssText = [
				'position:absolute',
				'width:'    + size + 'px',
				'height:'   + size + 'px',
				'border-radius:' + (isRound ? '50%' : '50% 0 50% 0'),
				'background:rgba(255,255,255,' + (0.05 + Math.random() * 0.14) + ')',
				'left:'     + (Math.random() * 100) + '%',
				'top:'      + (10 + Math.random() * 90) + '%',
				'pointer-events:none',
				'will-change:transform,opacity'
			].join(';');
			heroEl.appendChild(petal);

			gsap.to(petal, {
				y:          -(70 + Math.random() * 130),
				x:          (Math.random() - 0.5) * 90,
				rotation:   Math.random() * 720 - 360,
				opacity:    0,
				duration:   5 + Math.random() * 5,
				delay:      Math.random() * 4,
				ease:       'none',
				repeat:     -1,
				repeatDelay: Math.random() * 2
			});
		}
	}

	/* ─────────────────────────────────────────────────
	   STATS COUNTER
	───────────────────────────────────────────────── */
	document.querySelectorAll('.stat-num').forEach(function (el) {
		var raw    = el.textContent.trim();
		var match  = raw.match(/\d+/);
		if (!match) { return; }
		var target = parseInt(match[0], 10);
		var suffix = raw.replace(match[0], '');
		var obj    = { val: 0 };

		gsap.to(obj, {
			val: target,
			duration: 1.8,
			ease: 'power1.out',
			onUpdate: function () {
				el.textContent = Math.round(obj.val) + suffix;
			},
			scrollTrigger: {
				trigger: el,
				start: 'top 88%',
				once:  true
			}
		});
	});

	/* ─────────────────────────────────────────────────
	   SECTION LABELS & TITLES
	───────────────────────────────────────────────── */
	gsap.utils.toArray('.section-label').forEach(function (el) {
		gsap.from(el, {
			x: -24, opacity: 0, duration: 0.6, ease: 'power2.out',
			scrollTrigger: { trigger: el, start: 'top 88%', once: true }
		});
	});

	gsap.utils.toArray('.section-title, .page-hero h1').forEach(function (el) {
		gsap.from(el, {
			y: 32, opacity: 0, duration: 0.7, ease: 'power2.out',
			scrollTrigger: { trigger: el, start: 'top 88%', once: true }
		});
	});

	gsap.utils.toArray('.section-lead, .page-hero p').forEach(function (el) {
		gsap.from(el, {
			y: 20, opacity: 0, duration: 0.6, ease: 'power2.out',
			scrollTrigger: { trigger: el, start: 'top 88%', once: true }
		});
	});

	/* ─────────────────────────────────────────────────
	   WHY JAPAN CARDS
	───────────────────────────────────────────────── */
	var reasonGrid = document.querySelector('.reason-grid');
	if (reasonGrid) {
		gsap.from(reasonGrid.querySelectorAll('.reason-card'), {
			y: 52, opacity: 0, duration: 0.6, ease: 'power2.out', stagger: 0.09,
			scrollTrigger: { trigger: reasonGrid, start: 'top 82%', once: true }
		});
	}

	gsap.utils.toArray('.reason-item').forEach(function (el, i) {
		gsap.from(el, {
			x: -44, opacity: 0, duration: 0.65, ease: 'power2.out', delay: i * 0.05,
			scrollTrigger: { trigger: el, start: 'top 86%', once: true }
		});
	});

	/* ─────────────────────────────────────────────────
	   PROGRAM STEPS
	───────────────────────────────────────────────── */
	gsap.utils.toArray('.step-item').forEach(function (el, i) {
		var numEl = el.querySelector('.step-num');
		var tl    = gsap.timeline({
			scrollTrigger: { trigger: el, start: 'top 87%', once: true }
		});

		tl.from(el, {
			x: -32, opacity: 0, duration: 0.55, ease: 'power2.out',
			delay: i * 0.07
		});

		if (numEl) {
			tl.from(numEl, {
				scale: 0, rotation: -120, duration: 0.45, ease: 'back.out(2.5)'
			}, '-=0.25');
		}
	});

	/* ─────────────────────────────────────────────────
	   VOICE CARDS
	───────────────────────────────────────────────── */
	var voiceGrid = document.querySelector('.voices-grid');
	if (voiceGrid) {
		gsap.from(voiceGrid.querySelectorAll('.voice-card'), {
			y: 60, opacity: 0, duration: 0.7, ease: 'power3.out', stagger: 0.14,
			rotationX: 10, transformOrigin: 'center top', transformPerspective: 900,
			scrollTrigger: { trigger: voiceGrid, start: 'top 82%', once: true }
		});
	}

	/* ─────────────────────────────────────────────────
	   ABOUT SECTION
	───────────────────────────────────────────────── */
	var aboutGrid = document.querySelector('.about-grid');
	if (aboutGrid) {
		gsap.from(aboutGrid.querySelector('.about-text'), {
			x: -44, opacity: 0, duration: 0.75, ease: 'power2.out',
			scrollTrigger: { trigger: aboutGrid, start: 'top 80%', once: true }
		});
		gsap.from(aboutGrid.querySelector('.ceo-card'), {
			x: 44, opacity: 0, duration: 0.75, ease: 'power2.out', delay: 0.1,
			scrollTrigger: { trigger: aboutGrid, start: 'top 80%', once: true }
		});
	}

	/* ─────────────────────────────────────────────────
	   FEE CARDS
	───────────────────────────────────────────────── */
	var feeHighlights = document.querySelector('.fee-highlights');
	if (feeHighlights) {
		gsap.from(feeHighlights.querySelectorAll('.fee-card'), {
			y: 40, opacity: 0, duration: 0.6, ease: 'power2.out', stagger: 0.15,
			scrollTrigger: { trigger: feeHighlights, start: 'top 82%', once: true }
		});
	}

	/* ─────────────────────────────────────────────────
	   CONTACT INFO CARDS
	───────────────────────────────────────────────── */
	gsap.utils.toArray('.contact-info-card').forEach(function (el, i) {
		gsap.from(el, {
			y: 30, opacity: 0, duration: 0.55, ease: 'power2.out', delay: i * 0.1,
			scrollTrigger: { trigger: el, start: 'top 88%', once: true }
		});
	});

	/* ─────────────────────────────────────────────────
	   PHOTO GRID
	───────────────────────────────────────────────── */
	var photoGrid = document.querySelector('.photo-grid');
	if (photoGrid) {
		gsap.from(photoGrid.querySelectorAll('img'), {
			scale: 0.88, opacity: 0, duration: 0.65, ease: 'power2.out', stagger: 0.12,
			scrollTrigger: { trigger: photoGrid, start: 'top 84%', once: true }
		});
	}

	/* ─────────────────────────────────────────────────
	   CTA BANNER
	───────────────────────────────────────────────── */
	var ctaBanner = document.querySelector('.cta-banner');
	if (ctaBanner) {
		var ctaH2  = ctaBanner.querySelector('h2');
		var ctaP   = ctaBanner.querySelector('p');
		var ctaBtn = ctaBanner.querySelector('.btn');
		var ctaTl  = gsap.timeline({
			scrollTrigger: { trigger: ctaBanner, start: 'top 80%', once: true }
		});
		if (ctaH2)  { ctaTl.from(ctaH2,  { y: 32, opacity: 0, duration: 0.65, ease: 'power2.out' }); }
		if (ctaP)   { ctaTl.from(ctaP,   { y: 20, opacity: 0, duration: 0.55, ease: 'power2.out' }, '-=0.35'); }
		if (ctaBtn) { ctaTl.from(ctaBtn, { y: 18, opacity: 0, scale: 0.82, duration: 0.5, ease: 'back.out(1.7)' }, '-=0.3'); }
	}

	/* ─────────────────────────────────────────────────
	   MAGNETIC BUTTON HOVER
	───────────────────────────────────────────────── */
	document.querySelectorAll('.btn').forEach(function (btn) {
		btn.addEventListener('mousemove', function (e) {
			var rect = btn.getBoundingClientRect();
			var x    = (e.clientX - rect.left - rect.width  / 2) * 0.25;
			var y    = (e.clientY - rect.top  - rect.height / 2) * 0.25;
			gsap.to(btn, { x: x, y: y, duration: 0.3, ease: 'power2.out', overwrite: true });
		});

		btn.addEventListener('mouseleave', function () {
			gsap.to(btn, { x: 0, y: 0, duration: 0.65, ease: 'elastic.out(1, 0.45)', overwrite: true });
		});
	});

	/* ─────────────────────────────────────────────────
	   HEADER — shadow depth on scroll
	───────────────────────────────────────────────── */
	var masthead = document.getElementById('masthead');
	if (masthead) {
		ScrollTrigger.create({
			start: 'top -40px',
			onEnter:      function () { masthead.style.boxShadow = '0 4px 28px rgba(196,30,91,0.14)'; },
			onLeaveBack:  function () { masthead.style.boxShadow = ''; }
		});
	}

})();
