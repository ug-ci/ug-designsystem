---
name: ug-gutenberg-ui
description: Interfejs graficzny Uniwersytetu Gdańskiego (UG) dla stron WordPress w edytorze Gutenberg — dokładne kolory, czcionki (Work Sans / DM Sans), przyciski, formularze, tagi, karty, stepper, kalendarz, nawigacja, stopka oraz gotowe wzorce bloków, theme.json i CSS. Użyj zawsze, gdy tworzysz, edytujesz lub oceniasz strony, szablony, wzorce lub bloki Gutenberga/WordPress w identyfikacji UG, albo gdy ktoś prosi o stronę „w stylu UG”.
---

# UG Gutenberg UI

Skill do budowania nowych stron WordPress (edytor blokowy) **wiernie** w identyfikacji Uniwersytetu Gdańskiego. Wzorzec wizualny: `assets/ug-design-system-reference.html` (otwórz w przeglądarce — to źródło prawdy dla każdej wartości).

## Jak pracować

1. **Przeczytaj** `references/design-spec.md` (wartości efektywne wszystkich komponentów) i `references/gutenberg-guide.md` (jak zbudować to z bloków).
2. **Upewnij się, że warstwa UI jest zainstalowana w motywie** (`assets/theme/`: `theme.json`, `ug/`, `patterns/`, `functions-snippet.php`). Jeśli nie — zainstaluj według sekcji 1 przewodnika, zanim zaczniesz budować strony.
3. **Buduj ze wzorców** `ug/*` (`<!-- wp:pattern {"slug":"ug/news-card"} /-->`) i klas `ug-*`. Nie wymyślaj nowych stylów komponentów.
4. **Sprawdź** wynik z checklistą poniżej; na WordPressie porównaj z plikiem referencyjnym (sekcja 9 przewodnika).

## Twarde zasady

- **Paleta (tylko te kolory):** blue `#0041d2`, blue-dark `#052D73`, navy `#00153A`, nav `#0F2E6F` (tylko górny pasek), sail `#a1daf8`, foam `#e5f5fd`, white; neutralne `#F5F5F5` `#D9D9D9` `#8EA0C0` `#6B6B6B` `#606060`, szary tekst `#595959`; tekst body `#1a1a2e`; semantyczne error/success/warning/info (+ warianty `-strong` na tekst i tła pod białym tekstem). W blokach używaj **slotów palety** (`blue-dark`, `foam`…), nigdy hexów.
- **Czcionki:** nagłówki **Work Sans 600** (H1 **700**, 64px) w kolorze blue-dark; wszystko inne **DM Sans**. H2 28 · H3 24 · H4 22 · H5 18; lead 18; body 16 (UI 14); small 12; data 11. Rozmiary z presetów motywu — nie ustawiaj ich ręcznie w nagłówkach.
- **Zero zaokrągleń** wszędzie (przyciski, pola, tagi, karty, zdjęcia, menu). Wyjątek: koła — numer steppera, avatar osoby, „dziś” w kalendarzu (klasa `ug-round`).
- **Przyciski:** DM Sans 600 12px uppercase, letter-spacing 1px, wysokość 48px; primary blue → hover blue-dark; outlined 2px blue; dark blue-dark → hover navy; ghost tylko na ciemnym tle/zdjęciu; strzałka 42×11 (`ug-arrow`).
- **Pola formularzy:** 41px, ramka 1px `#6B6B6B`, padding 10/20; focus = ramka blue + pierścień 3px; błąd = ramka `#DE3E44` + komunikat `#A22D32` 12px.
- **Tagi:** kwadratowe, 10px/600 uppercase, padding 4/12.
- **Karty:** dolna linia 1px blue; tytuł Work Sans 600 18px blue-dark; zdjęcia z cieniem 3px (`img`), logo i ikony bez cienia.
- **Nawigacja górna:** tło `#0F2E6F`, białe logo; desktop ≥1024px klasyczne menu w pasku (DM Sans 14px biały, odstęp 30px, hover sail), poniżej hamburger z overlayem i akordeonem; pasek 92px (logo 58px), mobile 80px z samym herbem 35×64.
- **Stopka:** blue-dark (3 kolumny 1.5/1/1) + dolny pasek navy.
- **Logo:** białe na blue/navy/`#0F2E6F`; niebieskie na jasnych tłach; na mobile sam herb.
- **Tła:** maks. 2 kolory tła na widok; biały tekst na ciemnych, nigdy niebieski na navy.
- **Bez:** gradientów, emoji, dekoracyjnych cieni, własnych fontów, animacji innych niż kolor `.15s`/strzałka `.2s`.
- **Dostępność AAA:** szary tekst tylko `#595959`, błąd tekstowy tylko `#A22D32`, kontrast ≥ 7:1 (UI ≥ 3:1). Treści przykładowe w interfejsie po angielsku („Read more”, „Search”).

## Wzorce (`assets/theme/patterns/`)

`ug/header` · `ug/header-campaign` · `ug/footer` · `ug/page-title` · `ug/colors` · `ug/buttons` · `ug/read-more` · `ug/link-box` · `ug/promo-banner` · `ug/tags` · `ug/news-card` · `ug/news-card-horizontal` · `ug/featured-card` · `ug/small-card` · `ug/user-card` · `ug/infobox` · `ug/accordion` · `ug/tabs` · `ug/stepper` · `ug/calendar` · `ug/form` · `ug/search` · `ug/sidebar-menu`

## Pliki

- `references/design-spec.md` — pełna specyfikacja liczbowa + lista niespójności wzorca do rozstrzygnięcia.
- `references/gutenberg-guide.md` — instalacja, mapowanie komponentów na bloki, zasady, test.
- `assets/theme/theme.json` — paleta, typografia, odstępy, cienie, style elementów i bloków.
- `assets/theme/ug/ug-components.css` — style wszystkich komponentów (front + edytor).
- `assets/theme/ug/fonts`, `ug/logos` — fonty (latin + latin-ext) i logotypy.
- `assets/theme/functions-snippet.php` — enqueue, style bloków, kategorie wzorców.
- `assets/ug-design-system-reference.html` — wzorzec wizualny (źródło prawdy).

## Checklista przed oddaniem

- [ ] Kolory tylko ze slotów palety, brak hexów w blokach
- [ ] Nagłówki Work Sans (z motywu), reszta DM Sans; jeden H1
- [ ] Zero zaokrągleń (poza `ug-round`)
- [ ] Komponenty ze wzorców `ug/*`, klasy `ug-*` nienaruszone
- [ ] Maks. 2 kolory tła na widok; białe logo na ciemnym, niebieskie na jasnym
- [ ] Kontrast AAA (szary `#595959`, błąd `#A22D32`); alt przy zdjęciach
- [ ] Brak „Unexpected or invalid content” w edytorze
- [ ] Wygląd zgodny z `ug-design-system-reference.html` (desktop 1440 i mobile 375)
