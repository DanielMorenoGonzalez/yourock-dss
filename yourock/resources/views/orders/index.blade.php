@extends('layouts.app')
@section('title', 'YOU ROCK! - Pedidos realizados')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li class="active">Mis pedidos</li>
</ol>
    <h1>Pedidos realizados</h1>
    @if ($orders->count() == 0)
        <p>No hay pedidos</p>
    @else
    @foreach ($orders as $order)
        <div>
            <p>Pedido :{{ $order->id }}</p>
            <li><a href="{{ action('OrdersController@show', [$order->id]) }}">Mostrar detalles de pedido</a></li>
        </div>
        <br/>
    @endforeach
    @endif
@endsection