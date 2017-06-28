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
        $user->province = $request->input('province');
        $user->city = $request->input('city');
        $user->zipCode = $request->input('zipCode');
        $user->phoneNumber = $request->input('phoneNumber');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->type = 'cliente';
        $user->save();

        return redirect('home');
    }

    //Método para mostrar la vista al usuario según los permisos que tenga
    public function show(){
        $user = Auth::user();
        if($user->type == 'cliente'){
            return view('users.customers.show', (['user' => $user]));
        }
        else {
            return view('auth.login');
        }
    }
    
    //Método para recuperar el usuario autenticado y mostrarle la vista de editar perfil
    public function edit(){
		$user = Auth::user();
        if($user->type == 'cliente'){
            return view('users.customers.edit', (['user' => $user]));
        }
	}
    
    //Método para actualizar la información de un usuario
    public function update(Request $request){
        $user = Auth::user();

        $this->validate($request, [
			'nif' => 'max:9',
            'name' => 'max:20',
            'surname' => 'max:30',
            'address' => 'max:100',
            'province' => 'max:20',
            'city' => 'max:30',
            'zipCode' => 'max:5',
		]);

        if($request->input('nif') != ''){
            $user->nif = $request->input('nif');
        }
        if($request->input('name') != ''){
            $user->name = $request->input('name');
        }
        if($request->input('surname') != ''){
            $user->surname = $request->input('surname');
        }
        if($request->input('address') != ''){
            $user->address = $request->input('address');
        }
        if($request->input('province') != ''){
            $user->province = $request->input('province');
        }
        if($request->input('city') != ''){
            $user->city = $request->input('city');
        }
        if($request->input('zipCode') != ''){
            $user->zipCode = $request->input('zipCode');
        }
        if($request->input('phoneNumber') != ''){
            $this->validate($request, [
                'phoneNumber' => 'digits:9'
		    ]);
            $user->phoneNumber = $request->input('phoneNumber');
        }
        if($request->input('email') != ''){
            $this->validate($request, [
                'email' => 'email|max:255|unique:users',
		    ]);
            $user->email = $request->input('email');
        }
        $user->save();

        return redirect()->action('UsersController@show')->with('message', 'Perfil actualizado');
    }

    //Método para borrar a un usuario
    public function destroy($id){
        $userType = Auth::user()->type;
        $user = User::find($id);
        $user->delete();
        if($userType == 'cliente'){
            return redirect('home');
        }
    }

}
