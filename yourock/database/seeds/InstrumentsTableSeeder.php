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
            'description' => 'Esta guitarra eléctrica, con cuerpo de caoba y fabricada en Estados Unidos, dispone de un mástil de caoba cónico delgado y un diapasón de palisandro. Además, cuenta con 22 trastes, incluye 2 controles de volumen (push-pull), 2 controles de tono (push-pull) con knobs de cromo, 1 interruptor de palanca de 3 posiciones, herrajes de cromo y clavijas de afinación G-Force. Diponible en color Green Ocean Burst (Sunburst Océano Verde).',
            'price' => '1985',
            'stock' => '6',
            'urlPhoto' => 'urldelaguitarraelectrica11',
            'manufacturer' => 'Gibson'
        ]);
        $instrument11->category()->associate($category1);
        $instrument11->save();

        $instrument12 = new Instrument([
            'name' => 'Schecter Loomis Cygnus JLX-1 FR STC',
            'description' => 'Esta guitarra eléctrica, con cuerpo de fresno de pantano e inspirada en Jeff Loomis, dispone de un mástil de arce con forma ultradelgada en C y un diapasón de arce. Además, cuenta con 24 trastes, incluye 1 control de volumen, 1 interruptor de palanca de 3 posiciones, 2 pastillas humbucker activas Seymour Duncan Jeff Loomis Signature, herrajes negros, clavijas de afinación Grover y 1 trémolo Floyd Rose 1500 Series. Diponible en color See-Thru Cherry (Cerezo).',
            'price' => '1157',
            'stock' => '1',
            'urlPhoto' => 'urldelaguitarraelectrica12',
            'manufacturer' => 'Schecter'
        ]);
        $instrument12->category()->associate($category1);
        $instrument12->save();

        $instrument13 = new Instrument([
            'name' => 'Charvel Pro Mod So Cal Style1 2H FR SW',
            'description' => 'Esta guitarra eléctrica, con cuerpo de aliso, dispone de un mástil de 2 piezas de arce Speed con refuerzo de grafito y un diapasón de arce. Además, cuenta con 22 trastes, incluye 1 control de volumen con división de bobina push/pull, 1 control de tono sin carga, 1 trémolo Floyd Rose con doble bloqueo y cuerdas originales Fender. Diponible en color Snow White (Blanco Nieve).',
            'price' => '720',
            'stock' => '29',
            'urlPhoto' => 'urldelaguitarraelectrica13',
            'manufacturer' => 'Charvel'
        ]);
        $instrument13->category()->associate($category1);
        $instrument13->save();


        //Recuperamos la categoría de los bajos eléctricos
        $category2 = Category::find(2);

        //Creamos y guardamos distintos objetos relacionados con los bajos eléctricos
        $instrument14 = new Instrument([
            'name' => 'Marcus Miller V7 Alder-4 AWH',
            'description' => 'Este bajo eléctrico de 4 cuerdas, con cuerpo de aliso y fabricado por Sire, dispone de un mástil de arce de 1 pieza con perfil en C y un diapasón de arce. Además, cuenta con 20 trastes, incluye control de volumen/tono (potenciómetro dual), control de mezcla de pastilla, control de agudos, control de medios/frecuencia media (potenciómetro dual), cejilla de hueso, 2 pastillas Marcus Super Jazz y herrajes de cromo. Disponible en color Antique White (Blanco Antigüo).',
            'price' => '413',
            'stock' => '52',
            'urlPhoto' => 'urldelbajoelectrico1',
            'manufacturer' => 'Marcus Miller'
        ]);
        $instrument14->category()->associate($category2);
        $instrument14->save();

        $instrument15 = new Instrument([
            'name' => 'Fender SQ Vint. Mod. Jazz Bass 77 3TS',
            'description' => 'Este bajo eléctrico de 4 cuerdas, con cuerpo de agathis, dispone de un mástil de arce en forma de C y un diapasón de arce. Además, cuenta con 20 trastes, incluye 2 pastillas de bobina simple diseñadas por Fender y 1 golpeador negro. Disponible en color Sunburst de 3 tonos con acabado Vintage brillante.',
            'price' => '355',
            'stock' => '0',
            'urlPhoto' => 'urldelbajoelectrico2',
            'manufacturer' => 'Fender'
        ]);
        $instrument15->category()->associate($category2);
        $instrument15->save();

        $instrument16 = new Instrument([
            'name' => 'Harley Benton JB-75MN SB Vintage Series',
            'description' => 'Este bajo eléctrico de 4 cuerdas, con cuerpo de fresno americano, dispone de un mástil de arce canadiense atornillado con perfil en C y un diapasón de arce con tira mofeta de roseacer. Además, cuenta con 20 trastes, incluye 2 controles de volumen, 1 control de tono, clavijas de afinación PB-style clásicas, herrajes de cromo deluxe y pastillas de bobina simple Roswell JBA. Disponible en color Sunburst de 3 tonos con alto brillo.',
            'price' => '144',
            'stock' => '21',
            'urlPhoto' => 'urldelbajoelectrico3',
            'manufacturer' => 'Harley Benton'
        ]);
        $instrument16->category()->associate($category2);
        $instrument16->save();

        $instrument17 = new Instrument([
            'name' => 'Sandberg California II TM4 BLB',
            'description' => 'Este bajo eléctrico de 4 cuerdas, con cuerpo de fresno, dispone de un mástil de arce y un diapasón de palisandro con inlays de bloques. Además, cuenta con 20 trastes, incluye 1 pastilla Delano de estilo J, 1 pastilla Powerhumbucker, 1 ecualizador Sandberg de 2 bandas, herrajes de cromo y 1 golpeador negro. Disponible en color Blueburst (Azul) satinado.',
            'price' => '1678',
            'stock' => '2',
            'urlPhoto' => 'urldelbajoelectrico4',
            'manufacturer' => 'Sandberg'
        ]);
        $instrument17->category()->associate($category2);
        $instrument17->save();

        $instrument18 = new Instrument([
            'name' => 'Fender Deluxe Active Jazz Bass OWT',
            'description' => 'Este bajo eléctrico de 4 cuerdas, con cuerpo de aliso, dispone de un mástil de arce con forma en C y un diapasón de palisandro. Además, cuenta con 20 trastes, incluye 1 pastilla cerámica Jazz Bass de doble bobina de bajo ruido (puente), 1 pastilla cerámica Jazz Bass de doble bobina de thomann bajo ruido (intermedia), herrajes de níquel/cromo, control de panorama y volumen master. Disponible en color Olympic White (Blanco Olímpico).',
            'price' => '950',
            'stock' => '10',
            'urlPhoto' => 'urldelbajoelectrico5',
            'manufacturer' => 'Fender'
        ]);
        $instrument18->category()->associate($category2);
        $instrument18->save();

        $instrument19 = new Instrument([
            'name' => 'Marcus Miller V7 Vintage Alder BMR',
            'description' => 'Este bajo eléctrico de 4 cuerdas, con cuerpo de aliso norteamericano y fabricado por Sire, dispone de un mástil de 1 pieza de arce con perfil en C y un diapasón de arce. Además, cuenta con 20 trastes, incluye 2 pastillas Marcus Vintage Jazz, cejilla de hueso, electrónica Marcus Heritage-3 con control de frecuencia, 1 minipalanca para graves (activo/pasivo) y herrajes de cromo. Disponible en color Metallic Red (Rojo metalizado) brillante.',
            'price' => '413',
            'stock' => '57',
            'urlPhoto' => 'urldelbajoelectrico6',
            'manufacturer' => 'Marcus Miller'
        ]);
        $instrument19->category()->associate($category2);
        $instrument19->save();

        $instrument20 = new Instrument([
            'name' => 'Fender Deluxe Active Jazz Bass V SFP',
            'description' => 'Este bajo eléctrico de 5 cuerdas, con cuerpo de aliso, dispone de un mástil de arce con forma en C y un diapasón de palisandro. Además, cuenta con 20 trastes, incluye 2 pastillas Jazz Bass cerámicas de doble bobina de bajo ruido, ecualizador activo de 3 bandas con realce/corte de agudos, realce/corte de graves y realce/corte de medios, herrajes de níquel/cromo, control de panorama y volumen master. Disponible en color Surf Pearl.',
            'price' => '1065',
            'stock' => '5',
            'urlPhoto' => 'urldelbajoelectrico7',
            'manufacturer' => 'Fender'
        ]);
        $instrument20->category()->associate($category2);
        $instrument20->save();

        $instrument21 = new Instrument([
            'name' => 'Sadowsky Metro Vintage MV5 NAT',
            'description' => 'Este bajo eléctrico de 5 cuerdas, con cuerpo de fresno de pantano y fabricado en Japón, dispone de un mástil de arce y un diapasón de palisandro. Además, cuenta con 21 trastes, incluye 2 pastillas Sadowsky con cancelación de hum, 1 preamplificador Sadowsky con VTC2, herrajes cromados y 1 golpeador negro. Disponible en color Natural.',
            'price' => '2680',
            'stock' => '9',
            'urlPhoto' => 'urldelbajoelectrico8',
            'manufacturer' => 'Sadowsky'
        ]);
        $instrument21->category()->associate($category2);
        $instrument21->save();

        $instrument22 = new Instrument([
            'name' => 'Fender Roger Waters Precision Bass BK',
            'description' => 'Este bajo eléctrico de 4 cuerdas, con cuerpo de aliso, dispone de un mástil de arce y un diapasón de arce. Además, cuenta con 20 trastes, incluye 1 pastilla Seymour Duncan Basslines SPB-3, hardware cromado negro, cejuela Machined Brass, 1 golpeador negro de una capa, mecánicas Vintage 70´s Fender y puente Black Standard 4-saddle. Disponible en color Black (Negro).',
            'price' => '840',
            'stock' => '0',
            'urlPhoto' => 'urldelbajoelectrico9',
            'manufacturer' => 'Fender'
        ]);
        $instrument22->category()->associate($category2);
        $instrument22->save();

        $instrument23 = new Instrument([
            'name' => 'Fender Squier Affinity P-Bass PJ Red',
            'description' => 'Este bajo eléctrico de 4 cuerdas, con cuerpo de aliso, dispone de un mástil de arce con forma en C y un diapasón de palisandro. Además, cuenta con 20 trastes, incluye 1 pastilla Jazz, 1 pastilla Standard Split Precision, 2 controles de volumen, 1 control de tono, clavijas de afinación abiertas estándar, 1 golpeador negro de 3 capas y herrajes de cromo. Disponible en color Race Red (Rojo).',
            'price' => '220',
            'stock' => '69',
            'urlPhoto' => 'urldelbajoelectrico10',
            'manufacturer' => 'Fender'
        ]);
        $instrument23->category()->associate($category2);
        $instrument23->save();

        $instrument24 = new Instrument([
            'name' => 'Harley Benton PB-20 BK Standard Series',
            'description' => 'Este bajo eléctrico de 4 cuerdas, con cuerpo de álamo, dispone de un mástil de arce con forma en C y un diapasón de palisandro. Además, cuenta con 20 trastes, incluye 1 pastilla PB-style, 1 regulador de volumen, 1 regulador de tono, mecánicas classic PB-Style y hardware cromado. Disponible en color Black (Negro) brillante.',
            'price' => '90',
            'stock' => '114',
            'urlPhoto' => 'urldelbajoelectrico11',
            'manufacturer' => 'Harley Benton'
        ]);
        $instrument24->category()->associate($category2);
        $instrument24->save();

        $instrument25 = new Instrument([
            'name' => 'ESP LTD AP-204 BGB',
            'description' => 'Este bajo eléctrico de 4 cuerdas, con cuerpo de caoba, dispone de un mástil de caoba y un diapasón de palisandro. Además, cuenta con 21 trastes, incluye pastillas LDP y LDJ diseñadas por ESP, ecualizador de 2 bandas (potenciómetro apilado), volumen, balance, herrajes de cromo y clavijas de afinación LTD1 Disponible en color Burgundy Mist (Borgoña).',
            'price' => '478',
            'stock' => '43',
            'urlPhoto' => 'urldelbajoelectrico12',
            'manufacturer' => 'ESP'
        ]);
        $instrument25->category()->associate($category2);
        $instrument25->save();


        //Recuperamos la categoría de las baterías acústicas
        $category3 = Category::find(3);

        //Creamos y guardamos distintos objetos relacionados con las baterías acústicas
        $instrument26 = new Instrument([
            'name' => 'DW PDP CM5 Standard Red / Black',
            'description' => 'Esta batería, la cual está fabricada en madera de arce 100% con 7 capas en toms/bombo y 10 capas en la caja, está compuesta por un tom de 10" x 08", un tom de 12" x 09", un tom de suelo de 16" x 14", una caja de 14" x 5,5" y un bombo de 22" x 18". Además, contiene un set de herrajes de la serie Concept: soporte para Hi-Hat, soporte para caja, pedal individual para bombo, soporte recto para platillo y soporte jirafa para platillo. Disponible en Red Black Sparkle Fade, con acabado lacado Premium.',
            'price' => '1400',
            'stock' => '29',
            'urlPhoto' => 'urldelabateriaacustica1',
            'manufacturer' => 'DW'
        ]);
        $instrument26->category()->associate($category3);
        $instrument26->save();

        $instrument27 = new Instrument([
            'name' => 'Sonor Essential Force Green Stage 3',
            'description' => 'Esta batería, la cual está fabricada en madera de abedul 100% de 6 capas (7,2mm), está compuesta por un tom de 10" x 08", un tom de 12" x 09", un tom de suelo de 16" x 16", una caja de 14" x 5,5" y un bombo de 22" x 18". Además, contiene un set de herrajes: soporte para Hi-Hat, soporte para caja, 2 soportes jirafa para platillos y un pedal individual para bombo. Disponible en Green Fade, con terminación Stage 3.',
            'price' => '1108',
            'stock' => '17',
            'urlPhoto' => 'urldelabateriaacustica2',
            'manufacturer' => 'Sonor'
        ]);
        $instrument27->category()->associate($category3);
        $instrument27->save();

        $instrument28 = new Instrument([
            'name' => 'Tama Silverstar Standard - VBG',
            'description' => 'Esta batería, la cual está fabricada en madera de abedul 100% con un tono y resonancia ricos y potentes, está compuesta por un tom de 10" x 07", un tom de 12" x 08", un tom de suelo de 16" x 14", una caja de 14" x 05" y un bombo de 22" x 18". Además, contiene un set de herrajes: soporte para Hi-Hat, soporte para caja, 2 soportes con brazo para platillos y un pedal sencillo para bombo. Disponible en Vintage Burgundy Sparkle.',
            'price' => '1108',
            'stock' => '995',
            'urlPhoto' => 'urldelabateriaacustica3',
            'manufacturer' => 'Tama'
        ]);
        $instrument28->category()->associate($category3);
        $instrument28->save();
    }
}
