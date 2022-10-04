@extends('layouts.plantilla')
@section('title', 'Crear oferta')
@section('content')
    <h1>Crear oferta</h1>
    <section>
        <form action="{{ route('ofertas.store') }}" method="POST">
            @csrf
            <label>Descuento:
                <input type="number" name="descuento" step="0.1" value="{{ old('descuento') }}">
            </label>
            @error('descuento')
                <br>
                <small>*{{ $message }}</small>
                <br>
            @enderror
            <br>
            <label>
                Fecha de inicio:
                <input type="date" name="fechaInicio" {{ old('fechaInicio') }}>
            </label>
            @error('fechaInicio')
                <br>
                <small>*{{ $message }}</small>
                <br>
            @enderror
            <br>
            <label>
                Fecha de fin:
                <input type="date" name="fechaFin" {{ old('fechaFin') }}>
            </label>
            @error('fechaFin')
                <br>
                <small>*{{ $message }}</small>
                <br>
            @enderror
            <br>
            <input type="submit" value="Crear oferta">
        </form>
    </section>
@endsection
