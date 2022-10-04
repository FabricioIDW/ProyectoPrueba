@extends('layouts.plantilla')
@section('title', 'Ofertas')
@section('content')
    <h1>Ofertas de FLY Car</h1>
    <a href="{{ route('ofertas.create') }}">Crear oferta</a>
    <ul>
        @foreach ($ofertas as $oferta)
            <li><a href="{{ route('ofertas.show', $oferta) }}">Ver</a> Descuento: {{ $oferta->descuento }}% | Duración:
                {{ $oferta->fechaInicio }} al {{ $oferta->fechaFin }}</li>
        @endforeach
    </ul>
    {{ $ofertas->links() }}
@endsection
