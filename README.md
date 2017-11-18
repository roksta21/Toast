# Toast
Simple toastr notifications for laravel

## Installation

<!-- Pull in the package through Composer. -->

<!-- Run `composer require roksta/toast` -->

Install [Toastr](https://github.com/CodeSeven/toastr) via npm 
```bash
    npm install toastr --save
```

Require the js in resources/assets/js/bootstrap.js as 
`window.toastr = require('toastr');`

Import the sass in resources/assets/sass/app.scss as 
`@import "node_modules/toastr/toastr";`
then build via npm `npm run prod`.

Install via composer
```bash
    composer require roksta/toast
```

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
php artisan vendor:publish --provider="Roksta\Toastr\ToastrServiceProvider"
```
to publish the package view in your resources/assets/vendor/roksta/toastr.blade.php

Add `@include('vendor.roksta.toastr')` in your main view, eg,
```html
    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
        <div id="app"></div>
        <script type="text/javascript" src="js/app.js"></script>
        @include('vendor.roksta.toastr')
    </body>
    </html>
```

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
