<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Instrument;
use App\Category;
use App\Order;
use App\Orderline;
use DB;
use Session;

class InstrumentsController extends Controller
{
    public function show($id) {
        $instrument = Instrument::findOrFail($id);
        return view('instruments.show', (['instrument' => $instrument]));
    }

    public function addToCart(Request $request, $id) {
        $instrument = Instrument::findOrFail($id);
        $orderline = new Orderline;
        $orderline->quantity = 3;
        $orderline->instrument_id = $id;
        Session::put('orderline', $orderline);
        return redirect()->action('OrderlinesController@index');
        /*
        $instrument = Instrument::findOrFail($id);
        $orderline = new Orderline;
        $orderline->quantity = 5;
        $orderline->instrument_id = $id;
        //$request->session()->put('order', $order);
        Session::put('orderline', $orderline);
        return redirect()->action('OrderlinesController@index');
        */
    }

}
