# UG Design System — specyfikacja efektywna

Źródło: `assets/ug-design-system-reference.html` (kopia „UG Design System.html”).
**Zasada:** podane wartości to to, co strona wzorcowa faktycznie renderuje — gdy styl inline w HTML-u różni się od klasy CSS, obowiązuje inline. Gdy etykieta opisu różni się od próbki, obowiązuje próbka (patrz „Niespójności”).

## 1. Kolory

| Token | Hex | Użycie |
|---|---|---|
| `--ug-blue` | `#0041d2` | przyciski, linki, akcenty, linie kart |
| `--ug-blue-dark` | `#052D73` | nagłówki, hover przycisków, tło stopki |
| `--ug-navy` | `#00153A` | dolny pasek stopki, hover „dark”, głębokie tła |
| `--ug-nav` | `#0F2E6F` | tło górnej nawigacji (poza paletą tokenów — tylko nawigacja) |
| `--ug-sail` | `#a1daf8` | hover pozycji nawigacji, wyróżnienia |
| `--ug-foam` | `#e5f5fd` | tła sekcji, subtelne wypełnienia |
| `--ug-white` | `#FFFFFF` | karty, powierzchnie, tekst odwrócony |
| `--ug-ink` | `#1a1a2e` | tekst podstawowy (body) |
| `--ug-gray-100` | `#F5F5F5` | tło strony wzorcowej, tło menu, tło kalendarza |
| `--ug-gray-200` | `#D9D9D9` | placeholdery zdjęć, linie, podmenu |
| `--ug-gray-400` | `#8EA0C0` | obramowanie stanu disabled |
| `--ug-gray-500` | `#6B6B6B` | ramki pól formularzy |
| `--ug-gray-600` | `#606060` | strzałki steppera |
| `--ug-gray-text` | `#595959` | szary tekst (7:1, spełnia AA i AAA), placeholdery, etykiety |

Semantyczne — wariant jasny tylko na ikony/ramki/tła; wariant `-strong` na tekst i tła pod białym tekstem (kontrast ≥ 7:1, spełnia AA i AAA):

| | jasny | strong |
|---|---|---|
| error | `#DE3E44` | `#A22D32` |
| success | `#1BA345` | `#11662B` |
| warning | `#FEC001` | `#705500` (tag warning: tło `#FEC001` + czarny tekst) |
| info | `#1E9BE8` | `#125D8B` |

Reguły: biały tekst na navy/blue/blue-dark; nigdy niebieski na navy. Maks. 2 kolory tła na widok. Bez gradientów, emoji i dekoracyjnych cieni. (Gradient hero w pliku wzorcowym to ozdoba dokumentacji, nie komponent.)

## 2. Typografia

Fonty: **Work Sans** (nagłówki) i **DM Sans** (reszta). Wagi 400–700, pliki variable `latin` + `latin-ext` (polskie znaki wymagają `latin-ext`) w `assets/theme/ug/fonts/`.

| Styl | Font | Waga | Rozmiar | Line-height | Kolor |
|---|---|---|---|---|---|
| H1 | Work Sans | 600 | 44px (fluid 32→44) | 1.1 | blue-dark |
| H2 | Work Sans | 600 | 28px | 1 | blue-dark |
| H3 | Work Sans | 600 | 24px | 1.1 | blue-dark |
| H4 | Work Sans | 600 | 22px | 1.1 | blue-dark |
| H5 | Work Sans | 600 | 18px | 1.2 | blue-dark |
| Lead | DM Sans | 400 | 18px | 1.4 | ink |
| Body | DM Sans | 400 | 16px | 1.5 | ink |
| Label | DM Sans | 700 | 16px | 1 | ink |
| Small | DM Sans | 400 | 12px | 1.4 | gray-text |
| Caption / data | DM Sans | 400 | 11px | 1.4 | ink |
| UI (menu, pola, karty-tekst) | DM Sans | 400 | 14px | 1.5 | ink |

