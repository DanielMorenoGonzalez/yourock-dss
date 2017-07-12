@extends('layouts.app')
@section('title', 'YOU ROCK! - Detalles del pedido')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li><a href="{{ route('orders') }}">Mis pedidos</a></li>
  <li class="active">Pedido {{ $order->id }}</li>
</ol>
<h1>Pedido {{ $order->id }}</h1>
<p>ID del pago: {{ $order->payment }}</p>
<p>Estado: {{ $order->state }}</p>

<div class="table-responsive">           
<table class="table table-condensed">
    <thead>
        <tr>
            <th>Instrumento</th>
            <th>Cantidad</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orderlines as $orderline)
        <tr>
            <td>{{ $orderline->instrument->name }}</td>
            <td>{{ $orderline->quantity }}</td>
            <td>{{ $orderline->getSubtotal() }}€</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

<p>Coste total: {{ $order->getTotal() }}€</p>


@endsection