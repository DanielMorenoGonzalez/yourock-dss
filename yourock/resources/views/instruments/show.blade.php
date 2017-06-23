@extends('layouts.app')
@section('title', 'YOU ROCK! - Descripción')
@section('content')
<h1>Instrumento {{ $instrument->name }}</h1>
<p>Fabricante: {{ $instrument->manufacturer }}</p>
<p>Descripción: {{ $instrument->description }}</p>
<p>Precio: {{ $instrument->price }}€</p>

@if($instrument->stock != 0)
    <p>Actualmente disponible con {{ $instrument->stock }} unidades</p>
@else
    <p>Agotado. Llegarán nuevas unidades pronto</p>
@endif
@endsection