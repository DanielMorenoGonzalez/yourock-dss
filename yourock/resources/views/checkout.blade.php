@extends('layouts.app')
@section('title', 'YOU ROCK! - Checkout')
@section('content')
<h1>Página de checkout</h1>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Checkout del pedido</div>
                <div class="panel-body">
                    <form class="form-horizontal" id="checkout-form" role="form" method="POST" action="{{ route('checkout') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre:</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cardname" class="col-md-4 control-label">Titular de la tarjeta:</label>
                            <div class="col-md-6">
                                <input id="cardname" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cardnumber" class="col-md-4 control-label">Número de la tarjeta de crédito:</label>
                            <div class="col-md-6">
                                <input id="cardname" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cardexpirymonth" class="col-md-4 control-label">Mes de expiración:</label>
                            <div class="col-md-6">
                                <input id="cardexpirymonth" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cardexpiryyear" class="col-md-4 control-label">Año de expiración:</label>
                            <div class="col-md-6">
                                <input id="cardexpiryyear" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cvc" class="col-md-4 control-label">CVC:</label>
                            <div class="col-md-6">
                                <input id="cvc" type="text" class="form-control" required>
                            </div>
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