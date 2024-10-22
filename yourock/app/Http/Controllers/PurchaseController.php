<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Stripe\Stripe;
use Stripe\Charge;
use Mail;
use Session;
use App\Order;
use App\Orderline;
use App\Instrument;
use App\User;

class PurchaseController extends Controller
{
    public function checkout() {
        if(!Session::has('order')){
            return redirect('shoppingcart');
        }

        //Calculamos el total de todos los instrumentos de las líneas de pedido
        $orderShoppingCart = new Order;
        $total = $orderShoppingCart->getTotalShoppingCart();

        //Comprobamos si existe suficiente stock en el almacen
        foreach(Session::get('order') as $orderlinePrueba){
            $instrument = $orderlinePrueba[0]->instrument;
            if(!$instrument->checkStock($orderlinePrueba[0]->quantity)){
                return redirect()->action('OrderlinesController@indexCart')->with('nostock', 'No hay suficiente stock del instrumento "' . $instrument->name . '"');
            }
        }

        return view('checkout', (['total' => $total]));
    }

    public function purchase(Request $request) {
        if(!Session::has('order')){
            return redirect('shoppingcart');
        }

        $this->validate($request, [
			'cardholder-name' => 'required|max:50'
		]);

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
                $instrument = $orderlinePrueba[0]->instrument;
                $orderline = new Orderline;
                $orderline->quantity = $orderlinePrueba[0]->quantity;

                //Decrementamos el stock del instrumento una vez ya está comprado
                $instrument->decreaseStock($orderlinePrueba[0]->quantity);
                $instrument->save();

                $orderline->order()->associate($order);
                $orderline->instrument()->associate($instrument);
                $orderline->save();
            }

        } catch (\Exception $e) {
            return redirect('checkout')->with('error', $e->getMessage());
        }

        //Olvidamos la cantidad y el pedido de la sesión
        Session::forget('quantity');
        Session::forget('order');
        
        $orderlines = $order->orderlines;

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

        return redirect('home')->with('success', 'Compra realizada con éxito. Te acabamos de enviar un email con los datos de la misma.');
    }
}
