# Easyrec Laravel
=================

Easyrec package integration for Laravel.

## Installation

[PHP](https://php.net) 5.4+ or [HHVM](http://hhvm.com) 3.3+, and [Composer](https://getcomposer.org) are required.

Run the composer require command from your terminal:
```sh
$ composer require hafael/easyrec-laravel
```
Open [LaravelRoot]/config/app.php and register the required service provider **above** your application providers.

```php
'providers' => [
    /*
     * Application Service Providers...
     */
    ...
    Hafael\Easyrec\Laravel\EasyrecServiceProvider::class,
],
```

If you prefer, add the facade

```php
'aliases' => [
    
    ...
    'Easyrec' => Hafael\Easyrec\Laravel\Facades\Easyrec::class,
],
```


License
----
BSD-3-Clause
