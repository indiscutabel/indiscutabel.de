# indiscutabel.de

Webseite der Hochschulsportgruppe InDISCutabel, Uni Münster

## Docs

[jekyllrb.com/](jekyllrb.com/)

## Render locally

```bash
bundle exec jekyll serve
```

## From Wordpress to Jekyll

- old Wordpress theme is in `wp-theme`
- https://github.com/benbalter/wordpress-to-jekyll-exporter
- unzip `jekyll-export.zip`
- remove files in `_draft`
- `jekyll new indiscutabel.de`, copy
  - `404.html`
  - `Gemfile`
- from file backup
  - `favicon.ico`
- switch theme to [`type`](https://github.com/aspirethemes/type/)
  - https://github.com/benbalter/jekyll-remote-theme
  - Download ZIP of theme > unpack locally
  - remove `discus` stuff
  - remove `srcset="(.*)"` from images
  - remove `guid: (.*)` from headers
  - replace all links with `http://www.uni-muenster.de/Hochschulsport/ultimate/` (images, links, ...)
  - remove social media links from footer
  - adjust colours in `_sass/settings/_colors.scss`
  - add header and footer
  - adjust link names in `_includes/pagination.html`
- `index.html` from https://github.com/aspirethemes/type/blob/master/index.html
  