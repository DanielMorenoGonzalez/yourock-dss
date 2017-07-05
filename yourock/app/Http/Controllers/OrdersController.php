<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Order;
use App\Orderline;
use App\Instrument;
use Session;
use DB;

class OrdersController extends Controller
{
    //Método para mostrar todos los pedidos que ha realizado un usuario
    public function index(){
        $user = Auth::user();
        $orders = $user->getOrders();
        return view('orders.index', array('user' => $user, 'orders' => $orders));
    }

    //Método para mostrar un pedido concreto que haya realizado el usuario
    public function show($id) {
        $order = Order::findOrFail($id);
        $orderlines = $order->getOrderlines();
        return view('orders.show', array('order' => $order, 'orderlines' => $orderlines));
    }
    
    public function addOrderlinesToOrder(){
        $order = new Order;
        $encontrado = false;
        
        //Si ya existe un pedido en la sesión (carrito de la compra)
        if(Session::has('order')){
            //Para cada línea de pedido contenida en el pedido de la sesión
            foreach(Session::get('order') as $orderlinePrueba){
                //Si el instrumento de la linea de pedido X es el que el usuario acaba de añadir
                if($orderlinePrueba[0]->instrument_id == Session::get('orderline')->instrument_id){
                    $encontrado = true;
                    break;
                }
            }
            //Si es un nuevo instrumento
            if(!$encontrado){
                    $listitems = $order->addOrderlineToCart();
                    Session::push('order', $listitems);
                }
        }
        //Si es el primer instrumento en añadir al carrito de la compra
        else{
            $listitems = $order->addOrderlineToCart();
            Session::push('order', $listitems);
        }
        
        return redirect()->action('OrderlinesController@index');
    }
}
