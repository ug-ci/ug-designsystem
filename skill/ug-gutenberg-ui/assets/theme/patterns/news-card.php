<?php
/**
 * Title: UG — Karta aktualności (pionowa)
 * Slug: ug/news-card
 * Categories: ug-cards
 * Description: Zdjęcie 180px, data, tytuł Work Sans 600 18px, lead, Read more; dolna linia 1px blue.
 * Keywords: news karta aktualności
 */
?>
<!-- wp:group {"className":"ug-news-card"} -->
<div class="wp-block-group ug-news-card">
<!-- wp:image -->
<figure class="wp-block-image"><img src="<?php echo esc_url( get_theme_file_uri( 'ug/placeholder.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ug-news-card__body"} -->
<div class="wp-block-group ug-news-card__body">
<!-- wp:paragraph {"className":"ug-card-date"} -->
<p class="ug-card-date">05.04.2023</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ug-card-title"} -->
<h3 class="wp-block-heading ug-card-title"><a href="#">Creative writing gets new support</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ug-card-text"} -->
<p class="ug-card-text">Joint conferences, teaching support and growing cooperation within the Gdańsk City of Literature programme.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ug-news-card__footer"} -->
<div class="wp-block-group ug-news-card__footer">
<!-- wp:paragraph {"className":"ug-read-more"} -->
<p class="ug-read-more"><a href="#">Read more</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
