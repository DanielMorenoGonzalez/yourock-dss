@extends('layouts.master')
@section('title', 'YOU ROCK! - Categorías')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li class="active">Categorías</li>
</ol>
@if (session()->has('categoryupdate'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session()->get('categoryupdate') }}
    </div>
@endif

@if (session()->has('categorycreate'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session()->get('categorycreate') }}
    </div>
@endif

@if (session()->has('categorydelete'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session()->get('categorydelete') }}
    </div>
@endif

    <div class="panel panel-default">
    <div class="panel-heading">Categorías en la base de datos</div>
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
            <th>Instrumentos</th>
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
                    <td>{{ $category->instruments->count() }}</td>
                    <td><a role="button" class="btn btn-warning" href="{{ action('CategoriesController@showDetails', [$category->id]) }}"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                    <td><a role="button" class="btn btn-primary" href="{{ action('CategoriesController@edit', [$category]) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <form role="form" method="POST" action="{{ action('CategoriesController@destroy', [$category]) }}">
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
    
{{ $categories->links() }}
@endsection