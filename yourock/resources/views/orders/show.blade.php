@extends('layouts.app')
@section('title', 'YOU ROCK! - Detalles del pedido')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li><a href="{{ route('orders') }}">Mis pedidos</a></li>
  <li class="active">Pedido {{ $order->id }}</li>
</ol>
<h1>Pedido {{ $order->id }}</h1>
<p>Estado: {{ $order->state }}</p>
<p>Coste total: {{ $order->getTotal() }}€</p>
@foreach ($orderlines as $orderline)
        <div>
        @if($orderline->quantity == 1)
            <p>{{ $orderline->quantity }} unidad del instrumento <a href="{{ action('InstrumentsController@show', [$orderline->instrument->id]) }}">{{ $orderline->instrument->name }}</a></p>
        @else
            <p>{{ $orderline->quantity }} unidades del instrumento <a href="{{ action('InstrumentsController@show', [$orderline->instrument->id]) }}">{{ $orderline->instrument->name }}</a></p>
        @endif
        </div>
@endforeach
@endsection