@extends('layouts.app')
@section('title', 'YOU ROCK! - Checkout')
@section('content')
<h1>Página de checkout</h1>

<form role="form" action="{{ route('checkout')}}" method="POST" id="payment-form">
  <div class="form-row">
    <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- a Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors -->
    <div id="card-errors" role="alert"></div>
  </div>

  <button type="submit" class="btn btn-primary">Submit Payment</button>
</form>
@endsection