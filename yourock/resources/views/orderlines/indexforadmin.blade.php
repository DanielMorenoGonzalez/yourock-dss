@extends('layouts.master')
@section('title', 'YOU ROCK! - Líneas de pedido')
@section('content')
@if (session()->has('orderlineupdate'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('orderlineupdate') }}</strong>
    </div>
@endif

@if (session()->has('orderlinecreate'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('orderlinecreate') }}</strong>
    </div>
@endif

@if (session()->has('orderlinedelete'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('orderlinedelete') }}</strong>
    </div>
@endif

    <div class="panel panel-default">
    <div class="panel-heading">Líneas de pedido</div>
    <div class="panel-body">
        <a class="btn btn-primary" role="button" role="button" href="{{ action('OrderlinesController@create') }}"><span class="glyphicon glyphicon-plus"></span>Añadir línea de pedido</a> 
    </div>

    <div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Instrumento</th>
            <th>Cantidad</th>
            <th>Coste</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
        </thead>
        <tbody>
            @foreach($orderlines as $orderline)
                <tr>
                    <td>{{ $orderline->id }}</td>
                    <td>{{ $orderline->instrument->name }}</td>
                    <td>{{ $orderline->quantity }}</td>
                    <td>{{ $orderline->getSubtotal() }}€</td>
                    <td><a role="button" class="btn btn-warning" href="{{ action('OrderlinesController@show', [$orderline]) }}"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                    <td><a role="button" class="btn btn-primary" href="{{ action('OrderlinesController@edit', [$orderline]) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
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
    
{{ $orderlines->links() }}
@endsection