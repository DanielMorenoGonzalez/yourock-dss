@extends('layouts.master')
@section('title', 'YOU ROCK! - Categorías')
@section('content')
@if (session()->has('categoryupdate'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('categoryupdate') }}</strong>
    </div>
@endif

@if (session()->has('categorycreate'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('categorycreate') }}</strong>
    </div>
@endif

@if (session()->has('categorydelete'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('categorydelete') }}</strong>
    </div>
@endif

    <div class="panel panel-default">
    <div class="panel-heading">Categorías</div>
    <div class="panel-body">
        <a class="btn btn-primary" role="button" role="button" href="{{ action('CategoriesController@create') }}"><span class="glyphicon glyphicon-plus"></span>Añadir categoría</a> 
    </div>

    <div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Ver detalles</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td><a role="button" class="btn btn-warning" href="{{ action('CategoriesController@showDetails', [$category->id]) }}"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                    <td><a role="button" class="btn btn-primary" href="{{ action('CategoriesController@edit', [$category]) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td><a href=""><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
    
{{ $categories->links() }}
@endsection