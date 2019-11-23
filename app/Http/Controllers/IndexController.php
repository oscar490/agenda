<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Muestra la página de incio
     */
    public function index()
    {
        return view('welcome');
    }
}
