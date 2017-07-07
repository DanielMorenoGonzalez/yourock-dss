@extends('layouts.master')
@section('title', 'YOU ROCK! - Home')
@section('content')
<ol class="breadcrumb">
  <li class="active">Home</li>
</ol>
<h1>Índice del administrador</h1>
<a href="{{ action('UsersController@index') }}" class="list-group-item">Ver todos los usuarios</a>
<a href="{{ action('CategoriesController@indexCategories') }}" class="list-group-item">Ver todas las categorías</a>
<a href="{{ action('InstrumentsController@index') }}" class="list-group-item">Ver todos los instrumentos</a>
<a href="{{ action('OrdersController@indexOrders') }}" class="list-group-item">Ver todos los pedidos</a>
<a href="{{ action('OrderlinesController@indexOrderlines') }}" class="list-group-item">Ver todas las líneas de pedido</a>
@endsection
