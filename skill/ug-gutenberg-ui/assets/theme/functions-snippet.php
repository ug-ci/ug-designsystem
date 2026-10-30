<?php
/**
 * UG Gutenberg UI — wklej do functions.php motywu (blokowego lub potomnego).
 * Wymaga: ug/ug-components.css, ug/fonts, ug/logos, patterns/*.php, theme.json z tego skilla.
 */

add_action( 'after_setup_theme', function () {
	// Style komponentów także w edytorze blokowym.
	add_theme_support( 'editor-styles' );
	add_editor_style( 'ug/ug-components.css' );
} );

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'ug-components',
		get_theme_file_uri( 'ug/ug-components.css' ),
		array(),
		filemtime( get_theme_file_path( 'ug/ug-components.css' ) )
	);
	wp_enqueue_script(
		'ug-header',
		get_theme_file_uri( 'ug/ug-header.js' ),
		array(),
		filemtime( get_theme_file_path( 'ug/ug-header.js' ) ),
		array( 'in_footer' => true, 'strategy' => 'defer' )
	);
	wp_enqueue_script(
		'ug-slider',
		get_theme_file_uri( 'ug/ug-slider.js' ),
		array(),
		filemtime( get_theme_file_path( 'ug/ug-slider.js' ) ),
		array( 'in_footer' => true, 'strategy' => 'defer' )
	);
} );

// Style bloków: przyciski (CSS w ug-components.css).
add_action( 'init', function () {
	$styles = array(
		'ug-outlined' => 'UG Outlined',
		'ug-dark'     => 'UG Dark',
		'ug-ghost'    => 'UG Ghost (na ciemnym tle)',
		'ug-text'     => 'UG Text',
		'ug-read-more' => 'UG Read more (ze strzałką)',
	);
	foreach ( $styles as $name => $label ) {
		register_block_style( 'core/button', array( 'name' => $name, 'label' => $label ) );
	}
	register_block_style( 'core/paragraph', array( 'name' => 'ug-lead', 'label' => 'UG Lead' ) );
	register_block_style( 'core/read-more', array( 'name' => 'ug-read-more', 'label' => 'UG Read more (ze strzałką)' ) );
} );

// Kategorie wzorców.
add_action( 'init', function () {
	$cats = array(
		'ug-layout'     => 'UG — Układ (nagłówek, stopka)',
		'ug-components' => 'UG — Komponenty',
		'ug-cards'      => 'UG — Karty',
		'ug-forms'      => 'UG — Formularze',
	);
	foreach ( $cats as $slug => $label ) {
		register_block_pattern_category( $slug, array( 'label' => $label ) );
	}
} );

// Brak wzorców początkowych przy tworzeniu nowej strony (okno „Wybierz wzorzec”): usuwamy wszystkie wzorce
// przeznaczone dla bloku treści wpisu (blockTypes: core/post-content), np. strony startowe motywu bazowego,
// oraz wzorce zdalne z katalogu wordpress.org. Wzorce ug/* pozostają dostępne w wstawiaczu bloków.
add_filter( 'should_load_remote_block_patterns', '__return_false' );
add_action( 'init', function () {
	$registry = WP_Block_Patterns_Registry::get_instance();
	foreach ( $registry->get_all_registered() as $pattern ) {
		if ( in_array( 'core/post-content', $pattern['blockTypes'] ?? array(), true ) ) {
			unregister_block_pattern( $pattern['name'] );
		}
	}
}, 100 );
