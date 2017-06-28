@extends('layouts.app')
@section('title', 'YOU ROCK! - Perfil de usuario')
@section('content')
@if (session()->has('message'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('message') }}</strong>
    </div>
@endif
<h1>Perfil de usuario</h1>
<p>{{ $user->nif }}</p>
<p>{{ $user->name }}</p>
<p>{{ $user->surname }}</p>
<p>{{ $user->address }}</p>
<p>{{ $user->city }}</p>
<p>{{ $user->province }}</p>
<p>{{ $user->zipCode }}</p>
<p>{{ $user->phoneNumber }}</p>
<p>{{ $user->email }}</p>
<li><a href="{{ action('UsersController@edit') }}" class="btn btn-default" role="button">Editar perfil</a></li>

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
                <a href="{{ action('UsersController@destroy', [$user->id]) }}" class="btn btn-danger btn-ok">Borrar</a>
            </div>
        </div>
    </div>
</div>
@endsection