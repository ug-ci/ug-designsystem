# Budowanie UI UG w edytorze Gutenberg

## 1. Instalacja warstwy UI w motywie

Skopiuj z `assets/theme/` do motywu blokowego (zalecany motyw potomny):

| Z | Do motywu |
|---|---|
| `theme.json` | scal z `theme.json` motywu (palety, fonty, rozmiary, odstępy, cienie, style elementów) — lub podmień, jeśli motyw jest nowy |
| `ug/` (css, js, fonts, logos, placeholder.svg) | `<motyw>/ug/` |
| `patterns/*.php` | `<motyw>/patterns/` |
| `parts/header.html` | `<motyw>/parts/header.html` — nagłówek UG z hamburgerem (wzorzec `ug/header`) w całym motywie |
| `templates/404.html` | `<motyw>/templates/404.html` — strona błędu bez nagłówka i stopki |
| `templates/front-page.html` | `<motyw>/templates/front-page.html` — strona główna bez tytułu (treść = 4 wzorce `ug/home-*`) |
| `templates/page-with-sidebar.html` | `<motyw>/templates/page.html` (lub osobny szablon) — strona z menu bocznym |
| `functions-snippet.php` | wklej do `functions.php` (enqueue CSS + edytor, style bloków, kategorie wzorców) |

Ścieżki w `theme.json` (`file:./ug/fonts/...`) i wzorcach (`get_theme_file_uri('ug/logos/...')`) zakładają tę strukturę. Po instalacji w edytorze pojawią się kategorie **UG — Układ / Komponenty / Karty / Formularze**.

Weryfikacja po instalacji: Wygląd → Edytor → Style pokazuje paletę UG (bez domyślnej WP), fonty Work Sans/DM Sans i brak opcji promienia obramowania.

## 2. Zasada pracy: tokeny z presetów, nie z hexów

- Kolory w blokach przez **sloty palety**: `backgroundColor":"blue-dark"`, `textColor":"white"` → klasy `has-blue-dark-background-color`. Nigdy `style.color.background:"#052D73"`.
- Rozmiary czcionek przez presety (`fontSize":"small"`), odstępy przez `var:preset|spacing|24`, cienie przez `var:preset|shadow|md`.
- Slugi palety: `blue`, `blue-dark`, `navy`, `nav`, `sail`, `foam`, `white`, `ink`, `black`, `gray-100/200/400/500/600`, `gray-text`, `error(-strong)`, `success(-strong)`, `warning(-strong)`, `info(-strong)`.
- Slugi rozmiarów: `caption`(11) `tag`(10) `small`(12) `ui`(14) `base`(16) `lead`(18) `heading-4`(22) `heading-3`(24) `heading-2`(28) `heading-1`(64, fluid 40→64).
- Slugi odstępów: `4 8 12 16 20 24 32 40 48 64`.

## 3. Mapowanie komponentów → bloki

