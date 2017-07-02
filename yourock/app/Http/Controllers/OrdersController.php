<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Order;
use App\Instrument;
use Session;
use DB;
use Stripe\Stripe;
use Stripe\Charge;

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
                if($orderlinePrueba[0]->instrument_id == Session::get('orderline')->instrument_id){;
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

    public function checkout() {
        if(!Session::has('order')){
            return redirect('shoppingcart');
        }

        //Calculamos el total de todos los instrumentos de las líneas de pedido
        $orderShoppingCart = new Order;
        $total = $orderShoppingCart->getTotalShoppingCart();

        return view('checkout', (['total' => $total]));
    }

    public function postCheckout(Request $request) {
        if(!Session::has('order')){
            return redirect('shoppingcart');
        }

        //Calculamos el total de todos los instrumentos de las líneas de pedido
        $orderShoppingCart = new Order;
        $total = $orderShoppingCart->getTotalShoppingCart();

        Stripe::setApiKey('sk_test_vhzOEvOnC2tb8fwFD1TQcDCs');
        try{
            Charge::create(array(
                "amount" => $total * 100,
                "currency" => "eur",
                "description" => "Test Charge",
                "source" => $request->input('stripeToken')
            ));
        } catch (\Exception $e) {
            return redirect('checkout')->with('error', $e->getMessage());
        }

        return redirect('home')->with('success', 'Compra realizada con éxito');
    }

}
