@extends('layouts.app')
@section('title', 'YOU ROCK! - Perfil de usuario')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}">Home</a></li>
  <li class="active">Mi perfil</li>
</ol>
<div class="container">
@if (session()->has('message'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session()->get('message') }}
    </div>
@endif
<h1>Perfil de usuario</h1>
<img src="/uploads/avatars/{{$user->avatar}}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
</div>
<p>NIF: {{ $user->nif }}</p>
<p>Nombre: {{ $user->name }}</p>
<p>Apellidos: {{ $user->surname }}</p>
<p>Dirección: {{ $user->address }}</p>
<p>Provincia: {{ $user->province }}</p>
<p>Ciudad: {{ $user->city }}</p>
<p>Código postal: {{ $user->zipCode }}</p>
<p>Teléfono: {{ $user->phoneNumber }}</p>
<p>Email: {{ $user->email }}</p>
<a href="{{ action('UsersController@edit') }}" class="btn btn-default" role="button">Editar perfil</a>

<!--Botón con el que aparece un modal para confirmar que se quiere eliminar la cuenta-->
<button class="btn btn-default" data-toggle="modal" data-target="#confirm-delete">Borrar cuenta</button>
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Borrar cuenta</h4>
            </div>
            <div class="modal-body">
                ¿Estás seguro que quieres darte de baja de nuestra página web? Esta acción es irreversible, por lo que si así lo deseas, ya no podrás realizar pedidos de tus instrumentos favoritos con tu cuenta.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <form role="form" method="POST" action="{{ action('UsersController@destroy') }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Borrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection