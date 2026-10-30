<?php
/**
 * Title: UG — Karta osoby
 * Slug: ug/user-card
 * Categories: ug-cards
 * Description: Okrągły avatar 100px, imię, stanowisko, kontakt.
 * Keywords: osoba person user card
 */
?>
<!-- wp:group {"className":"ug-user-card"} -->
<div class="wp-block-group ug-user-card">
<!-- wp:group {"className":"ug-user-card__head"} -->
<div class="wp-block-group ug-user-card__head">
<!-- wp:image {"className":"ug-round"} -->
<figure class="wp-block-image ug-round"><img src="<?php echo esc_url( get_theme_file_uri( 'ug/placeholder.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ug-user-card__name"} -->
<p class="ug-user-card__name">Full name</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ug-user-card__role"} -->
<p class="ug-user-card__role">Head of Department</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ug-user-card__contact"} -->
<p class="ug-user-card__contact"><a href="tel:+48585236044">+48 58 523 60 44</a><a href="mailto:adres.email@ug.edu.pl">adres.email@ug.edu.pl</a>Room A.216</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
