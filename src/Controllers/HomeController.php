<?php

namespace App\Controllers;

use App\Core\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        $this->view('home', [
            'title' => 'Portfolio - Trang chủ'
        ]);
    }
}
