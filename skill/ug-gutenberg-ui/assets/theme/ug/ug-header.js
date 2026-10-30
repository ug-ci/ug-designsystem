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
})();