H1 bez podkreślenia (klasa `.ug-h1-underline` istnieje, ale nie jest użyta w żadnym komponencie wzorca). Mobilny rozmiar H1 (40px) to założenie — wzorzec pokazuje tylko desktop.

## 3. Odstępy, promienie, cienie

- Skala: 4, 8, 12, 16, 20, 24, 32, 40, 48, 64 px (`--ug-sp-*`, preset `spacing--{n}`).
- **Promienie: 0 wszędzie** (`body *{border-radius:0 !important}`). Skala 3/5/8/9999 na stronie wzorcowej jest nadpisana i nie obowiązuje. Wyjątki — koła: numer w stepperze, avatar karty osoby, „dziś” w kalendarzu (klasa `.ug-round`).
- Cienie: `sm` `0 2px 2px rgba(0,0,0,.15)` · `md` `0 4px 16px rgba(0,33,77,.08)` · `infobox` `0 8px 24px rgba(0,33,77,.14)` · `img` `0 1px 3px rgba(0,33,77,.12)` (wszystkie zdjęcia, nie logo/ikony) · `card` `0 4px 10px rgba(0,0,0,.25)` (karta osoby).
- Animacje: tylko kolor/tło `.15s`; strzałki `.2s`; bez innych.
- Układ strony: nie zdefiniowany we wzorcu. Założenie: `contentSize 1140px`, `wideSize 1320px`.

## 4. Przyciski

Wspólne: DM Sans **600, 12px, uppercase, letter-spacing 1px**, `line-height:1`, wysokość **48px**, padding `15px 25px 15px 20px`, gap 10px, bez zaokrągleń, przejście `.15s`.

| Wariant | Tło / tekst | Ramka | Hover |
|---|---|---|---|
| Primary (domyślny) | blue / biały | — | tło blue-dark |
| Outlined (`ug-outlined`) | transparent / blue | 2px blue | tło blue, tekst biały |
| Dark (`ug-dark`) | blue-dark / biały | — | tło navy |
| Ghost (`ug-ghost`, na ciemnym/zdjęciu) | transparent / biały | 2px biała | tło `rgba(255,255,255,.15)` |
| Text (`ug-text`) | transparent / blue | — | tekst blue-dark |
| Read more (`ug-read-more`) | brak tła i ramki, padding 0 | tekst blue (na ciemnym białe), 12px/600 wersaliki, ls 1px | strzałka 42×11 po prawej (gap 8px, hover 12px) — odpowiednik akapitu `.ug-read-more` jako styl przycisku |
| Disabled | `rgba(107,107,107,.1)` / gray-text | gray-400 | brak, `not-allowed` |
| Small (`ug-btn-sm`) | jak wyżej | — | wysokość 36px, padding `8px 16px` |

Strzałka (`ug-arrow`): ikona 42×11 po prawej; na hover przesuwa się o 4px. „Add to basket”: gap 15px, ikona koszyka 16×16 po prawej.

Inne: **Read more** (link ze strzałką 42×11, 12px/600 uppercase, ls 1px, blue; gap 8→12px na hover; na ciemnym tle biały) · **Link Box** (300px, padding 20, ramka inset 2px blue, DM Sans 700 14px, strzałka 46.5px→65.5px na hover; wariant pusty: ramka blue-dark, min-height 89px) · **Login link** (biały 14px z ikoną użytkownika na blue-dark) · **Chevron slidera** (39.5×59px, tło blue, hover blue-dark, biała strzałka).

## 5. Formularze

