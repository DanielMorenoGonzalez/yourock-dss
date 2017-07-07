<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Orderline;
use App\Instrument;
use Session;
use DB;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $orders = $user->getOrders();
        return view('orders.index', array('user' => $user, 'orders' => $orders));
    }

    public function indexOrders() {
        $orders = Order::paginate(10);
        return view('orders.indexforadmin', (['orders' => $orders]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('type', 'customer')->get();
        return view('orders.create', (['users' => $users]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        $orderlines = $order->getOrderlines();
        return view('orders.show', array('order' => $order, 'orderlines' => $orderlines));
    }

    public function showDetails($id){
        $order = Order::find($id);
        //$category = Category::findOrFail($id);
        return view('orders.showforadmin', (['order' => $order]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('orders.edit', (['order' => $order]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $this->validate($request, [
            'payment' => 'max:30|unique:payment',
            'state' => 'max:30'
		]);

        if($request->input('payment') != ''){
            $order->payment = $request->input('payment');
        }
        if($request->input('state') != ''){
            $order->state = $request->input('state');
        }

        $order->save();

        return redirect()->action('OrdersController@indexOrders')->with('orderupdate', '¡Pedido actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        /*
        //Hacemos que el instrumento ya no apunte a ninguna categoría
        $instrument->category()->dissociate();
        $instrument->save();
        $instrument->delete();

        return redirect()->action('InstrumentsController@index')->with('instrumentdelete', '¡Instrumento borrado!');
        */
    }

    public function addOrderlineToCart(){
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
        
        return redirect()->action('OrderlinesController@indexCart');
    }
}
