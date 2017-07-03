@extends('layouts.master')
@section('title', 'YOU ROCK! - Instrumentos')
@section('content')
@if (session()->has('instrumentupdate'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('instrumentupdate') }}</strong>
    </div>
@endif

    <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Instrumentos</div>

    <!-- Table -->
    <div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fabricante</th>
            <th>Ver detalles</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
        </thead>
        <tbody>
            @foreach($instruments as $instrument)
                <tr>
                    <td>{{ $instrument->id }}</td>
                    <td>{{ $instrument->name }}</td>
                    <td>{{ $instrument->manufacturer }}</td>
                    <td><a href="{{ action('InstrumentsController@create') }}"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                    <td><a href="{{ action('InstrumentsController@edit', [$instrument->id]) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td><a href="#"><span class="glyphicon glyphicon-remove-sign"></span></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
    
{{ $instruments->links() }}
@endsection