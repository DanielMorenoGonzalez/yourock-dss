@extends('layouts.app')
@section('title', 'YOU ROCK! - Checkout')
@section('content')
@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>{{ session()->get('error') }}</strong>
    </div>
@endif
<h1>Página de checkout</h1>
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Compra de los artículos</div>
                <div class="panel-heading">Total a pagar: {{ $total }}€</div>
                <div class="panel-body">
                    <form id="payment-form" class="form-horizontal" role="form" method="POST" action="{{ route('checkout') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre:</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="card-holder" class="col-md-4 control-label">Titular de la tarjeta:</label>
                            <div class="col-md-6">
                                <input id="card-holder" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="card-element" class="col-md-4 control-label">Tarjeta:</label>
                            <div id="card-element">
                            <!-- a Stripe Element will be inserted here. -->
                            </div>
                            <!-- Used to display Element errors -->
                            <div id="card-errors" role="alert"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
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