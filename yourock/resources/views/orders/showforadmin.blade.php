@extends('layouts.master')
@section('title', 'YOU ROCK! - Pedido')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li><a href="{{ route('ordersadmin') }}">Pedidos</a></li>
  <li class="active">Pedido {{ $order->id }}</li>
</ol>
<h2>Pedido {{ $order->id }}
<h4>Se ha realizado mediante el pago con tarjeta</h4>
<h5>ID de la compra: {{ $order->payment }}</h5>
<br/>

<p>Actualmente se encuentra en estado: {{ $order->state }}</p>
<p>Este pedido pertenece al usuario <a href="{{ action('UsersController@showUser', [$order->user->id]) }}">"{{ $order->user->name }} {{ $order->user->surname }}"</a>, cuyo email es "{{ $order->user->email }}"</p>
<br/>
<p>Este pedido cuenta con las siguientes líneas de pedido:</p>
@foreach($order->orderlines as $orderline)
    <p>ID: {{ $orderline->id }}</p>
    <p>Cantidad: {{ $orderline->quantity }}</p>
    <p>Instrumento: {{ $orderline->instrument->name }}</p>
    <p>Precio de esta línea: {{ $orderline->getSubtotal() }}€</p>
    <p><a href="{{ action('OrderlinesController@show', [$orderline]) }}">Más detalles...</a></p>
    <br/>
@endforeach
<p>Precio total: {{ $order->getTotal() }}€</p>
@endsection