@extends('layouts.app')
@section('title', 'YOU ROCK! - Checkout')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li><a href="{{ route('shoppingcart') }}">Carrito</a></li>
  <li class="active">Checkout</li>
</ol>
@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session()->get('error') }}
    </div>
@endif
<h1>Checkout</h1>
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Compra de los instrumentos</div>
                <div class="panel-body">
                    <form id="payment-form" class="form-horizontal" role="form" method="POST" action="{{ route('purchase') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="col-md-4 control-label">Total a pagar:</label>
                            <div class="col-md-6">
                                <label>{{ $total }}€</label>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cardholder-name') ? ' has-error' : '' }}">
                            <label for="cardholder-name" class="col-md-4 control-label">Titular de la tarjeta:</label>
                            <div class="col-md-6">
                                <input id="cardholder-name" name="cardholder-name" type="text" class="form-control" value="{{ old('cardholder-name') }}">
                                
                                @if ($errors->has('cardholder-name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cardholder-name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="card-element" class="col-md-4 control-label">Tarjeta:</label>
                            <div class="col-md-6" id="card-element">
                            <!-- a Stripe Element will be inserted here. -->
                            </div>
                            <!-- Used to display Element errors -->
                            <div class="col-md-6" id="card-errors" role="alert"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-warning">
                                    Comprar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script src="https://js.stripe.com/v3/" type="text/javascript"></script>
<script src="{{ asset('js/checkout.js') }}" type="text/javascript"></script>
@endsection