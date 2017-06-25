<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Customer;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Borramos los datos de la tabla
        DB::table('users')->delete();

        //Creamos y guardamos distintos objetos relacionados
        $customer1 = new Customer([
            'nif' => '42985567K',
            'name' => 'Isabel',
            'surname' => 'Morales',
            'address' => 'Calle San Isidro',
            'city' => 'San Vicente del Raspeig',
            'province' => 'Alicante',
            'zipCode' => '03690',
            'phoneNumber' => '678992432',
            'email' => 'isabellaRE93@gmail.com',
            'password' => bcrypt('gp1bike')
        ]);
        $customer1->save();

        $customer2 = new Customer([
            'nif' => '72548977S',
            'name' => 'Pedro',
            'surname' => 'García',
            'address' => 'Calle Tres Fuentes',
            'city' => 'Baeza',
            'province' => 'Jaén',
            'zipCode' => '23440',
            'phoneNumber' => '613235643',
            'email' => 'pgarcia21@gmail.com',
            'password' => 'm0t0rbikes'
        ]); 
        $customer2->save();

        $customer3 = new Customer([
            'nif' => '47228234P',
            'name' => 'Daniel',
            'surname' => 'Sánchez',
            'address' => 'Avenida Del Llano',
            'city' => 'Gijón',
            'province' => 'Asturias',
            'zipCode' => '33205',
            'phoneNumber' => '692134321',
            'email' => 'danisanchezMUSIC@gmail.com',
            'password' => 'mlove94'
        ]);
        $customer3->save();

    }
}
