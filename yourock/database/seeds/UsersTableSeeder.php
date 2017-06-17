<?php

use Illuminate\Database\Seeder;
use App\Address;
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

        //Recuperamos la primera dirección
        $address1 = Address::find(1);

        //Creamos y guardamos distintos objetos relacionados
        $user1 = new User([
            'nif' => '42985567K',
            'name' => 'Isabel',
            'surname' => 'Morales',
            'phoneNumber' => '678992432',
            'email' => 'isabellaRE93@gmail.com',
            'password' => 'gp1bike',
            'type' => 'administrator'
        ]);
        $user1->address()->associate($address1); 
        $user1->save();

        $user2 = new User([
            'nif' => '72548977S',
            'name' => 'Pedro',
            'surname' => 'García',
            'phoneNumber' => '613235643',
            'email' => 'pgarcia21@gmail.com',
            'password' => 'm0t0rbikes',
            'type' => 'user'
        ]);
        $user2->address()->associate($address1); 
        $user2->save();

        //Recuperamos la segunda dirección
        $address2 = Address::find(2);

        $user3 = new User([
            'nif' => '47228234P',
            'name' => 'Daniel',
            'surname' => 'Sánchez',
            'phoneNumber' => '692134321',
            'email' => 'danisanchezMUSIC@gmail.com',
            'password' => 'mlove94',
            'type' => 'user'
        ]);
        $user3->address()->associate($address2); 
        $user3->save();

    }
}
