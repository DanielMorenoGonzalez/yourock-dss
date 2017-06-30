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
        $this->items[] = Session::get('orderline');
        Session::push('order', '1');
        return redirect()->action('OrderlinesController@index');
    }

    //Sólo tendran acceso los usuarios autenticados
    public function __construct(){
        $this->middleware('auth');
    }

}
