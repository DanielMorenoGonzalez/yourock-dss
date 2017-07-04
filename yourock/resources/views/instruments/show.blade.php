@extends('layouts.app')
@section('title', 'YOU ROCK! - Instrumento')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}">Home</a></li>
  <li><a href="{{ route('categories') }}">Categorías</a></li>
  <li><a href="{{ route('category', [$category->id]) }}">{{ $category->name }}</a></li>
  <li class="active">{{ $instrument->name }}</li>
</ol>
<h1>Instrumento {{ $instrument->name }}</h1>
<p>Fabricante: {{ $instrument->manufacturer }}</p>
<p>Descripción: {{ $instrument->description }}</p>
<p>Precio: {{ $instrument->price }}€</p>

@if($instrument->stock != 0)
    <p>Actualmente disponible con {{ $instrument->stock }} unidades</p>
    <a href="{{ action('OrderlinesController@addInstrumentToCart', [$instrument->id]) }}" class="btn btn-default" role="button">Añadir al carrito</a>
@else
    <p>Agotado. Llegarán nuevas unidades pronto</p>
    <button class="btn btn-default disabled" type="button">Añadir al carrito</a>
@endif
@endsection