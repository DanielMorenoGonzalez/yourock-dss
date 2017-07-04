@extends('layouts.master')
@section('title', 'YOU ROCK! - Instrumento')
@section('content')
<h1>Instrumento: {{ $instrument->name }}</h1>
@if(!$category->id)
    <p>Todavía no pertenece a ninguna categoría. <a href="{{ action('InstrumentsController@edit', [$instrument->id]) }}">Asignar ahora</a></p>
@else
    <p>Pertenece a la categoría <strong>{{ $category->name }}</strong>. <a href="{{ action('InstrumentsController@edit', [$instrument->id]) }}">Cambiar</a></p>
@endif
<p>Fabricante: {{ $instrument->manufacturer }}</p>
<p>Descripción: {{ $instrument->description }}</p>
<p>Precio: {{ $instrument->price }}€</p>

@if($instrument->stock != 0)
    <p>Actualmente disponible con {{ $instrument->stock }} unidades</p>
@else
    <p>Agotado. No hay unidades en el almacén</p>
@endif
@endsection