# SamJUK_TinyMCE
> Author: Sam James <sam@samdjames.uk> - [https://www.samdjames.uk](https://www.samdjames.uk)

This module adds the [anchor plugin into](https://www.tiny.cloud/docs/tinymce/latest/anchor/) the tinyMCE editor. This allows you to insert name anchor tags within text blocks in PageBuilder. You can then use these named anchors as the target in other links to jump to specific content on the page.


## Development

```sh
composer install
vendor/bin/lefthook install
```

Commits are checked by [dev-standards](https://github.com/SamJUK/dev-standards): Conventional Commits, PHPCS and PHPStan.
`vendor/bin/samjuk-dev-standards check` runs the checks over the whole module.
