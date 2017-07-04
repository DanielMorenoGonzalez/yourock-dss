@extends('layouts.master')
@section('title', 'YOU ROCK! - Instrumentos')
@section('content')
@if (session()->has('instrumentupdate'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('instrumentupdate') }}</strong>
    </div>
@endif

@if (session()->has('instrumentcreate'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('instrumentcreate') }}</strong>
    </div>
@endif

@if (session()->has('instrumentdelete'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('instrumentdelete') }}</strong>
    </div>
@endif

    <div class="panel panel-default">
    <div class="panel-heading">Instrumentos</div>
    <div class="panel-body">
        <a class="btn btn-primary" role="button" role="button" href="{{ action('InstrumentsController@create') }}"><span class="glyphicon glyphicon-plus"></span>Añadir instrumento</a> 
    </div>

    <div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fabricante</th>
            <th>Categoría</th>
            <th>Ver</th>
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
                    @if(!$instrument->category)
                        <td></td>
                    @else
                         <td>{{ $instrument->category->name }}</td>
                    @endif
                    <td><a role="button" class="btn btn-warning" href="{{ action('InstrumentsController@showDetails', [$instrument->id]) }}"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                    <td><a role="button" class="btn btn-primary" href="{{ action('InstrumentsController@edit', [$instrument]) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <form role="form" method="POST" action="{{ action('InstrumentsController@destroy', [$instrument]) }}">
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
    
{{ $instruments->links() }}
@endsection