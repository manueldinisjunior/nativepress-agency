# NativePress Agency

A learning-focused native WordPress block theme built without Elementor, ACF, or any other page builder.

> **Current status:** Foundation complete. The theme is recognized by WordPress, activated locally, connected to GitHub, and includes its first native block template. The next milestone is the global design system in `theme.json`.

## Why this project exists

This project demonstrates the transition from page-builder-based WordPress work to native Gutenberg and Full Site Editing development. The final portfolio sample will include a custom block theme and a separate plugin containing static and dynamic custom blocks.

## Current implementation

- WordPress block-theme metadata in `style.css`
- Native `templates/index.html` template
- Site title and responsive Navigation block
- Query Loop displaying the latest posts in a three-column grid
- Pagination and empty-results state
- Native footer
- No Elementor, ACF, or page-builder dependency
- Public GitHub repository with a clean `main` branch

## Project structure

```text
nativepress-agency/
├── templates/
│   └── index.html
├── LICENSE
├── README.md
├── style.css
└── theme.json
```

## Requirements

- WordPress 6.5 or newer
- PHP 8.0 or newer

## Installation

1. Place the `nativepress-agency` directory in `wp-content/themes/`.
2. In WordPress Admin, open **Appearance → Themes**.
3. Activate **NativePress Agency**.
4. Open **Appearance → Editor** to customize templates, template parts, and patterns.

## Roadmap

- [x] Create the theme directory and metadata
- [x] Add the first native block template
- [x] Activate and verify the theme locally
- [x] Connect the project to GitHub
- [x] Document the current project state
- [ ] Configure colors, typography, spacing, and layout in `theme.json`
- [ ] Extract the header and footer into template parts
- [ ] Add a dedicated `front-page.html` template
- [ ] Build reusable hero, services, projects, and contact CTA patterns
- [ ] Build the separate `nativepress-blocks` plugin
- [ ] Add a static Team Member block
- [ ] Add a dynamic Latest Projects block
- [ ] Test accessibility, responsiveness, security, and performance
- [ ] Add screenshots, a live demo, and a short demo video

## Next milestone

Implement a valid `theme.json` design system with:

- content and wide layout widths
- brand color palette
- fluid typography presets
- spacing presets
- consistent global styles for body text, headings, links, and buttons

## Learning outcomes

This repository is intended to demonstrate:

- native WordPress block-theme architecture
- Full Site Editing templates and template parts
- reusable block patterns
- custom Gutenberg block development
- separation of presentation (theme) from functionality (plugin)
- maintainable, accessible, secure WordPress development

## Author

Manuel Dinis Júnior
