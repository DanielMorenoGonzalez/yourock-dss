@extends('layouts.app')
@section('title', 'YOU ROCK! - Carrito de la compra')
@section('content')
<h1>Pedido {{ $order->id }}</h1>
<p>Pago realizado: {{ $order->payment }}</p>
<p>Estado: {{ $order->state }}</p>
<p>Coste total: </p>
@foreach ($orderlines as $orderline)
        <div>
            <li>Línea de pedido que contiene {{ $orderline->quantity }} unidades del instrumento <a href="{{ action('InstrumentsController@show', [$orderline->instrument->id]) }}">{{ $orderline->instrument->name }}</a></li>
        </div>
        <br/>
@endforeach
</script>
@endsection