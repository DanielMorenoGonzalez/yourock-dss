@extends('layouts.master')
@section('title', 'YOU ROCK! - Añadir pedido')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li><a href="{{ route('ordersadmin') }}">Pedidos</a></li>
  <li class="active">Añadir pedido</li>
</ol>
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Añadir un nuevo pedido</div>
                <div class="panel-body">
                    <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('payment') ? ' has-error' : '' }}">
                            <label for="payment" class="col-md-4 control-label">ID del pago:</label>

                            <div class="col-md-6">
                                <input id="payment" type="text" class="form-control" name="payment" value="{{ old('payment') }}">

                                @if ($errors->has('payment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('payment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label for="state" class="col-md-4 control-label">Estado:</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" value="{{ old('state') }}">

                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('user') ? ' has-error' : '' }}">
                            <label for="user" class="col-md-4 control-label">Asociar a usuario:</label>

                            <div class="col-md-6">
                                <select id="user" class="form-control" name="user">
                                    <option value=""></option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->email }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('user'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Añadir
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection