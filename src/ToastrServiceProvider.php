<?php

namespace Roksta\Toastr;

use Illuminate\Support\ServiceProvider;

class ToastrServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes(array(
            __DIR__.'/../resources/' => base_path('resources/views/vendor/roksta')
        ));
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind();
        
        $this->app->singleton('laravel-toastr', function () {
            return $this->app->make('Roksta\Toastr\Toastr');
        });
    }
}