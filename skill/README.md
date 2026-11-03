# Skill `ug-gutenberg-ui`

Źródło: `ug-gutenberg-ui/` (jedyne miejsce edycji). Kopie generuje `./sync.sh`.

| Cel | Gdzie | Jak |
|---|---|---|
| Claude Code (globalnie) | `~/.claude/skills/ug-gutenberg-ui` | `./sync.sh --install` |
| Claude Code (projekt) | `<projekt>/.claude/skills/ug-gutenberg-ui` | skopiuj `dist/claude/ug-gutenberg-ui` |
| Antigravity (projekt) | `<projekt>/.agent/skills/ug-gutenberg-ui` lub `.agents/skills/...` | skopiuj `dist/antigravity/.agent` |
| Antigravity (globalnie) | `~/.gemini/config/skills/ug-gutenberg-ui` i `~/.gemini/antigravity/skills/...` | `./sync.sh --install` |

> **Uwaga:** Niniejszy skill dotyczy wyłącznie **WordPressa / edytora Gutenberg**. Do portalu głównego `ug.edu.pl` (Drupal + Bootstrap 5.2) służy oddzielny skill `ug-drupal-bootstrap`.

Warstwa UI dla WordPressa (motyw): `ug-gutenberg-ui/assets/theme/` — instalacja w `references/gutenberg-guide.md`, sekcja 1.

Test (2026-10-30, WordPress 7.1.4 lokalnie): front desktop 1440px i mobile 375px bez przepełnień; edytor: 154 bloki, 0 nieprawidłowych.
