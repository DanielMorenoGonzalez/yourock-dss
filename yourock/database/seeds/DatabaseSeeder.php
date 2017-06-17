<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Llamamos a otro fichero de semillas
        $this->call(CategoriesTableSeeder::class);
        //Mostramos información por consola
        $this->command->info('Category table seeded!');

        //Llamamos a otro fichero de semillas
        $this->call(InstrumentsTableSeeder::class);
        //Mostramos información por consola
        $this->command->info('Instrument table seeded!');

        //Llamamos a otro fichero de semillas
        $this->call(AddressesTableSeeder::class);
        //Mostramos información por consola
        $this->command->info('Address table seeded!');

        //Llamamos a otro fichero de semillas
        $this->call(UsersTableSeeder::class);
        //Mostramos información por consola
        $this->command->info('User table seeded!');
    }
}
