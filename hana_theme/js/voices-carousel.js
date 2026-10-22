/*(function () {
	'use strict';

	document.addEventListener('DOMContentLoaded', function () {
		var track = document.querySelector('.voices-track');
		if (!track) { return; }

		var cards = track.querySelectorAll('.voice-card');
		if (!cards.length) { return; }

		var prevBtn = document.querySelector('.voices-arrow--prev');
		var nextBtn = document.querySelector('.voices-arrow--next');
		var dotsWrap = document.querySelector('.voices-dots');
		var autoplayDelay = 4500;
		var timer = null;

		/* Build dots dynamically, one per card 
		var dots = [];
		if (dotsWrap) {
			cards.forEach(function (card, i) {
				var dot = document.createElement('button');
				dot.className = 'voices-dot';
				dot.setAttribute('aria-label', 'Go to testimonial ' + (i + 1));
				dot.addEventListener('click', function () {
					scrollToCard(i);
					restartAutoplay();
				});
				dotsWrap.appendChild(dot);
				dots.push(dot);
			});
		}

		function getCardStep() {
			var card = cards[0];
			var style = window.getComputedStyle(track);
			var gap = parseFloat(style.columnGap || style.gap || 0);
			return card.offsetWidth + gap;
		}

		function currentIndex() {
			var step = getCardStep();
			return Math.round(track.scrollLeft / step);
		}

		function updateDots() {
			if (!dots.length) { return; }
			var idx = Math.min(currentIndex(), dots.length - 1);
			dots.forEach(function (dot, i) {
				dot.classList.toggle('is-active', i === idx);
			});
		}

		function scrollToCard(index) {
			var step = getCardStep();
			var max = cards.length - 1;
			if (index < 0) { index = max; }
			if (index > max) { index = 0; }
			track.scrollTo({ left: step * index, behavior: 'smooth' });
		}

		function next() { scrollToCard(currentIndex() + 1); }
		function prev() { scrollToCard(currentIndex() - 1); }

		if (nextBtn) {
			nextBtn.addEventListener('click', function () { next(); restartAutoplay(); });
		}
		if (prevBtn) {
			prevBtn.addEventListener('click', function () { prev(); restartAutoplay(); });
		}

		track.addEventListener('scroll', function () {
			window.clearTimeout(track._dotTimeout);
			track._dotTimeout = window.setTimeout(updateDots, 80);
		});

		function startAutoplay() {
			timer = window.setInterval(next, autoplayDelay);
		}
		function stopAutoplay() {
			window.clearInterval(timer);
		}
		function restartAutoplay() {
			stopAutoplay();
			startAutoplay();
		}

		/* Pause on hover/touch so visitors can read in peace 
		track.addEventListener('mouseenter', stopAutoplay);
		track.addEventListener('mouseleave', startAutoplay);
		track.addEventListener('touchstart', stopAutoplay, { passive: true });
		track.addEventListener('touchend', function () {
			window.setTimeout(startAutoplay, 2000);
		});

		updateDots();
		startAutoplay();
	});
})();
*/