| Komponent | Wzorzec | Bloki / klasy |
|---|---|---|
| Przyciski | `ug/buttons` | `core/button`; style bloku: domyślny (primary), `ug-outlined`, `ug-dark`, `ug-ghost`, `ug-text`; klasy `ug-arrow` (strzałka), `ug-btn-sm` |
| Read more | `ug/read-more` | `core/paragraph.ug-read-more` z linkiem |
| Link Box | `ug/link-box` | `core/paragraph.ug-link-box` z linkiem (cały kafel klikalny) |
| Baner promo | `ug/promo-banner` | `core/group.ug-promo` + `core/heading.ug-promo__title` z linkiem |
| Tagi | `ug/tags` | `core/group.ug-tags` + `core/paragraph.ug-tag[ ug-tag--dark/navy/gray/info/success/error/warning/outlined]`; z taksonomii: `core/post-terms` z klasą `ug-tags` |
| Karta pionowa | `ug/news-card` | `group.ug-news-card` › `image`, `group.ug-news-card__body`, `group.ug-news-card__footer` |
| Karta pozioma | `ug/news-card-horizontal` | `group.ug-news-card--h` |
| Karta wyróżniona | `ug/featured-card` | `group.ug-featured-card` › `image` + `paragraph.ug-featured-card__label` |
| Slider kart | `ug/slider` | `group.ug-slider` › `group.ug-slider__track` (karty `ug-news-card ug-slide`) + `group.ug-slider__nav` (2× `core/html` `ug-chevron-btn`); skrypt `ug/ug-slider.js`. 3 karty ≥782px, 1 karta poniżej; scroll-snap, strzałki, ←/→ |
| Mała karta | `ug/small-card` | `group.ug-small-card` |
| Karta osoby | `ug/user-card` | `group.ug-user-card`; avatar: `image` z klasą `ug-round` |
| Info box | `ug/infobox` | `group.ug-infobox` |
| Accordion | `ug/accordion` | `core/accordion` (WordPress ≥ 7.0): `accordion-item` › `accordion-heading` + `accordion-panel`; style globalnie na klasach `wp-block-accordion*` |
| Tabs | `ug/tabs` | `core/tabs`: `tab-list` + `tab-panels` › `tab-panel`; style na `wp-block-tab-*`, aktywna zakładka `aria-selected="true"` |
| Stepper | `ug/stepper` | `core/list` (uporządkowana) z klasą `ug-stepper`; ukończone: klasa `is-done` na elemencie listy |
| Kalendarz | `ug/calendar` | `core/html` z klasami `ug-cal*` (statyczny; dla danych dynamicznych podłącz wtyczkę wydarzeń i zachowaj klasy) |
| Formularz | `ug/form` | `core/html` z `.ug-form`; formularze wtyczek (CF7, Gravity, WPForms) opakuj w `core/group` z klasą `ug-form` |
| Wyszukiwarka | `ug/search` | `core/search` (style z CSS) |
| Menu boczne | `ug/sidebar-menu` | `core/navigation` z klasą `ug-navmenu` w `group.ug-navmenu-wrap` |
| Nagłówek | `ug/header`, `ug/header-campaign` | `group.ug-header` › logo + herb (`image.ug-logo`, `image.ug-emblem`) + `core/navigation` (`overlayMenu: always`) |
| Stopka | `ug/footer` | `group.ug-footer` › `.ug-footer__main` (siatka `.ug-footer__cols`) + `.ug-footer__sub` |
| Paleta kolorów | `ug/colors` | `group.ug-swatch-card` › `group.ug-swatches` › `group.ug-swatch` (wypełnienie = slot palety) |
| Strona główna | `ug/home-hero`, `ug/home-news`, `ug/home-about`, `ug/home-cta` + `templates/front-page.html` | Hero (blue, H1 + lead + 2 przyciski) · Aktualności (`core/query`, 3 wpisy, siatka 3 kol., karta `ug-news-card`) · O projekcie (`core/columns`: tekst + przycisk / zdjęcie, tło foam) · CTA (blue-dark, wyśrodkowany) |
| Strona 404 | `ug/404` + `templates/404.html` | `group.ug-404` (navy, min-height 100vh, flex): kod 404 sail 200px, H1 biały, tekst sail, przycisk ghost; szablon bez nagłówka i stopki |
| Tytuł strony | `ug/page-title` | `core/heading` H1 + `paragraph.is-style-ug-lead` |

Wstawianie wzorca programowo: `<!-- wp:pattern {"slug":"ug/news-card"} /-->`.

## 4. Nagłówki i hierarchia

Jeden H1 na stronę. H2–H5 zgodnie z tabelą typografii (rozmiary pochodzą z `theme.json` — **nie ustawiaj rozmiaru ręcznie** w bloku Heading, wybierz tylko poziom). Kolor nagłówków (blue-dark) też z `theme.json`; na ciemnym tle ustaw `textColor":"white"`.

## 5. Obrazy

- Cień zdjęć `img` jest globalny (blok `core/image` i `core/post-featured-image`). Logo i ikony: dodaj klasę `ug-logo` lub `ug-icon` — wyłączy cień.
- Nie używaj stylu „Zaokrąglone” ani `border-radius` — jest wyłączony w `theme.json` i wymuszony zerem w CSS. Okrąg tylko przez klasę `ug-round`.
- `alt` obowiązkowy dla zdjęć treści; logo `alt="University of Gdańsk"`.

## 6. Układ i tła sekcji

- Maks. **dwa kolory tła na widok**; typowo biały + foam (`foam`) lub biały + blue-dark.
- Sekcje: `core/group` z `align:full`, `backgroundColor`, padding z presetów (`48`/`64` pion), treść w `layout.type:constrained`.
- Siatki kart: `core/group` z `layout.type:grid` (`minimumColumnWidth:"260px"`) lub `core/columns`; odstęp 24px (`var:preset|spacing|24`).
- Linie kart (1px blue) są częścią komponentu — nie dodawaj osobnych separatorów między kartami.

## 7. Dostępność (WCAG AAA)

- Szary tekst tylko `gray-text`; błąd tylko `error-strong`; tło pod białym tekstem tylko kolory `-strong`/blue/blue-dark/navy. Jasne kolory semantyczne wyłącznie jako ikony, ramki, tła bez tekstu.
- Kontrast tekstu ≥ 7:1, elementy UI ≥ 3:1. Body ≥ 14px, etykiety UI ≥ 10px.
- Focus klawiatury: widoczny (`outline` 3px). Link ze strzałką ma zawsze tekst; hamburger ma `aria-label` (core/navigation dodaje go sam).
- Treść przykładowa w interfejsie — po angielsku („Read more”, „Search”); treści właściwe w języku strony.

## 8. Czego nie robić

- Nie wstawiaj kolorów/rozmiarów jako wartości dowolnych (`#xxxxxx`, `17px`) — tylko presety.
- Nie używaj gradientów, emoji, dekoracyjnych cieni, `border-radius`, własnych fontów.
- Nie przebijaj stylów `!important` poza zerowaniem promieni.
- Nie zmieniaj struktury klas `ug-*` we wzorcach — CSS na nich polega.
- Nie zmieniaj breakpointu menu (1024px) bez zmiany sekcji 15 w CSS — WordPress domyślnie przełącza na 600px.

