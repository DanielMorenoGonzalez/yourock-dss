<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Instrument;
use App\Orderline;
use Session;

class OrderlinesController extends Controller
{
    public function addToCart(Request $request, $id) {
        $instrument = Instrument::findOrFail($id);
        $orderline = new Orderline;
        $orderline->quantity = 3;
        $orderline->instrument_id = $id;
        Session::put('orderline', $orderline);
        return redirect()->action('OrdersController@listshoppingcart');
        /*
        $instrument = Instrument::findOrFail($id);
        $orderline = new Orderline;
        $orderline->quantity = 5;
        $orderline->instrument_id = $id;
        //$request->session()->put('order', $order);
        Session::put('orderline', $orderline);
        return redirect()->action('OrderlinesController@index');
      */
    }

    public function index(Request $request){
        return view('shoppingcart');
    }
}
