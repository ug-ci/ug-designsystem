/* UG slider kart: przewijanie strzałkami (scroll-snap), blokowanie strzałek na końcach, dostępność. */
(function () {
	function init(root) {
		var track = root.querySelector('.ug-slider__track');
		var prev = root.querySelector('.ug-chevron-btn.is-prev');
		var next = root.querySelector('.ug-chevron-btn.is-next');
		if (!track || !prev || !next) { return; }
		root.setAttribute('role', 'region');
		root.setAttribute('aria-roledescription', 'carousel');
		if (!root.getAttribute('aria-label')) { root.setAttribute('aria-label', 'Slider'); }
		track.setAttribute('tabindex', '0');
		function step() {
			var s = track.querySelector('.ug-slide');
			if (!s) { return track.clientWidth; }
			var gap = parseFloat(getComputedStyle(track).columnGap) || 0;
			return s.getBoundingClientRect().width + gap;
		}
		function update() {
			var max = track.scrollWidth - track.clientWidth - 1;
			prev.disabled = track.scrollLeft <= 0;
			next.disabled = track.scrollLeft >= max;
		}
		function go(dir) { track.scrollBy({ left: dir * step(), behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth' }); }
		prev.addEventListener('click', function () { go(-1); });
		next.addEventListener('click', function () { go(1); });
		track.addEventListener('scroll', function () { window.requestAnimationFrame(update); }, { passive: true });
		track.addEventListener('keydown', function (e) {
			if (e.key === 'ArrowRight') { e.preventDefault(); go(1); }
			if (e.key === 'ArrowLeft') { e.preventDefault(); go(-1); }
		});
		window.addEventListener('resize', update);
		update();
	}
	document.querySelectorAll('.ug-slider').forEach(init);
})();
