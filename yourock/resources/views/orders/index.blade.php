@extends('layouts.app')
@section('title', 'YOU ROCK! - Pedidos realizados')
@section('content')
    <h1>Pedidos realizados</h1>
    @if ($orders->total() == 0)
        <p>No hay pedidos</p>
    @else
    @foreach ($orders as $order)
        <div>
            <p>{{ $order->id }}, {{ $order->state }}, {{ $order->payment }}</p>
        </div>
    @endforeach
    @endif
@endsection