- Etykieta: DM Sans 700 13px gray-text, odstęp do pola 6px.
- Input: wysokość 41px, padding `10px 20px`, ramka 1px gray-500, tło białe, 14px, placeholder gray-text.
- Focus: ramka blue + pierścień `0 0 0 3px rgba(0,65,210,.25)`. Disabled: tło `rgba(107,107,107,.1)`. Błąd: ramka `#DE3E44`, komunikat 12px `#A22D32`.
- Select: jak input, padding-right 40px, strzałka w dół blue 16×16 po prawej; focus pierścień 2px `rgba(0,65,210,.12)`.
- Wyszukiwarka: input 47px bez prawej ramki + przycisk primary (padding `0 20px`) z białą lupą.
- Pozycje menu rozwijanego: padding `10px 20px`, tło gray-100, DM Sans 600 14px `#303030`, chevron 8px po prawej; hover blue/biały; wybrana blue-dark/biały + cień sm.
- Menu boczne (Kandydaci): tło gray-100, tytuł Work Sans 600 18px blue-dark (padding `24px 24px 12px`), pozycje padding `14px 24px` 14px/500, hover `rgba(0,65,210,.06)`; rozwinięta pozycja blue/biała z chevronem w dół; podmenu tło gray-200, padding pionowy 6px, pozycje `12px 24px 12px 32px`, hover tekst blue.

## 6. Tagi

Kwadratowe, DM Sans **600 10px uppercase**, `line-height:1`, padding `4px 12px`, gap 12px między tagami. Warianty: blue (domyślny) · dark (blue-dark) · navy · gray (`#595959`) · info/success/error (kolory `-strong`) + biały tekst · warning (`#FEC001` + czarny) · outlined (1px blue, tekst blue).

## 7. Karty

Wszystkie zdjęcia: cień `img`, bez zaokrągleń. Data 11px ink. Tytuł Work Sans 600 18px/1.15 blue-dark. Tekst 14px.

- **Pionowa** (max 301px): zdjęcie 180px wys.; body padding `12px 0 15px`, gap 8; stopka z Read more padding `12px 0`; dolna linia 1px blue.
- **Pozioma** (max 628px): zdjęcie 187×137, gap 24, padding-bottom 20, linia 1px blue.
- **Wyróżniona** (max 630px): zdjęcie 320px wys., baner blue u dołu (padding 20), tytuł biały Work Sans 600 14px.
- **Mała**: miniatura 80×80, gap 20, padding-bottom 16, linia 1px blue; tytuł DM Sans 700 14px/1.3 blue-dark.
- **Osoba** (300px): biała, cień `card`, padding `40px 19.5px 19px`, gap 40; avatar koło 100px; imię DM Sans 700 18px blue-dark; rola 11px `#2F2F2F`; kontakt 14px/1.4 (linki blue, odstęp 5px).
- **Info box** (max 410px): biały, cień `infobox`; zdjęcie 130px wys.; body padding 20; tytuł Work Sans 600 18px/1 blue-dark, margines dolny 12px; tekst + Read more.
- **Baner promo** (max 780px): biały, ramka 2px blue, padding `32px 36px`, min-height 180; tytuł Work Sans 600 24px blue; strzałka 42×11 na dole; hover: tło blue, tytuł i strzałka białe.

## 8. Stepper

Kroki 106px szer.; numer w kole 57px (DM Sans 700 26px blue; 20% mniejsze niż we wzorcu 71px/32px); ukończony krok: okrąg 2px blue; etykieta 16px/1.2 czarna, wyśrodkowana; separator strzałka 41×11 gray-600 między krokami.

## 9. Kalendarz

340px, tło gray-100, padding 24, gap 20, ramka inset 1px `#EBEBEB`. Miesiąc DM Sans 700 14px blue-dark; dni tygodnia 700 12px gray-text; komórki dni 36px wys.; „dziś” koło 32px blue, biała liczba 700. Wydarzenia: separator 1px gray-200, godzina 12px gray-text, tytuł 700 14px `#333`.

## 10. Nawigacja górna

