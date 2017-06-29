@extends('layouts.app')
@section('title', 'YOU ROCK! - Producto')
@section('content')
<h1>Instrumento {{ $instrument->name }}</h1>
<p>Fabricante: {{ $instrument->manufacturer }}</p>
<p>Descripción: {{ $instrument->description }}</p>
<p>Precio: {{ $instrument->price }}€</p>

@if($instrument->stock != 0)
    <p>Actualmente disponible con {{ $instrument->stock }} unidades</p>
    <a href="#" class="btn btn-default" role="button">Añadir al carrito</a>
@else
    <p>Agotado. Llegarán nuevas unidades pronto</p>
@endif
@endsection