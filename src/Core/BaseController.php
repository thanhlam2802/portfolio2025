<?php

namespace App\Core;

class BaseController
{
    protected function view($view, $data = [])
    {
        extract($data);
        require __DIR__ . "/../Views/{$view}.php";
    }
}
