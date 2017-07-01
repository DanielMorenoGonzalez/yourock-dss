<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Instrument;
use App\Orderline;
use Session;

class OrderlinesController extends Controller
{
    //Método para añadir un instrumento a una línea de pedido
    public function addToCart(Request $request, $id) {
        $instrument = Instrument::findOrFail($id);
        $orderline = new Orderline;
        $orderline->quantity = 1;
        $orderline->instrument_id = $id;
        Session::put('orderline', $orderline);
        return redirect()->action('OrdersController@listshoppingcart');
    }
    /*
    //Método para mostrar todas las líneas de pedido de un pedido concreto
    public function index(Request $request){
        return view('shoppingcart');
    }
    */
}
