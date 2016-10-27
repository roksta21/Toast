# Toast
Simple toastr notifications for laravel

## Installation

Pull in the package through Composer.

<!-- Run `composer require roksta/toast` -->

Include the service provider and its alias within the `config/app.php`.

```php
'providers' => [
    Roksta\Toastr\ToastrServiceProvider::class,
];

'aliases' => [
    'Toast' => Roksta\Toastr\Toast::class,
];
```

Run 
```bash
php artisan vendor:publish
```
to publish the package view in your resources/assets/vendor/roksta/toastr.blade.php

## Use

Just use the helper function `toast()` to make the notifier.

```php
    toast()->success('message', 'title');
    toast()->info('message', 'title');
    toast()->warning('message', 'title');
    toast()->error('message', 'title');
```
You may specify the timeout duration by 
```php
    toast()->success('message', 'title')->timeOut(5000);
```