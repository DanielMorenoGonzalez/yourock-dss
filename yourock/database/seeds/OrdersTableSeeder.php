<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Borramos los datos de la tabla
        DB::table('orders')->delete();

        //Creamos y guardamos distintos objetos relacionados
        $order1 = new Order([
            'payment' => 'Tarjeta',
            'state' => 'En curso'
        ]);
        $order1->save();
    }
}
