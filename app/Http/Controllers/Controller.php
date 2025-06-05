<?php

namespace App\Http\Controllers;

use Faker\Provider\Base;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index()
    {
        return view('index');
    }
}