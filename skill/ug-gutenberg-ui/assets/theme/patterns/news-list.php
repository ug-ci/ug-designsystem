<?php
/**
 * Title: UG — Aktualności — lista
 * Slug: ug/news-list
 * Categories: ug-components
 * Description: Filtr kategorii (tagi), siatka 3 kolumn kart aktualności z zapytaniem dziedziczonym z szablonu, paginacja UG i komunikat o braku wyników. Używany w szablonach home i archive.
 * Keywords: aktualności wpisy news lista archiwum paginacja kategorie
 */
?>
<!-- wp:group {"className":"ug-news-list"} -->
<div class="wp-block-group ug-news-list"><!-- wp:categories {"className":"ug-tags ug-news-filter"} /-->

<!-- wp:query {"queryId":2,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"ug-news-card"} -->
<div class="wp-block-group ug-news-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"5/3"} /-->

<!-- wp:group {"className":"ug-news-card__body"} -->
<div class="wp-block-group ug-news-card__body"><!-- wp:post-date {"format":"d.m.Y","className":"ug-card-date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ug-card-title"} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":20,"className":"ug-card-text"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ug-news-card__footer"} -->
<div class="wp-block-group ug-news-card__footer"><!-- wp:read-more {"content":"Czytaj więcej","className":"ug-read-more"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"ug-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"Nowsze"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Starsze"} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>Brak aktualności w tej kategorii.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
