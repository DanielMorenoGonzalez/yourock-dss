<?php

use Illuminate\Database\Seeder;
use App\Orderline;
use App\Instrument;
use App\Order;

class OrderlinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Borramos los datos de la tabla
        DB::table('orderlines')->delete();

        //Recuperamos la cuarta guitarra eléctrica
        $instrument1 = Instrument::find(4);

        //Recuperamos la quinta guitarra eléctrica
        $instrument2 = Instrument::find(5);

        //Recuperamos el primer pedido
        $order1 = Order::find(1);

        //Creamos y guardamos distintos objetos relacionados
        $orderline1 = new Orderline([
            'quantity' => '2'
        ]);
        $orderline1->instrument()->associate($instrument1);
        $orderline1->order()->associate($order1);
        $orderline1->save();

        //Recuperamos el segundo pedido
        $order2 = Order::find(2);

        //Creamos y guardamos distintos objetos relacionados
        $orderline2 = new Orderline([
            'quantity' => '1'
        ]);
        $orderline2->instrument()->associate($instrument1);
        $orderline2->order()->associate($order2);
        $orderline2->save();

        $orderline3 = new Orderline([
            'quantity' => '3'
        ]);
        $orderline3->instrument()->associate($instrument2);
        $orderline3->order()->associate($order1);
        $orderline3->save();
        
    }
}
