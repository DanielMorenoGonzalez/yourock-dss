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
    public function addInstrumentToCart(Request $request, $id) {
        $instrument = Instrument::findOrFail($id);
        $encontrado = false;
        
        //Comprobamos si existe ya un pedido en la sesión
        if(Session::has('order')){
            //Para cada línea de pedido contenida en el pedido de la sesión
            foreach(Session::get('order') as $orderlinePrueba){
                //Si ya existe el instrumento que acabamos de añadir
                if($orderlinePrueba[0]->instrument_id == $id){
                    $orderlinePrueba[0]->quantity += 1;
                    Session::put('quantity', $orderlinePrueba[0]->quantity);
                    Session::put('orderline', $orderlinePrueba[0]);
                    $encontrado = true;
                    break;
                }
            }
            //Si es un instrumento diferente a los que existen en el pedido de la sesión
            if(!$encontrado){
                    $orderline = new Orderline;
                    $orderline->quantity = 1;
                    $orderline->instrument_id = $id;
                    Session::put('quantity', Session::get('quantity')+1);
                    Session::put('orderline', $orderline);
            }
        }
        //Si es el primer instrumento que añadimos al carrito
        else{
            $orderline = new Orderline;
            $orderline->quantity = 1;
            $orderline->instrument_id = $id;
            Session::put('quantity', 1);
            Session::put('orderline', $orderline);
        }
        
        return redirect()->action('OrdersController@addOrderlinesToOrder');
    }
    
    //Método para mostrar todas las líneas de pedido de un pedido concreto
    public function index(Request $request){
        return view('shoppingcart');
    }
}
