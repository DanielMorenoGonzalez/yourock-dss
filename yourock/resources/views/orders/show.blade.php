@extends('layouts.app')
@section('title', 'YOU ROCK! - Carrito de la compra')
@section('content')
<h1>Pedido {{ $order->id }}</h1>
<p>Estado: {{ $order->state }}</p>
<p>Coste total: {{ $order->getTotal() }}</p>
@foreach ($orderlines as $orderline)
        <div>
        @if($orderline->quantity == 1)
            <p>{{ $orderline->quantity }} unidad del instrumento <a href="{{ action('InstrumentsController@show', [$orderline->instrument->id]) }}">{{ $orderline->instrument->name }}</a></p>
        @else
            <p>{{ $orderline->quantity }} unidades del instrumento <a href="{{ action('InstrumentsController@show', [$orderline->instrument->id]) }}">{{ $orderline->instrument->name }}</a></p>
        @endif
        </div>
@endforeach
</script>
@endsection