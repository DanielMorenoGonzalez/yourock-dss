<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Instrument;

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

        //Recuperamos la categoría de las guitarrás eléctricas
        $category1 = Category::find(1);

        //Creamos y guardamos distintos objetos relacionados con las guitarras eléctricas
        $instrument1 = new Instrument([
            'name' => 'Fender Standard Telecaster CAR',
            'description' => 'Esta guitarra eléctrica, con acabado brillante y hecha en México, dispone de un mástil y diapasón de arce. Además, cuenta con 21 trastes Medium y conmutadores de 3 vías. Disponible en color Candy Apple Red.',
            'price' => '620',
            'stock' => '100',
            'urlPhoto' => 'urldelaguitarraelectrica1',
            'manufacturer' => 'Fender'
        ]);
        $instrument1->category()->associate($category1);
        $instrument1->save();

        $instrument2 = new Instrument([
            'name' => 'Gibson Les Paul Traditional T HC 2016',
            'description' => 'Esta guitarra eléctrica, con cuerpo de caoba y fabricada en Estados Unidos, dispone de un mástil de caoba con perfil de finales de los 50 y de un diapasón de palisandro con binding e inlays trapezoidales. Además, cuenta con 22 trastes, 2 controles de volumen y 2 controles de tono, e incluye un estuche Gibson. Disponible en color Heritage Cherry Sunburst.',
            'price' => '1700',
            'stock' => '57',
            'urlPhoto' => 'urldelaguitarraelectrica2',
            'manufacturer' => 'Gibson'
        ]);
        $instrument2->category()->associate($category1);
        $instrument2->save();

        $instrument3 = new Instrument([
            'name' => 'Harley Benton DC-580 CH Vintage Series',
            'description' => 'Esta guitarra eléctrica, con cuerpo de tilo, dispone de un mástil de arce canadiense encolado en forma de C y un diapasón de palisandro (de 350mm). Además, cuenta con 24 trastes, 2 controles de volumen y 2 controles de tono, herrajes de cromo y clavijas de afinación die-cast. Diponible en color Cherry de alto brillo.',
            'price' => '128',
            'stock' => '36',
            'urlPhoto' => 'urldelaguitarraelectrica3',
            'manufacturer' => 'Harley'
        ]);
        $instrument3->category()->associate($category1);
        $instrument3->save();

        $instrument4 = new Instrument([
            'name' => 'Epiphone Jeff Waters Annihilation-II V',
            'description' => 'Esta guitarra eléctrica, con cuerpo de caoba, dispone de un mástil atornillado de caoba en forma de D cónica delgada de los 60 y un diapasón fenólico. Además, cuenta con 24 trastes, incluye un potenciómetro de volumen y otro de tono con Killpot, herrajes negros y pastillas Epiphone ProBucker II y III. Diponible en color Annihilation Red.',
            'price' => '457',
            'stock' => '10',
            'urlPhoto' => 'urldelaguitarraelectrica4',
            'manufacturer' => 'Epiphone'
        ]);
        $instrument4->category()->associate($category1);
        $instrument4->save();

        $instrument5 = new Instrument([
            'name' => 'Harley Benton BigTone White Vintage Series',
            'description' => 'Esta guitarra eléctrica, con cuerpo hueco de arce, dispone de un mástil de arce canadiense y un diapasón de palisandro con inlays de bloques. Además, cuenta con 20 trastes, incluye 3 controles de volumen, 1 control de tono, herrajes DLX dorados, pastillas humbucker de doble bobina Alnico DLX y clavijas de afinación de estilo imperial diecast (fundición) DLX. Diponible en color Vintage White de alto brillo.',
            'price' => '222',
            'stock' => '17',
            'urlPhoto' => 'urldelaguitarraelectrica5',
            'manufacturer' => 'Harley Benton'
        ]);
        $instrument5->category()->associate($category1);
        $instrument5->save();

        $instrument6 = new Instrument([
            'name' => 'Fender Squier Affinity Strat SFG',
            'description' => 'Esta guitarra eléctrica, con cuerpo de aliso, dispone de un mástil de arce y un diapasón de palisandro. Además, cuenta con 21 trastes, incluye 2 reguladores de volumen, 1 regulador de tono, herrajes DLX dorados, pastillas Standard Singlecoil, un trémolo Vintage sincronizado y hardware cromado. Diponible en color Surf Green.',
            'price' => '194',
            'stock' => '12',
            'urlPhoto' => 'urldelaguitarraelectrica6',
            'manufacturer' => 'Fender'
        ]);
        $instrument6->category()->associate($category1);
        $instrument6->save();

        $instrument7 = new Instrument([
            'name' => 'Fender Deluxe Nashville Tele 2CSB',
            'description' => 'Esta guitarra eléctrica, con cuerpo de aliso y fabricada en México, dispone de un mástil de arce en forma de C y un diapasón de arce. Además, cuenta con 22 trastes, 1 interruptor de 5 posiciones, 1 pastilla de bobina simple Vintage Noiseless Tele (puente), 1 pastilla de bobina simple Vintage Noiseless Strat (intermedia) y 1 pastilla de bobina simple Vintage Noiseless Tele (mástil). Diponible en color Sunburst de 2 colores.',
            'price' => '705',
            'stock' => '0',
            'urlPhoto' => 'urldelaguitarraelectrica7',
            'manufacturer' => 'Fender'
        ]);
        $instrument7->category()->associate($category1);
        $instrument7->save();

        $instrument8 = new Instrument([
            'name' => 'Gretsch G6136T White Falcon',
            'description' => 'Esta guitarra eléctrica, con cuerpo hueco de 3 capas de arce laminado, dispone de un mástil de arce con tira de nogal y un diapasón de ébano. Además, cuenta con 22 trastes, 2 pastillas Gretsch FilterTron de alta sensibilidad, herrajes dorados, clavijas de afinación Grover con bloqueo y botones escalonados, y un trémolo Bigsby B6. Diponible en color White.',
            'price' => '705',
            'stock' => '0',
            'urlPhoto' => 'urldelaguitarraelectrica8',
            'manufacturer' => 'Gretsch'
        ]);
        $instrument8->category()->associate($category1);
        $instrument8->save();

        $instrument9 = new Instrument([
            'name' => 'Cort MBC-1 BK',
            'description' => 'Esta guitarra eléctrica, con cuerpo de tilo, dispone de un mástil de arce atornillado y un diapasón de palisandro. Además, cuenta con 22 trastes, incluye 1 control de volumen, 1 control de tono, 1 interruptor de palanca de 3 posiciones y botón Kill, herrajes de cromo, 1 pastilla humbucker Manson y 1 pastilla de bobina simple Manson. Diponible en color Black con acabado mate.',
            'price' => '556',
            'stock' => '0',
            'urlPhoto' => 'urldelaguitarraelectrica9',
            'manufacturer' => 'Cort'
        ]);
        $instrument9->category()->associate($category1);
        $instrument9->save();

        $instrument10 = new Instrument([
            'name' => 'PRS SE Custom 24 ESA LTD',
            'description' => 'Esta guitarra eléctrica, con cuerpo de caoba, dispone de un mástil de arce con perfil ancho delgado y un diapasón de palisandro. Además, cuenta con 24 trastes, incluye 1 control de volumen, 1 control de tono push/pull, 1 interruptor de 3 posiciones, herrajes de níquel y 2 pastillas PRS 85/15 S humbucker. Diponible en color Swamp Ash Natural (fresno de pantano).',
            'price' => '942',
            'stock' => '26',
            'urlPhoto' => 'urldelaguitarraelectrica10',
            'manufacturer' => 'PRS'
        ]);
        $instrument10->category()->associate($category1);
        $instrument10->save();

        $instrument11 = new Instrument([
            'name' => 'Gibson Les Paul Classic HP 2017 GOB',
            'description' => 'Esta guitarra eléctrica, con cuerpo de caoba y fabricada en Estados Unidos, dispone de un mástil de caoba cónico delgado y un diapasón de palisandro. Además, cuenta con 22 trastes, incluye 2 controles de volumen (push-pull), 2 controles de tono (push-pull) con knobs de cromo, Interruptor de palanca de 3 posiciones, herrajes de cromo y clavijas de afinación G-Force. Diponible en color Green Ocean Burst (Sunburst Océano Verde).',
            'price' => '1985',
            'stock' => '6',
            'urlPhoto' => 'urldelaguitarraelectrica11',
            'manufacturer' => 'Gibson'
        ]);
        $instrument11->category()->associate($category1);
        $instrument11->save();


        //Recuperamos la categoría de las baterías acústicas
        $category2 = Category::find(3);

        //Creamos y guardamos distintos objetos relacionados con las baterías acústicas
        $instrument12 = new Instrument([
            'name' => 'DW PDP CM5 Standard Red / Black',
            'description' => 'Esta batería, la cual está fabricada en madera de arce 100% con 7 capas en toms/bombo y 10 capas en la caja, está compuesta por un tom de 10" x 08", un tom de 12" x 09", un tom de suelo de 16" x 14", una caja de 14" x 5,5" y un bombo de 22" x 18". Además, contiene un set de herrajes de la serie Concept: soporte para Hi-Hat, soporte para caja, pedal individual para bombo, soporte recto para platillo y soporte jirafa para platillo. Disponible en Red Black Sparkle Fade, con acabado lacado Premium.',
            'price' => '1400',
            'stock' => '29',
            'urlPhoto' => 'urldelabateriaacustica1',
            'manufacturer' => 'DW'
        ]);
        $instrument12->category()->associate($category2);
        $instrument12->save();

        $instrument13 = new Instrument([
            'name' => 'Sonor Essential Force Green Stage 3',
            'description' => 'Esta batería, la cual está fabricada en madera de abedul 100% de 6 capas (7,2mm), está compuesta por un tom de 10" x 08", un tom de 12" x 09", un tom de suelo de 16" x 16", una caja de 14" x 5,5" y un bombo de 22" x 18". Además, contiene un set de herrajes: soporte para Hi-Hat, soporte para caja, 2 soportes jirafa para platillos y un pedal individual para bombo. Disponible en Green Fade, con terminación Stage 3.',
            'price' => '1108',
            'stock' => '17',
            'urlPhoto' => 'urldelabateriaacustica2',
            'manufacturer' => 'Sonor'
        ]);
        $instrument13->category()->associate($category2);
        $instrument13->save();

        $instrument10 = new Instrument([
            'name' => 'Tama Silverstar Standard - VBG',
            'description' => 'Esta batería, la cual está fabricada en madera de abedul 100% con un tono y resonancia ricos y potentes, está compuesta por un tom de 10" x 07", un tom de 12" x 08", un tom de suelo de 16" x 14", una caja de 14" x 05" y un bombo de 22" x 18". Además, contiene un set de herrajes: soporte para Hi-Hat, soporte para caja, 2 soportes con brazo para platillos y un pedal sencillo para bombo. Disponible en Vintage Burgundy Sparkle.',
            'price' => '1108',
            'stock' => '995',
            'urlPhoto' => 'urldelabateriaacustica3',
            'manufacturer' => 'Tama'
        ]);
        $instrument10->category()->associate($category2);
        $instrument10->save();
    }
}
