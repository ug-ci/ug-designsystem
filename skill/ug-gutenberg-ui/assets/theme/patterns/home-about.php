<?php
/**
 * Title: UG — Strona główna — O projekcie
 * Slug: ug/home-about
 * Categories: ug-components
 * Description: O projekcie: tekst i przycisk po lewej, zdjęcie po prawej na tle foam.
 * Keywords: o projekcie about kolumny
 */
?>
<!-- wp:group {"align":"full","className":"ug-home-about","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"backgroundColor":"foam","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ug-home-about has-foam-background-color has-background" style="padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
<h2 class="wp-block-heading">O projekcie</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Projekt rozwija współpracę badawczą i dydaktyczną Uniwersytetu Gdańskiego z partnerami z kraju i zagranicy. Łączymy konferencje, warsztaty i wymianę doświadczeń.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Zapraszamy do poznania naszych celów, zespołu oraz planowanych wydarzeń.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"ug-arrow"} -->
<div class="wp-block-button ug-arrow"><a class="wp-block-button__link wp-element-button" href="#">Dowiedz się więcej</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"aspectRatio":"3/2","scale":"cover"} -->
<figure class="wp-block-image"><img src="<?php echo esc_url( get_theme_file_uri( 'ug/placeholder.svg' ) ); ?>" alt="" style="aspect-ratio:3/2;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
