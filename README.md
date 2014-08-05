## Laravel Purl
A Laravel package for the Purl URL manipulation library. For information on how to use Purl, see the [Purl Documentation](https://github.com/jwage/purl).

## Installation
Require this package in your composer.json and update composer.

    "ejunker/laravel-purl": "dev-master"

After updating composer, add the ServiceProvider to the providers array in app/config/app.php

    'Ejunker\LaravelPurl\ServiceProvider',

You can optionally use the facade for shorter code. Add this to your facades:

    'Purl' => 'Ejunker\LaravelPurl\Facade',

## Examples

```php
// Create a \Purl\Url object from a string
$url = Purl::make('http://www.laravel.com');

// Same as Request::url() but as a \Purl\Url object
$url = Purl::requestUrl();

// Same as Request::root() but as a \Purl\Url object
$url = Purl::requestRoot();

// Same as Request::fullUrl() but as a \Purl\Url object
$url = Purl::requestFullUrl();
```
