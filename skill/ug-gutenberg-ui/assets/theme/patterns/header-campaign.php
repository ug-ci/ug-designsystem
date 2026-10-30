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

<!-- wp:navigation {"overlayMenu":"always","icon":"menu","overlayBackgroundColor":"nav","overlayTextColor":"white","openSubmenusOnClick":true,"layout":{"type":"flex","justifyContent":"right"}} -->
<!-- wp:navigation-link {"label":"Link nadrzędny","type":"custom","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-submenu {"label":"Link nadrzędny","type":"custom","url":"#","kind":"custom"} -->
<!-- wp:navigation-link {"label":"Link podrzędny","type":"custom","url":"#","kind":"custom","isTopLevelLink":false} /-->
<!-- /wp:navigation-submenu -->
<!-- wp:navigation-link {"label":"Link nadrzędny","type":"custom","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"Link nadrzędny","type":"custom","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->
</div>
<!-- /wp:group -->
