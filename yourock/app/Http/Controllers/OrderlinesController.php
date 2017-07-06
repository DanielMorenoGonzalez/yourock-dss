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
        //
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
        //
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
     * @param  \App\Orderline  $orderline
     * @return \Illuminate\Http\Response
     */
    public function show(Orderline $orderline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orderline  $orderline
     * @return \Illuminate\Http\Response
     */
    public function edit(Orderline $orderline)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orderline  $orderline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orderline $orderline)
    {
        //
    }
}
