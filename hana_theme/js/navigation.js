(function () {
	'use strict';

	var toggle = document.querySelector('.menu-toggle');
	var nav    = document.querySelector('.main-navigation');

	if (!toggle || !nav) { return; }

	toggle.addEventListener('click', function () {
		var expanded = this.getAttribute('aria-expanded') === 'true';
		this.setAttribute('aria-expanded', String(!expanded));
		nav.classList.toggle('toggled');
	});

	document.addEventListener('click', function (e) {
		if (!nav.contains(e.target) && !toggle.contains(e.target)) {
			nav.classList.remove('toggled');
			toggle.setAttribute('aria-expanded', 'false');
		}
	});

	document.addEventListener('keydown', function (e) {
		if (e.key === 'Escape' && nav.classList.contains('toggled')) {
			nav.classList.remove('toggled');
			toggle.setAttribute('aria-expanded', 'false');
			toggle.focus();
		}
	});
})();

(function () {
	var header = document.querySelector('.site-header');
	if (!header || !document.body.classList.contains('home')) return;

	var hero = document.querySelector('.hero-lp');
	var triggerPoint = 50;

	function checkScroll() {
		if (window.scrollY > triggerPoint) {
			header.classList.add('is-scrolled');
		} else {
			header.classList.remove('is-scrolled');
		}
	}

	window.addEventListener('scroll', checkScroll);
	checkScroll();
})();
