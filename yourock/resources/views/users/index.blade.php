@extends('layouts.master')
@section('title', 'YOU ROCK! - Usuarios')
@section('content')
@if (session()->has('userupdate'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('userupdate') }}</strong>
    </div>
@endif
@if (session()->has('usercreate'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('usercreate') }}</strong>
    </div>
@endif

    <div class="panel panel-default">
    <div class="panel-heading">Usuarios</div>
    <div class="panel-body">
        <a class="btn btn-primary" role="button" role="button" href=""><span class="glyphicon glyphicon-plus"></span>Añadir usuario</a> 
    </div>

    <div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>NIF</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Tipo</th>
            <th>Ver detalles</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nif }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->type }}</td>
                    <td><a href=""><span class="glyphicon glyphicon-eye-open"></span></a></td>
                    <td><a href=""><span class="glyphicon glyphicon-edit"></span></a></td>
                    <td><a href="#"><span class="glyphicon glyphicon-remove-sign"></span></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
    
{{ $users->links() }}
@endsection