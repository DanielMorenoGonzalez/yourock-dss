<?php

use Illuminate\Database\Seeder;
use App\Category;

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

        //Creamos y guardamos distintos objetos relacionados
        $category1 = new Category([
            'name' => 'Guitarras eléctricas',
            'description' => 'En esta sección se encuentran todas las guitarras eléctricas disponibles.',
            'urlName' => 'guitarraselectricas'
        ]);
        $category1->save();

        $category2 = new Category([
            'name' => 'Baterías acústicas',
            'description' => 'En esta sección se encuentran todas las baterías acústicas disponibles.',
            'urlName' => 'bateriasacusticas'
        ]);
        $category2->save();

    }
}
