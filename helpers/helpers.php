<?php
if (! function_exists('toast')) {
    /**
     * Toastr helper function
     *
     * @return \Roksta\Toastr\Toast
     */

    function toast()
    {
        return app('laravel-toastr');
    }
    
}