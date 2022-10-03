@extends('layouts.plantilla')
@section('title', 'Producto: ' .$marca)
@section('content')
<h1>Usted selecciono la marca: {{$marca}}</h1> 
{{-- <?php echo $marca?> --}}
@endsection