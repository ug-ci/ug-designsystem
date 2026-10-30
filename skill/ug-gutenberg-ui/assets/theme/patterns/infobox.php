<?php
/**
 * Title: UG — Info box
 * Slug: ug/infobox
 * Categories: ug-cards
 * Description: Biały box z dużym cieniem: zdjęcie 130px, tytuł, tekst, Read more.
 * Keywords: infobox about
 */
?>
<!-- wp:group {"className":"ug-infobox"} -->
<div class="wp-block-group ug-infobox">
<!-- wp:image -->
<figure class="wp-block-image"><img src="<?php echo esc_url( get_theme_file_uri( 'ug/placeholder.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ug-infobox__body"} -->
<div class="wp-block-group ug-infobox__body">
<!-- wp:heading {"level":3,"className":"ug-infobox__title"} -->
<h3 class="wp-block-heading ug-infobox__title">About the University</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Qorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ug-read-more"} -->
<p class="ug-read-more"><a href="#">Read more</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
