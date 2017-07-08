@extends('layouts.master')
@section('title', 'YOU ROCK! - Instrumento')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li><a href="{{ route('instruments.index') }}">Instrumentos</a></li>
  <li class="active">{{$instrument->name}}</li>
</ol>
<h1>Instrumento: {{ $instrument->name }}</h1>
@if(!$category)
    <p>Todavía no pertenece a ninguna categoría. <a href="{{ action('InstrumentsController@edit', [$instrument]) }}">Asignar ahora</a></p>
@else
    <p>Pertenece a la categoría <strong>{{ $category->name }}</strong>. <a href="{{ action('InstrumentsController@edit', [$instrument]) }}">Cambiar</a></p>
@endif
<p>Fabricante: {{ $instrument->manufacturer }}</p>
<p>Descripción: {{ $instrument->description }}</p>
<p>Precio: {{ $instrument->price }}€</p>

@if($instrument->stock != 0)
    <p>Actualmente disponible con {{ $instrument->stock }} unidades</p>
    <p><a href="{{ action('InstrumentsController@edit', [$instrument]) }}">Actualizar stock</a></p>
@else
    <p>Agotado. No hay unidades en el almacén</p>
    <p><a href="{{ action('InstrumentsController@edit', [$instrument]) }}">Actualizar stock</a></p>
@endif
@endsection