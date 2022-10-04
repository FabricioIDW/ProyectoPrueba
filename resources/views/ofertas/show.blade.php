@extends('layouts.plantilla')
@section('title', 'Mostrar oferta')
@section('content')
    <h1>Oferta {{ $oferta->id }}</h1>
    <a href="{{ route('ofertas.index') }}">Volver a ofertas</a> |
    <a href="{{ route('ofertas.edit', $oferta) }}">Editar esta oferta</a>
    <p><strong>Descuento:</strong> {{ $oferta->descuento }}</p>
    <p><strong>Fecha de inicio: </strong> {{ $oferta->fechaInicio }}</p>
    <p><strong>Fecja de fin: </strong> {{ $oferta->fechaFin }}</p>
    <form action="{{ route('ofertas.destroy', $oferta) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
