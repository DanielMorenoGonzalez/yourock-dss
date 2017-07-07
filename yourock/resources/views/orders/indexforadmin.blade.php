@extends('layouts.master')
@section('title', 'YOU ROCK! - Pedidos')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}">Home</a></li>
  <li class="active">Pedidos</li>
</ol>
@if (session()->has('orderupdate'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('orderupdate') }}</strong>
    </div>
@endif

@if (session()->has('ordercreate'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('ordercreate') }}</strong>
    </div>
@endif

@if (session()->has('orderdelete'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('orderdelete') }}</strong>
    </div>
@endif

    <div class="panel panel-default">
    <div class="panel-heading">Pedidos</div>
    <div class="panel-body">
        <a class="btn btn-primary" role="button" role="button" href="{{ action('OrdersController@create') }}"><span class="glyphicon glyphicon-plus"></span>Añadir pedido</a> 
    </div>

    <div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Método de pago</th>
            <th>ID del pago</th>
            <th>Estado</th>
            <th>Nº de líneas de pedido
            <th>Ver</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>Tarjeta</td>
                    <td>{{ $order->payment }}</td>
                    <td>{{ $order->state }}</td>
                    <td>{{ $order->orderlines()->count() }}</td>
                    <td><a role="button" class="btn btn-warning" href="{{ action('OrdersController@showDetails', [$order->id]) }}"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                    <td><a role="button" class="btn btn-primary" href="{{ action('OrdersController@edit', [$order]) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <form role="form" method="POST" action="">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <td><button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></td>
                    </form>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
    
{{ $orders->links() }}
@endsection