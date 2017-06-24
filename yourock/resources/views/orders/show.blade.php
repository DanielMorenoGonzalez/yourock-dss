@extends('layouts.app')
@section('title', 'YOU ROCK! - Carrito de la compra')
@section('content')
<h1>Pedido {{ $order->id }}</h1>
<p>Pago realizado: {{ $order->payment }}</p>
<p>Estado: {{ $order->state }}</p>
@foreach ($orderlines as $orderline)
        <div>
            <p>Línea de pedido que contiene {{ $orderline->quantity }} unidades del instrumento con id {{ $orderline->instrument_id }}</p>
        </div>
        <br/>
@endforeach
</script>
@endsection