## 9. Testowanie na WordPressie (Novamira / WP-CLI)

1. Zainstaluj warstwę UI (sekcja 1) na środowisku testowym.
2. Utwórz stronę testową ze wszystkimi wzorcami: `<!-- wp:pattern {"slug":"ug/buttons"} /-->` itd.
3. Porównaj z `assets/ug-design-system-reference.html` (te same szerokości; sprawdź desktop 1440px i mobile 375px): kolory, fonty, wysokości (przycisk 48px, input 41px, nagłówek 92px/80px), brak promieni.
4. W edytorze otwórz stronę i sprawdź, że żaden blok nie jest oznaczony „Unexpected or invalid content” (wzorce pisane ręcznie — jeśli któryś zgłasza błąd, użyj „Spróbuj odzyskać”, zapisz i skopiuj poprawioną serializację z powrotem do pliku wzorca).

## 10. Wyniki testu na WordPressie 7.1.4 (Local, motyw potomny Twenty Twenty-Five)

Sprawdzone na froncie (1440px): wszystkie 20 wzorców rejestruje się i renderuje; zmierzone wartości zgadzają się ze specyfikacją (przycisk 48px/12px/ls 1px, input/select 41px, nagłówek 92px z logo 58px, stopka 3 kolumny, krąg steppera 71px, kalendarz 340px, H1 64px Work Sans 700, brak promieni poza `ug-round`).

Wnioski z testu:
- **Slugi rozmiarów z cyfrą po literze** (`h1`) WordPress zamienia na `h-1` — dlatego używamy `heading-1…4`.
- **Motyw potomny dziedziczy po rodzicu** niektóre presety (np. rozmiary `large`, `x-large`, kolory domyślne rdzenia). Dla pełnej czystości palety użyj samodzielnego motywu blokowego zamiast potomnego, albo nie wybieraj tych presetów.
- **Hamburger:** `core/navigation` z `overlayMenu: always` i atrybutami `overlayBackgroundColor: nav`, `overlayTextColor: white` — bez nich rozwinięte menu ma białe tło i niewidoczne białe linki.
- **Nawigacja w nagłówku:** wzorce `ug/header*` zawierają samozamykający się blok `core/navigation` bez pozycji — WordPress podstawia najnowsze menu (`wp_navigation`) lub listę stron. Menu główne zbuduj w edytorze witryny (Wygląd → Edytor → Nawigacja); podmenu = rozwijane na desktopie i akordeon na mobile. Linki do stron w szkicu (np. polityka prywatności) nie są wyświetlane, dopóki strona nie jest opublikowana.
- **Lupa wyszukiwania:** wzorce nagłówków zawierają przycisk `.ug-search-open` (`core/html`) i lightbox `#ug-search-modal` z blokiem `core/search`; obsługa w `ug/ug-header.js` (otwieranie, Esc, pułapka fokusu, blokada scrolla). Widoczna tylko ≥1024px.
- **Fokus hamburgera:** WordPress po zamknięciu menu oddaje fokus przyciskowi otwierającemu, co przy kliknięciu zostawia widoczną ramkę. `ug/ug-header.js` zdejmuje fokus po zamknięciu menu myszą/dotykiem; z klawiatury zachowanie domyślne (dostępność).
- **Accordion w menu mobilnym:** WordPress w overlayu ustawia wszystkie podmenu jako otwarte (`aria-expanded=true`), więc nie da się ich zwinąć natywnie. `ug/ug-header.js` przejmuje kliknięcie przełącznika: klasa `.ug-acc-open` na elemencie podmenu, jedno otwarte naraz, `aria-expanded` synchronizowane; CSS animuje `max-height` (.25s, wyłączane przy `prefers-reduced-motion`). Domyślnie wszystko zwinięte.
- **Menu boczne** używa przycisków `wp-block-navigation-submenu__toggle`; podmenu rozwija się kliknięciem (`aria-expanded`), nie ma stanu „rozwinięte” w statycznym wzorcu.
- **Puste bloki obrazu** nie renderują się na froncie, dlatego wzorce używają `ug/placeholder.svg` (szary #D9D9D9) — zastąp własnym zdjęciem.
- **Walidacja w edytorze** (brak „Unexpected or invalid content”) wymaga zalogowanego edytora — patrz status w raporcie.
- **Cache wzorców motywu:** po dodaniu nowego pliku do `patterns/` WordPress może go nie widzieć — podbij `Version` w `style.css` motywu lub wywołaj `wp_get_theme()->delete_pattern_cache()`.
- **Serializacja z edytora:** w WordPressie 7 wyrównanie tekstu to `style.typography.textAlign` (klasa `has-text-align-center`), a nie atrybut `align`/`textAlign` — ręcznie pisane atrybuty są po cichu odrzucane. Złożone bloki (query, columns, accordion, tabs) generuj w edytorze (`wp.blocks.createBlock` + `serialize`) i kopiuj gotowy markup do wzorca.
