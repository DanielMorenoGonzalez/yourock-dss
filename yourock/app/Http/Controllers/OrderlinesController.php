<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Instrument;
use App\Orderline;
use Session;

class OrderlinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shoppingcart');
    }

    public function indexOrderlines(){
        $orderlines = Orderline::paginate(10);
        return view('orderlines.indexforadmin', (['orderlines' => $orderlines]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orders = Order::all();
        $instruments = Instrument::all();
        return view('orderlines.create', array('orders' => $orders, 'instruments' => $instruments));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'instrument' => 'required',
            'quantity' => 'required',
            'order' => 'required'
		]);

        $orderline = new Orderline([
            'quantity' => $request->input('quantity')
        ]);

        $instrument = Instrument::find($request->input('instrument'));
        $orderline->instrument()->associate($instrument);

        $order = Order::find($request->input('order'));
        $orderline->order()->associate($order);

        $orderline->save(); 

        return redirect()->action('OrderlinesController@indexOrderlines')->with('orderlinecreate', '¡Línea de pedido creada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orderline  $orderline
     * @return \Illuminate\Http\Response
     */
    public function show(Orderline $orderline)
    {
        //$instrument = Instrument::findOrFail($id);
        //$category = $instrument->category;
        return view('orderlines.show', (['orderline' => $orderline]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orderline  $orderline
     * @return \Illuminate\Http\Response
     */
    public function edit(Orderline $orderline)
    {
        $orders = Order::all();
        $instruments = Instrument::all();
        return view('orderlines.edit', array('orderline' => $orderline, 'orders' => $orders, 'instruments' => $instruments));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orderline  $orderline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orderline $orderline)
    {
        $this->validate($request, [
            'quantity' => 'max:200'
		]);

        if($request->input('quantity') != ''){
            $orderline->quantity = $request->input('quantity');
        }
        if($request->input('instrument') != ''){
            $instrument = Instrument::find($request->input('instrument'));
            $orderline->instrument()->dissociate();
            $orderline->instrument()->associate($instrument);
        }
        if($request->input('order') != ''){
            $order = Order::find($request->input('order'));
            $orderline->order()->dissociate();
            $orderline->order()->associate($order);
        }

        $orderline->save();

        return redirect()->action('OrderlinesController@indexOrderlines')->with('orderlineupdate', '¡Línea de pedido actualizada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orderline  $orderline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orderline $orderline)
    {
        $orderline->order()->dissociate();
        $orderline->save();
        $orderline->delete();

        return redirect()->action('OrderlinesController@indexOrderlines')->with('orderlinedelete', '¡Línea de pedido borrada!');
    }

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
}
