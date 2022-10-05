@extends('layouts.plantilla')

@section('title', 'Contactanos')

@section('content')
    <h1>Dejanos un mensaje</h1>
    <form action="{{ route('contactanos.store') }}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{ old('nombre') }}">
        </label>
        <br>
        @error('nombre')
            <p><small>{{ $message }}</small></p>
        @enderror
        <label>
            Correo:
            <br>
            <input type="email" name="correo" value="{{ old('correo') }}">
        </label>
        <br>
        @error('correo')
            <p><small>{{ $message }}</small></p>
        @enderror
        <label>
            Mensaje:
            <br>
            <textarea name="mensaje" rows="4">{{ old('mensaje') }}</textarea>
        </label>
        <br>
        @error('mensaje')
            <p><small>{{ $message }}</small></p>
        @enderror
        <input type="submit" value="Enviar mensaje">
    </form>
    @if (session('info'))
        <script>
            alert('{{ session('info') }}');
        </script>
    @endif
@endsection