Tło `#0F2E6F`, biały tekst. **Desktop ≥1024px: klasyczne menu w pasku** (pozycje DM Sans 400 14px biały, odstęp 30px, wyrównane do prawej krawędzi paska, hover sail .2s; podmenu rozwijane pod pozycją na tle `#0F2E6F`, padding kontenera 12px, pozycje `14px 24px`). **Poniżej 1024px: hamburger** (`icon-bars.svg`) po prawej, pozycje w overlayu.
- Desktop: wysokość 92px, padding `0 25px 0 19px`, logo poziome 58px wys., hamburger 18×15px.
- Kampania: logo + biała pionowa linia 1×62px + hasło (DM Sans 700 14px/1.7, ls .5px, uppercase), gap 28px.
- Mobile: wysokość 80px, sam herb 35×64px, hamburger 17×16px, padding `0 30px 0 22px`.
- Pozycje w rozwiniętym menu: DM Sans 400 14px biały, hover `--ug-sail`, `.2s`.

Nagłówek jest **sticky** (przyklejony do górnej krawędzi okna; przy zalogowanym użytkowniku pod paskiem admina).

### Menu mobilne (overlay hamburgera) — wg makiety

Pełny ekran `#0F2E6F`. Pasek górny 75px: tylko X 24×24 (kreska 2px, prawa krawędź 19px, góra 19px) — bez logo (logo uniwersytetu zostaje w pasku nagłówka pod overlayem). Lista zaczyna się 95px od góry (pasek 75px + 20px marginesu). W wariancie hamburger (`ug/header-hamburger`) ta sama zawartość stoi w panelu offcanvas 300px wjeżdżającym z prawej. Wiersze: wysokość 48px, DM Sans 500 14px biały, padding `0 12px`, linia 1px `rgba(255,255,255,.5)` pod każdym wierszem, kontener z wcięciem 11px po bokach. Pozycja z podmenu: chevron 24×13 po prawej. Wiersz podrzędny: tło `#0C2863` (token `--ug-nav-sub`, ok. 12% ciemniejsze od overlayu `#0F2E6F`, bez ostrego kontrastu z navy), tekst biały, linia `rgba(255,255,255,.18)` (delikatniejsza niż przy nadrzędnych), hover sail. Hover tekstu: sail. Linki nadrzędne wersalikami (uppercase, letter-spacing .5px), podlinki bez zmian. Wysokość wiersza 48px.
Korekty błędów makiety: (1) wiersz podrzędny miał pełną szerokość ekranu, a linie były wcięte — ujednolicono do wcięcia 11px; (2) rozwinięta pozycja miała chevron ∨ (taki sam jak zwinięta) — przyjęto ∨ zwinięte, ∧ rozwinięte.

### Wyszukiwarka w nagłówku (desktop ≥1024px) — rozszerzenie spoza wzorca

Lupa (ikona 20px, biała, hover sail) po prawej stronie menu, przycisk 44×44px. Klik otwiera lightbox na cały ekran: tło `rgba(15,46,111,.97)`, wyśrodkowane pole wyszukiwania (max 640px, input 56px z białą ramką + przycisk primary), X 24×24 w prawym górnym rogu. Esc, klik w tło lub X zamyka; fokus wraca na lupę (klawiatura), scroll strony zablokowany.

### Ikony paska (mobile i tablet)

Hamburger: trzy linie 2px, 26×18px, białe (pole dotyku 52×44px). Lupa: 26px, kreska 1,75px, pole dotyku 44×44px, po lewej od hamburgera (odstęp wizualny ok. 28px). Oba środki w osi pionowej paska. Na desktopie lupa ma 20px po prawej od menu.

### Accordion i Tabs — rozszerzenia spoza wzorca

Design system nie definiuje tych komponentów; zbudowano je z istniejących tokenów (do akceptacji projektanta).
- **Accordion:** linia 1px blue nad pierwszą i pod każdą pozycją; nagłówek Work Sans 600 18px/1.2 blue-dark (hover blue), padding pionowy 16px; chevron blue 14×8 po prawej (obrót 180° po rozwinięciu, 0,2 s); treść DM Sans 16px, padding-bottom 20px; max. szerokość 780px; wiele pozycji może być otwartych naraz.
- **Tabs:** lista z linią 1px gray-200; zakładka DM Sans 600 14px uppercase (ls .5px), padding `14px 24px`, nieaktywna gray-text, hover blue-dark, aktywna blue z linią 3px blue; panel padding `24px 0`, treść 16px. Na mobile lista przewija się poziomo.

