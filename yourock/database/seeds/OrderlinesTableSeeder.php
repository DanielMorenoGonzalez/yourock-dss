<?php

use Illuminate\Database\Seeder;
use App\Orderline;
use App\Instrument;

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

        //Recuperamos la primera batería acústica
        $instrument1 = Instrument::find(4);

        //Creamos y guardamos distintos objetos relacionados
        $orderline1 = new Orderline([
            'quantity' => '2'
        ]);
        $orderline1->instrument()->associate($instrument1);
        $orderline1->save();
    }
}
