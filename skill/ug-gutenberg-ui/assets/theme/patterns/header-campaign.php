<?php
/**
 * Title: UG — Nagłówek (kampania)
 * Slug: ug/header-campaign
 * Categories: ug-layout
 * Description: Nagłówek kampanijny: logo + biała pionowa linia 62px + hasło DM Sans 700 14px uppercase.
 * Keywords: header campaign claim
 */
?>
<!-- wp:group {"className":"ug-header","backgroundColor":"nav","textColor":"white"} -->
<div class="wp-block-group ug-header has-white-color has-nav-background-color has-text-color has-background">
<!-- wp:group {"className":"ug-header__brand"} -->
<div class="wp-block-group ug-header__brand">
<!-- wp:image {"className":"ug-logo","linkDestination":"custom"} -->
<figure class="wp-block-image ug-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'ug/logos/logo-white.svg' ) ); ?>" alt="University of Gdańsk"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"className":"ug-emblem","linkDestination":"custom"} -->
<figure class="wp-block-image ug-emblem"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'ug/logos/logo-emblem-white.svg' ) ); ?>" alt="University of Gdańsk"/></a></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ug-header__divider"} -->
<div class="wp-block-group ug-header__divider"></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ug-header__claim"} -->
<p class="ug-header__claim">Admissions<br>2027/28</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"white","overlayMenu":"mobile","icon":"menu","overlayBackgroundColor":"nav","overlayTextColor":"white","openSubmenusOnClick":true,"layout":{"type":"flex","justifyContent":"right"}} /-->

<!-- wp:html -->
<button type="button" class="ug-search-open" aria-haspopup="dialog" aria-controls="ug-search-modal" aria-expanded="false" aria-label="Search"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true" focusable="false"><circle cx="10.5" cy="10.5" r="6.5"/><path d="M15.5 15.5L21 21"/></svg></button>
<!-- /wp:html -->

<!-- wp:group {"anchor":"ug-search-modal","className":"ug-search-modal"} -->
<div id="ug-search-modal" class="wp-block-group ug-search-modal">
<!-- wp:html -->
<button type="button" class="ug-search-close" aria-label="Close"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true" focusable="false"><path d="M1 1l22 22M23 1L1 23"/></svg></button>
<!-- /wp:html -->

<!-- wp:search {"label":"Szukaj","showLabel":false,"placeholder":"Szukaj","buttonText":"Szukaj","buttonUseIcon":true,"buttonPosition":"button-outside"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
