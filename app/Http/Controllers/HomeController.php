<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // La función invoke se utiliza cuando se quiere controlar solo 1 ruta
    public function __invoke() {
    return view('home');
    }
}
