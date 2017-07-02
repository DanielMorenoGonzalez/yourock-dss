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
        $encontrado = false;

        if(Session::has('order')){
            foreach(Session::get('order') as $orderlinePrueba){
                if($orderlinePrueba[0]->instrument_id == $id){
                    //\Log::info("HAY ORDER, INCREMENTANDO CANTIDAD");
                    $orderlinePrueba[0]->quantity += 1;
                    Session::put('orderline', $orderlinePrueba[0]);
                    $encontrado = true;
                    break;
                }
            }
            if(!$encontrado){
                    //\Log::info("HAY ORDER, CREANDO ORDERLINE");
                    $orderline = new Orderline;
                    $orderline->quantity = 1;
                    $orderline->instrument_id = $id;
                    Session::put('orderline', $orderline);
                }
        }
        else{
            //\Log::info("NO HAY ORDER, CREANDO ORDERLINE");
            $orderline = new Orderline;
            $orderline->quantity = 1;
            $orderline->instrument_id = $id;
            Session::put('orderline', $orderline);
        }
        
        return redirect()->action('OrdersController@listshoppingcart');
    }

    /*
    //Método para mostrar todas las líneas de pedido de un pedido concreto
    public function index(Request $request){
        return view('shoppingcart');
    }
    */
}
