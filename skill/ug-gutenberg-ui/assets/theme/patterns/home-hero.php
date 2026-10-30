<?php
/**
 * Title: UG — Strona główna — Hero
 * Slug: ug/home-hero
 * Categories: ug-components
 * Description: Hero: zdjęcie wyróżniające strony w tle (core/cover, useFeaturedImage) przyciemnione overlayem navy 80%, H1 i lead białe, dwa przyciski.
 * Keywords: hero baner strona główna zdjęcie
 */
?>
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":80,"overlayColor":"navy","isUserOverlayColor":true,"minHeight":520,"minHeightUnit":"px","contentPosition":"center left","align":"full","className":"ug-home-hero","style":{"spacing":{"padding":{"top":"96px","bottom":"96px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-center-left ug-home-hero" style="padding-top:96px;padding-right:24px;padding-bottom:96px;padding-left:24px;min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-navy-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"textColor":"white"} -->
<h1 class="wp-block-heading has-white-color has-text-color">Projekt, który łączy naukę z praktyką</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-ug-lead","textColor":"white"} -->
<p class="is-style-ug-lead has-white-color has-text-color">Wspólne konferencje, wsparcie dydaktyczne i rosnąca współpraca w ramach programu Gdańsk Miasto Literatury.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-ug-ghost ug-arrow"} -->
<div class="wp-block-button is-style-ug-ghost ug-arrow"><a class="wp-block-button__link wp-element-button" href="#">Poznaj projekt</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-ug-dark"} -->
<div class="wp-block-button is-style-ug-dark"><a class="wp-block-button__link wp-element-button" href="#">Kontakt</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