### Slider kart — rozszerzenie spoza wzorca

Karty `ug-news-card` w poziomym torze `scroll-snap` (odstęp 24px): 3 karty widoczne od 782px, 1 karta poniżej. Nawigacja: strzałki z wzorca „Chevron Navigation” (39.5×59px, blue, hover blue-dark) po lewej i prawej krawędzi toru, wyśrodkowane w pionie na zdjęciu karty; na końcach zablokowane (gray-200). Obsługa gestu, klawiszy ←/→ i `prefers-reduced-motion`.

### Szablon wpisu

Treść wpisu (data 12px gray-text, H1, obraz wyróżniający 5:3, treść, kategorie jako tagi) w kolumnie **max 900px**, wyśrodkowanej (`contentSize` i `wideSize` = 900px, więc nawet wyrównanie „szeroko” nie wychodzi poza 900px). Pod kategoriami nawigacja „Poprzedni wpis | Następny wpis”: linia 1px blue, dwie kolumny (poprzedni po lewej, następny po prawej), etykieta 12px/700 uppercase blue ze strzałką 42×11 (w lewo / w prawo) nad tytułem Work Sans 600 18px blue-dark (hover blue); na mobile jedna kolumna. Pozostałe szablony używają szerokości 1140/1320px.

### Hero strony głównej

Tło = zdjęcie wyróżniające strony (`core/cover`, „użyj obrazu wyróżniającego”), zamienione na monochromatyczne (`grayscale`) i przykryte overlayem z gradientem pionowym jak w hero centrumsportowe.ug.edu.pl: `linear-gradient(0deg, rgb(6,45,115) 5%, rgba(6,45,115,.83) 52%)` (u dołu pełny blue-dark, od połowy wysokości w górę .83); bez zdjęcia: tło blue pod overlayem. Zdjęcie jest „sticky” (przypięte do okna, efekt parallax; wyłączane przy `prefers-reduced-motion`). Min. wysokość 520px, padding 96px (mobile 56px), treść wyrównana do lewej krawędzi kontenera 1140px, tekst biały.

### CTA strony głównej

Tło: ciemny gradient `linear-gradient(135deg, navy #00153A → blue-dark #052D73)` (jedyny gradient w systemie, na życzenie; wzorzec nadal ma ustawiony kolor blue-dark jako fallback).

## 11. Stopka

Górny pasek blue-dark, padding pionowy 72 (mobile 56) i poziomy 40, dolny pasek navy padding 28/40 (rozszerzenie względem wzorca: 40 / 20), 3 kolumny `1.5fr 1fr 1fr`, gap 32. Kol. 1: logo białe 122×52 + adres (14px/1.7 `rgba(255,255,255,.72)`). Kol. 2–3: tytuł DM Sans 600 18px biały + linki 14px `rgba(255,255,255,.72)` padding pionowy 4px, hover biały. Dolny pasek navy, padding `20px 40px`, wyśrodkowany, 14px `rgba(255,255,255,.8)`.

## 12. Logo

| Plik | Użycie |
|---|---|
| `logo-ug-white.svg` | na blue, navy, blue-dark, `#0F2E6F` (podstawowe) |
| `logo-ug-white-en.svg` | wersja angielska na ciemnych tłach |
| `logo-ug.svg` | na białym / jasnym |
| `logo-ug-en.svg` | wersja angielska na jasnych tłach |
| `logo-emblem-white.svg` / `-blue.svg` | mobile, małe formaty (sam herb 32×51) |
| `logo-mark.svg` | favicon, avatar, ikona aplikacji (herb na blue, 64×64) |
| `icon-bars.svg` | hamburger (biały) |

