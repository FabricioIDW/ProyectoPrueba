@extends('layouts.plantilla')
@section('title', 'Ofertas')
@section('content')
<h1>Ofertas de FLY Car</h1>
<ul>
    @foreach ($ofertas as $oferta)
    <li>Descuento: {{$oferta->descuento}}% | Duración: {{$oferta->fechaInicio}} al {{$oferta->fechaFin}}</li>
@endforeach
</ul>
@endsection