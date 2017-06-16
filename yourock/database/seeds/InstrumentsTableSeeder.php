<?php

use Illuminate\Database\Seeder;

class InstrumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Borramos los datos de la tabla
        DB::table('instruments')->delete();
        //Añadimos una entrada a esta tabla
        DB::table('instruments')->insert([
            [
                'name' => 'Fender Standard Telecaster CAR',
                'description' => 'Esta guitarra eléctrica, con acabado brillante y hecha en 
                México, dispone de un mástil y diapasón de arce. Además, cuenta con 21 trastes Medium
                y conmutadores de 3 vías. Disponible en color Candy Apple Red.',
                'price' => '620',
                'stock' => '100',
                'urlPhoto' => 'urldelaguitarraelectrica1'
            ],
            [
                'name' => 'Fender Squier Affinity Tele MN BB hello',
                'description' => 'Cuerpo de aliso, mástil de arce y diapasón de arce',
                'price' => '209',
                'stock' => '50',
                'urlPhoto' => 'urldelafoto'
            ]  
        ]);
    }
}
