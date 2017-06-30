<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Order;
use App\Instrument;
use Session;
use DB;

class OrdersController extends Controller
{
    //Sólo tendran acceso los usuarios autenticados
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->get();
        return view('orders.index', array('user' => $user, 'orders' => $orders));
    }

    public function show($id) {
        $order = Order::findOrFail($id);
        $orderlines = $order->orderlines;
        return view('orders.show', array('order' => $order, 'orderlines' => $orderlines));
    }

    public function listshoppingcart(){
        $order = new Order;
        $listitems = $order->addShoppingCart();
        $this->items[] = Session::get('orderline');
        Session::push('order', $listitems);
        return redirect()->action('OrderlinesController@index');
    }
/*
    public function listshoppingcart(){
        $this->items[] = Session::get('orderline');
        Session::push('order', $this->items);
        return redirect()->action('OrderlinesController@index');
    }
    */

}
