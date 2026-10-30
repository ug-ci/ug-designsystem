/* UG header: po zamknięciu menu kliknięciem/dotknięciem fokus nie zostaje na hamburgerze.
   Klawiatura (Enter/Spacja/Esc) zachowuje domyślne zachowanie WordPressa (fokus wraca na przycisk). */
(function () {
	var pointer = false;
	var sel = '.ug-header .wp-block-navigation__responsive-container-open, .ug-header .wp-block-navigation__responsive-container-close';
	document.addEventListener('click', function (e) {
		if (e.target.closest(sel)) { pointer = e.detail > 0; }
	}, true);
	function release() {
		if (!pointer) { return; }
		var a = document.activeElement;
		if (a && a !== document.body && a.closest && a.closest('.ug-header')) { a.blur(); }
		pointer = false;
	}
	new MutationObserver(function () {
		if (!document.documentElement.classList.contains('has-modal-open')) {
			setTimeout(release, 0); setTimeout(release, 120);
		}
	}).observe(document.documentElement, { attributes: true, attributeFilter: ['class'] });

	/* Accordion w menu mobilnym: WordPress w overlayu ustawia wszystkie podmenu jako otwarte,
	   więc stanem steruje klasa .ug-acc-open (jedna otwarta naraz), a aria-expanded jest synchronizowane. */
	var toggleSel = '.ug-header .is-menu-open button.wp-block-navigation-submenu__toggle';
	function sync(scope) {
		(scope || document).querySelectorAll(toggleSel).forEach(function (b) {
			var li = b.closest('.wp-block-navigation-submenu');
			b.setAttribute('aria-expanded', li && li.classList.contains('ug-acc-open') ? 'true' : 'false');
		});
	}
	document.addEventListener('click', function (e) {
		var b = e.target.closest(toggleSel);
		if (!b) { return; }
		e.preventDefault();
		e.stopImmediatePropagation();
		var li = b.closest('.wp-block-navigation-submenu');
		var open = !li.classList.contains('ug-acc-open');
		li.parentElement.querySelectorAll(':scope > .wp-block-navigation-submenu.ug-acc-open').forEach(function (x) { x.classList.remove('ug-acc-open'); });
		if (open) { li.classList.add('ug-acc-open'); }
		sync();
	}, true);
	new MutationObserver(function () {
		if (document.documentElement.classList.contains('has-modal-open')) { setTimeout(sync, 0); setTimeout(sync, 150); }
	}).observe(document.documentElement, { attributes: true, attributeFilter: ['class'] });

	/* Lupa w nagłówku: lightbox na całą stronę z polem wyszukiwania. */
	var modal = document.getElementById('ug-search-modal');
	var openBtn = document.querySelector('.ug-search-open');
	if (modal && openBtn) {
		var lastFocus = null;
		var field = function () { return modal.querySelector('input[type="search"]'); };
		var openSearch = function () {
			lastFocus = document.activeElement;
			modal.classList.add('is-open');
			document.documentElement.classList.add('ug-no-scroll');
			openBtn.setAttribute('aria-expanded', 'true');
			modal.setAttribute('role', 'dialog');
			modal.setAttribute('aria-modal', 'true');
			modal.setAttribute('aria-label', 'Search');
			var f = field(); if (f) { f.focus(); }
		};
		var closeSearch = function () {
			modal.classList.remove('is-open');
			document.documentElement.classList.remove('ug-no-scroll');
			openBtn.setAttribute('aria-expanded', 'false');
			if (lastFocus && lastFocus.focus && pointer) { lastFocus.blur(); } else if (lastFocus && lastFocus.focus) { lastFocus.focus(); }
		};
		openBtn.addEventListener('click', function (e) { pointer = e.detail > 0; openSearch(); });
		modal.addEventListener('click', function (e) {
			if (e.target === modal || e.target.closest('.ug-search-close')) { pointer = e.detail > 0; closeSearch(); }
		});
		document.addEventListener('keydown', function (e) {
			if (!modal.classList.contains('is-open')) { return; }
			if (e.key === 'Escape') { pointer = false; closeSearch(); return; }
			if (e.key === 'Tab') {
				var f = modal.querySelectorAll('button, input, a[href]');
				if (!f.length) { return; }
				var first = f[0], last = f[f.length - 1];
				if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
				else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
			}
		});
	}
})();
