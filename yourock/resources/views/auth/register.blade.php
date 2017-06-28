@extends('layouts.app')
@section('title', 'YOU ROCK! - Registro')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ action('UsersController@store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nif') ? ' has-error' : '' }}">
                            <label for="nif" class="col-md-4 control-label">NIF:</label>

                            <div class="col-md-6">
                                <input id="nif" type="text" class="form-control" name="nif" value="{{ old('nif') }}">

                                @if ($errors->has('nif'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nif') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <label for="surname" class="col-md-4 control-label">Apellidos:</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}">

                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Dirección:</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}">

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('province') ? ' has-error' : '' }}">
                            <label for="province" class="col-md-4 control-label">Provincia:</label>

                            <div class="col-md-6">
                                <select id="province" class="form-control" name="province" onchange="makeSubmenu(this.value)" required>
                                    <option></option>
                                    <option>Albacete</option>
                                    <option>Alicante</option>
                                    <option>Almería</option>
                                    <option>Álava</option>
                                    <option>Asturias</option>
                                    <option>Ávila</option>
                                    <option>Badajoz</option>
                                    <option>Islas Baleares</option>
                                    <option>Barcelona</option>
                                    <option>Bizkaia</option>
                                    <option>Burgos</option>
                                    <option>Cáceres</option>
                                    <option>Cádiz</option>
                                    <option>Cantabria</option>
                                    <option>Castellón</option>
                                    <option>Ciudad Real</option>
                                    <option>Córdoba</option>
                                    <option>Coruña</option>
                                    <option>Cuenca</option>
                                    <option>Guipuzcoa</option>
                                    <option>Girona</option>
                                    <option>Granada</option>
                                    <option>Guadalajara</option>
                                    <option>Huelva</option>
                                    <option>Jaén</option>
                                    <option>León</option>
                                    <option>Lleida</option>
                                    <option>Lugo</option>
                                    <option>Madrid</option>
                                    <option>Málaga</option>
                                    <option>Murcia</option>
                                    <option>Navarra</option>
                                    <option>Ourense</option>
                                    <option>Palencia</option>
                                    <option>Las Palmas</option>
                                    <option>Pontevedra</option>
                                    <option>Las Rioja</option>
                                    <option>Salamanca</option>
                                    <option>Santa Cruz de Tenerife</option>
                                    <option>Segovia</option>
                                    <option>Sevilla</option>
                                    <option>Soria</option>
                                    <option>Tarragona</option>
                                    <option>Teruel</option>
                                    <option>Toledo</option>
                                    <option>Valencia</option>
                                    <option>Valladolid</option>
                                    <option>Zamora</option>
                                    <option>Zaragoza</option>
                                    <option>Ceuta</option>
                                    <option>Melilla</option>
                                </select>

                                @if ($errors->has('province'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('province') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">Ciudad:</label>

                            <div class="col-md-6">
                                <select id="city" class="form-control" name="city" required>
                                    <option></option>
                                </select>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('zipCode') ? ' has-error' : '' }}">
                            <label for="zipCode" class="col-md-4 control-label">Código postal:</label>

                            <div class="col-md-6">
                                <input id="zipCode" type="text" class="form-control" name="zipCode" value="{{ old('zipCode') }}">

                                @if ($errors->has('zipCode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zipCode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phoneNumber') ? ' has-error' : '' }}">
                            <label for="phoneNumber" class="col-md-4 control-label">Teléfono:</label>

                            <div class="col-md-6">
                                <input id="phoneNumber" type="tel" class="form-control" name="phoneNumber" value="{{ old('phoneNumber') }}">

                                @if ($errors->has('phoneNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phoneNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar contraseña:</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrarse
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
        var citiesByProvince = {
            Albacete: ["Abengibre","Alatoz","Albacete","Albatana","Alcalá del Júcar","Alcaraz","Almansa","Alpera","Ayna","Balazote","Barrax","Bienservida","Bonete","Casas-Ibáñez","Caudete","Chinchilla de Montearagón","El Bonillo","Elche de la Sierra","Férez","Fuensanta","Fuente Álamo","Fuentealbilla","Hellín","Higueruela","Hoya-Gonzálo","La Gineta","La Roda","Letur","Lezuza","Liétor","Madrigueras","Mahora","Minalla","Molinicos","Montealegre del Castillo","Munera","Nerpio","Ontur","Ossa de Montiel","Peñas de San Pedro","Povedilla","Pozo Cañada","Riópar","Robledo","Salobre","Socovos","Tarrazona de la Mancha","Tobarra","Villamalea","Villarrobledo","Yeste"],
            Alicante: ["Adsubia","Agost","Alcoy","Alicante","Alfaz del Pi","Almoradí","Altea","Aspe","Bañeres","Benidorm","Benisa","Biar","Busot","Callosa de Ensarriá","Callosa de Segura","Calpe","Campello","Castalla","Concentaina","Crevillente","Denia","Dolores","Elche","Elda","Guadalest","Guardamar del Segura","Ibi","Jalón","Jávea","Jijona","La Nucia","Monóvar","Monforte del Cid","Muchamiel","Muro de Alcoy","Novelda","Orihuela","Pego","Petrel","Pilar de la Horadada","Rojales","Salinas","San Fulgencio","San Juan de Alicante","San Vicente del Raspeig","Santa Pola","Sax","Teulada","Torrevieja","Villajoyosa","Villena"],
            Almería: ["Abla","Adra","Albox","Alhama de Almería","Almería","Antas","Arboleas","Bacares","Balanegra","Baños de Ebro","Benahadux","Benitagla","Berja","Canjáyar","Carboneras","Chirivel","Cuevas de Almanzora","Dalías","El Ejido","Enix","Fines","Fiñana","Fondón","Gádor","Garrucha","Gérgal","Huércal-Overa","La Mojonera","Laujar de Andarax","Macael","María","Mojácar","Nacimiento","Níjar","Olula del Río","Oria","Pechina","Pulpí","Purchena","Rioja","Roquetas de Mar","San José","Serón","Sorbas","Tabernas","Tijola","Turre","Vélez-Blanco","Vélez-Rubio","Vera","Viator","Vícar"],
            Álava: ["Alegría de Álava","Amurrio","Añana","Aramayona","Arceniega","Armiñón","Arraya-Maestu","Arrazua-Ubarrundia","Aspárrena","Ayala","Azáceta","Barrundia","Berantevilla","Bernedo","Campezo","Cigoitia","Cripán","Cuartango","Elburgo","Elciego","Elvillar","Fontecha","Iruña de Oca","Iruraiz-Gauna","Labastida","Lagrán","Laguardia","Lanciego","Lantarón","Lapuebla de labarca","Leza","Llodio","Navaridas","Oquendo","Oyón","Peñacerrada","Ribera Alta","Ribera Baja","Salvatierra","Samaniego","San Millán","Urcabustaiz","Valdegovia","Villabuena de Álava","Villarreal de Álava","Villodas","Yécora","Zalduendo de Álava","Zambrana","Zuya"],
            Asturias: ["Aller","Amieva","Arriondas","Avilés","Cangas del Garjea","Carreño","Caso","Castrillón","Castropol","Coaña","Corvera de Asturias","Cudillero","Degaña","Gijón","Gozón","Grado","Langreo","Laviana","Lena","Llanera","Llanes","Mieres","Morcín","Nava","Navia","Noreña","Onís","Oviedo","Parres","Peñamellera Alta","Peñamellera Baja","Piloña","Ponga","Pravia","Ribadedeva","Ribadesella","Riosa","Salas","San Martín del Rey Aurelio","San Tirso de Abres","Siero","Somiedo","Soto del Barco","Tapia de Casariego","Taramundi","Teverga","Tineo","Valdés","Vegadeo","Villanueva de Oscos","Villaviciosa"],
            Ávila: ["Adanero","Aldeaseca","Arenas de San Pedro","Arévalo","Ávila","Becedas","Blasconuño de Matacabras","Bohoyo","Bonilla de la Sierra","Burgohondo","Candeleda","Cardeñosa","Casasola","Casavieja","Cebreros","El Arenal","El Barco de Ávila","El Barraco","El Hoyo de Pinares","El Tiemblo","Fontiveros","Gavilanes","Guisando","Herradón de Pinares","Hoyos del Espino","Horcajo de las Torres","La Adrada","La Colilla","La Horcajada","Las Berlanas","Las Navas del Marqués","Lanzahita","Madrigal de las Altas Torres","Maello","Martiherrero","Mijares","Mingorria","Mombeltrán","Nava de Arévalo","Navalperal de Pinares","Navaluenga","Pedro Bernardo","Piedrahita","Piedralaves","Poyales del Hoyo","San Bartolomé de Pinares","San Estebán del Valle","Sanchidrián","Solosancho","Sotillo de la Adrada","Tornadizos de Ávila"]
        }
        function makeSubmenu(value) {
            var citiesOptions = "";
            for(cityId in citiesByProvince[value]) {
                citiesOptions+="<option>"+citiesByProvince[value][cityId]+"</option>";
            }
            document.getElementById("city").innerHTML = citiesOptions;
        }
</script>
@endsection
