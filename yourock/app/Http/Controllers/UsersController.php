<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use DB;

class UsersController extends Controller
{
    //Método para guardar un usuario
    public function store(Request $request) {
        $user = new User;
        $user->nif = $request->input('nif');
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->province = $request->input('province');
        $user->zipCode = $request->input('zipCode');
        $user->phoneNumber = $request->input('phoneNumber');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->type = 'Cliente';
        //$user->type = $request->input('type');
        $user->save();

        return redirect()->action('UsersController@show');
    }

    //Método para mostrar la vista al usuario según los permisos que tenga
    public function show(){
        $user = Auth::user();
        if(Auth::guest()){
            return view('auth.login');
        }
        if($user->type == 'cliente'){
            return view('clients.show', (['user' => $user]));
        }
    }

    //Método para recuperar el usuario autenticado y mostrarle la vista de editar perfil
    public function edit(){
		$user = Auth::user();
		return view('clients.edit', (['user' => $user]));
	}

    //Método para actualizar la información de un usuario
    public function update(Request $request){
        $user = Auth::user();
        $user->nif = $request->input('nif');
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->province = $request->input('province');
        $user->zipCode = $request->input('zipCode');
        $user->phoneNumber = $request->input('phoneNumber');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->type = $request->input('type');
        $user->save();

        return redirect()->action('UsersController@show');
    }
}
