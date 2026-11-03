#!/usr/bin/env bash
# Źródło: ug-gutenberg-ui/. Generuje kopie dla Claude i Antigravity w dist/.
# Użycie: ./sync.sh            -> tylko dist/
#         ./sync.sh --install  -> dodatkowo ~/.claude/skills/ oraz ~/.gemini/config/skills/ i ~/.gemini/antigravity/skills/ (globalnie)
set -euo pipefail
cd "$(dirname "$0")"
SRC=ug-gutenberg-ui
rm -rf dist
mkdir -p dist/claude dist/antigravity/.agent/skills
cp -R "$SRC" dist/claude/
cp -R "$SRC" dist/antigravity/.agent/skills/
echo "dist/claude/$SRC"
echo "dist/antigravity/.agent/skills/$SRC  (skopiuj .agent/ do katalogu głównego projektu WordPress)"
if [[ "${1:-}" == "--install" ]]; then
  mkdir -p ~/.claude/skills ~/.gemini/antigravity/skills ~/.gemini/config/skills
  rm -rf ~/.claude/skills/$SRC ~/.gemini/antigravity/skills/$SRC ~/.gemini/config/skills/$SRC
  cp -R "$SRC" ~/.claude/skills/
  cp -R "$SRC" ~/.gemini/antigravity/skills/
  cp -R "$SRC" ~/.gemini/config/skills/
  echo "zainstalowano: ~/.claude/skills/$SRC, ~/.gemini/antigravity/skills/$SRC oraz ~/.gemini/config/skills/$SRC"
fi
