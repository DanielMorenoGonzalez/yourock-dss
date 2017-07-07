@extends('layouts.master')
@section('title', 'YOU ROCK! - Editar línea de pedido')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}">Home</a></li>
  <li><a href="{{ route('orderlinesadmin') }}">Líneas de pedido</a></li>
  <li class="active">Editar línea de pedido {{ $orderline->id }}</li>
</ol>
<h1>Editar línea de pedido</h1>
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar información de la línea de pedido</div>
                <div class="panel-body">
                    <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ action('OrderlinesController@update', [$orderline]) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group{{ $errors->has('instrument') ? ' has-error' : '' }}">
                            <label for="instrument" class="col-md-4 control-label">Instrumento:</label>

                            <div class="col-md-6">
                                <select id="instrument" class="form-control" name="instrument">
                                    <option value="" disabled selected style="display: none;">{{ $orderline->instrument->name }}</option>
                                    @foreach($instruments as $instrument)
                                        <option value="{{ $instrument->id }}">{{ $instrument->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('instrument'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('instrument') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                            <label for="quantity" class="col-md-4 control-label">Cantidad:</label>

                            <div class="col-md-6">
                                <input id="quantity" type="text" class="form-control" name="quantity" value="{{ old('quantity') }}" placeholder="{{ $orderline->quantity }}">

                                @if ($errors->has('quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }}">
                            <label for="order" class="col-md-4 control-label">Pedido asociado:</label>

                            <div class="col-md-6">
                                <select id="order" class="form-control" name="order">
                                    <option value="" disabled selected style="display: none;">{{ $orderline->order->id }}</option>
                                    @foreach($orders as $order)
                                        <option value="{{ $order->id }}">{{ $order->id }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('order'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('order') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection