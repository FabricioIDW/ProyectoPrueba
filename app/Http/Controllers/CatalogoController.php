<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    // Mostrar la página principal
    public function index()
    {
        return view('cursos.index');
    }
    // Para crear un curso etc.
    public function create()
    {
        return view('cursos.create');
    }
    // Mostrar un curso en particular
    public function show($marca, $vehiculo = null)
    {
        return view('cursos.show', compact('marca')); //['marca' => $marca]
        // if ($vehiculo) {
        //     return "Usted selecciono la marca: $marca y el modelo: $vehiculo";
        // } else {
        //     return "Usted selecciono la marca: $marca";
        // }
    }
}
