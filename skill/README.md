# Skill `ug-gutenberg-ui`

Źródło: `ug-gutenberg-ui/` (jedyne miejsce edycji). Kopie generuje `./sync.sh`.

| Cel | Gdzie | Jak |
|---|---|---|
| Claude Code (globalnie) | `~/.claude/skills/ug-gutenberg-ui` | `./sync.sh --install` |
| Claude Code (projekt) | `<projekt>/.claude/skills/ug-gutenberg-ui` | skopiuj `dist/claude/ug-gutenberg-ui` |
| Antigravity (projekt) | `<projekt>/.agent/skills/ug-gutenberg-ui` | skopiuj `dist/antigravity/.agent` |
| Antigravity (globalnie) | `~/.gemini/antigravity/skills/ug-gutenberg-ui` | `./sync.sh --install` |

Ścieżki Antigravity nie zostały zweryfikowane w samym programie — format `SKILL.md` (frontmatter `name` + `description`) jest identyczny.

Warstwa UI dla WordPressa (motyw): `ug-gutenberg-ui/assets/theme/` — instalacja w `references/gutenberg-guide.md`, sekcja 1.

Test (2026-10-30, WordPress 7.1.4 lokalnie): front desktop 1440px i mobile 375px bez przepełnień; edytor: 154 bloki, 0 nieprawidłowych.
