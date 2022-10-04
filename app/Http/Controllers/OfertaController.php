<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOferta;

class OfertaController extends Controller
{
    public function index()
    {
        $ofertas = Oferta::orderBy('id', 'desc')->paginate();
        return view('ofertas.index', compact('ofertas'));
    }
    public function create()
    {
        return view('ofertas.create');
    }
    public function store(StoreOferta $request)
    {
        // Las dos formas son lo mismo
        // $oferta = new Oferta();
        // $oferta->descuento = $request->descuento;
        // $oferta->fechaInicio = $request->fechaInicio;
        // $oferta->fechaFin = $request->fechaFin;
        // $oferta->save();
        // $oferta = Oferta::create([
        //     'descuento' => $request->descuento,
        //     'fechaInicio' => $request->fechaInicio,
        //     'fechaFin' => $request->fechaFin,
        // ]);
        $oferta = Oferta::create($request->all());
        return redirect()->route('ofertas.show', $oferta);
    }
    public function show(Oferta $oferta)
    {
        return view('ofertas.show', compact('oferta'));
    }
    public function edit(Oferta $oferta)
    {
        return view('ofertas.edit', compact('oferta'));
    }
    public function update(StoreOferta $request, Oferta $oferta)
    {
        $oferta->update($request->all());
        return redirect()->route('ofertas.show', $oferta);
    }
    public function destroy(Oferta $oferta)
    {
        $oferta->delete();
        return redirect()->route('ofertas.index');
    }
}
