@extends('layouts.master')
@section('title', 'YOU ROCK! - Pedido')
@section('content')
<h2>Pedido {{ $order->id }}
<h4>Se ha realizado mediante el pago con tarjeta</h4>
<h5>ID de la compra: {{ $order->payment }}</h5>
<br/>

<p>Actualmente se encuentra en estado: {{ $order->state }}</p>
<p>Este pedido pertenece al usuario "{{ $order->user->name }} {{ $order->user->surname }}", cuyo email es "{{ $order->user->email }}"</p>
<br/>
<p>Este pedido cuenta con las siguientes líneas de pedido:</p>
@foreach($order->orderlines as $orderline)
    <p>ID: {{ $orderline->id }}</p>
    <p>Cantidad: {{ $orderline->quantity }}</p>
    <p>Instrumento: {{ $orderline->getInstrument()->name }}</p>
    <p>Precio de esta línea: {{ $orderline->getSubtotal() }}€</p>
    <p><a href="{{ action('OrderlinesController@show', [$orderline]) }}">Más detalles...</a></p>
    <br/>
@endforeach
@endsection