@extends('layouts.app')

@section('content')
<h2>Categoría {{ $category->name }}</h2>
<h4>{{ $category->description }}</h4>
<br/>
<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Ordenar...
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li><a href="#">Precio - Ascendente</a></li>
        <li><a href="#">Precio - Descendente</a></li>
        <li class="divider"></li>
        <li><a href="#">Alfabético (A-Z)</a></li>
        <li><a href="#">Alfabético (Z-A)</a></li>
    </ul>
</div> 
<br/>
<p>Se han encontrado {{ $instruments->total() }} resultados en total</p>
<p>Mostrando {{ $instruments->count() }} instrumentos en esta página</p>
@foreach ($instruments as $instrument)
    <p><a href="{{ action('InstrumentsController@show', [$category->id]) }}">Instrumento: {{ $instrument->name }}</a></p>
@endforeach

{{ $instruments->links() }}
@endsection