Zdjęcia dostają cień `img`; logo i ikony nie.

## 13. Niespójności w pliku wzorcowym (do decyzji właściciela)

1. **Lead:** etykieta „DM Sans 500 · 18px”, próbka renderuje 400. Przyjęto **400** (Google Fonts w pliku ładuje tylko 400/700).
2. **Letter-spacing przycisku primary:** próbka nie ma, outlined/dark mają 1px. Przyjęto **1px dla wszystkich** (spójnie z wcześniejszą wersją skilla).
3. **Body:** `<body>` ma 14px, sekcja Typography mówi 16px. Przyjęto **16px dla treści, 14px dla UI** (menu, pola, karty).
4. **Stary `SKILL.md` z projektu Design** podawał wysokość przycisku 40px (HTML: 48px; 36px dla small) oraz tło body `#1a1a2e` jako kolor tekstu — tu obowiązuje plik HTML.
5. **Obszary bez wzorca** (rozszerzone w CSS jako ekstrapolacja, oznaczone w pliku): tabele, cytaty, focus klawiatury (`outline 3px rgba(0,65,210,.5)`), układ szerokości strony, H1 mobile.

### Cytat (`core/quote`) — rozszerzenie
Lewa linia 4px blue, padding 4/0/4/24, tekst 18px/1.4 waga 400, `cite` 12px gray-text. Wzorzec wizualny nie definiuje cytatu; styl wyprowadzony z lead.

### Checkbox i radio — rozszerzenie
Wzorzec wizualny nie definiuje tych pól; styl wyprowadzony z pól tekstowych (`.ug-choice` w `.ug-form`). Kontrolka 20×20, ramka 1px gray-500, tło białe; zaznaczona: tło i ramka blue, biały znaczek (checkbox kwadratowy, radio okrągłe z klasą `ug-round` i białą kropką). Hover: ramka blue; focus: pierścień 3px; błąd: ramka `#DE3E44` + komunikat `#A22D32`; disabled: tło `rgba(107,107,107,.1)`, ramka gray-400. Etykieta DM Sans 14px/400 ink, odstęp od pola 12px; tytuł grupy (`legend`) jak etykieta pola.

### Blok core/calendar — rozszerzenie
Styl `.wp-block-calendar` odwzorowuje komponent `.ug-cal`: karta gray-100 340px (padding 24), nazwa miesiąca DM Sans 700 14px blue-dark, dni tygodnia 700 12px gray-text, komórki 36px bez ramek, dni z wpisami blue 700, dzisiaj = białe 700 na kole blue 32px, nawigacja miesięcy pod linią gray-200 (ukryta, gdy brak sąsiednich miesięcy z wpisami).

### Fokus w menu mobilnym i offcanvas
Bez obwódki i pierścienia. Mysz/dotyk: fokus niewidoczny (WordPress przenosi go na pierwszą pozycję po otwarciu). Klawiatura (`:focus-visible`): dyskretny wskaźnik — tekst sail `#a1daf8` z podkreśleniem 1px (offset 5px), przycisk X z tłem `rgba(255,255,255,.18)`. Spełnia WCAG AA 2.4.7 (Focus Visible); kontrast sail na `#0F2E6F` ≈ 8:1.

### Poziom dostępności
Projekt celuje w **WCAG AA** (wcześniej AAA). Wartości palety (`#595959`, `#A22D32`, warianty `-strong`) zostają bez zmian — dają kontrast ≥ 7:1, więc spełniają też AAA, ale wymogiem jest AA: tekst ≥ 4.5:1 (duży ≥ 3:1), elementy UI ≥ 3:1.

### H1 — odstępstwo od wzorca
Wzorzec wizualny definiuje H1 64px (fluid 40→64), ale przy H2 28px skok skali (×2,3) był nieharmonijny na stronach z treścią. H1 zmniejszony na życzenie do **44px (fluid 32→44), line-height 1.1** (skala: 44 · 28 · 24 · 22 · 18).
