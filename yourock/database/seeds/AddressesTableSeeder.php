<?php

use Illuminate\Database\Seeder;
use App\Address;
use App\User;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Borramos los datos de la tabla
        DB::table('addresses')->delete();

        //Creamos y guardamos distintos objetos relacionados
        $address1 = new Address([
            'street' => 'Calle San Isidro',
            'number' => '35',
            'city' => 'San Vicente del Raspeig - Alicante',
            'zipCode' => '03690',
        ]); 
        $address1->save();

        $address2 = new Address([
            'street' => 'Calle Tres Fuentes',
            'number' => '48',
            'city' => 'Baeza - Jaén',
            'zipCode' => '23440'
        ]);
        $address2->save();
    }
}
