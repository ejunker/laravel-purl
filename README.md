## Laravel Purl

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/ejunker/laravel-purl/master.svg?style=flat)](https://travis-ci.org/thephpleague/url)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/ejunker/laravel-purl.svg?style=flat)](https://scrutinizer-ci.com/g/thephpleague/url/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/ejunker/laravel-purl.svg?style=flat)](https://scrutinizer-ci.com/g/thephpleague/url)
[![Total Downloads](https://img.shields.io/packagist/dt/ejunker/laravel-purl.svg?style=flat)](https://packagist.org/packages/league/url)

A Laravel package for the Purl URL manipulation library. For information on how to use Purl, see the [Purl Documentation](https://github.com/jwage/purl).

## Installation
Require this package in your composer.json and update composer.

    "ejunker/laravel-purl": "0.1.*"

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
