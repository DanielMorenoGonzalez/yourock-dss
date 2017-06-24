<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Order;
use App\Instrument;
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

        //$instrument = $order->orderlines->instrument();
        return view('orders.show', array('order' => $order, 'orderlines' => $orderlines));
    }

    //Sólo tendran acceso los usuarios autenticados
    public function __construct(){
        $this->middleware('auth');
    }
}
