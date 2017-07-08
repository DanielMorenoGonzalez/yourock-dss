@extends('layouts.app')
@section('title', 'YOU ROCK! - Pedidos realizados')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li class="active">Mis pedidos</li>
</ol>
    <h1>Pedidos realizados</h1>
    @if ($orders->count() == 0)
        <p>Todavía no has realizado ningún pedido</p>
    @else
    @foreach ($orders as $order)
        <div>
            <p><a href="{{ action('OrdersController@show', [$order->id]) }}">Pedido {{ $order->id }}</a> | Coste total: {{ $order->getTotal() }}</p>
        </div>
        <br/>
    @endforeach
    @endif
@endsection