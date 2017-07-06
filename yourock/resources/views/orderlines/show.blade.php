@extends('layouts.master')
@section('title', 'YOU ROCK! - Línea de pedido')
@section('content')
<h1>Línea de pedido: {{ $orderline->id }}</h1>

<p>Instrumento: <a href="{{ action('InstrumentsController@showDetails', [$orderline->instrument->id]) }}">{{ $orderline->instrument->name }}</a></p>
<p>Cantidad: {{ $orderline->quantity }}</p>
<p>Coste de la línea de pedido: {{ $orderline->getSubtotal() }}€</p>
<p>Pedido al que pertenece: <a href="{{ action('OrdersController@showDetails', [$orderline->order->id]) }}">{{ $orderline->order->id }}</a></p>

@endsection