@extends('layouts.master')
@section('title', 'YOU ROCK! - Usuarios')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li class="active">Usuarios</li>
</ol>
@if (session()->has('userupdate'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session()->get('userupdate') }}
    </div>
@endif
@if (session()->has('usercreate'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session()->get('usercreate') }}
    </div>
@endif
@if (session()->has('userdelete'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session()->get('userdelete') }}
    </div>
@endif

    <div class="panel panel-default">
    <div class="panel-heading">Usuarios en la base de datos</div>
    <div class="panel-body">
        <a class="btn btn-primary" role="button" href="{{ action('UsersController@createCustomer') }}"><span class="glyphicon glyphicon-plus"></span>Añadir cliente</a>
        <a class="btn btn-primary" role="button" href="{{ action('UsersController@createAdmin') }}"><span class="glyphicon glyphicon-plus"></span>Añadir administrador</a>  
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
            <th>Ver</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nif }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->type }}</td>
                    <td><a role="button" class="btn btn-warning" href="{{ action('UsersController@showUser', [$user->id]) }}"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                    <td><a role="button" class="btn btn-primary" href="{{ action('UsersController@editUser', [$user->id]) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                    <form role="form" method="POST" action="{{ action('UsersController@destroyUser', [$user->id]) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <td><button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></td>
                    </form>
                </tr>
            @endforeach
        @else
            <tr>
                <td>No hay usuarios</td>
            </tr>
        @endif
        </tbody>
    </table>
    </div>
    </div>
    
{{ $users->links() }}
@endsection