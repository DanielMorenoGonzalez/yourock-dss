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

    //Método para mostrar todos los pedidos que ha realizado un usuario
    public function index(){
        $user = Auth::user();
        $orders = $user->getOrders();
        //$orders = Order::where('user_id', $user->id)->get();
        return view('orders.index', array('user' => $user, 'orders' => $orders));
    }

    public function show($id) {
        $order = Order::findOrFail($id);
        $orderlines = $order->orderlines;
        return view('orders.show', array('order' => $order, 'orderlines' => $orderlines));
    }

    
    public function listshoppingcart(){
        $order = new Order;
        $encontrado = false;

        if(Session::has('order')){
            foreach(Session::get('order') as $orderlinePrueba){
                if($orderlinePrueba[0]->instrument_id == Session::get('orderline')->instrument_id){;
                    //\Log::info("HAY DUPLICADO, DEVOLVIENDO SHOPPING CART");
                    $encontrado = true;
                    break;
  
                }
            }
            if(!$encontrado){
                    //\Log::info("NO HAY DUPLICADO, DEVOLVIENDO SHOPPING CART");
                    $listitems = $order->addShoppingCart();
                    Session::push('order', $listitems);
                }
        }
        else{
            //\Log::info("NUEVO, DEVOLVIENDO SHOPPING CART");
            $listitems = $order->addShoppingCart();
            Session::push('order', $listitems);
        }


        \Log::info(Session::get('orderline')->instrument_id);
        //$listitems = $order->addShoppingCart();
        
        return view('shoppingcart');
        //return redirect()->action('OrderlinesController@index');
    }

}
