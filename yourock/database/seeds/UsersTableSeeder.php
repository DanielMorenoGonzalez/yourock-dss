<?php

use Illuminate\Database\Seeder;
use App\User;

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
        $user1 = new User([
            'nif' => '42985567K',
            'name' => 'Isabel',
            'surname' => 'Morales',
            'address' => 'Calle San Isidro',
            'province' => 'Alicante',
            'city' => 'San Vicente del Raspeig',
            'zipCode' => '03690',
            'phoneNumber' => '678992432',
            'email' => 'isabellaRE93@gmail.com',
            'password' => bcrypt('gp1bike'),
            'type' => 'customer'
        ]);
        $user1->save();

        $user2 = new User([
            'nif' => '72548977S',
            'name' => 'Pedro',
            'surname' => 'García',
            'phoneNumber' => '613235643',
            'job_title' => 'Técnico',
            'email' => 'pgarcia21@gmail.com',
            'password' => bcrypt('m0t0rbikes'),
            'type' => 'admin'
        ]); 
        $user2->save();

        $user3 = new User([
            'nif' => '47228234P',
            'name' => 'Daniel',
            'surname' => 'Sánchez',
            'address' => 'Avenida Del Llano',
            'province' => 'Asturias',
            'city' => 'Gijón',
            'zipCode' => '33205',
            'phoneNumber' => '692134321',
            'email' => 'danisanchezMUSIC@gmail.com',
            'password' => bcrypt('mlove94'),
            'type' => 'customer'
        ]);
        $user3->save();

    }
}
