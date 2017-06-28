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
                                <input id="nif" type="text" class="form-control" name="nif" value="{{ old('nif') }}" required>

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
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

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
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required>

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
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>

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
                                <select id="province" class="form-control" name="province" size="1" onchange="makeSubmenu(this.value)">
                                    <option selected>Albacete</option>
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
                                <select id="city" class="form-control" name="city" size="1">
                                    <option selected>Alcoy</option>
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
                                <input id="zipCode" type="text" class="form-control" name="zipCode" value="{{ old('zipCode') }}" required>

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
                                <input id="phoneNumber" type="number" class="form-control" name="phoneNumber" value="{{ old('phoneNumber') }}" required>

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
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                                <input id="password" type="password" class="form-control" name="password" required>

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
            Albacete: ["hola","hola2"],
            Alicante: ["Adsubia","Agost","Alcoy","Alicante","Alfaz del Pi","Almoradí","Altea","Aspe","Benidorm","Elche","Denia","Torrevieja","Jávea","Orihuela","Calpe","Villajoyosa","Villena","Elda","Benisa","Santa Pola","San Juan de Alicante","Guardamar del Segura","Campello","Petrel","Guadalest","Teulada","San Vicente del Raspeig","Castalla","Jijona","Crevillente","Novelda","Rojales","Concentaina","Jalón","Pego","Muchamiel","San Fulgencio","Pilar de la Horadada","Sax","Ibi","La Nucia","Biar","Salinas","Muro de Alcoy","Busot","Bañeres","Monóvar","Callosa de Ensarriá","Callosa de Segura","Elda","Dolores","Monforte del Cid"],
            Almería: ["Abla","Adra","Albox","Alhama de Almería","Almería","Antas","Arboleas","Bacares","Balanegra","Benahadux","Benitagla","Berja","Roquetas de Mar","Níjar","El Ejido","Vera","Mojácar","Huércal-Overa","Tabernas","Carboneras","Cuevas de Almanzora","Garrucha","Gádor","Pulpí","Sorbas","María","Macael","Vélez-Blanco","Dalías","Laujar de Andarax","Vélez-Rubio","Pechina","Olula del Río","Gérgal","Purchena","Fondón","Canjáyar","Chirivel","Viator","Fiñana","Serón","San José","Tijola","Fines","Turre","Enix","Vícar","La Mojonera","Nacimiento","Oria","Rioja"],
            Álava: ["Alegría de Álava","Amurrio","Añana","Aramayona","Arceniega","Armiñón","Arraya-Maestu","Arrazua-Ubarrundia","Aspárrena","Ayala","Azáceta","Baños de Ebro","Barrundia","Berantevilla","Bernedo","Campezo","Cigoitia","Cripán","Cuartango","Elburgo","Elciego","Elvillar","Fontecha","Iruña de Oca","Iruraiz-Gauna","Labastida","Lagrán","Laguardia","Lanciego","Lantarón","Lapuebla de labarca","Leza","Llodio","Navaridas","Oquendo","Oyón","Peñacerrada","Ribera Alta","Ribera Baja","Salvatierra","Samaniego","San Millán","Urcabustaiz","Valdegovia","Villabuena de Álava","Villarreal de Álava","Villodas","Yécora","Zalduendo de Álava","Zambrana","Zuya"]
        }
        function makeSubmenu(value) {
            if(value.length==0)
                document.getElementById("city").innerHTML = "<option></option>";
            else {
                var citiesOptions = "";
                for(cityId in citiesByProvince[value]) {
                    citiesOptions+="<option>"+citiesByProvince[value][cityId]+"</option>";
                }
                document.getElementById("city").innerHTML = citiesOptions;
            }
        }
        /*
        function displaySelected() {
            var country = document.getElementById("countrySelect").value;
            var city = document.getElementById("citySelect").value;
            alert(country+"\n"+city);
        }
        function resetSelection() {
            document.getElementById("countrySelect").selectedIndex = 0;
            document.getElementById("citySelect").selectedIndex = 0;
        }
        */
</script>
@endsection
