# Toast
Simple toastr notifications for laravel

## Installation
Install this package via composer
```bash
    composer require roksta/toast
```
Laravel auto-discovery will find the required service providers and aliases.

#### [Toastr](https://github.com/CodeSeven/toastr)
Toastr is enabled by default via CDN. 

Run 
```bash
php artisan vendor:publish --provider="Roksta\Toastr\ToastrServiceProvider"
```
to publish the package view in your resources/assets/vendor/roksta/toastr.blade.php

Add `@include('vendor.roksta.toastr')` in your main view, under your jQuery file import eg,
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

Use the helper function `toast()` to make the default notifiers.

```php
    toast()->success('message', 'title');
    toast()->info('message', 'title');
    toast()->warning('message', 'title');
    toast()->error('message', 'title');
```

You may specify all the other options dictated by [Toastr](https://github.com/CodeSeven/toastr) by adding the options method to your toast. 
```php
    toast()->success('message', 'title')->options([
        'timeOut' => 5000,
        'closeButton' => 1,
        'closeHtml' => '<button><i class="icon-off"></i></button>'
    ]);
```

*Note that for boolean values such as `closeButton => true` should be expressed as 0 for false or 1 for true*

### Licence
The package is provided under the MIT License.
