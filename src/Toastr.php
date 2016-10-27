<?php
/**
 * @category PHP
 * @author   Samson Mbuthia <roksta21@gmail.com>
 */

namespace Roksta\Toastr;

use Session;

class Toastr
{
    public function success($title = "", $message = "")
    {
        $this->store($title, $message, 'success');

        return $this;
    }

    public function info($title = "", $message = "")
    {
        $this->store($title, $message, 'info');

        return $this;
    }

    public function warning($title = "", $message = "")
    {
        $this->store($title, $message, 'warning');

        return $this;
    }

    public function error($title = "", $message = "")
    {
        $this->store($title, $message, 'error');

        return $this;
    }

    private function store($title, $message, $type)
    {
        $toast = collect([
            'type' => $type,
            'title' => $title,
            'message' => $message
        ]);

        Session::put('toast', $toast);
    }

    public function timeout($t = 1000)
    {
        $toast = Session::get('toast');

        if ($toast->has('options')) {
            $toast['options']->put('timeOut', $t);
        } else {
            $toast->put('options', collect(['timeOut' => $t]));
        }

        return $this;
    }

}