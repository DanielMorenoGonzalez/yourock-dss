<?php

use Illuminate\Database\Seeder;
use App\Order;
use App\User;

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

        //Recuperamos al primer usuario
        $user1 = User::find(1);

        //Creamos y guardamos distintos objetos relacionados
        $order1 = new Order([
            'payment' => 'ch_kie283s9sWsP',
            'state' => 'En curso'
        ]);
        $order1->user()->associate($user1);
        $order1->save();

        //Creamos y guardamos distintos objetos relacionados
        $order2 = new Order([
            'payment' => 'ch_q2Kdow9PaQwa',
            'state' => 'En curso'
        ]);
        $order2->user()->associate($user1);
        $order2->save();
    }
}
