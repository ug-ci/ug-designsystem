<?php
/**
 * Title: UG — Strona główna — Aktualności
 * Slug: ug/home-news
 * Categories: ug-components
 * Description: Aktualności: siatka 3 ostatnich wpisów (karty ug-news-card) + przycisk „Wszystkie aktualności”.
 * Keywords: aktualności wpisy news query
 */
?>
<!-- wp:group {"align":"full","className":"ug-home-news","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ug-home-news" style="padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px"><!-- wp:heading -->
<h2 class="wp-block-heading">Aktualności</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
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
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-ug-outlined"} -->
<div class="wp-block-button is-style-ug-outlined"><a class="wp-block-button__link wp-element-button" href="#">Wszystkie aktualności</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
