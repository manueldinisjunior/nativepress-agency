# NativePress Agency Block Theme

A simple WordPress block theme built with native block templates and no page builders or ACF.

## Project structure

- `style.css` — WordPress theme metadata and global CSS.
- `theme.json` — Theme settings, styles, and block support configuration.
- `templates/index.html` — Front page template using native block markup.

## Setup

1. Place this folder inside your WordPress `wp-content/themes/` directory.
2. Activate the theme from the WordPress admin under Appearance > Themes.
3. Verify WordPress 6.5+ and PHP 8.0+ are installed.

## Installation steps

- `style.css` contains theme metadata required for WordPress to recognize the theme.
- `theme.json` configures theme colors, typography, spacing, and global styles.
- `templates/index.html` defines the home page layout using block markup.

## Usage

1. Open WordPress admin and go to Appearance > Editor.
2. Customize the site title, navigation, and homepage layout.
3. Add posts to the site; the home page displays the latest posts in a grid.

## Final app behavior

- Header with site title and responsive navigation.
- Main section listing the latest posts in a 3-column grid.
- Footer with centered site title and copyright text.
- Lightweight, block-native theme structure suitable for customization.

## Notes

- No PHP template files are required for this block theme.
- Add more `templates/*.html` files to support additional WordPress template types.
- Update `theme.json` to extend theme support, variants, or block styles.
