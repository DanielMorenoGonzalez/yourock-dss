@extends('layouts.master')
@section('title', 'YOU ROCK! - Index')
@section('content')
<h1>Índice del administrador</h1>
<a href="{{ action('UsersController@index') }}" class="list-group-item">Ver todos los usuarios</a>
<a href="{{ action('CategoriesController@indexCategories') }}" class="list-group-item">Ver todas las categorías</a>
<a href="{{ action('InstrumentsController@index') }}" class="list-group-item">Ver todos los instrumentos</a>
<a href="#" class="list-group-item">Ver todos los pedidos</a>
@endsection
