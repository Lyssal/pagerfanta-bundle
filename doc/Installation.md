# Installation

1. Update your `composer.json` :

```json
"require": {
    "lyssal/pagerfanta-bundle": "~x.y"
}
```

2. Update with Composer :

```sh
composer update
```

3. Add in your `AppKernel.php` :

```php
new Lyssal\PagerfantaBundle\LyssalPagerfantaBundle(),
```
