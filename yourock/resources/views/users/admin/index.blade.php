@extends('layouts.master')
@section('title', 'YOU ROCK! - Index')
@section('content')
<h1>Índice del administrador</h1>
<a href="" class="list-group-item active">Ver todos los usuarios</a>
<a href="{{ action('CategoriesController@indexCategories') }}" class="list-group-item active">Ver todas las categorías</a>
<a href="{{ action('InstrumentsController@index') }}" class="list-group-item active">Ver todos los instrumentos</a>
@endsection
