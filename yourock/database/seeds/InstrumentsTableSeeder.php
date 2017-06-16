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
                'description' => 'Esta guitarra eléctrica, con acabado brillante y hecha en México, dispone de un mástil y diapasón de arce. Además, cuenta con 21 trastes Medium y conmutadores de 3 vías. Disponible en color Candy Apple Red.',
                'price' => '620',
                'stock' => '100',
                'urlPhoto' => 'urldelaguitarraelectrica1',
                'category_id' => '1'
            ],
            [
                'name' => 'Gibson Les Paul Traditional T HC 2016',
                'description' => 'Esta guitarra eléctrica, con cuerpo de caoba y fabricada en Estados Unidos, dispone de un mástil de caoba con perfil de finales de los 50 y de un diapasón de palisandro con binding e inlays trapezoidales. Además, cuenta con 22 trastes, 2 controles de volumen y 2 controles de tono, e incluye un estuche Gibson. Disponible en color Heritage Cherry SUnburst.',
                'price' => '1700',
                'stock' => '57',
                'urlPhoto' => 'urldelaguitarraelectrica2',
                'category_id' => '1'
            ],
            [
                'name' => 'Harley Benton DC-580 CH Vintage Series',
                'description' => 'Esta guitarra eléctrica, con cuerpo de tilo, dispone de un mástil de arce canadiense encolado en forma de C y un diapasón de palisandro (de 350mm). Además, cuenta con 24 trastes, 2 controles de volumen y 2 controles de tono, herrajes de cromo y clavijas de afinación die-cast. Diponible en color Cherry de alto brillo.',
                'price' => '128',
                'stock' => '36',
                'urlPhoto' => 'urldelaguitarraelectrica3',
                'category_id' => '1'
            ]
        ]);
    }
}
