<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function home_page()
    {
        return view('welcome');
    }
}
