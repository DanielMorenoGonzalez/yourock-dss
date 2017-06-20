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
            'description' => 'Esta batería acústica, la cual está fabricada en madera de arce 100% con 7 capas en toms/bombo y 10 capas en la caja, está compuesta por un tom de 10" x 08", un tom de 12" x 09", un tom de suelo de 16" x 14", una caja de 14" x 5,5" y un bombo de 22" x 18". Además, contiene un set de herrajes de la serie Concept: 1 soporte para Hi-Hat, 1 soporte para caja, 1 pedal individual para bombo, 1 soporte recto para platillo y 1 soporte jirafa para platillo. No incluye juego de platillos. Disponible en color Red Black Sparkle Fade, con acabado lacado Premium.',
            'price' => '1400',
            'stock' => '29',
            'urlPhoto' => 'urldelabateriaacustica1',
            'manufacturer' => 'DW'
        ]);
        $instrument26->category()->associate($category3);
        $instrument26->save();

        $instrument27 = new Instrument([
            'name' => 'Sonor Essential Force Green Stage 3',
            'description' => 'Esta batería acústica, la cual está fabricada en madera de abedul 100% de 6 capas (7,2mm), está compuesta por un tom de 10" x 08", un tom de 12" x 09", un tom de suelo de 16" x 16", una caja de 14" x 5,5" y un bombo de 22" x 18". Además, contiene un set de herrajes: 1 soporte para Hi-Hat, 1 soporte para caja, 2 soportes jirafa para platillos y 1 pedal individual para bombo. No incluye juego de platillos. Disponible en color Green Fade, con terminación Stage 3.',
            'price' => '1108',
            'stock' => '17',
            'urlPhoto' => 'urldelabateriaacustica2',
            'manufacturer' => 'Sonor'
        ]);
        $instrument27->category()->associate($category3);
        $instrument27->save();

        $instrument28 = new Instrument([
            'name' => 'Tama Silverstar Standard - VBG',
            'description' => 'Esta batería acústica, la cual está fabricada en madera de abedul 100% con un tono y resonancia ricos y potentes, está compuesta por un tom de 10" x 07", un tom de 12" x 08", un tom de suelo de 16" x 14", una caja de 14" x 05" y un bombo de 22" x 18". Además, contiene un set de herrajes: 1 soporte para Hi-Hat, 1 soporte para caja, 2 soportes con brazo para platillos y 1 pedal sencillo para bombo. No incluye juego de platillos. Disponible en color Vintage Burgundy Sparkle.',
            'price' => '1108',
            'stock' => '87',
            'urlPhoto' => 'urldelabateriaacustica3',
            'manufacturer' => 'Tama'
        ]);
        $instrument28->category()->associate($category3);
        $instrument28->save();

        $instrument29 = new Instrument([
            'name' => 'Mapex Storm Studio Set Wood Grain',
            'description' => 'Esta batería acústica, la cual está fabricada en madera de álamo, está compuesta por un tom de 10" x 07", un tom de 12" x 08", un tom de suelo de 14" x 12", una caja de 14" x 05" y un bombo de 20" x 16". Además, contiene un pack de herrajes: 1 soporte para Hi-Hat, 1 soporte para caja, 1 soporte jirafa para platillo, 1 soporte recto para platillo y 1 pedal individual para bombo. No incluye juego de platillos. Disponible en color Camphor Wood Grain (Veta de madera de alcanfor).',
            'price' => '687',
            'stock' => '0',
            'urlPhoto' => 'urldelabateriaacustica4',
            'manufacturer' => 'Mapex'
        ]);
        $instrument29->category()->associate($category3);
        $instrument29->save();

        $instrument30 = new Instrument([
            'name' => 'Millenium MX222BX Standard Set BK',
            'description' => 'Esta batería acústica, la cual está fabricada en madera de álamo, está compuesta por un tom de 12" x 09", un tom de 13" x 10", un tom de suelo de 16" x 14", una caja de 14" x 5,5" y un bombo de 22" x 16". Además, contiene un pack de herrajes: 1 soporte para Hi-Hat, 1 soporte para caja, 1 soporte recto para platillo y 1 pedal individual para bombo. Por último, también incluye un juego de platos de latón: 1 Charles de 14" y 1 Crash/Ride de 16". Disponible en color Black (Negro) brillante.',
            'price' => '235',
            'stock' => '120',
            'urlPhoto' => 'urldelabateriaacustica5',
            'manufacturer' => 'Millenium'
        ]);
        $instrument30->category()->associate($category3);
        $instrument30->save();

        $instrument31 = new Instrument([
            'name' => 'Yamaha Rydeen Standard Fine Blue',
            'description' => 'Esta batería acústica, la cual está fabricada en madera de álamo, está compuesta por un tom de 10" x 07", un tom de 12" x 08", un tom de suelo de 16" x 15", una caja de 14" x 5,5" y un bombo de 22" x 16" (perforado). Además, contiene un kit de herrajes: 1 soporte para Hi-Hat, 1 soporte para caja, 2 soportes con brazo para platillos y 1 pedal individual para bombo. Por último, también incluye un set de platos Paiste 101: 1 Hi-Hat de 14", 1 Crash de 16" y 1 Ride de 20". Disponible en color Fine Blue (Azul).',
            'price' => '706',
            'stock' => '76',
            'urlPhoto' => 'urldelabateriaacustica6',
            'manufacturer' => 'Yamaha'
        ]);
        $instrument31->category()->associate($category3);
        $instrument31->save();

        $instrument32 = new Instrument([
            'name' => 'DW Design Series - Tobacco Bundle',
            'description' => 'Esta batería acústica, la cual está fabricada en madera de arce norteamericano 100%, está compuesta por un tom de 10" x 08", un tom de 12" x 09", un tom de suelo de 16" x 14", una caja de 14" x 5,5" y un bombo de 22" x 18" (sin roseta). Además, contiene un juego de herrajes Millenium: 1 soporte para Hi-Hat, 1 soporte para caja, 1 soporte recto para platillo, 1 soporte jirafa para platillo y 1 pedal para bombo. Por último, también incluye un set de platos Zultan Rock Beat: 1 Hi-Hat de 14", 1 Crash de 16" y 1 Ride de 20". Disponible en color Tobacco Burst (Tabaco).',
            'price' => '2350',
            'stock' => '10',
            'urlPhoto' => 'urldelabateriaacustica7',
            'manufacturer' => 'DW'
        ]);
        $instrument32->category()->associate($category3);
        $instrument32->save();

        $instrument33 = new Instrument([
            'name' => 'Pearl Decade Maple Studio BK Burst',
            'description' => 'Esta batería acústica, la cual está fabricada en madera de arce 100%, está compuesta por un tom de 10" x 07", un tom de 12" x 08", un tom de suelo de 14" x 14", una caja de 14" x 5,5" y un bombo de 20" x 16". Además, contiene un set de herrajes: 1 soporte para Hi-Hat, 1 soporte para caja, 1 soporte de platillo con brazo, 1 soporte de platillo recto y 1 pedal individual para bombo. No incluye juego de platillos. Disponible en color Satin Black Burst (Sunburst Negro Satinado).',
            'price' => '954',
            'stock' => '24',
            'urlPhoto' => 'urldelabateriaacustica8',
            'manufacturer' => 'Pearl'
        ]);
        $instrument33->category()->associate($category3);
        $instrument33->save();

        $instrument34 = new Instrument([
            'name' => 'Tama VI62RZ-CI Silverstar Mirage',
            'description' => 'Esta batería acústica, la cual está fabricada en acrílico, está compuesta por un tom de 10" x 07", un tom de 12" x 08", un tom de suelo de 14" x 12", un tom de suelo de 16" x 14", una caja de 14" x 06" y un bombo de 22" x 16" (sin roseta). Además, contiene un set de herrajes Tama: 1 soporte para Hi-Hat, 1 soporte para caja, 2 soportes jirafa para platillos y 1 pedal individual para bombo. No incluye juego de platillos. Disponible en color White (Blanco).',
            'price' => '1500',
            'stock' => '9',
            'urlPhoto' => 'urldelabateriaacustica9',
            'manufacturer' => 'Tama'
        ]);
        $instrument34->category()->associate($category3);
        $instrument34->save();

        $instrument35 = new Instrument([
            'name' => 'Sonor Select Maple Stage S',
            'description' => 'Esta batería acústica, la cual está fabricada en madera de arce 100% con sonidos ricos y cálidos, está compuesta por un tom de 10" x 6,5", un tom de 12" x 07", un tom de suelo de 14" x 12", un tom de suelo de 16" x 14", una caja de 14" x 6,5" y un bombo de 22" x 20". Además, contiene un set de herrajes Millenium: 1 soporte para Hi-Hat, 1 soporte para caja, 2 soportes jirafa para platillos y 1 pedal sencillo para bombo. No incluye juego de platillos. Disponible en color Maple (Arce).',
            'price' => '1850',
            'stock' => '5',
            'urlPhoto' => 'urldelabateriaacustica10',
            'manufacturer' => 'Sonor'
        ]);
        $instrument35->category()->associate($category3);
        $instrument35->save();

        $instrument36 = new Instrument([
            'name' => 'Tama Silverstar Jazz Light Blue',
            'description' => 'Esta batería acústica, la cual está fabricada en madera de abedul 100% con un tono y resonancia ricos y potentes, está compuesta por un tom de 12" x 08", un tom de suelo de 14" x 14", una caja de 14" x 05" y un bombo de 18" x 14". Además, contiene un set de herrajes Tama: 1 soporte para Hi-Hat, 1 soporte para caja, 2 soportes con brazo para platillos y 1 pedal simple para bombo. No incluye set de platillos. Disponible en color Light Blue (Azul Claro).',
            'price' => '995',
            'stock' => '19',
            'urlPhoto' => 'urldelabateriaacustica11',
            'manufacturer' => 'Tama'
        ]);
        $instrument36->category()->associate($category3);
        $instrument36->save();

        $instrument37 = new Instrument([
            'name' => 'Gretsch Energy Studio Black',
            'description' => 'Esta batería acústica, la cual está fabricada en madera de álamo, está compuesta por un tom de 10" x 07", un tom de 12" x 08", un tom de suelo de 14" x 14", una caja de 14" x 5,5" y un bombo de 20" x 16". Además, contiene un pack de herrajes Tama: 1 soporte para Hi-Hat, 1 soporte para caja, 1 soporte con brazo jirafa para platillo, 1 soporte recto para platillo y 1 pedal simple para bombo. Por último, incluye juego de platillos Paiste 101: 1 Hi-Hat de 13", 1 Crash de 16" y 1 Ride de 20". Disponible en color Black (Negro).',
            'price' => '659',
            'stock' => '89',
            'urlPhoto' => 'urldelabateriaacustica12',
            'manufacturer' => 'Gretsch'
        ]);
        $instrument37->category()->associate($category3);
        $instrument37->save();

        $instrument38 = new Instrument([
            'name' => 'Pearl EXX725BR/C Export Arctic Spar.',
            'description' => 'Esta batería acústica, la cual está fabricada en madera de caoba asiática y chopo para sonido profundo y voluminoso, está compuesta por un tom de 12" x 08", un tom de 13" x 09", un tom de suelo de 16" x 16", una caja de 14" x 5,5" y un bombo de 22" x 18". Además, contiene un pack de herrajes Pearl: 1 soporte para Hi-Hat, 1 soporte para caja, 1 soporte de plato jirafa, 1 soporte de plato recto y 1 pedal simple para bombo. Por último, incluye juego de platillos Sabian SBR de latón: 1 Hi-Hat de 14", 1 Crash de 16" y 1 Ride de 20". Disponible en color Artic Sparkle (Ártico Brillante).',
            'price' => '745',
            'stock' => '60',
            'urlPhoto' => 'urldelabateriaacustica13',
            'manufacturer' => 'Pearl'
        ]);
        $instrument38->category()->associate($category3);
        $instrument38->save();

        $instrument39 = new Instrument([
            'name' => 'Mapex Storm Fusion Set Deep Black',
            'description' => 'Esta batería acústica, la cual está fabricada en madera de álamo, está compuesta por un tom de 10" x 07", un tom de 12" x 08", un tom de suelo de 14" x 12", una caja de 14" x 05" y un bombo de 22" x 18". Además, contiene un set de herrajes Mapex: 1 soporte para Hi-Hat, 1 soporte para caja, 1 soporte jirafa para platillo, 1 soporte recto para platillo y 1 pedal individual para bombo. No incluye ni sillín ni juego de platillos. Disponible en color Deep Black (Negro Profundo).',
            'price' => '649',
            'stock' => '58',
            'urlPhoto' => 'urldelabateriaacustica14',
            'manufacturer' => 'Mapex'
        ]);
        $instrument39->category()->associate($category3);
        $instrument39->save();


        //Recuperamos la categoría de las baterías electrónicas
        $category4 = Category::find(4);

        //Creamos y guardamos distintos objetos relacionados con las baterías electrónicas
        $instrument40 = new Instrument([
            'name' => 'Millenium MPS-750 E-Drum Mesh Set',
            'description' => 'Esta batería electrónica cuenta con un módulo MPS-750 con 456 sonidos, 20 sets y 20 sets de usuario, 40 canciones demo integradas, ecualizador de 4 bandas, fader para control de volumen de los Pads, los efectos o el ecualizador, puerto USB y dos entradas Trigger adicionales. Además, dispone de la siguiente configuración: 1 pad de 10" para caja, 3 pads para tom de 10", 1 pad de 08" para bombo, 1 pad de 08" para Hi-Hat, 2 pads de 12" para Crash con función de atenuación, 1 pad de 14" para Ride con función de atenuación, 1 pie simple para bombo y 1 pie para Hi-Hat.',
            'price' => '477',
            'stock' => '100',
            'urlPhoto' => 'urldelabateriaelectronica1',
            'manufacturer' => 'Millenium'
        ]);
        $instrument40->category()->associate($category4);
        $instrument40->save();

        $instrument41 = new Instrument([
            'name' => 'Roland TD-1KV V-Drum Set',
            'description' => 'Esta batería electrónica cuenta con 1 módulo de batería TD-1 con 15 kits de batería y 15 canciones, 10 funciones de entrenamiento, metrónomo, USB, entrada de auriculares (minijack estéreo) y 1 entrada trigger. Además, dispone de la siguiente configuración: 1 pad de malla para caja, 3 pads para tom, 1 pad para Hi-Hat, 2 pads para Crash, 1 pad para Ride, 1 pie simple para bombo y 1 pie para Hi-Hat.',
            'price' => '488',
            'stock' => '93',
            'urlPhoto' => 'urldelabateriaelectronica2',
            'manufacturer' => 'Roland'
        ]);
        $instrument41->category()->associate($category4);
        $instrument41->save();

        $instrument42 = new Instrument([
            'name' => 'Alesis DM Lite Kit',
            'description' => 'Esta batería electrónica cuenta con 1 módulo Drum DM Lite con 200 sonidos, 10 Drum-kits y 30 canciones, función coach con ejercicios de acompañamiento, USB para conexiones MIDI, pads de batería y platos con iluminación LED como respuesta óptica para el modo de aprendizaje y 1 salida de auriculares minijack estéreo de 3,5mm. Además, dispone de la siguiente configuración: 4 pads de 7,5" para caja y tom, 1 pad para Hi-Hat, 1 pad para Crash, 1 pad para Ride, 1 pie simple para bombo y 1 pie para Hi-Hat.',
            'price' => '275',
            'stock' => '54',
            'urlPhoto' => 'urldelabateriaelectronica3',
            'manufacturer' => 'Alesis'
        ]);
        $instrument42->category()->associate($category4);
        $instrument42->save();

        $instrument43 = new Instrument([
            'name' => 'Yamaha DTX450K Compact E-Drum Set',
            'description' => 'Esta batería electrónica cuenta con 1 módulo DTX400 Drum Trigger Module con 169 sonidos de alta calidad, USB, salida de auriculares, diez Kits de Batería y diez funciones de ejercicios. Además, dispone de la siguiente configuración: 1 pad de 7,5" para caja, 3 pads de 7,5" para tom, 1 pad para bombo, 1 pad de 10" para Hi-Hat, 1 pad de 10" para Crash, 1 pad de 10" para Ride, 1 pie simple para bombo y 1 pie para Hi-Hat.',
            'price' => '529',
            'stock' => '0',
            'urlPhoto' => 'urldelabateriaelectronica4',
            'manufacturer' => 'Yamaha'
        ]);
        $instrument43->category()->associate($category4);
        $instrument43->save();

        $instrument44 = new Instrument([
            'name' => 'Alesis Crimson Mesh Kit',
            'description' => 'Esta batería electrónica cuenta con 1 módulo Alesis Advanced Drum con 600 sonidos, 50 kits preestablecidos y 20 kits de usuario, 60 canciones, grabación a tiempo real, entrada y salida MIDI, salida de auriculares jack estéreo de 1/8" e interfaz USB MIDI para conectar a un Mac o PC y cargar nuevas canciones desde una llave USB. Además, dispone de la siguiente configuración: 1 pad de malla de 12" para caja, 2 pads de malla de 8" para tom, 1 pad de malla de 10" para tom, 1 pad de malla de 8" para bombo, 1 pad de 12" para Hi-Hat, 1 pad de 12" para Crash, 1 pad de 14" para Ride y 1 pie para Hi-Hat. No incluye pie para bombo.',
            'price' => '989',
            'stock' => '30',
            'urlPhoto' => 'urldelabateriaelectronica5',
            'manufacturer' => 'Alesis'
        ]);
        $instrument44->category()->associate($category4);
        $instrument44->save();


        //Recuperamos la categoría de los pianos de cola
        $category5 = Category::find(5);

        //Creamos y guardamos distintos objetos relacionados con los pianos de cola
        $instrument40 = new Instrument([
            'name' => 'Yamaha C3X PE Grand Piano',
            'description' => 'Este piano de cola, el cual está diseñado para poder resonar con el pianista, dispone de 88 teclas y 3 pedales (central: sostenuto). Además, tiene unas dimensiones de 186 x 149 x 101cm, y un peso de 320kg. Disponible en color Negro con alto brillo.',
            'price' => '27950',
            'stock' => '10',
            'urlPhoto' => 'urldelpianodecola1',
            'manufacturer' => 'Yamaha'
        ]);
        $instrument40->category()->associate($category5);
        $instrument40->save();

        $instrument41 = new Instrument([
            'name' => 'Kawai GL 10 E/P Grand Piano',
            'description' => 'Este piano de cola cuenta con una mécanica ultrasensible, martillos con fieltro en parte inferior y tapa del teclado de cierre suave. Además, tiene una longitud de 153cm y un peso de 282kg. Disponible en color Negro pulido.',
            'price' => '9600',
            'stock' => '6',
            'urlPhoto' => 'urldelpianodecola2',
            'manufacturer' => 'Kawai'
        ]);
        $instrument41->category()->associate($category5);
        $instrument41->save();

        $instrument42 = new Instrument([
            'name' => 'Steinway & Sons B-211',
            'description' => 'Este piano de cola, el cual está fabricado en 1982 y reconstruído por los especialistas de Steinway, cuenta con una rica escala e impresionante sonido y 1 banco Andexinger de alta calidad. Además, tiene una longitud de 211cm, una anchura de 148cm y un peso de 345kg. Disponible en color Negro.',
            'price' => '54699',
            'stock' => '20',
            'urlPhoto' => 'urldelpianodecola3',
            'manufacturer' => 'Steinway & Sons'
        ]);
        $instrument42->category()->associate($category5);
        $instrument42->save();

        $instrument43 = new Instrument([
            'name' => 'Yamaha GB1 K PWH',
            'description' => 'Este piano de cola, el cual cuenta toda la potencia, tonalidad y la gama expresiva de un piano de cola Yamaha clásico, dispone de 88 teclas y 3 pedales. Además, tiene unas dimensiones de 151 x 146 x 99cm, y un peso de 249kg. Disponible en color Blanco pulido.',
            'price' => '12489',
            'stock' => '18',
            'urlPhoto' => 'urldelpianodecola4',
            'manufacturer' => 'Yamaha'
        ]);
        $instrument43->category()->associate($category5);
        $instrument43->save();

        $instrument44 = new Instrument([
            'name' => 'Steinway & Sons A-188 Makassar',
            'description' => 'Este piano de cola incluye 1 banco de alta calidad con aspecto de coromandel y está reconstruído por los especialistas de Steinway. Además, tiene una longitud de 188cm, una anchura de 147cm y un peso de 315kg. Disponible en color Madera de coromandel pulida.',
            'price' => '41539',
            'stock' => '0',
            'urlPhoto' => 'urldelpianodecola5',
            'manufacturer' => 'Steinway & Sons'
        ]);
        $instrument44->category()->associate($category5);
        $instrument44->save();

        $instrument45 = new Instrument([
            'name' => 'Kawai GL 30 E/P Grand Piano',
            'description' => 'Este piano de cola cuenta con una mecánica ultrasensible, martillos con fieltro en parte inferior, escala dúplex y tapa del teclado de cierre suave. Además, tiene una longitud de 166cm y un peso de 312kg. Disponible en color Negro pulido.',
            'price' => '14459',
            'stock' => '23',
            'urlPhoto' => 'urldelpianodecola6',
            'manufacturer' => 'Kawai'
        ]);
        $instrument45->category()->associate($category5);
        $instrument45->save();

        $instrument46 = new Instrument([
            'name' => 'Yamaha C3X SH PE Silent Grand Piano',
            'description' => 'Este piano de cola cuenta con 88 teclas, 3 pedales, 19 sonidos diferentes, un sistema SH-Silent y función de grabación con puerto USB para almacenamiento de datos de canciones. Además, tiene unas dimensiones de 186 x 149 x 101cm, y un peso de 320kg. Disponible en color Negro pulido.',
            'price' => '32500',
            'stock' => '34',
            'urlPhoto' => 'urldelpianodecola7',
            'manufacturer' => 'Yamaha'
        ]);
        $instrument46->category()->associate($category5);
        $instrument46->save();


        //Recuperamos la categoría de los teclados
        $category6 = Category::find(6);

        //Creamos y guardamos distintos objetos relacionados con los teclados
        $instrument47 = new Instrument([
            'name' => 'Yamaha PSR-E353',
            'description' => 'Este teclado cuenta con 61 teclas sensibles al tacto, 535 sonidos + 18 kits de batería/SFX + 20 arpegios (incluye voces XGlite), 158 estilos, 154 canciones internas, 32 notas de polifonía, secuenciador de 2 pistas / 5 canciones de usuario, 1 ajuste de 1 toque, efectos Reverb y Chorus, memoria de registro, metrónomo, entrada auxiliar (mini estéreo), USB a Host, auriculares, pedal de sustain y sistema de altavoces (2x 2,5W). Además, tiene unas dimensiones de 945 x 369 x 122mm (ancho x profundo x alto) y un peso de 4,4kg. Disponible en color Acero.',
            'price' => '150',
            'stock' => '78',
            'urlPhoto' => 'urldelteclado1',
            'manufacturer' => 'Yamaha'
        ]);
        $instrument47->category()->associate($category6);
        $instrument47->save();

        $instrument48 = new Instrument([
            'name' => 'Thomann SP-5600',
            'description' => 'Este teclado cuenta con 88 teclas de acción martillo, 600 sonidos, 230 estilos (10 estilos de usuario), 120 canciones, 128 notas de polifonía, control de acompañamiento (Start/Stop, Sync Start, Intro/Ending, Fill A y Fill B), efectos Reverb y Chorus, secuenciador, metrónomo, ecualizador master, 2 altavoces de 10W, entrada y salida MIDI por USB, funciones (Duo, Split, Layer y Sustain) e incluye pedal de sustain, atril y fuente de alimentación. Además, tiene unas dimensiones de 1365 x 366 x 137mm (ancho x profundo x alto) y un peso de 13,8kg. Disponible en color Negro matizado.',
            'price' => '389',
            'stock' => '0',
            'urlPhoto' => 'urldelteclado2',
            'manufacturer' => 'Thomann'
        ]);
        $instrument48->category()->associate($category6);
        $instrument48->save();

        $instrument49 = new Instrument([
            'name' => 'Casio CTK-2400',
            'description' => 'Este teclado cuenta con 61 teclas, polifonía de 48 voces, 400 sonidos, 150 estilos, 110 piezas de práctica, sistema de aprendizaje de 4 niveles, 5 Voicepads con función Sampling, transposición, entrada de audio estéreo minijack, USB to Host, conexión de pedal Sustain, sistema de altavoces 2x2 W y sistema de autodesconexión (ahorro energético). Además, dispone de unas dimensiones de 946 x 307 x 92mm (ancho x profundo x alto) y un peso de 3,4kg. Disponible en color Negro matizado.',
            'price' => '108',
            'stock' => '67',
            'urlPhoto' => 'urldelteclado3',
            'manufacturer' => 'Casio'
        ]);
        $instrument49->category()->associate($category6);
        $instrument49->save();

        $instrument50 = new Instrument([
            'name' => 'Startone MK-200',
            'description' => 'Este teclado cuenta con 61 teclas con respuesta al tacto, 32 voces de polifonía, 320 voces, 110 estilos, 100 canciones, 100 canciones de demostración, funciones (Dual, Sustain, Lower), memoria con 4 registros, metrónomo, reproducción y grabación, conexiones (auriculares, sustain y USB a Host) y sistema de altavoces (2 x 3W). Además, dispone de unas dimensiones de 940 x 360 x 136mm (ancho x profundo x alto) y un peso de 4,5kg. Disponible en color Negro.',
            'price' => '79',
            'stock' => '120',
            'urlPhoto' => 'urldelteclado4',
            'manufacturer' => 'Startone'
        ]);
        $instrument50->category()->associate($category6);
        $instrument50->save();

        $instrument51 = new Instrument([
            'name' => 'Casio LK-280',
            'description' => 'Este teclado cuenta con 61 teclas iluminadas sensibles al tacto, 48 notas de polifonía, 600 sonidos, 180 estilos, 110 canciones internas, sistema de aprendizaje de 3 niveles, función de transposición, metrónomo, sampler interno con grabación de hasta 10 segundos, conexión USB (MIDI), grabador de 6 pistas interno, reproductor SMF, entrada para pedal de sustain y 2 altavoces de 2,5W. Además, dispone de unas dimensiones de 948 x 350 x 103mm (ancho x profundo x alto) y un peso de 4,5kg. Disponible en color Acero.',
            'price' => '210',
            'stock' => '54',
            'urlPhoto' => 'urldelteclado5',
            'manufacturer' => 'Casio'
        ]);
        $instrument51->category()->associate($category6);
        $instrument51->save();

        $instrument52 = new Instrument([
            'name' => 'Casio MZ-X500',
            'description' => 'Este teclado cuenta con 61 teclas sensibles al tacto, 128 notas de polifonía, 1100 sonidos, 16 pads para muestras y frases, transposición, efectos (Reverb, Chorus, Delay y DSP), metrónomo, 6 canciones de demostración, grabador de audio y MIDI, conexión USB a Host y USB a dispositivo, entradas para Pedal1/Pedal2 y sistema de altavoces (2 x 20W). Además, dispone de unas dimensiones de 950 x 400 x 151mm (ancho x profundo x alto) y un peso de 7,6kg. Disponible en color Azul metalizado.',
            'price' => '800',
            'stock' => '44',
            'urlPhoto' => 'urldelteclado6',
            'manufacturer' => 'Casio'
        ]);
        $instrument52->category()->associate($category6);
        $instrument52->save();

        $instrument53 = new Instrument([
            'name' => 'Korg Havian 30',
            'description' => 'Este teclado cuenta con 88 teclas de acción martillo contrapesadas, más de 950 sonidos, 256 sonidos de usuario, 420 estilos precargados, 128 kits de batería, 128 notas de polifonía, 4 bloques de efectos master estéreo, 125 tipos de efectos, ecualizador de 3 bandas para cada pista, secuenciador, metrónomo, conexiones (USB-MIDI, USB a dispositivo, salida de auriculares/audio y pedal de sustain), atril, fuente de alimentación, DVD accesorio, pedal Damper DS-2H y sistema de altavoces (2 x 25W). Además, dispone de unas dimensiones de 1312 × 389 × 146mm (ancho x profundo x alto) y un peso de 15,1kg. Disponible en color Negro con matices rojos.',
            'price' => '1489',
            'stock' => '20',
            'urlPhoto' => 'urldelteclado7',
            'manufacturer' => 'Korg'
        ]);
        $instrument53->category()->associate($category6);
        $instrument53->save();

        $instrument54 = new Instrument([
            'name' => 'Casio SA 78',
            'description' => 'Este teclado cuenta con 44 teclas mini, 8 notas de polifonía, 100 sonidos, 50 estilos, 5 pads de batería, salida de auriculares y sistema de 2 altavoces de 0,8W. Además, dispone de unas dimensiones de 604 x 211 x 57mm (ancho x profundo x alto) y un peso de 1,4kg. Disponible en color Negro/Rosa.',
            'price' => '60',
            'stock' => '79',
            'urlPhoto' => 'urldelteclado8',
            'manufacturer' => 'Casio'
        ]);
        $instrument54->category()->associate($category6);
        $instrument54->save();

        $instrument55 = new Instrument([
            'name' => 'Yamaha DGX-660 WH',
            'description' => 'Este teclado cuenta con 88 teclas con teclado GHS, motor de sonido Pure CF Sound Engine, control acústico inteligente (IAC), 192 notas de polifonía, 554 sonidos, 205 estilos, 41 tipos de reverberación, 44 tipos de chorus, 237 tipos de DSP, ecualizador master por presets (5 tipos), 100 canciones preset, grabador de audio (grabación y reproducción WAV), métronomo, transposición, conexiones (USB a Host, USB a dispositivo, salida de auriculares, entrada auxiliar, micrófono y pedal sustain), soporte de teclado y sistema de altavoces (2 x 6W). Además, dispone de unas dimensiones de 1399 x 445 x 761mm (ancho x profundo x alto) y un peso de 28kg. Disponible en color Blanco.',
            'price' => '705',
            'stock' => '31',
            'urlPhoto' => 'urldelteclado9',
            'manufacturer' => 'Yamaha'
        ]);
        $instrument55->category()->associate($category6);
        $instrument55->save();

        $instrument56 = new Instrument([
            'name' => 'Korg PA-600',
            'description' => 'Este teclado cuenta con 61 teclas con dinámica sensible, polifonía de 128 voces, ecualizador de 3 bandas para cada pista, 950 sonidos, 360 estilos, 600 espacios de memoria de estilos de usuario, soporta MP3 y MP3+G, 2 modos de guitarra, secuenciador de 16 pistas, USB to Host, conexión de pedal sordina, conexión de pedal asignable, manual, soporte de partituras, DVD, alimentador y altavoces 2 x 15 W. Además, dispone de unas dimensiones de 1030 x 378 x 127 mm (ancho x profundo x alto) y un peso de 11kg. Disponible en color Acero.',
            'price' => '938',
            'stock' => '47',
            'urlPhoto' => 'urldelteclado10',
            'manufacturer' => 'Korg'
        ]);
        $instrument56->category()->associate($category6);
        $instrument56->save();

        $instrument57 = new Instrument([
            'name' => 'Casio SA 47',
            'description' => 'Este teclado cuenta con 32 teclas mini, polifonía de 8 voces, 100 sonidos, 50 estilos, 10 temas para practicar, 5 pads de batería, salida de auriculares y sistema de altavoces (2 x 0,5 W). Además, dispone de unas dimensiones de 448 x 208 x 51mm (ancho x profundo x alto) y un peso de 1kg. Disponible en color Negro/Gris.',
            'price' => '45',
            'stock' => '145',
            'urlPhoto' => 'urldelteclado11',
            'manufacturer' => 'Casio'
        ]);
        $instrument57->category()->associate($category6);
        $instrument57->save();

        $instrument58 = new Instrument([
            'name' => 'Yamaha YPT-340',
            'description' => 'Este teclado cuenta con 61 teclas sensibles al tacto, 550 sonidos, 136 estilos, 102 canciones internas, polifonía de 32 notas, Secuenciador de 2 pistas / 5 canciones de usuario, ajuste de 1 toque, efectos (Reverb, Chorus, Ecualizador Master y Armonía), metrónomo, memoria de registro, transposición, conexiones (Entrada auxiliar, USB a Host, Auriculares y Pedal de sustain), fuente de alimentación, atril y sistema de 2 altavoces de 2,5W. Además, dispone de unas dimensiones de 945 x 368 x 121mm (ancho x profundo x alto) y un peso de 4,4kg. Disponible en color Plateado.',
            'price' => '138',
            'stock' => '0',
            'urlPhoto' => 'urldelteclado12',
            'manufacturer' => 'Yamaha'
        ]);
        $instrument58->category()->associate($category6);
        $instrument58->save();

        $instrument59 = new Instrument([
            'name' => 'Casio LK-247',
            'description' => 'Este teclado cuenta con 61 teclas luminosas tipo piano y con sensibilidad, polifonía de 48 voces, 400 sonidos, 150 estilos, 110 canciones, función de aprendizaje para ambas manos, función Sampling con 5 Voice-Pads, toma de auriculares estéreo minijack, transposición, entrada de audio estéreo minijack, micrófono, conexión de pedal, USB (MIDI) y sistema de altavoces de 2x2 W. Además, dispone de unas dimensiones de 946 x 307 x 92mm (ancho x profundo x alto) y un peso de 3,6kg. Disponible en color Plateado.',
            'price' => '207',
            'stock' => '39',
            'urlPhoto' => 'urldelteclado13',
            'manufacturer' => 'Casio'
        ]);
        $instrument59->category()->associate($category6);
        $instrument59->save();

        $instrument60 = new Instrument([
            'name' => 'Roland BK-5',
            'description' => 'Este teclado cuenta con 61 teclas sensibles, 1.172 sonidos, 60 patrones de batería, polifonía de 128 voces, 305 estilos, transposición, 954 asistencias musicales (interno), grabador performance con max. 999 entradas por lista, grabador USB (para datos Wave, Video, Real-Time-Player SMF en formato 0/1, KAR, MP3 y WAV), conexión de auriculares, USB Host (almacenamiento de datos) y sistema de altavoces (2 x 12 W). Además, dispone de unas dimensiones de 1044 x 317 x 129mm (ancho x profundo x alto) y un peso de 7,5kg. Disponible en color Negro.',
            'price' => '718',
            'stock' => '21',
            'urlPhoto' => 'urldelteclado14',
            'manufacturer' => 'Roland BK-5'
        ]);
        $instrument60->category()->associate($category6);
        $instrument60->save();

        
    }
}
