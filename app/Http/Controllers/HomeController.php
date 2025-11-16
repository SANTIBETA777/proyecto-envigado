<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Método para la página de inicio
    public function index()
    {
        return view('home'); // Llama a la vista home.blade.php
    }
}
