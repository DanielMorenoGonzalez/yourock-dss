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
            'description' => 'En esta sección se encuentran todas las guitarras eléctricas disponibles.'
        ]);
        $category1->save();

        $category2 = new Category([
            'name' => 'Bajos eléctricos',
            'description' => 'En esta sección se encuentran todos los bajos eléctricos disponibles.'
        ]);
        $category2->save();

        $category3 = new Category([
            'name' => 'Baterías acústicas',
            'description' => 'En esta sección se encuentran todas las baterías acústicas disponibles.'
        ]);
        $category3->save();

        $category4 = new Category([
            'name' => 'Baterías electrónicas',
            'description' => 'En esta sección se encuentran todas las baterías electrónicas disponibles.'
        ]);
        $category4->save();

        $category5 = new Category([
            'name' => 'Pianos de cola',
            'description' => 'En esta sección se encuentran todos los pianos de cola disponibles.'
        ]);
        $category5->save();

        $category6 = new Category([
            'name' => 'Teclados',
            'description' => 'En esta sección se encuentran todos los teclados disponibles.'
        ]);
        $category6->save();

    }
}
