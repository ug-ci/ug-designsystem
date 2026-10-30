# UG Design System dla WordPressa (Gutenberg)

Design system Uniwersytetu Gdańskiego przeniesiony do edytora blokowego WordPressa — jako **skill dla Claude i Antigravity** oraz gotowa **warstwa motywu blokowego** (theme.json, CSS, wzorce, szablony).

## Cel projektu

Nowe strony UG na WordPressie mają wyglądać identycznie z design systemem (`UG Design System.html`): te same kolory, czcionki i komponenty, bez ręcznego „doklejania” stylów. Projekt dostarcza:

- **skill `ug-gutenberg-ui`** — instrukcje, specyfikację i zasady, dzięki którym asystent AI (Claude, Antigravity) buduje strony w identyfikacji UG,
- **warstwę UI dla motywu blokowego** — paletę, typografię, style komponentów i gotowe wzorce bloków, które używa się wprost w edytorze Gutenberg.

## Co zawiera

| Element | Opis |
|---|---|
| Paleta i typografia | kolory UG jako sloty palety, nagłówki Work Sans 600, treść DM Sans (fonty lokalnie, bez Google Fonts), rozmiary, odstępy, cienie |
| Komponenty | przyciski, formularze, tagi, karty, slider, accordion, zakładki, stepper, kalendarz, infobox, wyszukiwarka, menu boczne |
| Nawigacja | sticky nagłówek z menu desktop, hamburger + akordeon na mobile, lightbox wyszukiwania, wariant kampanijny, stopka |
| Wzorce bloków | 31 wzorców `ug/*` (w tym sekcje strony głównej: hero, aktualności, o projekcie, CTA) |
| Szablony | strona główna, strona z menu bocznym 20/80, wpis (treść do 900 px + nawigacja następny/poprzedni), 404, strona kampanii, strona z menu bocznym |
| Zasady | zero zaokrągleń, dostępność AAA, maks. 2 kolory tła na widok, bez gradientów poza hero i CTA |

## Struktura repozytorium

```
UG Design System.html        wzorzec wizualny (źródło prawdy)
assets/                      logotypy SVG
skill/
  ug-gutenberg-ui/           skill (jedyne miejsce edycji)
    SKILL.md                 punkt wejścia i twarde zasady
    references/              design-spec.md, gutenberg-guide.md
    assets/theme/            theme.json, ug/ (CSS, JS, fonty, logo), patterns/, parts/, templates/
  sync.sh                    generuje kopie dla Claude i Antigravity
wordpress theme/             osobny, niezwiązany motyw potomny (CBBO)
```

## Jak korzystać

### 1. Skill dla Claude / Antigravity

```bash
cd skill
./sync.sh --install
```

Kopiuje skill do `~/.claude/skills/ug-gutenberg-ui` oraz `~/.gemini/antigravity/skills/ug-gutenberg-ui`. Bez `--install` kopie powstają tylko w `skill/dist/`:

- Claude w projekcie: `dist/claude/ug-gutenberg-ui` → `<projekt>/.claude/skills/`
- Antigravity w projekcie: `dist/antigravity/.agent` → katalog główny projektu

Po instalacji wystarczy poprosić asystenta np. „zbuduj stronę wydarzenia w stylu UG” — skill uruchomi się sam.

### 2. Motyw WordPress

Wymagania: WordPress 7.x z motywem blokowym (zalecany motyw potomny, testowano na Twenty Twenty-Five). Pliki z `skill/ug-gutenberg-ui/assets/theme/` kopiujemy do motywu:

| Z | Do motywu |
|---|---|
| `theme.json` | scal lub podmień `theme.json` |
| `ug/` | `<motyw>/ug/` |
| `patterns/`, `parts/`, `templates/` | odpowiednie katalogi motywu |
| `functions-snippet.php` | wklej do `functions.php` |

Pełna instrukcja i mapowanie komponentów na bloki: [`references/gutenberg-guide.md`](skill/ug-gutenberg-ui/references/gutenberg-guide.md).

Po instalacji w edytorze pojawią się kategorie wzorców **UG — Układ / Komponenty / Karty / Formularze**. Sprawdź: Wygląd → Edytor → Style pokazuje paletę UG, fonty Work Sans / DM Sans i brak opcji promienia obramowania.

### 3. Praca w edytorze

Buduj stronę ze wzorców `ug/*` (przycisk **+** → Wzorce) i klas `ug-*`. Kolory wybieraj wyłącznie ze slotów palety, rozmiary nagłówków z presetów motywu. Nie definiuj własnych stylów komponentów.

## Specyfikacja

- [`SKILL.md`](skill/ug-gutenberg-ui/SKILL.md) — zasady i checklista przed oddaniem strony
- [`design-spec.md`](skill/ug-gutenberg-ui/references/design-spec.md) — wartości liczbowe wszystkich komponentów oraz rozstrzygnięcia niespójności wzorca
- [`UG Design System.html`](UG%20Design%20System.html) — otwórz w przeglądarce, by porównać wygląd

## Testy

Warstwa była testowana na lokalnym WordPressie 7.1.4: front na desktopie (1440 px) i mobile (375 px) bez przepełnień, edytor bez nieprawidłowych bloków („Unexpected or invalid content”: 0).

## Status

Wersja robocza. Skill i warstwa motywu są rozwijane razem; zmiany wprowadzaj w `skill/ug-gutenberg-ui/`, a następnie uruchom `./sync.sh`.
