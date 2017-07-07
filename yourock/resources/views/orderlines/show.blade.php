@extends('layouts.master')
@section('title', 'YOU ROCK! - Línea de pedido')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}">Home</a></li>
  <li><a href="{{ route('orderlinesadmin') }}">Líneas de pedido</a></li>
  <li class="active">Línea de pedido {{ $orderline->id }}</li>
</ol>
<h1>Línea de pedido: {{ $orderline->id }}</h1>

<p>Instrumento: <a href="{{ action('InstrumentsController@showDetails', [$orderline->instrument->id]) }}">{{ $orderline->instrument->name }}</a></p>
<p>Cantidad: {{ $orderline->quantity }}</p>
<p>Coste de la línea de pedido: {{ $orderline->getSubtotal() }}€</p>
<p>Pedido al que pertenece: <a href="{{ action('OrdersController@showDetails', [$orderline->order->id]) }}">{{ $orderline->order->id }}</a></p>

@endsection