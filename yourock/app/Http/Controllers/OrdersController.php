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
use Stripe\Stripe;
use Stripe\Charge;
use Mail;

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
        $descripcion = "Compra realizada por " . Auth::user()->email;

        Stripe::setApiKey('sk_test_vhzOEvOnC2tb8fwFD1TQcDCs');
        try{
            $charge = Charge::create(array(
                "amount" => $total * 100,
                "currency" => "eur",
                "description" => $descripcion,
                "source" => $request->input('stripeToken')
            ));

            $order = new Order;
            $order->state = 'Procesando pedido';
            $order->payment = $charge->id;
            $order->user()->associate(Auth::user());
            $order->save();

            foreach(Session::get('order') as $orderlinePrueba){
                $instrument = $orderlinePrueba[0]->getInstrument();
                $orderline = new Orderline;
                $orderline->quantity = $orderlinePrueba[0]->quantity;
                $orderline->order()->associate($order);
                $orderline->instrument()->associate($instrument);
                $orderline->save();
            }

        } catch (\Exception $e) {
            return redirect('checkout')->with('error', $e->getMessage());
        }

        Session::forget('order');
        
        $orderlines = $order->getOrderlines();

        $data = array(
            'email' => Auth::user()->email,
            'subject' => 'Compra realizada en YOU ROCK!',
            'bodyOrder' => $order,
            'bodyUser' => Auth::user(),
            'bodyOrderlines' => $orderlines
        );

        Mail::send('emails.purchase', $data, function($message) use ($data){
            $message->from('yourockmusic1992@gmail.com', 'YOU ROCK!');
            $message->to($data['email'])->subject($data['subject']);
        });

        return redirect('home')->with('success', 'Compra realizada con éxito');
    }
}
