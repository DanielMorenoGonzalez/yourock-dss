<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Borramos los datos de la tabla
        DB::table('categories')->delete();
        //Añadimos una entrada a esta tabla
        DB::table('categories')->insert([
            'name' => 'Guitarras eléctricas',
            'description' => 'En esta sección se encuentran todas las guitarras eléctricas disponibles'
        ]);
    }
}
